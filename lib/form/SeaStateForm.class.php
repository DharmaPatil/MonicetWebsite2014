<?php

/**
 * SeaState form.
 *
 * @package    monicet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class SeaStateForm extends BaseSeaStateForm
{
  public function configure()
  {
  	$this->widgetSchema->getFormFormatter()->setTranslationCatalogue('sea_state');
    unset(
      $this['created_at'], $this['updated_at']
    );
    $this->embedI18n(array('pt', 'en'));
  }
}
