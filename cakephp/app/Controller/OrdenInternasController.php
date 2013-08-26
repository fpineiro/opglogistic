<?php
App::uses('AppController', 'Controller');
/**
 * OrdenInternas Controller
 *
 * @property OrdenInterna $OrdenInterna
 */
class OrdenInternasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrdenInterna->recursive = 0;
		$this->set('ordenInternas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdenInterna->exists($id)) {
			throw new NotFoundException(__('Invalid orden interna'));
		}
		$options = array('conditions' => array('OrdenInterna.' . $this->OrdenInterna->primaryKey => $id));
		$this->set('ordenInterna', $this->OrdenInterna->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrdenInterna->create();
			if ($this->OrdenInterna->save($this->request->data)) {
				$this->Session->setFlash(__('The orden interna has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden interna could not be saved. Please, try again.'));
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
		if (!$this->OrdenInterna->exists($id)) {
			throw new NotFoundException(__('Invalid orden interna'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrdenInterna->save($this->request->data)) {
				$this->Session->setFlash(__('The orden interna has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden interna could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdenInterna.' . $this->OrdenInterna->primaryKey => $id));
			$this->request->data = $this->OrdenInterna->find('first', $options);
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
		$this->OrdenInterna->id = $id;
		if (!$this->OrdenInterna->exists()) {
			throw new NotFoundException(__('Invalid orden interna'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrdenInterna->delete()) {
			$this->Session->setFlash(__('Orden interna deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orden interna was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
