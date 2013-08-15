<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><?php echo __('Add Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('NOMBRE_PROVEEDOR');
		echo $this->Form->input('DIRECCION_PROVEEDOR');
		echo $this->Form->input('TELEFONO_CONTACTO_PROVEEDOR');
		echo $this->Form->input('EMAIL_PROVEEDOR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?></li>
	</ul>
</div>
