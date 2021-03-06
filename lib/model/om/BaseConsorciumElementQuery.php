<?php


/**
 * Base class that represents a query for the 'consorcium_element' table.
 *
 * 
 *
 * @method     ConsorciumElementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ConsorciumElementQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ConsorciumElementQuery orderByLogotype($order = Criteria::ASC) Order by the logotype column
 * @method     ConsorciumElementQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method     ConsorciumElementQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     ConsorciumElementQuery orderByOrder($order = Criteria::ASC) Order by the order column
 * @method     ConsorciumElementQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ConsorciumElementQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ConsorciumElementQuery groupById() Group by the id column
 * @method     ConsorciumElementQuery groupByName() Group by the name column
 * @method     ConsorciumElementQuery groupByLogotype() Group by the logotype column
 * @method     ConsorciumElementQuery groupByLink() Group by the link column
 * @method     ConsorciumElementQuery groupBySlug() Group by the slug column
 * @method     ConsorciumElementQuery groupByOrder() Group by the order column
 * @method     ConsorciumElementQuery groupByCreatedAt() Group by the created_at column
 * @method     ConsorciumElementQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ConsorciumElementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ConsorciumElementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ConsorciumElementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ConsorciumElementQuery leftJoinConsorciumElementI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the ConsorciumElementI18n relation
 * @method     ConsorciumElementQuery rightJoinConsorciumElementI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ConsorciumElementI18n relation
 * @method     ConsorciumElementQuery innerJoinConsorciumElementI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the ConsorciumElementI18n relation
 *
 * @method     ConsorciumElement findOne(PropelPDO $con = null) Return the first ConsorciumElement matching the query
 * @method     ConsorciumElement findOneOrCreate(PropelPDO $con = null) Return the first ConsorciumElement matching the query, or a new ConsorciumElement object populated from the query conditions when no match is found
 *
 * @method     ConsorciumElement findOneById(int $id) Return the first ConsorciumElement filtered by the id column
 * @method     ConsorciumElement findOneByName(string $name) Return the first ConsorciumElement filtered by the name column
 * @method     ConsorciumElement findOneByLogotype(string $logotype) Return the first ConsorciumElement filtered by the logotype column
 * @method     ConsorciumElement findOneByLink(string $link) Return the first ConsorciumElement filtered by the link column
 * @method     ConsorciumElement findOneBySlug(string $slug) Return the first ConsorciumElement filtered by the slug column
 * @method     ConsorciumElement findOneByOrder(int $order) Return the first ConsorciumElement filtered by the order column
 * @method     ConsorciumElement findOneByCreatedAt(string $created_at) Return the first ConsorciumElement filtered by the created_at column
 * @method     ConsorciumElement findOneByUpdatedAt(string $updated_at) Return the first ConsorciumElement filtered by the updated_at column
 *
 * @method     array findById(int $id) Return ConsorciumElement objects filtered by the id column
 * @method     array findByName(string $name) Return ConsorciumElement objects filtered by the name column
 * @method     array findByLogotype(string $logotype) Return ConsorciumElement objects filtered by the logotype column
 * @method     array findByLink(string $link) Return ConsorciumElement objects filtered by the link column
 * @method     array findBySlug(string $slug) Return ConsorciumElement objects filtered by the slug column
 * @method     array findByOrder(int $order) Return ConsorciumElement objects filtered by the order column
 * @method     array findByCreatedAt(string $created_at) Return ConsorciumElement objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return ConsorciumElement objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseConsorciumElementQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseConsorciumElementQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'ConsorciumElement', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ConsorciumElementQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ConsorciumElementQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ConsorciumElementQuery) {
			return $criteria;
		}
		$query = new ConsorciumElementQuery();
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
	 * @return    ConsorciumElement|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ConsorciumElementPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ConsorciumElementPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ConsorciumElementPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ConsorciumElementPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ConsorciumElementPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the logotype column
	 * 
	 * @param     string $logotype The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByLogotype($logotype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($logotype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $logotype)) {
				$logotype = str_replace('*', '%', $logotype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConsorciumElementPeer::LOGOTYPE, $logotype, $comparison);
	}

	/**
	 * Filter the query on the link column
	 * 
	 * @param     string $link The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByLink($link = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($link)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $link)) {
				$link = str_replace('*', '%', $link);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConsorciumElementPeer::LINK, $link, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterBySlug($slug = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($slug)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $slug)) {
				$slug = str_replace('*', '%', $slug);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ConsorciumElementPeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query on the order column
	 * 
	 * @param     int|array $order The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByOrder($order = null, $comparison = null)
	{
		if (is_array($order)) {
			$useMinMax = false;
			if (isset($order['min'])) {
				$this->addUsingAlias(ConsorciumElementPeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($order['max'])) {
				$this->addUsingAlias(ConsorciumElementPeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ConsorciumElementPeer::ORDER, $order, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(ConsorciumElementPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(ConsorciumElementPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ConsorciumElementPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(ConsorciumElementPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(ConsorciumElementPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ConsorciumElementPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related ConsorciumElementI18n object
	 *
	 * @param     ConsorciumElementI18n $consorciumElementI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function filterByConsorciumElementI18n($consorciumElementI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(ConsorciumElementPeer::ID, $consorciumElementI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ConsorciumElementI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function joinConsorciumElementI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ConsorciumElementI18n');
		
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
			$this->addJoinObject($join, 'ConsorciumElementI18n');
		}
		
		return $this;
	}

	/**
	 * Use the ConsorciumElementI18n relation ConsorciumElementI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ConsorciumElementI18nQuery A secondary query class using the current class as primary query
	 */
	public function useConsorciumElementI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinConsorciumElementI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ConsorciumElementI18n', 'ConsorciumElementI18nQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ConsorciumElement $consorciumElement Object to remove from the list of results
	 *
	 * @return    ConsorciumElementQuery The current query, for fluid interface
	 */
	public function prune($consorciumElement = null)
	{
		if ($consorciumElement) {
			$this->addUsingAlias(ConsorciumElementPeer::ID, $consorciumElement->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseConsorciumElementQuery
