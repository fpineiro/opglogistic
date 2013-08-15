<?php
App::uses('AppController', 'Controller');
/**
 * CajaMaterialIndividuals Controller
 *
 * @property CajaMaterialIndividual $CajaMaterialIndividual
 */
class CajaMaterialIndividualsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CajaMaterialIndividual->recursive = 0;
		$this->set('cajaMaterialIndividuals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CajaMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid caja material individual'));
		}
		$options = array('conditions' => array('CajaMaterialIndividual.' . $this->CajaMaterialIndividual->primaryKey => $id));
		$this->set('cajaMaterialIndividual', $this->CajaMaterialIndividual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CajaMaterialIndividual->create();
			if ($this->CajaMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material individual could not be saved. Please, try again.'));
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
		if (!$this->CajaMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid caja material individual'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CajaMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material individual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CajaMaterialIndividual.' . $this->CajaMaterialIndividual->primaryKey => $id));
			$this->request->data = $this->CajaMaterialIndividual->find('first', $options);
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
		$this->CajaMaterialIndividual->id = $id;
		if (!$this->CajaMaterialIndividual->exists()) {
			throw new NotFoundException(__('Invalid caja material individual'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CajaMaterialIndividual->delete()) {
			$this->Session->setFlash(__('Caja material individual deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Caja material individual was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
