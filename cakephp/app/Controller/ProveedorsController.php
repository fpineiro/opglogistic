<?php
App::uses('AppController', 'Controller');
/**
 * Proveedors Controller
 *
 * @property Proveedor $Proveedor
 */
class ProveedorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proveedor->recursive = 0;
		$this->set('proveedors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proveedor->exists($id)) {
			throw new NotFoundException(__('Invalid proveedor'));
		}
		$options = array('conditions' => array('Proveedor.' . $this->Proveedor->primaryKey => $id));
		$this->set('proveedor', $this->Proveedor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proveedor->create();
			if ($this->Proveedor->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedor could not be saved. Please, try again.'));
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
		if (!$this->Proveedor->exists($id)) {
			throw new NotFoundException(__('Invalid proveedor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proveedor->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proveedor.' . $this->Proveedor->primaryKey => $id));
			$this->request->data = $this->Proveedor->find('first', $options);
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
		$this->Proveedor->id = $id;
		if (!$this->Proveedor->exists()) {
			throw new NotFoundException(__('Invalid proveedor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proveedor->delete()) {
			$this->Session->setFlash(__('Proveedor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proveedor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function find($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->Proveedor->find('all', array(
				'conditions' => array('Proveedor.NOMBRE_PROVEEDOR LIKE' => '%'.$nombre.'%'),
				'limit' => '3'
				)));				
		}
	}
}
