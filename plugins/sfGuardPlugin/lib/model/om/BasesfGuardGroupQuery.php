<?php


/**
 * Base class that represents a query for the 'sf_guard_group' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Jan 14 18:11:49 2011
 *
 * @method     sfGuardGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     sfGuardGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     sfGuardGroupQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     sfGuardGroupQuery groupById() Group by the id column
 * @method     sfGuardGroupQuery groupByName() Group by the name column
 * @method     sfGuardGroupQuery groupByDescription() Group by the description column
 *
 * @method     sfGuardGroup findOne(PropelPDO $con = null) Return the first sfGuardGroup matching the query
 * @method     sfGuardGroup findOneById(int $id) Return the first sfGuardGroup filtered by the id column
 * @method     sfGuardGroup findOneByName(string $name) Return the first sfGuardGroup filtered by the name column
 * @method     sfGuardGroup findOneByDescription(string $description) Return the first sfGuardGroup filtered by the description column
 *
 * @method     array findById(int $id) Return sfGuardGroup objects filtered by the id column
 * @method     array findByName(string $name) Return sfGuardGroup objects filtered by the name column
 * @method     array findByDescription(string $description) Return sfGuardGroup objects filtered by the description column
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model.om
 */
abstract class BasesfGuardGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasesfGuardGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfGuardGroup', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = sfGuardGroupPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(sfGuardGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(sfGuardGroupPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(sfGuardGroupPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(sfGuardGroupPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterByName($name = null)
	{
		if(preg_match('/[\%\*]/', $name)) {
			return $this->addUsingAlias(sfGuardGroupPeer::NAME, str_replace('*', '%', $name), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(sfGuardGroupPeer::NAME, $name, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null)
	{
		if(preg_match('/[\%\*]/', $description)) {
			return $this->addUsingAlias(sfGuardGroupPeer::DESCRIPTION, str_replace('*', '%', $description), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(sfGuardGroupPeer::DESCRIPTION, $description, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related sfGuardGroupPermission object
	 *
	 * @param     sfGuardGroupPermission $sfGuardGroupPermission  the related object to use as filter
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterBysfGuardGroupPermission($sfGuardGroupPermission)
	{
		return $this
			->addUsingAlias(sfGuardGroupPeer::ID, $sfGuardGroupPermission->getGroupId(), Criteria::EQUAL);
	}

	/**
	 * Use the sfGuardGroupPermission relation sfGuardGroupPermission object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardGroupPermissionQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardGroupPermissionQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('sfGuardGroupPermission' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardGroupPermission', 'sfGuardGroupPermissionQuery');
	}

	/**
	 * Filter the query by a related sfGuardUserGroup object
	 *
	 * @param     sfGuardUserGroup $sfGuardUserGroup  the related object to use as filter
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserGroup($sfGuardUserGroup)
	{
		return $this
			->addUsingAlias(sfGuardGroupPeer::ID, $sfGuardUserGroup->getGroupId(), Criteria::EQUAL);
	}

	/**
	 * Use the sfGuardUserGroup relation sfGuardUserGroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserGroupQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserGroupQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('sfGuardUserGroup' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserGroup', 'sfGuardUserGroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfGuardGroup $sfGuardGroup Object to remove from the list of results
	 *
	 * @return    sfGuardGroupQuery The current query, for fluid interface
	 */
	public function prune($sfGuardGroup = null)
	{
		if ($sfGuardGroup) {
			$this->addUsingAlias(sfGuardGroupPeer::ID, $sfGuardGroup->getId(), Criteria::NOT_EQUAL);
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

} // BasesfGuardGroupQuery
