<?php
App::uses('AppController', 'Controller');
/**
 * DetalleOrdenInternas Controller
 *
 * @property DetalleOrdenInterna $DetalleOrdenInterna
 */
class DetalleOrdenInternasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleOrdenInterna->recursive = 0;
		$this->set('detalleOrdenInternas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleOrdenInterna->exists($id)) {
			throw new NotFoundException(__('Invalid detalle orden interna'));
		}
		$options = array('conditions' => array('DetalleOrdenInterna.' . $this->DetalleOrdenInterna->primaryKey => $id));
		$this->set('detalleOrdenInterna', $this->DetalleOrdenInterna->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleOrdenInterna->create();
			if ($this->DetalleOrdenInterna->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle orden interna has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle orden interna could not be saved. Please, try again.'));
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
		if (!$this->DetalleOrdenInterna->exists($id)) {
			throw new NotFoundException(__('Invalid detalle orden interna'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleOrdenInterna->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle orden interna has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle orden interna could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleOrdenInterna.' . $this->DetalleOrdenInterna->primaryKey => $id));
			$this->request->data = $this->DetalleOrdenInterna->find('first', $options);
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
		$this->DetalleOrdenInterna->id = $id;
		if (!$this->DetalleOrdenInterna->exists()) {
			throw new NotFoundException(__('Invalid detalle orden interna'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleOrdenInterna->delete()) {
			$this->Session->setFlash(__('Detalle orden interna deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle orden interna was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
