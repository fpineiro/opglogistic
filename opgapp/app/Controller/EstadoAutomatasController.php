<?php
App::uses('AppController', 'Controller');
/**
 * EstadoAutomatas Controller
 *
 * @property EstadoAutomata $EstadoAutomata
 */
class EstadoAutomatasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstadoAutomata->recursive = 0;
		$this->set('estadoAutomatas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstadoAutomata->exists($id)) {
			throw new NotFoundException(__('Invalid estado automata'));
		}
		$options = array('conditions' => array('EstadoAutomata.' . $this->EstadoAutomata->primaryKey => $id));
		$this->set('estadoAutomata', $this->EstadoAutomata->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstadoAutomata->create();
			if ($this->EstadoAutomata->save($this->request->data)) {
				$this->Session->setFlash(__('The estado automata has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado automata could not be saved. Please, try again.'));
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
		if (!$this->EstadoAutomata->exists($id)) {
			throw new NotFoundException(__('Invalid estado automata'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstadoAutomata->save($this->request->data)) {
				$this->Session->setFlash(__('The estado automata has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado automata could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstadoAutomata.' . $this->EstadoAutomata->primaryKey => $id));
			$this->request->data = $this->EstadoAutomata->find('first', $options);
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
		$this->EstadoAutomata->id = $id;
		if (!$this->EstadoAutomata->exists()) {
			throw new NotFoundException(__('Invalid estado automata'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstadoAutomata->delete()) {
			$this->Session->setFlash(__('Estado automata deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estado automata was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
