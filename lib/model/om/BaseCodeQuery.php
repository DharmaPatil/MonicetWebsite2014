<?php


/**
 * Base class that represents a query for the 'code' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Oct 28 19:07:00 2011
 *
 * @method     CodeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CodeQuery orderByAcronym($order = Criteria::ASC) Order by the acronym column
 * @method     CodeQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CodeQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CodeQuery groupById() Group by the id column
 * @method     CodeQuery groupByAcronym() Group by the acronym column
 * @method     CodeQuery groupByCreatedAt() Group by the created_at column
 * @method     CodeQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Code findOne(PropelPDO $con = null) Return the first Code matching the query
 * @method     Code findOneById(int $id) Return the first Code filtered by the id column
 * @method     Code findOneByAcronym(string $acronym) Return the first Code filtered by the acronym column
 * @method     Code findOneByCreatedAt(string $created_at) Return the first Code filtered by the created_at column
 * @method     Code findOneByUpdatedAt(string $updated_at) Return the first Code filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Code objects filtered by the id column
 * @method     array findByAcronym(string $acronym) Return Code objects filtered by the acronym column
 * @method     array findByCreatedAt(string $created_at) Return Code objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Code objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCodeQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCodeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Code', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = CodePeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CodePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CodePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(CodePeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(CodePeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the acronym column
	 * 
	 * @param     string $acronym The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByAcronym($acronym = null)
	{
		if(preg_match('/[\%\*]/', $acronym)) {
			return $this->addUsingAlias(CodePeer::ACRONYM, str_replace('*', '%', $acronym), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(CodePeer::ACRONYM, $acronym, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(CodePeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(CodePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(CodePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(CodePeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(CodePeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(CodePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(CodePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(CodePeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related CodeI18n object
	 *
	 * @param     CodeI18n $codeI18n  the related object to use as filter
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByCodeI18n($codeI18n)
	{
		return $this
			->addUsingAlias(CodePeer::ID, $codeI18n->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the CodeI18n relation CodeI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CodeI18nQuery A secondary query class using the current class as primary query
	 */
	public function useCodeI18nQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('CodeI18n' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CodeI18n', 'CodeI18nQuery');
	}

	/**
	 * Filter the query by a related Record object
	 *
	 * @param     Record $record  the related object to use as filter
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function filterByRecord($record)
	{
		return $this
			->addUsingAlias(CodePeer::ID, $record->getCodeId(), Criteria::EQUAL);
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
	 * Exclude object from result
	 *
	 * @param     Code $code Object to remove from the list of results
	 *
	 * @return    CodeQuery The current query, for fluid interface
	 */
	public function prune($code = null)
	{
		if ($code) {
			$this->addUsingAlias(CodePeer::ID, $code->getId(), Criteria::NOT_EQUAL);
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

} // BaseCodeQuery
