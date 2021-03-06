<?php


/**
 * Base class that represents a query for the 'vessel' table.
 *
 * 
 *
 * @method     VesselQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VesselQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     VesselQuery orderByRecCetCode($order = Criteria::ASC) Order by the rec_cet_code column
 * @method     VesselQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     VesselQuery orderByLength($order = Criteria::ASC) Order by the length column
 * @method     VesselQuery orderByPower($order = Criteria::ASC) Order by the power column
 * @method     VesselQuery orderByHeight($order = Criteria::ASC) Order by the height column
 * @method     VesselQuery orderByObservations($order = Criteria::ASC) Order by the observations column
 * @method     VesselQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     VesselQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     VesselQuery groupById() Group by the id column
 * @method     VesselQuery groupByCompanyId() Group by the company_id column
 * @method     VesselQuery groupByRecCetCode() Group by the rec_cet_code column
 * @method     VesselQuery groupByName() Group by the name column
 * @method     VesselQuery groupByLength() Group by the length column
 * @method     VesselQuery groupByPower() Group by the power column
 * @method     VesselQuery groupByHeight() Group by the height column
 * @method     VesselQuery groupByObservations() Group by the observations column
 * @method     VesselQuery groupByCreatedAt() Group by the created_at column
 * @method     VesselQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     VesselQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VesselQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VesselQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VesselQuery leftJoinCompany($relationAlias = null) Adds a LEFT JOIN clause to the query using the Company relation
 * @method     VesselQuery rightJoinCompany($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Company relation
 * @method     VesselQuery innerJoinCompany($relationAlias = null) Adds a INNER JOIN clause to the query using the Company relation
 *
 * @method     VesselQuery leftJoinGeneralInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the GeneralInfo relation
 * @method     VesselQuery rightJoinGeneralInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GeneralInfo relation
 * @method     VesselQuery innerJoinGeneralInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the GeneralInfo relation
 *
 * @method     VesselQuery leftJoinWatchSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchSighting relation
 * @method     VesselQuery rightJoinWatchSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchSighting relation
 * @method     VesselQuery innerJoinWatchSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchSighting relation
 *
 * @method     VesselQuery leftJoinObservationPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhoto relation
 * @method     VesselQuery rightJoinObservationPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhoto relation
 * @method     VesselQuery innerJoinObservationPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhoto relation
 *
 * @method     Vessel findOne(PropelPDO $con = null) Return the first Vessel matching the query
 * @method     Vessel findOneOrCreate(PropelPDO $con = null) Return the first Vessel matching the query, or a new Vessel object populated from the query conditions when no match is found
 *
 * @method     Vessel findOneById(int $id) Return the first Vessel filtered by the id column
 * @method     Vessel findOneByCompanyId(int $company_id) Return the first Vessel filtered by the company_id column
 * @method     Vessel findOneByRecCetCode(string $rec_cet_code) Return the first Vessel filtered by the rec_cet_code column
 * @method     Vessel findOneByName(string $name) Return the first Vessel filtered by the name column
 * @method     Vessel findOneByLength(int $length) Return the first Vessel filtered by the length column
 * @method     Vessel findOneByPower(double $power) Return the first Vessel filtered by the power column
 * @method     Vessel findOneByHeight(double $height) Return the first Vessel filtered by the height column
 * @method     Vessel findOneByObservations(string $observations) Return the first Vessel filtered by the observations column
 * @method     Vessel findOneByCreatedAt(string $created_at) Return the first Vessel filtered by the created_at column
 * @method     Vessel findOneByUpdatedAt(string $updated_at) Return the first Vessel filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Vessel objects filtered by the id column
 * @method     array findByCompanyId(int $company_id) Return Vessel objects filtered by the company_id column
 * @method     array findByRecCetCode(string $rec_cet_code) Return Vessel objects filtered by the rec_cet_code column
 * @method     array findByName(string $name) Return Vessel objects filtered by the name column
 * @method     array findByLength(int $length) Return Vessel objects filtered by the length column
 * @method     array findByPower(double $power) Return Vessel objects filtered by the power column
 * @method     array findByHeight(double $height) Return Vessel objects filtered by the height column
 * @method     array findByObservations(string $observations) Return Vessel objects filtered by the observations column
 * @method     array findByCreatedAt(string $created_at) Return Vessel objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Vessel objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVesselQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVesselQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Vessel', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VesselQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VesselQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VesselQuery) {
			return $criteria;
		}
		$query = new VesselQuery();
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
	 * @return    Vessel|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = VesselPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VesselPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VesselPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VesselPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the company_id column
	 * 
	 * @param     int|array $companyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByCompanyId($companyId = null, $comparison = null)
	{
		if (is_array($companyId)) {
			$useMinMax = false;
			if (isset($companyId['min'])) {
				$this->addUsingAlias(VesselPeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($companyId['max'])) {
				$this->addUsingAlias(VesselPeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VesselPeer::COMPANY_ID, $companyId, $comparison);
	}

	/**
	 * Filter the query on the rec_cet_code column
	 * 
	 * @param     string $recCetCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByRecCetCode($recCetCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($recCetCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $recCetCode)) {
				$recCetCode = str_replace('*', '%', $recCetCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VesselPeer::REC_CET_CODE, $recCetCode, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VesselPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the length column
	 * 
	 * @param     int|array $length The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByLength($length = null, $comparison = null)
	{
		if (is_array($length)) {
			$useMinMax = false;
			if (isset($length['min'])) {
				$this->addUsingAlias(VesselPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($length['max'])) {
				$this->addUsingAlias(VesselPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VesselPeer::LENGTH, $length, $comparison);
	}

	/**
	 * Filter the query on the power column
	 * 
	 * @param     double|array $power The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByPower($power = null, $comparison = null)
	{
		if (is_array($power)) {
			$useMinMax = false;
			if (isset($power['min'])) {
				$this->addUsingAlias(VesselPeer::POWER, $power['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($power['max'])) {
				$this->addUsingAlias(VesselPeer::POWER, $power['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VesselPeer::POWER, $power, $comparison);
	}

	/**
	 * Filter the query on the height column
	 * 
	 * @param     double|array $height The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByHeight($height = null, $comparison = null)
	{
		if (is_array($height)) {
			$useMinMax = false;
			if (isset($height['min'])) {
				$this->addUsingAlias(VesselPeer::HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($height['max'])) {
				$this->addUsingAlias(VesselPeer::HEIGHT, $height['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VesselPeer::HEIGHT, $height, $comparison);
	}

	/**
	 * Filter the query on the observations column
	 * 
	 * @param     string $observations The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByObservations($observations = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($observations)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $observations)) {
				$observations = str_replace('*', '%', $observations);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VesselPeer::OBSERVATIONS, $observations, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(VesselPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(VesselPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VesselPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(VesselPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(VesselPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VesselPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related Company object
	 *
	 * @param     Company $company  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByCompany($company, $comparison = null)
	{
		return $this
			->addUsingAlias(VesselPeer::COMPANY_ID, $company->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Company relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function joinCompany($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Company');
		
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
			$this->addJoinObject($join, 'Company');
		}
		
		return $this;
	}

	/**
	 * Use the Company relation Company object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCompany($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfo($generalInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(VesselPeer::ID, $generalInfo->getVesselId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the GeneralInfo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function joinGeneralInfo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useGeneralInfoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinGeneralInfo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GeneralInfo', 'GeneralInfoQuery');
	}

	/**
	 * Filter the query by a related WatchSighting object
	 *
	 * @param     WatchSighting $watchSighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByWatchSighting($watchSighting, $comparison = null)
	{
		return $this
			->addUsingAlias(VesselPeer::ID, $watchSighting->getVesselId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchSighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function joinWatchSighting($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchSighting');
		
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
			$this->addJoinObject($join, 'WatchSighting');
		}
		
		return $this;
	}

	/**
	 * Use the WatchSighting relation WatchSighting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchSightingQuery A secondary query class using the current class as primary query
	 */
	public function useWatchSightingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinWatchSighting($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchSighting', 'WatchSightingQuery');
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function filterByObservationPhoto($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(VesselPeer::ID, $observationPhoto->getVesselId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhoto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function joinObservationPhoto($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhoto');
		
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
			$this->addJoinObject($join, 'ObservationPhoto');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhoto relation ObservationPhoto object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinObservationPhoto($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhoto', 'ObservationPhotoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Vessel $vessel Object to remove from the list of results
	 *
	 * @return    VesselQuery The current query, for fluid interface
	 */
	public function prune($vessel = null)
	{
		if ($vessel) {
			$this->addUsingAlias(VesselPeer::ID, $vessel->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseVesselQuery
