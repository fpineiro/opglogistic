<div class="posicions index">
	<h2><?php echo __('Posicions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('POSICION_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('POS_POSICION_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('BODEGA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_POSICION'); ?></th>
			<th><?php echo $this->Paginator->sort('ALTO_POSICION'); ?></th>
			<th><?php echo $this->Paginator->sort('LARGO_POSICION'); ?></th>
			<th><?php echo $this->Paginator->sort('ANCHO_POSICION'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($posicions as $posicion): ?>
	<tr>
		<td><?php echo h($posicion['Posicion']['POSICION_ID']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['POS_POSICION_ID']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['BODEGA_ID']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['NOMBRE_POSICION']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['ALTO_POSICION']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['LARGO_POSICION']); ?>&nbsp;</td>
		<td><?php echo h($posicion['Posicion']['ANCHO_POSICION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $posicion['Posicion']['POSICION_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $posicion['Posicion']['POSICION_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $posicion['Posicion']['POSICION_ID']), null, __('Are you sure you want to delete # %s?', $posicion['Posicion']['POSICION_ID'])); ?>
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
	</ul>
</div>
