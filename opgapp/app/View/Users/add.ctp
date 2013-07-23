<div class="users form">
<?php   
	echo $this->Html->script('funciones');
	echo '<fieldset><legend>Ingresar usuario</legend>';
	
	echo $this->Form->create('User');

	echo $this->Form->input('role', 
	array(
    	'options' => array('admin' => 'Administrador', 'jb' => 'Jefe de Bodega', 'cliente' => 'Cliente'), 
		'label' => 'Tipo de Usuario: ',
		'onChange' => 'checkOption()',
		'id' => 'role'
    ));
	echo $this->Form->input('name', array('label' => 'Nombre: '));
	echo $this->Form->input('lastname', array('label' => 'Apellido: '));
	echo $this->Form->input('mail', array('label' => 'Correo Electronico: '));
	echo $this->Form->input('username', array('label' => 'Nombre de usuario: '));
    echo $this->Form->input('password', array('label' => 'Contraseña: '));
    echo '<div id="context" style="display: none">'.$this->Form->input('nombre_cliente',array('label'=>'Cliente asociado', 'value' => '')).'</div>';
	echo '</br>';

	echo $this->Form->end(__('Agregar Usuario')); 
	echo '</fieldset>';
?>
    
</div>