<div class="detalleGuiaDespachoEntradaMaterialIndividualClientes form">
<?php echo $this->Form->create('DetalleGuiaDespachoEntradaMaterialIndividualCliente'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Detalle Guia Despacho Entrada Material Individual Cliente'); ?></legend>
	<?php
		echo $this->Form->input('material_individual_id');
		echo $this->Form->input('caja_material_individual_id');
		echo $this->Form->input('cantidad_detalle_gd_entrada_material_individual_cliente');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Individual Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Individuals'), array('controller' => 'caja_material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Individual'), array('controller' => 'caja_material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
