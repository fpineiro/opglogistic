<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $helpers = array('Session');
	public $theme = "Cakestrap";

	public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'You must be logged in to view this page.',
            'loginError' => 'Invalid Username or Password entered, please try again.'
    ));
 
    public function estaAutorizado($rol, $controller, $action){
        $adminAutorizado = array(
        'users' => array('index', 'add', 'login', 'unauthorized'),
        'clientes' => array('index', 'add')
        );
        $jbAutorizado = array(
        'cliente' => array('index', 'add'), 
        'users' => array('unauthorized')

        );
        $clienteAutorizado = array(
        'MaterialIntermedio'

        );
        $controller = strtolower($controller);
        $action = strtolower($action);
        if($rol == 'admin'){
            if(isset($adminAutorizado[$controller]) && in_array($action, $adminAutorizado[$controller])){
                return true;
            }else{
                return false;
            }
        }else if($rol == 'jb'){
 
        }else if($rol == 'cliente'){
            
        }
    }
    
    public function beforeFilter() {
        $this->Auth->allow('login');
        /*if(!$this->estaAutorizado($this->Auth->user('ROLE'), $this->request['controller'], $this->request['action'])){
            $this->redirect(array('controller' => 'users', 'action' => 'unauthorized'));
        }*/
    }
}