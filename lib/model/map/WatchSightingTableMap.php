<?php



/**
 * This class defines the structure of the 'watch_sighting' table.
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
class WatchSightingTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.WatchSightingTableMap';

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
		$this->setName('watch_sighting');
		$this->setPhpName('WatchSighting');
		$this->setClassname('WatchSighting');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('WATCH_INFO_ID', 'WatchInfoId', 'INTEGER', 'watch_info', 'ID', true, null, null);
		$this->addForeignKey('WATCH_CODE_ID', 'WatchCodeId', 'INTEGER', 'watch_code', 'ID', true, null, null);
		$this->addColumn('TIME', 'Time', 'TIME', true, null, null);
		$this->addForeignKey('WATCH_VISIBILITY_ID', 'WatchVisibilityId', 'INTEGER', 'watch_visibility', 'ID', false, null, null);
		$this->addForeignKey('SPECIE_ID', 'SpecieId', 'INTEGER', 'specie', 'ID', false, null, null);
		$this->addColumn('GROUP', 'Group', 'VARCHAR', false, 2, null);
		$this->addColumn('TOTAL', 'Total', 'INTEGER', false, null, null);
		$this->addForeignKey('BEHAVIOUR_ID', 'BehaviourId', 'INTEGER', 'behaviour', 'ID', false, null, null);
		$this->addForeignKey('DIRECTION_ID', 'DirectionId', 'INTEGER', 'direction', 'ID', false, null, null);
		$this->addColumn('HORIZONTAL', 'Horizontal', 'FLOAT', false, null, null);
		$this->addColumn('VERTICAL', 'Vertical', 'FLOAT', false, null, null);
		$this->addForeignKey('VESSEL_ID', 'VesselId', 'INTEGER', 'vessel', 'ID', false, null, null);
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
    $this->addRelation('WatchInfo', 'WatchInfo', RelationMap::MANY_TO_ONE, array('watch_info_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('WatchCode', 'WatchCode', RelationMap::MANY_TO_ONE, array('watch_code_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('WatchVisibility', 'WatchVisibility', RelationMap::MANY_TO_ONE, array('watch_visibility_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Specie', 'Specie', RelationMap::MANY_TO_ONE, array('specie_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Behaviour', 'Behaviour', RelationMap::MANY_TO_ONE, array('behaviour_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Direction', 'Direction', RelationMap::MANY_TO_ONE, array('direction_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Vessel', 'Vessel', RelationMap::MANY_TO_ONE, array('vessel_id' => 'id', ), null, null);
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

} // WatchSightingTableMap
