<?php
App::uses('AppController', 'Controller');
/**
 * DetalleOrdenDespachos Controller
 *
 * @property DetalleOrdenDespacho $DetalleOrdenDespacho
 */
class DetalleOrdenDespachosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleOrdenDespacho->recursive = 0;
		$this->set('detalleOrdenDespachos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleOrdenDespacho->exists($id)) {
			throw new NotFoundException(__('Invalid detalle orden despacho'));
		}
		$options = array('conditions' => array('DetalleOrdenDespacho.' . $this->DetalleOrdenDespacho->primaryKey => $id));
		$this->set('detalleOrdenDespacho', $this->DetalleOrdenDespacho->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleOrdenDespacho->create();
			if ($this->DetalleOrdenDespacho->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle orden despacho has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle orden despacho could not be saved. Please, try again.'));
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
		if (!$this->DetalleOrdenDespacho->exists($id)) {
			throw new NotFoundException(__('Invalid detalle orden despacho'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleOrdenDespacho->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle orden despacho has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle orden despacho could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleOrdenDespacho.' . $this->DetalleOrdenDespacho->primaryKey => $id));
			$this->request->data = $this->DetalleOrdenDespacho->find('first', $options);
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
		$this->DetalleOrdenDespacho->id = $id;
		if (!$this->DetalleOrdenDespacho->exists()) {
			throw new NotFoundException(__('Invalid detalle orden despacho'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleOrdenDespacho->delete()) {
			$this->Session->setFlash(__('Detalle orden despacho deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle orden despacho was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
