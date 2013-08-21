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
	public function index() {// ** RECORDAR QUE SE DEBE PASAR COMO ARGUMENTO EL NOMBRE DEL CLIENTE, SACADO POR EL USUARIO CONECTADO **
		$this->SolicitudEmbalaje->recursive = 0;
		$this->set('solicitudEmbalajes', $this->paginate());
		$this->set('estados',$this->SolicitudEmbalaje->EstadoAutomata->find('all'));
		$this->set('solicitudes', $this->SolicitudEmbalaje->find('all', array(
			'conditions' => array(
				'Cliente.NOMBRE_CLIENTE' => 'FallabellaMan' // ** Esto debe ser generico, no estatico **
			)
		)));
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
		$this->set('estados',$this->SolicitudEmbalaje->EstadoAutomata->find('all'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SolicitudEmbalaje->create();
			if ($this->SolicitudEmbalaje->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud embalaje has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud embalaje could not be saved. Please, try again.'));
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
}
