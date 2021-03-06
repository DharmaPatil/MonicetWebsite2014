<?php


/**
 * Skeleton subclass for performing query and update operations on the 'mf_menu' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Mon Feb 22 19:18:49 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.mfMenuPlugin.lib.model
 */
class mfMenuQuery extends BasemfMenuQuery {

	/**
	 * Returns a new mfMenuQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    mfMenuQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof mfMenuQuery) {
			return $criteria;
		}
		$query = new self('propel', 'mfMenu', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // mfMenuQuery
