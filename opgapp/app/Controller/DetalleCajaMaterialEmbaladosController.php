<?php
App::uses('AppController', 'Controller');
/**
 * DetalleCajaMaterialEmbalados Controller
 *
 * @property DetalleCajaMaterialEmbalado $DetalleCajaMaterialEmbalado
 */
class DetalleCajaMaterialEmbaladosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleCajaMaterialEmbalado->recursive = 0;
		$this->set('detalleCajaMaterialEmbalados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleCajaMaterialEmbalado->exists($id)) {
			throw new NotFoundException(__('Invalid detalle caja material embalado'));
		}
		$options = array('conditions' => array('DetalleCajaMaterialEmbalado.' . $this->DetalleCajaMaterialEmbalado->primaryKey => $id));
		$this->set('detalleCajaMaterialEmbalado', $this->DetalleCajaMaterialEmbalado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleCajaMaterialEmbalado->create();
			if ($this->DetalleCajaMaterialEmbalado->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle caja material embalado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle caja material embalado could not be saved. Please, try again.'));
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
		if (!$this->DetalleCajaMaterialEmbalado->exists($id)) {
			throw new NotFoundException(__('Invalid detalle caja material embalado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleCajaMaterialEmbalado->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle caja material embalado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle caja material embalado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleCajaMaterialEmbalado.' . $this->DetalleCajaMaterialEmbalado->primaryKey => $id));
			$this->request->data = $this->DetalleCajaMaterialEmbalado->find('first', $options);
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
		$this->DetalleCajaMaterialEmbalado->id = $id;
		if (!$this->DetalleCajaMaterialEmbalado->exists()) {
			throw new NotFoundException(__('Invalid detalle caja material embalado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleCajaMaterialEmbalado->delete()) {
			$this->Session->setFlash(__('Detalle caja material embalado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle caja material embalado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
