<div class="posicions index">
	<h2><?php echo __('Posicions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('posicion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pos_posicion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bodega_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_posicion'); ?></th>
			<th><?php echo $this->Paginator->sort('alto_posicion'); ?></th>
			<th><?php echo $this->Paginator->sort('largo_posicion'); ?></th>
			<th><?php echo $this->Paginator->sort('ancho_posicion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($posicions as $posicion): ?>
	<tr>
		<td><?php echo h($posicion['Posicion']['posicion_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($posicion['PosPosicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $posicion['PosPosicion']['posicion_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($posicion['Bodega']['bodega_id'], array('controller' => 'bodegas', 'action' => 'view', $posicion['Bodega']['bodega_id'])); ?>
		</td>
		<td><?php echo h($posicion['Posicion']['nombre_posicion']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['alto_posicion']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['largo_posicion']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['ancho_posicion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $posicion['Posicion']['posicion_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $posicion['Posicion']['posicion_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $posicion['Posicion']['posicion_id']), null, __('Are you sure you want to delete # %s?', $posicion['Posicion']['posicion_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Posicion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pos Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('controller' => 'bodegas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('controller' => 'bodegas', 'action' => 'add')); ?> </li>
	</ul>
</div>
