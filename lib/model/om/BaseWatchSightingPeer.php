<?php


/**
 * Base static class for performing query and update operations on the 'watch_sighting' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseWatchSightingPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'watch_sighting';

	/** the related Propel class for this table */
	const OM_CLASS = 'WatchSighting';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.WatchSighting';

	/** the related TableMap class for this table */
	const TM_CLASS = 'WatchSightingTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 16;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'watch_sighting.ID';

	/** the column name for the WATCH_INFO_ID field */
	const WATCH_INFO_ID = 'watch_sighting.WATCH_INFO_ID';

	/** the column name for the WATCH_CODE_ID field */
	const WATCH_CODE_ID = 'watch_sighting.WATCH_CODE_ID';

	/** the column name for the TIME field */
	const TIME = 'watch_sighting.TIME';

	/** the column name for the WATCH_VISIBILITY_ID field */
	const WATCH_VISIBILITY_ID = 'watch_sighting.WATCH_VISIBILITY_ID';

	/** the column name for the SPECIE_ID field */
	const SPECIE_ID = 'watch_sighting.SPECIE_ID';

	/** the column name for the GROUP field */
	const GROUP = 'watch_sighting.GROUP';

	/** the column name for the TOTAL field */
	const TOTAL = 'watch_sighting.TOTAL';

	/** the column name for the BEHAVIOUR_ID field */
	const BEHAVIOUR_ID = 'watch_sighting.BEHAVIOUR_ID';

	/** the column name for the DIRECTION_ID field */
	const DIRECTION_ID = 'watch_sighting.DIRECTION_ID';

	/** the column name for the HORIZONTAL field */
	const HORIZONTAL = 'watch_sighting.HORIZONTAL';

	/** the column name for the VERTICAL field */
	const VERTICAL = 'watch_sighting.VERTICAL';

	/** the column name for the VESSEL_ID field */
	const VESSEL_ID = 'watch_sighting.VESSEL_ID';

	/** the column name for the COMMENTS field */
	const COMMENTS = 'watch_sighting.COMMENTS';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'watch_sighting.CREATED_AT';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'watch_sighting.UPDATED_AT';

	/**
	 * An identiy map to hold any loaded instances of WatchSighting objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array WatchSighting[]
	 */
	public static $instances = array();


	// symfony behavior
	
	/**
	 * Indicates whether the current model includes I18N.
	 */
	const IS_I18N = false;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'WatchInfoId', 'WatchCodeId', 'Time', 'WatchVisibilityId', 'SpecieId', 'Group', 'Total', 'BehaviourId', 'DirectionId', 'Horizontal', 'Vertical', 'VesselId', 'Comments', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'watchInfoId', 'watchCodeId', 'time', 'watchVisibilityId', 'specieId', 'group', 'total', 'behaviourId', 'directionId', 'horizontal', 'vertical', 'vesselId', 'comments', 'createdAt', 'updatedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::WATCH_INFO_ID, self::WATCH_CODE_ID, self::TIME, self::WATCH_VISIBILITY_ID, self::SPECIE_ID, self::GROUP, self::TOTAL, self::BEHAVIOUR_ID, self::DIRECTION_ID, self::HORIZONTAL, self::VERTICAL, self::VESSEL_ID, self::COMMENTS, self::CREATED_AT, self::UPDATED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'WATCH_INFO_ID', 'WATCH_CODE_ID', 'TIME', 'WATCH_VISIBILITY_ID', 'SPECIE_ID', 'GROUP', 'TOTAL', 'BEHAVIOUR_ID', 'DIRECTION_ID', 'HORIZONTAL', 'VERTICAL', 'VESSEL_ID', 'COMMENTS', 'CREATED_AT', 'UPDATED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'watch_info_id', 'watch_code_id', 'time', 'watch_visibility_id', 'specie_id', 'group', 'total', 'behaviour_id', 'direction_id', 'horizontal', 'vertical', 'vessel_id', 'comments', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'WatchInfoId' => 1, 'WatchCodeId' => 2, 'Time' => 3, 'WatchVisibilityId' => 4, 'SpecieId' => 5, 'Group' => 6, 'Total' => 7, 'BehaviourId' => 8, 'DirectionId' => 9, 'Horizontal' => 10, 'Vertical' => 11, 'VesselId' => 12, 'Comments' => 13, 'CreatedAt' => 14, 'UpdatedAt' => 15, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'watchInfoId' => 1, 'watchCodeId' => 2, 'time' => 3, 'watchVisibilityId' => 4, 'specieId' => 5, 'group' => 6, 'total' => 7, 'behaviourId' => 8, 'directionId' => 9, 'horizontal' => 10, 'vertical' => 11, 'vesselId' => 12, 'comments' => 13, 'createdAt' => 14, 'updatedAt' => 15, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::WATCH_INFO_ID => 1, self::WATCH_CODE_ID => 2, self::TIME => 3, self::WATCH_VISIBILITY_ID => 4, self::SPECIE_ID => 5, self::GROUP => 6, self::TOTAL => 7, self::BEHAVIOUR_ID => 8, self::DIRECTION_ID => 9, self::HORIZONTAL => 10, self::VERTICAL => 11, self::VESSEL_ID => 12, self::COMMENTS => 13, self::CREATED_AT => 14, self::UPDATED_AT => 15, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'WATCH_INFO_ID' => 1, 'WATCH_CODE_ID' => 2, 'TIME' => 3, 'WATCH_VISIBILITY_ID' => 4, 'SPECIE_ID' => 5, 'GROUP' => 6, 'TOTAL' => 7, 'BEHAVIOUR_ID' => 8, 'DIRECTION_ID' => 9, 'HORIZONTAL' => 10, 'VERTICAL' => 11, 'VESSEL_ID' => 12, 'COMMENTS' => 13, 'CREATED_AT' => 14, 'UPDATED_AT' => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'watch_info_id' => 1, 'watch_code_id' => 2, 'time' => 3, 'watch_visibility_id' => 4, 'specie_id' => 5, 'group' => 6, 'total' => 7, 'behaviour_id' => 8, 'direction_id' => 9, 'horizontal' => 10, 'vertical' => 11, 'vessel_id' => 12, 'comments' => 13, 'created_at' => 14, 'updated_at' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. WatchSightingPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(WatchSightingPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(WatchSightingPeer::ID);
			$criteria->addSelectColumn(WatchSightingPeer::WATCH_INFO_ID);
			$criteria->addSelectColumn(WatchSightingPeer::WATCH_CODE_ID);
			$criteria->addSelectColumn(WatchSightingPeer::TIME);
			$criteria->addSelectColumn(WatchSightingPeer::WATCH_VISIBILITY_ID);
			$criteria->addSelectColumn(WatchSightingPeer::SPECIE_ID);
			$criteria->addSelectColumn(WatchSightingPeer::GROUP);
			$criteria->addSelectColumn(WatchSightingPeer::TOTAL);
			$criteria->addSelectColumn(WatchSightingPeer::BEHAVIOUR_ID);
			$criteria->addSelectColumn(WatchSightingPeer::DIRECTION_ID);
			$criteria->addSelectColumn(WatchSightingPeer::HORIZONTAL);
			$criteria->addSelectColumn(WatchSightingPeer::VERTICAL);
			$criteria->addSelectColumn(WatchSightingPeer::VESSEL_ID);
			$criteria->addSelectColumn(WatchSightingPeer::COMMENTS);
			$criteria->addSelectColumn(WatchSightingPeer::CREATED_AT);
			$criteria->addSelectColumn(WatchSightingPeer::UPDATED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.WATCH_INFO_ID');
			$criteria->addSelectColumn($alias . '.WATCH_CODE_ID');
			$criteria->addSelectColumn($alias . '.TIME');
			$criteria->addSelectColumn($alias . '.WATCH_VISIBILITY_ID');
			$criteria->addSelectColumn($alias . '.SPECIE_ID');
			$criteria->addSelectColumn($alias . '.GROUP');
			$criteria->addSelectColumn($alias . '.TOTAL');
			$criteria->addSelectColumn($alias . '.BEHAVIOUR_ID');
			$criteria->addSelectColumn($alias . '.DIRECTION_ID');
			$criteria->addSelectColumn($alias . '.HORIZONTAL');
			$criteria->addSelectColumn($alias . '.VERTICAL');
			$criteria->addSelectColumn($alias . '.VESSEL_ID');
			$criteria->addSelectColumn($alias . '.COMMENTS');
			$criteria->addSelectColumn($alias . '.CREATED_AT');
			$criteria->addSelectColumn($alias . '.UPDATED_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     WatchSighting
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = WatchSightingPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return WatchSightingPeer::populateObjects(WatchSightingPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			WatchSightingPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      WatchSighting $value A WatchSighting object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(WatchSighting $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A WatchSighting object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof WatchSighting) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or WatchSighting object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     WatchSighting Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to watch_sighting
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = WatchSightingPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = WatchSightingPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				WatchSightingPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (WatchSighting object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = WatchSightingPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = WatchSightingPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + WatchSightingPeer::NUM_COLUMNS;
		} else {
			$cls = WatchSightingPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			WatchSightingPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related WatchInfo table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinWatchInfo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related WatchCode table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinWatchCode(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related WatchVisibility table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinWatchVisibility(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Specie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinSpecie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Behaviour table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinBehaviour(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Direction table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinDirection(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Vessel table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinVessel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their WatchInfo objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinWatchInfo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		WatchInfoPeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their WatchCode objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinWatchCode(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		WatchCodePeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = WatchCodePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = WatchCodePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					WatchCodePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (WatchCode)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their WatchVisibility objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinWatchVisibility(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		WatchVisibilityPeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = WatchVisibilityPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = WatchVisibilityPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					WatchVisibilityPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (WatchVisibility)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their Specie objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinSpecie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		SpeciePeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = SpeciePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = SpeciePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					SpeciePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (Specie)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their Behaviour objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinBehaviour(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		BehaviourPeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = BehaviourPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = BehaviourPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					BehaviourPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (Behaviour)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their Direction objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinDirection(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		DirectionPeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = DirectionPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DirectionPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					DirectionPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (Direction)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with their Vessel objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinVessel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);
		VesselPeer::addSelectColumns($criteria);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = VesselPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = VesselPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					VesselPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (WatchSighting) to $obj2 (Vessel)
				$obj2->addWatchSighting($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined WatchInfo rows

			$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);
			} // if joined row not null

			// Add objects for joined WatchCode rows

			$key3 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = WatchCodePeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = WatchCodePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchCodePeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchCode)
				$obj3->addWatchSighting($obj1);
			} // if joined row not null

			// Add objects for joined WatchVisibility rows

			$key4 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = WatchVisibilityPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = WatchVisibilityPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					WatchVisibilityPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (WatchVisibility)
				$obj4->addWatchSighting($obj1);
			} // if joined row not null

			// Add objects for joined Specie rows

			$key5 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = SpeciePeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = SpeciePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					SpeciePeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Specie)
				$obj5->addWatchSighting($obj1);
			} // if joined row not null

			// Add objects for joined Behaviour rows

			$key6 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = BehaviourPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = BehaviourPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					BehaviourPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Behaviour)
				$obj6->addWatchSighting($obj1);
			} // if joined row not null

			// Add objects for joined Direction rows

			$key7 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol7);
			if ($key7 !== null) {
				$obj7 = DirectionPeer::getInstanceFromPool($key7);
				if (!$obj7) {

					$cls = DirectionPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					DirectionPeer::addInstanceToPool($obj7, $key7);
				} // if obj7 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Direction)
				$obj7->addWatchSighting($obj1);
			} // if joined row not null

			// Add objects for joined Vessel rows

			$key8 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol8);
			if ($key8 !== null) {
				$obj8 = VesselPeer::getInstanceFromPool($key8);
				if (!$obj8) {

					$cls = VesselPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					VesselPeer::addInstanceToPool($obj8, $key8);
				} // if obj8 loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj8 (Vessel)
				$obj8->addWatchSighting($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related WatchInfo table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptWatchInfo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related WatchCode table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptWatchCode(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related WatchVisibility table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptWatchVisibility(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Specie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptSpecie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Behaviour table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptBehaviour(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Direction table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptDirection(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Vessel table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptVessel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WatchSightingPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except WatchInfo.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptWatchInfo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchCode rows

				$key2 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchCodePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchCodePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchCodePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchCode)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchVisibility rows

				$key3 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchVisibilityPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchVisibilityPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchVisibilityPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchVisibility)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key4 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = SpeciePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					SpeciePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (Specie)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Behaviour)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Direction rows

				$key6 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = DirectionPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = DirectionPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					DirectionPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Direction)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Vessel)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except WatchCode.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptWatchCode(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchInfo rows

				$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchVisibility rows

				$key3 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchVisibilityPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchVisibilityPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchVisibilityPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchVisibility)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key4 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = SpeciePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					SpeciePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (Specie)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Behaviour)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Direction rows

				$key6 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = DirectionPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = DirectionPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					DirectionPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Direction)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Vessel)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except WatchVisibility.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptWatchVisibility(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchInfo rows

				$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchCode rows

				$key3 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchCodePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchCodePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchCodePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchCode)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key4 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = SpeciePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					SpeciePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (Specie)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Behaviour)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Direction rows

				$key6 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = DirectionPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = DirectionPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					DirectionPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Direction)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Vessel)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except Specie.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptSpecie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchInfo rows

				$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchCode rows

				$key3 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchCodePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchCodePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchCodePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchCode)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchVisibility rows

				$key4 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = WatchVisibilityPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = WatchVisibilityPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					WatchVisibilityPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (WatchVisibility)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Behaviour)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Direction rows

				$key6 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = DirectionPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = DirectionPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					DirectionPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Direction)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Vessel)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except Behaviour.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptBehaviour(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchInfo rows

				$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchCode rows

				$key3 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchCodePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchCodePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchCodePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchCode)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchVisibility rows

				$key4 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = WatchVisibilityPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = WatchVisibilityPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					WatchVisibilityPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (WatchVisibility)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key5 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = SpeciePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					SpeciePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Specie)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Direction rows

				$key6 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = DirectionPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = DirectionPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					DirectionPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Direction)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Vessel)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except Direction.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptDirection(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchInfo rows

				$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchCode rows

				$key3 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchCodePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchCodePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchCodePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchCode)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchVisibility rows

				$key4 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = WatchVisibilityPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = WatchVisibilityPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					WatchVisibilityPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (WatchVisibility)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key5 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = SpeciePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					SpeciePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Specie)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key6 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = BehaviourPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					BehaviourPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Behaviour)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Vessel)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of WatchSighting objects pre-filled with all related objects except Vessel.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of WatchSighting objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptVessel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		WatchSightingPeer::addSelectColumns($criteria);
		$startcol2 = (WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchInfoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (WatchInfoPeer::NUM_COLUMNS - WatchInfoPeer::NUM_LAZY_LOAD_COLUMNS);

		WatchCodePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (WatchCodePeer::NUM_COLUMNS - WatchCodePeer::NUM_LAZY_LOAD_COLUMNS);

		WatchVisibilityPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (WatchVisibilityPeer::NUM_COLUMNS - WatchVisibilityPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		DirectionPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (DirectionPeer::NUM_COLUMNS - DirectionPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(WatchSightingPeer::WATCH_INFO_ID, WatchInfoPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_CODE_ID, WatchCodePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::WATCH_VISIBILITY_ID, WatchVisibilityPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(WatchSightingPeer::DIRECTION_ID, DirectionPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseWatchSightingPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = WatchSightingPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = WatchSightingPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = WatchSightingPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				WatchSightingPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined WatchInfo rows

				$key2 = WatchInfoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = WatchInfoPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = WatchInfoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					WatchInfoPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj2 (WatchInfo)
				$obj2->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchCode rows

				$key3 = WatchCodePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = WatchCodePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = WatchCodePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					WatchCodePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj3 (WatchCode)
				$obj3->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined WatchVisibility rows

				$key4 = WatchVisibilityPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = WatchVisibilityPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = WatchVisibilityPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					WatchVisibilityPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj4 (WatchVisibility)
				$obj4->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key5 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = SpeciePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					SpeciePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj5 (Specie)
				$obj5->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key6 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = BehaviourPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					BehaviourPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj6 (Behaviour)
				$obj6->addWatchSighting($obj1);

			} // if joined row is not null

				// Add objects for joined Direction rows

				$key7 = DirectionPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = DirectionPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = DirectionPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					DirectionPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (WatchSighting) to the collection in $obj7 (Direction)
				$obj7->addWatchSighting($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseWatchSightingPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseWatchSightingPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new WatchSightingTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? WatchSightingPeer::CLASS_DEFAULT : WatchSightingPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a WatchSighting or Criteria object.
	 *
	 * @param      mixed $values Criteria or WatchSighting object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from WatchSighting object
		}

		if ($criteria->containsKey(WatchSightingPeer::ID) && $criteria->keyContainsValue(WatchSightingPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.WatchSightingPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a WatchSighting or Criteria object.
	 *
	 * @param      mixed $values Criteria or WatchSighting object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(WatchSightingPeer::ID);
			$value = $criteria->remove(WatchSightingPeer::ID);
			if ($value) {
				$selectCriteria->add(WatchSightingPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(WatchSightingPeer::TABLE_NAME);
			}

		} else { // $values is WatchSighting object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the watch_sighting table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(WatchSightingPeer::TABLE_NAME, $con, WatchSightingPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			WatchSightingPeer::clearInstancePool();
			WatchSightingPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a WatchSighting or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or WatchSighting object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			WatchSightingPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof WatchSighting) { // it's a model object
			// invalidate the cache for this single object
			WatchSightingPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WatchSightingPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				WatchSightingPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			WatchSightingPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given WatchSighting object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      WatchSighting $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(WatchSighting $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WatchSightingPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WatchSightingPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(WatchSightingPeer::DATABASE_NAME, WatchSightingPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     WatchSighting
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = WatchSightingPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(WatchSightingPeer::DATABASE_NAME);
		$criteria->add(WatchSightingPeer::ID, $pk);

		$v = WatchSightingPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(WatchSightingPeer::DATABASE_NAME);
			$criteria->add(WatchSightingPeer::ID, $pks, Criteria::IN);
			$objs = WatchSightingPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseWatchSightingPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseWatchSightingPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWatchSightingPeer::buildTableMap();

