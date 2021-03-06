<?php



/**
 * This class defines the structure of the 'chart_iframe_information' table.
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
class ChartIframeInformationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ChartIframeInformationTableMap';

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
		$this->setName('chart_iframe_information');
		$this->setPhpName('ChartIframeInformation');
		$this->setClassname('ChartIframeInformation');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('COMPANY_ID', 'CompanyId', 'INTEGER', 'company', 'ID', true, null, null);
		$this->addColumn('HASH', 'Hash', 'VARCHAR', true, 10, null);
		$this->addColumn('GRAPH_TYPE', 'GraphType', 'VARCHAR', true, 10, null);
		$this->addColumn('YEAR', 'Year', 'INTEGER', true, null, null);
		$this->addColumn('MONTH', 'Month', 'INTEGER', false, null, null);
		$this->addColumn('CHART_ITEM', 'ChartItem', 'VARCHAR', false, 10, null);
		$this->addColumn('CHART_TYPE', 'ChartType', 'VARCHAR', false, 10, null);
		$this->addColumn('SELECTED', 'Selected', 'VARCHAR', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Company', 'Company', RelationMap::MANY_TO_ONE, array('company_id' => 'id', ), 'CASCADE', null);
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

} // ChartIframeInformationTableMap
