<?php
App::uses('AppController', 'Controller');
/**
 * AutomataEstados Controller
 *
 * @property AutomataEstado $AutomataEstado
 */
class AutomataEstadosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AutomataEstado->recursive = 0;
		$this->set('automataEstados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AutomataEstado->exists($id)) {
			throw new NotFoundException(__('Invalid automata estado'));
		}
		$options = array('conditions' => array('AutomataEstado.' . $this->AutomataEstado->primaryKey => $id));
		$this->set('automataEstado', $this->AutomataEstado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AutomataEstado->create();
			if ($this->AutomataEstado->save($this->request->data)) {
				$this->Session->setFlash(__('The automata estado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automata estado could not be saved. Please, try again.'));
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
		if (!$this->AutomataEstado->exists($id)) {
			throw new NotFoundException(__('Invalid automata estado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AutomataEstado->save($this->request->data)) {
				$this->Session->setFlash(__('The automata estado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automata estado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AutomataEstado.' . $this->AutomataEstado->primaryKey => $id));
			$this->request->data = $this->AutomataEstado->find('first', $options);
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
		$this->AutomataEstado->id = $id;
		if (!$this->AutomataEstado->exists()) {
			throw new NotFoundException(__('Invalid automata estado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AutomataEstado->delete()) {
			$this->Session->setFlash(__('Automata estado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Automata estado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
