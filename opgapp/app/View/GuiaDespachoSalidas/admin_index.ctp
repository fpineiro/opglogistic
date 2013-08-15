<div class="guiaDespachoSalidas index">
	<h2><?php echo __('Guia Despacho Salidas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_salida_id'); ?></th>
			<th><?php echo $this->Paginator->sort('orden_despacho_id'); ?></th>
			<th><?php echo $this->Paginator->sort('despacho_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_detalle_guia_despacho_salida'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($guiaDespachoSalidas as $guiaDespachoSalida): ?>
	<tr>
		<td><?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guiaDespachoSalida['OrdenDespacho']['orden_despacho_id'], array('controller' => 'orden_despachos', 'action' => 'view', $guiaDespachoSalida['OrdenDespacho']['orden_despacho_id'])); ?>
		</td>
		<td><?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['despacho_id']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['fecha_detalle_guia_despacho_salida']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id']), null, __('Are you sure you want to delete # %s?', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guia Despacho Salida'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('controller' => 'orden_despachos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('controller' => 'orden_despachos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('controller' => 'despacho_camions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despacho'), array('controller' => 'despacho_camions', 'action' => 'add')); ?> </li>
	</ul>
</div>
