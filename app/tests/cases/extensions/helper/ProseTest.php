<?php

namespace app\tests\cases\extensions\helper;

use li3_unit\test\HelperUnit;

class ProseTest extends HelperUnit {

	public $prose;

	public function setUp() {
		$this->prose = $this->create('Prose');
	}

	public function testFourEightStarStatement() {
		$expected = 'Amazing';
		$this->assertEqual($expected, $this->prose->starStatement(4.8));
	}

}