<?php


/**
 * Base class that represents a query for the 'photo' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Jan 25 14:54:00 2011
 *
 * @method     PhotoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PhotoQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     PhotoQuery orderByAlbumId($order = Criteria::ASC) Order by the album_id column
 * @method     PhotoQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     PhotoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     PhotoQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     PhotoQuery groupById() Group by the id column
 * @method     PhotoQuery groupBySlug() Group by the slug column
 * @method     PhotoQuery groupByAlbumId() Group by the album_id column
 * @method     PhotoQuery groupByImage() Group by the image column
 * @method     PhotoQuery groupByCreatedAt() Group by the created_at column
 * @method     PhotoQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Photo findOne(PropelPDO $con = null) Return the first Photo matching the query
 * @method     Photo findOneById(int $id) Return the first Photo filtered by the id column
 * @method     Photo findOneBySlug(string $slug) Return the first Photo filtered by the slug column
 * @method     Photo findOneByAlbumId(int $album_id) Return the first Photo filtered by the album_id column
 * @method     Photo findOneByImage(string $image) Return the first Photo filtered by the image column
 * @method     Photo findOneByCreatedAt(string $created_at) Return the first Photo filtered by the created_at column
 * @method     Photo findOneByUpdatedAt(string $updated_at) Return the first Photo filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Photo objects filtered by the id column
 * @method     array findBySlug(string $slug) Return Photo objects filtered by the slug column
 * @method     array findByAlbumId(int $album_id) Return Photo objects filtered by the album_id column
 * @method     array findByImage(string $image) Return Photo objects filtered by the image column
 * @method     array findByCreatedAt(string $created_at) Return Photo objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Photo objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePhotoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePhotoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Photo', $modelAlias = null)
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
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = PhotoPeer::getInstanceFromPool((string) $key)))) {
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
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PhotoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PhotoPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(PhotoPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(PhotoPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterBySlug($slug = null)
	{
		if(preg_match('/[\%\*]/', $slug)) {
			return $this->addUsingAlias(PhotoPeer::SLUG, str_replace('*', '%', $slug), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(PhotoPeer::SLUG, $slug, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the album_id column
	 * 
	 * @param     int|array $album_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByAlbumId($albumId = null)
	{
		if (is_array($albumId)) {
			if (array_values($albumId) === $albumId) {
				return $this->addUsingAlias(PhotoPeer::ALBUM_ID, $albumId, Criteria::IN);
			} else {
				if (isset($albumId['min'])) {
					$this->addUsingAlias(PhotoPeer::ALBUM_ID, $albumId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($albumId['max'])) {
					$this->addUsingAlias(PhotoPeer::ALBUM_ID, $albumId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(PhotoPeer::ALBUM_ID, $albumId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null)
	{
		if(preg_match('/[\%\*]/', $image)) {
			return $this->addUsingAlias(PhotoPeer::IMAGE, str_replace('*', '%', $image), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(PhotoPeer::IMAGE, $image, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(PhotoPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(PhotoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(PhotoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(PhotoPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(PhotoPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(PhotoPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(PhotoPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(PhotoPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Album object
	 *
	 * @param     Album $album  the related object to use as filter
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByAlbum($album)
	{
		return $this
			->addUsingAlias(PhotoPeer::ALBUM_ID, $album->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Album relation Album object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AlbumQuery A secondary query class using the current class as primary query
	 */
	public function useAlbumQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Album' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Album', 'AlbumQuery');
	}

	/**
	 * Filter the query by a related PhotoI18n object
	 *
	 * @param     PhotoI18n $photoI18n  the related object to use as filter
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function filterByPhotoI18n($photoI18n)
	{
		return $this
			->addUsingAlias(PhotoPeer::ID, $photoI18n->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the PhotoI18n relation PhotoI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PhotoI18nQuery A secondary query class using the current class as primary query
	 */
	public function usePhotoI18nQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('PhotoI18n' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PhotoI18n', 'PhotoI18nQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Photo $photo Object to remove from the list of results
	 *
	 * @return    PhotoQuery The current query, for fluid interface
	 */
	public function prune($photo = null)
	{
		if ($photo) {
			$this->addUsingAlias(PhotoPeer::ID, $photo->getId(), Criteria::NOT_EQUAL);
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

} // BasePhotoQuery
