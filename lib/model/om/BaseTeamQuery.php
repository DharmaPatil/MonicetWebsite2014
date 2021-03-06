<?php


/**
 * Base class that represents a query for the 'team' table.
 *
 * 
 *
 * @method     TeamQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TeamQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     TeamQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     TeamQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     TeamQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method     TeamQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 * @method     TeamQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     TeamQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     TeamQuery groupById() Group by the id column
 * @method     TeamQuery groupBySlug() Group by the slug column
 * @method     TeamQuery groupByType() Group by the type column
 * @method     TeamQuery groupByName() Group by the name column
 * @method     TeamQuery groupByLink() Group by the link column
 * @method     TeamQuery groupByPhoto() Group by the photo column
 * @method     TeamQuery groupByCreatedAt() Group by the created_at column
 * @method     TeamQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     TeamQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TeamQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TeamQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TeamQuery leftJoinTeamI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the TeamI18n relation
 * @method     TeamQuery rightJoinTeamI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TeamI18n relation
 * @method     TeamQuery innerJoinTeamI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the TeamI18n relation
 *
 * @method     Team findOne(PropelPDO $con = null) Return the first Team matching the query
 * @method     Team findOneOrCreate(PropelPDO $con = null) Return the first Team matching the query, or a new Team object populated from the query conditions when no match is found
 *
 * @method     Team findOneById(int $id) Return the first Team filtered by the id column
 * @method     Team findOneBySlug(string $slug) Return the first Team filtered by the slug column
 * @method     Team findOneByType(string $type) Return the first Team filtered by the type column
 * @method     Team findOneByName(string $name) Return the first Team filtered by the name column
 * @method     Team findOneByLink(string $link) Return the first Team filtered by the link column
 * @method     Team findOneByPhoto(string $photo) Return the first Team filtered by the photo column
 * @method     Team findOneByCreatedAt(string $created_at) Return the first Team filtered by the created_at column
 * @method     Team findOneByUpdatedAt(string $updated_at) Return the first Team filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Team objects filtered by the id column
 * @method     array findBySlug(string $slug) Return Team objects filtered by the slug column
 * @method     array findByType(string $type) Return Team objects filtered by the type column
 * @method     array findByName(string $name) Return Team objects filtered by the name column
 * @method     array findByLink(string $link) Return Team objects filtered by the link column
 * @method     array findByPhoto(string $photo) Return Team objects filtered by the photo column
 * @method     array findByCreatedAt(string $created_at) Return Team objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Team objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTeamQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseTeamQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Team', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TeamQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TeamQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TeamQuery) {
			return $criteria;
		}
		$query = new TeamQuery();
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
	 * @return    Team|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = TeamPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TeamPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TeamPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TeamPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TeamPeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TeamPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TeamPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the link column
	 * 
	 * @param     string $link The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TeamPeer::LINK, $link, $comparison);
	}

	/**
	 * Filter the query on the photo column
	 * 
	 * @param     string $photo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByPhoto($photo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($photo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $photo)) {
				$photo = str_replace('*', '%', $photo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TeamPeer::PHOTO, $photo, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(TeamPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(TeamPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TeamPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(TeamPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(TeamPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TeamPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related TeamI18n object
	 *
	 * @param     TeamI18n $teamI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function filterByTeamI18n($teamI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(TeamPeer::ID, $teamI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TeamI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function joinTeamI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TeamI18n');
		
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
			$this->addJoinObject($join, 'TeamI18n');
		}
		
		return $this;
	}

	/**
	 * Use the TeamI18n relation TeamI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TeamI18nQuery A secondary query class using the current class as primary query
	 */
	public function useTeamI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTeamI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TeamI18n', 'TeamI18nQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Team $team Object to remove from the list of results
	 *
	 * @return    TeamQuery The current query, for fluid interface
	 */
	public function prune($team = null)
	{
		if ($team) {
			$this->addUsingAlias(TeamPeer::ID, $team->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseTeamQuery
