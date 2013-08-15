<?php
App::uses('AppController', 'Controller');
/**
 * DetalleSolicitudEmbalajeMaterialEmbalajes Controller
 *
 * @property DetalleSolicitudEmbalajeMaterialEmbalaje $DetalleSolicitudEmbalajeMaterialEmbalaje
 */
class DetalleSolicitudEmbalajeMaterialEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleSolicitudEmbalajeMaterialEmbalaje->recursive = 0;
		$this->set('detalleSolicitudEmbalajeMaterialEmbalajes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleSolicitudEmbalajeMaterialEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material embalaje'));
		}
		$options = array('conditions' => array('DetalleSolicitudEmbalajeMaterialEmbalaje.' . $this->DetalleSolicitudEmbalajeMaterialEmbalaje->primaryKey => $id));
		$this->set('detalleSolicitudEmbalajeMaterialEmbalaje', $this->DetalleSolicitudEmbalajeMaterialEmbalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleSolicitudEmbalajeMaterialEmbalaje->create();
			if ($this->DetalleSolicitudEmbalajeMaterialEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle solicitud embalaje material embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle solicitud embalaje material embalaje could not be saved. Please, try again.'));
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
		if (!$this->DetalleSolicitudEmbalajeMaterialEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleSolicitudEmbalajeMaterialEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle solicitud embalaje material embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle solicitud embalaje material embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleSolicitudEmbalajeMaterialEmbalaje.' . $this->DetalleSolicitudEmbalajeMaterialEmbalaje->primaryKey => $id));
			$this->request->data = $this->DetalleSolicitudEmbalajeMaterialEmbalaje->find('first', $options);
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
		$this->DetalleSolicitudEmbalajeMaterialEmbalaje->id = $id;
		if (!$this->DetalleSolicitudEmbalajeMaterialEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid detalle solicitud embalaje material embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleSolicitudEmbalajeMaterialEmbalaje->delete()) {
			$this->Session->setFlash(__('Detalle solicitud embalaje material embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle solicitud embalaje material embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
