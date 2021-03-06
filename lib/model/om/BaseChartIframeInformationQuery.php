<?php


/**
 * Base class that represents a query for the 'chart_iframe_information' table.
 *
 * 
 *
 * @method     ChartIframeInformationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChartIframeInformationQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     ChartIframeInformationQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method     ChartIframeInformationQuery orderByGraphType($order = Criteria::ASC) Order by the graph_type column
 * @method     ChartIframeInformationQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method     ChartIframeInformationQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method     ChartIframeInformationQuery orderByChartItem($order = Criteria::ASC) Order by the chart_item column
 * @method     ChartIframeInformationQuery orderByChartType($order = Criteria::ASC) Order by the chart_type column
 * @method     ChartIframeInformationQuery orderBySelected($order = Criteria::ASC) Order by the selected column
 *
 * @method     ChartIframeInformationQuery groupById() Group by the id column
 * @method     ChartIframeInformationQuery groupByCompanyId() Group by the company_id column
 * @method     ChartIframeInformationQuery groupByHash() Group by the hash column
 * @method     ChartIframeInformationQuery groupByGraphType() Group by the graph_type column
 * @method     ChartIframeInformationQuery groupByYear() Group by the year column
 * @method     ChartIframeInformationQuery groupByMonth() Group by the month column
 * @method     ChartIframeInformationQuery groupByChartItem() Group by the chart_item column
 * @method     ChartIframeInformationQuery groupByChartType() Group by the chart_type column
 * @method     ChartIframeInformationQuery groupBySelected() Group by the selected column
 *
 * @method     ChartIframeInformationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChartIframeInformationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChartIframeInformationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChartIframeInformationQuery leftJoinCompany($relationAlias = null) Adds a LEFT JOIN clause to the query using the Company relation
 * @method     ChartIframeInformationQuery rightJoinCompany($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Company relation
 * @method     ChartIframeInformationQuery innerJoinCompany($relationAlias = null) Adds a INNER JOIN clause to the query using the Company relation
 *
 * @method     ChartIframeInformation findOne(PropelPDO $con = null) Return the first ChartIframeInformation matching the query
 * @method     ChartIframeInformation findOneOrCreate(PropelPDO $con = null) Return the first ChartIframeInformation matching the query, or a new ChartIframeInformation object populated from the query conditions when no match is found
 *
 * @method     ChartIframeInformation findOneById(int $id) Return the first ChartIframeInformation filtered by the id column
 * @method     ChartIframeInformation findOneByCompanyId(int $company_id) Return the first ChartIframeInformation filtered by the company_id column
 * @method     ChartIframeInformation findOneByHash(string $hash) Return the first ChartIframeInformation filtered by the hash column
 * @method     ChartIframeInformation findOneByGraphType(string $graph_type) Return the first ChartIframeInformation filtered by the graph_type column
 * @method     ChartIframeInformation findOneByYear(int $year) Return the first ChartIframeInformation filtered by the year column
 * @method     ChartIframeInformation findOneByMonth(int $month) Return the first ChartIframeInformation filtered by the month column
 * @method     ChartIframeInformation findOneByChartItem(string $chart_item) Return the first ChartIframeInformation filtered by the chart_item column
 * @method     ChartIframeInformation findOneByChartType(string $chart_type) Return the first ChartIframeInformation filtered by the chart_type column
 * @method     ChartIframeInformation findOneBySelected(string $selected) Return the first ChartIframeInformation filtered by the selected column
 *
 * @method     array findById(int $id) Return ChartIframeInformation objects filtered by the id column
 * @method     array findByCompanyId(int $company_id) Return ChartIframeInformation objects filtered by the company_id column
 * @method     array findByHash(string $hash) Return ChartIframeInformation objects filtered by the hash column
 * @method     array findByGraphType(string $graph_type) Return ChartIframeInformation objects filtered by the graph_type column
 * @method     array findByYear(int $year) Return ChartIframeInformation objects filtered by the year column
 * @method     array findByMonth(int $month) Return ChartIframeInformation objects filtered by the month column
 * @method     array findByChartItem(string $chart_item) Return ChartIframeInformation objects filtered by the chart_item column
 * @method     array findByChartType(string $chart_type) Return ChartIframeInformation objects filtered by the chart_type column
 * @method     array findBySelected(string $selected) Return ChartIframeInformation objects filtered by the selected column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseChartIframeInformationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseChartIframeInformationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'ChartIframeInformation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ChartIframeInformationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ChartIframeInformationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ChartIframeInformationQuery) {
			return $criteria;
		}
		$query = new ChartIframeInformationQuery();
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
	 * @return    ChartIframeInformation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ChartIframeInformationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ChartIframeInformationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ChartIframeInformationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the company_id column
	 * 
	 * @param     int|array $companyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByCompanyId($companyId = null, $comparison = null)
	{
		if (is_array($companyId)) {
			$useMinMax = false;
			if (isset($companyId['min'])) {
				$this->addUsingAlias(ChartIframeInformationPeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($companyId['max'])) {
				$this->addUsingAlias(ChartIframeInformationPeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::COMPANY_ID, $companyId, $comparison);
	}

	/**
	 * Filter the query on the hash column
	 * 
	 * @param     string $hash The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByHash($hash = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hash)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hash)) {
				$hash = str_replace('*', '%', $hash);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::HASH, $hash, $comparison);
	}

	/**
	 * Filter the query on the graph_type column
	 * 
	 * @param     string $graphType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByGraphType($graphType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($graphType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $graphType)) {
				$graphType = str_replace('*', '%', $graphType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::GRAPH_TYPE, $graphType, $comparison);
	}

	/**
	 * Filter the query on the year column
	 * 
	 * @param     int|array $year The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByYear($year = null, $comparison = null)
	{
		if (is_array($year)) {
			$useMinMax = false;
			if (isset($year['min'])) {
				$this->addUsingAlias(ChartIframeInformationPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($year['max'])) {
				$this->addUsingAlias(ChartIframeInformationPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::YEAR, $year, $comparison);
	}

	/**
	 * Filter the query on the month column
	 * 
	 * @param     int|array $month The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByMonth($month = null, $comparison = null)
	{
		if (is_array($month)) {
			$useMinMax = false;
			if (isset($month['min'])) {
				$this->addUsingAlias(ChartIframeInformationPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($month['max'])) {
				$this->addUsingAlias(ChartIframeInformationPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::MONTH, $month, $comparison);
	}

	/**
	 * Filter the query on the chart_item column
	 * 
	 * @param     string $chartItem The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByChartItem($chartItem = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($chartItem)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $chartItem)) {
				$chartItem = str_replace('*', '%', $chartItem);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::CHART_ITEM, $chartItem, $comparison);
	}

	/**
	 * Filter the query on the chart_type column
	 * 
	 * @param     string $chartType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByChartType($chartType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($chartType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $chartType)) {
				$chartType = str_replace('*', '%', $chartType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::CHART_TYPE, $chartType, $comparison);
	}

	/**
	 * Filter the query on the selected column
	 * 
	 * @param     string $selected The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterBySelected($selected = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($selected)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $selected)) {
				$selected = str_replace('*', '%', $selected);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartIframeInformationPeer::SELECTED, $selected, $comparison);
	}

	/**
	 * Filter the query by a related Company object
	 *
	 * @param     Company $company  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function filterByCompany($company, $comparison = null)
	{
		return $this
			->addUsingAlias(ChartIframeInformationPeer::COMPANY_ID, $company->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Company relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function joinCompany($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Company');
		
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
			$this->addJoinObject($join, 'Company');
		}
		
		return $this;
	}

	/**
	 * Use the Company relation Company object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCompany($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ChartIframeInformation $chartIframeInformation Object to remove from the list of results
	 *
	 * @return    ChartIframeInformationQuery The current query, for fluid interface
	 */
	public function prune($chartIframeInformation = null)
	{
		if ($chartIframeInformation) {
			$this->addUsingAlias(ChartIframeInformationPeer::ID, $chartIframeInformation->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseChartIframeInformationQuery
