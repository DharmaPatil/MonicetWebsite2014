<?php


/**
 * Base class that represents a query for the 'watchman' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Oct 28 19:07:03 2011
 *
 * @method     WatchmanQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     WatchmanQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     WatchmanQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     WatchmanQuery orderByObservations($order = Criteria::ASC) Order by the observations column
 * @method     WatchmanQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     WatchmanQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     WatchmanQuery groupById() Group by the id column
 * @method     WatchmanQuery groupByCompanyId() Group by the company_id column
 * @method     WatchmanQuery groupByName() Group by the name column
 * @method     WatchmanQuery groupByObservations() Group by the observations column
 * @method     WatchmanQuery groupByCreatedAt() Group by the created_at column
 * @method     WatchmanQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Watchman findOne(PropelPDO $con = null) Return the first Watchman matching the query
 * @method     Watchman findOneById(int $id) Return the first Watchman filtered by the id column
 * @method     Watchman findOneByCompanyId(int $company_id) Return the first Watchman filtered by the company_id column
 * @method     Watchman findOneByName(string $name) Return the first Watchman filtered by the name column
 * @method     Watchman findOneByObservations(string $observations) Return the first Watchman filtered by the observations column
 * @method     Watchman findOneByCreatedAt(string $created_at) Return the first Watchman filtered by the created_at column
 * @method     Watchman findOneByUpdatedAt(string $updated_at) Return the first Watchman filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Watchman objects filtered by the id column
 * @method     array findByCompanyId(int $company_id) Return Watchman objects filtered by the company_id column
 * @method     array findByName(string $name) Return Watchman objects filtered by the name column
 * @method     array findByObservations(string $observations) Return Watchman objects filtered by the observations column
 * @method     array findByCreatedAt(string $created_at) Return Watchman objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Watchman objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseWatchmanQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWatchmanQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Watchman', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = WatchmanPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WatchmanPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WatchmanPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(WatchmanPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(WatchmanPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the company_id column
	 * 
	 * @param     int|array $company_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByCompanyId($companyId = null)
	{
		if (is_array($companyId)) {
			if (array_values($companyId) === $companyId) {
				return $this->addUsingAlias(WatchmanPeer::COMPANY_ID, $companyId, Criteria::IN);
			} else {
				if (isset($companyId['min'])) {
					$this->addUsingAlias(WatchmanPeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($companyId['max'])) {
					$this->addUsingAlias(WatchmanPeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchmanPeer::COMPANY_ID, $companyId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByName($name = null)
	{
		if(preg_match('/[\%\*]/', $name)) {
			return $this->addUsingAlias(WatchmanPeer::NAME, str_replace('*', '%', $name), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(WatchmanPeer::NAME, $name, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the observations column
	 * 
	 * @param     string $observations The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByObservations($observations = null)
	{
		if(preg_match('/[\%\*]/', $observations)) {
			return $this->addUsingAlias(WatchmanPeer::OBSERVATIONS, str_replace('*', '%', $observations), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(WatchmanPeer::OBSERVATIONS, $observations, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(WatchmanPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(WatchmanPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(WatchmanPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchmanPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(WatchmanPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(WatchmanPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(WatchmanPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchmanPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Company object
	 *
	 * @param     Company $company  the related object to use as filter
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByCompany($company)
	{
		return $this
			->addUsingAlias(WatchmanPeer::COMPANY_ID, $company->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Company relation Company object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Company' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
	}

	/**
	 * Filter the query by a related WatchInfo object
	 *
	 * @param     WatchInfo $watchInfo  the related object to use as filter
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function filterByWatchInfo($watchInfo)
	{
		return $this
			->addUsingAlias(WatchmanPeer::ID, $watchInfo->getWatchmanId(), Criteria::EQUAL);
	}

	/**
	 * Use the WatchInfo relation WatchInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery A secondary query class using the current class as primary query
	 */
	public function useWatchInfoQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('WatchInfo' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchInfo', 'WatchInfoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Watchman $watchman Object to remove from the list of results
	 *
	 * @return    WatchmanQuery The current query, for fluid interface
	 */
	public function prune($watchman = null)
	{
		if ($watchman) {
			$this->addUsingAlias(WatchmanPeer::ID, $watchman->getId(), Criteria::NOT_EQUAL);
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

} // BaseWatchmanQuery
