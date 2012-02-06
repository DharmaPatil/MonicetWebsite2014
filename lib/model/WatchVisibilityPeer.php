<?php


/**
 * Skeleton subclass for performing query and update operations on the 'watch_visibility' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Wed Oct 19 17:11:57 2011
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class WatchVisibilityPeer extends BaseWatchVisibilityPeer {
  
  public static function getByCode($code){
    return WatchVisibilityQuery::create()->filterByCode($code)->findOne();
  }
  
  public static function getVisibilities(){
    $c = new Criteria();
    $c->addAscendingOrderByColumn(WatchVisibilityPeer::ID);
    return WatchVisibilityPeer::doSelect($c);
  }
} // WatchVisibilityPeer
