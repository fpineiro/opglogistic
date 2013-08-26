<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudEmbalajes Controller
 *
 * @property SolicitudEmbalaje $SolicitudEmbalaje
 */
class SolicitudEmbalajesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SolicitudEmbalaje->recursive = 0;
		$this->set('solicitudEmbalajes', $this->paginate());
		$this->set('estados',$this->SolicitudEmbalaje->EstadoAutomata->find('all'));
		if(AuthComponent::user('ROLE')=="cliente"){
			$this->set('solicitudes', $this->SolicitudEmbalaje->find('all', array(
			'conditions' => array(
				'Cliente.NOMBRE_CLIENTE' => AuthComponent::user('NAME')
			)
		)));
		}else{
			$this->set('solicitudes', $this->SolicitudEmbalaje->find('all'));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud embalaje'));
		}
		$options = array('conditions' => array('SolicitudEmbalaje.' . $this->SolicitudEmbalaje->primaryKey => $id));
		$options2 = array('conditions' => array('DetalleSolicitudEmbalajeMaterialEmbalaje.' . $this->SolicitudEmbalaje->primaryKey => $id));
		$options3 = array('conditions' => array('DetalleSolicitudEmbalajeMaterialIndividual.' . $this->SolicitudEmbalaje->primaryKey => $id));
		$options4 = array('conditions' => array('DetalleSolicitudEmbalajeMaterialIntermedio.' . $this->SolicitudEmbalaje->primaryKey => $id));
		$this->set('solicitudEmbalaje', $this->SolicitudEmbalaje->find('first', $options));
		$this->set('detalleEmbalaje', $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialEmbalaje->find('all', $options2));
		$this->set('detalleIndividual', $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIndividual->find('all', $options3));
		$this->set('detalleIntermedio', $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIntermedio->find('all', $options4));
		$this->set('estados', $this->SolicitudEmbalaje->EstadoAutomata->find('all'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SolicitudEmbalaje->create();
			$boolEmbalaje = true;
			if(isset($this->request->data['datos']['materialEmbalaje'])){
				$this->request->data['SolicitudEmbalaje']['CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE']=1;
			}else{
				$boolEmbalaje = false;
			}
			$query = $this->SolicitudEmbalaje->save($this->request->data);

			//Detalle Material Individual
			$nombre_material_individual = $this->request->data['datos']['materialIndividual']['nombre'];
			$nombres_id = array();
			foreach($nombre_material_individual as $nombre){
				$nombres_db = $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIndividual->MaterialIndividual->find('first',array('conditions' => array('MaterialIndividual.NOMBRE_MATERIAL_INDIVIDUAL' => $nombre)));
				array_push($nombres_id, $nombres_db['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']);
			}
			$cantidad_material_individual = $this->request->data['datos']['materialIndividual']['cantidad'];
			$cantidades = array();
			foreach($cantidad_material_individual as $cantidad){
				array_push($cantidades, $cantidad);
			}
			$saveall = array();
			for($i=0;$i<count($cantidades);$i++){
				$temp = array('DETALLE_SOLICITUD_EMBALAJE_MIND_ID' => '','SOLICITUD_EMBALAJE_ID' => $this->request->data['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'], 'MATERIAL_INDIVIDUAL_ID' => $nombres_id[$i], 'CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_INDIVIDUAL' => $cantidades[$i]);
				array_push($saveall, $temp);
			}
			$this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIndividual->saveAll($saveall);

			//Detalle Material Embalaje
			if($boolEmbalaje){
				$nombre_material_embalaje = $this->request->data['datos']['materialEmbalaje']['nombre'];
				$nombres_id = array();
				foreach($nombre_material_embalaje as $nombre){
					$nombres_db = $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialEmbalaje->MaterialDeEmbalaje->find('first',array('conditions' => array('MaterialDeEmbalaje.NOMBRE_MATERIAL_DE_EMBALAJE' => $nombre)));
					array_push($nombres_id, $nombres_db['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']);
				}
				$cantidad_material_embalaje = $this->request->data['datos']['materialEmbalaje']['cantidad'];
				$cantidades = array();
				foreach($cantidad_material_embalaje as $cantidad){
					array_push($cantidades, $cantidad);
				}
				$savealldos = array();
				for($i=0;$i<count($cantidades);$i++){
					$temp = array('DETALLE_SOLICITUD_EMBALAJE_ME_ID' => '','SOLICITUD_EMBALAJE_ID' => $this->request->data['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'], 'MATERIAL_DE_EMBALAJE_ID' => $nombres_id[$i], 'CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_EMBALAJE' => $cantidades[$i]);
					array_push($savealldos, $temp);
				}
				$this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialEmbalaje->saveAll($savealldos);
			}

			//Detalle Material Intermedio
			$nombre_material_intermedio = $this->request->data['datos']['materialIntermedio']['nombre'];
			$nombres_id = array();
			foreach($nombre_material_intermedio as $nombre){
				$nombres_db = $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIntermedio->MaterialIntermedio->find('first',array('conditions' => array('MaterialIntermedio.NOMBRE_MATERIAL_INTERMEDIO' => $nombre)));
				array_push($nombres_id, $nombres_db['MaterialIntermedio']['MATERIAL_INTERMEDIO_ID']);
			}
			$cantidad_material_intermedio = $this->request->data['datos']['materialIntermedio']['cantidad'];
			$cantidades = array();
			foreach($cantidad_material_intermedio as $cantidad){
				array_push($cantidades, $cantidad);
			}
			$savealltres = array();
			for($i=0;$i<count($cantidades);$i++){
				$temp = array('DETALLE_SOLICITUD_EMBALAJE_MINT_ID' => '','SOLICITUD_EMBALAJE_ID' => $this->request->data['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'], 'MATERIAL_INTERMEDIO_ID' => $nombres_id[$i], 'CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE' => $cantidades[$i]);
				array_push($savealltres, $temp);
			}
			$this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIntermedio->saveAll($savealltres);

			if ($query){
				$this->redirect(array('action' => 'index'));
			}
		}else{
			$this->set('users', $this->SolicitudEmbalaje->Cliente->User->find('all'));
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
		if (!$this->SolicitudEmbalaje->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud embalaje'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SolicitudEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SolicitudEmbalaje.' . $this->SolicitudEmbalaje->primaryKey => $id));
			$this->request->data = $this->SolicitudEmbalaje->find('first', $options);
			$this->set('solicitud', $this->SolicitudEmbalaje->find('first', $options));
			$this->set('estados', $this->SolicitudEmbalaje->EstadoAutomata->find('all'));
			$this->set('clientes', $this->SolicitudEmbalaje->Cliente->find('all'));
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
		$this->SolicitudEmbalaje->id = $id;
		if (!$this->SolicitudEmbalaje->exists()) {
			throw new NotFoundException(__('Invalid solicitud embalaje'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SolicitudEmbalaje->delete()) {
			$this->Session->setFlash(__('Solicitud embalaje deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Solicitud embalaje was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function findindividual($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIndividual->MaterialIndividual->find('all', array(
				'conditions' => array('OR' => array('MaterialIndividual.NOMBRE_MATERIAL_INDIVIDUAL LIKE' => '%'.$nombre.'%')),
				'limit' => '3'
			)));				
		}
	}

	public function finddeembalaje($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialEmbalaje->MaterialDeEmbalaje->find('all', array(
				'conditions' => array('OR' => array('MaterialDeEmbalaje.NOMBRE_MATERIAL_DE_EMBALAJE LIKE' => '%'.$nombre.'%')),
				'limit' => '3'
			)));				
		}
	}

	public function findintermedio($nombre = null) {
		if(isset($nombre)){
			$this->set('names', $this->SolicitudEmbalaje->DetalleSolicitudEmbalajeMaterialIntermedio->MaterialIntermedio->find('all', array(
				'conditions' => array('OR' => array('MaterialIntermedio.NOMBRE_MATERIAL_INTERMEDIO LIKE' => '%'.$nombre.'%')),
				'limit' => '3'
			)));				
		}
	}
}
