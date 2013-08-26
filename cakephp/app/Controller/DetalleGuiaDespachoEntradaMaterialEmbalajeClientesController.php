<?php
App::uses('AppController', 'Controller');
/**
 * DetalleGuiaDespachoEntradaMaterialEmbalajeClientes Controller
 *
 * @property DetalleGuiaDespachoEntradaMaterialEmbalajeCliente $DetalleGuiaDespachoEntradaMaterialEmbalajeCliente
 */
class DetalleGuiaDespachoEntradaMaterialEmbalajeClientesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->recursive = 0;
		$this->set('detalleGuiaDespachoEntradaMaterialEmbalajeClientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada material embalaje cliente'));
		}
		$options = array('conditions' => array('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.' . $this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->primaryKey => $id));
		$this->set('detalleGuiaDespachoEntradaMaterialEmbalajeCliente', $this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->create();
			if ($this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho entrada material embalaje cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho entrada material embalaje cliente could not be saved. Please, try again.'));
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
		if (!$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada material embalaje cliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho entrada material embalaje cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho entrada material embalaje cliente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.' . $this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->primaryKey => $id));
			$this->request->data = $this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->find('first', $options);
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
		$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->id = $id;
		if (!$this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->exists()) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada material embalaje cliente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->delete()) {
			$this->Session->setFlash(__('Detalle guia despacho entrada material embalaje cliente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle guia despacho entrada material embalaje cliente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
