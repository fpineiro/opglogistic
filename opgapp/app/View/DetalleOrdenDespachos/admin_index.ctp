<div class="detalleOrdenDespachos index">
	<h2><?php echo __('Detalle Orden Despachos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('orden_despacho_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_intermedio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_orden_despacho'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleOrdenDespachos as $detalleOrdenDespacho): ?>
	<tr>
		<td><?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleOrdenDespacho['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleOrdenDespacho['MaterialIntermedio']['material_intermedio_id'])); ?>
		</td>
		<td><?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['cantidad_detalle_orden_despacho']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id']), null, __('Are you sure you want to delete # %s?', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
