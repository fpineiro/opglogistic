<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('nombre_proveedor');
		echo $this->Form->input('direccion_proveedor');
		echo $this->Form->input('telefono_contacto_proveedor');
		echo $this->Form->input('email_proveedor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proveedor.proveedor_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Proveedor.proveedor_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?></li>
	</ul>
</div>
