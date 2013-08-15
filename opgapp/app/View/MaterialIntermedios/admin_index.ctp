<div class="materialIntermedios index">
	<h2><?php echo __('Material Intermedios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('material_intermedio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_material_intermedio'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialIntermedios as $materialIntermedio): ?>
	<tr>
		<td><?php echo h($materialIntermedio['MaterialIntermedio']['material_intermedio_id']); ?>&nbsp;</td>
		<td><?php echo h($materialIntermedio['MaterialIntermedio']['nombre_material_intermedio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materialIntermedio['MaterialIntermedio']['material_intermedio_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materialIntermedio['MaterialIntermedio']['material_intermedio_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materialIntermedio['MaterialIntermedio']['material_intermedio_id']), null, __('Are you sure you want to delete # %s?', $materialIntermedio['MaterialIntermedio']['material_intermedio_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('action' => 'add')); ?></li>
	</ul>
</div>
