<?php

class Beverage extends AppModel{
	public $id;
	public $label;
	public $description;
	public $degree;
	public $beverage_category_id;

	public $belongsTo = array('BeverageCategory');
	public $hasManyAndBelongsToMany = array('Bar');
}

?>