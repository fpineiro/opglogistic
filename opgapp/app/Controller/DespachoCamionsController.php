<?php
App::uses('AppController', 'Controller');
/**
 * DespachoCamions Controller
 *
 * @property DespachoCamion $DespachoCamion
 */
class DespachoCamionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DespachoCamion->recursive = 0;
		$this->set('despachoCamions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DespachoCamion->exists($id)) {
			throw new NotFoundException(__('Invalid despacho camion'));
		}
		$options = array('conditions' => array('DespachoCamion.' . $this->DespachoCamion->primaryKey => $id));
		$this->set('despachoCamion', $this->DespachoCamion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DespachoCamion->create();
			if ($this->DespachoCamion->save($this->request->data)) {
				$this->Session->setFlash(__('The despacho camion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The despacho camion could not be saved. Please, try again.'));
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
		if (!$this->DespachoCamion->exists($id)) {
			throw new NotFoundException(__('Invalid despacho camion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DespachoCamion->save($this->request->data)) {
				$this->Session->setFlash(__('The despacho camion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The despacho camion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DespachoCamion.' . $this->DespachoCamion->primaryKey => $id));
			$this->request->data = $this->DespachoCamion->find('first', $options);
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
		$this->DespachoCamion->id = $id;
		if (!$this->DespachoCamion->exists()) {
			throw new NotFoundException(__('Invalid despacho camion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DespachoCamion->delete()) {
			$this->Session->setFlash(__('Despacho camion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Despacho camion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
