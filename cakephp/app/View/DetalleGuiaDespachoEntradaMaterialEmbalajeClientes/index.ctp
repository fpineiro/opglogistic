<div class="detalleGuiaDespachoEntradaMaterialEmbalajeClientes index">
	<h2><?php echo __('Detalle Guia Despacho Entrada Material Embalaje Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CAJA_MATERIAL_DE_EMBALAJE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MATERIAL_DE_EMBALAJE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_EMBALAJE_CLIENTE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoEntradaMaterialEmbalajeClientes as $detalleGuiaDespachoEntradaMaterialEmbalajeCliente): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['CAJA_MATERIAL_DE_EMBALAJE_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['MATERIAL_DE_EMBALAJE_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_EMBALAJE_CLIENTE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>
