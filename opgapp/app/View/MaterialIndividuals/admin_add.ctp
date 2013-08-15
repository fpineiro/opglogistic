<div class="materialIndividuals form">
<?php echo $this->Form->create('MaterialIndividual'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Material Individual'); ?></legend>
	<?php
		echo $this->Form->input('nombre_material_individual');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Material Individuals'), array('action' => 'index')); ?></li>
	</ul>
</div>
