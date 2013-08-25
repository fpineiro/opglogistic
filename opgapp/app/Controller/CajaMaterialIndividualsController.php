<?php
App::uses('AppController', 'Controller');
/**
 * CajaMaterialIndividuals Controller
 *
 * @property CajaMaterialIndividual $CajaMaterialIndividual
 */
class CajaMaterialIndividualsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CajaMaterialIndividual->recursive = 0;
		$this->set('cajaMaterialIndividuals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CajaMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid caja material individual'));
		}
		$options = array('conditions' => array('CajaMaterialIndividual.' . $this->CajaMaterialIndividual->primaryKey => $id));
		$this->set('cajaMaterialIndividual', $this->CajaMaterialIndividual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($tipo_gd = null, $id_guia = null) {
			if ($this->request->is('post')) {
				$this->CajaMaterialIndividual->MaterialIndividual->DetalleGuiaDespachoEntradaMaterialIndividualCliente->recursive = 1;
				$materialesRelacionados = $this->CajaMaterialIndividual->MaterialIndividual->DetalleGuiaDespachoEntradaMaterialIndividualCliente->find('all', array('conditions' => array('DetalleGuiaDespachoEntradaMaterialIndividualCliente.GUIA_DESPACHO_CLIENTE_ID' => $id_guia)));
				$materiales = array();
				foreach($materialesRelacionados as $material){
					$materiales[$material['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']] = $material['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL'];
				}
				$this->set('materiales', $materiales);
				$this->CajaMaterialIndividual->create();
				$this->request->data['CajaMaterialIndividual']['GUIA_DESPACHO_CLIENTE_ID'] = $id_guia;
				if ($this->CajaMaterialIndividual->save($this->request->data)) {
					if(isset($this->params->data['Sgte'])){
						$this->redirect(array('action' => 'add', $tipo_gd, $id_guia));
					}else{
						$this->CajaMaterialIndividual->GuiaDespachoEntradaCliente->recursive = 0;
						$GD = $this->CajaMaterialIndividual->GuiaDespachoEntradaCliente->find('first', array('conditions' => array('GuiaDespachoEntradaCliente.GUIA_DESPACHO_CLIENTE_ID' => $id_guia)));
						if($GD['GuiaDespachoEntradaCliente']['CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES']){
							$this->redirect(array('controller' => 'CajaMaterialDeEmbalajes','action' => 'add', $tipo_gd, $id_guia));
						}else{
							$this->redirect(array('action' => 'index'));
						}
					}
				}
			}else{
					$this->CajaMaterialIndividual->MaterialIndividual->DetalleGuiaDespachoEntradaMaterialIndividualCliente->recursive = 1;
					$materialesRelacionados = $this->CajaMaterialIndividual->MaterialIndividual->DetalleGuiaDespachoEntradaMaterialIndividualCliente->find('all', array('conditions' => array('DetalleGuiaDespachoEntradaMaterialIndividualCliente.GUIA_DESPACHO_CLIENTE_ID' => $id_guia)));
					$materiales = array();
					foreach($materialesRelacionados as $material){
						$materiales[$material['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']] = $material['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL'];
					}
					$this->set('materiales', $materiales);
					$this->CajaMaterialIndividual->Posicion->recursive = 0;
					$this->set('posiciones', $this->CajaMaterialIndividual->Posicion->find('all'));
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
		if (!$this->CajaMaterialIndividual->exists($id)) {
			throw new NotFoundException(__('Invalid caja material individual'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CajaMaterialIndividual->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material individual has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material individual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CajaMaterialIndividual.' . $this->CajaMaterialIndividual->primaryKey => $id));
			$this->request->data = $this->CajaMaterialIndividual->find('first', $options);
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
		$this->CajaMaterialIndividual->id = $id;
		if (!$this->CajaMaterialIndividual->exists()) {
			throw new NotFoundException(__('Invalid caja material individual'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CajaMaterialIndividual->delete()) {
			$this->Session->setFlash(__('Caja material individual deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Caja material individual was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
