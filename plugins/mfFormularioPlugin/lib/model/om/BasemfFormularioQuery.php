<?php


/**
 * Base class that represents a query for the 'mf_formulario' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Thu Apr  7 15:39:18 2011
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
 * @method     mfFormulario findOne(PropelPDO $con = null) Return the first mfFormulario matching the query
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = mfFormularioPeer::getInstanceFromPool((string) $key)))) {
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
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(mfFormularioPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(mfFormularioPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the regra column
	 * 
	 * @param     string $regra The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByRegra($regra = null)
	{
		if(preg_match('/[\%\*]/', $regra)) {
			return $this->addUsingAlias(mfFormularioPeer::REGRA, str_replace('*', '%', $regra), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(mfFormularioPeer::REGRA, $regra, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the visivel column
	 * 
	 * @param     boolean|string $visivel The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByVisivel($visivel = null)
	{
		if(is_string($visivel)) {
			$visivel = in_array(strtolower($visivel), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(mfFormularioPeer::VISIVEL, $visivel, Criteria::EQUAL);
	}

	/**
	 * Filter the query on the ao_editar column
	 * 
	 * @param     boolean|string $aoEditar The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByAoEditar($aoEditar = null)
	{
		if(is_string($aoEditar)) {
			$ao_editar = in_array(strtolower($aoEditar), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(mfFormularioPeer::AO_EDITAR, $aoEditar, Criteria::EQUAL);
	}

	/**
	 * Filter the query on the ao_criar column
	 * 
	 * @param     boolean|string $aoCriar The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByAoCriar($aoCriar = null)
	{
		if(is_string($aoCriar)) {
			$ao_criar = in_array(strtolower($aoCriar), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(mfFormularioPeer::AO_CRIAR, $aoCriar, Criteria::EQUAL);
	}

	/**
	 * Filter the query on the observacoes column
	 * 
	 * @param     string $observacoes The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByObservacoes($observacoes = null)
	{
		if(preg_match('/[\%\*]/', $observacoes)) {
			return $this->addUsingAlias(mfFormularioPeer::OBSERVACOES, str_replace('*', '%', $observacoes), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(mfFormularioPeer::OBSERVACOES, $observacoes, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(mfFormularioPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related mfFormularioUtilizador object
	 *
	 * @param     mfFormularioUtilizador $mfFormularioUtilizador  the related object to use as filter
	 *
	 * @return    mfFormularioQuery The current query, for fluid interface
	 */
	public function filterBymfFormularioUtilizador($mfFormularioUtilizador)
	{
		return $this
			->addUsingAlias(mfFormularioPeer::ID, $mfFormularioUtilizador->getFormularioId(), Criteria::EQUAL);
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
	public function usemfFormularioUtilizadorQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('mfFormularioUtilizador' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
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

} // BasemfFormularioQuery
