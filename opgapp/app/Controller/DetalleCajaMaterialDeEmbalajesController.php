<?php
App::uses('AppController', 'Controller');
/**
 * DetalleCajaMaterialDeEmbalajes Controller
 *
 * @property DetalleCajaMaterialDeEmbalaje $DetalleCajaMaterialDeEmbalaje
 */
class DetalleCajaMaterialDeEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetalleCajaMaterialDeEmbalaje->recursive = 0;
		$this->set('detalleCajaMaterialDeEmbalajes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetalleCajaMaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid detalle caja material de embalaje'));
		}
		$options = array('conditions' => array('DetalleCajaMaterialDeEmbalaje.' . $this->DetalleCajaMaterialDeEmbalaje->primaryKey => $id));
		$this->set('detalleCajaMaterialDeEmbalaje', $this->DetalleCajaMaterialDeEmbalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetalleCajaMaterialDeEmbalaje->create();
			if ($this->DetalleCajaMaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle caja material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle caja material de embalaje could not be saved. Please, try again.'));
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
		if (!$this->DetalleCajaMaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid detalle caja material de embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetalleCajaMaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The detalle caja material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detalle caja material de embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetalleCajaMaterialDeEmbalaje.' . $this->DetalleCajaMaterialDeEmbalaje->primaryKey => $id));
			$this->request->data = $this->DetalleCajaMaterialDeEmbalaje->find('first', $options);
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
		$this->DetalleCajaMaterialDeEmbalaje->id = $id;
		if (!$this->DetalleCajaMaterialDeEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid detalle caja material de embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetalleCajaMaterialDeEmbalaje->delete()) {
			$this->Session->setFlash(__('Detalle caja material de embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detalle caja material de embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
