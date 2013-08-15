<div class="cajaMaterialIndividuals index">
	<h2><?php echo __('Caja Material Individuals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('caja_material_individual_id'); ?></th>
			<th><?php echo $this->Paginator->sort('posicion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_caja_material_individual'); ?></th>
			<th><?php echo $this->Paginator->sort('capacidad_caja_material_individual'); ?></th>
			<th><?php echo $this->Paginator->sort('alto_caja_material_individual'); ?></th>
			<th><?php echo $this->Paginator->sort('largo_caja_material_individual'); ?></th>
			<th><?php echo $this->Paginator->sort('ancho_caja_material_individual'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cajaMaterialIndividuals as $cajaMaterialIndividual): ?>
	<tr>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cajaMaterialIndividual['Posicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $cajaMaterialIndividual['Posicion']['posicion_id'])); ?>
		</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['nombre_caja_material_individual']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['capacidad_caja_material_individual']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['alto_caja_material_individual']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['largo_caja_material_individual']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['ancho_caja_material_individual']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id']), null, __('Are you sure you want to delete # %s?', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
	</ul>
</div>
