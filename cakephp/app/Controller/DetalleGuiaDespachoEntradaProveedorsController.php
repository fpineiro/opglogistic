<?php
App::uses('AppController', 'Controller');
/**
 * DetalleGuiaDespachoEntradaProveedors Controller
 *
 * @property DetalleGuiaDespachoEntradaProveedor $DetalleGuiaDespachoEntradaProveedor
 */
class DetalleGuiaDespachoEntradaProveedorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleGuiaDespachoEntradaProveedor->recursive = 0;
		$this->set('detalleGuiaDespachoEntradaProveedors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleGuiaDespachoEntradaProveedor->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada proveedor'));
		}
		$options = array('conditions' => array('DetalleGuiaDespachoEntradaProveedor.' . $this->DetalleGuiaDespachoEntradaProveedor->primaryKey => $id));
		$this->set('detalleGuiaDespachoEntradaProveedor', $this->DetalleGuiaDespachoEntradaProveedor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleGuiaDespachoEntradaProveedor->create();
			if ($this->DetalleGuiaDespachoEntradaProveedor->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho entrada proveedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho entrada proveedor could not be saved. Please, try again.'));
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
		if (!$this->DetalleGuiaDespachoEntradaProveedor->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada proveedor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleGuiaDespachoEntradaProveedor->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho entrada proveedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho entrada proveedor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleGuiaDespachoEntradaProveedor.' . $this->DetalleGuiaDespachoEntradaProveedor->primaryKey => $id));
			$this->request->data = $this->DetalleGuiaDespachoEntradaProveedor->find('first', $options);
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
		$this->DetalleGuiaDespachoEntradaProveedor->id = $id;
		if (!$this->DetalleGuiaDespachoEntradaProveedor->exists()) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada proveedor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleGuiaDespachoEntradaProveedor->delete()) {
			$this->Session->setFlash(__('Detalle guia despacho entrada proveedor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle guia despacho entrada proveedor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
