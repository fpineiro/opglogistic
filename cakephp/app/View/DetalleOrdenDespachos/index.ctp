<div class="detalleOrdenDespachos index">
	<h2><?php echo __('Detalle Orden Despachos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_DESPACHO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CANTIDAD_DETALLE_ORDEN_DESPACHO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleOrdenDespachos as $detalleOrdenDespacho): ?>
	<tr>
		<td><?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['MATERIAL_INTERMEDIO_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['CANTIDAD_DETALLE_ORDEN_DESPACHO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID']), null, __('Are you sure you want to delete # %s?', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Orden Despacho'), array('action' => 'add')); ?></li>
	</ul>
</div>
