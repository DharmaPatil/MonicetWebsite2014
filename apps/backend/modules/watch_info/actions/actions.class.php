<?php

require_once dirname(__FILE__).'/../lib/watch_infoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/watch_infoGeneratorHelper.class.php';

/**
 * watch_info actions.
 *
 * @package    monicet
 * @subpackage watch_info
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class watch_infoActions extends autoWatch_infoActions
{
	public function executeListShowGrid(sfWebRequest $request) {
		$wiid = $request->getParameter('id');
		$this->redirect('watch_info/sheet?wiid=' . $wiid);
	}
		  
	public function executeListShowMap(sfWebRequest $request) {
		$wiid = $request->getParameter('id');
		$this->redirect('@watchInfoMap?watch_info_id=' . $wiid);
	}
	
	protected function processForm(sfWebRequest $request, sfForm $form) {
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';
			$watchInfo = $form->save();
			$this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $watchInfo)));
			
			if ($request->hasParameter('_save_and_add')) {
				$this->getUser()->setFlash('notice', $notice.' You can add another one below.');
				$this->redirect('@watch_info_new');
			}
			else {
				$this->getUser()->setFlash('notice', $notice);
				$this->redirect('watch_info/sheet?wiid=' . $watchInfo->getId());
			}
		}
		else {
			$this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
		}
	}
	
	public function executeListRecords(sfWebRequest $request)
	{
	
	}
	  
	public function executeIdentifier(sfWebRequest $request)
	{
	    return $this;
	}
	
	public function executeSheet(sfWebRequest $request)
	{
	    $this->watch_info = WatchInfoQuery::create()
	                            ->filterById($request->getParameter("wiid"))
	                            ->findOne();
	    
	    $user = $this->getUser()->getGuardUser();
	    $this->user_company = CompanyPeer::doSelectUserCompany($user->getId());
	    $this->forward404Unless( $user->getIsSuperAdmin() || $this->watch_info->getCompanyId() == $this->user_company->getId() );
	    
	    $this->sightings = $this->watch_info->getWatchSightings();
	    $this->n_lines = count($this->sightings);
	    
	    $this->wi_form = new WatchInfoForm($this->watch_info);
	}
	
	public function executeCoordAjax(sfWebRequest $request){
	    $companhia = CompanyPeer::retrieveByPk($request->getParameter('company_id'));
	    $this->latitude = $companhia->getBaseLatitude();
	    $this->longitude = $companhia->getBaseLongitude();
	}
	
	
	public function executeIndex(sfWebRequest $request)
	{
	    
	    // sorting
	    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
	    {
	      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
	    }
	
	    // pager
	    if ($request->getParameter('page'))
	    {
	      $this->setPage($request->getParameter('page'));
	    }
	
	    $this->pager = $this->getPager();
	    $this->sort = $this->getSort();
	}
	
	public function executeValidation(sfWebRequest $request){ 
	    $this->valid = $request->getParameter('valid');
	    $this->comments = $request->getParameter('comments');
	    
	    $watch_info = WatchInfoQuery::create()
	                            ->filterById($request->getParameter('watch_info_id'))
	                            ->findOne();
	    if(strcmp($this->valid,'true') == 0){
	        $watch_info->setValid(1);
	    }else{
	        $watch_info->setValid(0);
	    }
	    $watch_info->setComments($this->comments);
	    $watch_info->save();
	    
	    return sfView::NONE;
	}
    
    public function executeDeleteLineAjax(sfWebRequest $request) {
        $sighting_id = $request->getParameter('sighting_id');
        
        if ($sighting = WatchSightingPeer::retrieveByPK($sighting_id)) {
            $sighting->delete();
        }
        
        
        return sfView::NONE;
    }
	
    
    public function executeDownload(sfWebRequest $request){
    
        if($request->getParameter('month') && $request->getParameter('month') != 0) {
            
            $year = $request->getParameter('year');
            $month = $request->getParameter('month');
            
            // criar o ficheiro excel
            $objPHPExcel = $this->generateExportExcelObject($year, $month);
            
            $this->filename = $year;
            
            // download do ficheiro sem o guardar
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$this->filename.'.xls"');
            header('Cache-Control: max-age=0');
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');
            return sfView::NONE;
            
            
        }else {
          if(!file_exists(sfConfig::get('sf_upload_dir').'/export_watch_info/'.$request->getParameter('year').'.xls')) {
            set_time_limit(600);
            
            $year = $request->getParameter('year');
            
            // criar o ficheiro excel
            $objPHPExcel = $this->generateExportExcelObject($year);
            
            $this->filename = $year;
            
            // guardar e fazer download do ficheiro
            $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
            $objWriter->save(sfConfig::get('sf_upload_dir').'/export_watch_info/'.$this->filename.'.xls');
            chmod(sfConfig::get('sf_upload_dir').'/export_watch_info/'.$this->filename.'.xls', 0777);
            $this->filedir = '/uploads/export_watch_info/'.$this->filename.'.xls';
            
          } else {
            
            // se o ficheiro existe, envia o ficheiro existente
            $this->filename = $request->getParameter('year');
            $this->filedir = '/uploads/export_watch_info/'.$this->filename.'.xls';
          }
        }
        
    }
    
    
    public function generateExportExcelObject($year, $month = null) {
      
      // buscar os dados
      $c = new Criteria();
      
      if(!is_null($month)){
        if($month < 10) $month = '0'.$month;
        $c->add(WatchInfoPeer::DATE, $year.'-'.$month.'-%', Criteria::LIKE);
        
      } else {
        $c->addAnd(WatchInfoPeer::DATE, $year.'-1-1', Criteria::GREATER_EQUAL);
        $c->addAnd(WatchInfoPeer::DATE, $year.'-12-31', Criteria::LESS_EQUAL);
      }
      
      $dados = WatchInfoPeer::doSelect($c);
        
      $cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_discISAM;
      PHPExcel_Settings::setCacheStorageMethod($cacheMethod);
        
      // criação do ficheiro Excel (.xls)
      $objPHPExcel = new PHPExcel();
      $objPHPExcel->getProperties()
      ->setCreator("Monicet")
      ->setLastModifiedBy("Monicet")
      ->setTitle("Mapa de Vigias")
      ->setSubject("Mapa de Vigias")
      ->setDescription("Exportação de vigias do Monicet")
      ->setKeywords("Mapa Vigias")
      ->setCategory("Vigias");
      $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
      $objPHPExcel->getDefaultStyle()->getFont()->setSize(10);
      $objPHPExcel->getDefaultStyle()->getFont()->setColor(new PHPExcel_Style_Color('33333333')); 
      
      // edição do conteúdo do ficheiro
        // headers
      
      $cena = $objPHPExcel->getActiveSheet();
      
      $cena->getRowDimension(2)->setRowHeight(30);
      $cena->getStyle('A2:V2')
          ->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
      
      $headers = array();
      $headers[0] = array();
      
      $cena->setCellValueByColumnAndRow(0,2, 'Data');
        
      $headers[0][] = 'Cod.';
      $headers[0][] = 'Hora';
      $headers[0][] = 'Vis.';
      $headers[0][] = 'Espécie';
      $headers[0][] = 'Grupo';
      $headers[0][] = 'Total';
      $headers[0][] = 'Comp.';
      $headers[0][] = 'Dir.';
      $headers[0][] = 'Horizontal';
      $headers[0][] = 'Vertical';
      $headers[0][] = 'Embarcação';
      $headers[0][] = 'Comentários';
      $cena->fromArray($headers,null,'B2');
      
      $cena->getStyle('A1:V1')->getFont()->setBold(true);
      $cena->getStyle('A1:V1')->getFont()->setSize(12);
      $cena->getStyle('A2:V2')->getFont()->setBold(true);
      $cena->getStyle('A2:V2')->getFont()->setSize(12);
      
      
      
      $letras = array('A','B','C','D','E','F','G','H','I','J','K','L','M');
      foreach($letras as $letra){
        $cena->getColumnDimension($letra)->setAutoSize(true);
      }
      
        // conteudo
      $l = 3;
      $l_arr = 0;
      $array = array();
      
      foreach($dados as $wi){
        
        $cena->setCellValueByColumnAndRow(0,$l, $wi->getDate());
        $sightings = WatchSightingPeer::doSelectSightingsByWatchInfoId($wi->getId());
        foreach($sightings as $sighting){
          
          // criar o array para escrever no ficheiro
          $array[$l_arr] = array();
          $array[$l_arr][] = $sighting->getwatchCode()->getAcronym();
          $array[$l_arr][] = $sighting->getTime();
          if($sighting->getWatchVisibilityId()) $array[$l_arr][] = $sighting->getWatchVisibility()->getCode(); else $array[$l_arr][] = null;
          if($sighting->getSpecieId()) $array[$l_arr][] = $sighting->getSpecie()->getCode(); else $array[$l_arr][] = null;
          $array[$l_arr][] = $sighting->getGroup();
          $array[$l_arr][] = $sighting->getTotal();
          $array[$l_arr][] = $sighting->getBehaviourId();
          if($sighting->getDirectionId()) $array[$l_arr][] = $sighting->getDirection()->getCode(); else $array[$l_arr][] = null;
          $array[$l_arr][] = $sighting->getHorizontal();
          $array[$l_arr][] = $sighting->getVertical();
          if($sighting->getVesselId()) $array[$l_arr][] = $sighting->getVessel()->getName(); else $array[$l_arr][] = null;
          $array[$l_arr][] = $sighting->getComments();
          
          $l++;
          $l_arr++;
        }
        
      }
      
      // escrever o array no ficheiro
      $cena->fromArray($array,null,'B3');
      
      return $objPHPExcel;
    }
    
    
    public function executeExport(sfWebRequest $request) {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(WatchInfoPeer::DATE);    
        $wis = WatchInfoPeer::doSelect($c);
        
        $temp = substr($wis[0]->getDate(),0,4);
        $this->years = array();
        $this->years[] = $temp;
        foreach($wis as $wi) {
          if(substr($wi->getDate(),0,4) != $temp) {
            $temp = substr($wi->getDate(),0,4);
            $this->years[] = $temp;
          }
        }
    }
	
}