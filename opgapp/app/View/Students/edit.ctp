<h1>Editar estudiante</h1>

<?php 

	echo $this->Form->create('Student', array('action' => 'edit'));
	echo $this->Form->input('name', array('label' => 'Ingresar nuevo nombre: '));
	echo $this->Form->input('last_name', array('label' => 'Ingresar nuevo apellido: '));
	echo $this->Form->input('id', array('type'=>'hidden'));
	echo $this->Form->end('Guardar cambios');

?>