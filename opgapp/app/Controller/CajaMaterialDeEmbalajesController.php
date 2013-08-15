<?php
App::uses('AppController', 'Controller');
/**
 * CajaMaterialDeEmbalajes Controller
 *
 * @property CajaMaterialDeEmbalaje $CajaMaterialDeEmbalaje
 */
class CajaMaterialDeEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CajaMaterialDeEmbalaje->recursive = 0;
		$this->set('cajaMaterialDeEmbalajes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CajaMaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid caja material de embalaje'));
		}
		$options = array('conditions' => array('CajaMaterialDeEmbalaje.' . $this->CajaMaterialDeEmbalaje->primaryKey => $id));
		$this->set('cajaMaterialDeEmbalaje', $this->CajaMaterialDeEmbalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CajaMaterialDeEmbalaje->create();
			if ($this->CajaMaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material de embalaje could not be saved. Please, try again.'));
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
		if (!$this->CajaMaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid caja material de embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CajaMaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material de embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CajaMaterialDeEmbalaje.' . $this->CajaMaterialDeEmbalaje->primaryKey => $id));
			$this->request->data = $this->CajaMaterialDeEmbalaje->find('first', $options);
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
		$this->CajaMaterialDeEmbalaje->id = $id;
		if (!$this->CajaMaterialDeEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid caja material de embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CajaMaterialDeEmbalaje->delete()) {
			$this->Session->setFlash(__('Caja material de embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Caja material de embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
