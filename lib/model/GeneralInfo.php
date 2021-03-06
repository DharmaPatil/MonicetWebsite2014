<?php


/**
 * Skeleton subclass for representing a row from the 'general_info' table.
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
class GeneralInfo extends BaseGeneralInfo {
  public function __toString()
  {
    return $this->getCode();
  }
  
  
  public function getRecords($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collRecords || null !== $criteria) {
      if ($this->isNew() && null === $this->collRecords) {
        // return empty collection
        $this->initRecords();
      } else {
        $collRecords = RecordQuery::create(null, $criteria)
          ->filterByGeneralInfo($this)
          ->orderBy('Id')
          ->find($con);
        if (null !== $criteria) {
          return $collRecords;
        }
        $this->collRecords = $collRecords;
      }
    }
    return $this->collRecords;
  }
  
  
  public function getSpecies(){
    
    $sightings = SightingQuery::create()
    ->useRecordQuery()
      ->filterByGeneralInfoId($this->getId())
    ->endUse()
    ->orderBy('Id','asc')
    ->find();
    
    $species = array();
    
    foreach($sightings as $s){
      if($s->getSpecieId()) $species[] = SpeciePeer::retrieveByPk($s->getSpecieId());
    }
    
    return $species;
  }
  
    public function getTotalSighted($specie_id = null) {
        $sightings = SightingQuery::create()
        ->useRecordQuery()
            ->filterByGeneralInfoId($this->getId())
        ->endUse()
        ->orderBy('Id','asc')
        ->find();
        
        $total = 0;
        
        foreach($sightings as $s){
            if ($s->getTotal()){
                if ($specie_id) {
                    if ($s->getSpecieId() == $specie_id) {
                        $total += $s->getTotal();
                    }
                }
                else {
                    $total += $s->getTotal();
                } 
            }            
        }
        
        return $total;
    }
	
	public function getFirstHour() {
		$collRecord = RecordQuery::create()
          ->filterByGeneralInfoId($this->getId())
		  ->filterByCodeId(1)
          ->findOne();
			
		return substr($collRecord->getTime(), 0, 5);
	}
  
  
  
} // GeneralInfo
