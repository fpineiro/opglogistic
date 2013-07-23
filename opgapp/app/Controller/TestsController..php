<?php
class TestsController extends AppController {
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
				$this->Session->setFlash(__('Invalid testname or password, try again'));
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

    public function view($principal = null) {
        if (!$principal) {
            throw new NotFoundException(__('Invalid USER'));
        }

        $test = $this->Test->findById($principal);
        if (!$test) {
            throw new NotFoundException(__('Invalid USUARIO'));
        }
        $this->set('test', $test);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Test->create();
            if ($this->Test->save($this->request->data)) {
                $this->Session->setFlash(__('The test has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The test could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($principal = null) {
        $this->Test->principal = $principal;
        if (($this->Test->find('count', array('conditions' => array('Test.principal'=>$principal)))) == 0) {
   		    throw new NotFoundException(__('Invalid test'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Test->save($this->request->data)) {
                $this->Session->setFlash(__('The test has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The test could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Test->read(null, $principal);
            //unset($this->request->data['Test']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Test->id = $id;
        if (!$this->Test->exists()) {
            throw new NotFoundException(__('Invalid test'));
        }
        if ($this->Test->delete()) {
            $this->Session->setFlash(__('Test deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Test was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	
	public function index($filtro){
		if(isset($filtro)){
			$this->set('tests', $this->Test->find('all', array('conditions' => array('OR' => array('Test.role' => $filtro, 'Test.name' => $filtro, 'Test.lastname' => $filtro)))));				
		}else{
	        $this->set('tests', $this->Test->find('all'));			
		}
	}

 
	
}
?>