<div class="clientes form">
<?php
	echo $this->Html->script('funciones');
	echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Cliente'); ?></legend>
	<?php
	
		echo $this->Form->input('CLIENTE_ID', array('visibility' => false));
		echo $this->Form->input('NOMBRE_CLIENTE', array('label'=>'Cliente: '));
		echo $this->Form->input('DIRECCION_CLIENTE', array('label'=>'Dirección: '));
		echo $this->Form->input('TELEFONO_CONTACTO_CLIENTE', array('label'=>'Teléfono: '));
		echo $this->Form->input('EMAIL_CLIENTE', array('label'=>'E-Mail: '));

		echo $this->Form->input('ID', array(
									    	'options' => $usuarios, 
											'label' => 'Cuenta: ',
											'id' => 'aidi'
								));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar Cliente')); ?>
</div>
