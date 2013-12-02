<?php

class HomeController extends AppController{

	var $uses = array('Bar');	
	public $helpers = array('GoogleMap');

	public function index(){
		$bars = $this->Bar->find('all');

		$this->set('bars',$bars);
	}
}

?>