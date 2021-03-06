<?php



/**
 * This class defines the structure of the 'individual_i18n' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.map
 */
class IndividualI18nTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.photoRepoPlugin.lib.model.map.IndividualI18nTableMap';

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
		$this->setName('individual_i18n');
		$this->setPhpName('IndividualI18n');
		$this->setClassname('IndividualI18n');
		$this->setPackage('plugins.photoRepoPlugin.lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID', 'Id', 'INTEGER' , 'individual', 'ID', true, null, null);
		$this->addPrimaryKey('CULTURE', 'Culture', 'VARCHAR', true, 7, null);
		$this->addColumn('DESCRIPTION1', 'Description1', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DESCRIPTION2', 'Description2', 'LONGVARCHAR', false, null, null);
		$this->addColumn('NOTES', 'Notes', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Individual', 'Individual', RelationMap::MANY_TO_ONE, array('id' => 'id', ), null, null);
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
			'symfony_i18n_translation' => array('culture_column' => 'culture', ),
		);
	} // getBehaviors()

} // IndividualI18nTableMap
