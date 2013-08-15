<div class="detalleCajaMaterialIndividuals index">
	<h2><?php echo __('Detalle Caja Material Individuals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('caja_material_individual_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_individual_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_caja_material_individual'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleCajaMaterialIndividuals as $detalleCajaMaterialIndividual): ?>
	<tr>
		<td><?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleCajaMaterialIndividual['MaterialIndividual']['material_individual_id'], array('controller' => 'material_individuals', 'action' => 'view', $detalleCajaMaterialIndividual['MaterialIndividual']['material_individual_id'])); ?>
		</td>
		<td><?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['cantidad_detalle_caja_material_individual']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Caja Material Individual'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
