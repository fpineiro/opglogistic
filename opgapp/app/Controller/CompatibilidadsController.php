<?php
App::uses('AppController', 'Controller');
/**
 * Compatibilidads Controller
 *
 * @property Compatibilidad $Compatibilidad
 */
class CompatibilidadsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Compatibilidad->recursive = 0;
		$this->set('compatibilidads', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Compatibilidad->exists($id)) {
			throw new NotFoundException(__('Invalid compatibilidad'));
		}
		$options = array('conditions' => array('Compatibilidad.' . $this->Compatibilidad->primaryKey => $id));
		$this->set('compatibilidad', $this->Compatibilidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Compatibilidad->create();
			if ($this->Compatibilidad->save($this->request->data)) {
				$this->Session->setFlash(__('The compatibilidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compatibilidad could not be saved. Please, try again.'));
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
		if (!$this->Compatibilidad->exists($id)) {
			throw new NotFoundException(__('Invalid compatibilidad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compatibilidad->save($this->request->data)) {
				$this->Session->setFlash(__('The compatibilidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compatibilidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Compatibilidad.' . $this->Compatibilidad->primaryKey => $id));
			$this->request->data = $this->Compatibilidad->find('first', $options);
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
		$this->Compatibilidad->id = $id;
		if (!$this->Compatibilidad->exists()) {
			throw new NotFoundException(__('Invalid compatibilidad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Compatibilidad->delete()) {
			$this->Session->setFlash(__('Compatibilidad deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compatibilidad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
