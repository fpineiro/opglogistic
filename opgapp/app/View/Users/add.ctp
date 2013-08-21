<div class="users form">
<?php 
	echo $this->Html->script('funciones');
	echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Usuario'); ?></legend>
	<?php
		// Lista con bodegas echo $this->Form->input('BODEGA_ID');
		// Lista con clientes echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('ID');
		echo $this->Form->input('USERNAME', array('label' => 'Usuario: '));
		echo $this->Form->input('PASSWORD', array(
											'type' => 'password', 
											'label' => 'Contraseña: '
											));
		echo $this->Form->input('NAME', array('label' => 'Nombre: '));
		echo $this->Form->input('LASTNAME', array('label' => 'Apellido: '));
		echo $this->Form->input('MAIL', array('label' => 'E-mail: '));
		echo $this->Form->input('ROLE', array(
									    	'options' => array('admin' => 'Administrador', 'jb' => 'Jefe de Bodega', 'cliente' => 'Cliente'), 
											'label' => 'Tipo de Usuario: ',
											'id' => 'role'
									    ));
		/*echo '<div id="context" style="display: none">'.$this->Form->input('CLIENTE_ID', array(
									    	'options' => $clientes, 
											'label' => 'Cliente: ',
											'id' => 'cliente'
								)).'</div>';*/
	?>
	</fieldset>
<?php 
	$options = array(
		'label' => 'Agregar',
		'class' => 'btn btn-primary'
	);
	echo $this->Form->end(($options)); 
?>
</div>
