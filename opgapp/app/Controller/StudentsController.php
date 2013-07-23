<?php 

class StudentsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index(){
		$params = array('order' =>'name desc');
		$this->set('estudiantes', $this->Student->find('all', $params));
		//$this->set('estudiantes', $this->Student->findByName('Luis'));
	}

	public function add() {
		if($this->request->is('post')):
			if($this->Student->save($this->request->data)):
				$this->Session->setFlash('Estudiante guardado con éxito');
				$this->redirect(array('action' => 'index'));
			endif;
		endif;
	}

	public function edit($id=null){
		$this->Student->id = $id;
		if($this->request->is('get')):
			$this->request->data = $this->Student->read();
		else: //Peticion de tipo no get (guardado)
			
			/*echo "<pre>";
			print_r($this->request->data);
			echo "</pre>";
			exit;
			//$this->request->data['Student']['name'];*/

			if($this->Student->save($this->request->data)):
				$this->Session->setFlash('Estudiante '.$this->request->data['Student']['name'].' guardado');
				$this->redirect(array('action'=>'index'));
			else:
				$this->Session->setFlash('No se pudo guardar');
			endif;
		endif;
	}

	public function delete($id){
		if($this->request->is('get')):
			throw new MethodNotAllowedException('No se puede eliminar');
		else:
			if($this->Student->delete($id)):
				$this->Session->setFlash('El estudiante fue eliminado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
}

?>