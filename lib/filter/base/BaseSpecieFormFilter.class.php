<?php

/**
 * Specie filter form base class.
 *
 * @package    monicet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSpecieFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'specie_group_id' => new sfWidgetFormPropelChoice(array('model' => 'SpecieGroup', 'add_empty' => true)),
      'code'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rec_cet_code'    => new sfWidgetFormFilterInput(),
      'scientific_name' => new sfWidgetFormFilterInput(),
      'color'           => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'specie_group_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'SpecieGroup', 'column' => 'id')),
      'code'            => new sfValidatorPass(array('required' => false)),
      'rec_cet_code'    => new sfValidatorPass(array('required' => false)),
      'scientific_name' => new sfValidatorPass(array('required' => false)),
      'color'           => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('specie_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Specie';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'specie_group_id' => 'ForeignKey',
      'code'            => 'Text',
      'rec_cet_code'    => 'Text',
      'scientific_name' => 'Text',
      'color'           => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
