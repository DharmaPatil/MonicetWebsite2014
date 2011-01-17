<?php


/**
 * Base class that represents a query for the 'company' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Jan 14 18:11:43 2011
 *
 * @method     CompanyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CompanyQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CompanyQuery orderByAcronym($order = Criteria::ASC) Order by the acronym column
 * @method     CompanyQuery orderByBaseLatitude($order = Criteria::ASC) Order by the base_latitude column
 * @method     CompanyQuery orderByBaseLongitude($order = Criteria::ASC) Order by the base_longitude column
 * @method     CompanyQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     CompanyQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     CompanyQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method     CompanyQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     CompanyQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     CompanyQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     CompanyQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method     CompanyQuery orderByDistrict($order = Criteria::ASC) Order by the district column
 * @method     CompanyQuery orderByMunicipality($order = Criteria::ASC) Order by the municipality column
 * @method     CompanyQuery orderByLocality($order = Criteria::ASC) Order by the locality column
 * @method     CompanyQuery orderByObservations($order = Criteria::ASC) Order by the observations column
 * @method     CompanyQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CompanyQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CompanyQuery groupById() Group by the id column
 * @method     CompanyQuery groupByName() Group by the name column
 * @method     CompanyQuery groupByAcronym() Group by the acronym column
 * @method     CompanyQuery groupByBaseLatitude() Group by the base_latitude column
 * @method     CompanyQuery groupByBaseLongitude() Group by the base_longitude column
 * @method     CompanyQuery groupByUrl() Group by the url column
 * @method     CompanyQuery groupByTelephone() Group by the telephone column
 * @method     CompanyQuery groupByMobile() Group by the mobile column
 * @method     CompanyQuery groupByFax() Group by the fax column
 * @method     CompanyQuery groupByEmail() Group by the email column
 * @method     CompanyQuery groupByAddress() Group by the address column
 * @method     CompanyQuery groupByZipcode() Group by the zipcode column
 * @method     CompanyQuery groupByDistrict() Group by the district column
 * @method     CompanyQuery groupByMunicipality() Group by the municipality column
 * @method     CompanyQuery groupByLocality() Group by the locality column
 * @method     CompanyQuery groupByObservations() Group by the observations column
 * @method     CompanyQuery groupByCreatedAt() Group by the created_at column
 * @method     CompanyQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Company findOne(PropelPDO $con = null) Return the first Company matching the query
 * @method     Company findOneById(int $id) Return the first Company filtered by the id column
 * @method     Company findOneByName(string $name) Return the first Company filtered by the name column
 * @method     Company findOneByAcronym(string $acronym) Return the first Company filtered by the acronym column
 * @method     Company findOneByBaseLatitude(string $base_latitude) Return the first Company filtered by the base_latitude column
 * @method     Company findOneByBaseLongitude(string $base_longitude) Return the first Company filtered by the base_longitude column
 * @method     Company findOneByUrl(string $url) Return the first Company filtered by the url column
 * @method     Company findOneByTelephone(string $telephone) Return the first Company filtered by the telephone column
 * @method     Company findOneByMobile(string $mobile) Return the first Company filtered by the mobile column
 * @method     Company findOneByFax(string $fax) Return the first Company filtered by the fax column
 * @method     Company findOneByEmail(string $email) Return the first Company filtered by the email column
 * @method     Company findOneByAddress(string $address) Return the first Company filtered by the address column
 * @method     Company findOneByZipcode(string $zipcode) Return the first Company filtered by the zipcode column
 * @method     Company findOneByDistrict(string $district) Return the first Company filtered by the district column
 * @method     Company findOneByMunicipality(string $municipality) Return the first Company filtered by the municipality column
 * @method     Company findOneByLocality(string $locality) Return the first Company filtered by the locality column
 * @method     Company findOneByObservations(string $observations) Return the first Company filtered by the observations column
 * @method     Company findOneByCreatedAt(string $created_at) Return the first Company filtered by the created_at column
 * @method     Company findOneByUpdatedAt(string $updated_at) Return the first Company filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Company objects filtered by the id column
 * @method     array findByName(string $name) Return Company objects filtered by the name column
 * @method     array findByAcronym(string $acronym) Return Company objects filtered by the acronym column
 * @method     array findByBaseLatitude(string $base_latitude) Return Company objects filtered by the base_latitude column
 * @method     array findByBaseLongitude(string $base_longitude) Return Company objects filtered by the base_longitude column
 * @method     array findByUrl(string $url) Return Company objects filtered by the url column
 * @method     array findByTelephone(string $telephone) Return Company objects filtered by the telephone column
 * @method     array findByMobile(string $mobile) Return Company objects filtered by the mobile column
 * @method     array findByFax(string $fax) Return Company objects filtered by the fax column
 * @method     array findByEmail(string $email) Return Company objects filtered by the email column
 * @method     array findByAddress(string $address) Return Company objects filtered by the address column
 * @method     array findByZipcode(string $zipcode) Return Company objects filtered by the zipcode column
 * @method     array findByDistrict(string $district) Return Company objects filtered by the district column
 * @method     array findByMunicipality(string $municipality) Return Company objects filtered by the municipality column
 * @method     array findByLocality(string $locality) Return Company objects filtered by the locality column
 * @method     array findByObservations(string $observations) Return Company objects filtered by the observations column
 * @method     array findByCreatedAt(string $created_at) Return Company objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Company objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCompanyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCompanyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Company', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = CompanyPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CompanyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CompanyPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(CompanyPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(CompanyPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByName($name = null)
	{
		if(preg_match('/[\%\*]/', $name)) {
			return $this->addUsingAlias(CompanyPeer::NAME, str_replace('*', '%', $name), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::NAME, $name, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the acronym column
	 * 
	 * @param     string $acronym The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByAcronym($acronym = null)
	{
		if(preg_match('/[\%\*]/', $acronym)) {
			return $this->addUsingAlias(CompanyPeer::ACRONYM, str_replace('*', '%', $acronym), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::ACRONYM, $acronym, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the base_latitude column
	 * 
	 * @param     string $base_latitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByBaseLatitude($baseLatitude = null)
	{
		if(preg_match('/[\%\*]/', $baseLatitude)) {
			return $this->addUsingAlias(CompanyPeer::BASE_LATITUDE, str_replace('*', '%', $baseLatitude), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::BASE_LATITUDE, $baseLatitude, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the base_longitude column
	 * 
	 * @param     string $base_longitude The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByBaseLongitude($baseLongitude = null)
	{
		if(preg_match('/[\%\*]/', $baseLongitude)) {
			return $this->addUsingAlias(CompanyPeer::BASE_LONGITUDE, str_replace('*', '%', $baseLongitude), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::BASE_LONGITUDE, $baseLongitude, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByUrl($url = null)
	{
		if(preg_match('/[\%\*]/', $url)) {
			return $this->addUsingAlias(CompanyPeer::URL, str_replace('*', '%', $url), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::URL, $url, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByTelephone($telephone = null)
	{
		if(preg_match('/[\%\*]/', $telephone)) {
			return $this->addUsingAlias(CompanyPeer::TELEPHONE, str_replace('*', '%', $telephone), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::TELEPHONE, $telephone, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the mobile column
	 * 
	 * @param     string $mobile The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByMobile($mobile = null)
	{
		if(preg_match('/[\%\*]/', $mobile)) {
			return $this->addUsingAlias(CompanyPeer::MOBILE, str_replace('*', '%', $mobile), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::MOBILE, $mobile, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null)
	{
		if(preg_match('/[\%\*]/', $fax)) {
			return $this->addUsingAlias(CompanyPeer::FAX, str_replace('*', '%', $fax), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::FAX, $fax, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null)
	{
		if(preg_match('/[\%\*]/', $email)) {
			return $this->addUsingAlias(CompanyPeer::EMAIL, str_replace('*', '%', $email), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::EMAIL, $email, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the address column
	 * 
	 * @param     string $address The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByAddress($address = null)
	{
		if(preg_match('/[\%\*]/', $address)) {
			return $this->addUsingAlias(CompanyPeer::ADDRESS, str_replace('*', '%', $address), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::ADDRESS, $address, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the zipcode column
	 * 
	 * @param     string $zipcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByZipcode($zipcode = null)
	{
		if(preg_match('/[\%\*]/', $zipcode)) {
			return $this->addUsingAlias(CompanyPeer::ZIPCODE, str_replace('*', '%', $zipcode), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::ZIPCODE, $zipcode, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the district column
	 * 
	 * @param     string $district The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByDistrict($district = null)
	{
		if(preg_match('/[\%\*]/', $district)) {
			return $this->addUsingAlias(CompanyPeer::DISTRICT, str_replace('*', '%', $district), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::DISTRICT, $district, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the municipality column
	 * 
	 * @param     string $municipality The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByMunicipality($municipality = null)
	{
		if(preg_match('/[\%\*]/', $municipality)) {
			return $this->addUsingAlias(CompanyPeer::MUNICIPALITY, str_replace('*', '%', $municipality), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::MUNICIPALITY, $municipality, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the locality column
	 * 
	 * @param     string $locality The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByLocality($locality = null)
	{
		if(preg_match('/[\%\*]/', $locality)) {
			return $this->addUsingAlias(CompanyPeer::LOCALITY, str_replace('*', '%', $locality), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::LOCALITY, $locality, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the observations column
	 * 
	 * @param     string $observations The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByObservations($observations = null)
	{
		if(preg_match('/[\%\*]/', $observations)) {
			return $this->addUsingAlias(CompanyPeer::OBSERVATIONS, str_replace('*', '%', $observations), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CompanyPeer::OBSERVATIONS, $observations, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(CompanyPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(CompanyPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(CompanyPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(CompanyPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(CompanyPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(CompanyPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(CompanyPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(CompanyPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related CompanyUser object
	 *
	 * @param     CompanyUser $companyUser  the related object to use as filter
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByCompanyUser($companyUser)
	{
		return $this
			->addUsingAlias(CompanyPeer::ID, $companyUser->getCompanyId(), Criteria::EQUAL);
	}

	/**
	 * Use the CompanyUser relation CompanyUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyUserQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyUserQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('CompanyUser' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CompanyUser', 'CompanyUserQuery');
	}

	/**
	 * Filter the query by a related Vessel object
	 *
	 * @param     Vessel $vessel  the related object to use as filter
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByVessel($vessel)
	{
		return $this
			->addUsingAlias(CompanyPeer::ID, $vessel->getCompanyId(), Criteria::EQUAL);
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
	 * Filter the query by a related Guide object
	 *
	 * @param     Guide $guide  the related object to use as filter
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByGuide($guide)
	{
		return $this
			->addUsingAlias(CompanyPeer::ID, $guide->getCompanyId(), Criteria::EQUAL);
	}

	/**
	 * Use the Guide relation Guide object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GuideQuery A secondary query class using the current class as primary query
	 */
	public function useGuideQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Guide' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Guide', 'GuideQuery');
	}

	/**
	 * Filter the query by a related Skipper object
	 *
	 * @param     Skipper $skipper  the related object to use as filter
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterBySkipper($skipper)
	{
		return $this
			->addUsingAlias(CompanyPeer::ID, $skipper->getCompanyId(), Criteria::EQUAL);
	}

	/**
	 * Use the Skipper relation Skipper object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SkipperQuery A secondary query class using the current class as primary query
	 */
	public function useSkipperQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Skipper' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Skipper', 'SkipperQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfo($generalInfo)
	{
		return $this
			->addUsingAlias(CompanyPeer::ID, $generalInfo->getCompanyId(), Criteria::EQUAL);
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
	 * Exclude object from result
	 *
	 * @param     Company $company Object to remove from the list of results
	 *
	 * @return    CompanyQuery The current query, for fluid interface
	 */
	public function prune($company = null)
	{
		if ($company) {
			$this->addUsingAlias(CompanyPeer::ID, $company->getId(), Criteria::NOT_EQUAL);
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

} // BaseCompanyQuery
