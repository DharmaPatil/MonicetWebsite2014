<?php


/**
 * Base class that represents a query for the 'content' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Sun Oct 30 15:32:52 2011
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
 * @method     Content findOne(PropelPDO $con = null) Return the first Content matching the query
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = ContentPeer::getInstanceFromPool((string) $key)))) {
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
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(ContentPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(ContentPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the section column
	 * 
	 * @param     string $section The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterBySection($section = null)
	{
		if(preg_match('/[\%\*]/', $section)) {
			return $this->addUsingAlias(ContentPeer::SECTION, str_replace('*', '%', $section), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(ContentPeer::SECTION, $section, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(ContentPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(ContentPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related ContentI18n object
	 *
	 * @param     ContentI18n $contentI18n  the related object to use as filter
	 *
	 * @return    ContentQuery The current query, for fluid interface
	 */
	public function filterByContentI18n($contentI18n)
	{
		return $this
			->addUsingAlias(ContentPeer::ID, $contentI18n->getId(), Criteria::EQUAL);
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
	public function useContentI18nQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('ContentI18n' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
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

} // BaseContentQuery
