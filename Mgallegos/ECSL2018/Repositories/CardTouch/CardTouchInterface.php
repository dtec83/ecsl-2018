<?php
/**
 * @file
 * Description of the script.
 *
 * All ModuleName code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Repositories\CardTouch;

interface CardTouchInterface {

	/**
	* Get table name
	*
	* @return string
	*/
	public function getTable();

	/**
	* Get an account by ID
	*
	* @param  int $id
	*
	* @return Vendor\DecimaModule\CardTouch
	*/
	public function byId($id, $databaseConnectionName = null);

	/**
   * Retrieve ... by organization
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function byOrganization($id, $databaseConnectionName = null);

	/**
   * Create a new ...
   *
   * @param array $data
   * 	An array as follows: array('field0'=>$field0, 'field1'=>$field1
   *                            );
   *
   * @return boolean
   */
	public function create(array $data, $databaseConnectionName = null);

	/**
   * Update an existing ...
   *
   * @param array $data
   * 	An array as follows: array('field0'=>$field0, 'field1'=>$field1
   *                            );
   *
   * @param Mgallegos\ECSL2018\CardTouch $CardTouch
   *
   * @return boolean
   */
	public function update(array $data, $CardTouch = null, $databaseConnectionName = null);

	/**
   * Delete existing ... (soft delete)
   *
   * @param array $data
   * 	An array as follows: array($id0, $id1,…);
   * @return boolean
   */
  public function delete(array $data, $databaseConnectionName = null);


}
