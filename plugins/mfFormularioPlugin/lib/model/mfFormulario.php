<?php


/**
 * Skeleton subclass for representing a row from the 'mf_formulario' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Thu Feb 25 16:32:06 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.mfFormularioPlugin.lib.model
 */
class mfFormulario extends BasemfFormulario {
  public function getClasse(){
    preg_match(mfValidatorFormulario::REGEX_REGRA, $this->getRegra(), $valores);
    return $valores[1];
  }
  public function getCampos(){
    preg_match(mfValidatorFormulario::REGEX_REGRA, $this->getRegra(), $valores);
    return $valores[2];
  }
  public function getCamposAsArray(){
    return explode(',', $this->getCampos());
  }
  public function __toString(){
  	return $this->getRegra();
  }
}