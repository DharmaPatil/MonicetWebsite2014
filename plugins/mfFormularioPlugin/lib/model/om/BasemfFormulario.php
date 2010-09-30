<?php

/**
 * Base class that represents a row from the 'mf_formulario' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Sep 24 15:23:50 2010
 *
 * @package    propel.generator.plugins.mfFormularioPlugin.lib.model.om
 */
abstract class BasemfFormulario extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'mfFormularioPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        mfFormularioPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the regra field.
	 * @var        string
	 */
	protected $regra;

	/**
	 * The value for the visivel field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $visivel;

	/**
	 * The value for the ao_editar field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $ao_editar;

	/**
	 * The value for the ao_criar field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $ao_criar;

	/**
	 * The value for the observacoes field.
	 * @var        string
	 */
	protected $observacoes;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * @var        array mfFormularioUtilizador[] Collection to store aggregation of mfFormularioUtilizador objects.
	 */
	protected $collmfFormularioUtilizadors;

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
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->visivel = true;
		$this->ao_editar = true;
		$this->ao_criar = true;
	}

	/**
	 * Initializes internal state of BasemfFormulario object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

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
	 * Get the [regra] column value.
	 * 
	 * @return     string
	 */
	public function getRegra()
	{
		return $this->regra;
	}

	/**
	 * Get the [visivel] column value.
	 * 
	 * @return     boolean
	 */
	public function getVisivel()
	{
		return $this->visivel;
	}

	/**
	 * Get the [ao_editar] column value.
	 * 
	 * @return     boolean
	 */
	public function getAoEditar()
	{
		return $this->ao_editar;
	}

	/**
	 * Get the [ao_criar] column value.
	 * 
	 * @return     boolean
	 */
	public function getAoCriar()
	{
		return $this->ao_criar;
	}

	/**
	 * Get the [observacoes] column value.
	 * 
	 * @return     string
	 */
	public function getObservacoes()
	{
		return $this->observacoes;
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     mfFormulario The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = mfFormularioPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [regra] column.
	 * 
	 * @param      string $v new value
	 * @return     mfFormulario The current object (for fluent API support)
	 */
	public function setRegra($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->regra !== $v) {
			$this->regra = $v;
			$this->modifiedColumns[] = mfFormularioPeer::REGRA;
		}

		return $this;
	} // setRegra()

	/**
	 * Set the value of [visivel] column.
	 * 
	 * @param      boolean $v new value
	 * @return     mfFormulario The current object (for fluent API support)
	 */
	public function setVisivel($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->visivel !== $v || $this->isNew()) {
			$this->visivel = $v;
			$this->modifiedColumns[] = mfFormularioPeer::VISIVEL;
		}

		return $this;
	} // setVisivel()

	/**
	 * Set the value of [ao_editar] column.
	 * 
	 * @param      boolean $v new value
	 * @return     mfFormulario The current object (for fluent API support)
	 */
	public function setAoEditar($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->ao_editar !== $v || $this->isNew()) {
			$this->ao_editar = $v;
			$this->modifiedColumns[] = mfFormularioPeer::AO_EDITAR;
		}

		return $this;
	} // setAoEditar()

	/**
	 * Set the value of [ao_criar] column.
	 * 
	 * @param      boolean $v new value
	 * @return     mfFormulario The current object (for fluent API support)
	 */
	public function setAoCriar($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->ao_criar !== $v || $this->isNew()) {
			$this->ao_criar = $v;
			$this->modifiedColumns[] = mfFormularioPeer::AO_CRIAR;
		}

		return $this;
	} // setAoCriar()

	/**
	 * Set the value of [observacoes] column.
	 * 
	 * @param      string $v new value
	 * @return     mfFormulario The current object (for fluent API support)
	 */
	public function setObservacoes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->observacoes !== $v) {
			$this->observacoes = $v;
			$this->modifiedColumns[] = mfFormularioPeer::OBSERVACOES;
		}

		return $this;
	} // setObservacoes()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     mfFormulario The current object (for fluent API support)
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
				$this->modifiedColumns[] = mfFormularioPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

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
			if ($this->visivel !== true) {
				return false;
			}

			if ($this->ao_editar !== true) {
				return false;
			}

			if ($this->ao_criar !== true) {
				return false;
			}

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
			$this->regra = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->visivel = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
			$this->ao_editar = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
			$this->ao_criar = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->observacoes = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = mfFormularioPeer::NUM_COLUMNS - mfFormularioPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating mfFormulario object", $e);
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
			$con = Propel::getConnection(mfFormularioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = mfFormularioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collmfFormularioUtilizadors = null;

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
			$con = Propel::getConnection(mfFormularioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasemfFormulario:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				mfFormularioQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasemfFormulario:delete:post') as $callable)
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
			$con = Propel::getConnection(mfFormularioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasemfFormulario:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(mfFormularioPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BasemfFormulario:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				mfFormularioPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = mfFormularioPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = mfFormularioPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += mfFormularioPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collmfFormularioUtilizadors !== null) {
				foreach ($this->collmfFormularioUtilizadors as $referrerFK) {
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


			if (($retval = mfFormularioPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collmfFormularioUtilizadors !== null) {
					foreach ($this->collmfFormularioUtilizadors as $referrerFK) {
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
		$pos = mfFormularioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getRegra();
				break;
			case 2:
				return $this->getVisivel();
				break;
			case 3:
				return $this->getAoEditar();
				break;
			case 4:
				return $this->getAoCriar();
				break;
			case 5:
				return $this->getObservacoes();
				break;
			case 6:
				return $this->getCreatedAt();
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
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = mfFormularioPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRegra(),
			$keys[2] => $this->getVisivel(),
			$keys[3] => $this->getAoEditar(),
			$keys[4] => $this->getAoCriar(),
			$keys[5] => $this->getObservacoes(),
			$keys[6] => $this->getCreatedAt(),
		);
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
		$pos = mfFormularioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setRegra($value);
				break;
			case 2:
				$this->setVisivel($value);
				break;
			case 3:
				$this->setAoEditar($value);
				break;
			case 4:
				$this->setAoCriar($value);
				break;
			case 5:
				$this->setObservacoes($value);
				break;
			case 6:
				$this->setCreatedAt($value);
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
		$keys = mfFormularioPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRegra($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVisivel($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAoEditar($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAoCriar($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setObservacoes($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(mfFormularioPeer::DATABASE_NAME);

		if ($this->isColumnModified(mfFormularioPeer::ID)) $criteria->add(mfFormularioPeer::ID, $this->id);
		if ($this->isColumnModified(mfFormularioPeer::REGRA)) $criteria->add(mfFormularioPeer::REGRA, $this->regra);
		if ($this->isColumnModified(mfFormularioPeer::VISIVEL)) $criteria->add(mfFormularioPeer::VISIVEL, $this->visivel);
		if ($this->isColumnModified(mfFormularioPeer::AO_EDITAR)) $criteria->add(mfFormularioPeer::AO_EDITAR, $this->ao_editar);
		if ($this->isColumnModified(mfFormularioPeer::AO_CRIAR)) $criteria->add(mfFormularioPeer::AO_CRIAR, $this->ao_criar);
		if ($this->isColumnModified(mfFormularioPeer::OBSERVACOES)) $criteria->add(mfFormularioPeer::OBSERVACOES, $this->observacoes);
		if ($this->isColumnModified(mfFormularioPeer::CREATED_AT)) $criteria->add(mfFormularioPeer::CREATED_AT, $this->created_at);

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
		$criteria = new Criteria(mfFormularioPeer::DATABASE_NAME);
		$criteria->add(mfFormularioPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of mfFormulario (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setRegra($this->regra);
		$copyObj->setVisivel($this->visivel);
		$copyObj->setAoEditar($this->ao_editar);
		$copyObj->setAoCriar($this->ao_criar);
		$copyObj->setObservacoes($this->observacoes);
		$copyObj->setCreatedAt($this->created_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getmfFormularioUtilizadors() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addmfFormularioUtilizador($relObj->copy($deepCopy));
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
	 * @return     mfFormulario Clone of current object.
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
	 * @return     mfFormularioPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new mfFormularioPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collmfFormularioUtilizadors collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addmfFormularioUtilizadors()
	 */
	public function clearmfFormularioUtilizadors()
	{
		$this->collmfFormularioUtilizadors = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collmfFormularioUtilizadors collection.
	 *
	 * By default this just sets the collmfFormularioUtilizadors collection to an empty array (like clearcollmfFormularioUtilizadors());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initmfFormularioUtilizadors()
	{
		$this->collmfFormularioUtilizadors = new PropelObjectCollection();
		$this->collmfFormularioUtilizadors->setModel('mfFormularioUtilizador');
	}

	/**
	 * Gets an array of mfFormularioUtilizador objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this mfFormulario is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     PropelCollection|array mfFormularioUtilizador[] List of mfFormularioUtilizador objects
	 * @throws     PropelException
	 */
	public function getmfFormularioUtilizadors($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collmfFormularioUtilizadors || null !== $criteria) {
			if ($this->isNew() && null === $this->collmfFormularioUtilizadors) {
				// return empty collection
				$this->initmfFormularioUtilizadors();
			} else {
				$collmfFormularioUtilizadors = mfFormularioUtilizadorQuery::create(null, $criteria)
					->filterBymfFormulario($this)
					->find($con);
				if (null !== $criteria) {
					return $collmfFormularioUtilizadors;
				}
				$this->collmfFormularioUtilizadors = $collmfFormularioUtilizadors;
			}
		}
		return $this->collmfFormularioUtilizadors;
	}

	/**
	 * Returns the number of related mfFormularioUtilizador objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related mfFormularioUtilizador objects.
	 * @throws     PropelException
	 */
	public function countmfFormularioUtilizadors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collmfFormularioUtilizadors || null !== $criteria) {
			if ($this->isNew() && null === $this->collmfFormularioUtilizadors) {
				return 0;
			} else {
				$query = mfFormularioUtilizadorQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBymfFormulario($this)
					->count($con);
			}
		} else {
			return count($this->collmfFormularioUtilizadors);
		}
	}

	/**
	 * Method called to associate a mfFormularioUtilizador object to this object
	 * through the mfFormularioUtilizador foreign key attribute.
	 *
	 * @param      mfFormularioUtilizador $l mfFormularioUtilizador
	 * @return     void
	 * @throws     PropelException
	 */
	public function addmfFormularioUtilizador(mfFormularioUtilizador $l)
	{
		if ($this->collmfFormularioUtilizadors === null) {
			$this->initmfFormularioUtilizadors();
		}
		if (!$this->collmfFormularioUtilizadors->contains($l)) { // only add it if the **same** object is not already associated
			$this->collmfFormularioUtilizadors[]= $l;
			$l->setmfFormulario($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this mfFormulario is new, it will return
	 * an empty collection; or if this mfFormulario has previously
	 * been saved, it will retrieve related mfFormularioUtilizadors from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in mfFormulario.
	 */
	public function getmfFormularioUtilizadorsJoinsfGuardUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = mfFormularioUtilizadorQuery::create(null, $criteria);
		$query->joinWith('mfFormularioUtilizador.sfGuardUser', $join_behavior);

		return $this->getmfFormularioUtilizadors($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->regra = null;
		$this->visivel = null;
		$this->ao_editar = null;
		$this->ao_criar = null;
		$this->observacoes = null;
		$this->created_at = null;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->setNew(true);
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
			if ($this->collmfFormularioUtilizadors) {
				foreach ((array) $this->collmfFormularioUtilizadors as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collmfFormularioUtilizadors = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasemfFormulario:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		if (preg_match('/get(\w+)/', $name, $matches) && $this->hasVirtualColumn($matches[1])) {
			return $this->getVirtualColumn($matches[1]);
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BasemfFormulario
