<?php
class ClientesController extends AppController {
	public $helpers = array('Html', 'Form', 'Js');
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid clientename or password, try again'));
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

    public function view($nombre_cliente = null) {
        if (!$nombre_cliente) {
            throw new NotFoundException(__('Invalid CLIENTE'));
        }

        $cliente = $this->Cliente->findByNombreCliente($nombre_cliente);
        if (!$cliente) {
            throw new NotFoundException(__('Invalid CLIENTE'));
        }
        $this->set('cliente', $cliente);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Cliente->create();
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(__('The cliente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->Cliente->id = $id;
		$this->set('DEBUG', $this->Cliente);
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Invalid cliente'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(__('The cliente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Cliente->read(null, $id);
        }
    }

    public function delete($cliente_id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Cliente->nombre_cliente = $cliente_id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Invalid cliente'));
        }
        if ($this->Cliente->delete()) {
            $this->Session->setFlash(__('Cliente deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Cliente was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	
	public function index($filtro){
		if(isset($filtro)){
			$this->set('clientes', $this->Cliente->find('all', array('conditions' => array('Cliente.nombre_cliente' => $filtro))));				
		}else{
	        $this->set('clientes', $this->Cliente->find('all'));			
		}
	}

 
	
}
?>