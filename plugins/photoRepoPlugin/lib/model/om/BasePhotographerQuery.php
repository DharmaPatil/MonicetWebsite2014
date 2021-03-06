<?php


/**
 * Base class that represents a query for the 'photographer' table.
 *
 * 
 *
 * @method     PhotographerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PhotographerQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     PhotographerQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     PhotographerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     PhotographerQuery orderByCopyright($order = Criteria::ASC) Order by the copyright column
 * @method     PhotographerQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     PhotographerQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     PhotographerQuery groupById() Group by the id column
 * @method     PhotographerQuery groupByCode() Group by the code column
 * @method     PhotographerQuery groupByName() Group by the name column
 * @method     PhotographerQuery groupByEmail() Group by the email column
 * @method     PhotographerQuery groupByCopyright() Group by the copyright column
 * @method     PhotographerQuery groupByCreatedAt() Group by the created_at column
 * @method     PhotographerQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     PhotographerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PhotographerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PhotographerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PhotographerQuery leftJoinObservationPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhoto relation
 * @method     PhotographerQuery rightJoinObservationPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhoto relation
 * @method     PhotographerQuery innerJoinObservationPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhoto relation
 *
 * @method     Photographer findOne(PropelPDO $con = null) Return the first Photographer matching the query
 * @method     Photographer findOneOrCreate(PropelPDO $con = null) Return the first Photographer matching the query, or a new Photographer object populated from the query conditions when no match is found
 *
 * @method     Photographer findOneById(int $id) Return the first Photographer filtered by the id column
 * @method     Photographer findOneByCode(string $code) Return the first Photographer filtered by the code column
 * @method     Photographer findOneByName(string $name) Return the first Photographer filtered by the name column
 * @method     Photographer findOneByEmail(string $email) Return the first Photographer filtered by the email column
 * @method     Photographer findOneByCopyright(string $copyright) Return the first Photographer filtered by the copyright column
 * @method     Photographer findOneByCreatedAt(string $created_at) Return the first Photographer filtered by the created_at column
 * @method     Photographer findOneByUpdatedAt(string $updated_at) Return the first Photographer filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Photographer objects filtered by the id column
 * @method     array findByCode(string $code) Return Photographer objects filtered by the code column
 * @method     array findByName(string $name) Return Photographer objects filtered by the name column
 * @method     array findByEmail(string $email) Return Photographer objects filtered by the email column
 * @method     array findByCopyright(string $copyright) Return Photographer objects filtered by the copyright column
 * @method     array findByCreatedAt(string $created_at) Return Photographer objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Photographer objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BasePhotographerQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePhotographerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Photographer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PhotographerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PhotographerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PhotographerQuery) {
			return $criteria;
		}
		$query = new PhotographerQuery();
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
	 * @return    Photographer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PhotographerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PhotographerPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PhotographerPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PhotographerPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PhotographerPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PhotographerPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PhotographerPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the copyright column
	 * 
	 * @param     string $copyright The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByCopyright($copyright = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($copyright)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $copyright)) {
				$copyright = str_replace('*', '%', $copyright);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PhotographerPeer::COPYRIGHT, $copyright, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(PhotographerPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(PhotographerPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PhotographerPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(PhotographerPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(PhotographerPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PhotographerPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function filterByObservationPhoto($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(PhotographerPeer::ID, $observationPhoto->getPhotographerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhoto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
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
	 * @param     Photographer $photographer Object to remove from the list of results
	 *
	 * @return    PhotographerQuery The current query, for fluid interface
	 */
	public function prune($photographer = null)
	{
		if ($photographer) {
			$this->addUsingAlias(PhotographerPeer::ID, $photographer->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePhotographerQuery
