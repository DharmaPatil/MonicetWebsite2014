<?php


/**
 * Base class that represents a query for the 'record' table.
 *
 * 
 *
 * @method     RecordQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     RecordQuery orderByCodeId($order = Criteria::ASC) Order by the code_id column
 * @method     RecordQuery orderByVisibilityId($order = Criteria::ASC) Order by the visibility_id column
 * @method     RecordQuery orderBySeaStateId($order = Criteria::ASC) Order by the sea_state_id column
 * @method     RecordQuery orderByGeneralInfoId($order = Criteria::ASC) Order by the general_info_id column
 * @method     RecordQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     RecordQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     RecordQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     RecordQuery orderByNumVessels($order = Criteria::ASC) Order by the num_vessels column
 * @method     RecordQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     RecordQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     RecordQuery groupById() Group by the id column
 * @method     RecordQuery groupByCodeId() Group by the code_id column
 * @method     RecordQuery groupByVisibilityId() Group by the visibility_id column
 * @method     RecordQuery groupBySeaStateId() Group by the sea_state_id column
 * @method     RecordQuery groupByGeneralInfoId() Group by the general_info_id column
 * @method     RecordQuery groupByTime() Group by the time column
 * @method     RecordQuery groupByLatitude() Group by the latitude column
 * @method     RecordQuery groupByLongitude() Group by the longitude column
 * @method     RecordQuery groupByNumVessels() Group by the num_vessels column
 * @method     RecordQuery groupByCreatedAt() Group by the created_at column
 * @method     RecordQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     RecordQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RecordQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RecordQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RecordQuery leftJoinCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the Code relation
 * @method     RecordQuery rightJoinCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Code relation
 * @method     RecordQuery innerJoinCode($relationAlias = null) Adds a INNER JOIN clause to the query using the Code relation
 *
 * @method     RecordQuery leftJoinVisibility($relationAlias = null) Adds a LEFT JOIN clause to the query using the Visibility relation
 * @method     RecordQuery rightJoinVisibility($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Visibility relation
 * @method     RecordQuery innerJoinVisibility($relationAlias = null) Adds a INNER JOIN clause to the query using the Visibility relation
 *
 * @method     RecordQuery leftJoinSeaState($relationAlias = null) Adds a LEFT JOIN clause to the query using the SeaState relation
 * @method     RecordQuery rightJoinSeaState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SeaState relation
 * @method     RecordQuery innerJoinSeaState($relationAlias = null) Adds a INNER JOIN clause to the query using the SeaState relation
 *
 * @method     RecordQuery leftJoinGeneralInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the GeneralInfo relation
 * @method     RecordQuery rightJoinGeneralInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GeneralInfo relation
 * @method     RecordQuery innerJoinGeneralInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the GeneralInfo relation
 *
 * @method     RecordQuery leftJoinSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sighting relation
 * @method     RecordQuery rightJoinSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sighting relation
 * @method     RecordQuery innerJoinSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the Sighting relation
 *
 * @method     Record findOne(PropelPDO $con = null) Return the first Record matching the query
 * @method     Record findOneOrCreate(PropelPDO $con = null) Return the first Record matching the query, or a new Record object populated from the query conditions when no match is found
 *
 * @method     Record findOneById(int $id) Return the first Record filtered by the id column
 * @method     Record findOneByCodeId(int $code_id) Return the first Record filtered by the code_id column
 * @method     Record findOneByVisibilityId(int $visibility_id) Return the first Record filtered by the visibility_id column
 * @method     Record findOneBySeaStateId(int $sea_state_id) Return the first Record filtered by the sea_state_id column
 * @method     Record findOneByGeneralInfoId(int $general_info_id) Return the first Record filtered by the general_info_id column
 * @method     Record findOneByTime(string $time) Return the first Record filtered by the time column
 * @method     Record findOneByLatitude(string $latitude) Return the first Record filtered by the latitude column
 * @method     Record findOneByLongitude(string $longitude) Return the first Record filtered by the longitude column
 * @method     Record findOneByNumVessels(int $num_vessels) Return the first Record filtered by the num_vessels column
 * @method     Record findOneByCreatedAt(string $created_at) Return the first Record filtered by the created_at column
 * @method     Record findOneByUpdatedAt(string $updated_at) Return the first Record filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Record objects filtered by the id column
 * @method     array findByCodeId(int $code_id) Return Record objects filtered by the code_id column
 * @method     array findByVisibilityId(int $visibility_id) Return Record objects filtered by the visibility_id column
 * @method     array findBySeaStateId(int $sea_state_id) Return Record objects filtered by the sea_state_id column
 * @method     array findByGeneralInfoId(int $general_info_id) Return Record objects filtered by the general_info_id column
 * @method     array findByTime(string $time) Return Record objects filtered by the time column
 * @method     array findByLatitude(string $latitude) Return Record objects filtered by the latitude column
 * @method     array findByLongitude(string $longitude) Return Record objects filtered by the longitude column
 * @method     array findByNumVessels(int $num_vessels) Return Record objects filtered by the num_vessels column
 * @method     array findByCreatedAt(string $created_at) Return Record objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Record objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRecordQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRecordQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Record', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RecordQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RecordQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RecordQuery) {
			return $criteria;
		}
		$query = new RecordQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Record|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RecordPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RecordPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RecordPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RecordPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code_id column
	 * 
	 * @param     int|array $codeId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCodeId($codeId = null, $comparison = null)
	{
		if (is_array($codeId)) {
			$useMinMax = false;
			if (isset($codeId['min'])) {
				$this->addUsingAlias(RecordPeer::CODE_ID, $codeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($codeId['max'])) {
				$this->addUsingAlias(RecordPeer::CODE_ID, $codeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::CODE_ID, $codeId, $comparison);
	}

	/**
	 * Filter the query on the visibility_id column
	 * 
	 * @param     int|array $visibilityId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByVisibilityId($visibilityId = null, $comparison = null)
	{
		if (is_array($visibilityId)) {
			$useMinMax = false;
			if (isset($visibilityId['min'])) {
				$this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibilityId['max'])) {
				$this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId, $comparison);
	}

	/**
	 * Filter the query on the sea_state_id column
	 * 
	 * @param     int|array $seaStateId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterBySeaStateId($seaStateId = null, $comparison = null)
	{
		if (is_array($seaStateId)) {
			$useMinMax = false;
			if (isset($seaStateId['min'])) {
				$this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($seaStateId['max'])) {
				$this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId, $comparison);
	}

	/**
	 * Filter the query on the general_info_id column
	 * 
	 * @param     int|array $generalInfoId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfoId($generalInfoId = null, $comparison = null)
	{
		if (is_array($generalInfoId)) {
			$useMinMax = false;
			if (isset($generalInfoId['min'])) {
				$this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($generalInfoId['max'])) {
				$this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId, $comparison);
	}

	/**
	 * Filter the query on the time column
	 * 
	 * @param     string|array $time The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByTime($time = null, $comparison = null)
	{
		if (is_array($time)) {
			$useMinMax = false;
			if (isset($time['min'])) {
				$this->addUsingAlias(RecordPeer::TIME, $time['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($time['max'])) {
				$this->addUsingAlias(RecordPeer::TIME, $time['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::TIME, $time, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 * 
	 * @param     string $latitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($latitude)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $latitude)) {
				$latitude = str_replace('*', '%', $latitude);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RecordPeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 * 
	 * @param     string $longitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($longitude)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $longitude)) {
				$longitude = str_replace('*', '%', $longitude);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RecordPeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query on the num_vessels column
	 * 
	 * @param     int|array $numVessels The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByNumVessels($numVessels = null, $comparison = null)
	{
		if (is_array($numVessels)) {
			$useMinMax = false;
			if (isset($numVessels['min'])) {
				$this->addUsingAlias(RecordPeer::NUM_VESSELS, $numVessels['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($numVessels['max'])) {
				$this->addUsingAlias(RecordPeer::NUM_VESSELS, $numVessels['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::NUM_VESSELS, $numVessels, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related Code object
	 *
	 * @param     Code $code  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCode($code, $comparison = null)
	{
		return $this
			->addUsingAlias(RecordPeer::CODE_ID, $code->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Code relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function joinCode($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Code');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Code');
		}
		
		return $this;
	}

	/**
	 * Use the Code relation Code object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CodeQuery A secondary query class using the current class as primary query
	 */
	public function useCodeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCode($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Code', 'CodeQuery');
	}

	/**
	 * Filter the query by a related Visibility object
	 *
	 * @param     Visibility $visibility  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility, $comparison = null)
	{
		return $this
			->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibility->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Visibility relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function joinVisibility($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Visibility');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Visibility');
		}
		
		return $this;
	}

	/**
	 * Use the Visibility relation Visibility object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VisibilityQuery A secondary query class using the current class as primary query
	 */
	public function useVisibilityQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVisibility($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Visibility', 'VisibilityQuery');
	}

	/**
	 * Filter the query by a related SeaState object
	 *
	 * @param     SeaState $seaState  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterBySeaState($seaState, $comparison = null)
	{
		return $this
			->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaState->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the SeaState relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function joinSeaState($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('SeaState');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'SeaState');
		}
		
		return $this;
	}

	/**
	 * Use the SeaState relation SeaState object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SeaStateQuery A secondary query class using the current class as primary query
	 */
	public function useSeaStateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSeaState($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'SeaState', 'SeaStateQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfo($generalInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfo->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the GeneralInfo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function joinGeneralInfo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('GeneralInfo');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'GeneralInfo');
		}
		
		return $this;
	}

	/**
	 * Use the GeneralInfo relation GeneralInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneralInfoQuery A secondary query class using the current class as primary query
	 */
	public function useGeneralInfoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGeneralInfo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GeneralInfo', 'GeneralInfoQuery');
	}

	/**
	 * Filter the query by a related Sighting object
	 *
	 * @param     Sighting $sighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterBySighting($sighting, $comparison = null)
	{
		return $this
			->addUsingAlias(RecordPeer::ID, $sighting->getRecordId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function joinSighting($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Sighting');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Sighting');
		}
		
		return $this;
	}

	/**
	 * Use the Sighting relation Sighting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SightingQuery A secondary query class using the current class as primary query
	 */
	public function useSightingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSighting($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Sighting', 'SightingQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Record $record Object to remove from the list of results
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function prune($record = null)
	{
		if ($record) {
			$this->addUsingAlias(RecordPeer::ID, $record->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRecordQuery
