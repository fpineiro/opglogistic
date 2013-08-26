<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><h3><?php echo __('Editar Cliente'); ?></h3></legend>
	<?php
		echo $this->Form->input('CLIENTE_ID', array('visibility' => false));
		echo $this->Form->input('NOMBRE_CLIENTE', array('label'=>'<h5>Nombre</h5>'));
		echo $this->Form->input('DIRECCION_CLIENTE', array('label'=>'<h5>Dirección</h5>'));
		echo $this->Form->input('TELEFONO_CONTACTO_CLIENTE', array('label'=>'<h5>Teléfono</h5>'));
		echo $this->Form->input('EMAIL_CLIENTE', array('label'=>'<h5>E-Mail</h5>'));
	?>
	</fieldset>

<?php echo $this->Form->end(array('label' => 'Guardar', 'class' => 'btn btn-success','formnovalidate' => true))?>
</div>