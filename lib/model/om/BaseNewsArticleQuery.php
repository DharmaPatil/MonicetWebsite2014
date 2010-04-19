<?php


/**
 * Base class that represents a query for the 'news_article' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Mon Apr 19 09:28:05 2010
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
 * @method     NewsArticle findOne(PropelPDO $con = null) Return the first NewsArticle matching the query
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
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = NewsArticlePeer::getInstanceFromPool((string) $key)))) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			return $this
				->filterByPrimaryKey($key)
				->findOne($con);
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
	 * @return    the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
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
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(NewsArticlePeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(NewsArticlePeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the is_published column
	 * 
	 * @param     boolean|string $isPublished The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByIsPublished($isPublished = null)
	{
		if(is_string($isPublished)) {
			$is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(NewsArticlePeer::IS_PUBLISHED, $isPublished, Criteria::EQUAL);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterBySlug($slug = null)
	{
		if(preg_match('/[\%\*]/', $slug)) {
			return $this->addUsingAlias(NewsArticlePeer::SLUG, str_replace('*', '%', $slug), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(NewsArticlePeer::SLUG, $slug, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null)
	{
		if(preg_match('/[\%\*]/', $image)) {
			return $this->addUsingAlias(NewsArticlePeer::IMAGE, str_replace('*', '%', $image), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(NewsArticlePeer::IMAGE, $image, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the enter_date column
	 * 
	 * @param     string|array $enter_date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByEnterDate($enterDate = null)
	{
		if (is_array($enterDate)) {
			if (array_values($enterDate) === $enterDate) {
				return $this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate, Criteria::IN);
			} else {
				if (isset($enterDate['min'])) {
					$this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($enterDate['max'])) {
					$this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(NewsArticlePeer::ENTER_DATE, $enterDate, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the exit_date column
	 * 
	 * @param     string|array $exit_date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByExitDate($exitDate = null)
	{
		if (is_array($exitDate)) {
			if (array_values($exitDate) === $exitDate) {
				return $this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate, Criteria::IN);
			} else {
				if (isset($exitDate['min'])) {
					$this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($exitDate['max'])) {
					$this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(NewsArticlePeer::EXIT_DATE, $exitDate, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the publish_date column
	 * 
	 * @param     string|array $publish_date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByPublishDate($publishDate = null)
	{
		if (is_array($publishDate)) {
			if (array_values($publishDate) === $publishDate) {
				return $this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate, Criteria::IN);
			} else {
				if (isset($publishDate['min'])) {
					$this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($publishDate['max'])) {
					$this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(NewsArticlePeer::PUBLISH_DATE, $publishDate, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(NewsArticlePeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(NewsArticlePeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related NewsArticleI18n object
	 *
	 * @param     NewsArticleI18n $newsArticleI18n  the related object to use as filter
	 *
	 * @return    NewsArticleQuery The current query, for fluid interface
	 */
	public function filterByNewsArticleI18n($newsArticleI18n)
	{
		return $this
			->addUsingAlias(NewsArticlePeer::ID, $newsArticleI18n->getId(), Criteria::EQUAL);
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
	public function useNewsArticleI18nQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('NewsArticleI18n' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
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

	/**
	 * Code to execute before every SELECT statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreSelect(PropelPDO $con)
	{
		return $this->preSelect($con);
	}

	/**
	 * Code to execute before every DELETE statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreDelete(PropelPDO $con)
	{
		return $this->preDelete($con);
	}

	/**
	 * Code to execute before every UPDATE statement
	 * 
	 * @param     array $values The associatiove array of columns and values for the update
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreUpdate(&$values, PropelPDO $con)
	{
		return $this->preUpdate($values, $con);
	}

} // BaseNewsArticleQuery
