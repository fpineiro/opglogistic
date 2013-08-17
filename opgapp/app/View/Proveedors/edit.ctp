<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><?php echo('Editar proveedor'); ?></legend>
	<?php
		echo $this->Form->input('PROVEEDOR_ID',array('visibility'=>false));
		echo $this->Form->input('NOMBRE_PROVEEDOR',array('label'=>'Nombre:'));
		echo $this->Form->input('DIRECCION_PROVEEDOR',array('label'=>'Dirección:'));
		echo $this->Form->input('TELEFONO_CONTACTO_PROVEEDOR',array('label'=>'Teléfono:'));
		echo $this->Form->input('EMAIL_PROVEEDOR',array('label'=>'E-Mail:'));
	?>
	</fieldset>
<?php echo $this->Form->end(array(
	'label'=>'Guardar',
	'class'=>'btn')); ?>
</div>