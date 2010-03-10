<?php


/**
 * Base class that represents a query for the 'specie' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Wed Mar 10 10:58:12 2010
 *
 * @method     SpecieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SpecieQuery orderBySpecieGroupId($order = Criteria::ASC) Order by the specie_group_id column
 * @method     SpecieQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     SpecieQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SpecieQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SpecieQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SpecieQuery groupById() Group by the id column
 * @method     SpecieQuery groupBySpecieGroupId() Group by the specie_group_id column
 * @method     SpecieQuery groupByCode() Group by the code column
 * @method     SpecieQuery groupByName() Group by the name column
 * @method     SpecieQuery groupByCreatedAt() Group by the created_at column
 * @method     SpecieQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Specie findOne(PropelPDO $con = null) Return the first Specie matching the query
 * @method     Specie findOneById(int $id) Return the first Specie filtered by the id column
 * @method     Specie findOneBySpecieGroupId(int $specie_group_id) Return the first Specie filtered by the specie_group_id column
 * @method     Specie findOneByCode(string $code) Return the first Specie filtered by the code column
 * @method     Specie findOneByName(string $name) Return the first Specie filtered by the name column
 * @method     Specie findOneByCreatedAt(string $created_at) Return the first Specie filtered by the created_at column
 * @method     Specie findOneByUpdatedAt(string $updated_at) Return the first Specie filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Specie objects filtered by the id column
 * @method     array findBySpecieGroupId(int $specie_group_id) Return Specie objects filtered by the specie_group_id column
 * @method     array findByCode(string $code) Return Specie objects filtered by the code column
 * @method     array findByName(string $name) Return Specie objects filtered by the name column
 * @method     array findByCreatedAt(string $created_at) Return Specie objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Specie objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSpecieQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSpecieQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Specie', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = SpeciePeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SpeciePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SpeciePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(SpeciePeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(SpeciePeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the specie_group_id column
	 * 
	 * @param     int|array $specie_group_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterBySpecieGroupId($specieGroupId = null)
	{
		if (is_array($specieGroupId)) {
			if (array_values($specieGroupId) === $specieGroupId) {
				return $this->addUsingAlias(SpeciePeer::SPECIE_GROUP_ID, $specieGroupId, Criteria::IN);
			} else {
				if (isset($specieGroupId['min'])) {
					$this->addUsingAlias(SpeciePeer::SPECIE_GROUP_ID, $specieGroupId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($specieGroupId['max'])) {
					$this->addUsingAlias(SpeciePeer::SPECIE_GROUP_ID, $specieGroupId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SpeciePeer::SPECIE_GROUP_ID, $specieGroupId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null)
	{
		if(preg_match('/[\%\*]/', $code)) {
			return $this->addUsingAlias(SpeciePeer::CODE, str_replace('*', '%', $code), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(SpeciePeer::CODE, $code, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterByName($name = null)
	{
		if(preg_match('/[\%\*]/', $name)) {
			return $this->addUsingAlias(SpeciePeer::NAME, str_replace('*', '%', $name), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(SpeciePeer::NAME, $name, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(SpeciePeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(SpeciePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(SpeciePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SpeciePeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(SpeciePeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(SpeciePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(SpeciePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SpeciePeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related SpecieGroup object
	 *
	 * @param     SpecieGroup $specieGroup  the related object to use as filter
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterBySpecieGroup($specieGroup)
	{
		return $this
			->addUsingAlias(SpeciePeer::SPECIE_GROUP_ID, $specieGroup->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the SpecieGroup relation SpecieGroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SpecieGroupQuery A secondary query class using the current class as primary query
	 */
	public function useSpecieGroupQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('SpecieGroup' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'SpecieGroup', 'SpecieGroupQuery');
	}

	/**
	 * Filter the query by a related Sighting object
	 *
	 * @param     Sighting $sighting  the related object to use as filter
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function filterBySighting($sighting)
	{
		return $this
			->addUsingAlias(SpeciePeer::ID, $sighting->getSpecieId(), Criteria::EQUAL);
	}

	/**
	 * Use the Sighting relation Sighting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SightingQuery A secondary query class using the current class as primary query
	 */
	public function useSightingQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Sighting' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Sighting', 'SightingQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Specie $specie Object to remove from the list of results
	 *
	 * @return    SpecieQuery The current query, for fluid interface
	 */
	public function prune($specie = null)
	{
		if ($specie) {
			$this->addUsingAlias(SpeciePeer::ID, $specie->getId(), Criteria::NOT_EQUAL);
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

} // BaseSpecieQuery
