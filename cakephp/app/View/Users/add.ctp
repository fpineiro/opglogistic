<div class="users form">
<?php 
	echo $this->Html->script('funciones');
	echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><h3><?php echo __('Agregar Usuario'); ?></h3></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('USERNAME', array('label' => '<h5>Usuario</h5>', 'placeholder' => 'Ingrese nombre de usuario'));
		echo $this->Form->input('PASSWORD', array(
											'type' => 'password', 
											'label' => '<h5>Contraseña</h5>',
											'placeholder' => 'Ingrese contraseña'
											
											));
		echo $this->Form->input('PASSWORD_CONFIRMA', array(
											'type' => 'password', 
											'label' => '<h5>Repetir contraseña</h5>',
											'placeholder' => 'Ingrese contraseña nuevamente',
											));
		echo $this->Form->input('NAME', array('label' => '<h5>Nombre</h5>', 'placeholder' => 'Ingrese nombre del trabajador'));
		echo $this->Form->input('LASTNAME', array('label' => '<h5>Apellido</h5>', 'placeholder' => 'Ingrese apellido del trabajador'));
		echo $this->Form->input('MAIL', array('label' => '<h5>E-mail</h5>', 'placeholder' => 'Ingresar correo electronico'));
		echo $this->Form->input('ROLE', array(
									    	'options' => array('admin' => 'Administrador', 'jb' => 'Jefe de Bodega', 'cliente' => 'Cliente'), 
											'label' => '<h5>Tipo de Usuario</h5> ',
											'id' => 'role',
											'class' => 'input-medium'
									    ));
		
	?>
	</fieldset>

<?php 
	$options = array(
		'label' => 'Guardar datos',
		'class' => 'btn btn-success',
		'formnovalidate' => true
	);
	echo $this->Form->end(($options)); 
?>
</div>
