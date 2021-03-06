<?php



/**
 * This class defines the structure of the 'company' table.
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
class CompanyTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CompanyTableMap';

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
		$this->setName('company');
		$this->setPhpName('Company');
		$this->setClassname('Company');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('ACRONYM', 'Acronym', 'VARCHAR', true, 45, null);
		$this->addColumn('REC_CET_CODE', 'RecCetCode', 'VARCHAR', false, 45, null);
		$this->addColumn('BASE_LATITUDE', 'BaseLatitude', 'VARCHAR', true, 45, null);
		$this->addColumn('BASE_LONGITUDE', 'BaseLongitude', 'VARCHAR', true, 45, null);
		$this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', false, 30, null);
		$this->addColumn('MOBILE', 'Mobile', 'VARCHAR', false, 30, null);
		$this->addColumn('FAX', 'Fax', 'VARCHAR', false, 30, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
		$this->addColumn('ADDRESS', 'Address', 'LONGVARCHAR', false, 255, null);
		$this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', false, 8, null);
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', false, 225, null);
		$this->addColumn('DISTRICT', 'District', 'VARCHAR', false, 255, null);
		$this->addColumn('MUNICIPALITY', 'Municipality', 'VARCHAR', false, 255, null);
		$this->addColumn('LOCALITY', 'Locality', 'VARCHAR', false, 255, null);
		$this->addColumn('OBSERVATIONS', 'Observations', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CompanyUser', 'CompanyUser', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('Vessel', 'Vessel', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('Guide', 'Guide', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('Skipper', 'Skipper', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('GeneralInfo', 'GeneralInfo', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('WatchInfo', 'WatchInfo', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('Watchman', 'Watchman', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('WatchPost', 'WatchPost', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('ChartIframeInformation', 'ChartIframeInformation', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('MapIframeInformation', 'MapIframeInformation', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'CASCADE', null);
    $this->addRelation('ObservationPhoto', 'ObservationPhoto', RelationMap::ONE_TO_MANY, array('id' => 'company_id', ), 'SET NULL', null);
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

} // CompanyTableMap
