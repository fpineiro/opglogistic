<?php
App::uses('AppController', 'Controller');
/**
 * Posicions Controller
 *
 * @property Posicion $Posicion
 */
class PosicionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Posicion->recursive = 0;
		$this->set('posicions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Posicion->exists($id)) {
			throw new NotFoundException(__('Invalid posicion'));
		}
		$options = array('conditions' => array('Posicion.' . $this->Posicion->primaryKey => $id));
		$this->set('posicion', $this->Posicion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Posicion->create();
			if ($this->Posicion->save($this->request->data)) {
				$this->Session->setFlash(__('The posicion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posicion could not be saved. Please, try again.'));
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
		if (!$this->Posicion->exists($id)) {
			throw new NotFoundException(__('Invalid posicion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Posicion->save($this->request->data)) {
				$this->Session->setFlash(__('The posicion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posicion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Posicion.' . $this->Posicion->primaryKey => $id));
			$this->request->data = $this->Posicion->find('first', $options);
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
		$this->Posicion->id = $id;
		if (!$this->Posicion->exists()) {
			throw new NotFoundException(__('Invalid posicion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Posicion->delete()) {
			$this->Session->setFlash(__('Posicion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Posicion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
