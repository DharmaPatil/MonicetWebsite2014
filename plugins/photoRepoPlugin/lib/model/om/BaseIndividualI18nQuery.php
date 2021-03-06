<?php


/**
 * Base class that represents a query for the 'individual_i18n' table.
 *
 * 
 *
 * @method     IndividualI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     IndividualI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 * @method     IndividualI18nQuery orderByDescription1($order = Criteria::ASC) Order by the description1 column
 * @method     IndividualI18nQuery orderByDescription2($order = Criteria::ASC) Order by the description2 column
 * @method     IndividualI18nQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 *
 * @method     IndividualI18nQuery groupById() Group by the id column
 * @method     IndividualI18nQuery groupByCulture() Group by the culture column
 * @method     IndividualI18nQuery groupByDescription1() Group by the description1 column
 * @method     IndividualI18nQuery groupByDescription2() Group by the description2 column
 * @method     IndividualI18nQuery groupByNotes() Group by the notes column
 *
 * @method     IndividualI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     IndividualI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     IndividualI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     IndividualI18nQuery leftJoinIndividual($relationAlias = null) Adds a LEFT JOIN clause to the query using the Individual relation
 * @method     IndividualI18nQuery rightJoinIndividual($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Individual relation
 * @method     IndividualI18nQuery innerJoinIndividual($relationAlias = null) Adds a INNER JOIN clause to the query using the Individual relation
 *
 * @method     IndividualI18n findOne(PropelPDO $con = null) Return the first IndividualI18n matching the query
 * @method     IndividualI18n findOneOrCreate(PropelPDO $con = null) Return the first IndividualI18n matching the query, or a new IndividualI18n object populated from the query conditions when no match is found
 *
 * @method     IndividualI18n findOneById(int $id) Return the first IndividualI18n filtered by the id column
 * @method     IndividualI18n findOneByCulture(string $culture) Return the first IndividualI18n filtered by the culture column
 * @method     IndividualI18n findOneByDescription1(string $description1) Return the first IndividualI18n filtered by the description1 column
 * @method     IndividualI18n findOneByDescription2(string $description2) Return the first IndividualI18n filtered by the description2 column
 * @method     IndividualI18n findOneByNotes(string $notes) Return the first IndividualI18n filtered by the notes column
 *
 * @method     array findById(int $id) Return IndividualI18n objects filtered by the id column
 * @method     array findByCulture(string $culture) Return IndividualI18n objects filtered by the culture column
 * @method     array findByDescription1(string $description1) Return IndividualI18n objects filtered by the description1 column
 * @method     array findByDescription2(string $description2) Return IndividualI18n objects filtered by the description2 column
 * @method     array findByNotes(string $notes) Return IndividualI18n objects filtered by the notes column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseIndividualI18nQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseIndividualI18nQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'IndividualI18n', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new IndividualI18nQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    IndividualI18nQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof IndividualI18nQuery) {
			return $criteria;
		}
		$query = new IndividualI18nQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$id, $culture] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    IndividualI18n|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = IndividualI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(IndividualI18nPeer::ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(IndividualI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(IndividualI18nPeer::ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(IndividualI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
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
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(IndividualI18nPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the culture column
	 * 
	 * @param     string $culture The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByCulture($culture = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($culture)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $culture)) {
				$culture = str_replace('*', '%', $culture);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(IndividualI18nPeer::CULTURE, $culture, $comparison);
	}

	/**
	 * Filter the query on the description1 column
	 * 
	 * @param     string $description1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByDescription1($description1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description1)) {
				$description1 = str_replace('*', '%', $description1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(IndividualI18nPeer::DESCRIPTION1, $description1, $comparison);
	}

	/**
	 * Filter the query on the description2 column
	 * 
	 * @param     string $description2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByDescription2($description2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description2)) {
				$description2 = str_replace('*', '%', $description2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(IndividualI18nPeer::DESCRIPTION2, $description2, $comparison);
	}

	/**
	 * Filter the query on the notes column
	 * 
	 * @param     string $notes The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByNotes($notes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notes)) {
				$notes = str_replace('*', '%', $notes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(IndividualI18nPeer::NOTES, $notes, $comparison);
	}

	/**
	 * Filter the query by a related Individual object
	 *
	 * @param     Individual $individual  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function filterByIndividual($individual, $comparison = null)
	{
		return $this
			->addUsingAlias(IndividualI18nPeer::ID, $individual->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Individual relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function joinIndividual($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Individual');
		
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
			$this->addJoinObject($join, 'Individual');
		}
		
		return $this;
	}

	/**
	 * Use the Individual relation Individual object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    IndividualQuery A secondary query class using the current class as primary query
	 */
	public function useIndividualQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinIndividual($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Individual', 'IndividualQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     IndividualI18n $individualI18n Object to remove from the list of results
	 *
	 * @return    IndividualI18nQuery The current query, for fluid interface
	 */
	public function prune($individualI18n = null)
	{
		if ($individualI18n) {
			$this->addCond('pruneCond0', $this->getAliasedColName(IndividualI18nPeer::ID), $individualI18n->getId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(IndividualI18nPeer::CULTURE), $individualI18n->getCulture(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseIndividualI18nQuery
