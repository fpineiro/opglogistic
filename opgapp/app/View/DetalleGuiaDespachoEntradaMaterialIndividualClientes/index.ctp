<div class="detalleGuiaDespachoEntradaMaterialIndividualClientes index">
	<h2><?php echo __('Detalle Guia Despacho Entrada Material Individual Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MATERIAL_INDIVIDUAL_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CAJA_MATERIAL_INDIVIDUAL_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoEntradaMaterialIndividualClientes as $detalleGuiaDespachoEntradaMaterialIndividualCliente): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['MATERIAL_INDIVIDUAL_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['CAJA_MATERIAL_INDIVIDUAL_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
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
	</ul>
</div>
