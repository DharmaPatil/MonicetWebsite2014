<?php


/**
 * Base class that represents a query for the 'log' table.
 *
 * 
 *
 * @method     LogQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LogQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     LogQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     LogQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     LogQuery groupById() Group by the id column
 * @method     LogQuery groupByType() Group by the type column
 * @method     LogQuery groupByMessage() Group by the message column
 * @method     LogQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     LogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Log findOne(PropelPDO $con = null) Return the first Log matching the query
 * @method     Log findOneOrCreate(PropelPDO $con = null) Return the first Log matching the query, or a new Log object populated from the query conditions when no match is found
 *
 * @method     Log findOneById(int $id) Return the first Log filtered by the id column
 * @method     Log findOneByType(string $type) Return the first Log filtered by the type column
 * @method     Log findOneByMessage(string $message) Return the first Log filtered by the message column
 * @method     Log findOneByCreatedAt(string $created_at) Return the first Log filtered by the created_at column
 *
 * @method     array findById(int $id) Return Log objects filtered by the id column
 * @method     array findByType(string $type) Return Log objects filtered by the type column
 * @method     array findByMessage(string $message) Return Log objects filtered by the message column
 * @method     array findByCreatedAt(string $created_at) Return Log objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Log', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LogQuery) {
			return $criteria;
		}
		$query = new LogQuery();
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
	 * @return    Log|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LogPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LogPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LogPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LogPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the message column
	 * 
	 * @param     string $message The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByMessage($message = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($message)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $message)) {
				$message = str_replace('*', '%', $message);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LogPeer::MESSAGE, $message, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(LogPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(LogPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LogPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Log $log Object to remove from the list of results
	 *
	 * @return    LogQuery The current query, for fluid interface
	 */
	public function prune($log = null)
	{
		if ($log) {
			$this->addUsingAlias(LogPeer::ID, $log->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLogQuery
