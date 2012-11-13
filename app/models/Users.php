<?php

namespace app\models;

class Users extends \lithium\data\Model {

	public function fullName($entity) {
		return $entity->fname . ' ' . $entity->lname;
	}

}