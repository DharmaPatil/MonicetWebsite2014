<?php


/**
 * Base class that represents a query for the 'visibility' table.
 *
 * 
 *
 * @method     VisibilityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VisibilityQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     VisibilityQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     VisibilityQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     VisibilityQuery groupById() Group by the id column
 * @method     VisibilityQuery groupByCode() Group by the code column
 * @method     VisibilityQuery groupByCreatedAt() Group by the created_at column
 * @method     VisibilityQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     VisibilityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VisibilityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VisibilityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VisibilityQuery leftJoinVisibilityI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the VisibilityI18n relation
 * @method     VisibilityQuery rightJoinVisibilityI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VisibilityI18n relation
 * @method     VisibilityQuery innerJoinVisibilityI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the VisibilityI18n relation
 *
 * @method     VisibilityQuery leftJoinRecord($relationAlias = null) Adds a LEFT JOIN clause to the query using the Record relation
 * @method     VisibilityQuery rightJoinRecord($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Record relation
 * @method     VisibilityQuery innerJoinRecord($relationAlias = null) Adds a INNER JOIN clause to the query using the Record relation
 *
 * @method     Visibility findOne(PropelPDO $con = null) Return the first Visibility matching the query
 * @method     Visibility findOneOrCreate(PropelPDO $con = null) Return the first Visibility matching the query, or a new Visibility object populated from the query conditions when no match is found
 *
 * @method     Visibility findOneById(int $id) Return the first Visibility filtered by the id column
 * @method     Visibility findOneByCode(int $code) Return the first Visibility filtered by the code column
 * @method     Visibility findOneByCreatedAt(string $created_at) Return the first Visibility filtered by the created_at column
 * @method     Visibility findOneByUpdatedAt(string $updated_at) Return the first Visibility filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Visibility objects filtered by the id column
 * @method     array findByCode(int $code) Return Visibility objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return Visibility objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Visibility objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVisibilityQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVisibilityQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Visibility', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VisibilityQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VisibilityQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VisibilityQuery) {
			return $criteria;
		}
		$query = new VisibilityQuery();
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
	 * @return    Visibility|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = VisibilityPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VisibilityPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VisibilityPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VisibilityPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     int|array $code The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (is_array($code)) {
			$useMinMax = false;
			if (isset($code['min'])) {
				$this->addUsingAlias(VisibilityPeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($code['max'])) {
				$this->addUsingAlias(VisibilityPeer::CODE, $code['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VisibilityPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(VisibilityPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(VisibilityPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VisibilityPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(VisibilityPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(VisibilityPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VisibilityPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related VisibilityI18n object
	 *
	 * @param     VisibilityI18n $visibilityI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByVisibilityI18n($visibilityI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(VisibilityPeer::ID, $visibilityI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the VisibilityI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function joinVisibilityI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('VisibilityI18n');
		
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
			$this->addJoinObject($join, 'VisibilityI18n');
		}
		
		return $this;
	}

	/**
	 * Use the VisibilityI18n relation VisibilityI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VisibilityI18nQuery A secondary query class using the current class as primary query
	 */
	public function useVisibilityI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVisibilityI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'VisibilityI18n', 'VisibilityI18nQuery');
	}

	/**
	 * Filter the query by a related Record object
	 *
	 * @param     Record $record  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function filterByRecord($record, $comparison = null)
	{
		return $this
			->addUsingAlias(VisibilityPeer::ID, $record->getVisibilityId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Record relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function joinRecord($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Record');
		
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
			$this->addJoinObject($join, 'Record');
		}
		
		return $this;
	}

	/**
	 * Use the Record relation Record object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery A secondary query class using the current class as primary query
	 */
	public function useRecordQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRecord($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Record', 'RecordQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Visibility $visibility Object to remove from the list of results
	 *
	 * @return    VisibilityQuery The current query, for fluid interface
	 */
	public function prune($visibility = null)
	{
		if ($visibility) {
			$this->addUsingAlias(VisibilityPeer::ID, $visibility->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseVisibilityQuery
