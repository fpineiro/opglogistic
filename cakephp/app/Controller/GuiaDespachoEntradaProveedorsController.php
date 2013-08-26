<?php
App::uses('AppController', 'Controller');
/**
 * GuiaDespachoEntradaProveedors Controller
 *
 * @property GuiaDespachoEntradaProveedor $GuiaDespachoEntradaProveedor
 */
class GuiaDespachoEntradaProveedorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GuiaDespachoEntradaProveedor->recursive = 0;
		$this->set('guiaDespachoEntradaProveedors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GuiaDespachoEntradaProveedor->exists($id)) {
			throw new NotFoundException(__('Invalid guia despacho entrada proveedor'));
		}
		$options = array('conditions' => array('GuiaDespachoEntradaProveedor.' . $this->GuiaDespachoEntradaProveedor->primaryKey => $id));
		$this->set('guiaDespachoEntradaProveedor', $this->GuiaDespachoEntradaProveedor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->set('proveedores', $this->GuiaDespachoEntradaProveedor->Proveedor->find('list', array('fields' => array('Proveedor.PROVEEDOR_ID', 'Proveedor.NOMBRE_PROVEEDOR'))));	
			$this->GuiaDespachoEntradaProveedor->create();
			if ($this->GuiaDespachoEntradaProveedor->save($this->request->data)) {
				$id_guia = $this->request->data['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'];
				$this->redirect(array('controller' => 'MaterialDeEmbalajes', 'action' => 'add', 'p', $id_guia));
			} else {
				$this->Session->setFlash(__('The guia despacho entrada cliente could not be saved. Please, try again.'));
			}
		}else{
			$this->set('proveedores', $this->GuiaDespachoEntradaProveedor->Proveedor->find('list', array('fields' => array('Proveedor.PROVEEDOR_ID', 'Proveedor.NOMBRE_PROVEEDOR'))));	
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
		if (!$this->GuiaDespachoEntradaProveedor->exists($id)) {
			throw new NotFoundException(__('Invalid guia despacho entrada proveedor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GuiaDespachoEntradaProveedor->save($this->request->data)) {
				$this->Session->setFlash(__('The guia despacho entrada proveedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guia despacho entrada proveedor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GuiaDespachoEntradaProveedor.' . $this->GuiaDespachoEntradaProveedor->primaryKey => $id));
			$this->request->data = $this->GuiaDespachoEntradaProveedor->find('first', $options);
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
		$this->GuiaDespachoEntradaProveedor->id = $id;
		if (!$this->GuiaDespachoEntradaProveedor->exists()) {
			throw new NotFoundException(__('Invalid guia despacho entrada proveedor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GuiaDespachoEntradaProveedor->delete()) {
			$this->Session->setFlash(__('Guia despacho entrada proveedor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guia despacho entrada proveedor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
