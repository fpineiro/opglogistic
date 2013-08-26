<?php
App::uses('AppController', 'Controller');
/**
 * DetalleGuiaDespachoSalidas Controller
 *
 * @property DetalleGuiaDespachoSalida $DetalleGuiaDespachoSalida
 */
class DetalleGuiaDespachoSalidasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleGuiaDespachoSalida->recursive = 0;
		$this->set('detalleGuiaDespachoSalidas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleGuiaDespachoSalida->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho salida'));
		}
		$options = array('conditions' => array('DetalleGuiaDespachoSalida.' . $this->DetalleGuiaDespachoSalida->primaryKey => $id));
		$this->set('detalleGuiaDespachoSalida', $this->DetalleGuiaDespachoSalida->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleGuiaDespachoSalida->create();
			if ($this->DetalleGuiaDespachoSalida->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho salida has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho salida could not be saved. Please, try again.'));
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
		if (!$this->DetalleGuiaDespachoSalida->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho salida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleGuiaDespachoSalida->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho salida has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho salida could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleGuiaDespachoSalida.' . $this->DetalleGuiaDespachoSalida->primaryKey => $id));
			$this->request->data = $this->DetalleGuiaDespachoSalida->find('first', $options);
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
		$this->DetalleGuiaDespachoSalida->id = $id;
		if (!$this->DetalleGuiaDespachoSalida->exists()) {
			throw new NotFoundException(__('Invalid detalle guia despacho salida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleGuiaDespachoSalida->delete()) {
			$this->Session->setFlash(__('Detalle guia despacho salida deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle guia despacho salida was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
