<?php


/**
 * Base class that represents a query for the 'mf_log' table.
 *
 * 
 *
 * @method     mfLogQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     mfLogQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method     mfLogQuery orderByMensagem($order = Criteria::ASC) Order by the mensagem column
 * @method     mfLogQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     mfLogQuery groupById() Group by the id column
 * @method     mfLogQuery groupByTipo() Group by the tipo column
 * @method     mfLogQuery groupByMensagem() Group by the mensagem column
 * @method     mfLogQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     mfLogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     mfLogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     mfLogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     mfLog findOne(PropelPDO $con = null) Return the first mfLog matching the query
 * @method     mfLog findOneOrCreate(PropelPDO $con = null) Return the first mfLog matching the query, or a new mfLog object populated from the query conditions when no match is found
 *
 * @method     mfLog findOneById(int $id) Return the first mfLog filtered by the id column
 * @method     mfLog findOneByTipo(string $tipo) Return the first mfLog filtered by the tipo column
 * @method     mfLog findOneByMensagem(string $mensagem) Return the first mfLog filtered by the mensagem column
 * @method     mfLog findOneByCreatedAt(string $created_at) Return the first mfLog filtered by the created_at column
 *
 * @method     array findById(int $id) Return mfLog objects filtered by the id column
 * @method     array findByTipo(string $tipo) Return mfLog objects filtered by the tipo column
 * @method     array findByMensagem(string $mensagem) Return mfLog objects filtered by the mensagem column
 * @method     array findByCreatedAt(string $created_at) Return mfLog objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.mfLogPlugin.lib.model.om
 */
abstract class BasemfLogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasemfLogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'mfLog', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new mfLogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    mfLogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof mfLogQuery) {
			return $criteria;
		}
		$query = new mfLogQuery();
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
	 * @return    mfLog|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = mfLogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(mfLogPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(mfLogPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(mfLogPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the tipo column
	 * 
	 * @param     string $tipo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function filterByTipo($tipo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tipo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tipo)) {
				$tipo = str_replace('*', '%', $tipo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(mfLogPeer::TIPO, $tipo, $comparison);
	}

	/**
	 * Filter the query on the mensagem column
	 * 
	 * @param     string $mensagem The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function filterByMensagem($mensagem = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mensagem)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mensagem)) {
				$mensagem = str_replace('*', '%', $mensagem);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(mfLogPeer::MENSAGEM, $mensagem, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(mfLogPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(mfLogPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfLogPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     mfLog $mfLog Object to remove from the list of results
	 *
	 * @return    mfLogQuery The current query, for fluid interface
	 */
	public function prune($mfLog = null)
	{
		if ($mfLog) {
			$this->addUsingAlias(mfLogPeer::ID, $mfLog->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasemfLogQuery
