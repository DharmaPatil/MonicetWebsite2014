<?php


/**
 * Skeleton subclass for performing query and update operations on the 'record' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * Fri Dec 18 17:25:55 2009
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class RecordPeer extends BaseRecordPeer {
	
	public static function doSelectByGeneralInfo() {
		$id = sfContext::getInstance()->getRequest()->getParameter('gi_id');
		$query = RecordQuery::create()
		  ->filterByGeneralInfoId($id)
		  ->paginate();
		return $query;
	}
  
  
  public static function doSelectRecordsByGeneralInfoId($giid){
    $query = RecordQuery::create()
            ->filterByGeneralInfoId($giid)
            ->orderById()
            ->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
    return $query->find();
    
//    $c = new Criteria();
//    $c->add(RecordPeer::GENERAL_INFO_ID, $giid);
//    $c->addAscendingOrderByColumn(RecordPeer::ID);
//    return RecordPeer::doSelect($c);
  }
  
//  public static function deleteIgnoredRecordsSightings($recordId, $giid){
//    printf("#%s#%s#", $recordId, $giid);
//    $items = RecordQuery::create()
//            ->useGeneralInfoQuery()
//              ->filterById($giid)
//            ->endUse()
//            ->filterById($recordId, Criteria::GREATER_THAN)
//            ->find();
//        
//    foreach($items as $record){
//      $sighting = SightingPeer::retrieveByRecordId($record->getId());
//      $sighting->delete();
//      $record->delete();
//    }
//  }
  
} // RecordPeer
