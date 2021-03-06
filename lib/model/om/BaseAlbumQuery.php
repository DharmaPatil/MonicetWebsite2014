<?php


/**
 * Base class that represents a query for the 'album' table.
 *
 * 
 *
 * @method     AlbumQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AlbumQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     AlbumQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method     AlbumQuery orderByPublishDate($order = Criteria::ASC) Order by the publish_date column
 * @method     AlbumQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     AlbumQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     AlbumQuery groupById() Group by the id column
 * @method     AlbumQuery groupBySlug() Group by the slug column
 * @method     AlbumQuery groupByIsPublic() Group by the is_public column
 * @method     AlbumQuery groupByPublishDate() Group by the publish_date column
 * @method     AlbumQuery groupByCreatedAt() Group by the created_at column
 * @method     AlbumQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     AlbumQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AlbumQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AlbumQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AlbumQuery leftJoinAlbumI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlbumI18n relation
 * @method     AlbumQuery rightJoinAlbumI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlbumI18n relation
 * @method     AlbumQuery innerJoinAlbumI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the AlbumI18n relation
 *
 * @method     AlbumQuery leftJoinPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Photo relation
 * @method     AlbumQuery rightJoinPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Photo relation
 * @method     AlbumQuery innerJoinPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the Photo relation
 *
 * @method     Album findOne(PropelPDO $con = null) Return the first Album matching the query
 * @method     Album findOneOrCreate(PropelPDO $con = null) Return the first Album matching the query, or a new Album object populated from the query conditions when no match is found
 *
 * @method     Album findOneById(int $id) Return the first Album filtered by the id column
 * @method     Album findOneBySlug(string $slug) Return the first Album filtered by the slug column
 * @method     Album findOneByIsPublic(boolean $is_public) Return the first Album filtered by the is_public column
 * @method     Album findOneByPublishDate(string $publish_date) Return the first Album filtered by the publish_date column
 * @method     Album findOneByCreatedAt(string $created_at) Return the first Album filtered by the created_at column
 * @method     Album findOneByUpdatedAt(string $updated_at) Return the first Album filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Album objects filtered by the id column
 * @method     array findBySlug(string $slug) Return Album objects filtered by the slug column
 * @method     array findByIsPublic(boolean $is_public) Return Album objects filtered by the is_public column
 * @method     array findByPublishDate(string $publish_date) Return Album objects filtered by the publish_date column
 * @method     array findByCreatedAt(string $created_at) Return Album objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Album objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAlbumQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAlbumQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Album', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AlbumQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AlbumQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AlbumQuery) {
			return $criteria;
		}
		$query = new AlbumQuery();
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
	 * @return    Album|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AlbumPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AlbumPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AlbumPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AlbumPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AlbumPeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query on the is_public column
	 * 
	 * @param     boolean|string $isPublic The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByIsPublic($isPublic = null, $comparison = null)
	{
		if (is_string($isPublic)) {
			$is_public = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(AlbumPeer::IS_PUBLIC, $isPublic, $comparison);
	}

	/**
	 * Filter the query on the publish_date column
	 * 
	 * @param     string|array $publishDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByPublishDate($publishDate = null, $comparison = null)
	{
		if (is_array($publishDate)) {
			$useMinMax = false;
			if (isset($publishDate['min'])) {
				$this->addUsingAlias(AlbumPeer::PUBLISH_DATE, $publishDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publishDate['max'])) {
				$this->addUsingAlias(AlbumPeer::PUBLISH_DATE, $publishDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AlbumPeer::PUBLISH_DATE, $publishDate, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(AlbumPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(AlbumPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AlbumPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(AlbumPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(AlbumPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AlbumPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related AlbumI18n object
	 *
	 * @param     AlbumI18n $albumI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByAlbumI18n($albumI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(AlbumPeer::ID, $albumI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AlbumI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function joinAlbumI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AlbumI18n');
		
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
			$this->addJoinObject($join, 'AlbumI18n');
		}
		
		return $this;
	}

	/**
	 * Use the AlbumI18n relation AlbumI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AlbumI18nQuery A secondary query class using the current class as primary query
	 */
	public function useAlbumI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAlbumI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AlbumI18n', 'AlbumI18nQuery');
	}

	/**
	 * Filter the query by a related Photo object
	 *
	 * @param     Photo $photo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function filterByPhoto($photo, $comparison = null)
	{
		return $this
			->addUsingAlias(AlbumPeer::ID, $photo->getAlbumId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Photo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function joinPhoto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Photo');
		
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
			$this->addJoinObject($join, 'Photo');
		}
		
		return $this;
	}

	/**
	 * Use the Photo relation Photo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PhotoQuery A secondary query class using the current class as primary query
	 */
	public function usePhotoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPhoto($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Photo', 'PhotoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Album $album Object to remove from the list of results
	 *
	 * @return    AlbumQuery The current query, for fluid interface
	 */
	public function prune($album = null)
	{
		if ($album) {
			$this->addUsingAlias(AlbumPeer::ID, $album->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAlbumQuery
