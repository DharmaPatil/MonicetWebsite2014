<?php

class ObservationPhotoDorsalRightMarkForm extends BaseObservationPhotoDorsalRightMarkForm
{
  public function configure()
  {
    $this->widgetSchema->getFormFormatter()->setTranslationCatalogue('observation_photo');
    $this->widgetSchema->moveField('pattern_cell_dorsal_right_id', sfWidgetFormSchema::AFTER, 'is_deep');
    
    $this->widgetSchema['observation_photo_dorsal_right_id'] = new sfWidgetFormInputHidden();
    
    $request = sfContext::getInstance()->getRequest();
    $module = sfContext::getInstance()->getModuleName();
    if( $module == 'prObservationPhoto' ){
      $OBPhoto = ObservationPhotoPeer::retrieveByPK( $request->getParameter('id') );
    
      $cells = PatternCellDorsalRightPeer::getForSelect($OBPhoto->getSpecieId(), false, '');
      $this->widgetSchema['pattern_cell_dorsal_right_id'] = new sfWidgetFormChoice(array(
          'choices' => $cells,
      ));
      $this->validatorSchema['pattern_cell_dorsal_right_id'] = new sfValidatorChoice(array(
          'choices' => array_keys($cells),
      ));
      $cells = PatternCellDorsalRightPeer::getForSelect($OBPhoto->getSpecieId(), true, '');
      $this->widgetSchema['to_cell_id'] = new sfWidgetFormChoice(array(
          'choices' => $cells,
      ));
      $this->validatorSchema['to_cell_id'] = new sfValidatorChoice(array(
          'choices' => array_keys($cells),
          'required' => false
      ));
    }
    
    $oneRequired = new sfValidatorCallback(array( 'callback' => array($this, 'checkOneRequired') ));
    
    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        $oneRequired
      ))
    );
  }
  
  public function checkOneRequired($validator, $values) {
    if( !$values['is_wide'] && !$values['is_deep']) {
      throw new sfValidatorError($validator, '<br/> - As opções "Larga" e "Estreita", uma delas tem que estar seleccionada.');
    }
    if( $values['is_wide'] && $values['is_deep']) {
      throw new sfValidatorError($validator, '<br/> - As opções "Larga" e "Estreita", só uma delas pode que estar seleccionada.');
    }
    return $values;
  }
}
