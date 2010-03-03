<?php
/**
 * Skeleton subclass for performing query and update operations on the 'user' table.
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Mar  2 12:31:03 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class UserPeer extends BaseUserPeer {
	/*
	 * método que irá ser invocado quando um utilizador (classe User) for gravado na base de dados
	 */
  public static function setPermissions(sfEvent $event)
  {
  	$sf_guard_user = $event->getSubject();
  	// definir todas as permissões base para os administradores
  	if ( $sf_guard_user->hasPermission('administrator') ){
  		$permissions = array(
  		  'association.*',
  		  'behaviour.*',
  		  'code.*',
  		  'company.*',
  		  'consorcium_element.*',
  		  'general_info.*',
  		  'news_article.*',
  		  'record.*',
  		  'sea_state.*',
  		  'utilizador.*',
  		  'sighting.*',
  		  'specie_group.*',
  		  'specie.*',
  		  'vessel.*',
  		  'visibility.*'
  		);
  		self::addPermissions($permissions, $sf_guard_user);
  	}
    if ( $sf_guard_user->hasPermission('boss') ){
      // definir todas as permissões base para os patrões
      $permissions = array(
        'specie.*'
      );
    	self::addPermissions($permissions, $sf_guard_user);
    }
    if ( $sf_guard_user->hasPermission('employee') ){
    	// definir todas as permissões base para os empregados
      $permissions = array(
      );
    	self::addPermissions($permissions, $sf_guard_user);
    }
  }
  public static function addPermissions( Array $permissions, $sf_guard_user = null )
  {
  	$sf_guard_user = is_null( $sf_guard_user) ? sfContext::getInstance()->getUser()->getGuardUser() : $sf_guard_user;
    foreach( $permissions as $permission ){
      $p = sfGuardPermissionPeer::retrieveByName($permission);
      if ( $p ){
        $up = sfGuardUserPermissionPeer::retrieveByPk($sf_guard_user->getId(), $p->getId());
        if ( ! $up ){
          $sf_guard_user->addPermissionByName($permission);
        }
      }
    }
  }
}