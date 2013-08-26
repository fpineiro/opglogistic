<?php
App::uses('AppController', 'Controller');
/**
 * Compatibilidads Controller
 *
 * @property Compatibilidad $Compatibilidad
 */
class CompatibilidadsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($busca = null) {
		$this->Compatibilidad->recursive = 1;
		$this->set('rol', $this->Auth->user('ROLE'));
		$this->set('compatibilidads', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Compatibilidad->exists($id)) {
			throw new NotFoundException(__('Invalid compatibilidad'));
		}
		$options = array('conditions' => array('Compatibilidad.' . $this->Compatibilidad->primaryKey => $id));
		$this->set('compatibilidad', $this->Compatibilidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Compatibilidad->create();
			$this->set('p', $this->request->data);
			if ($this->Compatibilidad->save($this->request->data)) {
				$this->Session->setFlash(__('The compatibilidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compatibilidad could not be saved. Please, try again.'));
			}
		}else{
			$this->set('intermedio', $this->Compatibilidad->MaterialIntermedio->find('list', array('fields' => array('MATERIAL_INTERMEDIO_ID', 'NOMBRE_MATERIAL_INTERMEDIO'))));
			$this->set('deembalaje', $this->Compatibilidad->MaterialDeEmbalaje->find('list', array('fields' => array('MATERIAL_DE_EMBALAJE_ID', 'NOMBRE_MATERIAL_DE_EMBALAJE'))));
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
		if (!$this->Compatibilidad->exists($id)) {
			throw new NotFoundException(__('Invalid compatibilidad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compatibilidad->save($this->request->data)) {
				$this->Session->setFlash(__('The compatibilidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The compatibilidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Compatibilidad.' . $this->Compatibilidad->primaryKey => $id));
			$this->request->data = $this->Compatibilidad->find('first', $options);
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
		$this->Compatibilidad->id = $id;
		if (!$this->Compatibilidad->exists()) {
			throw new NotFoundException(__('Invalid compatibilidad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Compatibilidad->delete()) {
			$this->Session->setFlash(__('Compatibilidad deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compatibilidad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function find($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->Compatibilidad->MaterialIntermedio->find('all', array(
				'conditions' => array('OR' => array('MaterialIntermedio.NOMBRE_MATERIAL_INTERMEDIO LIKE' => '%'.$nombre.'%')),
				'limit' => '3'
			)));				
		}
	}
}
