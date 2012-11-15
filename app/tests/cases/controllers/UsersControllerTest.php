<?php

namespace app\tests\cases\controllers;

use li3_unit\test\ControllerUnit;

class UsersControllerTest extends ControllerUnit {

	protected static $controller = 'app\\controllers\\UsersController';

	public function testSomething() {
		$data = self::call('profile', array(
			'params' => array(
				'name' => 'Blaine',
			)
		));

		$user = $data['user'];

		$this->assertEqual('Blaine', $user->username);
	}

}