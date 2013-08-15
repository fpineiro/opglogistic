<div class="detalleCajaMaterialIndividuals view">
<h2><?php  echo __('Detalle Caja Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('Caja Material Individual Id'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Individual'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleCajaMaterialIndividual['MaterialIndividual']['material_individual_id'], array('controller' => 'material_individuals', 'action' => 'view', $detalleCajaMaterialIndividual['MaterialIndividual']['material_individual_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Caja Material Individual'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['cantidad_detalle_caja_material_individual']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Caja Material Individual'), array('action' => 'edit', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Caja Material Individual'), array('action' => 'delete', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['caja_material_individual_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Caja Material Individual'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
