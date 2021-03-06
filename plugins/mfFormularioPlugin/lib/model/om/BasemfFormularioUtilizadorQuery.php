<?php


/**
 * Base class that represents a query for the 'mf_formulario_utilizador' table.
 *
 * 
 *
 * @method     mfFormularioUtilizadorQuery orderByFormularioId($order = Criteria::ASC) Order by the formulario_id column
 * @method     mfFormularioUtilizadorQuery orderByUtilizadorId($order = Criteria::ASC) Order by the utilizador_id column
 *
 * @method     mfFormularioUtilizadorQuery groupByFormularioId() Group by the formulario_id column
 * @method     mfFormularioUtilizadorQuery groupByUtilizadorId() Group by the utilizador_id column
 *
 * @method     mfFormularioUtilizadorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     mfFormularioUtilizadorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     mfFormularioUtilizadorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     mfFormularioUtilizadorQuery leftJoinmfFormulario($relationAlias = null) Adds a LEFT JOIN clause to the query using the mfFormulario relation
 * @method     mfFormularioUtilizadorQuery rightJoinmfFormulario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the mfFormulario relation
 * @method     mfFormularioUtilizadorQuery innerJoinmfFormulario($relationAlias = null) Adds a INNER JOIN clause to the query using the mfFormulario relation
 *
 * @method     mfFormularioUtilizadorQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     mfFormularioUtilizadorQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     mfFormularioUtilizadorQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     mfFormularioUtilizador findOne(PropelPDO $con = null) Return the first mfFormularioUtilizador matching the query
 * @method     mfFormularioUtilizador findOneOrCreate(PropelPDO $con = null) Return the first mfFormularioUtilizador matching the query, or a new mfFormularioUtilizador object populated from the query conditions when no match is found
 *
 * @method     mfFormularioUtilizador findOneByFormularioId(int $formulario_id) Return the first mfFormularioUtilizador filtered by the formulario_id column
 * @method     mfFormularioUtilizador findOneByUtilizadorId(int $utilizador_id) Return the first mfFormularioUtilizador filtered by the utilizador_id column
 *
 * @method     array findByFormularioId(int $formulario_id) Return mfFormularioUtilizador objects filtered by the formulario_id column
 * @method     array findByUtilizadorId(int $utilizador_id) Return mfFormularioUtilizador objects filtered by the utilizador_id column
 *
 * @package    propel.generator.plugins.mfFormularioPlugin.lib.model.om
 */
abstract class BasemfFormularioUtilizadorQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasemfFormularioUtilizadorQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'mfFormularioUtilizador', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new mfFormularioUtilizadorQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    mfFormularioUtilizadorQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof mfFormularioUtilizadorQuery) {
			return $criteria;
		}
		$query = new mfFormularioUtilizadorQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$formulario_id, $utilizador_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    mfFormularioUtilizador|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = mfFormularioUtilizadorPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(mfFormularioUtilizadorPeer::FORMULARIO_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(mfFormularioUtilizadorPeer::UTILIZADOR_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(mfFormularioUtilizadorPeer::FORMULARIO_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(mfFormularioUtilizadorPeer::UTILIZADOR_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the formulario_id column
	 * 
	 * @param     int|array $formularioId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function filterByFormularioId($formularioId = null, $comparison = null)
	{
		if (is_array($formularioId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(mfFormularioUtilizadorPeer::FORMULARIO_ID, $formularioId, $comparison);
	}

	/**
	 * Filter the query on the utilizador_id column
	 * 
	 * @param     int|array $utilizadorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function filterByUtilizadorId($utilizadorId = null, $comparison = null)
	{
		if (is_array($utilizadorId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(mfFormularioUtilizadorPeer::UTILIZADOR_ID, $utilizadorId, $comparison);
	}

	/**
	 * Filter the query by a related mfFormulario object
	 *
	 * @param     mfFormulario $mfFormulario  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function filterBymfFormulario($mfFormulario, $comparison = null)
	{
		return $this
			->addUsingAlias(mfFormularioUtilizadorPeer::FORMULARIO_ID, $mfFormulario->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the mfFormulario relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function joinmfFormulario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('mfFormulario');
		
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
			$this->addJoinObject($join, 'mfFormulario');
		}
		
		return $this;
	}

	/**
	 * Use the mfFormulario relation mfFormulario object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfFormularioQuery A secondary query class using the current class as primary query
	 */
	public function usemfFormularioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinmfFormulario($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'mfFormulario', 'mfFormularioQuery');
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(mfFormularioUtilizadorPeer::UTILIZADOR_ID, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function joinsfGuardUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUser');
		
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
			$this->addJoinObject($join, 'sfGuardUser');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUser relation sfGuardUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUser', 'sfGuardUserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     mfFormularioUtilizador $mfFormularioUtilizador Object to remove from the list of results
	 *
	 * @return    mfFormularioUtilizadorQuery The current query, for fluid interface
	 */
	public function prune($mfFormularioUtilizador = null)
	{
		if ($mfFormularioUtilizador) {
			$this->addCond('pruneCond0', $this->getAliasedColName(mfFormularioUtilizadorPeer::FORMULARIO_ID), $mfFormularioUtilizador->getFormularioId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(mfFormularioUtilizadorPeer::UTILIZADOR_ID), $mfFormularioUtilizador->getUtilizadorId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BasemfFormularioUtilizadorQuery
