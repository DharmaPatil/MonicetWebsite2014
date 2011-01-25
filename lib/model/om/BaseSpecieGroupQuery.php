<?php


/**
 * Base class that represents a query for the 'specie_group' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Jan 25 14:53:58 2011
 *
 * @method     SpecieGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SpecieGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SpecieGroupQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SpecieGroupQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SpecieGroupQuery groupById() Group by the id column
 * @method     SpecieGroupQuery groupByName() Group by the name column
 * @method     SpecieGroupQuery groupByCreatedAt() Group by the created_at column
 * @method     SpecieGroupQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     SpecieGroup findOne(PropelPDO $con = null) Return the first SpecieGroup matching the query
 * @method     SpecieGroup findOneById(int $id) Return the first SpecieGroup filtered by the id column
 * @method     SpecieGroup findOneByName(string $name) Return the first SpecieGroup filtered by the name column
 * @method     SpecieGroup findOneByCreatedAt(string $created_at) Return the first SpecieGroup filtered by the created_at column
 * @method     SpecieGroup findOneByUpdatedAt(string $updated_at) Return the first SpecieGroup filtered by the updated_at column
 *
 * @method     array findById(int $id) Return SpecieGroup objects filtered by the id column
 * @method     array findByName(string $name) Return SpecieGroup objects filtered by the name column
 * @method     array findByCreatedAt(string $created_at) Return SpecieGroup objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return SpecieGroup objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSpecieGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSpecieGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'SpecieGroup', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = SpecieGroupPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SpecieGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SpecieGroupPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(SpecieGroupPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(SpecieGroupPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByName($name = null)
	{
		if(preg_match('/[\%\*]/', $name)) {
			return $this->addUsingAlias(SpecieGroupPeer::NAME, str_replace('*', '%', $name), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(SpecieGroupPeer::NAME, $name, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Specie object
	 *
	 * @param     Specie $specie  the related object to use as filter
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterBySpecie($specie)
	{
		return $this
			->addUsingAlias(SpecieGroupPeer::ID, $specie->getSpecieGroupId(), Criteria::EQUAL);
	}

	/**
	 * Use the Specie relation Specie object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SpecieQuery A secondary query class using the current class as primary query
	 */
	public function useSpecieQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Specie' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Specie', 'SpecieQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SpecieGroup $specieGroup Object to remove from the list of results
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function prune($specieGroup = null)
	{
		if ($specieGroup) {
			$this->addUsingAlias(SpecieGroupPeer::ID, $specieGroup->getId(), Criteria::NOT_EQUAL);
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

} // BaseSpecieGroupQuery
