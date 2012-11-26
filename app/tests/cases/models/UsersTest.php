<?php

namespace app\tests\cases\models;

use li3_unit\test\ModelUnit;

class UsersTest extends ModelUnit {

	public $model = 'app\\models\\Users';

	public $defaultData = array(
		'id' => '10',
		'fname' => 'Blaine',
		'lname' => 'Smith',
	);

	public function testName() {
		$user = $this->create(array(
			'fname' => 'Blaine',
			'lname' => 'Schmeisser',
		));
		$expected = 'Blaine Schmeisser';
		$this->assertEqual($expected, $user->fullName());
	}

}