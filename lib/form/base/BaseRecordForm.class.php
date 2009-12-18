<?php

/**
 * Record form base class.
 *
 * @method Record getObject() Returns the current form's model object
 *
 * @package    monicet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRecordForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'code_id'         => new sfWidgetFormPropelChoice(array('model' => 'Code', 'add_empty' => false)),
      'visibility_id'   => new sfWidgetFormPropelChoice(array('model' => 'Visibility', 'add_empty' => false)),
      'sea_state_id'    => new sfWidgetFormPropelChoice(array('model' => 'SeaState', 'add_empty' => false)),
      'general_info_id' => new sfWidgetFormPropelChoice(array('model' => 'GeneralInfo', 'add_empty' => false)),
      'time'            => new sfWidgetFormTime(),
      'latitude'        => new sfWidgetFormInputText(),
      'longitude'       => new sfWidgetFormInputText(),
      'comments'        => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Record', 'column' => 'id', 'required' => false)),
      'code_id'         => new sfValidatorPropelChoice(array('model' => 'Code', 'column' => 'id')),
      'visibility_id'   => new sfValidatorPropelChoice(array('model' => 'Visibility', 'column' => 'id')),
      'sea_state_id'    => new sfValidatorPropelChoice(array('model' => 'SeaState', 'column' => 'id')),
      'general_info_id' => new sfValidatorPropelChoice(array('model' => 'GeneralInfo', 'column' => 'id')),
      'time'            => new sfValidatorTime(),
      'latitude'        => new sfValidatorString(array('max_length' => 255)),
      'longitude'       => new sfValidatorString(array('max_length' => 255)),
      'comments'        => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('record[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Record';
  }


}
