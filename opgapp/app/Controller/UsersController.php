<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

var $name = 'Users';
var $helpers = array('Js');
var $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','add');
    }

	public function index($tipo = null, $filtro = null) {
		$this->User->recursive = 1;
		/*$this->set('nombreCliente', $this->User->find('all', array(
			'conditions' => array('User.CLIENTE_ID LIKE' =>)
			)))*/
		if(isset($filtro)){
			if($tipo == 'filtra'){
				$this->paginate = array(
				'conditions' => array('User.ROLE' => $filtro)
			);
			}else{
				$this->paginate = array(
				'conditions' => array('OR' => array('User.NAME' => $filtro, 'User.LASTNAME' => $filtro))
	 		);
			}
			$this->set('users', $this->paginate());
		}else{
	        $this->set('users', $this->paginate());
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			$this->set('rol', $this->request->data('User.ROLE'));
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function find($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->User->find('all', array(
				'conditions' => array('OR' => array('User.NAME LIKE' => '%'.$nombre.'%', 'User.LASTNAME LIKE' => '%'.$nombre.'%')),
				'limit' => '3'
				)));				
		}
	}

	public function login(){
		if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));     
        }
        if ($this->request->is('post')){
            if($this->Auth->login()){
                $this->Session->setFlash(('Welcome, '. $this->Auth->user('username')));
                $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Session->setFlash('Usuario o contraseña invalidos');
            }
        }
	}

	public function logout(){
        $this->redirect($this->Auth->logout());
    }

}

?>