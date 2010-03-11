<?php


/**
 * Base class that represents a query for the 'sighting' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Thu Mar 11 15:15:42 2010
 *
 * @method     SightingQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SightingQuery orderByRecordId($order = Criteria::ASC) Order by the record_id column
 * @method     SightingQuery orderBySpecieId($order = Criteria::ASC) Order by the specie_id column
 * @method     SightingQuery orderByBehaviourId($order = Criteria::ASC) Order by the behaviour_id column
 * @method     SightingQuery orderByAssociationId($order = Criteria::ASC) Order by the association_id column
 * @method     SightingQuery orderByAdults($order = Criteria::ASC) Order by the adults column
 * @method     SightingQuery orderByJuveniles($order = Criteria::ASC) Order by the juveniles column
 * @method     SightingQuery orderByCubs($order = Criteria::ASC) Order by the cubs column
 * @method     SightingQuery orderByTotal($order = Criteria::ASC) Order by the total column
 * @method     SightingQuery orderByNumVessels($order = Criteria::ASC) Order by the num_vessels column
 * @method     SightingQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     SightingQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SightingQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SightingQuery groupById() Group by the id column
 * @method     SightingQuery groupByRecordId() Group by the record_id column
 * @method     SightingQuery groupBySpecieId() Group by the specie_id column
 * @method     SightingQuery groupByBehaviourId() Group by the behaviour_id column
 * @method     SightingQuery groupByAssociationId() Group by the association_id column
 * @method     SightingQuery groupByAdults() Group by the adults column
 * @method     SightingQuery groupByJuveniles() Group by the juveniles column
 * @method     SightingQuery groupByCubs() Group by the cubs column
 * @method     SightingQuery groupByTotal() Group by the total column
 * @method     SightingQuery groupByNumVessels() Group by the num_vessels column
 * @method     SightingQuery groupByDescription() Group by the description column
 * @method     SightingQuery groupByCreatedAt() Group by the created_at column
 * @method     SightingQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Sighting findOne(PropelPDO $con = null) Return the first Sighting matching the query
 * @method     Sighting findOneById(int $id) Return the first Sighting filtered by the id column
 * @method     Sighting findOneByRecordId(int $record_id) Return the first Sighting filtered by the record_id column
 * @method     Sighting findOneBySpecieId(int $specie_id) Return the first Sighting filtered by the specie_id column
 * @method     Sighting findOneByBehaviourId(int $behaviour_id) Return the first Sighting filtered by the behaviour_id column
 * @method     Sighting findOneByAssociationId(int $association_id) Return the first Sighting filtered by the association_id column
 * @method     Sighting findOneByAdults(int $adults) Return the first Sighting filtered by the adults column
 * @method     Sighting findOneByJuveniles(int $juveniles) Return the first Sighting filtered by the juveniles column
 * @method     Sighting findOneByCubs(int $cubs) Return the first Sighting filtered by the cubs column
 * @method     Sighting findOneByTotal(int $total) Return the first Sighting filtered by the total column
 * @method     Sighting findOneByNumVessels(int $num_vessels) Return the first Sighting filtered by the num_vessels column
 * @method     Sighting findOneByDescription(string $description) Return the first Sighting filtered by the description column
 * @method     Sighting findOneByCreatedAt(string $created_at) Return the first Sighting filtered by the created_at column
 * @method     Sighting findOneByUpdatedAt(string $updated_at) Return the first Sighting filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Sighting objects filtered by the id column
 * @method     array findByRecordId(int $record_id) Return Sighting objects filtered by the record_id column
 * @method     array findBySpecieId(int $specie_id) Return Sighting objects filtered by the specie_id column
 * @method     array findByBehaviourId(int $behaviour_id) Return Sighting objects filtered by the behaviour_id column
 * @method     array findByAssociationId(int $association_id) Return Sighting objects filtered by the association_id column
 * @method     array findByAdults(int $adults) Return Sighting objects filtered by the adults column
 * @method     array findByJuveniles(int $juveniles) Return Sighting objects filtered by the juveniles column
 * @method     array findByCubs(int $cubs) Return Sighting objects filtered by the cubs column
 * @method     array findByTotal(int $total) Return Sighting objects filtered by the total column
 * @method     array findByNumVessels(int $num_vessels) Return Sighting objects filtered by the num_vessels column
 * @method     array findByDescription(string $description) Return Sighting objects filtered by the description column
 * @method     array findByCreatedAt(string $created_at) Return Sighting objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Sighting objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSightingQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSightingQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Sighting', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = SightingPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SightingPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SightingPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(SightingPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(SightingPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the record_id column
	 * 
	 * @param     int|array $record_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByRecordId($recordId = null)
	{
		if (is_array($recordId)) {
			if (array_values($recordId) === $recordId) {
				return $this->addUsingAlias(SightingPeer::RECORD_ID, $recordId, Criteria::IN);
			} else {
				if (isset($recordId['min'])) {
					$this->addUsingAlias(SightingPeer::RECORD_ID, $recordId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($recordId['max'])) {
					$this->addUsingAlias(SightingPeer::RECORD_ID, $recordId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::RECORD_ID, $recordId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the specie_id column
	 * 
	 * @param     int|array $specie_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterBySpecieId($specieId = null)
	{
		if (is_array($specieId)) {
			if (array_values($specieId) === $specieId) {
				return $this->addUsingAlias(SightingPeer::SPECIE_ID, $specieId, Criteria::IN);
			} else {
				if (isset($specieId['min'])) {
					$this->addUsingAlias(SightingPeer::SPECIE_ID, $specieId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($specieId['max'])) {
					$this->addUsingAlias(SightingPeer::SPECIE_ID, $specieId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::SPECIE_ID, $specieId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the behaviour_id column
	 * 
	 * @param     int|array $behaviour_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByBehaviourId($behaviourId = null)
	{
		if (is_array($behaviourId)) {
			if (array_values($behaviourId) === $behaviourId) {
				return $this->addUsingAlias(SightingPeer::BEHAVIOUR_ID, $behaviourId, Criteria::IN);
			} else {
				if (isset($behaviourId['min'])) {
					$this->addUsingAlias(SightingPeer::BEHAVIOUR_ID, $behaviourId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($behaviourId['max'])) {
					$this->addUsingAlias(SightingPeer::BEHAVIOUR_ID, $behaviourId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::BEHAVIOUR_ID, $behaviourId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the association_id column
	 * 
	 * @param     int|array $association_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByAssociationId($associationId = null)
	{
		if (is_array($associationId)) {
			if (array_values($associationId) === $associationId) {
				return $this->addUsingAlias(SightingPeer::ASSOCIATION_ID, $associationId, Criteria::IN);
			} else {
				if (isset($associationId['min'])) {
					$this->addUsingAlias(SightingPeer::ASSOCIATION_ID, $associationId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($associationId['max'])) {
					$this->addUsingAlias(SightingPeer::ASSOCIATION_ID, $associationId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::ASSOCIATION_ID, $associationId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the adults column
	 * 
	 * @param     int|array $adults The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByAdults($adults = null)
	{
		if (is_array($adults)) {
			if (array_values($adults) === $adults) {
				return $this->addUsingAlias(SightingPeer::ADULTS, $adults, Criteria::IN);
			} else {
				if (isset($adults['min'])) {
					$this->addUsingAlias(SightingPeer::ADULTS, $adults['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($adults['max'])) {
					$this->addUsingAlias(SightingPeer::ADULTS, $adults['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::ADULTS, $adults, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the juveniles column
	 * 
	 * @param     int|array $juveniles The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByJuveniles($juveniles = null)
	{
		if (is_array($juveniles)) {
			if (array_values($juveniles) === $juveniles) {
				return $this->addUsingAlias(SightingPeer::JUVENILES, $juveniles, Criteria::IN);
			} else {
				if (isset($juveniles['min'])) {
					$this->addUsingAlias(SightingPeer::JUVENILES, $juveniles['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($juveniles['max'])) {
					$this->addUsingAlias(SightingPeer::JUVENILES, $juveniles['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::JUVENILES, $juveniles, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the cubs column
	 * 
	 * @param     int|array $cubs The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByCubs($cubs = null)
	{
		if (is_array($cubs)) {
			if (array_values($cubs) === $cubs) {
				return $this->addUsingAlias(SightingPeer::CUBS, $cubs, Criteria::IN);
			} else {
				if (isset($cubs['min'])) {
					$this->addUsingAlias(SightingPeer::CUBS, $cubs['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($cubs['max'])) {
					$this->addUsingAlias(SightingPeer::CUBS, $cubs['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::CUBS, $cubs, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the total column
	 * 
	 * @param     int|array $total The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByTotal($total = null)
	{
		if (is_array($total)) {
			if (array_values($total) === $total) {
				return $this->addUsingAlias(SightingPeer::TOTAL, $total, Criteria::IN);
			} else {
				if (isset($total['min'])) {
					$this->addUsingAlias(SightingPeer::TOTAL, $total['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($total['max'])) {
					$this->addUsingAlias(SightingPeer::TOTAL, $total['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::TOTAL, $total, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the num_vessels column
	 * 
	 * @param     int|array $num_vessels The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByNumVessels($numVessels = null)
	{
		if (is_array($numVessels)) {
			if (array_values($numVessels) === $numVessels) {
				return $this->addUsingAlias(SightingPeer::NUM_VESSELS, $numVessels, Criteria::IN);
			} else {
				if (isset($numVessels['min'])) {
					$this->addUsingAlias(SightingPeer::NUM_VESSELS, $numVessels['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($numVessels['max'])) {
					$this->addUsingAlias(SightingPeer::NUM_VESSELS, $numVessels['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::NUM_VESSELS, $numVessels, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null)
	{
		if(preg_match('/[\%\*]/', $description)) {
			return $this->addUsingAlias(SightingPeer::DESCRIPTION, str_replace('*', '%', $description), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(SightingPeer::DESCRIPTION, $description, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(SightingPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(SightingPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(SightingPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(SightingPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(SightingPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(SightingPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(SightingPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Record object
	 *
	 * @param     Record $record  the related object to use as filter
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByRecord($record)
	{
		return $this
			->addUsingAlias(SightingPeer::RECORD_ID, $record->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Record relation Record object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery A secondary query class using the current class as primary query
	 */
	public function useRecordQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Record' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Record', 'RecordQuery');
	}

	/**
	 * Filter the query by a related Specie object
	 *
	 * @param     Specie $specie  the related object to use as filter
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterBySpecie($specie)
	{
		return $this
			->addUsingAlias(SightingPeer::SPECIE_ID, $specie->getId(), Criteria::EQUAL);
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
	 * Filter the query by a related Behaviour object
	 *
	 * @param     Behaviour $behaviour  the related object to use as filter
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByBehaviour($behaviour)
	{
		return $this
			->addUsingAlias(SightingPeer::BEHAVIOUR_ID, $behaviour->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Behaviour relation Behaviour object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BehaviourQuery A secondary query class using the current class as primary query
	 */
	public function useBehaviourQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Behaviour' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Behaviour', 'BehaviourQuery');
	}

	/**
	 * Filter the query by a related Association object
	 *
	 * @param     Association $association  the related object to use as filter
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function filterByAssociation($association)
	{
		return $this
			->addUsingAlias(SightingPeer::ASSOCIATION_ID, $association->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Association relation Association object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AssociationQuery A secondary query class using the current class as primary query
	 */
	public function useAssociationQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Association' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Association', 'AssociationQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Sighting $sighting Object to remove from the list of results
	 *
	 * @return    SightingQuery The current query, for fluid interface
	 */
	public function prune($sighting = null)
	{
		if ($sighting) {
			$this->addUsingAlias(SightingPeer::ID, $sighting->getId(), Criteria::NOT_EQUAL);
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

} // BaseSightingQuery
