<?php


/**
 * Base class that represents a row from the 'watch_sighting' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseWatchSighting extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'WatchSightingPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        WatchSightingPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the watch_info_id field.
	 * @var        int
	 */
	protected $watch_info_id;

	/**
	 * The value for the watch_code_id field.
	 * @var        int
	 */
	protected $watch_code_id;

	/**
	 * The value for the time field.
	 * @var        string
	 */
	protected $time;

	/**
	 * The value for the watch_visibility_id field.
	 * @var        int
	 */
	protected $watch_visibility_id;

	/**
	 * The value for the specie_id field.
	 * @var        int
	 */
	protected $specie_id;

	/**
	 * The value for the group field.
	 * @var        string
	 */
	protected $group;

	/**
	 * The value for the total field.
	 * @var        int
	 */
	protected $total;

	/**
	 * The value for the behaviour_id field.
	 * @var        int
	 */
	protected $behaviour_id;

	/**
	 * The value for the direction_id field.
	 * @var        int
	 */
	protected $direction_id;

	/**
	 * The value for the horizontal field.
	 * @var        double
	 */
	protected $horizontal;

	/**
	 * The value for the vertical field.
	 * @var        double
	 */
	protected $vertical;

	/**
	 * The value for the vessel_id field.
	 * @var        int
	 */
	protected $vessel_id;

	/**
	 * The value for the comments field.
	 * @var        string
	 */
	protected $comments;

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
	 * @var        WatchInfo
	 */
	protected $aWatchInfo;

	/**
	 * @var        WatchCode
	 */
	protected $aWatchCode;

	/**
	 * @var        WatchVisibility
	 */
	protected $aWatchVisibility;

	/**
	 * @var        Specie
	 */
	protected $aSpecie;

	/**
	 * @var        Behaviour
	 */
	protected $aBehaviour;

	/**
	 * @var        Direction
	 */
	protected $aDirection;

	/**
	 * @var        Vessel
	 */
	protected $aVessel;

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
	 * Get the [watch_info_id] column value.
	 * 
	 * @return     int
	 */
	public function getWatchInfoId()
	{
		return $this->watch_info_id;
	}

	/**
	 * Get the [watch_code_id] column value.
	 * 
	 * @return     int
	 */
	public function getWatchCodeId()
	{
		return $this->watch_code_id;
	}

	/**
	 * Get the [optionally formatted] temporal [time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getTime($format = 'H:i:s')
	{
		if ($this->time === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->time);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->time, true), $x);
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
	 * Get the [watch_visibility_id] column value.
	 * 
	 * @return     int
	 */
	public function getWatchVisibilityId()
	{
		return $this->watch_visibility_id;
	}

	/**
	 * Get the [specie_id] column value.
	 * 
	 * @return     int
	 */
	public function getSpecieId()
	{
		return $this->specie_id;
	}

	/**
	 * Get the [group] column value.
	 * 
	 * @return     string
	 */
	public function getGroup()
	{
		return $this->group;
	}

	/**
	 * Get the [total] column value.
	 * 
	 * @return     int
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * Get the [behaviour_id] column value.
	 * 
	 * @return     int
	 */
	public function getBehaviourId()
	{
		return $this->behaviour_id;
	}

	/**
	 * Get the [direction_id] column value.
	 * 
	 * @return     int
	 */
	public function getDirectionId()
	{
		return $this->direction_id;
	}

	/**
	 * Get the [horizontal] column value.
	 * 
	 * @return     double
	 */
	public function getHorizontal()
	{
		return $this->horizontal;
	}

	/**
	 * Get the [vertical] column value.
	 * 
	 * @return     double
	 */
	public function getVertical()
	{
		return $this->vertical;
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
	 * Get the [comments] column value.
	 * 
	 * @return     string
	 */
	public function getComments()
	{
		return $this->comments;
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
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [watch_info_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setWatchInfoId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->watch_info_id !== $v) {
			$this->watch_info_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::WATCH_INFO_ID;
		}

		if ($this->aWatchInfo !== null && $this->aWatchInfo->getId() !== $v) {
			$this->aWatchInfo = null;
		}

		return $this;
	} // setWatchInfoId()

	/**
	 * Set the value of [watch_code_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setWatchCodeId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->watch_code_id !== $v) {
			$this->watch_code_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::WATCH_CODE_ID;
		}

		if ($this->aWatchCode !== null && $this->aWatchCode->getId() !== $v) {
			$this->aWatchCode = null;
		}

		return $this;
	} // setWatchCodeId()

	/**
	 * Sets the value of [time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setTime($v)
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

		if ( $this->time !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->time !== null && $tmpDt = new DateTime($this->time)) ? $tmpDt->format('H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->time = ($dt ? $dt->format('H:i:s') : null);
				$this->modifiedColumns[] = WatchSightingPeer::TIME;
			}
		} // if either are not null

		return $this;
	} // setTime()

	/**
	 * Set the value of [watch_visibility_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setWatchVisibilityId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->watch_visibility_id !== $v) {
			$this->watch_visibility_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::WATCH_VISIBILITY_ID;
		}

		if ($this->aWatchVisibility !== null && $this->aWatchVisibility->getId() !== $v) {
			$this->aWatchVisibility = null;
		}

		return $this;
	} // setWatchVisibilityId()

	/**
	 * Set the value of [specie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setSpecieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->specie_id !== $v) {
			$this->specie_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::SPECIE_ID;
		}

		if ($this->aSpecie !== null && $this->aSpecie->getId() !== $v) {
			$this->aSpecie = null;
		}

		return $this;
	} // setSpecieId()

	/**
	 * Set the value of [group] column.
	 * 
	 * @param      string $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setGroup($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->group !== $v) {
			$this->group = $v;
			$this->modifiedColumns[] = WatchSightingPeer::GROUP;
		}

		return $this;
	} // setGroup()

	/**
	 * Set the value of [total] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setTotal($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->total !== $v) {
			$this->total = $v;
			$this->modifiedColumns[] = WatchSightingPeer::TOTAL;
		}

		return $this;
	} // setTotal()

	/**
	 * Set the value of [behaviour_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setBehaviourId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->behaviour_id !== $v) {
			$this->behaviour_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::BEHAVIOUR_ID;
		}

		if ($this->aBehaviour !== null && $this->aBehaviour->getId() !== $v) {
			$this->aBehaviour = null;
		}

		return $this;
	} // setBehaviourId()

	/**
	 * Set the value of [direction_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setDirectionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->direction_id !== $v) {
			$this->direction_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::DIRECTION_ID;
		}

		if ($this->aDirection !== null && $this->aDirection->getId() !== $v) {
			$this->aDirection = null;
		}

		return $this;
	} // setDirectionId()

	/**
	 * Set the value of [horizontal] column.
	 * 
	 * @param      double $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setHorizontal($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->horizontal !== $v) {
			$this->horizontal = $v;
			$this->modifiedColumns[] = WatchSightingPeer::HORIZONTAL;
		}

		return $this;
	} // setHorizontal()

	/**
	 * Set the value of [vertical] column.
	 * 
	 * @param      double $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setVertical($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->vertical !== $v) {
			$this->vertical = $v;
			$this->modifiedColumns[] = WatchSightingPeer::VERTICAL;
		}

		return $this;
	} // setVertical()

	/**
	 * Set the value of [vessel_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setVesselId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->vessel_id !== $v) {
			$this->vessel_id = $v;
			$this->modifiedColumns[] = WatchSightingPeer::VESSEL_ID;
		}

		if ($this->aVessel !== null && $this->aVessel->getId() !== $v) {
			$this->aVessel = null;
		}

		return $this;
	} // setVesselId()

	/**
	 * Set the value of [comments] column.
	 * 
	 * @param      string $v new value
	 * @return     WatchSighting The current object (for fluent API support)
	 */
	public function setComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comments !== $v) {
			$this->comments = $v;
			$this->modifiedColumns[] = WatchSightingPeer::COMMENTS;
		}

		return $this;
	} // setComments()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     WatchSighting The current object (for fluent API support)
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
				$this->modifiedColumns[] = WatchSightingPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     WatchSighting The current object (for fluent API support)
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
				$this->modifiedColumns[] = WatchSightingPeer::UPDATED_AT;
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
			$this->watch_info_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->watch_code_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->time = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->watch_visibility_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->specie_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->group = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->total = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->behaviour_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->direction_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->horizontal = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
			$this->vertical = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
			$this->vessel_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->comments = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->created_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->updated_at = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = WatchSightingPeer::NUM_COLUMNS - WatchSightingPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating WatchSighting object", $e);
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

		if ($this->aWatchInfo !== null && $this->watch_info_id !== $this->aWatchInfo->getId()) {
			$this->aWatchInfo = null;
		}
		if ($this->aWatchCode !== null && $this->watch_code_id !== $this->aWatchCode->getId()) {
			$this->aWatchCode = null;
		}
		if ($this->aWatchVisibility !== null && $this->watch_visibility_id !== $this->aWatchVisibility->getId()) {
			$this->aWatchVisibility = null;
		}
		if ($this->aSpecie !== null && $this->specie_id !== $this->aSpecie->getId()) {
			$this->aSpecie = null;
		}
		if ($this->aBehaviour !== null && $this->behaviour_id !== $this->aBehaviour->getId()) {
			$this->aBehaviour = null;
		}
		if ($this->aDirection !== null && $this->direction_id !== $this->aDirection->getId()) {
			$this->aDirection = null;
		}
		if ($this->aVessel !== null && $this->vessel_id !== $this->aVessel->getId()) {
			$this->aVessel = null;
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
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = WatchSightingPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aWatchInfo = null;
			$this->aWatchCode = null;
			$this->aWatchVisibility = null;
			$this->aSpecie = null;
			$this->aBehaviour = null;
			$this->aDirection = null;
			$this->aVessel = null;
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
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseWatchSighting:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				WatchSightingQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseWatchSighting:delete:post') as $callable)
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
			$con = Propel::getConnection(WatchSightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseWatchSighting:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(WatchSightingPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(WatchSightingPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseWatchSighting:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				WatchSightingPeer::addInstanceToPool($this);
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

			if ($this->aWatchInfo !== null) {
				if ($this->aWatchInfo->isModified() || $this->aWatchInfo->isNew()) {
					$affectedRows += $this->aWatchInfo->save($con);
				}
				$this->setWatchInfo($this->aWatchInfo);
			}

			if ($this->aWatchCode !== null) {
				if ($this->aWatchCode->isModified() || $this->aWatchCode->isNew()) {
					$affectedRows += $this->aWatchCode->save($con);
				}
				$this->setWatchCode($this->aWatchCode);
			}

			if ($this->aWatchVisibility !== null) {
				if ($this->aWatchVisibility->isModified() || $this->aWatchVisibility->isNew()) {
					$affectedRows += $this->aWatchVisibility->save($con);
				}
				$this->setWatchVisibility($this->aWatchVisibility);
			}

			if ($this->aSpecie !== null) {
				if ($this->aSpecie->isModified() || $this->aSpecie->isNew()) {
					$affectedRows += $this->aSpecie->save($con);
				}
				$this->setSpecie($this->aSpecie);
			}

			if ($this->aBehaviour !== null) {
				if ($this->aBehaviour->isModified() || $this->aBehaviour->isNew()) {
					$affectedRows += $this->aBehaviour->save($con);
				}
				$this->setBehaviour($this->aBehaviour);
			}

			if ($this->aDirection !== null) {
				if ($this->aDirection->isModified() || $this->aDirection->isNew()) {
					$affectedRows += $this->aDirection->save($con);
				}
				$this->setDirection($this->aDirection);
			}

			if ($this->aVessel !== null) {
				if ($this->aVessel->isModified() || $this->aVessel->isNew()) {
					$affectedRows += $this->aVessel->save($con);
				}
				$this->setVessel($this->aVessel);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = WatchSightingPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(WatchSightingPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.WatchSightingPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += WatchSightingPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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

			if ($this->aWatchInfo !== null) {
				if (!$this->aWatchInfo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aWatchInfo->getValidationFailures());
				}
			}

			if ($this->aWatchCode !== null) {
				if (!$this->aWatchCode->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aWatchCode->getValidationFailures());
				}
			}

			if ($this->aWatchVisibility !== null) {
				if (!$this->aWatchVisibility->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aWatchVisibility->getValidationFailures());
				}
			}

			if ($this->aSpecie !== null) {
				if (!$this->aSpecie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSpecie->getValidationFailures());
				}
			}

			if ($this->aBehaviour !== null) {
				if (!$this->aBehaviour->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBehaviour->getValidationFailures());
				}
			}

			if ($this->aDirection !== null) {
				if (!$this->aDirection->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDirection->getValidationFailures());
				}
			}

			if ($this->aVessel !== null) {
				if (!$this->aVessel->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVessel->getValidationFailures());
				}
			}


			if (($retval = WatchSightingPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = WatchSightingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getWatchInfoId();
				break;
			case 2:
				return $this->getWatchCodeId();
				break;
			case 3:
				return $this->getTime();
				break;
			case 4:
				return $this->getWatchVisibilityId();
				break;
			case 5:
				return $this->getSpecieId();
				break;
			case 6:
				return $this->getGroup();
				break;
			case 7:
				return $this->getTotal();
				break;
			case 8:
				return $this->getBehaviourId();
				break;
			case 9:
				return $this->getDirectionId();
				break;
			case 10:
				return $this->getHorizontal();
				break;
			case 11:
				return $this->getVertical();
				break;
			case 12:
				return $this->getVesselId();
				break;
			case 13:
				return $this->getComments();
				break;
			case 14:
				return $this->getCreatedAt();
				break;
			case 15:
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
		$keys = WatchSightingPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getWatchInfoId(),
			$keys[2] => $this->getWatchCodeId(),
			$keys[3] => $this->getTime(),
			$keys[4] => $this->getWatchVisibilityId(),
			$keys[5] => $this->getSpecieId(),
			$keys[6] => $this->getGroup(),
			$keys[7] => $this->getTotal(),
			$keys[8] => $this->getBehaviourId(),
			$keys[9] => $this->getDirectionId(),
			$keys[10] => $this->getHorizontal(),
			$keys[11] => $this->getVertical(),
			$keys[12] => $this->getVesselId(),
			$keys[13] => $this->getComments(),
			$keys[14] => $this->getCreatedAt(),
			$keys[15] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aWatchInfo) {
				$result['WatchInfo'] = $this->aWatchInfo->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aWatchCode) {
				$result['WatchCode'] = $this->aWatchCode->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aWatchVisibility) {
				$result['WatchVisibility'] = $this->aWatchVisibility->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aSpecie) {
				$result['Specie'] = $this->aSpecie->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aBehaviour) {
				$result['Behaviour'] = $this->aBehaviour->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aDirection) {
				$result['Direction'] = $this->aDirection->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aVessel) {
				$result['Vessel'] = $this->aVessel->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = WatchSightingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setWatchInfoId($value);
				break;
			case 2:
				$this->setWatchCodeId($value);
				break;
			case 3:
				$this->setTime($value);
				break;
			case 4:
				$this->setWatchVisibilityId($value);
				break;
			case 5:
				$this->setSpecieId($value);
				break;
			case 6:
				$this->setGroup($value);
				break;
			case 7:
				$this->setTotal($value);
				break;
			case 8:
				$this->setBehaviourId($value);
				break;
			case 9:
				$this->setDirectionId($value);
				break;
			case 10:
				$this->setHorizontal($value);
				break;
			case 11:
				$this->setVertical($value);
				break;
			case 12:
				$this->setVesselId($value);
				break;
			case 13:
				$this->setComments($value);
				break;
			case 14:
				$this->setCreatedAt($value);
				break;
			case 15:
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
		$keys = WatchSightingPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setWatchInfoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setWatchCodeId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTime($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setWatchVisibilityId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSpecieId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setGroup($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTotal($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setBehaviourId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDirectionId($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setHorizontal($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setVertical($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setVesselId($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setComments($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCreatedAt($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUpdatedAt($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(WatchSightingPeer::DATABASE_NAME);

		if ($this->isColumnModified(WatchSightingPeer::ID)) $criteria->add(WatchSightingPeer::ID, $this->id);
		if ($this->isColumnModified(WatchSightingPeer::WATCH_INFO_ID)) $criteria->add(WatchSightingPeer::WATCH_INFO_ID, $this->watch_info_id);
		if ($this->isColumnModified(WatchSightingPeer::WATCH_CODE_ID)) $criteria->add(WatchSightingPeer::WATCH_CODE_ID, $this->watch_code_id);
		if ($this->isColumnModified(WatchSightingPeer::TIME)) $criteria->add(WatchSightingPeer::TIME, $this->time);
		if ($this->isColumnModified(WatchSightingPeer::WATCH_VISIBILITY_ID)) $criteria->add(WatchSightingPeer::WATCH_VISIBILITY_ID, $this->watch_visibility_id);
		if ($this->isColumnModified(WatchSightingPeer::SPECIE_ID)) $criteria->add(WatchSightingPeer::SPECIE_ID, $this->specie_id);
		if ($this->isColumnModified(WatchSightingPeer::GROUP)) $criteria->add(WatchSightingPeer::GROUP, $this->group);
		if ($this->isColumnModified(WatchSightingPeer::TOTAL)) $criteria->add(WatchSightingPeer::TOTAL, $this->total);
		if ($this->isColumnModified(WatchSightingPeer::BEHAVIOUR_ID)) $criteria->add(WatchSightingPeer::BEHAVIOUR_ID, $this->behaviour_id);
		if ($this->isColumnModified(WatchSightingPeer::DIRECTION_ID)) $criteria->add(WatchSightingPeer::DIRECTION_ID, $this->direction_id);
		if ($this->isColumnModified(WatchSightingPeer::HORIZONTAL)) $criteria->add(WatchSightingPeer::HORIZONTAL, $this->horizontal);
		if ($this->isColumnModified(WatchSightingPeer::VERTICAL)) $criteria->add(WatchSightingPeer::VERTICAL, $this->vertical);
		if ($this->isColumnModified(WatchSightingPeer::VESSEL_ID)) $criteria->add(WatchSightingPeer::VESSEL_ID, $this->vessel_id);
		if ($this->isColumnModified(WatchSightingPeer::COMMENTS)) $criteria->add(WatchSightingPeer::COMMENTS, $this->comments);
		if ($this->isColumnModified(WatchSightingPeer::CREATED_AT)) $criteria->add(WatchSightingPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(WatchSightingPeer::UPDATED_AT)) $criteria->add(WatchSightingPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(WatchSightingPeer::DATABASE_NAME);
		$criteria->add(WatchSightingPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of WatchSighting (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setWatchInfoId($this->watch_info_id);
		$copyObj->setWatchCodeId($this->watch_code_id);
		$copyObj->setTime($this->time);
		$copyObj->setWatchVisibilityId($this->watch_visibility_id);
		$copyObj->setSpecieId($this->specie_id);
		$copyObj->setGroup($this->group);
		$copyObj->setTotal($this->total);
		$copyObj->setBehaviourId($this->behaviour_id);
		$copyObj->setDirectionId($this->direction_id);
		$copyObj->setHorizontal($this->horizontal);
		$copyObj->setVertical($this->vertical);
		$copyObj->setVesselId($this->vessel_id);
		$copyObj->setComments($this->comments);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

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
	 * @return     WatchSighting Clone of current object.
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
	 * @return     WatchSightingPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new WatchSightingPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a WatchInfo object.
	 *
	 * @param      WatchInfo $v
	 * @return     WatchSighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setWatchInfo(WatchInfo $v = null)
	{
		if ($v === null) {
			$this->setWatchInfoId(NULL);
		} else {
			$this->setWatchInfoId($v->getId());
		}

		$this->aWatchInfo = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the WatchInfo object, it will not be re-added.
		if ($v !== null) {
			$v->addWatchSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated WatchInfo object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     WatchInfo The associated WatchInfo object.
	 * @throws     PropelException
	 */
	public function getWatchInfo(PropelPDO $con = null)
	{
		if ($this->aWatchInfo === null && ($this->watch_info_id !== null)) {
			$this->aWatchInfo = WatchInfoQuery::create()->findPk($this->watch_info_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aWatchInfo->addWatchSightings($this);
			 */
		}
		return $this->aWatchInfo;
	}

	/**
	 * Declares an association between this object and a WatchCode object.
	 *
	 * @param      WatchCode $v
	 * @return     WatchSighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setWatchCode(WatchCode $v = null)
	{
		if ($v === null) {
			$this->setWatchCodeId(NULL);
		} else {
			$this->setWatchCodeId($v->getId());
		}

		$this->aWatchCode = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the WatchCode object, it will not be re-added.
		if ($v !== null) {
			$v->addWatchSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated WatchCode object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     WatchCode The associated WatchCode object.
	 * @throws     PropelException
	 */
	public function getWatchCode(PropelPDO $con = null)
	{
		if ($this->aWatchCode === null && ($this->watch_code_id !== null)) {
			$this->aWatchCode = WatchCodeQuery::create()->findPk($this->watch_code_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aWatchCode->addWatchSightings($this);
			 */
		}
		return $this->aWatchCode;
	}

	/**
	 * Declares an association between this object and a WatchVisibility object.
	 *
	 * @param      WatchVisibility $v
	 * @return     WatchSighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setWatchVisibility(WatchVisibility $v = null)
	{
		if ($v === null) {
			$this->setWatchVisibilityId(NULL);
		} else {
			$this->setWatchVisibilityId($v->getId());
		}

		$this->aWatchVisibility = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the WatchVisibility object, it will not be re-added.
		if ($v !== null) {
			$v->addWatchSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated WatchVisibility object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     WatchVisibility The associated WatchVisibility object.
	 * @throws     PropelException
	 */
	public function getWatchVisibility(PropelPDO $con = null)
	{
		if ($this->aWatchVisibility === null && ($this->watch_visibility_id !== null)) {
			$this->aWatchVisibility = WatchVisibilityQuery::create()->findPk($this->watch_visibility_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aWatchVisibility->addWatchSightings($this);
			 */
		}
		return $this->aWatchVisibility;
	}

	/**
	 * Declares an association between this object and a Specie object.
	 *
	 * @param      Specie $v
	 * @return     WatchSighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSpecie(Specie $v = null)
	{
		if ($v === null) {
			$this->setSpecieId(NULL);
		} else {
			$this->setSpecieId($v->getId());
		}

		$this->aSpecie = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Specie object, it will not be re-added.
		if ($v !== null) {
			$v->addWatchSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Specie object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Specie The associated Specie object.
	 * @throws     PropelException
	 */
	public function getSpecie(PropelPDO $con = null)
	{
		if ($this->aSpecie === null && ($this->specie_id !== null)) {
			$this->aSpecie = SpecieQuery::create()->findPk($this->specie_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aSpecie->addWatchSightings($this);
			 */
		}
		return $this->aSpecie;
	}

	/**
	 * Declares an association between this object and a Behaviour object.
	 *
	 * @param      Behaviour $v
	 * @return     WatchSighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBehaviour(Behaviour $v = null)
	{
		if ($v === null) {
			$this->setBehaviourId(NULL);
		} else {
			$this->setBehaviourId($v->getId());
		}

		$this->aBehaviour = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Behaviour object, it will not be re-added.
		if ($v !== null) {
			$v->addWatchSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Behaviour object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Behaviour The associated Behaviour object.
	 * @throws     PropelException
	 */
	public function getBehaviour(PropelPDO $con = null)
	{
		if ($this->aBehaviour === null && ($this->behaviour_id !== null)) {
			$this->aBehaviour = BehaviourQuery::create()->findPk($this->behaviour_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aBehaviour->addWatchSightings($this);
			 */
		}
		return $this->aBehaviour;
	}

	/**
	 * Declares an association between this object and a Direction object.
	 *
	 * @param      Direction $v
	 * @return     WatchSighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setDirection(Direction $v = null)
	{
		if ($v === null) {
			$this->setDirectionId(NULL);
		} else {
			$this->setDirectionId($v->getId());
		}

		$this->aDirection = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Direction object, it will not be re-added.
		if ($v !== null) {
			$v->addWatchSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Direction object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Direction The associated Direction object.
	 * @throws     PropelException
	 */
	public function getDirection(PropelPDO $con = null)
	{
		if ($this->aDirection === null && ($this->direction_id !== null)) {
			$this->aDirection = DirectionQuery::create()->findPk($this->direction_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aDirection->addWatchSightings($this);
			 */
		}
		return $this->aDirection;
	}

	/**
	 * Declares an association between this object and a Vessel object.
	 *
	 * @param      Vessel $v
	 * @return     WatchSighting The current object (for fluent API support)
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
			$v->addWatchSighting($this);
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
				 $this->aVessel->addWatchSightings($this);
			 */
		}
		return $this->aVessel;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->watch_info_id = null;
		$this->watch_code_id = null;
		$this->time = null;
		$this->watch_visibility_id = null;
		$this->specie_id = null;
		$this->group = null;
		$this->total = null;
		$this->behaviour_id = null;
		$this->direction_id = null;
		$this->horizontal = null;
		$this->vertical = null;
		$this->vessel_id = null;
		$this->comments = null;
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
		} // if ($deep)

		$this->aWatchInfo = null;
		$this->aWatchCode = null;
		$this->aWatchVisibility = null;
		$this->aSpecie = null;
		$this->aBehaviour = null;
		$this->aDirection = null;
		$this->aVessel = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseWatchSighting:' . $name))
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

} // BaseWatchSighting
