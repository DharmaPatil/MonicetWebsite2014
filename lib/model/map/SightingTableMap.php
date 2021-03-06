<?php



/**
 * This class defines the structure of the 'sighting' table.
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
class SightingTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.SightingTableMap';

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
		$this->setName('sighting');
		$this->setPhpName('Sighting');
		$this->setClassname('Sighting');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('RECORD_ID', 'RecordId', 'INTEGER', 'record', 'ID', true, null, null);
		$this->addForeignKey('SPECIE_ID', 'SpecieId', 'INTEGER', 'specie', 'ID', false, null, null);
		$this->addForeignKey('BEHAVIOUR_ID', 'BehaviourId', 'INTEGER', 'behaviour', 'ID', false, null, null);
		$this->addForeignKey('ASSOCIATION_ID', 'AssociationId', 'INTEGER', 'association', 'ID', false, null, null);
		$this->addColumn('ADULTS', 'Adults', 'VARCHAR', false, 45, null);
		$this->addColumn('JUVENILES', 'Juveniles', 'VARCHAR', false, 45, null);
		$this->addColumn('CALVES', 'Calves', 'VARCHAR', false, 45, null);
		$this->addColumn('TOTAL', 'Total', 'INTEGER', false, null, null);
		$this->addColumn('COMMENTS', 'Comments', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Record', 'Record', RelationMap::MANY_TO_ONE, array('record_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Specie', 'Specie', RelationMap::MANY_TO_ONE, array('specie_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Behaviour', 'Behaviour', RelationMap::MANY_TO_ONE, array('behaviour_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Association', 'Association', RelationMap::MANY_TO_ONE, array('association_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('ObservationPhoto', 'ObservationPhoto', RelationMap::ONE_TO_MANY, array('id' => 'sighting_id', ), 'SET NULL', null);
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
		);
	} // getBehaviors()

} // SightingTableMap
