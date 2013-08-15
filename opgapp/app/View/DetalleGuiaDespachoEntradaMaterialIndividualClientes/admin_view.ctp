<div class="detalleGuiaDespachoEntradaMaterialIndividualClientes view">
<h2><?php  echo __('Detalle Guia Despacho Entrada Material Individual Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Cliente Id'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Individual'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialIndividualCliente['MaterialIndividual']['material_individual_id'], array('controller' => 'material_individuals', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialIndividualCliente['MaterialIndividual']['material_individual_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caja Material Individual'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialIndividualCliente['CajaMaterialIndividual']['caja_material_individual_id'], array('controller' => 'caja_material_individuals', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialIndividualCliente['CajaMaterialIndividual']['caja_material_individual_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Gd Entrada Material Individual Cliente'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['cantidad_detalle_gd_entrada_material_individual_cliente']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Individual Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Individuals'), array('controller' => 'caja_material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Individual'), array('controller' => 'caja_material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
