<?php


/**
 * Base class that represents a query for the 'mf_menu' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Jan 25 14:53:55 2011
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
 * @method     mfMenu findOne(PropelPDO $con = null) Return the first mfMenu matching the query
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = mfMenuPeer::getInstanceFromPool((string) $key)))) {
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
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(mfMenuPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(mfMenuPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the nome column
	 * 
	 * @param     string $nome The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByNome($nome = null)
	{
		if(preg_match('/[\%\*]/', $nome)) {
			return $this->addUsingAlias(mfMenuPeer::NOME, str_replace('*', '%', $nome), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(mfMenuPeer::NOME, $nome, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the menu_pai_id column
	 * 
	 * @param     int|array $menu_pai_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByMenuPaiId($menuPaiId = null)
	{
		if (is_array($menuPaiId)) {
			if (array_values($menuPaiId) === $menuPaiId) {
				return $this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId, Criteria::IN);
			} else {
				if (isset($menuPaiId['min'])) {
					$this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($menuPaiId['max'])) {
					$this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $menuPaiId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the rota column
	 * 
	 * @param     string $rota The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByRota($rota = null)
	{
		if(preg_match('/[\%\*]/', $rota)) {
			return $this->addUsingAlias(mfMenuPeer::ROTA, str_replace('*', '%', $rota), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(mfMenuPeer::ROTA, $rota, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the permissao_id column
	 * 
	 * @param     int|array $permissao_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByPermissaoId($permissaoId = null)
	{
		if (is_array($permissaoId)) {
			if (array_values($permissaoId) === $permissaoId) {
				return $this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId, Criteria::IN);
			} else {
				if (isset($permissaoId['min'])) {
					$this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($permissaoId['max'])) {
					$this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $permissaoId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the posicao column
	 * 
	 * @param     int|array $posicao The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByPosicao($posicao = null)
	{
		if (is_array($posicao)) {
			if (array_values($posicao) === $posicao) {
				return $this->addUsingAlias(mfMenuPeer::POSICAO, $posicao, Criteria::IN);
			} else {
				if (isset($posicao['min'])) {
					$this->addUsingAlias(mfMenuPeer::POSICAO, $posicao['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($posicao['max'])) {
					$this->addUsingAlias(mfMenuPeer::POSICAO, $posicao['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(mfMenuPeer::POSICAO, $posicao, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(mfMenuPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(mfMenuPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related mfMenu object
	 *
	 * @param     mfMenu $mfMenu  the related object to use as filter
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterBymfMenuRelatedById($mfMenu)
	{
		return $this
			->addUsingAlias(mfMenuPeer::MENU_PAI_ID, $mfMenu->getId(), Criteria::EQUAL);
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
	public function usemfMenuRelatedByIdQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('mfMenuRelatedById' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'mfMenuRelatedById', 'mfMenuQuery');
	}

	/**
	 * Filter the query by a related sfGuardPermission object
	 *
	 * @param     sfGuardPermission $sfGuardPermission  the related object to use as filter
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterBysfGuardPermission($sfGuardPermission)
	{
		return $this
			->addUsingAlias(mfMenuPeer::PERMISSAO_ID, $sfGuardPermission->getId(), Criteria::EQUAL);
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
	public function usesfGuardPermissionQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('sfGuardPermission' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardPermission', 'sfGuardPermissionQuery');
	}

	/**
	 * Filter the query by a related mfMenu object
	 *
	 * @param     mfMenu $mfMenu  the related object to use as filter
	 *
	 * @return    mfMenuQuery The current query, for fluid interface
	 */
	public function filterBymfMenuRelatedByMenuPaiId($mfMenu)
	{
		return $this
			->addUsingAlias(mfMenuPeer::ID, $mfMenu->getMenuPaiId(), Criteria::EQUAL);
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
	public function usemfMenuRelatedByMenuPaiIdQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('mfMenuRelatedByMenuPaiId' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'mfMenuRelatedByMenuPaiId', 'mfMenuQuery');
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

} // BasemfMenuQuery
