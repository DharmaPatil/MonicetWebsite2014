<?php


/**
 * Base class that represents a query for the 'option' table.
 *
 * 
 *
 * @method     OptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     OptionQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     OptionQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     OptionQuery orderByInitial($order = Criteria::ASC) Order by the initial column
 * @method     OptionQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     OptionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     OptionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     OptionQuery groupById() Group by the id column
 * @method     OptionQuery groupByName() Group by the name column
 * @method     OptionQuery groupByValue() Group by the value column
 * @method     OptionQuery groupByInitial() Group by the initial column
 * @method     OptionQuery groupByDescription() Group by the description column
 * @method     OptionQuery groupByCreatedAt() Group by the created_at column
 * @method     OptionQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     OptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Option findOne(PropelPDO $con = null) Return the first Option matching the query
 * @method     Option findOneOrCreate(PropelPDO $con = null) Return the first Option matching the query, or a new Option object populated from the query conditions when no match is found
 *
 * @method     Option findOneById(int $id) Return the first Option filtered by the id column
 * @method     Option findOneByName(string $name) Return the first Option filtered by the name column
 * @method     Option findOneByValue(string $value) Return the first Option filtered by the value column
 * @method     Option findOneByInitial(string $initial) Return the first Option filtered by the initial column
 * @method     Option findOneByDescription(string $description) Return the first Option filtered by the description column
 * @method     Option findOneByCreatedAt(string $created_at) Return the first Option filtered by the created_at column
 * @method     Option findOneByUpdatedAt(string $updated_at) Return the first Option filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Option objects filtered by the id column
 * @method     array findByName(string $name) Return Option objects filtered by the name column
 * @method     array findByValue(string $value) Return Option objects filtered by the value column
 * @method     array findByInitial(string $initial) Return Option objects filtered by the initial column
 * @method     array findByDescription(string $description) Return Option objects filtered by the description column
 * @method     array findByCreatedAt(string $created_at) Return Option objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Option objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseOptionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseOptionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Option', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OptionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OptionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OptionQuery) {
			return $criteria;
		}
		$query = new OptionQuery();
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
	 * @return    Option|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OptionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OptionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OptionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OptionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(OptionPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     string $value The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OptionPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the initial column
	 * 
	 * @param     string $initial The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByInitial($initial = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($initial)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $initial)) {
				$initial = str_replace('*', '%', $initial);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OptionPeer::INITIAL, $initial, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OptionPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(OptionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(OptionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OptionPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(OptionPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(OptionPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OptionPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Option $option Object to remove from the list of results
	 *
	 * @return    OptionQuery The current query, for fluid interface
	 */
	public function prune($option = null)
	{
		if ($option) {
			$this->addUsingAlias(OptionPeer::ID, $option->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseOptionQuery
