<?php
App::uses('AppController', 'Controller');
/**
 * Bodegas Controller
 *
 * @property Bodega $Bodega
 */
class BodegasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bodega->recursive = 0;
		$this->set('bodegas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bodega->exists($id)) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		$options = array('conditions' => array('Bodega.' . $this->Bodega->primaryKey => $id));
		$this->set('bodega', $this->Bodega->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bodega->create();
			if ($this->Bodega->save($this->request->data)) {
				$this->Session->setFlash(__('The bodega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bodega could not be saved. Please, try again.'));
			}
		}else{
			$this->set('jb', $this->Bodega->User->find('list', array('conditions' => array('User.ROLE' => 'jb', 'User.BODEGA_ID' => ''), 'fields' => array('User.ID', 'User.NAME'))));	
			$this->set('clientes', $this->Bodega->Cliente->find('list', array('conditions' => array('Cliente.BODEGA_ID' => ''), 'fields' => array('Cliente.CLIENTE_ID', 'Cliente.NOMBRE_CLIENTE'))));
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
		if (!$this->Bodega->exists($id)) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bodega->save($this->request->data)) {
				$this->Session->setFlash(__('The bodega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bodega could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bodega.' . $this->Bodega->primaryKey => $id));
			$this->request->data = $this->Bodega->find('first', $options);
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
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bodega->delete()) {
			$this->Session->setFlash(__('Bodega deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bodega was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
