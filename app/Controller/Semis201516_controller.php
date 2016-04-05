<?php 
class Semis201516Controller extends AppController
{
	var $uses = array('Semis201516');
	
	function index()
	{
		$schools = $this->Semis201516->find('all');
		$this->set(compact('schools', $schools));
		$this->layout = "defaultnew";
	}
}