<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudEmbalajes Controller
 *
 * @property SolicitudEmbalaje $SolicitudEmbalaje
 */
class SolicitudEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SolicitudEmbalaje->recursive = 0;
		$this->set('solicitudEmbalajes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud embalaje'));
		}
		$options = array('conditions' => array('SolicitudEmbalaje.' . $this->SolicitudEmbalaje->primaryKey => $id));
		$this->set('solicitudEmbalaje', $this->SolicitudEmbalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SolicitudEmbalaje->create();
			if ($this->SolicitudEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud embalaje could not be saved. Please, try again.'));
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
		if (!$this->SolicitudEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SolicitudEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SolicitudEmbalaje.' . $this->SolicitudEmbalaje->primaryKey => $id));
			$this->request->data = $this->SolicitudEmbalaje->find('first', $options);
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
		$this->SolicitudEmbalaje->id = $id;
		if (!$this->SolicitudEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid solicitud embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SolicitudEmbalaje->delete()) {
			$this->Session->setFlash(__('Solicitud embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Solicitud embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
