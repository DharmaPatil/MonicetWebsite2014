<?php


/**
 * Base class that represents a query for the 'content' table.
 *
 * 
 *
 * @method     ContentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ContentQuery orderBySection($order = Criteria::ASC) Order by the section column
 * @method     ContentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ContentQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ContentQuery groupById() Group by the id column
 * @method     ContentQuery groupBySection() Group by the section column
 * @method     ContentQuery groupByCreatedAt() Group by the created_at column
 * @method     ContentQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ContentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ContentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ContentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ContentQuery leftJoinContentI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContentI18n relation
 * @method     ContentQuery rightJoinContentI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContentI18n relation
 * @method     ContentQuery innerJoinContentI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the ContentI18n relation
 *
 * @method     Content findOne(PropelPDO $con = null) Return the first Content matching the query
 * @method     Content findOneOrCreate(PropelPDO $con = null) Return the first Content matching the query, or a new Content object populated from the query conditions when no match is found
 *
 * @method     Content findOneById(int $id) Return the first Content filtered by the id column
 * @method     Content findOneBySection(string $section) Return the first Content filtered by the section column
 * @method     Content findOneByCreatedAt(string $created_at) Return the first Content filtered by the created_at column
 * @method     Content findOneByUpdatedAt(string $updated_at) Return the first Content filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Content objects filtered by the id column
 * @method     array findBySection(string $section) Return Content objects filtered by the section column
 * @method     array findByCreatedAt(string $created_at) Return Content objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Content objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseContentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseContentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Content', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ContentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ContentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ContentQuery) {
			return $criteria;
		}
		$query = new ContentQuery();
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
	 * @return    Content|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ContentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ContentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ContentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ContentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the section column
	 * 
	 * @param     string $section The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterBySection($section = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($section)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $section)) {
				$section = str_replace('*', '%', $section);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ContentPeer::SECTION, $section, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related ContentI18n object
	 *
	 * @param     ContentI18n $contentI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByContentI18n($contentI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(ContentPeer::ID, $contentI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ContentI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function joinContentI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ContentI18n');
		
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
			$this->addJoinObject($join, 'ContentI18n');
		}
		
		return $this;
	}

	/**
	 * Use the ContentI18n relation ContentI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContentI18nQuery A secondary query class using the current class as primary query
	 */
	public function useContentI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinContentI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ContentI18n', 'ContentI18nQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Content $content Object to remove from the list of results
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function prune($content = null)
	{
		if ($content) {
			$this->addUsingAlias(ContentPeer::ID, $content->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseContentQuery
