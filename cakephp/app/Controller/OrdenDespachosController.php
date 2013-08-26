<?php
App::uses('AppController', 'Controller');
/**
 * OrdenDespachos Controller
 *
 * @property OrdenDespacho $OrdenDespacho
 */
class OrdenDespachosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrdenDespacho->recursive = 0;
		$this->set('ordenDespachos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdenDespacho->exists($id)) {
			throw new NotFoundException(__('Invalid orden despacho'));
		}
		$options = array('conditions' => array('OrdenDespacho.' . $this->OrdenDespacho->primaryKey => $id));
		$this->set('ordenDespacho', $this->OrdenDespacho->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrdenDespacho->create();
			if ($this->OrdenDespacho->save($this->request->data)) {
				$this->Session->setFlash(__('The orden despacho has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden despacho could not be saved. Please, try again.'));
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
		if (!$this->OrdenDespacho->exists($id)) {
			throw new NotFoundException(__('Invalid orden despacho'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrdenDespacho->save($this->request->data)) {
				$this->Session->setFlash(__('The orden despacho has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden despacho could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdenDespacho.' . $this->OrdenDespacho->primaryKey => $id));
			$this->request->data = $this->OrdenDespacho->find('first', $options);
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
		$this->OrdenDespacho->id = $id;
		if (!$this->OrdenDespacho->exists()) {
			throw new NotFoundException(__('Invalid orden despacho'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrdenDespacho->delete()) {
			$this->Session->setFlash(__('Orden despacho deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orden despacho was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	public function find($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->Cliente->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIntermedio->MaterialIntermedio->find('all', array(
				'conditions' => array('MaterialIntermedio.NOMBRE_MATERIAL_INTERMEDIO LIKE' => '%'.$nombre.'%'),
				'limit' => '3'
				))
			);				
		}
	}
}
