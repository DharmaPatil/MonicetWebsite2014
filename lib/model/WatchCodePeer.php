<?php


/**
 * Skeleton subclass for performing query and update operations on the 'watch_code' table.
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
class WatchCodePeer extends BaseWatchCodePeer {
	public static function doSelectAll()
	{
	    $c = new Criteria();
	    $c->addAscendingOrderByColumn(WatchCodePeer::ACRONYM);
	    return self::doSelect($c);
	}
	
	public static function doSelectByAcronyms($acronyms)
	{
	    $c = new Criteria();
	    $c->addAscendingOrderByColumn(WatchCodePeer::ACRONYM);
	    foreach($acronyms as $acronym) {
	    	$c->addOr(WatchCodePeer::ACRONYM, $acronym, Criteria::EQUAL);
	    }
	    return self::doSelect($c);
	}
	
	public static function doSelectListAll()
	{
	    return mfUtils::fromObjectsToArrayWithEmpty(self::doSelectAll());
	}
	
	public static function getByAcronym($code){
	    $c = new Criteria();
	    $c->add(WatchCodePeer::ACRONYM, $code);
	    $b = WatchCodePeer::doSelect($c);
	    return $b[0];
	}
} // WatchCodePeer
