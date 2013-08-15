<div class="ordenInternas index">
	<h2><?php echo __('Orden Internas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('orden_interna_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bodega_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_automata_id'); ?></th>
			<th><?php echo $this->Paginator->sort('orden_despacho_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_detalle_orden_interna'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordenInternas as $ordenInterna): ?>
	<tr>
		<td><?php echo h($ordenInterna['OrdenInterna']['orden_interna_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordenInterna['Bodega']['bodega_id'], array('controller' => 'bodegas', 'action' => 'view', $ordenInterna['Bodega']['bodega_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordenInterna['EstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $ordenInterna['EstadoAutomata']['estado_automata_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordenInterna['OrdenDespacho']['orden_despacho_id'], array('controller' => 'orden_despachos', 'action' => 'view', $ordenInterna['OrdenDespacho']['orden_despacho_id'])); ?>
		</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['fecha_detalle_orden_interna']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenInterna['OrdenInterna']['orden_interna_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenInterna['OrdenInterna']['orden_interna_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenInterna['OrdenInterna']['orden_interna_id']), null, __('Are you sure you want to delete # %s?', $ordenInterna['OrdenInterna']['orden_interna_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orden Interna'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('controller' => 'bodegas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('controller' => 'bodegas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('controller' => 'orden_despachos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('controller' => 'orden_despachos', 'action' => 'add')); ?> </li>
	</ul>
</div>
