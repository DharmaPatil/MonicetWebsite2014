<?php


/**
 * Base class that represents a query for the 'news_article_i18n' table.
 *
 * 
 *
 * @method     NewsArticleI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NewsArticleI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 * @method     NewsArticleI18nQuery orderByHeadline($order = Criteria::ASC) Order by the headline column
 * @method     NewsArticleI18nQuery orderByBody($order = Criteria::ASC) Order by the body column
 *
 * @method     NewsArticleI18nQuery groupById() Group by the id column
 * @method     NewsArticleI18nQuery groupByCulture() Group by the culture column
 * @method     NewsArticleI18nQuery groupByHeadline() Group by the headline column
 * @method     NewsArticleI18nQuery groupByBody() Group by the body column
 *
 * @method     NewsArticleI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NewsArticleI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NewsArticleI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NewsArticleI18nQuery leftJoinNewsArticle($relationAlias = null) Adds a LEFT JOIN clause to the query using the NewsArticle relation
 * @method     NewsArticleI18nQuery rightJoinNewsArticle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NewsArticle relation
 * @method     NewsArticleI18nQuery innerJoinNewsArticle($relationAlias = null) Adds a INNER JOIN clause to the query using the NewsArticle relation
 *
 * @method     NewsArticleI18n findOne(PropelPDO $con = null) Return the first NewsArticleI18n matching the query
 * @method     NewsArticleI18n findOneOrCreate(PropelPDO $con = null) Return the first NewsArticleI18n matching the query, or a new NewsArticleI18n object populated from the query conditions when no match is found
 *
 * @method     NewsArticleI18n findOneById(int $id) Return the first NewsArticleI18n filtered by the id column
 * @method     NewsArticleI18n findOneByCulture(string $culture) Return the first NewsArticleI18n filtered by the culture column
 * @method     NewsArticleI18n findOneByHeadline(string $headline) Return the first NewsArticleI18n filtered by the headline column
 * @method     NewsArticleI18n findOneByBody(string $body) Return the first NewsArticleI18n filtered by the body column
 *
 * @method     array findById(int $id) Return NewsArticleI18n objects filtered by the id column
 * @method     array findByCulture(string $culture) Return NewsArticleI18n objects filtered by the culture column
 * @method     array findByHeadline(string $headline) Return NewsArticleI18n objects filtered by the headline column
 * @method     array findByBody(string $body) Return NewsArticleI18n objects filtered by the body column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseNewsArticleI18nQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNewsArticleI18nQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'NewsArticleI18n', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NewsArticleI18nQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NewsArticleI18nQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NewsArticleI18nQuery) {
			return $criteria;
		}
		$query = new NewsArticleI18nQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$id, $culture] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    NewsArticleI18n|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NewsArticleI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(NewsArticleI18nPeer::ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(NewsArticleI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(NewsArticleI18nPeer::ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(NewsArticleI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NewsArticleI18nPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the culture column
	 * 
	 * @param     string $culture The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterByCulture($culture = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($culture)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $culture)) {
				$culture = str_replace('*', '%', $culture);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NewsArticleI18nPeer::CULTURE, $culture, $comparison);
	}

	/**
	 * Filter the query on the headline column
	 * 
	 * @param     string $headline The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterByHeadline($headline = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($headline)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $headline)) {
				$headline = str_replace('*', '%', $headline);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NewsArticleI18nPeer::HEADLINE, $headline, $comparison);
	}

	/**
	 * Filter the query on the body column
	 * 
	 * @param     string $body The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterByBody($body = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($body)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $body)) {
				$body = str_replace('*', '%', $body);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NewsArticleI18nPeer::BODY, $body, $comparison);
	}

	/**
	 * Filter the query by a related NewsArticle object
	 *
	 * @param     NewsArticle $newsArticle  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function filterByNewsArticle($newsArticle, $comparison = null)
	{
		return $this
			->addUsingAlias(NewsArticleI18nPeer::ID, $newsArticle->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the NewsArticle relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function joinNewsArticle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NewsArticle');
		
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
			$this->addJoinObject($join, 'NewsArticle');
		}
		
		return $this;
	}

	/**
	 * Use the NewsArticle relation NewsArticle object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NewsArticleQuery A secondary query class using the current class as primary query
	 */
	public function useNewsArticleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNewsArticle($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NewsArticle', 'NewsArticleQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NewsArticleI18n $newsArticleI18n Object to remove from the list of results
	 *
	 * @return    NewsArticleI18nQuery The current query, for fluid interface
	 */
	public function prune($newsArticleI18n = null)
	{
		if ($newsArticleI18n) {
			$this->addCond('pruneCond0', $this->getAliasedColName(NewsArticleI18nPeer::ID), $newsArticleI18n->getId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(NewsArticleI18nPeer::CULTURE), $newsArticleI18n->getCulture(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseNewsArticleI18nQuery
