<?php

namespace app\tests\cases\models;

use \app\extensions\test\ModelUnit;

class UsersTest extends ModelUnit {

	public static $model = 'app\\models\\Users';

	public static $defaultData = array(
		'id' => '10',
		'fname' => 'Blaine',
		'lname' => 'Smith',
	);

	public function testName() {
		$user = self::create(array(
			'fname' => 'Blaine',
			'lname' => 'Schmeisser',
		));
		$expected = 'Blaine Schmeisser';
		$this->assertEqual($expected, $user->fullName());
	}

}