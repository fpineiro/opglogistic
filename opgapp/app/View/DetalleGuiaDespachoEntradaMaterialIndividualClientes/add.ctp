<div class="detalleGuiaDespachoEntradaMaterialIndividualClientes form">
<?php echo $this->Form->create('DetalleGuiaDespachoEntradaMaterialIndividualCliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Guia Despacho Entrada Material Individual Cliente'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INDIVIDUAL_ID');
		echo $this->Form->input('CAJA_MATERIAL_INDIVIDUAL_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Individual Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
