<?php

namespace app\tests\mocks\template\view;

use lithium\template\view\Renderer;

class MockRenderer extends Renderer {

	/**
	 * These configuration variables will automatically be assigned to their corresponding protected
	 * properties when the object is initialized.
	 *
	 * @var array
	 */
	protected $_autoConfig = array(
		'request', 'response', 'context', 'strings', 'handlers', 'view', 'classes' => 'merge', 'data'
	);

	/**
	 * Don't actually render anyting.
	 * Follows the prototype in it's parent
	 */
	public function render($template, $data = array(), array $options = array()) {
	}
}