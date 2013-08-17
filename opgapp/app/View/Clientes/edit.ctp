<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cliente'); ?></legend>
	<?php

		echo $this->Form->input('CLIENTE_ID', array('visibility' => false));
		echo $this->Form->input('NOMBRE_CLIENTE', array('label'=>'Nombre'));
		echo $this->Form->input('DIRECCION_CLIENTE', array('label'=>'Dirección'));
		echo $this->Form->input('TELEFONO_CONTACTO_CLIENTE', array('label'=>'Teléfono'));
		echo $this->Form->input('EMAIL_CLIENTE', array('label'=>'E-Mail'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' => 'btn',))?>
</div>