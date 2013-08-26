<?php
App::uses('AppController', 'Controller');
/**
 * CajaMaterialDeEmbalajes Controller
 *
 * @property CajaMaterialDeEmbalaje $CajaMaterialDeEmbalaje
 */
class CajaMaterialDeEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CajaMaterialDeEmbalaje->recursive = 0;
		$this->set('cajaMaterialDeEmbalajes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CajaMaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid caja material de embalaje'));
		}
		$options = array('conditions' => array('CajaMaterialDeEmbalaje.' . $this->CajaMaterialDeEmbalaje->primaryKey => $id));
		$this->set('cajaMaterialDeEmbalaje', $this->CajaMaterialDeEmbalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($tipo_gd = null, $id_guia = null) {
		if ($this->request->is('post')) {
			if($tipo_gd != null && $tipo_gd == 'c'){
				$this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->recursive = 1;
				$materialesRelacionados = $this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->find('all', array('conditions' => array('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.GUIA_DESPACHO_CLIENTE_ID' => $id_guia)));
				$materiales = array();
				foreach($materialesRelacionados as $material){
					$materiales[$material['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']] = $material['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE'];
				}
				$this->set('materiales', $materiales);
				$this->CajaMaterialDeEmbalaje->create();
				$this->request->data['CajaMaterialDeEmbalaje']['GUIA_DESPACHO_CLIENTE_ID'] = $id_guia;
				if ($this->CajaMaterialDeEmbalaje->save($this->request->data)) {
					if(isset($this->params->data['Sgte'])){
						$this->redirect(array('action' => 'add', $tipo_gd, $id_guia));
					}else{
						$this->redirect(array('controller' => 'GuiaDespachoEntradaClientes', 'action' => 'index'));
					}
				}
			}else if($tipo_gd != null && $tipo_gd == 'p'){
				$this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaProveedor->recursive = 1;
				$materialesRelacionados = $this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaProveedor->find('all', array('conditions' => array('DetalleGuiaDespachoEntradaProveedor.GUIA_DESPACHO_PROVEEDOR_ID' => $id_guia)));
				$materiales = array();
				$this->set('dbg', $materialesRelacionados);
				foreach($materialesRelacionados as $material){
					$materiales[$material['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']] = $material['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE'];
				}
				$this->set('materiales', $materiales);
				$this->CajaMaterialDeEmbalaje->create();
				$this->request->data['CajaMaterialDeEmbalaje']['GUIA_DESPACHO_PROVEEDOR_ID'] = $id_guia;
				if ($this->CajaMaterialDeEmbalaje->save($this->request->data)) {
					if(isset($this->params->data['Sgte'])){
						$this->redirect(array('action' => 'add', $tipo_gd, $id_guia));
					}else{
						$this->redirect(array('controller' => 'GuiaDespachoEntradaProveedors', 'action' => 'index'));
					}
				}
			}
			}else{
				if($tipo_gd != null && $tipo_gd == 'c'){
					$this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->recursive = 1;
					$materialesRelacionados = $this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaMaterialEmbalajeCliente->find('all', array('conditions' => array('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.GUIA_DESPACHO_CLIENTE_ID' => $id_guia)));
					$materiales = array();
					foreach($materialesRelacionados as $material){
						$materiales[$material['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']] = $material['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE'];
					}
					$this->set('materiales', $materiales);
				}else if($tipo_gd != null && $tipo_gd == 'p'){
					$this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaProveedor->recursive = 1;
					$materialesRelacionados = $this->CajaMaterialDeEmbalaje->MaterialDeEmbalaje->DetalleGuiaDespachoEntradaProveedor->find('all', array('conditions' => array('DetalleGuiaDespachoEntradaProveedor.GUIA_DESPACHO_PROVEEDOR_ID' => $id_guia)));
					$this->set('dbg', $materialesRelacionados);
					$materiales = array();
					foreach($materialesRelacionados as $material){
						$materiales[$material['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']] = $material['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE'];
					}
					$this->set('materiales', $materiales);
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
		if (!$this->CajaMaterialDeEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid caja material de embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CajaMaterialDeEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The caja material de embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caja material de embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CajaMaterialDeEmbalaje.' . $this->CajaMaterialDeEmbalaje->primaryKey => $id));
			$this->request->data = $this->CajaMaterialDeEmbalaje->find('first', $options);
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
		$this->CajaMaterialDeEmbalaje->id = $id;
		if (!$this->CajaMaterialDeEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid caja material de embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CajaMaterialDeEmbalaje->delete()) {
			$this->Session->setFlash(__('Caja material de embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Caja material de embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}