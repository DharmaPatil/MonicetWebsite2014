<?php


/**
 * Base class that represents a row from the 'observation_photo_dorsal_left' table.
 *
 * 
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseObservationPhotoDorsalLeft extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ObservationPhotoDorsalLeftPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ObservationPhotoDorsalLeftPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the photo_id field.
	 * @var        int
	 */
	protected $photo_id;

	/**
	 * The value for the is_smooth field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_smooth;

	/**
	 * The value for the is_irregular field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_irregular;

	/**
	 * The value for the is_cutted_point field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_cutted_point;

	/**
	 * @var        ObservationPhoto
	 */
	protected $aObservationPhoto;

	/**
	 * @var        array ObservationPhotoDorsalLeftMark[] Collection to store aggregation of ObservationPhotoDorsalLeftMark objects.
	 */
	protected $collObservationPhotoDorsalLeftMarks;

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
		$this->is_smooth = false;
		$this->is_irregular = false;
		$this->is_cutted_point = false;
	}

	/**
	 * Initializes internal state of BaseObservationPhotoDorsalLeft object.
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
	 * Get the [photo_id] column value.
	 * 
	 * @return     int
	 */
	public function getPhotoId()
	{
		return $this->photo_id;
	}

	/**
	 * Get the [is_smooth] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsSmooth()
	{
		return $this->is_smooth;
	}

	/**
	 * Get the [is_irregular] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsIrregular()
	{
		return $this->is_irregular;
	}

	/**
	 * Get the [is_cutted_point] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsCuttedPoint()
	{
		return $this->is_cutted_point;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhotoDorsalLeft The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ObservationPhotoDorsalLeftPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [photo_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhotoDorsalLeft The current object (for fluent API support)
	 */
	public function setPhotoId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->photo_id !== $v) {
			$this->photo_id = $v;
			$this->modifiedColumns[] = ObservationPhotoDorsalLeftPeer::PHOTO_ID;
		}

		if ($this->aObservationPhoto !== null && $this->aObservationPhoto->getId() !== $v) {
			$this->aObservationPhoto = null;
		}

		return $this;
	} // setPhotoId()

	/**
	 * Set the value of [is_smooth] column.
	 * 
	 * @param      boolean $v new value
	 * @return     ObservationPhotoDorsalLeft The current object (for fluent API support)
	 */
	public function setIsSmooth($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_smooth !== $v || $this->isNew()) {
			$this->is_smooth = $v;
			$this->modifiedColumns[] = ObservationPhotoDorsalLeftPeer::IS_SMOOTH;
		}

		return $this;
	} // setIsSmooth()

	/**
	 * Set the value of [is_irregular] column.
	 * 
	 * @param      boolean $v new value
	 * @return     ObservationPhotoDorsalLeft The current object (for fluent API support)
	 */
	public function setIsIrregular($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_irregular !== $v || $this->isNew()) {
			$this->is_irregular = $v;
			$this->modifiedColumns[] = ObservationPhotoDorsalLeftPeer::IS_IRREGULAR;
		}

		return $this;
	} // setIsIrregular()

	/**
	 * Set the value of [is_cutted_point] column.
	 * 
	 * @param      boolean $v new value
	 * @return     ObservationPhotoDorsalLeft The current object (for fluent API support)
	 */
	public function setIsCuttedPoint($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_cutted_point !== $v || $this->isNew()) {
			$this->is_cutted_point = $v;
			$this->modifiedColumns[] = ObservationPhotoDorsalLeftPeer::IS_CUTTED_POINT;
		}

		return $this;
	} // setIsCuttedPoint()

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
			if ($this->is_smooth !== false) {
				return false;
			}

			if ($this->is_irregular !== false) {
				return false;
			}

			if ($this->is_cutted_point !== false) {
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
			$this->photo_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->is_smooth = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
			$this->is_irregular = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
			$this->is_cutted_point = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 5; // 5 = ObservationPhotoDorsalLeftPeer::NUM_COLUMNS - ObservationPhotoDorsalLeftPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ObservationPhotoDorsalLeft object", $e);
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

		if ($this->aObservationPhoto !== null && $this->photo_id !== $this->aObservationPhoto->getId()) {
			$this->aObservationPhoto = null;
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
			$con = Propel::getConnection(ObservationPhotoDorsalLeftPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ObservationPhotoDorsalLeftPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aObservationPhoto = null;
			$this->collObservationPhotoDorsalLeftMarks = null;

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
			$con = Propel::getConnection(ObservationPhotoDorsalLeftPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseObservationPhotoDorsalLeft:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				ObservationPhotoDorsalLeftQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseObservationPhotoDorsalLeft:delete:post') as $callable)
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
			$con = Propel::getConnection(ObservationPhotoDorsalLeftPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseObservationPhotoDorsalLeft:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
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
				foreach (sfMixer::getCallables('BaseObservationPhotoDorsalLeft:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				ObservationPhotoDorsalLeftPeer::addInstanceToPool($this);
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

			if ($this->aObservationPhoto !== null) {
				if ($this->aObservationPhoto->isModified() || $this->aObservationPhoto->isNew()) {
					$affectedRows += $this->aObservationPhoto->save($con);
				}
				$this->setObservationPhoto($this->aObservationPhoto);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ObservationPhotoDorsalLeftPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ObservationPhotoDorsalLeftPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ObservationPhotoDorsalLeftPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += ObservationPhotoDorsalLeftPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collObservationPhotoDorsalLeftMarks !== null) {
				foreach ($this->collObservationPhotoDorsalLeftMarks as $referrerFK) {
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

			if ($this->aObservationPhoto !== null) {
				if (!$this->aObservationPhoto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aObservationPhoto->getValidationFailures());
				}
			}


			if (($retval = ObservationPhotoDorsalLeftPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collObservationPhotoDorsalLeftMarks !== null) {
					foreach ($this->collObservationPhotoDorsalLeftMarks as $referrerFK) {
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
		$pos = ObservationPhotoDorsalLeftPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getPhotoId();
				break;
			case 2:
				return $this->getIsSmooth();
				break;
			case 3:
				return $this->getIsIrregular();
				break;
			case 4:
				return $this->getIsCuttedPoint();
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
		$keys = ObservationPhotoDorsalLeftPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPhotoId(),
			$keys[2] => $this->getIsSmooth(),
			$keys[3] => $this->getIsIrregular(),
			$keys[4] => $this->getIsCuttedPoint(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aObservationPhoto) {
				$result['ObservationPhoto'] = $this->aObservationPhoto->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = ObservationPhotoDorsalLeftPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setPhotoId($value);
				break;
			case 2:
				$this->setIsSmooth($value);
				break;
			case 3:
				$this->setIsIrregular($value);
				break;
			case 4:
				$this->setIsCuttedPoint($value);
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
		$keys = ObservationPhotoDorsalLeftPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPhotoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIsSmooth($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setIsIrregular($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIsCuttedPoint($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ObservationPhotoDorsalLeftPeer::DATABASE_NAME);

		if ($this->isColumnModified(ObservationPhotoDorsalLeftPeer::ID)) $criteria->add(ObservationPhotoDorsalLeftPeer::ID, $this->id);
		if ($this->isColumnModified(ObservationPhotoDorsalLeftPeer::PHOTO_ID)) $criteria->add(ObservationPhotoDorsalLeftPeer::PHOTO_ID, $this->photo_id);
		if ($this->isColumnModified(ObservationPhotoDorsalLeftPeer::IS_SMOOTH)) $criteria->add(ObservationPhotoDorsalLeftPeer::IS_SMOOTH, $this->is_smooth);
		if ($this->isColumnModified(ObservationPhotoDorsalLeftPeer::IS_IRREGULAR)) $criteria->add(ObservationPhotoDorsalLeftPeer::IS_IRREGULAR, $this->is_irregular);
		if ($this->isColumnModified(ObservationPhotoDorsalLeftPeer::IS_CUTTED_POINT)) $criteria->add(ObservationPhotoDorsalLeftPeer::IS_CUTTED_POINT, $this->is_cutted_point);

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
		$criteria = new Criteria(ObservationPhotoDorsalLeftPeer::DATABASE_NAME);
		$criteria->add(ObservationPhotoDorsalLeftPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of ObservationPhotoDorsalLeft (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setPhotoId($this->photo_id);
		$copyObj->setIsSmooth($this->is_smooth);
		$copyObj->setIsIrregular($this->is_irregular);
		$copyObj->setIsCuttedPoint($this->is_cutted_point);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getObservationPhotoDorsalLeftMarks() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhotoDorsalLeftMark($relObj->copy($deepCopy));
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
	 * @return     ObservationPhotoDorsalLeft Clone of current object.
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
	 * @return     ObservationPhotoDorsalLeftPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ObservationPhotoDorsalLeftPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a ObservationPhoto object.
	 *
	 * @param      ObservationPhoto $v
	 * @return     ObservationPhotoDorsalLeft The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setObservationPhoto(ObservationPhoto $v = null)
	{
		if ($v === null) {
			$this->setPhotoId(NULL);
		} else {
			$this->setPhotoId($v->getId());
		}

		$this->aObservationPhoto = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the ObservationPhoto object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhotoDorsalLeft($this);
		}

		return $this;
	}


	/**
	 * Get the associated ObservationPhoto object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     ObservationPhoto The associated ObservationPhoto object.
	 * @throws     PropelException
	 */
	public function getObservationPhoto(PropelPDO $con = null)
	{
		if ($this->aObservationPhoto === null && ($this->photo_id !== null)) {
			$this->aObservationPhoto = ObservationPhotoQuery::create()->findPk($this->photo_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aObservationPhoto->addObservationPhotoDorsalLefts($this);
			 */
		}
		return $this->aObservationPhoto;
	}

	/**
	 * Clears out the collObservationPhotoDorsalLeftMarks collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotoDorsalLeftMarks()
	 */
	public function clearObservationPhotoDorsalLeftMarks()
	{
		$this->collObservationPhotoDorsalLeftMarks = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotoDorsalLeftMarks collection.
	 *
	 * By default this just sets the collObservationPhotoDorsalLeftMarks collection to an empty array (like clearcollObservationPhotoDorsalLeftMarks());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotoDorsalLeftMarks()
	{
		$this->collObservationPhotoDorsalLeftMarks = new PropelObjectCollection();
		$this->collObservationPhotoDorsalLeftMarks->setModel('ObservationPhotoDorsalLeftMark');
	}

	/**
	 * Gets an array of ObservationPhotoDorsalLeftMark objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this ObservationPhotoDorsalLeft is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhotoDorsalLeftMark[] List of ObservationPhotoDorsalLeftMark objects
	 * @throws     PropelException
	 */
	public function getObservationPhotoDorsalLeftMarks($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoDorsalLeftMarks || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoDorsalLeftMarks) {
				// return empty collection
				$this->initObservationPhotoDorsalLeftMarks();
			} else {
				$collObservationPhotoDorsalLeftMarks = ObservationPhotoDorsalLeftMarkQuery::create(null, $criteria)
					->filterByObservationPhotoDorsalLeft($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotoDorsalLeftMarks;
				}
				$this->collObservationPhotoDorsalLeftMarks = $collObservationPhotoDorsalLeftMarks;
			}
		}
		return $this->collObservationPhotoDorsalLeftMarks;
	}

	/**
	 * Returns the number of related ObservationPhotoDorsalLeftMark objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhotoDorsalLeftMark objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotoDorsalLeftMarks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoDorsalLeftMarks || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoDorsalLeftMarks) {
				return 0;
			} else {
				$query = ObservationPhotoDorsalLeftMarkQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByObservationPhotoDorsalLeft($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotoDorsalLeftMarks);
		}
	}

	/**
	 * Method called to associate a ObservationPhotoDorsalLeftMark object to this object
	 * through the ObservationPhotoDorsalLeftMark foreign key attribute.
	 *
	 * @param      ObservationPhotoDorsalLeftMark $l ObservationPhotoDorsalLeftMark
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhotoDorsalLeftMark(ObservationPhotoDorsalLeftMark $l)
	{
		if ($this->collObservationPhotoDorsalLeftMarks === null) {
			$this->initObservationPhotoDorsalLeftMarks();
		}
		if (!$this->collObservationPhotoDorsalLeftMarks->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotoDorsalLeftMarks[]= $l;
			$l->setObservationPhotoDorsalLeft($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this ObservationPhotoDorsalLeft is new, it will return
	 * an empty collection; or if this ObservationPhotoDorsalLeft has previously
	 * been saved, it will retrieve related ObservationPhotoDorsalLeftMarks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in ObservationPhotoDorsalLeft.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhotoDorsalLeftMark[] List of ObservationPhotoDorsalLeftMark objects
	 */
	public function getObservationPhotoDorsalLeftMarksJoinPatternCellDorsalLeftRelatedByPatternCellDorsalLeftId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoDorsalLeftMarkQuery::create(null, $criteria);
		$query->joinWith('PatternCellDorsalLeftRelatedByPatternCellDorsalLeftId', $join_behavior);

		return $this->getObservationPhotoDorsalLeftMarks($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this ObservationPhotoDorsalLeft is new, it will return
	 * an empty collection; or if this ObservationPhotoDorsalLeft has previously
	 * been saved, it will retrieve related ObservationPhotoDorsalLeftMarks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in ObservationPhotoDorsalLeft.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhotoDorsalLeftMark[] List of ObservationPhotoDorsalLeftMark objects
	 */
	public function getObservationPhotoDorsalLeftMarksJoinPatternCellDorsalLeftRelatedByToCellId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoDorsalLeftMarkQuery::create(null, $criteria);
		$query->joinWith('PatternCellDorsalLeftRelatedByToCellId', $join_behavior);

		return $this->getObservationPhotoDorsalLeftMarks($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->photo_id = null;
		$this->is_smooth = null;
		$this->is_irregular = null;
		$this->is_cutted_point = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
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
			if ($this->collObservationPhotoDorsalLeftMarks) {
				foreach ((array) $this->collObservationPhotoDorsalLeftMarks as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collObservationPhotoDorsalLeftMarks = null;
		$this->aObservationPhoto = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseObservationPhotoDorsalLeft:' . $name))
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

} // BaseObservationPhotoDorsalLeft
