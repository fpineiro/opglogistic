<h1>Agregar estudiante</h1>
<?php 
	echo $this->Form->create('Student');
	echo $this->Form->input('name', array('label' => 'Ingresar nombre: '));
	echo $this->Form->input('last_name', array('label' => 'Ingresar apellido: '));
	echo $this->Form->end('Guardar estudiante');
?>