<?php


/**
 * Base class that represents a row from the 'specie' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSpecie extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SpeciePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SpeciePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the specie_group_id field.
	 * @var        int
	 */
	protected $specie_group_id;

	/**
	 * The value for the code field.
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the rec_cet_code field.
	 * @var        string
	 */
	protected $rec_cet_code;

	/**
	 * The value for the scientific_name field.
	 * @var        string
	 */
	protected $scientific_name;

	/**
	 * The value for the color field.
	 * @var        string
	 */
	protected $color;

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
	 * @var        SpecieGroup
	 */
	protected $aSpecieGroup;

	/**
	 * @var        array SpecieI18n[] Collection to store aggregation of SpecieI18n objects.
	 */
	protected $collSpecieI18ns;

	/**
	 * @var        array Sighting[] Collection to store aggregation of Sighting objects.
	 */
	protected $collSightings;

	/**
	 * @var        array WatchSighting[] Collection to store aggregation of WatchSighting objects.
	 */
	protected $collWatchSightings;

	/**
	 * @var        array Individual[] Collection to store aggregation of Individual objects.
	 */
	protected $collIndividuals;

	/**
	 * @var        array Pattern[] Collection to store aggregation of Pattern objects.
	 */
	protected $collPatterns;

	/**
	 * @var        array ObservationPhoto[] Collection to store aggregation of ObservationPhoto objects.
	 */
	protected $collObservationPhotos;

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

	// symfony_i18n behavior
	
	/**
	 * @var string The value for the culture field
	 */
	protected $culture = null;
	
	/**
	 * @var array Current I18N objects
	 */
	protected $current_i18n = array();

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
	 * Get the [specie_group_id] column value.
	 * 
	 * @return     int
	 */
	public function getSpecieGroupId()
	{
		return $this->specie_group_id;
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
	 * Get the [rec_cet_code] column value.
	 * 
	 * @return     string
	 */
	public function getRecCetCode()
	{
		return $this->rec_cet_code;
	}

	/**
	 * Get the [scientific_name] column value.
	 * 
	 * @return     string
	 */
	public function getScientificName()
	{
		return $this->scientific_name;
	}

	/**
	 * Get the [color] column value.
	 * 
	 * @return     string
	 */
	public function getColor()
	{
		return $this->color;
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
	 * @return     Specie The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SpeciePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [specie_group_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Specie The current object (for fluent API support)
	 */
	public function setSpecieGroupId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->specie_group_id !== $v) {
			$this->specie_group_id = $v;
			$this->modifiedColumns[] = SpeciePeer::SPECIE_GROUP_ID;
		}

		if ($this->aSpecieGroup !== null && $this->aSpecieGroup->getId() !== $v) {
			$this->aSpecieGroup = null;
		}

		return $this;
	} // setSpecieGroupId()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     Specie The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = SpeciePeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [rec_cet_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Specie The current object (for fluent API support)
	 */
	public function setRecCetCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->rec_cet_code !== $v) {
			$this->rec_cet_code = $v;
			$this->modifiedColumns[] = SpeciePeer::REC_CET_CODE;
		}

		return $this;
	} // setRecCetCode()

	/**
	 * Set the value of [scientific_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Specie The current object (for fluent API support)
	 */
	public function setScientificName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->scientific_name !== $v) {
			$this->scientific_name = $v;
			$this->modifiedColumns[] = SpeciePeer::SCIENTIFIC_NAME;
		}

		return $this;
	} // setScientificName()

	/**
	 * Set the value of [color] column.
	 * 
	 * @param      string $v new value
	 * @return     Specie The current object (for fluent API support)
	 */
	public function setColor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->color !== $v) {
			$this->color = $v;
			$this->modifiedColumns[] = SpeciePeer::COLOR;
		}

		return $this;
	} // setColor()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Specie The current object (for fluent API support)
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
				$this->modifiedColumns[] = SpeciePeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Specie The current object (for fluent API support)
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
				$this->modifiedColumns[] = SpeciePeer::UPDATED_AT;
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
			$this->specie_group_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->rec_cet_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->scientific_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->color = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->updated_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Specie object", $e);
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

		if ($this->aSpecieGroup !== null && $this->specie_group_id !== $this->aSpecieGroup->getId()) {
			$this->aSpecieGroup = null;
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
			$con = Propel::getConnection(SpeciePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SpeciePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aSpecieGroup = null;
			$this->collSpecieI18ns = null;

			$this->collSightings = null;

			$this->collWatchSightings = null;

			$this->collIndividuals = null;

			$this->collPatterns = null;

			$this->collObservationPhotos = null;

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
			$con = Propel::getConnection(SpeciePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSpecie:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				SpecieQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseSpecie:delete:post') as $callable)
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
			$con = Propel::getConnection(SpeciePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSpecie:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(SpeciePeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(SpeciePeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseSpecie:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				SpeciePeer::addInstanceToPool($this);
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

			if ($this->aSpecieGroup !== null) {
				if ($this->aSpecieGroup->isModified() || $this->aSpecieGroup->isNew()) {
					$affectedRows += $this->aSpecieGroup->save($con);
				}
				$this->setSpecieGroup($this->aSpecieGroup);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SpeciePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SpeciePeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpeciePeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += SpeciePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collSpecieI18ns !== null) {
				foreach ($this->collSpecieI18ns as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collSightings !== null) {
				foreach ($this->collSightings as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collWatchSightings !== null) {
				foreach ($this->collWatchSightings as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collIndividuals !== null) {
				foreach ($this->collIndividuals as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPatterns !== null) {
				foreach ($this->collPatterns as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collObservationPhotos !== null) {
				foreach ($this->collObservationPhotos as $referrerFK) {
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

			if ($this->aSpecieGroup !== null) {
				if (!$this->aSpecieGroup->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSpecieGroup->getValidationFailures());
				}
			}


			if (($retval = SpeciePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSpecieI18ns !== null) {
					foreach ($this->collSpecieI18ns as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collSightings !== null) {
					foreach ($this->collSightings as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collWatchSightings !== null) {
					foreach ($this->collWatchSightings as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collIndividuals !== null) {
					foreach ($this->collIndividuals as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPatterns !== null) {
					foreach ($this->collPatterns as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collObservationPhotos !== null) {
					foreach ($this->collObservationPhotos as $referrerFK) {
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
		$pos = SpeciePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSpecieGroupId();
				break;
			case 2:
				return $this->getCode();
				break;
			case 3:
				return $this->getRecCetCode();
				break;
			case 4:
				return $this->getScientificName();
				break;
			case 5:
				return $this->getColor();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
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
		$keys = SpeciePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSpecieGroupId(),
			$keys[2] => $this->getCode(),
			$keys[3] => $this->getRecCetCode(),
			$keys[4] => $this->getScientificName(),
			$keys[5] => $this->getColor(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aSpecieGroup) {
				$result['SpecieGroup'] = $this->aSpecieGroup->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = SpeciePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSpecieGroupId($value);
				break;
			case 2:
				$this->setCode($value);
				break;
			case 3:
				$this->setRecCetCode($value);
				break;
			case 4:
				$this->setScientificName($value);
				break;
			case 5:
				$this->setColor($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
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
		$keys = SpeciePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSpecieGroupId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCode($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRecCetCode($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setScientificName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setColor($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SpeciePeer::DATABASE_NAME);

		if ($this->isColumnModified(SpeciePeer::ID)) $criteria->add(SpeciePeer::ID, $this->id);
		if ($this->isColumnModified(SpeciePeer::SPECIE_GROUP_ID)) $criteria->add(SpeciePeer::SPECIE_GROUP_ID, $this->specie_group_id);
		if ($this->isColumnModified(SpeciePeer::CODE)) $criteria->add(SpeciePeer::CODE, $this->code);
		if ($this->isColumnModified(SpeciePeer::REC_CET_CODE)) $criteria->add(SpeciePeer::REC_CET_CODE, $this->rec_cet_code);
		if ($this->isColumnModified(SpeciePeer::SCIENTIFIC_NAME)) $criteria->add(SpeciePeer::SCIENTIFIC_NAME, $this->scientific_name);
		if ($this->isColumnModified(SpeciePeer::COLOR)) $criteria->add(SpeciePeer::COLOR, $this->color);
		if ($this->isColumnModified(SpeciePeer::CREATED_AT)) $criteria->add(SpeciePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SpeciePeer::UPDATED_AT)) $criteria->add(SpeciePeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(SpeciePeer::DATABASE_NAME);
		$criteria->add(SpeciePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Specie (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setSpecieGroupId($this->specie_group_id);
		$copyObj->setCode($this->code);
		$copyObj->setRecCetCode($this->rec_cet_code);
		$copyObj->setScientificName($this->scientific_name);
		$copyObj->setColor($this->color);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getSpecieI18ns() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addSpecieI18n($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getSightings() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addSighting($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getWatchSightings() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addWatchSighting($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getIndividuals() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addIndividual($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPatterns() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPattern($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getObservationPhotos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhoto($relObj->copy($deepCopy));
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
	 * @return     Specie Clone of current object.
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
	 * @return     SpeciePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SpeciePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a SpecieGroup object.
	 *
	 * @param      SpecieGroup $v
	 * @return     Specie The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSpecieGroup(SpecieGroup $v = null)
	{
		if ($v === null) {
			$this->setSpecieGroupId(NULL);
		} else {
			$this->setSpecieGroupId($v->getId());
		}

		$this->aSpecieGroup = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the SpecieGroup object, it will not be re-added.
		if ($v !== null) {
			$v->addSpecie($this);
		}

		return $this;
	}


	/**
	 * Get the associated SpecieGroup object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     SpecieGroup The associated SpecieGroup object.
	 * @throws     PropelException
	 */
	public function getSpecieGroup(PropelPDO $con = null)
	{
		if ($this->aSpecieGroup === null && ($this->specie_group_id !== null)) {
			$this->aSpecieGroup = SpecieGroupQuery::create()->findPk($this->specie_group_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aSpecieGroup->addSpecies($this);
			 */
		}
		return $this->aSpecieGroup;
	}

	/**
	 * Clears out the collSpecieI18ns collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addSpecieI18ns()
	 */
	public function clearSpecieI18ns()
	{
		$this->collSpecieI18ns = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collSpecieI18ns collection.
	 *
	 * By default this just sets the collSpecieI18ns collection to an empty array (like clearcollSpecieI18ns());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initSpecieI18ns()
	{
		$this->collSpecieI18ns = new PropelObjectCollection();
		$this->collSpecieI18ns->setModel('SpecieI18n');
	}

	/**
	 * Gets an array of SpecieI18n objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Specie is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array SpecieI18n[] List of SpecieI18n objects
	 * @throws     PropelException
	 */
	public function getSpecieI18ns($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collSpecieI18ns || null !== $criteria) {
			if ($this->isNew() && null === $this->collSpecieI18ns) {
				// return empty collection
				$this->initSpecieI18ns();
			} else {
				$collSpecieI18ns = SpecieI18nQuery::create(null, $criteria)
					->filterBySpecie($this)
					->find($con);
				if (null !== $criteria) {
					return $collSpecieI18ns;
				}
				$this->collSpecieI18ns = $collSpecieI18ns;
			}
		}
		return $this->collSpecieI18ns;
	}

	/**
	 * Returns the number of related SpecieI18n objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related SpecieI18n objects.
	 * @throws     PropelException
	 */
	public function countSpecieI18ns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collSpecieI18ns || null !== $criteria) {
			if ($this->isNew() && null === $this->collSpecieI18ns) {
				return 0;
			} else {
				$query = SpecieI18nQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySpecie($this)
					->count($con);
			}
		} else {
			return count($this->collSpecieI18ns);
		}
	}

	/**
	 * Method called to associate a SpecieI18n object to this object
	 * through the SpecieI18n foreign key attribute.
	 *
	 * @param      SpecieI18n $l SpecieI18n
	 * @return     void
	 * @throws     PropelException
	 */
	public function addSpecieI18n(SpecieI18n $l)
	{
		if ($this->collSpecieI18ns === null) {
			$this->initSpecieI18ns();
		}
		if (!$this->collSpecieI18ns->contains($l)) { // only add it if the **same** object is not already associated
			$this->collSpecieI18ns[]= $l;
			$l->setSpecie($this);
		}
	}

	/**
	 * Clears out the collSightings collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addSightings()
	 */
	public function clearSightings()
	{
		$this->collSightings = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collSightings collection.
	 *
	 * By default this just sets the collSightings collection to an empty array (like clearcollSightings());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initSightings()
	{
		$this->collSightings = new PropelObjectCollection();
		$this->collSightings->setModel('Sighting');
	}

	/**
	 * Gets an array of Sighting objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Specie is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Sighting[] List of Sighting objects
	 * @throws     PropelException
	 */
	public function getSightings($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collSightings || null !== $criteria) {
			if ($this->isNew() && null === $this->collSightings) {
				// return empty collection
				$this->initSightings();
			} else {
				$collSightings = SightingQuery::create(null, $criteria)
					->filterBySpecie($this)
					->find($con);
				if (null !== $criteria) {
					return $collSightings;
				}
				$this->collSightings = $collSightings;
			}
		}
		return $this->collSightings;
	}

	/**
	 * Returns the number of related Sighting objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Sighting objects.
	 * @throws     PropelException
	 */
	public function countSightings(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collSightings || null !== $criteria) {
			if ($this->isNew() && null === $this->collSightings) {
				return 0;
			} else {
				$query = SightingQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySpecie($this)
					->count($con);
			}
		} else {
			return count($this->collSightings);
		}
	}

	/**
	 * Method called to associate a Sighting object to this object
	 * through the Sighting foreign key attribute.
	 *
	 * @param      Sighting $l Sighting
	 * @return     void
	 * @throws     PropelException
	 */
	public function addSighting(Sighting $l)
	{
		if ($this->collSightings === null) {
			$this->initSightings();
		}
		if (!$this->collSightings->contains($l)) { // only add it if the **same** object is not already associated
			$this->collSightings[]= $l;
			$l->setSpecie($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related Sightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Sighting[] List of Sighting objects
	 */
	public function getSightingsJoinRecord($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = SightingQuery::create(null, $criteria);
		$query->joinWith('Record', $join_behavior);

		return $this->getSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related Sightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Sighting[] List of Sighting objects
	 */
	public function getSightingsJoinBehaviour($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = SightingQuery::create(null, $criteria);
		$query->joinWith('Behaviour', $join_behavior);

		return $this->getSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related Sightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Sighting[] List of Sighting objects
	 */
	public function getSightingsJoinAssociation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = SightingQuery::create(null, $criteria);
		$query->joinWith('Association', $join_behavior);

		return $this->getSightings($query, $con);
	}

	/**
	 * Clears out the collWatchSightings collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addWatchSightings()
	 */
	public function clearWatchSightings()
	{
		$this->collWatchSightings = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collWatchSightings collection.
	 *
	 * By default this just sets the collWatchSightings collection to an empty array (like clearcollWatchSightings());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initWatchSightings()
	{
		$this->collWatchSightings = new PropelObjectCollection();
		$this->collWatchSightings->setModel('WatchSighting');
	}

	/**
	 * Gets an array of WatchSighting objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Specie is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 * @throws     PropelException
	 */
	public function getWatchSightings($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collWatchSightings || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchSightings) {
				// return empty collection
				$this->initWatchSightings();
			} else {
				$collWatchSightings = WatchSightingQuery::create(null, $criteria)
					->filterBySpecie($this)
					->find($con);
				if (null !== $criteria) {
					return $collWatchSightings;
				}
				$this->collWatchSightings = $collWatchSightings;
			}
		}
		return $this->collWatchSightings;
	}

	/**
	 * Returns the number of related WatchSighting objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related WatchSighting objects.
	 * @throws     PropelException
	 */
	public function countWatchSightings(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collWatchSightings || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchSightings) {
				return 0;
			} else {
				$query = WatchSightingQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySpecie($this)
					->count($con);
			}
		} else {
			return count($this->collWatchSightings);
		}
	}

	/**
	 * Method called to associate a WatchSighting object to this object
	 * through the WatchSighting foreign key attribute.
	 *
	 * @param      WatchSighting $l WatchSighting
	 * @return     void
	 * @throws     PropelException
	 */
	public function addWatchSighting(WatchSighting $l)
	{
		if ($this->collWatchSightings === null) {
			$this->initWatchSightings();
		}
		if (!$this->collWatchSightings->contains($l)) { // only add it if the **same** object is not already associated
			$this->collWatchSightings[]= $l;
			$l->setSpecie($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinWatchInfo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('WatchInfo', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinWatchCode($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('WatchCode', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinWatchVisibility($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('WatchVisibility', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinBehaviour($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('Behaviour', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinDirection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('Direction', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinVessel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('Vessel', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}

	/**
	 * Clears out the collIndividuals collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addIndividuals()
	 */
	public function clearIndividuals()
	{
		$this->collIndividuals = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collIndividuals collection.
	 *
	 * By default this just sets the collIndividuals collection to an empty array (like clearcollIndividuals());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initIndividuals()
	{
		$this->collIndividuals = new PropelObjectCollection();
		$this->collIndividuals->setModel('Individual');
	}

	/**
	 * Gets an array of Individual objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Specie is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Individual[] List of Individual objects
	 * @throws     PropelException
	 */
	public function getIndividuals($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collIndividuals || null !== $criteria) {
			if ($this->isNew() && null === $this->collIndividuals) {
				// return empty collection
				$this->initIndividuals();
			} else {
				$collIndividuals = IndividualQuery::create(null, $criteria)
					->filterBySpecie($this)
					->find($con);
				if (null !== $criteria) {
					return $collIndividuals;
				}
				$this->collIndividuals = $collIndividuals;
			}
		}
		return $this->collIndividuals;
	}

	/**
	 * Returns the number of related Individual objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Individual objects.
	 * @throws     PropelException
	 */
	public function countIndividuals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collIndividuals || null !== $criteria) {
			if ($this->isNew() && null === $this->collIndividuals) {
				return 0;
			} else {
				$query = IndividualQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySpecie($this)
					->count($con);
			}
		} else {
			return count($this->collIndividuals);
		}
	}

	/**
	 * Method called to associate a Individual object to this object
	 * through the Individual foreign key attribute.
	 *
	 * @param      Individual $l Individual
	 * @return     void
	 * @throws     PropelException
	 */
	public function addIndividual(Individual $l)
	{
		if ($this->collIndividuals === null) {
			$this->initIndividuals();
		}
		if (!$this->collIndividuals->contains($l)) { // only add it if the **same** object is not already associated
			$this->collIndividuals[]= $l;
			$l->setSpecie($this);
		}
	}

	/**
	 * Clears out the collPatterns collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPatterns()
	 */
	public function clearPatterns()
	{
		$this->collPatterns = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPatterns collection.
	 *
	 * By default this just sets the collPatterns collection to an empty array (like clearcollPatterns());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPatterns()
	{
		$this->collPatterns = new PropelObjectCollection();
		$this->collPatterns->setModel('Pattern');
	}

	/**
	 * Gets an array of Pattern objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Specie is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Pattern[] List of Pattern objects
	 * @throws     PropelException
	 */
	public function getPatterns($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPatterns || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatterns) {
				// return empty collection
				$this->initPatterns();
			} else {
				$collPatterns = PatternQuery::create(null, $criteria)
					->filterBySpecie($this)
					->find($con);
				if (null !== $criteria) {
					return $collPatterns;
				}
				$this->collPatterns = $collPatterns;
			}
		}
		return $this->collPatterns;
	}

	/**
	 * Returns the number of related Pattern objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Pattern objects.
	 * @throws     PropelException
	 */
	public function countPatterns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPatterns || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatterns) {
				return 0;
			} else {
				$query = PatternQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySpecie($this)
					->count($con);
			}
		} else {
			return count($this->collPatterns);
		}
	}

	/**
	 * Method called to associate a Pattern object to this object
	 * through the Pattern foreign key attribute.
	 *
	 * @param      Pattern $l Pattern
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPattern(Pattern $l)
	{
		if ($this->collPatterns === null) {
			$this->initPatterns();
		}
		if (!$this->collPatterns->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPatterns[]= $l;
			$l->setSpecie($this);
		}
	}

	/**
	 * Clears out the collObservationPhotos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotos()
	 */
	public function clearObservationPhotos()
	{
		$this->collObservationPhotos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotos collection.
	 *
	 * By default this just sets the collObservationPhotos collection to an empty array (like clearcollObservationPhotos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotos()
	{
		$this->collObservationPhotos = new PropelObjectCollection();
		$this->collObservationPhotos->setModel('ObservationPhoto');
	}

	/**
	 * Gets an array of ObservationPhoto objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Specie is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 * @throws     PropelException
	 */
	public function getObservationPhotos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotos || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotos) {
				// return empty collection
				$this->initObservationPhotos();
			} else {
				$collObservationPhotos = ObservationPhotoQuery::create(null, $criteria)
					->filterBySpecie($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotos;
				}
				$this->collObservationPhotos = $collObservationPhotos;
			}
		}
		return $this->collObservationPhotos;
	}

	/**
	 * Returns the number of related ObservationPhoto objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhoto objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotos || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotos) {
				return 0;
			} else {
				$query = ObservationPhotoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySpecie($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotos);
		}
	}

	/**
	 * Method called to associate a ObservationPhoto object to this object
	 * through the ObservationPhoto foreign key attribute.
	 *
	 * @param      ObservationPhoto $l ObservationPhoto
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhoto(ObservationPhoto $l)
	{
		if ($this->collObservationPhotos === null) {
			$this->initObservationPhotos();
		}
		if (!$this->collObservationPhotos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotos[]= $l;
			$l->setSpecie($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinIndividual($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Individual', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinBodyPart($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('BodyPart', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinBehaviour($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Behaviour', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinCompany($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Company', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinVessel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Vessel', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinPhotographer($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Photographer', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinSighting($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Sighting', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinsfGuardUserRelatedByLastEditedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByLastEditedBy', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Specie is new, it will return
	 * an empty collection; or if this Specie has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Specie.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinsfGuardUserRelatedByValidatedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByValidatedBy', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->specie_group_id = null;
		$this->code = null;
		$this->rec_cet_code = null;
		$this->scientific_name = null;
		$this->color = null;
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
			if ($this->collSpecieI18ns) {
				foreach ((array) $this->collSpecieI18ns as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collSightings) {
				foreach ((array) $this->collSightings as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collWatchSightings) {
				foreach ((array) $this->collWatchSightings as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collIndividuals) {
				foreach ((array) $this->collIndividuals as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPatterns) {
				foreach ((array) $this->collPatterns as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collObservationPhotos) {
				foreach ((array) $this->collObservationPhotos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collSpecieI18ns = null;
		$this->collSightings = null;
		$this->collWatchSightings = null;
		$this->collIndividuals = null;
		$this->collPatterns = null;
		$this->collObservationPhotos = null;
		$this->aSpecieGroup = null;
	}

	// symfony_i18n behavior
	
	/**
	 * Returns the culture.
	 *
	 * @return string The culture
	 */
	public function getCulture()
	{
	  return $this->culture;
	}
	
	/**
	 * Sets the culture.
	 *
	 * @param string  The culture to set
	 *
	 * @return Specie
	 */
	public function setCulture($culture)
	{
	  $this->culture = $culture;
	  return $this;
	}
	
	/**
	 * Returns the "name" value from the current {@link SpecieI18n}.
	 */
	public function getName($culture = null)
	{
	  return $this->getCurrentSpecieI18n($culture)->getName();
	}
	
	/**
	 * Sets the "name" value of the current {@link SpecieI18n}.
	 *
	 * @return Specie
	 */
	public function setName($value, $culture = null)
	{
	  $this->getCurrentSpecieI18n($culture)->setName($value);
	  return $this;
	}
	
	/**
	 * Returns the current translation.
	 *
	 * @return SpecieI18n
	 */
	public function getCurrentSpecieI18n($culture = null)
	{
	  if (null === $culture)
	  {
	    $culture = null === $this->culture ? sfPropel::getDefaultCulture() : $this->culture;
	  }
	
	  if (!isset($this->current_i18n[$culture]))
	  {
	    $object = $this->isNew() ? null : SpecieI18nPeer::retrieveByPK($this->getPrimaryKey(), $culture);
	    if ($object)
	    {
	      $this->setSpecieI18nForCulture($object, $culture);
	    }
	    else
	    {
	      $this->setSpecieI18nForCulture(new SpecieI18n(), $culture);
	      $this->current_i18n[$culture]->setCulture($culture);
	    }
	  }
	
	  return $this->current_i18n[$culture];
	}
	
	/**
	 * Sets the translation object for a culture.
	 */
	public function setSpecieI18nForCulture(SpecieI18n $object, $culture)
	{
	  $this->current_i18n[$culture] = $object;
	  $this->addSpecieI18n($object);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseSpecie:' . $name))
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

} // BaseSpecie
