<?php


/**
 * Skeleton subclass for performing query and update operations on the 'sf_guard_user_permission' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Sat Feb 27 20:04:41 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model
 */
class sfGuardUserPermissionQuery extends BasesfGuardUserPermissionQuery {

	/**
	 * Returns a new sfGuardUserPermissionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardUserPermissionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardUserPermissionQuery) {
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

} // sfGuardUserPermissionQuery
