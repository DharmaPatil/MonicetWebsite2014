<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 * 
 *
 * @method     UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     UserQuery orderByBirthday($order = Criteria::ASC) Order by the birthday column
 * @method     UserQuery orderByBi($order = Criteria::ASC) Order by the bi column
 * @method     UserQuery orderByNif($order = Criteria::ASC) Order by the nif column
 * @method     UserQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     UserQuery orderByDistrict($order = Criteria::ASC) Order by the district column
 * @method     UserQuery orderByMunicipality($order = Criteria::ASC) Order by the municipality column
 * @method     UserQuery orderByLocality($order = Criteria::ASC) Order by the locality column
 * @method     UserQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     UserQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method     UserQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     UserQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method     UserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UserQuery orderByLang($order = Criteria::ASC) Order by the lang column
 * @method     UserQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 * @method     UserQuery orderByObservations($order = Criteria::ASC) Order by the observations column
 * @method     UserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     UserQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     UserQuery groupById() Group by the id column
 * @method     UserQuery groupByUserId() Group by the user_id column
 * @method     UserQuery groupByName() Group by the name column
 * @method     UserQuery groupByBirthday() Group by the birthday column
 * @method     UserQuery groupByBi() Group by the bi column
 * @method     UserQuery groupByNif() Group by the nif column
 * @method     UserQuery groupByCountry() Group by the country column
 * @method     UserQuery groupByDistrict() Group by the district column
 * @method     UserQuery groupByMunicipality() Group by the municipality column
 * @method     UserQuery groupByLocality() Group by the locality column
 * @method     UserQuery groupByAddress() Group by the address column
 * @method     UserQuery groupByZipcode() Group by the zipcode column
 * @method     UserQuery groupByTelephone() Group by the telephone column
 * @method     UserQuery groupByMobile() Group by the mobile column
 * @method     UserQuery groupByEmail() Group by the email column
 * @method     UserQuery groupByLang() Group by the lang column
 * @method     UserQuery groupByPhoto() Group by the photo column
 * @method     UserQuery groupByObservations() Group by the observations column
 * @method     UserQuery groupByCreatedAt() Group by the created_at column
 * @method     UserQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     UserQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     UserQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method     User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method     User findOneById(int $id) Return the first User filtered by the id column
 * @method     User findOneByUserId(int $user_id) Return the first User filtered by the user_id column
 * @method     User findOneByName(string $name) Return the first User filtered by the name column
 * @method     User findOneByBirthday(string $birthday) Return the first User filtered by the birthday column
 * @method     User findOneByBi(string $bi) Return the first User filtered by the bi column
 * @method     User findOneByNif(string $nif) Return the first User filtered by the nif column
 * @method     User findOneByCountry(string $country) Return the first User filtered by the country column
 * @method     User findOneByDistrict(string $district) Return the first User filtered by the district column
 * @method     User findOneByMunicipality(string $municipality) Return the first User filtered by the municipality column
 * @method     User findOneByLocality(string $locality) Return the first User filtered by the locality column
 * @method     User findOneByAddress(string $address) Return the first User filtered by the address column
 * @method     User findOneByZipcode(string $zipcode) Return the first User filtered by the zipcode column
 * @method     User findOneByTelephone(string $telephone) Return the first User filtered by the telephone column
 * @method     User findOneByMobile(string $mobile) Return the first User filtered by the mobile column
 * @method     User findOneByEmail(string $email) Return the first User filtered by the email column
 * @method     User findOneByLang(string $lang) Return the first User filtered by the lang column
 * @method     User findOneByPhoto(string $photo) Return the first User filtered by the photo column
 * @method     User findOneByObservations(string $observations) Return the first User filtered by the observations column
 * @method     User findOneByCreatedAt(string $created_at) Return the first User filtered by the created_at column
 * @method     User findOneByUpdatedAt(string $updated_at) Return the first User filtered by the updated_at column
 *
 * @method     array findById(int $id) Return User objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return User objects filtered by the user_id column
 * @method     array findByName(string $name) Return User objects filtered by the name column
 * @method     array findByBirthday(string $birthday) Return User objects filtered by the birthday column
 * @method     array findByBi(string $bi) Return User objects filtered by the bi column
 * @method     array findByNif(string $nif) Return User objects filtered by the nif column
 * @method     array findByCountry(string $country) Return User objects filtered by the country column
 * @method     array findByDistrict(string $district) Return User objects filtered by the district column
 * @method     array findByMunicipality(string $municipality) Return User objects filtered by the municipality column
 * @method     array findByLocality(string $locality) Return User objects filtered by the locality column
 * @method     array findByAddress(string $address) Return User objects filtered by the address column
 * @method     array findByZipcode(string $zipcode) Return User objects filtered by the zipcode column
 * @method     array findByTelephone(string $telephone) Return User objects filtered by the telephone column
 * @method     array findByMobile(string $mobile) Return User objects filtered by the mobile column
 * @method     array findByEmail(string $email) Return User objects filtered by the email column
 * @method     array findByLang(string $lang) Return User objects filtered by the lang column
 * @method     array findByPhoto(string $photo) Return User objects filtered by the photo column
 * @method     array findByObservations(string $observations) Return User objects filtered by the observations column
 * @method     array findByCreatedAt(string $created_at) Return User objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return User objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'User', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserQuery) {
			return $criteria;
		}
		$query = new UserQuery();
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
	 * @return    User|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the birthday column
	 * 
	 * @param     string|array $birthday The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByBirthday($birthday = null, $comparison = null)
	{
		if (is_array($birthday)) {
			$useMinMax = false;
			if (isset($birthday['min'])) {
				$this->addUsingAlias(UserPeer::BIRTHDAY, $birthday['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($birthday['max'])) {
				$this->addUsingAlias(UserPeer::BIRTHDAY, $birthday['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::BIRTHDAY, $birthday, $comparison);
	}

	/**
	 * Filter the query on the bi column
	 * 
	 * @param     string $bi The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByBi($bi = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bi)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bi)) {
				$bi = str_replace('*', '%', $bi);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::BI, $bi, $comparison);
	}

	/**
	 * Filter the query on the nif column
	 * 
	 * @param     string $nif The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByNif($nif = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nif)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nif)) {
				$nif = str_replace('*', '%', $nif);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::NIF, $nif, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($country)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $country)) {
				$country = str_replace('*', '%', $country);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the district column
	 * 
	 * @param     string $district The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByDistrict($district = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($district)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $district)) {
				$district = str_replace('*', '%', $district);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::DISTRICT, $district, $comparison);
	}

	/**
	 * Filter the query on the municipality column
	 * 
	 * @param     string $municipality The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByMunicipality($municipality = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($municipality)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $municipality)) {
				$municipality = str_replace('*', '%', $municipality);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::MUNICIPALITY, $municipality, $comparison);
	}

	/**
	 * Filter the query on the locality column
	 * 
	 * @param     string $locality The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLocality($locality = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($locality)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $locality)) {
				$locality = str_replace('*', '%', $locality);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::LOCALITY, $locality, $comparison);
	}

	/**
	 * Filter the query on the address column
	 * 
	 * @param     string $address The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAddress($address = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address)) {
				$address = str_replace('*', '%', $address);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ADDRESS, $address, $comparison);
	}

	/**
	 * Filter the query on the zipcode column
	 * 
	 * @param     string $zipcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByZipcode($zipcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipcode)) {
				$zipcode = str_replace('*', '%', $zipcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ZIPCODE, $zipcode, $comparison);
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByTelephone($telephone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telephone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telephone)) {
				$telephone = str_replace('*', '%', $telephone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::TELEPHONE, $telephone, $comparison);
	}

	/**
	 * Filter the query on the mobile column
	 * 
	 * @param     string $mobile The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByMobile($mobile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mobile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mobile)) {
				$mobile = str_replace('*', '%', $mobile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::MOBILE, $mobile, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the lang column
	 * 
	 * @param     string $lang The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLang($lang = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lang)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lang)) {
				$lang = str_replace('*', '%', $lang);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::LANG, $lang, $comparison);
	}

	/**
	 * Filter the query on the photo column
	 * 
	 * @param     string $photo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPhoto($photo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($photo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $photo)) {
				$photo = str_replace('*', '%', $photo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PHOTO, $photo, $comparison);
	}

	/**
	 * Filter the query on the observations column
	 * 
	 * @param     string $observations The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByObservations($observations = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($observations)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $observations)) {
				$observations = str_replace('*', '%', $observations);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::OBSERVATIONS, $observations, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(UserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(UserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::USER_ID, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
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
	 * @param     User $user Object to remove from the list of results
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function prune($user = null)
	{
		if ($user) {
			$this->addUsingAlias(UserPeer::ID, $user->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserQuery
