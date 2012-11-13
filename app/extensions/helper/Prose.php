<?php

namespace app\extensions\helper;

use lithium\template\Helper;

class Prose extends Helper {
	public function starStatement($rating) {
		if(!is_numeric($rating)) {
			// Numeric exception
			throw new \InvalidArgumentException('First argument \$rating must be numeric.');
		}

		$rating = round($rating, 0);
		if($rating > 5 || $rating < 1) {
			// Range exception
			throw new \RangeException('First argument \$rating should be between 1 and 5');
		}

		// Logic
		switch($rating) {
			case 5:
				return 'Amazing';
			case 4:
				return 'Great';
			case 3:
				return 'Average';
			case 2:
				return 'Meh';
			case 1:
			default:
				return 'Horrible';
		}
	}
}