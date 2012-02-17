<?php



/**
 * This class defines the structure of the 'mark' table.
 *
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Fri Feb 17 14:53:21 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.map
 */
class MarkTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.photoRepoPlugin.lib.model.map.MarkTableMap';

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
		$this->setName('mark');
		$this->setPhpName('Mark');
		$this->setClassname('Mark');
		$this->setPackage('plugins.photoRepoPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('IMAGE', 'Image', 'VARCHAR', true, 255, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('ObservationPhotoMarkTail', 'ObservationPhotoMarkTail', RelationMap::ONE_TO_MANY, array('id' => 'mark_id', ), 'CASCADE', null);
    $this->addRelation('ObservationPhotoMarkDorsalLeft', 'ObservationPhotoMarkDorsalLeft', RelationMap::ONE_TO_MANY, array('id' => 'mark_id', ), 'CASCADE', null);
    $this->addRelation('ObservationPhotoMarkDorsalRight', 'ObservationPhotoMarkDorsalRight', RelationMap::ONE_TO_MANY, array('id' => 'mark_id', ), 'CASCADE', null);
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

} // MarkTableMap
