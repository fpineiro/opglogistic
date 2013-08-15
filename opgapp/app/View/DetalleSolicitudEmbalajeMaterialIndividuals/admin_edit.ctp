<div class="detalleSolicitudEmbalajeMaterialIndividuals form">
<?php echo $this->Form->create('DetalleSolicitudEmbalajeMaterialIndividual'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Detalle Solicitud Embalaje Material Individual'); ?></legend>
	<?php
		echo $this->Form->input('solicitud_embalaje_id');
		echo $this->Form->input('material_individual_id');
		echo $this->Form->input('cantidad_detalle_solicitud_embalaje_material_individual');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleSolicitudEmbalajeMaterialIndividual.solicitud_embalaje_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleSolicitudEmbalajeMaterialIndividual.solicitud_embalaje_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Individuals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
