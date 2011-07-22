<?php


/**
 * Base class that represents a query for the 'visibility_i18n' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Apr 15 10:09:32 2011
 *
 * @method     VisibilityI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VisibilityI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 * @method     VisibilityI18nQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     VisibilityI18nQuery groupById() Group by the id column
 * @method     VisibilityI18nQuery groupByCulture() Group by the culture column
 * @method     VisibilityI18nQuery groupByDescription() Group by the description column
 *
 * @method     VisibilityI18n findOne(PropelPDO $con = null) Return the first VisibilityI18n matching the query
 * @method     VisibilityI18n findOneById(int $id) Return the first VisibilityI18n filtered by the id column
 * @method     VisibilityI18n findOneByCulture(string $culture) Return the first VisibilityI18n filtered by the culture column
 * @method     VisibilityI18n findOneByDescription(string $description) Return the first VisibilityI18n filtered by the description column
 *
 * @method     array findById(int $id) Return VisibilityI18n objects filtered by the id column
 * @method     array findByCulture(string $culture) Return VisibilityI18n objects filtered by the culture column
 * @method     array findByDescription(string $description) Return VisibilityI18n objects filtered by the description column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVisibilityI18nQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVisibilityI18nQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'VisibilityI18n', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Find object by primary key
	 * <code>
	 * $obj = $c->findPk(array(34, 634), $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = VisibilityI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1])))))) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(VisibilityI18nPeer::ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(VisibilityI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(VisibilityI18nPeer::ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(VisibilityI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(VisibilityI18nPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(VisibilityI18nPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the culture column
	 * 
	 * @param     string $culture The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function filterByCulture($culture = null)
	{
		if(preg_match('/[\%\*]/', $culture)) {
			return $this->addUsingAlias(VisibilityI18nPeer::CULTURE, str_replace('*', '%', $culture), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(VisibilityI18nPeer::CULTURE, $culture, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null)
	{
		if(preg_match('/[\%\*]/', $description)) {
			return $this->addUsingAlias(VisibilityI18nPeer::DESCRIPTION, str_replace('*', '%', $description), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(VisibilityI18nPeer::DESCRIPTION, $description, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Visibility object
	 *
	 * @param     Visibility $visibility  the related object to use as filter
	 *
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility)
	{
		return $this
			->addUsingAlias(VisibilityI18nPeer::ID, $visibility->getId(), Criteria::EQUAL);
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
	 * Exclude object from result
	 *
	 * @param     VisibilityI18n $visibilityI18n Object to remove from the list of results
	 *
	 * @return    VisibilityI18nQuery The current query, for fluid interface
	 */
	public function prune($visibilityI18n = null)
	{
		if ($visibilityI18n) {
			$this->addCond('pruneCond0', $this->getAliasedColName(VisibilityI18nPeer::ID), $visibilityI18n->getId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(VisibilityI18nPeer::CULTURE), $visibilityI18n->getCulture(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
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

} // BaseVisibilityI18nQuery
