<div class="detalleGuiaDespachoSalidas index">
	<h2><?php echo __('Detalle Guia Despacho Salidas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_salida_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_intermedio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_guia_despacho_salida'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoSalidas as $detalleGuiaDespachoSalida): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoSalida['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleGuiaDespachoSalida['MaterialIntermedio']['material_intermedio_id'])); ?>
		</td>
		<td><?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['cantidad_detalle_guia_despacho_salida']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
