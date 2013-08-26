<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><h3><?php echo __('Agregar proovedor'); ?></h3></legend>
	<?php
		echo $this->Form->input('NOMBRE_PROVEEDOR', array('label'=>'<h5>Nombre</h5>'));
		echo $this->Form->input('DIRECCION_PROVEEDOR', array('label'=>'<h5>Dirección</h5>'));
		echo $this->Form->input('TELEFONO_CONTACTO_PROVEEDOR', array('label'=>'<h5>Teléfono</h5>'));
		echo $this->Form->input('EMAIL_PROVEEDOR', array('label'=>'<h5>E-Mail</h5>'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Guardar datos', 'class' => 'btn btn-success','formnovalidate' => true))?>
</div>

