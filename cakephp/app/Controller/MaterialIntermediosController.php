<?php
App::uses('AppController', 'Controller');
/**
 * MaterialIntermedios Controller
 *
 * @property MaterialIntermedio $MaterialIntermedio
 */
class MaterialIntermediosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MaterialIntermedio->recursive = 0;
		$this->set('materialIntermedios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaterialIntermedio->exists($id)) {
			throw new NotFoundException(__('Invalid material intermedio'));
		}
		$options = array('conditions' => array('MaterialIntermedio.' . $this->MaterialIntermedio->primaryKey => $id));
		$this->set('materialIntermedio', $this->MaterialIntermedio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaterialIntermedio->create();
			if ($this->MaterialIntermedio->save($this->request->data)) {
				$this->Session->setFlash(__('The material intermedio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material intermedio could not be saved. Please, try again.'));
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
		if (!$this->MaterialIntermedio->exists($id)) {
			throw new NotFoundException(__('Invalid material intermedio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MaterialIntermedio->save($this->request->data)) {
				$this->Session->setFlash(__('The material intermedio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material intermedio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaterialIntermedio.' . $this->MaterialIntermedio->primaryKey => $id));
			$this->request->data = $this->MaterialIntermedio->find('first', $options);
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
		$this->MaterialIntermedio->id = $id;
		if (!$this->MaterialIntermedio->exists()) {
			throw new NotFoundException(__('Invalid material intermedio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaterialIntermedio->delete()) {
			$this->Session->setFlash(__('Material intermedio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Material intermedio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
