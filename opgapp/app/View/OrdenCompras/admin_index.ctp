<div class="ordenCompras index">
	<h2><?php echo __('Orden Compras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('orden_compra_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proveedor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('procesada_orden_compra'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_orden_compra'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordenCompras as $ordenCompra): ?>
	<tr>
		<td><?php echo h($ordenCompra['OrdenCompra']['orden_compra_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordenCompra['Proveedor']['proveedor_id'], array('controller' => 'proveedors', 'action' => 'view', $ordenCompra['Proveedor']['proveedor_id'])); ?>
		</td>
		<td><?php echo h($ordenCompra['OrdenCompra']['procesada_orden_compra']); ?>&nbsp;</td>
		<td><?php echo h($ordenCompra['OrdenCompra']['fecha_orden_compra']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenCompra['OrdenCompra']['orden_compra_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenCompra['OrdenCompra']['orden_compra_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenCompra['OrdenCompra']['orden_compra_id']), null, __('Are you sure you want to delete # %s?', $ordenCompra['OrdenCompra']['orden_compra_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
