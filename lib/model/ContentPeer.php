<?php


/**
 * Skeleton subclass for performing query and update operations on the 'content' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Wed Apr 13 16:26:34 2011
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class ContentPeer extends BaseContentPeer {
  public static function getContent($section){
    $c = new Criteria();
    $c->add(ContentPeer::SECTION, $section, Criteria::LIKE);
    return ContentPeer::doSelectOne($c);
  }
} // ContentPeer
