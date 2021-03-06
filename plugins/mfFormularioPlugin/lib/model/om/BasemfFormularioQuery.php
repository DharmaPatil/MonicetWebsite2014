<?php


/**
 * Base class that represents a query for the 'mf_formulario' table.
 *
 * 
 *
 * @method     mfFormularioQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     mfFormularioQuery orderByRegra($order = Criteria::ASC) Order by the regra column
 * @method     mfFormularioQuery orderByVisivel($order = Criteria::ASC) Order by the visivel column
 * @method     mfFormularioQuery orderByAoEditar($order = Criteria::ASC) Order by the ao_editar column
 * @method     mfFormularioQuery orderByAoCriar($order = Criteria::ASC) Order by the ao_criar column
 * @method     mfFormularioQuery orderByObservacoes($order = Criteria::ASC) Order by the observacoes column
 * @method     mfFormularioQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     mfFormularioQuery groupById() Group by the id column
 * @method     mfFormularioQuery groupByRegra() Group by the regra column
 * @method     mfFormularioQuery groupByVisivel() Group by the visivel column
 * @method     mfFormularioQuery groupByAoEditar() Group by the ao_editar column
 * @method     mfFormularioQuery groupByAoCriar() Group by the ao_criar column
 * @method     mfFormularioQuery groupByObservacoes() Group by the observacoes column
 * @method     mfFormularioQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     mfFormularioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     mfFormularioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     mfFormularioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     mfFormularioQuery leftJoinmfFormularioUtilizador($relationAlias = null) Adds a LEFT JOIN clause to the query using the mfFormularioUtilizador relation
 * @method     mfFormularioQuery rightJoinmfFormularioUtilizador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the mfFormularioUtilizador relation
 * @method     mfFormularioQuery innerJoinmfFormularioUtilizador($relationAlias = null) Adds a INNER JOIN clause to the query using the mfFormularioUtilizador relation
 *
 * @method     mfFormulario findOne(PropelPDO $con = null) Return the first mfFormulario matching the query
 * @method     mfFormulario findOneOrCreate(PropelPDO $con = null) Return the first mfFormulario matching the query, or a new mfFormulario object populated from the query conditions when no match is found
 *
 * @method     mfFormulario findOneById(int $id) Return the first mfFormulario filtered by the id column
 * @method     mfFormulario findOneByRegra(string $regra) Return the first mfFormulario filtered by the regra column
 * @method     mfFormulario findOneByVisivel(boolean $visivel) Return the first mfFormulario filtered by the visivel column
 * @method     mfFormulario findOneByAoEditar(boolean $ao_editar) Return the first mfFormulario filtered by the ao_editar column
 * @method     mfFormulario findOneByAoCriar(boolean $ao_criar) Return the first mfFormulario filtered by the ao_criar column
 * @method     mfFormulario findOneByObservacoes(string $observacoes) Return the first mfFormulario filtered by the observacoes column
 * @method     mfFormulario findOneByCreatedAt(string $created_at) Return the first mfFormulario filtered by the created_at column
 *
 * @method     array findById(int $id) Return mfFormulario objects filtered by the id column
 * @method     array findByRegra(string $regra) Return mfFormulario objects filtered by the regra column
 * @method     array findByVisivel(boolean $visivel) Return mfFormulario objects filtered by the visivel column
 * @method     array findByAoEditar(boolean $ao_editar) Return mfFormulario objects filtered by the ao_editar column
 * @method     array findByAoCriar(boolean $ao_criar) Return mfFormulario objects filtered by the ao_criar column
 * @method     array findByObservacoes(string $observacoes) Return mfFormulario objects filtered by the observacoes column
 * @method     array findByCreatedAt(string $created_at) Return mfFormulario objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.mfFormularioPlugin.lib.model.om
 */
abstract class BasemfFormularioQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasemfFormularioQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'mfFormulario', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new mfFormularioQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    mfFormularioQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof mfFormularioQuery) {
			return $criteria;
		}
		$query = new mfFormularioQuery();
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
	 * @return    mfFormulario|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = mfFormularioPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(mfFormularioPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(mfFormularioPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(mfFormularioPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the regra column
	 * 
	 * @param     string $regra The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByRegra($regra = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($regra)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $regra)) {
				$regra = str_replace('*', '%', $regra);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(mfFormularioPeer::REGRA, $regra, $comparison);
	}

	/**
	 * Filter the query on the visivel column
	 * 
	 * @param     boolean|string $visivel The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByVisivel($visivel = null, $comparison = null)
	{
		if (is_string($visivel)) {
			$visivel = in_array(strtolower($visivel), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(mfFormularioPeer::VISIVEL, $visivel, $comparison);
	}

	/**
	 * Filter the query on the ao_editar column
	 * 
	 * @param     boolean|string $aoEditar The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByAoEditar($aoEditar = null, $comparison = null)
	{
		if (is_string($aoEditar)) {
			$ao_editar = in_array(strtolower($aoEditar), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(mfFormularioPeer::AO_EDITAR, $aoEditar, $comparison);
	}

	/**
	 * Filter the query on the ao_criar column
	 * 
	 * @param     boolean|string $aoCriar The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByAoCriar($aoCriar = null, $comparison = null)
	{
		if (is_string($aoCriar)) {
			$ao_criar = in_array(strtolower($aoCriar), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(mfFormularioPeer::AO_CRIAR, $aoCriar, $comparison);
	}

	/**
	 * Filter the query on the observacoes column
	 * 
	 * @param     string $observacoes The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByObservacoes($observacoes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($observacoes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $observacoes)) {
				$observacoes = str_replace('*', '%', $observacoes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(mfFormularioPeer::OBSERVACOES, $observacoes, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query by a related mfFormularioUtilizador object
	 *
	 * @param     mfFormularioUtilizador $mfFormularioUtilizador  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterBymfFormularioUtilizador($mfFormularioUtilizador, $comparison = null)
	{
		return $this
			->addUsingAlias(mfFormularioPeer::ID, $mfFormularioUtilizador->getFormularioId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the mfFormularioUtilizador relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     mfFormulario $mfFormulario Object to remove from the list of results
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function prune($mfFormulario = null)
	{
		if ($mfFormulario) {
			$this->addUsingAlias(mfFormularioPeer::ID, $mfFormulario->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasemfFormularioQuery
