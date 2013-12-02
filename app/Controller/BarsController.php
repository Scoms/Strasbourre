<?php

class BarsController extends AppController{

	var $uses = array('Beverage','Bar','BeverageCategory');

	public function display($id){
		$bar = $this->Bar->find('first',array(
			'conditions' => array('id'=>$id),
			'recursive' => 2
		));

		$this->set('data',$bar);
		$this->layout = null ;
	}
}

?>