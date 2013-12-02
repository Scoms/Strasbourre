<?php

App::import('model', 'Beverage');

class Bar extends AppModel{
	public $id;
	public $lat;
	public $lgt;
	public $name;

	public $hasAndBelongsToMany = array(
		'Beverage' => array(
			'classname' => 'Beverage',
			'order' => 'Beverage.beverage_category_id'
			)
		);
}

?>