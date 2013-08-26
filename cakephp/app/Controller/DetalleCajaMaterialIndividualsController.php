<?php
App::uses('AppController', 'Controller');
/**
 * DetalleCajaMaterialIndividuals Controller
 *
 * @property DetalleCajaMaterialIndividual $DetalleCajaMaterialIndividual
 */
class DetalleCajaMaterialIndividualsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleCajaMaterialIndividual->recursive = 0;
		$this->set('detalleCajaMaterialIndividuals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleCajaMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid detalle caja material individual'));
		}
		$options = array('conditions' => array('DetalleCajaMaterialIndividual.' . $this->DetalleCajaMaterialIndividual->primaryKey => $id));
		$this->set('detalleCajaMaterialIndividual', $this->DetalleCajaMaterialIndividual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleCajaMaterialIndividual->create();
			if ($this->DetalleCajaMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle caja material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle caja material individual could not be saved. Please, try again.'));
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
		if (!$this->DetalleCajaMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid detalle caja material individual'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleCajaMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle caja material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle caja material individual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleCajaMaterialIndividual.' . $this->DetalleCajaMaterialIndividual->primaryKey => $id));
			$this->request->data = $this->DetalleCajaMaterialIndividual->find('first', $options);
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
		$this->DetalleCajaMaterialIndividual->id = $id;
		if (!$this->DetalleCajaMaterialIndividual->exists()) {
			throw new NotFoundException(__('Invalid detalle caja material individual'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleCajaMaterialIndividual->delete()) {
			$this->Session->setFlash(__('Detalle caja material individual deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle caja material individual was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
