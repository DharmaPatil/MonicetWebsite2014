<?php


/**
 * Skeleton subclass for performing query and update operations on the 'album' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Sat Apr 10 09:39:38 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class AlbumPeer extends BaseAlbumPeer {
  public static function doSelectAll()
  {
    $c = new Criteria();
    $c->addDescendingOrderByColumn(AlbumPeer::UPDATED_AT);
    $c->where(AlbumPeer::PUBLISH_DATE, true);
    return self::doSelectWithI18n($c);
  }
  
  public static function getCriteria()
  {
    $user = sfContext::getInstance()->getUser();
    $request = sfContext::getInstance()->getRequest();
    
    $criteria = AlbumQuery::create()
      ->filterByIsPublic(true)
      ->orderByPublishDate(Criteria::DESC)
      ->useAlbumI18nQuery()
        ->filterByCulture($user->getCulture())
      ->enduse();
    return $criteria;
  }
  
  public static function getPager()
  {     
    $request = sfContext::getInstance()->getRequest();
    $criteria = self::getCriteria();
    return $criteria->paginate($request->getParameter('page', 1), 10);
  }
} // AlbumPeer