<div class="ordenCompras index">
	<h2><?php echo __('Orden Compras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_COMPRA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PROVEEDOR_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PROCESADA_ORDEN_COMPRA'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_ORDEN_COMPRA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordenCompras as $ordenCompra): ?>
	<tr>
		<td><?php echo h($ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenCompra['OrdenCompra']['PROVEEDOR_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenCompra['OrdenCompra']['PROCESADA_ORDEN_COMPRA']); ?>&nbsp;</td>
		<td><?php echo h($ordenCompra['OrdenCompra']['FECHA_ORDEN_COMPRA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']), null, __('Are you sure you want to delete # %s?', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orden Compra'), array('action' => 'add')); ?></li>
	</ul>
</div>
