<div class="users form">
<?php   
	echo '<fieldset><legend>Ingresar usuario</legend>';
	echo $this->Form->create('User');
	echo $this->Form->input('role', 
	array(
    	'options' => array('cliente' => 'Cliente', 'jb' => 'Jefe de Bodega', 'admin' => 'Administrador'), 
		'label' => 'Tipo de Usuario: ',
    ));
	echo $this->Form->input('name', array('label' => 'Nombre: '));
	echo $this->Form->input('lastname', array('label' => 'Apellido: '));
	echo $this->Form->input('mail', array('label' => 'Correo Electronico: '));
	echo $this->Form->input('username', array('label' => 'Nombre de usuario: '));
    echo $this->Form->input('password', array('label' => 'Contraseña: '));
	echo '</br>';
	echo $this->Form->end(__('Agregar Usuario')); 
	echo '</fieldset>';
?>
    
</div>