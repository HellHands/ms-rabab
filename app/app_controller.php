<?php
class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session','RequestHandler');
    var $helpers = array('Html', 'Form', 'Session');

    /*function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'home', 'action' => 'index');
    }*/

    public $components = array(
        'Flash',
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'home',
                'action' => 'index'
                ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
                )
            )
        );

    public function beforeFilter() {
//        $this->Auth->allow('index', 'view');
    }
    
        
}
?>