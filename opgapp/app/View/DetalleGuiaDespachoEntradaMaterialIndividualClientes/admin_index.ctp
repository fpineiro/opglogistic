<div class="detalleGuiaDespachoEntradaMaterialIndividualClientes index">
	<h2><?php echo __('Detalle Guia Despacho Entrada Material Individual Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_individual_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caja_material_individual_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_gd_entrada_material_individual_cliente'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoEntradaMaterialIndividualClientes as $detalleGuiaDespachoEntradaMaterialIndividualCliente): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialIndividualCliente['MaterialIndividual']['material_individual_id'], array('controller' => 'material_individuals', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialIndividualCliente['MaterialIndividual']['material_individual_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialIndividualCliente['CajaMaterialIndividual']['caja_material_individual_id'], array('controller' => 'caja_material_individuals', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialIndividualCliente['CajaMaterialIndividual']['caja_material_individual_id'])); ?>
		</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['cantidad_detalle_gd_entrada_material_individual_cliente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['guia_despacho_cliente_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Individuals'), array('controller' => 'caja_material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Individual'), array('controller' => 'caja_material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
