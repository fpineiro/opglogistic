<?php
App::uses('AppController', 'Controller');
/**
 * GuiaDespachoSalidas Controller
 *
 * @property GuiaDespachoSalida $GuiaDespachoSalida
 */
class GuiaDespachoSalidasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GuiaDespachoSalida->recursive = 0;
		$this->set('guiaDespachoSalidas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GuiaDespachoSalida->exists($id)) {
			throw new NotFoundException(__('Invalid guia despacho salida'));
		}
		$options = array('conditions' => array('GuiaDespachoSalida.' . $this->GuiaDespachoSalida->primaryKey => $id));
		$this->set('guiaDespachoSalida', $this->GuiaDespachoSalida->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GuiaDespachoSalida->create();
			if ($this->GuiaDespachoSalida->save($this->request->data)) {
				$this->Session->setFlash(__('The guia despacho salida has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guia despacho salida could not be saved. Please, try again.'));
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
		if (!$this->GuiaDespachoSalida->exists($id)) {
			throw new NotFoundException(__('Invalid guia despacho salida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GuiaDespachoSalida->save($this->request->data)) {
				$this->Session->setFlash(__('The guia despacho salida has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guia despacho salida could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GuiaDespachoSalida.' . $this->GuiaDespachoSalida->primaryKey => $id));
			$this->request->data = $this->GuiaDespachoSalida->find('first', $options);
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
		$this->GuiaDespachoSalida->id = $id;
		if (!$this->GuiaDespachoSalida->exists()) {
			throw new NotFoundException(__('Invalid guia despacho salida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GuiaDespachoSalida->delete()) {
			$this->Session->setFlash(__('Guia despacho salida deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guia despacho salida was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
