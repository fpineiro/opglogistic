<?php
App::uses('AppController', 'Controller');
/**
 * MaterialIndividuals Controller
 *
 * @property MaterialIndividual $MaterialIndividual
 */
class MaterialIndividualsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MaterialIndividual->recursive = 0;
		$this->set('materialIndividuals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid material individual'));
		}
		$options = array('conditions' => array('MaterialIndividual.' . $this->MaterialIndividual->primaryKey => $id));
		$this->set('materialIndividual', $this->MaterialIndividual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id_guia = null) {
		if ($this->request->is('post')) {
			$this->MaterialIndividual->create();
			if ($this->MaterialIndividual->saveAll($this->request->data)){
				$count = 1;
				$detalle = array();
				//$totalMateriales = 0;
				foreach($this->request->data as $dato){
					$material_id = $this->MaterialIndividual->find('first', array('conditions' => array('NOMBRE_MATERIAL_INDIVIDUAL' => $dato['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL'])));
					$detalle[$count] = array('GUIA_DESPACHO_CLIENTE_ID' => $id_guia, 'MATERIAL_INDIVIDUAL_ID' => $material_id['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'], 'CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE' => 0);
					$count++;
				}
				if($this->MaterialIndividual->DetalleGuiaDespachoEntradaMaterialIndividualCliente->saveAll($detalle)){
					$this->redirect(array('controller' => 'CajaMaterialIndividuals', 'action' => 'add', $id_guia));
				}
			}
		}
	}

/*
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid material individual'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material individual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaterialIndividual.' . $this->MaterialIndividual->primaryKey => $id));
			$this->request->data = $this->MaterialIndividual->find('first', $options);
		}
	}

	public function find($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->MaterialIndividual->find('all', array(
				'conditions' => array('OR' => array('MaterialIndividual.NOMBRE_MATERIAL_INDIVIDUAL LIKE' => '%'.$nombre.'%')),
				'limit' => '3'
				)));				
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
		$this->MaterialIndividual->id = $id;
		if (!$this->MaterialIndividual->exists()) {
			throw new NotFoundException(__('Invalid material individual'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaterialIndividual->delete()) {
			$this->Session->setFlash(__('Material individual deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Material individual was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
