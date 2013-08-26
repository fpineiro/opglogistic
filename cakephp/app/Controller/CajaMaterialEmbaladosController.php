<?php
App::uses('AppController', 'Controller');
/**
 * CajaMaterialEmbalados Controller
 *
 * @property CajaMaterialEmbalado $CajaMaterialEmbalado
 */
class CajaMaterialEmbaladosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CajaMaterialEmbalado->recursive = 0;
		$this->set('cajaMaterialEmbalados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CajaMaterialEmbalado->exists($id)) {
			throw new NotFoundException(__('Invalid caja material embalado'));
		}
		$options = array('conditions' => array('CajaMaterialEmbalado.' . $this->CajaMaterialEmbalado->primaryKey => $id));
		$this->set('cajaMaterialEmbalado', $this->CajaMaterialEmbalado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CajaMaterialEmbalado->create();
			if ($this->CajaMaterialEmbalado->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material embalado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material embalado could not be saved. Please, try again.'));
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
		if (!$this->CajaMaterialEmbalado->exists($id)) {
			throw new NotFoundException(__('Invalid caja material embalado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CajaMaterialEmbalado->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material embalado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material embalado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CajaMaterialEmbalado.' . $this->CajaMaterialEmbalado->primaryKey => $id));
			$this->request->data = $this->CajaMaterialEmbalado->find('first', $options);
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
		$this->CajaMaterialEmbalado->id = $id;
		if (!$this->CajaMaterialEmbalado->exists()) {
			throw new NotFoundException(__('Invalid caja material embalado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CajaMaterialEmbalado->delete()) {
			$this->Session->setFlash(__('Caja material embalado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Caja material embalado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
