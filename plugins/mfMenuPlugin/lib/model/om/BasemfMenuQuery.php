<?php


/**
 * Base class that represents a query for the 'mf_menu' table.
 *
 * 
 *
 * @method     mfMenuQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     mfMenuQuery orderByNome($order = Criteria::ASC) Order by the nome column
 * @method     mfMenuQuery orderByMenuPaiId($order = Criteria::ASC) Order by the menu_pai_id column
 * @method     mfMenuQuery orderByRota($order = Criteria::ASC) Order by the rota column
 * @method     mfMenuQuery orderByPermissaoId($order = Criteria::ASC) Order by the permissao_id column
 * @method     mfMenuQuery orderByPosicao($order = Criteria::ASC) Order by the posicao column
 * @method     mfMenuQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     mfMenuQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     mfMenuQuery groupById() Group by the id column
 * @method     mfMenuQuery groupByNome() Group by the nome column
 * @method     mfMenuQuery groupByMenuPaiId() Group by the menu_pai_id column
 * @method     mfMenuQuery groupByRota() Group by the rota column
 * @method     mfMenuQuery groupByPermissaoId() Group by the permissao_id column
 * @method     mfMenuQuery groupByPosicao() Group by the posicao column
 * @method     mfMenuQuery groupByCreatedAt() Group by the created_at column
 * @method     mfMenuQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     mfMenuQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     mfMenuQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     mfMenuQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     mfMenuQuery leftJoinmfMenuRelatedByMenuPaiId($relationAlias = null) Adds a LEFT JOIN clause to the query using the mfMenuRelatedByMenuPaiId relation
 * @method     mfMenuQuery rightJoinmfMenuRelatedByMenuPaiId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the mfMenuRelatedByMenuPaiId relation
 * @method     mfMenuQuery innerJoinmfMenuRelatedByMenuPaiId($relationAlias = null) Adds a INNER JOIN clause to the query using the mfMenuRelatedByMenuPaiId relation
 *
 * @method     mfMenuQuery leftJoinsfGuardPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardPermission relation
 * @method     mfMenuQuery rightJoinsfGuardPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardPermission relation
 * @method     mfMenuQuery innerJoinsfGuardPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardPermission relation
 *
 * @method     mfMenuQuery leftJoinmfMenuRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the mfMenuRelatedById relation
 * @method     mfMenuQuery rightJoinmfMenuRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the mfMenuRelatedById relation
 * @method     mfMenuQuery innerJoinmfMenuRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the mfMenuRelatedById relation
 *
 * @method     mfMenu findOne(PropelPDO $con = null) Return the first mfMenu matching the query
 * @method     mfMenu findOneOrCreate(PropelPDO $con = null) Return the first mfMenu matching the query, or a new mfMenu object populated from the query conditions when no match is found
 *
 * @method     mfMenu findOneById(int $id) Return the first mfMenu filtered by the id column
 * @method     mfMenu findOneByNome(string $nome) Return the first mfMenu filtered by the nome column
 * @method     mfMenu findOneByMenuPaiId(int $menu_pai_id) Return the first mfMenu filtered by the menu_pai_id column
 * @method     mfMenu findOneByRota(string $rota) Return the first mfMenu filtered by the rota column
 * @method     mfMenu findOneByPermissaoId(int $permissao_id) Return the first mfMenu filtered by the permissao_id column
 * @method     mfMenu findOneByPosicao(int $posicao) Return the first mfMenu filtered by the posicao column
 * @method     mfMenu findOneByCreatedAt(string $created_at) Return the first mfMenu filtered by the created_at column
 * @method     mfMenu findOneByUpdatedAt(string $updated_at) Return the first mfMenu filtered by the updated_at column
 *
 * @method     array findById(int $id) Return mfMenu objects filtered by the id column
 * @method     array findByNome(string $nome) Return mfMenu objects filtered by the nome column
 * @method     array findByMenuPaiId(int $menu_pai_id) Return mfMenu objects filtered by the menu_pai_id column
 * @method     array findByRota(string $rota) Return mfMenu objects filtered by the rota column
 * @method     array findByPermissaoId(int $permissao_id) Return mfMenu objects filtered by the permissao_id column
 * @method     array findByPosicao(int $posicao) Return mfMenu objects filtered by the posicao column
 * @method     array findByCreatedAt(string $created_at) Return mfMenu objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return mfMenu objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.mfMenuPlugin.lib.model.om
 */
abstract class BasemfMenuQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasemfMenuQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'mfMenu', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new mfMenuQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    mfMenuQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof mfMenuQuery) {
			return $criteria;
		}
		$query = new mfMenuQuery();
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
	 * @return    mfMenu|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = mfMenuPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(mfMenuPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(mfMenuPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(mfMenuPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the nome column
	 * 
	 * @param     string $nome The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByNome($nome = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nome)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nome)) {
				$nome = str_replace('*', '%', $nome);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::NOME, $nome, $comparison);
	}

	/**
	 * Filter the query on the menu_pai_id column
	 * 
	 * @param     int|array $menuPaiId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByMenuPaiId($menuPaiId = null, $comparison = null)
	{
		if (is_array($menuPaiId)) {
			$useMinMax = false;
			if (isset($menuPaiId['min'])) {
				$this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($menuPaiId['max'])) {
				$this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId, $comparison);
	}

	/**
	 * Filter the query on the rota column
	 * 
	 * @param     string $rota The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByRota($rota = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($rota)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $rota)) {
				$rota = str_replace('*', '%', $rota);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::ROTA, $rota, $comparison);
	}

	/**
	 * Filter the query on the permissao_id column
	 * 
	 * @param     int|array $permissaoId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByPermissaoId($permissaoId = null, $comparison = null)
	{
		if (is_array($permissaoId)) {
			$useMinMax = false;
			if (isset($permissaoId['min'])) {
				$this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($permissaoId['max'])) {
				$this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId, $comparison);
	}

	/**
	 * Filter the query on the posicao column
	 * 
	 * @param     int|array $posicao The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByPosicao($posicao = null, $comparison = null)
	{
		if (is_array($posicao)) {
			$useMinMax = false;
			if (isset($posicao['min'])) {
				$this->addUsingAlias(mfMenuPeer::POSICAO, $posicao['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($posicao['max'])) {
				$this->addUsingAlias(mfMenuPeer::POSICAO, $posicao['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::POSICAO, $posicao, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related mfMenu object
	 *
	 * @param     mfMenu $mfMenu  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterBymfMenuRelatedByMenuPaiId($mfMenu, $comparison = null)
	{
		return $this
			->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $mfMenu->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the mfMenuRelatedByMenuPaiId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function joinmfMenuRelatedByMenuPaiId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('mfMenuRelatedByMenuPaiId');
		
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
			$this->addJoinObject($join, 'mfMenuRelatedByMenuPaiId');
		}
		
		return $this;
	}

	/**
	 * Use the mfMenuRelatedByMenuPaiId relation mfMenu object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfMenuQuery A secondary query class using the current class as primary query
	 */
	public function usemfMenuRelatedByMenuPaiIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinmfMenuRelatedByMenuPaiId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'mfMenuRelatedByMenuPaiId', 'mfMenuQuery');
	}

	/**
	 * Filter the query by a related sfGuardPermission object
	 *
	 * @param     sfGuardPermission $sfGuardPermission  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterBysfGuardPermission($sfGuardPermission, $comparison = null)
	{
		return $this
			->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $sfGuardPermission->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardPermission relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function joinsfGuardPermission($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardPermission');
		
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
			$this->addJoinObject($join, 'sfGuardPermission');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardPermission relation sfGuardPermission object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardPermissionQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardPermissionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinsfGuardPermission($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardPermission', 'sfGuardPermissionQuery');
	}

	/**
	 * Filter the query by a related mfMenu object
	 *
	 * @param     mfMenu $mfMenu  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterBymfMenuRelatedById($mfMenu, $comparison = null)
	{
		return $this
			->addUsingAlias(mfMenuPeer::ID, $mfMenu->getMenuPaiId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the mfMenuRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function joinmfMenuRelatedById($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('mfMenuRelatedById');
		
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
			$this->addJoinObject($join, 'mfMenuRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the mfMenuRelatedById relation mfMenu object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    mfMenuQuery A secondary query class using the current class as primary query
	 */
	public function usemfMenuRelatedByIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinmfMenuRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'mfMenuRelatedById', 'mfMenuQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     mfMenu $mfMenu Object to remove from the list of results
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function prune($mfMenu = null)
	{
		if ($mfMenu) {
			$this->addUsingAlias(mfMenuPeer::ID, $mfMenu->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasemfMenuQuery
