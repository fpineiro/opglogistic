<div class="cajaMaterialIndividuals index">
	<h2><?php echo __('Caja Material Individuals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('CAJA_MATERIAL_INDIVIDUAL_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('POSICION_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_CAJA_MATERIAL_INDIVIDUAL'); ?></th>
			<th><?php echo $this->Paginator->sort('CAPACIDAD_CAJA_MATERIAL_INDIVIDUAL'); ?></th>
			<th><?php echo $this->Paginator->sort('ALTO_CAJA_MATERIAL_INDIVIDUAL'); ?></th>
			<th><?php echo $this->Paginator->sort('LARGO_CAJA_MATERIAL_INDIVIDUAL'); ?></th>
			<th><?php echo $this->Paginator->sort('ANCHO_CAJA_MATERIAL_INDIVIDUAL'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cajaMaterialIndividuals as $cajaMaterialIndividual): ?>
	<tr>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['POSICION_ID']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['NOMBRE_CAJA_MATERIAL_INDIVIDUAL']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['CAPACIDAD_CAJA_MATERIAL_INDIVIDUAL']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['ALTO_CAJA_MATERIAL_INDIVIDUAL']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['LARGO_CAJA_MATERIAL_INDIVIDUAL']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['ANCHO_CAJA_MATERIAL_INDIVIDUAL']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID']), null, __('Are you sure you want to delete # %s?', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Caja Material Individual'), array('action' => 'add')); ?></li>
	</ul>
</div>
