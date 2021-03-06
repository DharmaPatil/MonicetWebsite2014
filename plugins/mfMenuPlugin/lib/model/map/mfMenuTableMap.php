<?php



/**
 * This class defines the structure of the 'mf_menu' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.mfMenuPlugin.lib.model.map
 */
class mfMenuTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.mfMenuPlugin.lib.model.map.mfMenuTableMap';

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
		$this->setName('mf_menu');
		$this->setPhpName('mfMenu');
		$this->setClassname('mfMenu');
		$this->setPackage('plugins.mfMenuPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NOME', 'Nome', 'VARCHAR', true, 255, null);
		$this->addForeignKey('MENU_PAI_ID', 'MenuPaiId', 'INTEGER', 'mf_menu', 'ID', false, 11, null);
		$this->addColumn('ROTA', 'Rota', 'VARCHAR', false, 255, null);
		$this->addForeignKey('PERMISSAO_ID', 'PermissaoId', 'INTEGER', 'sf_guard_permission', 'ID', false, null, null);
		$this->addColumn('POSICAO', 'Posicao', 'INTEGER', false, 11, 0);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('mfMenuRelatedByMenuPaiId', 'mfMenu', RelationMap::MANY_TO_ONE, array('menu_pai_id' => 'id', ), 'SET NULL', null);
    $this->addRelation('sfGuardPermission', 'sfGuardPermission', RelationMap::MANY_TO_ONE, array('permissao_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('mfMenuRelatedById', 'mfMenu', RelationMap::ONE_TO_MANY, array('id' => 'menu_pai_id', ), 'SET NULL', null);
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

} // mfMenuTableMap
