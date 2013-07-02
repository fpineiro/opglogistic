<?php

class NoticiasController extends AppController {
    public $helpers = array ('Html','Form');

    function index() {
        $this->set('noticias', $this->Noticia->find('all'));
    }
	
	public function view($id = null) {
        $this->Noticia->id = $id;
        $this->set('noticia', $this->Noticia->read());
    }
	
	public function add() {
        if ($this->request->is('noticia')) {
            if ($this->Noticia->save($this->request->data)) {
                $this->Session->setFlash('Your noticia has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	function edit($id = null) {
 	   $this->Noticia->id = $id;
    	if ($this->request->is('get')) {
        	$this->request->data = $this->Noticia->read();
	    } else {
    	    if ($this->Noticia->save($this->request->data)) {
	            $this->Session->setFlash('Your noticia has been updated.');
    	        $this->redirect(array('action' => 'index'));
        	}
    	}
	}
	
	function delete($id) {
		if (!$this->request->is('noticia')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Noticia->delete($id)) {
			$this->Session->setFlash('The noticia with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>