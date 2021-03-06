<?php

class ObservationPhotoTailMarkForm extends BaseObservationPhotoTailMarkForm
{
  public function configure()
  {
    $this->widgetSchema->getFormFormatter()->setTranslationCatalogue('observation_photo');
    
    $this->widgetSchema['observation_photo_tail_id'] = new sfWidgetFormInputHidden();
    $request = sfContext::getInstance()->getRequest();
    $module = sfContext::getInstance()->getModuleName();
    if( $module == 'prObservationPhoto' ){
      $OBPhoto = ObservationPhotoPeer::retrieveByPK( $request->getParameter('id') ); 
      $cells = PatternCellTailPeer::getForSelect($OBPhoto->getSpecieId(), false, '');
      $toCells = PatternCellTailPeer::getForSelect($OBPhoto->getSpecieId(), true, '');//this has an extra "-----" element

      $c = new Criteria();
      $c->add(ObservationPhotoTailPeer::PHOTO_ID, $OBPhoto->getId(), Criteria::EQUAL);
      $OPTail = ObservationPhotoTailPeer::doSelectOne($c);
      
      if($OPTail){
        $marks = $OPTail->getObservationPhotoTailMarks();

          if(count($marks)){
            $keys = array();
              
              foreach( $marks as $mark ){
                
                //extract the PatternCellTail object tied to the fromCell value of the mark - it can't be NULL
                $fromCellPCTail = PatternCellTailPeer::retrieveByPK($mark->getPatternCellTailId());
                
                //get its id and its name
                $fromCellId = $fromCellPCTail->getId();//optional
                $fromCellName = $fromCellPCTail->getName();

                if($mark->getToCellId()){
                  //extract the PatternCellTail object tied to the toCell value of the mark - it can't be NULL, if $mark->getToCellId() is not NULL
                  $toCellPCTail = PatternCellTailPeer::retrieveByPK($mark->getToCellId());
                  $toCellId = $toCellPCTail->getId();
                  $toCellName = $toCellPCTail->getName();

                  //next steps are followed in the assumption that names might not be written in an alphabetical order in the PatternCellTailPeer... 
                  //table (on line 99 I might have K2 and on line 100 I1), that is why ids are not used here
                  //result of if > 0 - if string1 is greater than string2, eg B2 > A2, so swap names and ids
                  if(strcasecmp($fromCellName,$toCellName) > 0){
                    $tmp = $fromCellName;
                    $fromCellName = $toCellName;
                    $toCellName = $tmp;
                    
                    $tmp = $fromCellId;
                    $fromCellName = $toCellId;
                    $toCellId = $tmp;
                  }

                  //remove the drop-down menu letter choices choices for the new mark, in case the photo already had marks with those letters (the rule is only one mark per letter)
                  foreach($cells as $key => $cell){
                    if( strcasecmp(substr($cell, 0, 1),substr($fromCellName, 0, 1)) >= 0 && //the letter of the cell (eg the B from B1) is the same or is after the letter of $fromCellName 
                        strcasecmp(substr($cell, 0, 1),substr($toCellName, 0, 1)) <= 0    //the letter of the cell is the same or is before the letter of $toCellName 
                      ){
                          $keys[] = $key;
                    }
                  }
                }
                else { //for eg., the mark was of the Larga C1 type, so only remove C1 and C2 from $cells
                    foreach($cells as $key => $cell){
                        if( strcasecmp(substr($cell, 0, 1),substr($fromCellName, 0, 1)) == 0 ){
                            $keys[] = $key;
                        }
                    }
                }
              }
              
              //cleanse cells
              if(!empty($keys)){//$keys will never contain 0 as an element, as it contains the pattern cell ids, which are > 0
                foreach(array_unique($keys) as $key){
                  unset($cells[$key]);
                  unset($toCells[$key]);
                }
              }
          }//end of if(count($marks))
        }//end of if($OPTail)

      $this->widgetSchema['pattern_cell_tail_id'] = new sfWidgetFormChoice(array(
          'choices' => $cells,
      ));
      $this->validatorSchema['pattern_cell_tail_id'] = new sfValidatorChoice(array(
          'choices' => array_keys($cells),
      ));
      
      $this->widgetSchema['to_cell_id'] = new sfWidgetFormChoice(array(
          'choices' => $toCells,
      ));
      $this->validatorSchema['to_cell_id'] = new sfValidatorChoice(array(
          'choices' => array_keys($toCells),
          'required' => false
      ));
    }
    
    $this->widgetSchema->moveField('pattern_cell_tail_id', sfWidgetFormSchema::AFTER, 'is_deep');
    
    $oneRequired = new sfValidatorCallback(array( 'callback' => array($this, 'checkOneRequired') ));
    
    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        $oneRequired
      ))
    );
  }
  
  public function checkOneRequired($validator, $values) {
    if( !$values['is_wide'] && !$values['is_deep']) {
      throw new sfValidatorError($validator, '<br/> - As opções "Larga" e "Estreita", uma delas tem que estar seleccionada.');
    }
    if( $values['is_wide'] && $values['is_deep']) {
      throw new sfValidatorError($validator, '<br/> - As opções "Larga" e "Estreita", só uma delas pode que estar seleccionada.');
    }
    return $values;
  }
}
