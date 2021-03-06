<?php


/**
 * Base class that represents a query for the 'body_part' table.
 *
 * 
 *
 * @method     BodyPartQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BodyPartQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     BodyPartQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     BodyPartQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     BodyPartQuery groupById() Group by the id column
 * @method     BodyPartQuery groupByCode() Group by the code column
 * @method     BodyPartQuery groupByCreatedAt() Group by the created_at column
 * @method     BodyPartQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     BodyPartQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BodyPartQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BodyPartQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BodyPartQuery leftJoinBodyPartI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the BodyPartI18n relation
 * @method     BodyPartQuery rightJoinBodyPartI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BodyPartI18n relation
 * @method     BodyPartQuery innerJoinBodyPartI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the BodyPartI18n relation
 *
 * @method     BodyPartQuery leftJoinObservationPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhoto relation
 * @method     BodyPartQuery rightJoinObservationPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhoto relation
 * @method     BodyPartQuery innerJoinObservationPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhoto relation
 *
 * @method     BodyPart findOne(PropelPDO $con = null) Return the first BodyPart matching the query
 * @method     BodyPart findOneOrCreate(PropelPDO $con = null) Return the first BodyPart matching the query, or a new BodyPart object populated from the query conditions when no match is found
 *
 * @method     BodyPart findOneById(int $id) Return the first BodyPart filtered by the id column
 * @method     BodyPart findOneByCode(string $code) Return the first BodyPart filtered by the code column
 * @method     BodyPart findOneByCreatedAt(string $created_at) Return the first BodyPart filtered by the created_at column
 * @method     BodyPart findOneByUpdatedAt(string $updated_at) Return the first BodyPart filtered by the updated_at column
 *
 * @method     array findById(int $id) Return BodyPart objects filtered by the id column
 * @method     array findByCode(string $code) Return BodyPart objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return BodyPart objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return BodyPart objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseBodyPartQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBodyPartQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'BodyPart', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BodyPartQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BodyPartQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BodyPartQuery) {
			return $criteria;
		}
		$query = new BodyPartQuery();
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
	 * @return    BodyPart|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BodyPartPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BodyPartPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BodyPartPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BodyPartPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($code)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $code)) {
				$code = str_replace('*', '%', $code);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BodyPartPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(BodyPartPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(BodyPartPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BodyPartPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(BodyPartPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(BodyPartPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BodyPartPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related BodyPartI18n object
	 *
	 * @param     BodyPartI18n $bodyPartI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByBodyPartI18n($bodyPartI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(BodyPartPeer::ID, $bodyPartI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BodyPartI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function joinBodyPartI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('BodyPartI18n');
		
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
			$this->addJoinObject($join, 'BodyPartI18n');
		}
		
		return $this;
	}

	/**
	 * Use the BodyPartI18n relation BodyPartI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BodyPartI18nQuery A secondary query class using the current class as primary query
	 */
	public function useBodyPartI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBodyPartI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'BodyPartI18n', 'BodyPartI18nQuery');
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function filterByObservationPhoto($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(BodyPartPeer::ID, $observationPhoto->getBodyPartId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhoto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
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
	 * @param     BodyPart $bodyPart Object to remove from the list of results
	 *
	 * @return    BodyPartQuery The current query, for fluid interface
	 */
	public function prune($bodyPart = null)
	{
		if ($bodyPart) {
			$this->addUsingAlias(BodyPartPeer::ID, $bodyPart->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBodyPartQuery
