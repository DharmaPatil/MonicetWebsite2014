<?php


/**
 * Skeleton subclass for performing query and update operations on the 'profile_i18n' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Mar  9 10:02:21 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class ProfileI18nQuery extends BaseProfileI18nQuery {

	/**
	 * Returns a new ProfileI18nQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProfileI18nQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProfileI18nQuery) {
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

} // ProfileI18nQuery
