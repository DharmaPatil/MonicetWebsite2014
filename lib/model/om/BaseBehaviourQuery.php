<?php


/**
 * Base class that represents a query for the 'behaviour' table.
 *
 * 
 *
 * @method     BehaviourQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BehaviourQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     BehaviourQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     BehaviourQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     BehaviourQuery groupById() Group by the id column
 * @method     BehaviourQuery groupByCode() Group by the code column
 * @method     BehaviourQuery groupByCreatedAt() Group by the created_at column
 * @method     BehaviourQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     BehaviourQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BehaviourQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BehaviourQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BehaviourQuery leftJoinBehaviourI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the BehaviourI18n relation
 * @method     BehaviourQuery rightJoinBehaviourI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BehaviourI18n relation
 * @method     BehaviourQuery innerJoinBehaviourI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the BehaviourI18n relation
 *
 * @method     BehaviourQuery leftJoinSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sighting relation
 * @method     BehaviourQuery rightJoinSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sighting relation
 * @method     BehaviourQuery innerJoinSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the Sighting relation
 *
 * @method     BehaviourQuery leftJoinWatchSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchSighting relation
 * @method     BehaviourQuery rightJoinWatchSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchSighting relation
 * @method     BehaviourQuery innerJoinWatchSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchSighting relation
 *
 * @method     BehaviourQuery leftJoinObservationPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhoto relation
 * @method     BehaviourQuery rightJoinObservationPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhoto relation
 * @method     BehaviourQuery innerJoinObservationPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhoto relation
 *
 * @method     Behaviour findOne(PropelPDO $con = null) Return the first Behaviour matching the query
 * @method     Behaviour findOneOrCreate(PropelPDO $con = null) Return the first Behaviour matching the query, or a new Behaviour object populated from the query conditions when no match is found
 *
 * @method     Behaviour findOneById(int $id) Return the first Behaviour filtered by the id column
 * @method     Behaviour findOneByCode(int $code) Return the first Behaviour filtered by the code column
 * @method     Behaviour findOneByCreatedAt(string $created_at) Return the first Behaviour filtered by the created_at column
 * @method     Behaviour findOneByUpdatedAt(string $updated_at) Return the first Behaviour filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Behaviour objects filtered by the id column
 * @method     array findByCode(int $code) Return Behaviour objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return Behaviour objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Behaviour objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseBehaviourQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBehaviourQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Behaviour', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BehaviourQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BehaviourQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BehaviourQuery) {
			return $criteria;
		}
		$query = new BehaviourQuery();
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
	 * @return    Behaviour|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BehaviourPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BehaviourPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BehaviourPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BehaviourPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     int|array $code The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (is_array($code)) {
			$useMinMax = false;
			if (isset($code['min'])) {
				$this->addUsingAlias(BehaviourPeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($code['max'])) {
				$this->addUsingAlias(BehaviourPeer::CODE, $code['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BehaviourPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(BehaviourPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(BehaviourPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BehaviourPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(BehaviourPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(BehaviourPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BehaviourPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related BehaviourI18n object
	 *
	 * @param     BehaviourI18n $behaviourI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByBehaviourI18n($behaviourI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(BehaviourPeer::ID, $behaviourI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BehaviourI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function joinBehaviourI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('BehaviourI18n');
		
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
			$this->addJoinObject($join, 'BehaviourI18n');
		}
		
		return $this;
	}

	/**
	 * Use the BehaviourI18n relation BehaviourI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BehaviourI18nQuery A secondary query class using the current class as primary query
	 */
	public function useBehaviourI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBehaviourI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'BehaviourI18n', 'BehaviourI18nQuery');
	}

	/**
	 * Filter the query by a related Sighting object
	 *
	 * @param     Sighting $sighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterBySighting($sighting, $comparison = null)
	{
		return $this
			->addUsingAlias(BehaviourPeer::ID, $sighting->getBehaviourId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function joinSighting($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useSightingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinSighting($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Sighting', 'SightingQuery');
	}

	/**
	 * Filter the query by a related WatchSighting object
	 *
	 * @param     WatchSighting $watchSighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByWatchSighting($watchSighting, $comparison = null)
	{
		return $this
			->addUsingAlias(BehaviourPeer::ID, $watchSighting->getBehaviourId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchSighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
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
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function filterByObservationPhoto($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(BehaviourPeer::ID, $observationPhoto->getBehaviourId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhoto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
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
	 * @param     Behaviour $behaviour Object to remove from the list of results
	 *
	 * @return    BehaviourQuery The current query, for fluid interface
	 */
	public function prune($behaviour = null)
	{
		if ($behaviour) {
			$this->addUsingAlias(BehaviourPeer::ID, $behaviour->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBehaviourQuery
