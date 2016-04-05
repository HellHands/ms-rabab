<?php
class UsersController extends AppController {
	var $components = array('Acl', 'Auth', 'Session');
	var $helpers = array('Html', 'Form', 'Session');
	var $name = 'Users';
	
	function beforeFilter() {
    
	    parent::beforeFilter(); 

		$usadmin = $this->Auth->user('superuser');
		$uname   = $this->Auth->user('username');
		
		if($usadmin == 1)
		{
			$this->set('superadmin',$usadmin);
			$this->set('uname',$uname);
		}

	    $this->Auth->allow(array('login','logout'));
		$this->layout = 'defaultnew';


		if ($this->Session->read('Auth.User'))
		{
			$this->set('logout','loggedin');
		}
	}
	
	function index() {
		
		$uname = $this->Auth->user('username');
		if($uname == 'admin')
		{
			$this->User->recursive = 0;
		$this->set('users', $this->User->find('all'));
		}else{
			$this->redirect('../home/index', null, false);
		}
	}
	
	function login()
	{

		
		if ($this->Session->read('Auth.User')) // check if Session is already set! 
		{
			$this->Session->setFlash('You are logged in!');
			$this->redirect('../home/index', null, false);
			
			$this->set('logout','loggedin');
		}else{
			//go to Users/login.ctp
			
		}
		

		if (isset($this->request->data['User']['username'])) 
		{
	        if ($this->Auth->login()) 
	        {	        	
				$this->Session->setFlash('You\'re logged in!');
				$this->redirect('../home/index', null, false);
				//$this->redirect($this->Auth->redirect());
	        }
	        
	        $this->Session->setFlash('Invalid username or password, try again!');
    	}
	
		/*if(isset($_POST['data']['User']['username'])) // If the session is not set, check for the login credentials
		{

			if($this->Auth->login()) {
				$this->Session->setFlash('You are logged in!');
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Username or password is incorrect');
			}
		}*/
	}

	
	
	 
	function logout() 
	{
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}
	

	function view($id = null) {
		$uname = $this->Auth->user('username');
		//debug(json_encode($this->Auth->User(), JSON_PRETTY_PRINT));
		//exit();
		//$this->set('user', $this->Auth());
		if($uname == 'admin')
		{
			if (!$id) {
				$this->Session->setFlash(__('Invalid user', true));
				$this->redirect(array('action' => 'index'));
			}
			$this->set('user', $this->User->read(null, $id));
		}
	}

	function add() {
		$uname = $this->Auth->user('username');
		
		if($uname == 'admin')
		{
			if (!empty($this->data)) {
				$this->User->create();
				if ($this->User->save($this->data)) {
					$this->Session->setFlash(__('The user has been saved', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
				}
			}
			$groups = $this->User->Group->find('list');
			$this->set(compact('groups'));
		}else
		{
			$this->redirect('../home/index', null, false);
		}
		
		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
			$this->User->passchange = 1;
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				
				$uname = $this->Auth->user('username');
				if($uname == 'admin')
				{
					$this->redirect(array('action' => 'index'));
				}else
				{
					$this->redirect(array('action' => 'logout'));
				}
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
			$this_user = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
			$uid = $this->Auth->user('id');
			$uname = $this->Auth->user('username');
			$this->set('id',$id);
			$this->set('uname',$this_user['User']['username']);
			$this->set('username',$uname);
			
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		$uname = $this->Auth->user('username');
		
		if($uname == 'admin')
		{
			if (!$id) {
				$this->Session->setFlash(__('Invalid id for user', true));
				$this->redirect(array('action'=>'index'));
			}
			if ($this->User->delete($id)) {
				$this->Session->setFlash(__('User deleted', true));
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('User was not deleted', true));
			$this->redirect(array('action' => 'index'));
		}else
		{
			$this->redirect('../home/index', null, false);
		}
	}
}
?>