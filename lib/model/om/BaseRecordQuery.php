<?php


/**
 * Base class that represents a query for the 'record' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Mar  9 15:19:04 2010
 *
 * @method     RecordQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     RecordQuery orderByCodeId($order = Criteria::ASC) Order by the code_id column
 * @method     RecordQuery orderByVisibilityId($order = Criteria::ASC) Order by the visibility_id column
 * @method     RecordQuery orderBySeaStateId($order = Criteria::ASC) Order by the sea_state_id column
 * @method     RecordQuery orderByGeneralInfoId($order = Criteria::ASC) Order by the general_info_id column
 * @method     RecordQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     RecordQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     RecordQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     RecordQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     RecordQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     RecordQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     RecordQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     RecordQuery groupById() Group by the id column
 * @method     RecordQuery groupByCodeId() Group by the code_id column
 * @method     RecordQuery groupByVisibilityId() Group by the visibility_id column
 * @method     RecordQuery groupBySeaStateId() Group by the sea_state_id column
 * @method     RecordQuery groupByGeneralInfoId() Group by the general_info_id column
 * @method     RecordQuery groupByCompanyId() Group by the company_id column
 * @method     RecordQuery groupByTime() Group by the time column
 * @method     RecordQuery groupByLatitude() Group by the latitude column
 * @method     RecordQuery groupByLongitude() Group by the longitude column
 * @method     RecordQuery groupByComments() Group by the comments column
 * @method     RecordQuery groupByCreatedAt() Group by the created_at column
 * @method     RecordQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Record findOne(PropelPDO $con = null) Return the first Record matching the query
 * @method     Record findOneById(int $id) Return the first Record filtered by the id column
 * @method     Record findOneByCodeId(int $code_id) Return the first Record filtered by the code_id column
 * @method     Record findOneByVisibilityId(int $visibility_id) Return the first Record filtered by the visibility_id column
 * @method     Record findOneBySeaStateId(int $sea_state_id) Return the first Record filtered by the sea_state_id column
 * @method     Record findOneByGeneralInfoId(int $general_info_id) Return the first Record filtered by the general_info_id column
 * @method     Record findOneByCompanyId(int $company_id) Return the first Record filtered by the company_id column
 * @method     Record findOneByTime(string $time) Return the first Record filtered by the time column
 * @method     Record findOneByLatitude(string $latitude) Return the first Record filtered by the latitude column
 * @method     Record findOneByLongitude(string $longitude) Return the first Record filtered by the longitude column
 * @method     Record findOneByComments(string $comments) Return the first Record filtered by the comments column
 * @method     Record findOneByCreatedAt(string $created_at) Return the first Record filtered by the created_at column
 * @method     Record findOneByUpdatedAt(string $updated_at) Return the first Record filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Record objects filtered by the id column
 * @method     array findByCodeId(int $code_id) Return Record objects filtered by the code_id column
 * @method     array findByVisibilityId(int $visibility_id) Return Record objects filtered by the visibility_id column
 * @method     array findBySeaStateId(int $sea_state_id) Return Record objects filtered by the sea_state_id column
 * @method     array findByGeneralInfoId(int $general_info_id) Return Record objects filtered by the general_info_id column
 * @method     array findByCompanyId(int $company_id) Return Record objects filtered by the company_id column
 * @method     array findByTime(string $time) Return Record objects filtered by the time column
 * @method     array findByLatitude(string $latitude) Return Record objects filtered by the latitude column
 * @method     array findByLongitude(string $longitude) Return Record objects filtered by the longitude column
 * @method     array findByComments(string $comments) Return Record objects filtered by the comments column
 * @method     array findByCreatedAt(string $created_at) Return Record objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Record objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRecordQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRecordQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Record', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = RecordPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RecordPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RecordPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(RecordPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(RecordPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the code_id column
	 * 
	 * @param     int|array $code_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCodeId($codeId = null)
	{
		if (is_array($codeId)) {
			if (array_values($codeId) === $codeId) {
				return $this->addUsingAlias(RecordPeer::CODE_ID, $codeId, Criteria::IN);
			} else {
				if (isset($codeId['min'])) {
					$this->addUsingAlias(RecordPeer::CODE_ID, $codeId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($codeId['max'])) {
					$this->addUsingAlias(RecordPeer::CODE_ID, $codeId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::CODE_ID, $codeId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the visibility_id column
	 * 
	 * @param     int|array $visibility_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByVisibilityId($visibilityId = null)
	{
		if (is_array($visibilityId)) {
			if (array_values($visibilityId) === $visibilityId) {
				return $this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId, Criteria::IN);
			} else {
				if (isset($visibilityId['min'])) {
					$this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($visibilityId['max'])) {
					$this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibilityId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the sea_state_id column
	 * 
	 * @param     int|array $sea_state_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterBySeaStateId($seaStateId = null)
	{
		if (is_array($seaStateId)) {
			if (array_values($seaStateId) === $seaStateId) {
				return $this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId, Criteria::IN);
			} else {
				if (isset($seaStateId['min'])) {
					$this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($seaStateId['max'])) {
					$this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaStateId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the general_info_id column
	 * 
	 * @param     int|array $general_info_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfoId($generalInfoId = null)
	{
		if (is_array($generalInfoId)) {
			if (array_values($generalInfoId) === $generalInfoId) {
				return $this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId, Criteria::IN);
			} else {
				if (isset($generalInfoId['min'])) {
					$this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($generalInfoId['max'])) {
					$this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfoId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the company_id column
	 * 
	 * @param     int|array $company_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCompanyId($companyId = null)
	{
		if (is_array($companyId)) {
			if (array_values($companyId) === $companyId) {
				return $this->addUsingAlias(RecordPeer::COMPANY_ID, $companyId, Criteria::IN);
			} else {
				if (isset($companyId['min'])) {
					$this->addUsingAlias(RecordPeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($companyId['max'])) {
					$this->addUsingAlias(RecordPeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::COMPANY_ID, $companyId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the time column
	 * 
	 * @param     string|array $time The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByTime($time = null)
	{
		if (is_array($time)) {
			if (array_values($time) === $time) {
				return $this->addUsingAlias(RecordPeer::TIME, $time, Criteria::IN);
			} else {
				if (isset($time['min'])) {
					$this->addUsingAlias(RecordPeer::TIME, $time['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($time['max'])) {
					$this->addUsingAlias(RecordPeer::TIME, $time['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::TIME, $time, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the latitude column
	 * 
	 * @param     string $latitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null)
	{
		if(preg_match('/[\%\*]/', $latitude)) {
			return $this->addUsingAlias(RecordPeer::LATITUDE, str_replace('*', '%', $latitude), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(RecordPeer::LATITUDE, $latitude, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the longitude column
	 * 
	 * @param     string $longitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null)
	{
		if(preg_match('/[\%\*]/', $longitude)) {
			return $this->addUsingAlias(RecordPeer::LONGITUDE, str_replace('*', '%', $longitude), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(RecordPeer::LONGITUDE, $longitude, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByComments($comments = null)
	{
		if(preg_match('/[\%\*]/', $comments)) {
			return $this->addUsingAlias(RecordPeer::COMMENTS, str_replace('*', '%', $comments), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(RecordPeer::COMMENTS, $comments, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(RecordPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Code object
	 *
	 * @param     Code $code  the related object to use as filter
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCode($code)
	{
		return $this
			->addUsingAlias(RecordPeer::CODE_ID, $code->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Code relation Code object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CodeQuery A secondary query class using the current class as primary query
	 */
	public function useCodeQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Code' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Code', 'CodeQuery');
	}

	/**
	 * Filter the query by a related Visibility object
	 *
	 * @param     Visibility $visibility  the related object to use as filter
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility)
	{
		return $this
			->addUsingAlias(RecordPeer::VISIBILITY_ID, $visibility->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Visibility relation Visibility object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VisibilityQuery A secondary query class using the current class as primary query
	 */
	public function useVisibilityQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Visibility' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Visibility', 'VisibilityQuery');
	}

	/**
	 * Filter the query by a related SeaState object
	 *
	 * @param     SeaState $seaState  the related object to use as filter
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterBySeaState($seaState)
	{
		return $this
			->addUsingAlias(RecordPeer::SEA_STATE_ID, $seaState->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the SeaState relation SeaState object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SeaStateQuery A secondary query class using the current class as primary query
	 */
	public function useSeaStateQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('SeaState' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'SeaState', 'SeaStateQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfo($generalInfo)
	{
		return $this
			->addUsingAlias(RecordPeer::GENERAL_INFO_ID, $generalInfo->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the GeneralInfo relation GeneralInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneralInfoQuery A secondary query class using the current class as primary query
	 */
	public function useGeneralInfoQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('GeneralInfo' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GeneralInfo', 'GeneralInfoQuery');
	}

	/**
	 * Filter the query by a related Company object
	 *
	 * @param     Company $company  the related object to use as filter
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterByCompany($company)
	{
		return $this
			->addUsingAlias(RecordPeer::COMPANY_ID, $company->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Company relation Company object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Company' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
	}

	/**
	 * Filter the query by a related Sighting object
	 *
	 * @param     Sighting $sighting  the related object to use as filter
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function filterBySighting($sighting)
	{
		return $this
			->addUsingAlias(RecordPeer::ID, $sighting->getRecordId(), Criteria::EQUAL);
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
	 * @param     Record $record Object to remove from the list of results
	 *
	 * @return    RecordQuery The current query, for fluid interface
	 */
	public function prune($record = null)
	{
		if ($record) {
			$this->addUsingAlias(RecordPeer::ID, $record->getId(), Criteria::NOT_EQUAL);
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

} // BaseRecordQuery
