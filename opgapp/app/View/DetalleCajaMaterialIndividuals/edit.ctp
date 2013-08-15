<div class="detalleCajaMaterialIndividuals form">
<?php echo $this->Form->create('DetalleCajaMaterialIndividual'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Caja Material Individual'); ?></legend>
	<?php
		echo $this->Form->input('CAJA_MATERIAL_INDIVIDUAL_ID');
		echo $this->Form->input('MATERIAL_INDIVIDUAL_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_CAJA_MATERIAL_INDIVIDUAL');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleCajaMaterialIndividual.CAJA_MATERIAL_INDIVIDUAL_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleCajaMaterialIndividual.CAJA_MATERIAL_INDIVIDUAL_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material Individuals'), array('action' => 'index')); ?></li>
	</ul>
</div>
