<?php



/**
 * This class defines the structure of the 'mf_formulario_utilizador' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.mfFormularioPlugin.lib.model.map
 */
class mfFormularioUtilizadorTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.mfFormularioPlugin.lib.model.map.mfFormularioUtilizadorTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('mf_formulario_utilizador');
		$this->setPhpName('mfFormularioUtilizador');
		$this->setClassname('mfFormularioUtilizador');
		$this->setPackage('plugins.mfFormularioPlugin.lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('FORMULARIO_ID', 'FormularioId', 'INTEGER' , 'mf_formulario', 'ID', true, null, null);
		$this->addForeignPrimaryKey('UTILIZADOR_ID', 'UtilizadorId', 'INTEGER' , 'sf_guard_user', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('mfFormulario', 'mfFormulario', RelationMap::MANY_TO_ONE, array('formulario_id' => 'id', ), null, null);
    $this->addRelation('sfGuardUser', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('utilizador_id' => 'id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // mfFormularioUtilizadorTableMap
