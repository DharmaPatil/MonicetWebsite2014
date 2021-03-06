<?php


/**
 * Base class that represents a query for the 'watch_info' table.
 *
 * 
 *
 * @method     WatchInfoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     WatchInfoQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     WatchInfoQuery orderByWatchPostId($order = Criteria::ASC) Order by the watch_post_id column
 * @method     WatchInfoQuery orderByWatchmanId($order = Criteria::ASC) Order by the watchman_id column
 * @method     WatchInfoQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     WatchInfoQuery orderByBaseLatitude($order = Criteria::ASC) Order by the base_latitude column
 * @method     WatchInfoQuery orderByBaseLongitude($order = Criteria::ASC) Order by the base_longitude column
 * @method     WatchInfoQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     WatchInfoQuery orderByValid($order = Criteria::ASC) Order by the valid column
 * @method     WatchInfoQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     WatchInfoQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method     WatchInfoQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 * @method     WatchInfoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     WatchInfoQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     WatchInfoQuery groupById() Group by the id column
 * @method     WatchInfoQuery groupByCode() Group by the code column
 * @method     WatchInfoQuery groupByWatchPostId() Group by the watch_post_id column
 * @method     WatchInfoQuery groupByWatchmanId() Group by the watchman_id column
 * @method     WatchInfoQuery groupByCompanyId() Group by the company_id column
 * @method     WatchInfoQuery groupByBaseLatitude() Group by the base_latitude column
 * @method     WatchInfoQuery groupByBaseLongitude() Group by the base_longitude column
 * @method     WatchInfoQuery groupByDate() Group by the date column
 * @method     WatchInfoQuery groupByValid() Group by the valid column
 * @method     WatchInfoQuery groupByComments() Group by the comments column
 * @method     WatchInfoQuery groupByCreatedBy() Group by the created_by column
 * @method     WatchInfoQuery groupByUpdatedBy() Group by the updated_by column
 * @method     WatchInfoQuery groupByCreatedAt() Group by the created_at column
 * @method     WatchInfoQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     WatchInfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     WatchInfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     WatchInfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     WatchInfoQuery leftJoinWatchPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchPost relation
 * @method     WatchInfoQuery rightJoinWatchPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchPost relation
 * @method     WatchInfoQuery innerJoinWatchPost($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchPost relation
 *
 * @method     WatchInfoQuery leftJoinWatchman($relationAlias = null) Adds a LEFT JOIN clause to the query using the Watchman relation
 * @method     WatchInfoQuery rightJoinWatchman($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Watchman relation
 * @method     WatchInfoQuery innerJoinWatchman($relationAlias = null) Adds a INNER JOIN clause to the query using the Watchman relation
 *
 * @method     WatchInfoQuery leftJoinCompany($relationAlias = null) Adds a LEFT JOIN clause to the query using the Company relation
 * @method     WatchInfoQuery rightJoinCompany($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Company relation
 * @method     WatchInfoQuery innerJoinCompany($relationAlias = null) Adds a INNER JOIN clause to the query using the Company relation
 *
 * @method     WatchInfoQuery leftJoinsfGuardUserRelatedByCreatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserRelatedByCreatedBy relation
 * @method     WatchInfoQuery rightJoinsfGuardUserRelatedByCreatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserRelatedByCreatedBy relation
 * @method     WatchInfoQuery innerJoinsfGuardUserRelatedByCreatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserRelatedByCreatedBy relation
 *
 * @method     WatchInfoQuery leftJoinsfGuardUserRelatedByUpdatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserRelatedByUpdatedBy relation
 * @method     WatchInfoQuery rightJoinsfGuardUserRelatedByUpdatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserRelatedByUpdatedBy relation
 * @method     WatchInfoQuery innerJoinsfGuardUserRelatedByUpdatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserRelatedByUpdatedBy relation
 *
 * @method     WatchInfoQuery leftJoinWatchSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchSighting relation
 * @method     WatchInfoQuery rightJoinWatchSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchSighting relation
 * @method     WatchInfoQuery innerJoinWatchSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchSighting relation
 *
 * @method     WatchInfo findOne(PropelPDO $con = null) Return the first WatchInfo matching the query
 * @method     WatchInfo findOneOrCreate(PropelPDO $con = null) Return the first WatchInfo matching the query, or a new WatchInfo object populated from the query conditions when no match is found
 *
 * @method     WatchInfo findOneById(int $id) Return the first WatchInfo filtered by the id column
 * @method     WatchInfo findOneByCode(string $code) Return the first WatchInfo filtered by the code column
 * @method     WatchInfo findOneByWatchPostId(int $watch_post_id) Return the first WatchInfo filtered by the watch_post_id column
 * @method     WatchInfo findOneByWatchmanId(int $watchman_id) Return the first WatchInfo filtered by the watchman_id column
 * @method     WatchInfo findOneByCompanyId(int $company_id) Return the first WatchInfo filtered by the company_id column
 * @method     WatchInfo findOneByBaseLatitude(string $base_latitude) Return the first WatchInfo filtered by the base_latitude column
 * @method     WatchInfo findOneByBaseLongitude(string $base_longitude) Return the first WatchInfo filtered by the base_longitude column
 * @method     WatchInfo findOneByDate(string $date) Return the first WatchInfo filtered by the date column
 * @method     WatchInfo findOneByValid(boolean $valid) Return the first WatchInfo filtered by the valid column
 * @method     WatchInfo findOneByComments(string $comments) Return the first WatchInfo filtered by the comments column
 * @method     WatchInfo findOneByCreatedBy(int $created_by) Return the first WatchInfo filtered by the created_by column
 * @method     WatchInfo findOneByUpdatedBy(int $updated_by) Return the first WatchInfo filtered by the updated_by column
 * @method     WatchInfo findOneByCreatedAt(string $created_at) Return the first WatchInfo filtered by the created_at column
 * @method     WatchInfo findOneByUpdatedAt(string $updated_at) Return the first WatchInfo filtered by the updated_at column
 *
 * @method     array findById(int $id) Return WatchInfo objects filtered by the id column
 * @method     array findByCode(string $code) Return WatchInfo objects filtered by the code column
 * @method     array findByWatchPostId(int $watch_post_id) Return WatchInfo objects filtered by the watch_post_id column
 * @method     array findByWatchmanId(int $watchman_id) Return WatchInfo objects filtered by the watchman_id column
 * @method     array findByCompanyId(int $company_id) Return WatchInfo objects filtered by the company_id column
 * @method     array findByBaseLatitude(string $base_latitude) Return WatchInfo objects filtered by the base_latitude column
 * @method     array findByBaseLongitude(string $base_longitude) Return WatchInfo objects filtered by the base_longitude column
 * @method     array findByDate(string $date) Return WatchInfo objects filtered by the date column
 * @method     array findByValid(boolean $valid) Return WatchInfo objects filtered by the valid column
 * @method     array findByComments(string $comments) Return WatchInfo objects filtered by the comments column
 * @method     array findByCreatedBy(int $created_by) Return WatchInfo objects filtered by the created_by column
 * @method     array findByUpdatedBy(int $updated_by) Return WatchInfo objects filtered by the updated_by column
 * @method     array findByCreatedAt(string $created_at) Return WatchInfo objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return WatchInfo objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseWatchInfoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWatchInfoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'WatchInfo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new WatchInfoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    WatchInfoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof WatchInfoQuery) {
			return $criteria;
		}
		$query = new WatchInfoQuery();
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
	 * @return    WatchInfo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = WatchInfoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WatchInfoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WatchInfoPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(WatchInfoPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(WatchInfoPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the watch_post_id column
	 * 
	 * @param     int|array $watchPostId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByWatchPostId($watchPostId = null, $comparison = null)
	{
		if (is_array($watchPostId)) {
			$useMinMax = false;
			if (isset($watchPostId['min'])) {
				$this->addUsingAlias(WatchInfoPeer::WATCH_POST_ID, $watchPostId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($watchPostId['max'])) {
				$this->addUsingAlias(WatchInfoPeer::WATCH_POST_ID, $watchPostId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::WATCH_POST_ID, $watchPostId, $comparison);
	}

	/**
	 * Filter the query on the watchman_id column
	 * 
	 * @param     int|array $watchmanId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByWatchmanId($watchmanId = null, $comparison = null)
	{
		if (is_array($watchmanId)) {
			$useMinMax = false;
			if (isset($watchmanId['min'])) {
				$this->addUsingAlias(WatchInfoPeer::WATCHMAN_ID, $watchmanId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($watchmanId['max'])) {
				$this->addUsingAlias(WatchInfoPeer::WATCHMAN_ID, $watchmanId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::WATCHMAN_ID, $watchmanId, $comparison);
	}

	/**
	 * Filter the query on the company_id column
	 * 
	 * @param     int|array $companyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByCompanyId($companyId = null, $comparison = null)
	{
		if (is_array($companyId)) {
			$useMinMax = false;
			if (isset($companyId['min'])) {
				$this->addUsingAlias(WatchInfoPeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($companyId['max'])) {
				$this->addUsingAlias(WatchInfoPeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::COMPANY_ID, $companyId, $comparison);
	}

	/**
	 * Filter the query on the base_latitude column
	 * 
	 * @param     string $baseLatitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByBaseLatitude($baseLatitude = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($baseLatitude)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $baseLatitude)) {
				$baseLatitude = str_replace('*', '%', $baseLatitude);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::BASE_LATITUDE, $baseLatitude, $comparison);
	}

	/**
	 * Filter the query on the base_longitude column
	 * 
	 * @param     string $baseLongitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByBaseLongitude($baseLongitude = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($baseLongitude)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $baseLongitude)) {
				$baseLongitude = str_replace('*', '%', $baseLongitude);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::BASE_LONGITUDE, $baseLongitude, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     string|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(WatchInfoPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(WatchInfoPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the valid column
	 * 
	 * @param     boolean|string $valid The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByValid($valid = null, $comparison = null)
	{
		if (is_string($valid)) {
			$valid = in_array(strtolower($valid), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(WatchInfoPeer::VALID, $valid, $comparison);
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByComments($comments = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comments)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comments)) {
				$comments = str_replace('*', '%', $comments);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the created_by column
	 * 
	 * @param     int|array $createdBy The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByCreatedBy($createdBy = null, $comparison = null)
	{
		if (is_array($createdBy)) {
			$useMinMax = false;
			if (isset($createdBy['min'])) {
				$this->addUsingAlias(WatchInfoPeer::CREATED_BY, $createdBy['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdBy['max'])) {
				$this->addUsingAlias(WatchInfoPeer::CREATED_BY, $createdBy['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::CREATED_BY, $createdBy, $comparison);
	}

	/**
	 * Filter the query on the updated_by column
	 * 
	 * @param     int|array $updatedBy The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByUpdatedBy($updatedBy = null, $comparison = null)
	{
		if (is_array($updatedBy)) {
			$useMinMax = false;
			if (isset($updatedBy['min'])) {
				$this->addUsingAlias(WatchInfoPeer::UPDATED_BY, $updatedBy['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedBy['max'])) {
				$this->addUsingAlias(WatchInfoPeer::UPDATED_BY, $updatedBy['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::UPDATED_BY, $updatedBy, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(WatchInfoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(WatchInfoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(WatchInfoPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(WatchInfoPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WatchInfoPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related WatchPost object
	 *
	 * @param     WatchPost $watchPost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByWatchPost($watchPost, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchInfoPeer::WATCH_POST_ID, $watchPost->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchPost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function joinWatchPost($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchPost');
		
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
			$this->addJoinObject($join, 'WatchPost');
		}
		
		return $this;
	}

	/**
	 * Use the WatchPost relation WatchPost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchPostQuery A secondary query class using the current class as primary query
	 */
	public function useWatchPostQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinWatchPost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchPost', 'WatchPostQuery');
	}

	/**
	 * Filter the query by a related Watchman object
	 *
	 * @param     Watchman $watchman  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByWatchman($watchman, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchInfoPeer::WATCHMAN_ID, $watchman->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Watchman relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function joinWatchman($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Watchman');
		
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
			$this->addJoinObject($join, 'Watchman');
		}
		
		return $this;
	}

	/**
	 * Use the Watchman relation Watchman object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchmanQuery A secondary query class using the current class as primary query
	 */
	public function useWatchmanQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinWatchman($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Watchman', 'WatchmanQuery');
	}

	/**
	 * Filter the query by a related Company object
	 *
	 * @param     Company $company  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByCompany($company, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchInfoPeer::COMPANY_ID, $company->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Company relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function joinCompany($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Company');
		
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
			$this->addJoinObject($join, 'Company');
		}
		
		return $this;
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
	public function useCompanyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCompany($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserRelatedByCreatedBy($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchInfoPeer::CREATED_BY, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserRelatedByCreatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserRelatedByCreatedBy($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserRelatedByCreatedBy');
		
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
			$this->addJoinObject($join, 'sfGuardUserRelatedByCreatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserRelatedByCreatedBy relation sfGuardUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserRelatedByCreatedByQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserRelatedByCreatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserRelatedByCreatedBy', 'sfGuardUserQuery');
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserRelatedByUpdatedBy($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchInfoPeer::UPDATED_BY, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserRelatedByUpdatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserRelatedByUpdatedBy($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserRelatedByUpdatedBy');
		
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
			$this->addJoinObject($join, 'sfGuardUserRelatedByUpdatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserRelatedByUpdatedBy relation sfGuardUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserRelatedByUpdatedByQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserRelatedByUpdatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserRelatedByUpdatedBy', 'sfGuardUserQuery');
	}

	/**
	 * Filter the query by a related WatchSighting object
	 *
	 * @param     WatchSighting $watchSighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function filterByWatchSighting($watchSighting, $comparison = null)
	{
		return $this
			->addUsingAlias(WatchInfoPeer::ID, $watchSighting->getWatchInfoId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchSighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function joinWatchSighting($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchSighting');
		
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
			$this->addJoinObject($join, 'WatchSighting');
		}
		
		return $this;
	}

	/**
	 * Use the WatchSighting relation WatchSighting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchSightingQuery A secondary query class using the current class as primary query
	 */
	public function useWatchSightingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinWatchSighting($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchSighting', 'WatchSightingQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     WatchInfo $watchInfo Object to remove from the list of results
	 *
	 * @return    WatchInfoQuery The current query, for fluid interface
	 */
	public function prune($watchInfo = null)
	{
		if ($watchInfo) {
			$this->addUsingAlias(WatchInfoPeer::ID, $watchInfo->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseWatchInfoQuery
