<?php


/**
 * Skeleton subclass for performing query and update operations on the 'mf_formulario_utilizador' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Thu Feb 25 16:32:06 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.mfFormularioPlugin.lib.model
 */
class mfFormularioUtilizadorQuery extends BasemfFormularioUtilizadorQuery {

	/**
	 * Returns a new mfFormularioUtilizadorQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    mfFormularioUtilizadorQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof mfFormularioUtilizadorQuery) {
			return $criteria;
		}
		$query = new self('propel', 'mfFormularioUtilizador', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // mfFormularioUtilizadorQuery
