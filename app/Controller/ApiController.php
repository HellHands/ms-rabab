<?php
App::uses('AppController', 'Controller');


class ApiController extends AppController {

	public $components = array('Acl', 'RequestHandler');

	public function index()
	{
		$this->layout="formlayout";
		$this->render('v1/index');
	}
}

?>