<?php

/**
 * ConsorciumElement filter form.
 *
 * @package    monicet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class ConsorciumElementFormFilter extends BaseConsorciumElementFormFilter
{
  public function configure()
  {
  	$this->widgetSchema->getFormFormatter()->setTranslationCatalogue('consorcium_element');
    unset(
      $this['created_at'], $this['updated_at'], $this['slug'], $this['logotype']
    );
  }
}
