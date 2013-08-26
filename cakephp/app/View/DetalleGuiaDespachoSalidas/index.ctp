<div class="detalleGuiaDespachoSalidas index">
	<h2><?php echo __('Detalle Guia Despacho Salidas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_SALIDA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CANTIDAD_DETALLE_GUIA_DESPACHO_SALIDA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoSalidas as $detalleGuiaDespachoSalida): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['MATERIAL_INTERMEDIO_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['CANTIDAD_DETALLE_GUIA_DESPACHO_SALIDA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Salida'), array('action' => 'add')); ?></li>
	</ul>
</div>
