<?php


/**
 * Base class that represents a query for the 'sf_guard_user' table.
 *
 * 
 *
 * @method     sfGuardUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     sfGuardUserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     sfGuardUserQuery orderByAlgorithm($order = Criteria::ASC) Order by the algorithm column
 * @method     sfGuardUserQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method     sfGuardUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     sfGuardUserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     sfGuardUserQuery orderByLastLogin($order = Criteria::ASC) Order by the last_login column
 * @method     sfGuardUserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     sfGuardUserQuery orderByIsSuperAdmin($order = Criteria::ASC) Order by the is_super_admin column
 *
 * @method     sfGuardUserQuery groupById() Group by the id column
 * @method     sfGuardUserQuery groupByUsername() Group by the username column
 * @method     sfGuardUserQuery groupByAlgorithm() Group by the algorithm column
 * @method     sfGuardUserQuery groupBySalt() Group by the salt column
 * @method     sfGuardUserQuery groupByPassword() Group by the password column
 * @method     sfGuardUserQuery groupByCreatedAt() Group by the created_at column
 * @method     sfGuardUserQuery groupByLastLogin() Group by the last_login column
 * @method     sfGuardUserQuery groupByIsActive() Group by the is_active column
 * @method     sfGuardUserQuery groupByIsSuperAdmin() Group by the is_super_admin column
 *
 * @method     sfGuardUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     sfGuardUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     sfGuardUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     sfGuardUserQuery leftJoinmfFormularioUtilizador($relationAlias = null) Adds a LEFT JOIN clause to the query using the mfFormularioUtilizador relation
 * @method     sfGuardUserQuery rightJoinmfFormularioUtilizador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the mfFormularioUtilizador relation
 * @method     sfGuardUserQuery innerJoinmfFormularioUtilizador($relationAlias = null) Adds a INNER JOIN clause to the query using the mfFormularioUtilizador relation
 *
 * @method     sfGuardUserQuery leftJoinCompanyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyUser relation
 * @method     sfGuardUserQuery rightJoinCompanyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyUser relation
 * @method     sfGuardUserQuery innerJoinCompanyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyUser relation
 *
 * @method     sfGuardUserQuery leftJoinGeneralInfoRelatedByCreatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the GeneralInfoRelatedByCreatedBy relation
 * @method     sfGuardUserQuery rightJoinGeneralInfoRelatedByCreatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GeneralInfoRelatedByCreatedBy relation
 * @method     sfGuardUserQuery innerJoinGeneralInfoRelatedByCreatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the GeneralInfoRelatedByCreatedBy relation
 *
 * @method     sfGuardUserQuery leftJoinGeneralInfoRelatedByUpdatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the GeneralInfoRelatedByUpdatedBy relation
 * @method     sfGuardUserQuery rightJoinGeneralInfoRelatedByUpdatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GeneralInfoRelatedByUpdatedBy relation
 * @method     sfGuardUserQuery innerJoinGeneralInfoRelatedByUpdatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the GeneralInfoRelatedByUpdatedBy relation
 *
 * @method     sfGuardUserQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     sfGuardUserQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     sfGuardUserQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     sfGuardUserQuery leftJoinWatchInfoRelatedByCreatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchInfoRelatedByCreatedBy relation
 * @method     sfGuardUserQuery rightJoinWatchInfoRelatedByCreatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchInfoRelatedByCreatedBy relation
 * @method     sfGuardUserQuery innerJoinWatchInfoRelatedByCreatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchInfoRelatedByCreatedBy relation
 *
 * @method     sfGuardUserQuery leftJoinWatchInfoRelatedByUpdatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchInfoRelatedByUpdatedBy relation
 * @method     sfGuardUserQuery rightJoinWatchInfoRelatedByUpdatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchInfoRelatedByUpdatedBy relation
 * @method     sfGuardUserQuery innerJoinWatchInfoRelatedByUpdatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchInfoRelatedByUpdatedBy relation
 *
 * @method     sfGuardUserQuery leftJoinprUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the prUser relation
 * @method     sfGuardUserQuery rightJoinprUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the prUser relation
 * @method     sfGuardUserQuery innerJoinprUser($relationAlias = null) Adds a INNER JOIN clause to the query using the prUser relation
 *
 * @method     sfGuardUserQuery leftJoinObservationPhotoRelatedByLastEditedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhotoRelatedByLastEditedBy relation
 * @method     sfGuardUserQuery rightJoinObservationPhotoRelatedByLastEditedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhotoRelatedByLastEditedBy relation
 * @method     sfGuardUserQuery innerJoinObservationPhotoRelatedByLastEditedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhotoRelatedByLastEditedBy relation
 *
 * @method     sfGuardUserQuery leftJoinObservationPhotoRelatedByValidatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhotoRelatedByValidatedBy relation
 * @method     sfGuardUserQuery rightJoinObservationPhotoRelatedByValidatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhotoRelatedByValidatedBy relation
 * @method     sfGuardUserQuery innerJoinObservationPhotoRelatedByValidatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhotoRelatedByValidatedBy relation
 *
 * @method     sfGuardUserQuery leftJoinsfGuardUserPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserPermission relation
 * @method     sfGuardUserQuery rightJoinsfGuardUserPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserPermission relation
 * @method     sfGuardUserQuery innerJoinsfGuardUserPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserPermission relation
 *
 * @method     sfGuardUserQuery leftJoinsfGuardUserGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserGroup relation
 * @method     sfGuardUserQuery rightJoinsfGuardUserGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserGroup relation
 * @method     sfGuardUserQuery innerJoinsfGuardUserGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserGroup relation
 *
 * @method     sfGuardUserQuery leftJoinsfGuardRememberKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardRememberKey relation
 * @method     sfGuardUserQuery rightJoinsfGuardRememberKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardRememberKey relation
 * @method     sfGuardUserQuery innerJoinsfGuardRememberKey($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardRememberKey relation
 *
 * @method     sfGuardUser findOne(PropelPDO $con = null) Return the first sfGuardUser matching the query
 * @method     sfGuardUser findOneOrCreate(PropelPDO $con = null) Return the first sfGuardUser matching the query, or a new sfGuardUser object populated from the query conditions when no match is found
 *
 * @method     sfGuardUser findOneById(int $id) Return the first sfGuardUser filtered by the id column
 * @method     sfGuardUser findOneByUsername(string $username) Return the first sfGuardUser filtered by the username column
 * @method     sfGuardUser findOneByAlgorithm(string $algorithm) Return the first sfGuardUser filtered by the algorithm column
 * @method     sfGuardUser findOneBySalt(string $salt) Return the first sfGuardUser filtered by the salt column
 * @method     sfGuardUser findOneByPassword(string $password) Return the first sfGuardUser filtered by the password column
 * @method     sfGuardUser findOneByCreatedAt(string $created_at) Return the first sfGuardUser filtered by the created_at column
 * @method     sfGuardUser findOneByLastLogin(string $last_login) Return the first sfGuardUser filtered by the last_login column
 * @method     sfGuardUser findOneByIsActive(boolean $is_active) Return the first sfGuardUser filtered by the is_active column
 * @method     sfGuardUser findOneByIsSuperAdmin(boolean $is_super_admin) Return the first sfGuardUser filtered by the is_super_admin column
 *
 * @method     array findById(int $id) Return sfGuardUser objects filtered by the id column
 * @method     array findByUsername(string $username) Return sfGuardUser objects filtered by the username column
 * @method     array findByAlgorithm(string $algorithm) Return sfGuardUser objects filtered by the algorithm column
 * @method     array findBySalt(string $salt) Return sfGuardUser objects filtered by the salt column
 * @method     array findByPassword(string $password) Return sfGuardUser objects filtered by the password column
 * @method     array findByCreatedAt(string $created_at) Return sfGuardUser objects filtered by the created_at column
 * @method     array findByLastLogin(string $last_login) Return sfGuardUser objects filtered by the last_login column
 * @method     array findByIsActive(boolean $is_active) Return sfGuardUser objects filtered by the is_active column
 * @method     array findByIsSuperAdmin(boolean $is_super_admin) Return sfGuardUser objects filtered by the is_super_admin column
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model.om
 */
abstract class BasesfGuardUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasesfGuardUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfGuardUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new sfGuardUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardUserQuery) {
			return $criteria;
		}
		$query = new sfGuardUserQuery();
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
	 * @return    sfGuardUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = sfGuardUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(sfGuardUserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(sfGuardUserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(sfGuardUserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the username column
	 * 
	 * @param     string $username The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByUsername($username = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($username)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $username)) {
				$username = str_replace('*', '%', $username);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::USERNAME, $username, $comparison);
	}

	/**
	 * Filter the query on the algorithm column
	 * 
	 * @param     string $algorithm The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByAlgorithm($algorithm = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($algorithm)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $algorithm)) {
				$algorithm = str_replace('*', '%', $algorithm);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::ALGORITHM, $algorithm, $comparison);
	}

	/**
	 * Filter the query on the salt column
	 * 
	 * @param     string $salt The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBySalt($salt = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($salt)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $salt)) {
				$salt = str_replace('*', '%', $salt);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::SALT, $salt, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the last_login column
	 * 
	 * @param     string|array $lastLogin The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByLastLogin($lastLogin = null, $comparison = null)
	{
		if (is_array($lastLogin)) {
			$useMinMax = false;
			if (isset($lastLogin['min'])) {
				$this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastLogin['max'])) {
				$this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     boolean|string $isActive The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_string($isActive)) {
			$is_active = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfGuardUserPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_super_admin column
	 * 
	 * @param     boolean|string $isSuperAdmin The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByIsSuperAdmin($isSuperAdmin = null, $comparison = null)
	{
		if (is_string($isSuperAdmin)) {
			$is_super_admin = in_array(strtolower($isSuperAdmin), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfGuardUserPeer::IS_SUPER_ADMIN, $isSuperAdmin, $comparison);
	}

	/**
	 * Filter the query by a related mfFormularioUtilizador object
	 *
	 * @param     mfFormularioUtilizador $mfFormularioUtilizador  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBymfFormularioUtilizador($mfFormularioUtilizador, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $mfFormularioUtilizador->getUtilizadorId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the mfFormularioUtilizador relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinmfFormularioUtilizador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('mfFormularioUtilizador');
		
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
			$this->addJoinObject($join, 'mfFormularioUtilizador');
		}
		
		return $this;
	}

	/**
	 * Use the mfFormularioUtilizador relation mfFormularioUtilizador object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfFormularioUtilizadorQuery A secondary query class using the current class as primary query
	 */
	public function usemfFormularioUtilizadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinmfFormularioUtilizador($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'mfFormularioUtilizador', 'mfFormularioUtilizadorQuery');
	}

	/**
	 * Filter the query by a related CompanyUser object
	 *
	 * @param     CompanyUser $companyUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByCompanyUser($companyUser, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $companyUser->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the CompanyUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinCompanyUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CompanyUser');
		
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
			$this->addJoinObject($join, 'CompanyUser');
		}
		
		return $this;
	}

	/**
	 * Use the CompanyUser relation CompanyUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyUserQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCompanyUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CompanyUser', 'CompanyUserQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfoRelatedByCreatedBy($generalInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $generalInfo->getCreatedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the GeneralInfoRelatedByCreatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinGeneralInfoRelatedByCreatedBy($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('GeneralInfoRelatedByCreatedBy');
		
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
			$this->addJoinObject($join, 'GeneralInfoRelatedByCreatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the GeneralInfoRelatedByCreatedBy relation GeneralInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneralInfoQuery A secondary query class using the current class as primary query
	 */
	public function useGeneralInfoRelatedByCreatedByQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGeneralInfoRelatedByCreatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GeneralInfoRelatedByCreatedBy', 'GeneralInfoQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfoRelatedByUpdatedBy($generalInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $generalInfo->getUpdatedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the GeneralInfoRelatedByUpdatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinGeneralInfoRelatedByUpdatedBy($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('GeneralInfoRelatedByUpdatedBy');
		
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
			$this->addJoinObject($join, 'GeneralInfoRelatedByUpdatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the GeneralInfoRelatedByUpdatedBy relation GeneralInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneralInfoQuery A secondary query class using the current class as primary query
	 */
	public function useGeneralInfoRelatedByUpdatedByQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGeneralInfoRelatedByUpdatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GeneralInfoRelatedByUpdatedBy', 'GeneralInfoQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $user->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');
		
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
			$this->addJoinObject($join, 'User');
		}
		
		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Filter the query by a related WatchInfo object
	 *
	 * @param     WatchInfo $watchInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByWatchInfoRelatedByCreatedBy($watchInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $watchInfo->getCreatedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchInfoRelatedByCreatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinWatchInfoRelatedByCreatedBy($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchInfoRelatedByCreatedBy');
		
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
			$this->addJoinObject($join, 'WatchInfoRelatedByCreatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the WatchInfoRelatedByCreatedBy relation WatchInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery A secondary query class using the current class as primary query
	 */
	public function useWatchInfoRelatedByCreatedByQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinWatchInfoRelatedByCreatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchInfoRelatedByCreatedBy', 'WatchInfoQuery');
	}

	/**
	 * Filter the query by a related WatchInfo object
	 *
	 * @param     WatchInfo $watchInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByWatchInfoRelatedByUpdatedBy($watchInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $watchInfo->getUpdatedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchInfoRelatedByUpdatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinWatchInfoRelatedByUpdatedBy($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchInfoRelatedByUpdatedBy');
		
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
			$this->addJoinObject($join, 'WatchInfoRelatedByUpdatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the WatchInfoRelatedByUpdatedBy relation WatchInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery A secondary query class using the current class as primary query
	 */
	public function useWatchInfoRelatedByUpdatedByQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinWatchInfoRelatedByUpdatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchInfoRelatedByUpdatedBy', 'WatchInfoQuery');
	}

	/**
	 * Filter the query by a related prUser object
	 *
	 * @param     prUser $prUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByprUser($prUser, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $prUser->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the prUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinprUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('prUser');
		
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
			$this->addJoinObject($join, 'prUser');
		}
		
		return $this;
	}

	/**
	 * Use the prUser relation prUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    prUserQuery A secondary query class using the current class as primary query
	 */
	public function useprUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinprUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'prUser', 'prUserQuery');
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByObservationPhotoRelatedByLastEditedBy($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $observationPhoto->getLastEditedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhotoRelatedByLastEditedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinObservationPhotoRelatedByLastEditedBy($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhotoRelatedByLastEditedBy');
		
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
			$this->addJoinObject($join, 'ObservationPhotoRelatedByLastEditedBy');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhotoRelatedByLastEditedBy relation ObservationPhoto object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoRelatedByLastEditedByQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinObservationPhotoRelatedByLastEditedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhotoRelatedByLastEditedBy', 'ObservationPhotoQuery');
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByObservationPhotoRelatedByValidatedBy($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $observationPhoto->getValidatedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhotoRelatedByValidatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinObservationPhotoRelatedByValidatedBy($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhotoRelatedByValidatedBy');
		
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
			$this->addJoinObject($join, 'ObservationPhotoRelatedByValidatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhotoRelatedByValidatedBy relation ObservationPhoto object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoRelatedByValidatedByQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinObservationPhotoRelatedByValidatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhotoRelatedByValidatedBy', 'ObservationPhotoQuery');
	}

	/**
	 * Filter the query by a related sfGuardUserPermission object
	 *
	 * @param     sfGuardUserPermission $sfGuardUserPermission  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserPermission($sfGuardUserPermission, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserPermission->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserPermission relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserPermission');
		
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
			$this->addJoinObject($join, 'sfGuardUserPermission');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserPermission relation sfGuardUserPermission object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserPermissionQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserPermission($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserPermission', 'sfGuardUserPermissionQuery');
	}

	/**
	 * Filter the query by a related sfGuardUserGroup object
	 *
	 * @param     sfGuardUserGroup $sfGuardUserGroup  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserGroup($sfGuardUserGroup, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserGroup->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserGroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserGroup');
		
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
			$this->addJoinObject($join, 'sfGuardUserGroup');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserGroup relation sfGuardUserGroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserGroupQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserGroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserGroup', 'sfGuardUserGroupQuery');
	}

	/**
	 * Filter the query by a related sfGuardRememberKey object
	 *
	 * @param     sfGuardRememberKey $sfGuardRememberKey  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardRememberKey($sfGuardRememberKey, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardRememberKey->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardRememberKey relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardRememberKey($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardRememberKey');
		
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
			$this->addJoinObject($join, 'sfGuardRememberKey');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardRememberKey relation sfGuardRememberKey object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardRememberKeyQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardRememberKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardRememberKey($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardRememberKey', 'sfGuardRememberKeyQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfGuardUser $sfGuardUser Object to remove from the list of results
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function prune($sfGuardUser = null)
	{
		if ($sfGuardUser) {
			$this->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUser->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasesfGuardUserQuery
