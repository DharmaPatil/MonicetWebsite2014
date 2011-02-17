<?php


/**
 * Skeleton subclass for performing query and update operations on the 'vessel' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * Fri Dec 18 17:25:54 2009
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class VesselPeer extends BaseVesselPeer {

  public static function doSelectListByCompany() {
  	$user = sfContext::getInstance()->getUser()->getGuardUser();
    $company = CompanyPeer::doSelectUserCompany($user->getId());
  	$c = new Criteria();
    if ($company) {
        $c->add(VesselPeer::COMPANY_ID, $company->getId(), Criteria::EQUAL);
    }
    return mfUtils::fromObjectsToArrayWithEmpty(self::doSelect($c));
  }
  
  public static function doSelectByCompany() {
        $user = sfContext::getInstance()->getUser()->getGuardUser();
        $company = CompanyPeer::doSelectUserCompany($user->getId());
        if ($company) {
            $query = VesselQuery::create()
                ->filterByCompanyId($company->getId())
                ->paginate();
        } else {
        	$query = VesselQuery::create()
                ->paginate();
        }
        return $query;
    }
  
  public static function getBarcoByNome($nome){
    $c = new Criteria();
    $c->add(VesselPeer::NAME, $nome, Criteria::LIKE);
    $b = VesselPeer::doSelect($c);
    return $b[0];
  }
  
  
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    $user = sfContext::getInstance()->getUser()->getGuardUser();
    $company = CompanyPeer::doSelectUserCompany($user->getId());
    if ($company) {
        $criteria->addAnd(VesselPeer::COMPANY_ID, $company->getId(), Criteria::EQUAL);
    }
    $criteria->addJoin(VesselPeer::COMPANY_ID, CompanyPeer::ID, Criteria::LEFT_JOIN);
    $criteria->addAscendingOrderByColumn(CompanyPeer::NAME);
    return VesselPeer::populateObjects(VesselPeer::doSelectStmt($criteria, $con));
  }
  
  
  public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
  {
    return count(VesselPeer::doSelect($criteria));
  }
  
  
  
} // VesselPeer
