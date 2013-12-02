<?php

class BeverageCategory extends AppModel{
	public $id;
	public $label;
	
	public $hasMany = array('Beverage');
}

?>