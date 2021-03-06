<?php


/**
 * Base class that represents a query for the 'news_article' table.
 *
 * 
 *
 * @method     NewsArticleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NewsArticleQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method     NewsArticleQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     NewsArticleQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     NewsArticleQuery orderByEnterDate($order = Criteria::ASC) Order by the enter_date column
 * @method     NewsArticleQuery orderByExitDate($order = Criteria::ASC) Order by the exit_date column
 * @method     NewsArticleQuery orderByPublishDate($order = Criteria::ASC) Order by the publish_date column
 * @method     NewsArticleQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     NewsArticleQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     NewsArticleQuery groupById() Group by the id column
 * @method     NewsArticleQuery groupByIsPublished() Group by the is_published column
 * @method     NewsArticleQuery groupBySlug() Group by the slug column
 * @method     NewsArticleQuery groupByImage() Group by the image column
 * @method     NewsArticleQuery groupByEnterDate() Group by the enter_date column
 * @method     NewsArticleQuery groupByExitDate() Group by the exit_date column
 * @method     NewsArticleQuery groupByPublishDate() Group by the publish_date column
 * @method     NewsArticleQuery groupByCreatedAt() Group by the created_at column
 * @method     NewsArticleQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     NewsArticleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NewsArticleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NewsArticleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NewsArticleQuery leftJoinNewsArticleI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the NewsArticleI18n relation
 * @method     NewsArticleQuery rightJoinNewsArticleI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NewsArticleI18n relation
 * @method     NewsArticleQuery innerJoinNewsArticleI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the NewsArticleI18n relation
 *
 * @method     NewsArticle findOne(PropelPDO $con = null) Return the first NewsArticle matching the query
 * @method     NewsArticle findOneOrCreate(PropelPDO $con = null) Return the first NewsArticle matching the query, or a new NewsArticle object populated from the query conditions when no match is found
 *
 * @method     NewsArticle findOneById(int $id) Return the first NewsArticle filtered by the id column
 * @method     NewsArticle findOneByIsPublished(boolean $is_published) Return the first NewsArticle filtered by the is_published column
 * @method     NewsArticle findOneBySlug(string $slug) Return the first NewsArticle filtered by the slug column
 * @method     NewsArticle findOneByImage(string $image) Return the first NewsArticle filtered by the image column
 * @method     NewsArticle findOneByEnterDate(string $enter_date) Return the first NewsArticle filtered by the enter_date column
 * @method     NewsArticle findOneByExitDate(string $exit_date) Return the first NewsArticle filtered by the exit_date column
 * @method     NewsArticle findOneByPublishDate(string $publish_date) Return the first NewsArticle filtered by the publish_date column
 * @method     NewsArticle findOneByCreatedAt(string $created_at) Return the first NewsArticle filtered by the created_at column
 * @method     NewsArticle findOneByUpdatedAt(string $updated_at) Return the first NewsArticle filtered by the updated_at column
 *
 * @method     array findById(int $id) Return NewsArticle objects filtered by the id column
 * @method     array findByIsPublished(boolean $is_published) Return NewsArticle objects filtered by the is_published column
 * @method     array findBySlug(string $slug) Return NewsArticle objects filtered by the slug column
 * @method     array findByImage(string $image) Return NewsArticle objects filtered by the image column
 * @method     array findByEnterDate(string $enter_date) Return NewsArticle objects filtered by the enter_date column
 * @method     array findByExitDate(string $exit_date) Return NewsArticle objects filtered by the exit_date column
 * @method     array findByPublishDate(string $publish_date) Return NewsArticle objects filtered by the publish_date column
 * @method     array findByCreatedAt(string $created_at) Return NewsArticle objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return NewsArticle objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseNewsArticleQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNewsArticleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'NewsArticle', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NewsArticleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NewsArticleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NewsArticleQuery) {
			return $criteria;
		}
		$query = new NewsArticleQuery();
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
	 * @return    NewsArticle|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NewsArticlePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NewsArticlePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NewsArticlePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NewsArticlePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the is_published column
	 * 
	 * @param     boolean|string $isPublished The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByIsPublished($isPublished = null, $comparison = null)
	{
		if (is_string($isPublished)) {
			$is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(NewsArticlePeer::IS_PUBLISHED, $isPublished, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NewsArticlePeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($image)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $image)) {
				$image = str_replace('*', '%', $image);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NewsArticlePeer::IMAGE, $image, $comparison);
	}

	/**
	 * Filter the query on the enter_date column
	 * 
	 * @param     string|array $enterDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByEnterDate($enterDate = null, $comparison = null)
	{
		if (is_array($enterDate)) {
			$useMinMax = false;
			if (isset($enterDate['min'])) {
				$this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($enterDate['max'])) {
				$this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate, $comparison);
	}

	/**
	 * Filter the query on the exit_date column
	 * 
	 * @param     string|array $exitDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByExitDate($exitDate = null, $comparison = null)
	{
		if (is_array($exitDate)) {
			$useMinMax = false;
			if (isset($exitDate['min'])) {
				$this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($exitDate['max'])) {
				$this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate, $comparison);
	}

	/**
	 * Filter the query on the publish_date column
	 * 
	 * @param     string|array $publishDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByPublishDate($publishDate = null, $comparison = null)
	{
		if (is_array($publishDate)) {
			$useMinMax = false;
			if (isset($publishDate['min'])) {
				$this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publishDate['max'])) {
				$this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related NewsArticleI18n object
	 *
	 * @param     NewsArticleI18n $newsArticleI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByNewsArticleI18n($newsArticleI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(NewsArticlePeer::ID, $newsArticleI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the NewsArticleI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function joinNewsArticleI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NewsArticleI18n');
		
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
			$this->addJoinObject($join, 'NewsArticleI18n');
		}
		
		return $this;
	}

	/**
	 * Use the NewsArticleI18n relation NewsArticleI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NewsArticleI18nQuery A secondary query class using the current class as primary query
	 */
	public function useNewsArticleI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNewsArticleI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NewsArticleI18n', 'NewsArticleI18nQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NewsArticle $newsArticle Object to remove from the list of results
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function prune($newsArticle = null)
	{
		if ($newsArticle) {
			$this->addUsingAlias(NewsArticlePeer::ID, $newsArticle->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNewsArticleQuery
