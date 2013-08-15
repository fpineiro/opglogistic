<?php
App::uses('AppController', 'Controller');
/**
 * MaterialDeEmbalajes Controller
 *
 * @property MaterialDeEmbalaje $MaterialDeEmbalaje
 */
class MaterialDeEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MaterialDeEmbalaje->recursive = 0;
		$this->set('materialDeEmbalajes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid material de embalaje'));
		}
		$options = array('conditions' => array('MaterialDeEmbalaje.' . $this->MaterialDeEmbalaje->primaryKey => $id));
		$this->set('materialDeEmbalaje', $this->MaterialDeEmbalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaterialDeEmbalaje->create();
			if ($this->MaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material de embalaje could not be saved. Please, try again.'));
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
		if (!$this->MaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid material de embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material de embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaterialDeEmbalaje.' . $this->MaterialDeEmbalaje->primaryKey => $id));
			$this->request->data = $this->MaterialDeEmbalaje->find('first', $options);
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
		$this->MaterialDeEmbalaje->id = $id;
		if (!$this->MaterialDeEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid material de embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaterialDeEmbalaje->delete()) {
			$this->Session->setFlash(__('Material de embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Material de embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
