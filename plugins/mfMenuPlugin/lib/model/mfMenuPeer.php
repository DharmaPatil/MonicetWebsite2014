<?php


/**
 * Skeleton subclass for performing query and update operations on the 'mf_menu' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.1 on:
 *
 * Sun Feb 21 16:41:21 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    plugins.mfMenuPlugin.lib.model
 */
class mfMenuPeer extends BasemfMenuPeer {
  public static function getMenusAsArray()
  {
  	$c = new Criteria();
  	$c->addAscendingOrderByColumn(self::POSICAO);
    $c->addAscendingOrderByColumn(self::NOME);
    $c->add(self::MENU_PAI_ID, null, Criteria::ISNULL);
    $menus = self::doSelectJoinsfGuardPermission($c);
    
    $menus_pais = array();
    foreach( $menus as $menu ){
    	$menus_pais[$menu->getId()] = $menu;
    }
    return self::getMenusAsArrayRecursivo($menus_pais);
  }
  public static function getMenusAsArrayRecursivo( $menus )
  {
  	$submenus = array();
  	if ( count($menus) > 0 ){
	    foreach( $menus as $id => $menu ){
	      $submenus[$id] = self::getMenusAsArrayRecursivo($menu->getFilhosAsArray());
	    }
  	}
    return $submenus;
  }
  
  public static function menuToHtml( $menus, $user = null )
  {
  	$contexto = sfContext::getInstance();
  	$user = is_null($user) ? $contexto->getUser() : $user;
  	$html = "";
  	foreach ( $menus as $id => $submenus )
  	{
  		$menu = mfMenuPeer::retrieveByPk($id);
  		try {
  			if ( strlen($menu->getRota()) ){
  		    $url = $contexto->getRouting()->generate($menu->getRota());
  			}else{
  				$url = '#';
  			}
  		}catch(Exception $e){
  			$url = '#';
  		}
  		// só vai escrever menu se utilizador tiver permissão
  		if ( ! $menu->getsfGuardPermission() || ( $menu->getsfGuardPermission() && $user->hasCredential( $menu->getsfGuardPermission()->getName() ))){
  		  $html .= sprintf('<li><a href="%s">%s</a>', $url, $menu->getNome());
  		}
  		if ( count($submenus) > 0 ){
  			$html .= sprintf('<ul>%s</ul>', self::menuToHtml($submenus));
  		}
  		$html .= '</li>';
  	}
  	return $html;
  }
}