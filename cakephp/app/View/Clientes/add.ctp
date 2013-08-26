<div class="clientes form">
<?php
	echo $this->Html->script('funciones');
	echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><h3><?php echo __('Agregar Cliente'); ?></h3></legend>
	<?php
		echo $this->Form->input('CLIENTE_ID', array('visibility' => false));
		echo $this->Form->input('NOMBRE_CLIENTE', array('label'=>'<h5>Cliente</h5>','placeholder' => 'Ingrese nombre de cliente'));
		echo $this->Form->input('DIRECCION_CLIENTE', array('label'=>'<h5>Dirección</h5>','placeholder' => 'Ingrese la dirección'));
		echo $this->Form->input('TELEFONO_CONTACTO_CLIENTE', array('label'=>'<h5>Teléfono</h5>','placeholder' => 'Ingrese el teléfono'));
		echo $this->Form->input('EMAIL_CLIENTE', array('label'=>'<h5>E-Mail</h5>','placeholder' => 'Ingrese correo electrónico'));

		echo $this->Form->input('ID', array(
									    	'options' => $usuarios, 
											'label' => '<h5>Cuenta</h5>',
											'id' => 'aidi'
								));
	?>
	</fieldset>

<?php echo $this->Form->end(array('label' => 'Guardar datos', 'class' => 'btn btn-success','formnovalidate' => true))?>
</div>
