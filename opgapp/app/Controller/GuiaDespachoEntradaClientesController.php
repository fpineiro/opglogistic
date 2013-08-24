<?php
App::uses('AppController', 'Controller');
/**
 * GuiaDespachoEntradaClientes Controller
 *
 * @property GuiaDespachoEntradaCliente $GuiaDespachoEntradaCliente
 */
class GuiaDespachoEntradaClientesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GuiaDespachoEntradaCliente->recursive = 0;
		$this->set('guiaDespachoEntradaClientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GuiaDespachoEntradaCliente->exists($id)) {
			throw new NotFoundException(__('Invalid guia despacho entrada cliente'));
		}
		$options = array('conditions' => array('GuiaDespachoEntradaCliente.' . $this->GuiaDespachoEntradaCliente->primaryKey => $id));
		$this->set('guiaDespachoEntradaCliente', $this->GuiaDespachoEntradaCliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GuiaDespachoEntradaCliente->create();
			if ($this->GuiaDespachoEntradaCliente->save($this->request->data)) {
				$id_guia = $this->request->data['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'];
				$this->redirect(array('controller' => 'MaterialIndividuals', 'action' => 'add', $id_guia));
			} else {
				$this->Session->setFlash(__('The guia despacho entrada cliente could not be saved. Please, try again.'));
			}
		}else{
			$this->set('clientes', $this->GuiaDespachoEntradaCliente->Cliente->find('list', array('fields' => array('Cliente.CLIENTE_ID', 'Cliente.NOMBRE_CLIENTE'))));	
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
		if (!$this->GuiaDespachoEntradaCliente->exists($id)) {
			throw new NotFoundException(__('Invalid guia despacho entrada cliente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GuiaDespachoEntradaCliente->save($this->request->data)) {
				$this->Session->setFlash(__('The guia despacho entrada cliente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guia despacho entrada cliente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GuiaDespachoEntradaCliente.' . $this->GuiaDespachoEntradaCliente->primaryKey => $id));
			$this->request->data = $this->GuiaDespachoEntradaCliente->find('first', $options);
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
		$this->GuiaDespachoEntradaCliente->id = $id;
		if (!$this->GuiaDespachoEntradaCliente->exists()) {
			throw new NotFoundException(__('Invalid guia despacho entrada cliente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GuiaDespachoEntradaCliente->delete()) {
			$this->Session->setFlash(__('Guia despacho entrada cliente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guia despacho entrada cliente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
