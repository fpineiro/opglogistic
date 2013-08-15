<?php
App::uses('AppController', 'Controller');
/**
 * DetalleSolicitudEmbalajeMaterialIntermedios Controller
 *
 * @property DetalleSolicitudEmbalajeMaterialIntermedio $DetalleSolicitudEmbalajeMaterialIntermedio
 */
class DetalleSolicitudEmbalajeMaterialIntermediosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleSolicitudEmbalajeMaterialIntermedio->recursive = 0;
		$this->set('detalleSolicitudEmbalajeMaterialIntermedios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleSolicitudEmbalajeMaterialIntermedio->exists($id)) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material intermedio'));
		}
		$options = array('conditions' => array('DetalleSolicitudEmbalajeMaterialIntermedio.' . $this->DetalleSolicitudEmbalajeMaterialIntermedio->primaryKey => $id));
		$this->set('detalleSolicitudEmbalajeMaterialIntermedio', $this->DetalleSolicitudEmbalajeMaterialIntermedio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleSolicitudEmbalajeMaterialIntermedio->create();
			if ($this->DetalleSolicitudEmbalajeMaterialIntermedio->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle solicitud embalaje material intermedio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle solicitud embalaje material intermedio could not be saved. Please, try again.'));
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
		if (!$this->DetalleSolicitudEmbalajeMaterialIntermedio->exists($id)) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material intermedio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleSolicitudEmbalajeMaterialIntermedio->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle solicitud embalaje material intermedio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle solicitud embalaje material intermedio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleSolicitudEmbalajeMaterialIntermedio.' . $this->DetalleSolicitudEmbalajeMaterialIntermedio->primaryKey => $id));
			$this->request->data = $this->DetalleSolicitudEmbalajeMaterialIntermedio->find('first', $options);
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
		$this->DetalleSolicitudEmbalajeMaterialIntermedio->id = $id;
		if (!$this->DetalleSolicitudEmbalajeMaterialIntermedio->exists()) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material intermedio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleSolicitudEmbalajeMaterialIntermedio->delete()) {
			$this->Session->setFlash(__('Detalle solicitud embalaje material intermedio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle solicitud embalaje material intermedio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
