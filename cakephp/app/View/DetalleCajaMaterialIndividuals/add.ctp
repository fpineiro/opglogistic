<div class="detalleCajaMaterialIndividuals form">
<?php echo $this->Form->create('DetalleCajaMaterialIndividual'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Caja Material Individual'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INDIVIDUAL_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_CAJA_MATERIAL_INDIVIDUAL');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Caja Material Individuals'), array('action' => 'index')); ?></li>
	</ul>
</div>
