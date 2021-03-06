<?php


/**
 * Skeleton subclass for performing query and update operations on the 'company_user' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Mar  2 18:57:13 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class CompanyUserQuery extends BaseCompanyUserQuery {

	/**
	 * Returns a new CompanyUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CompanyUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CompanyUserQuery) {
			return $criteria;
		}
		$query = new self();
		if (null !== $modelAlias) {
			$query->setModelalias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // CompanyUserQuery
