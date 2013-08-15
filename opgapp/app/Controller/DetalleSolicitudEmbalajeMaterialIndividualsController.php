<?php
App::uses('AppController', 'Controller');
/**
 * DetalleSolicitudEmbalajeMaterialIndividuals Controller
 *
 * @property DetalleSolicitudEmbalajeMaterialIndividual $DetalleSolicitudEmbalajeMaterialIndividual
 */
class DetalleSolicitudEmbalajeMaterialIndividualsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleSolicitudEmbalajeMaterialIndividual->recursive = 0;
		$this->set('detalleSolicitudEmbalajeMaterialIndividuals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleSolicitudEmbalajeMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material individual'));
		}
		$options = array('conditions' => array('DetalleSolicitudEmbalajeMaterialIndividual.' . $this->DetalleSolicitudEmbalajeMaterialIndividual->primaryKey => $id));
		$this->set('detalleSolicitudEmbalajeMaterialIndividual', $this->DetalleSolicitudEmbalajeMaterialIndividual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleSolicitudEmbalajeMaterialIndividual->create();
			if ($this->DetalleSolicitudEmbalajeMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle solicitud embalaje material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle solicitud embalaje material individual could not be saved. Please, try again.'));
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
		if (!$this->DetalleSolicitudEmbalajeMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material individual'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleSolicitudEmbalajeMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle solicitud embalaje material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle solicitud embalaje material individual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleSolicitudEmbalajeMaterialIndividual.' . $this->DetalleSolicitudEmbalajeMaterialIndividual->primaryKey => $id));
			$this->request->data = $this->DetalleSolicitudEmbalajeMaterialIndividual->find('first', $options);
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
		$this->DetalleSolicitudEmbalajeMaterialIndividual->id = $id;
		if (!$this->DetalleSolicitudEmbalajeMaterialIndividual->exists()) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material individual'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleSolicitudEmbalajeMaterialIndividual->delete()) {
			$this->Session->setFlash(__('Detalle solicitud embalaje material individual deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle solicitud embalaje material individual was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
