<?php


/**
 * Base class that represents a query for the 'watch_visibility' table.
 *
 * 
 *
 * @method     WatchVisibilityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     WatchVisibilityQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     WatchVisibilityQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     WatchVisibilityQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     WatchVisibilityQuery groupById() Group by the id column
 * @method     WatchVisibilityQuery groupByCode() Group by the code column
 * @method     WatchVisibilityQuery groupByCreatedAt() Group by the created_at column
 * @method     WatchVisibilityQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     WatchVisibilityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     WatchVisibilityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     WatchVisibilityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     WatchVisibilityQuery leftJoinWatchSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchSighting relation
 * @method     WatchVisibilityQuery rightJoinWatchSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchSighting relation
 * @method     WatchVisibilityQuery innerJoinWatchSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchSighting relation
 *
 * @method     WatchVisibilityQuery leftJoinWatchVisibilityI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchVisibilityI18n relation
 * @method     WatchVisibilityQuery rightJoinWatchVisibilityI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchVisibilityI18n relation
 * @method     WatchVisibilityQuery innerJoinWatchVisibilityI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchVisibilityI18n relation
 *
 * @method     WatchVisibility findOne(PropelPDO $con = null) Return the first WatchVisibility matching the query
 * @method     WatchVisibility findOneOrCreate(PropelPDO $con = null) Return the first WatchVisibility matching the query, or a new WatchVisibility object populated from the query conditions when no match is found
 *
 * @method     WatchVisibility findOneById(int $id) Return the first WatchVisibility filtered by the id column
 * @method     WatchVisibility findOneByCode(int $code) Return the first WatchVisibility filtered by the code column
 * @method     WatchVisibility findOneByCreatedAt(string $created_at) Return the first WatchVisibility filtered by the created_at column
 * @method     WatchVisibility findOneByUpdatedAt(string $updated_at) Return the first WatchVisibility filtered by the updated_at column
 *
 * @method     array findById(int $id) Return WatchVisibility objects filtered by the id column
 * @method     array findByCode(int $code) Return WatchVisibility objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return WatchVisibility objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return WatchVisibility objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseWatchVisibilityQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWatchVisibilityQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'WatchVisibility', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new WatchVisibilityQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    WatchVisibilityQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof WatchVisibilityQuery) {
			return $criteria;
		}
		$query = new WatchVisibilityQuery();
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
	 * @return    WatchVisibility|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = WatchVisibilityPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WatchVisibilityPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WatchVisibilityPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(WatchVisibilityPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     int|array $code The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (is_array($code)) {
			$useMinMax = false;
			if (isset($code['min'])) {
				$this->addUsingAlias(WatchVisibilityPeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($code['max'])) {
				$this->addUsingAlias(WatchVisibilityPeer::CODE, $code['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchVisibilityPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(WatchVisibilityPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(WatchVisibilityPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchVisibilityPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(WatchVisibilityPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(WatchVisibilityPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchVisibilityPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related WatchSighting object
	 *
	 * @param     WatchSighting $watchSighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByWatchSighting($watchSighting, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchVisibilityPeer::ID, $watchSighting->getWatchVisibilityId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchSighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
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
	 * Filter the query by a related WatchVisibilityI18n object
	 *
	 * @param     WatchVisibilityI18n $watchVisibilityI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function filterByWatchVisibilityI18n($watchVisibilityI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchVisibilityPeer::ID, $watchVisibilityI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchVisibilityI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function joinWatchVisibilityI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchVisibilityI18n');
		
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
			$this->addJoinObject($join, 'WatchVisibilityI18n');
		}
		
		return $this;
	}

	/**
	 * Use the WatchVisibilityI18n relation WatchVisibilityI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchVisibilityI18nQuery A secondary query class using the current class as primary query
	 */
	public function useWatchVisibilityI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinWatchVisibilityI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchVisibilityI18n', 'WatchVisibilityI18nQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     WatchVisibility $watchVisibility Object to remove from the list of results
	 *
	 * @return    WatchVisibilityQuery The current query, for fluid interface
	 */
	public function prune($watchVisibility = null)
	{
		if ($watchVisibility) {
			$this->addUsingAlias(WatchVisibilityPeer::ID, $watchVisibility->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseWatchVisibilityQuery
