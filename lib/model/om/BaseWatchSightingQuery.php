<?php


/**
 * Base class that represents a query for the 'watch_sighting' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Mon Nov 14 18:07:59 2011
 *
 * @method     WatchSightingQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     WatchSightingQuery orderByWatchInfoId($order = Criteria::ASC) Order by the watch_info_id column
 * @method     WatchSightingQuery orderByWatchCodeId($order = Criteria::ASC) Order by the watch_code_id column
 * @method     WatchSightingQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     WatchSightingQuery orderByWatchVisibilityId($order = Criteria::ASC) Order by the watch_visibility_id column
 * @method     WatchSightingQuery orderBySpecieId($order = Criteria::ASC) Order by the specie_id column
 * @method     WatchSightingQuery orderByGroup($order = Criteria::ASC) Order by the group column
 * @method     WatchSightingQuery orderByTotal($order = Criteria::ASC) Order by the total column
 * @method     WatchSightingQuery orderByBehaviourId($order = Criteria::ASC) Order by the behaviour_id column
 * @method     WatchSightingQuery orderByDirectionId($order = Criteria::ASC) Order by the direction_id column
 * @method     WatchSightingQuery orderByHorizontal($order = Criteria::ASC) Order by the horizontal column
 * @method     WatchSightingQuery orderByVertical($order = Criteria::ASC) Order by the vertical column
 * @method     WatchSightingQuery orderByVesselId($order = Criteria::ASC) Order by the vessel_id column
 * @method     WatchSightingQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     WatchSightingQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     WatchSightingQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     WatchSightingQuery groupById() Group by the id column
 * @method     WatchSightingQuery groupByWatchInfoId() Group by the watch_info_id column
 * @method     WatchSightingQuery groupByWatchCodeId() Group by the watch_code_id column
 * @method     WatchSightingQuery groupByTime() Group by the time column
 * @method     WatchSightingQuery groupByWatchVisibilityId() Group by the watch_visibility_id column
 * @method     WatchSightingQuery groupBySpecieId() Group by the specie_id column
 * @method     WatchSightingQuery groupByGroup() Group by the group column
 * @method     WatchSightingQuery groupByTotal() Group by the total column
 * @method     WatchSightingQuery groupByBehaviourId() Group by the behaviour_id column
 * @method     WatchSightingQuery groupByDirectionId() Group by the direction_id column
 * @method     WatchSightingQuery groupByHorizontal() Group by the horizontal column
 * @method     WatchSightingQuery groupByVertical() Group by the vertical column
 * @method     WatchSightingQuery groupByVesselId() Group by the vessel_id column
 * @method     WatchSightingQuery groupByComments() Group by the comments column
 * @method     WatchSightingQuery groupByCreatedAt() Group by the created_at column
 * @method     WatchSightingQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     WatchSighting findOne(PropelPDO $con = null) Return the first WatchSighting matching the query
 * @method     WatchSighting findOneById(int $id) Return the first WatchSighting filtered by the id column
 * @method     WatchSighting findOneByWatchInfoId(int $watch_info_id) Return the first WatchSighting filtered by the watch_info_id column
 * @method     WatchSighting findOneByWatchCodeId(int $watch_code_id) Return the first WatchSighting filtered by the watch_code_id column
 * @method     WatchSighting findOneByTime(string $time) Return the first WatchSighting filtered by the time column
 * @method     WatchSighting findOneByWatchVisibilityId(int $watch_visibility_id) Return the first WatchSighting filtered by the watch_visibility_id column
 * @method     WatchSighting findOneBySpecieId(int $specie_id) Return the first WatchSighting filtered by the specie_id column
 * @method     WatchSighting findOneByGroup(string $group) Return the first WatchSighting filtered by the group column
 * @method     WatchSighting findOneByTotal(int $total) Return the first WatchSighting filtered by the total column
 * @method     WatchSighting findOneByBehaviourId(int $behaviour_id) Return the first WatchSighting filtered by the behaviour_id column
 * @method     WatchSighting findOneByDirectionId(int $direction_id) Return the first WatchSighting filtered by the direction_id column
 * @method     WatchSighting findOneByHorizontal(double $horizontal) Return the first WatchSighting filtered by the horizontal column
 * @method     WatchSighting findOneByVertical(double $vertical) Return the first WatchSighting filtered by the vertical column
 * @method     WatchSighting findOneByVesselId(int $vessel_id) Return the first WatchSighting filtered by the vessel_id column
 * @method     WatchSighting findOneByComments(string $comments) Return the first WatchSighting filtered by the comments column
 * @method     WatchSighting findOneByCreatedAt(string $created_at) Return the first WatchSighting filtered by the created_at column
 * @method     WatchSighting findOneByUpdatedAt(string $updated_at) Return the first WatchSighting filtered by the updated_at column
 *
 * @method     array findById(int $id) Return WatchSighting objects filtered by the id column
 * @method     array findByWatchInfoId(int $watch_info_id) Return WatchSighting objects filtered by the watch_info_id column
 * @method     array findByWatchCodeId(int $watch_code_id) Return WatchSighting objects filtered by the watch_code_id column
 * @method     array findByTime(string $time) Return WatchSighting objects filtered by the time column
 * @method     array findByWatchVisibilityId(int $watch_visibility_id) Return WatchSighting objects filtered by the watch_visibility_id column
 * @method     array findBySpecieId(int $specie_id) Return WatchSighting objects filtered by the specie_id column
 * @method     array findByGroup(string $group) Return WatchSighting objects filtered by the group column
 * @method     array findByTotal(int $total) Return WatchSighting objects filtered by the total column
 * @method     array findByBehaviourId(int $behaviour_id) Return WatchSighting objects filtered by the behaviour_id column
 * @method     array findByDirectionId(int $direction_id) Return WatchSighting objects filtered by the direction_id column
 * @method     array findByHorizontal(double $horizontal) Return WatchSighting objects filtered by the horizontal column
 * @method     array findByVertical(double $vertical) Return WatchSighting objects filtered by the vertical column
 * @method     array findByVesselId(int $vessel_id) Return WatchSighting objects filtered by the vessel_id column
 * @method     array findByComments(string $comments) Return WatchSighting objects filtered by the comments column
 * @method     array findByCreatedAt(string $created_at) Return WatchSighting objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return WatchSighting objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseWatchSightingQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWatchSightingQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'WatchSighting', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = WatchSightingPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WatchSightingPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WatchSightingPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(WatchSightingPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(WatchSightingPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the watch_info_id column
	 * 
	 * @param     int|array $watch_info_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByWatchInfoId($watchInfoId = null)
	{
		if (is_array($watchInfoId)) {
			if (array_values($watchInfoId) === $watchInfoId) {
				return $this->addUsingAlias(WatchSightingPeer::WATCH_INFO_ID, $watchInfoId, Criteria::IN);
			} else {
				if (isset($watchInfoId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::WATCH_INFO_ID, $watchInfoId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($watchInfoId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::WATCH_INFO_ID, $watchInfoId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::WATCH_INFO_ID, $watchInfoId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the watch_code_id column
	 * 
	 * @param     int|array $watch_code_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByWatchCodeId($watchCodeId = null)
	{
		if (is_array($watchCodeId)) {
			if (array_values($watchCodeId) === $watchCodeId) {
				return $this->addUsingAlias(WatchSightingPeer::WATCH_CODE_ID, $watchCodeId, Criteria::IN);
			} else {
				if (isset($watchCodeId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::WATCH_CODE_ID, $watchCodeId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($watchCodeId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::WATCH_CODE_ID, $watchCodeId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::WATCH_CODE_ID, $watchCodeId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the time column
	 * 
	 * @param     string|array $time The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByTime($time = null)
	{
		if (is_array($time)) {
			if (array_values($time) === $time) {
				return $this->addUsingAlias(WatchSightingPeer::TIME, $time, Criteria::IN);
			} else {
				if (isset($time['min'])) {
					$this->addUsingAlias(WatchSightingPeer::TIME, $time['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($time['max'])) {
					$this->addUsingAlias(WatchSightingPeer::TIME, $time['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::TIME, $time, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the watch_visibility_id column
	 * 
	 * @param     int|array $watch_visibility_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByWatchVisibilityId($watchVisibilityId = null)
	{
		if (is_array($watchVisibilityId)) {
			if (array_values($watchVisibilityId) === $watchVisibilityId) {
				return $this->addUsingAlias(WatchSightingPeer::WATCH_VISIBILITY_ID, $watchVisibilityId, Criteria::IN);
			} else {
				if (isset($watchVisibilityId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::WATCH_VISIBILITY_ID, $watchVisibilityId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($watchVisibilityId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::WATCH_VISIBILITY_ID, $watchVisibilityId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::WATCH_VISIBILITY_ID, $watchVisibilityId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the specie_id column
	 * 
	 * @param     int|array $specie_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterBySpecieId($specieId = null)
	{
		if (is_array($specieId)) {
			if (array_values($specieId) === $specieId) {
				return $this->addUsingAlias(WatchSightingPeer::SPECIE_ID, $specieId, Criteria::IN);
			} else {
				if (isset($specieId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::SPECIE_ID, $specieId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($specieId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::SPECIE_ID, $specieId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::SPECIE_ID, $specieId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the group column
	 * 
	 * @param     string $group The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByGroup($group = null)
	{
		if(preg_match('/[\%\*]/', $group)) {
			return $this->addUsingAlias(WatchSightingPeer::GROUP, str_replace('*', '%', $group), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(WatchSightingPeer::GROUP, $group, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the total column
	 * 
	 * @param     int|array $total The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByTotal($total = null)
	{
		if (is_array($total)) {
			if (array_values($total) === $total) {
				return $this->addUsingAlias(WatchSightingPeer::TOTAL, $total, Criteria::IN);
			} else {
				if (isset($total['min'])) {
					$this->addUsingAlias(WatchSightingPeer::TOTAL, $total['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($total['max'])) {
					$this->addUsingAlias(WatchSightingPeer::TOTAL, $total['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::TOTAL, $total, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the behaviour_id column
	 * 
	 * @param     int|array $behaviour_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByBehaviourId($behaviourId = null)
	{
		if (is_array($behaviourId)) {
			if (array_values($behaviourId) === $behaviourId) {
				return $this->addUsingAlias(WatchSightingPeer::BEHAVIOUR_ID, $behaviourId, Criteria::IN);
			} else {
				if (isset($behaviourId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::BEHAVIOUR_ID, $behaviourId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($behaviourId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::BEHAVIOUR_ID, $behaviourId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::BEHAVIOUR_ID, $behaviourId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the direction_id column
	 * 
	 * @param     int|array $direction_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByDirectionId($directionId = null)
	{
		if (is_array($directionId)) {
			if (array_values($directionId) === $directionId) {
				return $this->addUsingAlias(WatchSightingPeer::DIRECTION_ID, $directionId, Criteria::IN);
			} else {
				if (isset($directionId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::DIRECTION_ID, $directionId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($directionId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::DIRECTION_ID, $directionId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::DIRECTION_ID, $directionId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the horizontal column
	 * 
	 * @param     double|array $horizontal The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByHorizontal($horizontal = null)
	{
		if (is_array($horizontal)) {
			if (array_values($horizontal) === $horizontal) {
				return $this->addUsingAlias(WatchSightingPeer::HORIZONTAL, $horizontal, Criteria::IN);
			} else {
				if (isset($horizontal['min'])) {
					$this->addUsingAlias(WatchSightingPeer::HORIZONTAL, $horizontal['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($horizontal['max'])) {
					$this->addUsingAlias(WatchSightingPeer::HORIZONTAL, $horizontal['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::HORIZONTAL, $horizontal, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the vertical column
	 * 
	 * @param     double|array $vertical The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByVertical($vertical = null)
	{
		if (is_array($vertical)) {
			if (array_values($vertical) === $vertical) {
				return $this->addUsingAlias(WatchSightingPeer::VERTICAL, $vertical, Criteria::IN);
			} else {
				if (isset($vertical['min'])) {
					$this->addUsingAlias(WatchSightingPeer::VERTICAL, $vertical['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($vertical['max'])) {
					$this->addUsingAlias(WatchSightingPeer::VERTICAL, $vertical['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::VERTICAL, $vertical, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the vessel_id column
	 * 
	 * @param     int|array $vessel_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByVesselId($vesselId = null)
	{
		if (is_array($vesselId)) {
			if (array_values($vesselId) === $vesselId) {
				return $this->addUsingAlias(WatchSightingPeer::VESSEL_ID, $vesselId, Criteria::IN);
			} else {
				if (isset($vesselId['min'])) {
					$this->addUsingAlias(WatchSightingPeer::VESSEL_ID, $vesselId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($vesselId['max'])) {
					$this->addUsingAlias(WatchSightingPeer::VESSEL_ID, $vesselId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::VESSEL_ID, $vesselId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByComments($comments = null)
	{
		if(preg_match('/[\%\*]/', $comments)) {
			return $this->addUsingAlias(WatchSightingPeer::COMMENTS, str_replace('*', '%', $comments), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(WatchSightingPeer::COMMENTS, $comments, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(WatchSightingPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(WatchSightingPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(WatchSightingPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(WatchSightingPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(WatchSightingPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(WatchSightingPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(WatchSightingPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related WatchInfo object
	 *
	 * @param     WatchInfo $watchInfo  the related object to use as filter
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByWatchInfo($watchInfo)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::WATCH_INFO_ID, $watchInfo->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the WatchInfo relation WatchInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchInfoQuery A secondary query class using the current class as primary query
	 */
	public function useWatchInfoQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('WatchInfo' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchInfo', 'WatchInfoQuery');
	}

	/**
	 * Filter the query by a related WatchCode object
	 *
	 * @param     WatchCode $watchCode  the related object to use as filter
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByWatchCode($watchCode)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::WATCH_CODE_ID, $watchCode->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the WatchCode relation WatchCode object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchCodeQuery A secondary query class using the current class as primary query
	 */
	public function useWatchCodeQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('WatchCode' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchCode', 'WatchCodeQuery');
	}

	/**
	 * Filter the query by a related WatchVisibility object
	 *
	 * @param     WatchVisibility $watchVisibility  the related object to use as filter
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByWatchVisibility($watchVisibility)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::WATCH_VISIBILITY_ID, $watchVisibility->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the WatchVisibility relation WatchVisibility object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchVisibilityQuery A secondary query class using the current class as primary query
	 */
	public function useWatchVisibilityQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('WatchVisibility' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchVisibility', 'WatchVisibilityQuery');
	}

	/**
	 * Filter the query by a related Specie object
	 *
	 * @param     Specie $specie  the related object to use as filter
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterBySpecie($specie)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::SPECIE_ID, $specie->getId(), Criteria::EQUAL);
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
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByBehaviour($behaviour)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::BEHAVIOUR_ID, $behaviour->getId(), Criteria::EQUAL);
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
	 * Filter the query by a related Direction object
	 *
	 * @param     Direction $direction  the related object to use as filter
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByDirection($direction)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::DIRECTION_ID, $direction->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Direction relation Direction object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DirectionQuery A secondary query class using the current class as primary query
	 */
	public function useDirectionQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Direction' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Direction', 'DirectionQuery');
	}

	/**
	 * Filter the query by a related Vessel object
	 *
	 * @param     Vessel $vessel  the related object to use as filter
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function filterByVessel($vessel)
	{
		return $this
			->addUsingAlias(WatchSightingPeer::VESSEL_ID, $vessel->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Vessel relation Vessel object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VesselQuery A secondary query class using the current class as primary query
	 */
	public function useVesselQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Vessel' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Vessel', 'VesselQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     WatchSighting $watchSighting Object to remove from the list of results
	 *
	 * @return    WatchSightingQuery The current query, for fluid interface
	 */
	public function prune($watchSighting = null)
	{
		if ($watchSighting) {
			$this->addUsingAlias(WatchSightingPeer::ID, $watchSighting->getId(), Criteria::NOT_EQUAL);
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

} // BaseWatchSightingQuery