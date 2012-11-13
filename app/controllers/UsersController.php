<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

use lithium\data\entity\Record;

class UsersController extends \lithium\action\Controller {

	public function profile() {
		// query and params
		$params = $this->request->params;

		// Demo user
		$user = new Record(array(
			'data' => array(
				'id' => 10,
				'username' => $params['name'],
				'fname' => $params['name'],
				'lname' => 'Doe',
			),
		));

		// return
		return compact('user');
	}

}