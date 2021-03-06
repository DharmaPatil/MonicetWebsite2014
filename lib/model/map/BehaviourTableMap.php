<?php



/**
 * This class defines the structure of the 'behaviour' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class BehaviourTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.BehaviourTableMap';

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
		$this->setName('behaviour');
		$this->setPhpName('Behaviour');
		$this->setClassname('Behaviour');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('CODE', 'Code', 'INTEGER', true, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('BehaviourI18n', 'BehaviourI18n', RelationMap::ONE_TO_MANY, array('id' => 'id', ), null, null);
    $this->addRelation('Sighting', 'Sighting', RelationMap::ONE_TO_MANY, array('id' => 'behaviour_id', ), 'CASCADE', null);
    $this->addRelation('WatchSighting', 'WatchSighting', RelationMap::ONE_TO_MANY, array('id' => 'behaviour_id', ), 'CASCADE', null);
    $this->addRelation('ObservationPhoto', 'ObservationPhoto', RelationMap::ONE_TO_MANY, array('id' => 'behaviour_id', ), 'SET NULL', null);
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
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
			'symfony_i18n' => array('i18n_table' => 'behaviour_i18n', ),
		);
	} // getBehaviors()

} // BehaviourTableMap
