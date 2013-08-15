<div class="materialIndividuals index">
	<h2><?php echo __('Material Individuals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('material_individual_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_material_individual'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialIndividuals as $materialIndividual): ?>
	<tr>
		<td><?php echo h($materialIndividual['MaterialIndividual']['material_individual_id']); ?>&nbsp;</td>
		<td><?php echo h($materialIndividual['MaterialIndividual']['nombre_material_individual']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materialIndividual['MaterialIndividual']['material_individual_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materialIndividual['MaterialIndividual']['material_individual_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materialIndividual['MaterialIndividual']['material_individual_id']), null, __('Are you sure you want to delete # %s?', $materialIndividual['MaterialIndividual']['material_individual_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Material Individual'), array('action' => 'add')); ?></li>
	</ul>
</div>
