<?php
App::uses('AppController', 'Controller');
/**
 * OrdenCompras Controller
 *
 * @property OrdenCompra $OrdenCompra
 */
class OrdenComprasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrdenCompra->recursive = 0;
		$this->set('ordenCompras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdenCompra->exists($id)) {
			throw new NotFoundException(__('Invalid orden compra'));
		}
		$options = array('conditions' => array('OrdenCompra.' . $this->OrdenCompra->primaryKey => $id));
		$this->set('ordenCompra', $this->OrdenCompra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrdenCompra->create();
			if ($this->OrdenCompra->save($this->request->data)) {
				$this->Session->setFlash(__('The orden compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden compra could not be saved. Please, try again.'));
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
		if (!$this->OrdenCompra->exists($id)) {
			throw new NotFoundException(__('Invalid orden compra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrdenCompra->save($this->request->data)) {
				$this->Session->setFlash(__('The orden compra has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden compra could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdenCompra.' . $this->OrdenCompra->primaryKey => $id));
			$this->request->data = $this->OrdenCompra->find('first', $options);
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
		$this->OrdenCompra->id = $id;
		if (!$this->OrdenCompra->exists()) {
			throw new NotFoundException(__('Invalid orden compra'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrdenCompra->delete()) {
			$this->Session->setFlash(__('Orden compra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orden compra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
