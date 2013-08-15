<div class="ordenDespachos index">
	<h2><?php echo __('Orden Despachos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('orden_despacho_id'); ?></th>
			<th><?php echo $this->Paginator->sort('guia_despacho_salida_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_automata_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_detalle_solicitud_despacho'); ?></th>
			<th><?php echo $this->Paginator->sort('destino_detalle_solicitud_despacho'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordenDespachos as $ordenDespacho): ?>
	<tr>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['orden_despacho_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordenDespacho['GuiaDespachoSalida']['guia_despacho_salida_id'], array('controller' => 'guia_despacho_salidas', 'action' => 'view', $ordenDespacho['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordenDespacho['EstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $ordenDespacho['EstadoAutomata']['estado_automata_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordenDespacho['Cliente']['cliente_id'], array('controller' => 'clientes', 'action' => 'view', $ordenDespacho['Cliente']['cliente_id'])); ?>
		</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['fecha_detalle_solicitud_despacho']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['destino_detalle_solicitud_despacho']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenDespacho['OrdenDespacho']['orden_despacho_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenDespacho['OrdenDespacho']['orden_despacho_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenDespacho['OrdenDespacho']['orden_despacho_id']), null, __('Are you sure you want to delete # %s?', $ordenDespacho['OrdenDespacho']['orden_despacho_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('controller' => 'guia_despacho_salidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Salida'), array('controller' => 'guia_despacho_salidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
