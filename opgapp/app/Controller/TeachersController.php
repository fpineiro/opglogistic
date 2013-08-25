<?php 

class TeachersController extends AppController{
	public $paginate = array(
		'limit'=>2,
		'order'=>array('Teacher.id' => 'asc')
	);
	public function index(){
		$this->Teacher->recursive = 0;
		$teachers = $this->paginate();
		if($this->request->is('requested')):
			return $teachers;
		else:
			$this->set('teachers',$teachers);
		endif;
		
	}

	public function add(){
		if($this->request->is('post')):
			if($this->Teacher->save($this->request->data)):
				$this->Session->setFlash('El profesor ha sido guardado.');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
		
	}
}

?>