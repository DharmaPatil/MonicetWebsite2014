<?php


/**
 * Base class that represents a row from the 'general_info' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseGeneralInfo extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'GeneralInfoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        GeneralInfoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the code field.
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the vessel_id field.
	 * @var        int
	 */
	protected $vessel_id;

	/**
	 * The value for the skipper_id field.
	 * @var        int
	 */
	protected $skipper_id;

	/**
	 * The value for the guide_id field.
	 * @var        int
	 */
	protected $guide_id;

	/**
	 * The value for the company_id field.
	 * @var        int
	 */
	protected $company_id;

	/**
	 * The value for the base_latitude field.
	 * @var        string
	 */
	protected $base_latitude;

	/**
	 * The value for the base_longitude field.
	 * @var        string
	 */
	protected $base_longitude;

	/**
	 * The value for the date field.
	 * @var        string
	 */
	protected $date;

	/**
	 * The value for the valid field.
	 * @var        boolean
	 */
	protected $valid;

	/**
	 * The value for the comments field.
	 * @var        string
	 */
	protected $comments;

	/**
	 * The value for the created_by field.
	 * @var        int
	 */
	protected $created_by;

	/**
	 * The value for the updated_by field.
	 * @var        int
	 */
	protected $updated_by;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * The value for the updated_at field.
	 * @var        string
	 */
	protected $updated_at;

	/**
	 * @var        Vessel
	 */
	protected $aVessel;

	/**
	 * @var        Skipper
	 */
	protected $aSkipper;

	/**
	 * @var        Guide
	 */
	protected $aGuide;

	/**
	 * @var        Company
	 */
	protected $aCompany;

	/**
	 * @var        sfGuardUser
	 */
	protected $asfGuardUserRelatedByCreatedBy;

	/**
	 * @var        sfGuardUser
	 */
	protected $asfGuardUserRelatedByUpdatedBy;

	/**
	 * @var        array Record[] Collection to store aggregation of Record objects.
	 */
	protected $collRecords;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [code] column value.
	 * 
	 * @return     string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the [vessel_id] column value.
	 * 
	 * @return     int
	 */
	public function getVesselId()
	{
		return $this->vessel_id;
	}

	/**
	 * Get the [skipper_id] column value.
	 * 
	 * @return     int
	 */
	public function getSkipperId()
	{
		return $this->skipper_id;
	}

	/**
	 * Get the [guide_id] column value.
	 * 
	 * @return     int
	 */
	public function getGuideId()
	{
		return $this->guide_id;
	}

	/**
	 * Get the [company_id] column value.
	 * 
	 * @return     int
	 */
	public function getCompanyId()
	{
		return $this->company_id;
	}

	/**
	 * Get the [base_latitude] column value.
	 * 
	 * @return     string
	 */
	public function getBaseLatitude()
	{
		return $this->base_latitude;
	}

	/**
	 * Get the [base_longitude] column value.
	 * 
	 * @return     string
	 */
	public function getBaseLongitude()
	{
		return $this->base_longitude;
	}

	/**
	 * Get the [optionally formatted] temporal [date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDate($format = 'Y-m-d')
	{
		if ($this->date === null) {
			return null;
		}


		if ($this->date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [valid] column value.
	 * 
	 * @return     boolean
	 */
	public function getValid()
	{
		return $this->valid;
	}

	/**
	 * Get the [comments] column value.
	 * 
	 * @return     string
	 */
	public function getComments()
	{
		return $this->comments;
	}

	/**
	 * Get the [created_by] column value.
	 * 
	 * @return     int
	 */
	public function getCreatedBy()
	{
		return $this->created_by;
	}

	/**
	 * Get the [updated_by] column value.
	 * 
	 * @return     int
	 */
	public function getUpdatedBy()
	{
		return $this->updated_by;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [updated_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->updated_at === null) {
			return null;
		}


		if ($this->updated_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->updated_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [vessel_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setVesselId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->vessel_id !== $v) {
			$this->vessel_id = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::VESSEL_ID;
		}

		if ($this->aVessel !== null && $this->aVessel->getId() !== $v) {
			$this->aVessel = null;
		}

		return $this;
	} // setVesselId()

	/**
	 * Set the value of [skipper_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setSkipperId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->skipper_id !== $v) {
			$this->skipper_id = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::SKIPPER_ID;
		}

		if ($this->aSkipper !== null && $this->aSkipper->getId() !== $v) {
			$this->aSkipper = null;
		}

		return $this;
	} // setSkipperId()

	/**
	 * Set the value of [guide_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setGuideId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->guide_id !== $v) {
			$this->guide_id = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::GUIDE_ID;
		}

		if ($this->aGuide !== null && $this->aGuide->getId() !== $v) {
			$this->aGuide = null;
		}

		return $this;
	} // setGuideId()

	/**
	 * Set the value of [company_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setCompanyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->company_id !== $v) {
			$this->company_id = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::COMPANY_ID;
		}

		if ($this->aCompany !== null && $this->aCompany->getId() !== $v) {
			$this->aCompany = null;
		}

		return $this;
	} // setCompanyId()

	/**
	 * Set the value of [base_latitude] column.
	 * 
	 * @param      string $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setBaseLatitude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_latitude !== $v) {
			$this->base_latitude = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::BASE_LATITUDE;
		}

		return $this;
	} // setBaseLatitude()

	/**
	 * Set the value of [base_longitude] column.
	 * 
	 * @param      string $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setBaseLongitude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_longitude !== $v) {
			$this->base_longitude = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::BASE_LONGITUDE;
		}

		return $this;
	} // setBaseLongitude()

	/**
	 * Sets the value of [date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = GeneralInfoPeer::DATE;
			}
		} // if either are not null

		return $this;
	} // setDate()

	/**
	 * Set the value of [valid] column.
	 * 
	 * @param      boolean $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setValid($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->valid !== $v) {
			$this->valid = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::VALID;
		}

		return $this;
	} // setValid()

	/**
	 * Set the value of [comments] column.
	 * 
	 * @param      string $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comments !== $v) {
			$this->comments = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::COMMENTS;
		}

		return $this;
	} // setComments()

	/**
	 * Set the value of [created_by] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setCreatedBy($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::CREATED_BY;
		}

		if ($this->asfGuardUserRelatedByCreatedBy !== null && $this->asfGuardUserRelatedByCreatedBy->getId() !== $v) {
			$this->asfGuardUserRelatedByCreatedBy = null;
		}

		return $this;
	} // setCreatedBy()

	/**
	 * Set the value of [updated_by] column.
	 * 
	 * @param      int $v new value
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setUpdatedBy($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->updated_by !== $v) {
			$this->updated_by = $v;
			$this->modifiedColumns[] = GeneralInfoPeer::UPDATED_BY;
		}

		if ($this->asfGuardUserRelatedByUpdatedBy !== null && $this->asfGuardUserRelatedByUpdatedBy->getId() !== $v) {
			$this->asfGuardUserRelatedByUpdatedBy = null;
		}

		return $this;
	} // setUpdatedBy()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = GeneralInfoPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     GeneralInfo The current object (for fluent API support)
	 */
	public function setUpdatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->updated_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->updated_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = GeneralInfoPeer::UPDATED_AT;
			}
		} // if either are not null

		return $this;
	} // setUpdatedAt()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->vessel_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->skipper_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->guide_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->company_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->base_latitude = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->base_longitude = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->valid = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->comments = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->created_by = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->updated_by = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->created_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->updated_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = GeneralInfoPeer::NUM_COLUMNS - GeneralInfoPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating GeneralInfo object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aVessel !== null && $this->vessel_id !== $this->aVessel->getId()) {
			$this->aVessel = null;
		}
		if ($this->aSkipper !== null && $this->skipper_id !== $this->aSkipper->getId()) {
			$this->aSkipper = null;
		}
		if ($this->aGuide !== null && $this->guide_id !== $this->aGuide->getId()) {
			$this->aGuide = null;
		}
		if ($this->aCompany !== null && $this->company_id !== $this->aCompany->getId()) {
			$this->aCompany = null;
		}
		if ($this->asfGuardUserRelatedByCreatedBy !== null && $this->created_by !== $this->asfGuardUserRelatedByCreatedBy->getId()) {
			$this->asfGuardUserRelatedByCreatedBy = null;
		}
		if ($this->asfGuardUserRelatedByUpdatedBy !== null && $this->updated_by !== $this->asfGuardUserRelatedByUpdatedBy->getId()) {
			$this->asfGuardUserRelatedByUpdatedBy = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(GeneralInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = GeneralInfoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aVessel = null;
			$this->aSkipper = null;
			$this->aGuide = null;
			$this->aCompany = null;
			$this->asfGuardUserRelatedByCreatedBy = null;
			$this->asfGuardUserRelatedByUpdatedBy = null;
			$this->collRecords = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(GeneralInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseGeneralInfo:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				GeneralInfoQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseGeneralInfo:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(GeneralInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseGeneralInfo:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(GeneralInfoPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(GeneralInfoPeer::CREATED_AT))
				{
				  $this->setCreatedAt(time());
				}

			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseGeneralInfo:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				GeneralInfoPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aVessel !== null) {
				if ($this->aVessel->isModified() || $this->aVessel->isNew()) {
					$affectedRows += $this->aVessel->save($con);
				}
				$this->setVessel($this->aVessel);
			}

			if ($this->aSkipper !== null) {
				if ($this->aSkipper->isModified() || $this->aSkipper->isNew()) {
					$affectedRows += $this->aSkipper->save($con);
				}
				$this->setSkipper($this->aSkipper);
			}

			if ($this->aGuide !== null) {
				if ($this->aGuide->isModified() || $this->aGuide->isNew()) {
					$affectedRows += $this->aGuide->save($con);
				}
				$this->setGuide($this->aGuide);
			}

			if ($this->aCompany !== null) {
				if ($this->aCompany->isModified() || $this->aCompany->isNew()) {
					$affectedRows += $this->aCompany->save($con);
				}
				$this->setCompany($this->aCompany);
			}

			if ($this->asfGuardUserRelatedByCreatedBy !== null) {
				if ($this->asfGuardUserRelatedByCreatedBy->isModified() || $this->asfGuardUserRelatedByCreatedBy->isNew()) {
					$affectedRows += $this->asfGuardUserRelatedByCreatedBy->save($con);
				}
				$this->setsfGuardUserRelatedByCreatedBy($this->asfGuardUserRelatedByCreatedBy);
			}

			if ($this->asfGuardUserRelatedByUpdatedBy !== null) {
				if ($this->asfGuardUserRelatedByUpdatedBy->isModified() || $this->asfGuardUserRelatedByUpdatedBy->isNew()) {
					$affectedRows += $this->asfGuardUserRelatedByUpdatedBy->save($con);
				}
				$this->setsfGuardUserRelatedByUpdatedBy($this->asfGuardUserRelatedByUpdatedBy);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = GeneralInfoPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(GeneralInfoPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.GeneralInfoPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += GeneralInfoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collRecords !== null) {
				foreach ($this->collRecords as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aVessel !== null) {
				if (!$this->aVessel->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVessel->getValidationFailures());
				}
			}

			if ($this->aSkipper !== null) {
				if (!$this->aSkipper->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSkipper->getValidationFailures());
				}
			}

			if ($this->aGuide !== null) {
				if (!$this->aGuide->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aGuide->getValidationFailures());
				}
			}

			if ($this->aCompany !== null) {
				if (!$this->aCompany->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCompany->getValidationFailures());
				}
			}

			if ($this->asfGuardUserRelatedByCreatedBy !== null) {
				if (!$this->asfGuardUserRelatedByCreatedBy->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->asfGuardUserRelatedByCreatedBy->getValidationFailures());
				}
			}

			if ($this->asfGuardUserRelatedByUpdatedBy !== null) {
				if (!$this->asfGuardUserRelatedByUpdatedBy->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->asfGuardUserRelatedByUpdatedBy->getValidationFailures());
				}
			}


			if (($retval = GeneralInfoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRecords !== null) {
					foreach ($this->collRecords as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = GeneralInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCode();
				break;
			case 2:
				return $this->getVesselId();
				break;
			case 3:
				return $this->getSkipperId();
				break;
			case 4:
				return $this->getGuideId();
				break;
			case 5:
				return $this->getCompanyId();
				break;
			case 6:
				return $this->getBaseLatitude();
				break;
			case 7:
				return $this->getBaseLongitude();
				break;
			case 8:
				return $this->getDate();
				break;
			case 9:
				return $this->getValid();
				break;
			case 10:
				return $this->getComments();
				break;
			case 11:
				return $this->getCreatedBy();
				break;
			case 12:
				return $this->getUpdatedBy();
				break;
			case 13:
				return $this->getCreatedAt();
				break;
			case 14:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = GeneralInfoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCode(),
			$keys[2] => $this->getVesselId(),
			$keys[3] => $this->getSkipperId(),
			$keys[4] => $this->getGuideId(),
			$keys[5] => $this->getCompanyId(),
			$keys[6] => $this->getBaseLatitude(),
			$keys[7] => $this->getBaseLongitude(),
			$keys[8] => $this->getDate(),
			$keys[9] => $this->getValid(),
			$keys[10] => $this->getComments(),
			$keys[11] => $this->getCreatedBy(),
			$keys[12] => $this->getUpdatedBy(),
			$keys[13] => $this->getCreatedAt(),
			$keys[14] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aVessel) {
				$result['Vessel'] = $this->aVessel->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aSkipper) {
				$result['Skipper'] = $this->aSkipper->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aGuide) {
				$result['Guide'] = $this->aGuide->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aCompany) {
				$result['Company'] = $this->aCompany->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->asfGuardUserRelatedByCreatedBy) {
				$result['sfGuardUserRelatedByCreatedBy'] = $this->asfGuardUserRelatedByCreatedBy->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->asfGuardUserRelatedByUpdatedBy) {
				$result['sfGuardUserRelatedByUpdatedBy'] = $this->asfGuardUserRelatedByUpdatedBy->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = GeneralInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCode($value);
				break;
			case 2:
				$this->setVesselId($value);
				break;
			case 3:
				$this->setSkipperId($value);
				break;
			case 4:
				$this->setGuideId($value);
				break;
			case 5:
				$this->setCompanyId($value);
				break;
			case 6:
				$this->setBaseLatitude($value);
				break;
			case 7:
				$this->setBaseLongitude($value);
				break;
			case 8:
				$this->setDate($value);
				break;
			case 9:
				$this->setValid($value);
				break;
			case 10:
				$this->setComments($value);
				break;
			case 11:
				$this->setCreatedBy($value);
				break;
			case 12:
				$this->setUpdatedBy($value);
				break;
			case 13:
				$this->setCreatedAt($value);
				break;
			case 14:
				$this->setUpdatedAt($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = GeneralInfoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVesselId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSkipperId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGuideId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCompanyId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setBaseLatitude($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setBaseLongitude($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setValid($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setComments($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUpdatedBy($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedAt($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setUpdatedAt($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(GeneralInfoPeer::DATABASE_NAME);

		if ($this->isColumnModified(GeneralInfoPeer::ID)) $criteria->add(GeneralInfoPeer::ID, $this->id);
		if ($this->isColumnModified(GeneralInfoPeer::CODE)) $criteria->add(GeneralInfoPeer::CODE, $this->code);
		if ($this->isColumnModified(GeneralInfoPeer::VESSEL_ID)) $criteria->add(GeneralInfoPeer::VESSEL_ID, $this->vessel_id);
		if ($this->isColumnModified(GeneralInfoPeer::SKIPPER_ID)) $criteria->add(GeneralInfoPeer::SKIPPER_ID, $this->skipper_id);
		if ($this->isColumnModified(GeneralInfoPeer::GUIDE_ID)) $criteria->add(GeneralInfoPeer::GUIDE_ID, $this->guide_id);
		if ($this->isColumnModified(GeneralInfoPeer::COMPANY_ID)) $criteria->add(GeneralInfoPeer::COMPANY_ID, $this->company_id);
		if ($this->isColumnModified(GeneralInfoPeer::BASE_LATITUDE)) $criteria->add(GeneralInfoPeer::BASE_LATITUDE, $this->base_latitude);
		if ($this->isColumnModified(GeneralInfoPeer::BASE_LONGITUDE)) $criteria->add(GeneralInfoPeer::BASE_LONGITUDE, $this->base_longitude);
		if ($this->isColumnModified(GeneralInfoPeer::DATE)) $criteria->add(GeneralInfoPeer::DATE, $this->date);
		if ($this->isColumnModified(GeneralInfoPeer::VALID)) $criteria->add(GeneralInfoPeer::VALID, $this->valid);
		if ($this->isColumnModified(GeneralInfoPeer::COMMENTS)) $criteria->add(GeneralInfoPeer::COMMENTS, $this->comments);
		if ($this->isColumnModified(GeneralInfoPeer::CREATED_BY)) $criteria->add(GeneralInfoPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(GeneralInfoPeer::UPDATED_BY)) $criteria->add(GeneralInfoPeer::UPDATED_BY, $this->updated_by);
		if ($this->isColumnModified(GeneralInfoPeer::CREATED_AT)) $criteria->add(GeneralInfoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(GeneralInfoPeer::UPDATED_AT)) $criteria->add(GeneralInfoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(GeneralInfoPeer::DATABASE_NAME);
		$criteria->add(GeneralInfoPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of GeneralInfo (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCode($this->code);
		$copyObj->setVesselId($this->vessel_id);
		$copyObj->setSkipperId($this->skipper_id);
		$copyObj->setGuideId($this->guide_id);
		$copyObj->setCompanyId($this->company_id);
		$copyObj->setBaseLatitude($this->base_latitude);
		$copyObj->setBaseLongitude($this->base_longitude);
		$copyObj->setDate($this->date);
		$copyObj->setValid($this->valid);
		$copyObj->setComments($this->comments);
		$copyObj->setCreatedBy($this->created_by);
		$copyObj->setUpdatedBy($this->updated_by);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getRecords() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addRecord($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     GeneralInfo Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     GeneralInfoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new GeneralInfoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Vessel object.
	 *
	 * @param      Vessel $v
	 * @return     GeneralInfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setVessel(Vessel $v = null)
	{
		if ($v === null) {
			$this->setVesselId(NULL);
		} else {
			$this->setVesselId($v->getId());
		}

		$this->aVessel = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Vessel object, it will not be re-added.
		if ($v !== null) {
			$v->addGeneralInfo($this);
		}

		return $this;
	}


	/**
	 * Get the associated Vessel object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Vessel The associated Vessel object.
	 * @throws     PropelException
	 */
	public function getVessel(PropelPDO $con = null)
	{
		if ($this->aVessel === null && ($this->vessel_id !== null)) {
			$this->aVessel = VesselQuery::create()->findPk($this->vessel_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aVessel->addGeneralInfos($this);
			 */
		}
		return $this->aVessel;
	}

	/**
	 * Declares an association between this object and a Skipper object.
	 *
	 * @param      Skipper $v
	 * @return     GeneralInfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSkipper(Skipper $v = null)
	{
		if ($v === null) {
			$this->setSkipperId(NULL);
		} else {
			$this->setSkipperId($v->getId());
		}

		$this->aSkipper = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Skipper object, it will not be re-added.
		if ($v !== null) {
			$v->addGeneralInfo($this);
		}

		return $this;
	}


	/**
	 * Get the associated Skipper object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Skipper The associated Skipper object.
	 * @throws     PropelException
	 */
	public function getSkipper(PropelPDO $con = null)
	{
		if ($this->aSkipper === null && ($this->skipper_id !== null)) {
			$this->aSkipper = SkipperQuery::create()->findPk($this->skipper_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aSkipper->addGeneralInfos($this);
			 */
		}
		return $this->aSkipper;
	}

	/**
	 * Declares an association between this object and a Guide object.
	 *
	 * @param      Guide $v
	 * @return     GeneralInfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setGuide(Guide $v = null)
	{
		if ($v === null) {
			$this->setGuideId(NULL);
		} else {
			$this->setGuideId($v->getId());
		}

		$this->aGuide = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Guide object, it will not be re-added.
		if ($v !== null) {
			$v->addGeneralInfo($this);
		}

		return $this;
	}


	/**
	 * Get the associated Guide object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Guide The associated Guide object.
	 * @throws     PropelException
	 */
	public function getGuide(PropelPDO $con = null)
	{
		if ($this->aGuide === null && ($this->guide_id !== null)) {
			$this->aGuide = GuideQuery::create()->findPk($this->guide_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aGuide->addGeneralInfos($this);
			 */
		}
		return $this->aGuide;
	}

	/**
	 * Declares an association between this object and a Company object.
	 *
	 * @param      Company $v
	 * @return     GeneralInfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCompany(Company $v = null)
	{
		if ($v === null) {
			$this->setCompanyId(NULL);
		} else {
			$this->setCompanyId($v->getId());
		}

		$this->aCompany = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Company object, it will not be re-added.
		if ($v !== null) {
			$v->addGeneralInfo($this);
		}

		return $this;
	}


	/**
	 * Get the associated Company object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Company The associated Company object.
	 * @throws     PropelException
	 */
	public function getCompany(PropelPDO $con = null)
	{
		if ($this->aCompany === null && ($this->company_id !== null)) {
			$this->aCompany = CompanyQuery::create()->findPk($this->company_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aCompany->addGeneralInfos($this);
			 */
		}
		return $this->aCompany;
	}

	/**
	 * Declares an association between this object and a sfGuardUser object.
	 *
	 * @param      sfGuardUser $v
	 * @return     GeneralInfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfGuardUserRelatedByCreatedBy(sfGuardUser $v = null)
	{
		if ($v === null) {
			$this->setCreatedBy(NULL);
		} else {
			$this->setCreatedBy($v->getId());
		}

		$this->asfGuardUserRelatedByCreatedBy = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the sfGuardUser object, it will not be re-added.
		if ($v !== null) {
			$v->addGeneralInfoRelatedByCreatedBy($this);
		}

		return $this;
	}


	/**
	 * Get the associated sfGuardUser object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     sfGuardUser The associated sfGuardUser object.
	 * @throws     PropelException
	 */
	public function getsfGuardUserRelatedByCreatedBy(PropelPDO $con = null)
	{
		if ($this->asfGuardUserRelatedByCreatedBy === null && ($this->created_by !== null)) {
			$this->asfGuardUserRelatedByCreatedBy = sfGuardUserQuery::create()->findPk($this->created_by, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->asfGuardUserRelatedByCreatedBy->addGeneralInfosRelatedByCreatedBy($this);
			 */
		}
		return $this->asfGuardUserRelatedByCreatedBy;
	}

	/**
	 * Declares an association between this object and a sfGuardUser object.
	 *
	 * @param      sfGuardUser $v
	 * @return     GeneralInfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfGuardUserRelatedByUpdatedBy(sfGuardUser $v = null)
	{
		if ($v === null) {
			$this->setUpdatedBy(NULL);
		} else {
			$this->setUpdatedBy($v->getId());
		}

		$this->asfGuardUserRelatedByUpdatedBy = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the sfGuardUser object, it will not be re-added.
		if ($v !== null) {
			$v->addGeneralInfoRelatedByUpdatedBy($this);
		}

		return $this;
	}


	/**
	 * Get the associated sfGuardUser object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     sfGuardUser The associated sfGuardUser object.
	 * @throws     PropelException
	 */
	public function getsfGuardUserRelatedByUpdatedBy(PropelPDO $con = null)
	{
		if ($this->asfGuardUserRelatedByUpdatedBy === null && ($this->updated_by !== null)) {
			$this->asfGuardUserRelatedByUpdatedBy = sfGuardUserQuery::create()->findPk($this->updated_by, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->asfGuardUserRelatedByUpdatedBy->addGeneralInfosRelatedByUpdatedBy($this);
			 */
		}
		return $this->asfGuardUserRelatedByUpdatedBy;
	}

	/**
	 * Clears out the collRecords collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addRecords()
	 */
	public function clearRecords()
	{
		$this->collRecords = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collRecords collection.
	 *
	 * By default this just sets the collRecords collection to an empty array (like clearcollRecords());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initRecords()
	{
		$this->collRecords = new PropelObjectCollection();
		$this->collRecords->setModel('Record');
	}

	/**
	 * Gets an array of Record objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this GeneralInfo is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Record[] List of Record objects
	 * @throws     PropelException
	 */
	public function getRecords($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collRecords || null !== $criteria) {
			if ($this->isNew() && null === $this->collRecords) {
				// return empty collection
				$this->initRecords();
			} else {
				$collRecords = RecordQuery::create(null, $criteria)
					->filterByGeneralInfo($this)
					->find($con);
				if (null !== $criteria) {
					return $collRecords;
				}
				$this->collRecords = $collRecords;
			}
		}
		return $this->collRecords;
	}

	/**
	 * Returns the number of related Record objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Record objects.
	 * @throws     PropelException
	 */
	public function countRecords(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collRecords || null !== $criteria) {
			if ($this->isNew() && null === $this->collRecords) {
				return 0;
			} else {
				$query = RecordQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByGeneralInfo($this)
					->count($con);
			}
		} else {
			return count($this->collRecords);
		}
	}

	/**
	 * Method called to associate a Record object to this object
	 * through the Record foreign key attribute.
	 *
	 * @param      Record $l Record
	 * @return     void
	 * @throws     PropelException
	 */
	public function addRecord(Record $l)
	{
		if ($this->collRecords === null) {
			$this->initRecords();
		}
		if (!$this->collRecords->contains($l)) { // only add it if the **same** object is not already associated
			$this->collRecords[]= $l;
			$l->setGeneralInfo($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this GeneralInfo is new, it will return
	 * an empty collection; or if this GeneralInfo has previously
	 * been saved, it will retrieve related Records from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in GeneralInfo.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Record[] List of Record objects
	 */
	public function getRecordsJoinCode($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RecordQuery::create(null, $criteria);
		$query->joinWith('Code', $join_behavior);

		return $this->getRecords($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this GeneralInfo is new, it will return
	 * an empty collection; or if this GeneralInfo has previously
	 * been saved, it will retrieve related Records from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in GeneralInfo.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Record[] List of Record objects
	 */
	public function getRecordsJoinVisibility($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RecordQuery::create(null, $criteria);
		$query->joinWith('Visibility', $join_behavior);

		return $this->getRecords($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this GeneralInfo is new, it will return
	 * an empty collection; or if this GeneralInfo has previously
	 * been saved, it will retrieve related Records from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in GeneralInfo.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Record[] List of Record objects
	 */
	public function getRecordsJoinSeaState($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = RecordQuery::create(null, $criteria);
		$query->joinWith('SeaState', $join_behavior);

		return $this->getRecords($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->code = null;
		$this->vessel_id = null;
		$this->skipper_id = null;
		$this->guide_id = null;
		$this->company_id = null;
		$this->base_latitude = null;
		$this->base_longitude = null;
		$this->date = null;
		$this->valid = null;
		$this->comments = null;
		$this->created_by = null;
		$this->updated_by = null;
		$this->created_at = null;
		$this->updated_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collRecords) {
				foreach ((array) $this->collRecords as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collRecords = null;
		$this->aVessel = null;
		$this->aSkipper = null;
		$this->aGuide = null;
		$this->aCompany = null;
		$this->asfGuardUserRelatedByCreatedBy = null;
		$this->asfGuardUserRelatedByUpdatedBy = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseGeneralInfo:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseGeneralInfo
