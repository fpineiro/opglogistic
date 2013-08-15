<div class="detalleOrdenCompras index">
	<h2><?php echo __('Detalle Orden Compras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('orden_compra_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_orden_compra'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleOrdenCompras as $detalleOrdenCompra): ?>
	<tr>
		<td><?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleOrdenCompra['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleOrdenCompra['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
		</td>
		<td><?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['cantidad_detalle_orden_compra']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id']), null, __('Are you sure you want to delete # %s?', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Orden Compra'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
