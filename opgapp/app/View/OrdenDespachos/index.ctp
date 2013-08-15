<div class="ordenDespachos index">
	<h2><?php echo __('Orden Despachos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_DESPACHO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_SALIDA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_DETALLE_SOLICITUD_DESPACHO'); ?></th>
			<th><?php echo $this->Paginator->sort('DESTINO_DETALLE_SOLICITUD_DESPACHO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordenDespachos as $ordenDespacho): ?>
	<tr>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['GUIA_DESPACHO_SALIDA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['FECHA_DETALLE_SOLICITUD_DESPACHO']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['DESTINO_DETALLE_SOLICITUD_DESPACHO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID']), null, __('Are you sure you want to delete # %s?', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('action' => 'add')); ?></li>
	</ul>
</div>
