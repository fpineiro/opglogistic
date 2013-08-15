<?php
App::uses('AppController', 'Controller');
/**
 * DetalleOrdenCompras Controller
 *
 * @property DetalleOrdenCompra $DetalleOrdenCompra
 */
class DetalleOrdenComprasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleOrdenCompra->recursive = 0;
		$this->set('detalleOrdenCompras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleOrdenCompra->exists($id)) {
			throw new NotFoundException(__('Invalid detalle orden compra'));
		}
		$options = array('conditions' => array('DetalleOrdenCompra.' . $this->DetalleOrdenCompra->primaryKey => $id));
		$this->set('detalleOrdenCompra', $this->DetalleOrdenCompra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleOrdenCompra->create();
			if ($this->DetalleOrdenCompra->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle orden compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle orden compra could not be saved. Please, try again.'));
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
		if (!$this->DetalleOrdenCompra->exists($id)) {
			throw new NotFoundException(__('Invalid detalle orden compra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleOrdenCompra->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle orden compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle orden compra could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleOrdenCompra.' . $this->DetalleOrdenCompra->primaryKey => $id));
			$this->request->data = $this->DetalleOrdenCompra->find('first', $options);
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
		$this->DetalleOrdenCompra->id = $id;
		if (!$this->DetalleOrdenCompra->exists()) {
			throw new NotFoundException(__('Invalid detalle orden compra'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleOrdenCompra->delete()) {
			$this->Session->setFlash(__('Detalle orden compra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle orden compra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
