<?php
App::uses('AppController', 'Controller');
/**
 * DetalleGuiaDespachoEntradaMaterialIndividualClientes Controller
 *
 * @property DetalleGuiaDespachoEntradaMaterialIndividualCliente $DetalleGuiaDespachoEntradaMaterialIndividualCliente
 */
class DetalleGuiaDespachoEntradaMaterialIndividualClientesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->recursive = 0;
		$this->set('detalleGuiaDespachoEntradaMaterialIndividualClientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada material individual cliente'));
		}
		$options = array('conditions' => array('DetalleGuiaDespachoEntradaMaterialIndividualCliente.' . $this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->primaryKey => $id));
		$this->set('detalleGuiaDespachoEntradaMaterialIndividualCliente', $this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->create();
			if ($this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho entrada material individual cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho entrada material individual cliente could not be saved. Please, try again.'));
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
		if (!$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->exists($id)) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada material individual cliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle guia despacho entrada material individual cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle guia despacho entrada material individual cliente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleGuiaDespachoEntradaMaterialIndividualCliente.' . $this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->primaryKey => $id));
			$this->request->data = $this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->find('first', $options);
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
		$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->id = $id;
		if (!$this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->exists()) {
			throw new NotFoundException(__('Invalid detalle guia despacho entrada material individual cliente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleGuiaDespachoEntradaMaterialIndividualCliente->delete()) {
			$this->Session->setFlash(__('Detalle guia despacho entrada material individual cliente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle guia despacho entrada material individual cliente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
