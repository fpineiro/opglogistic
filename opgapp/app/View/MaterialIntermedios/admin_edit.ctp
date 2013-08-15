<div class="materialIntermedios form">
<?php echo $this->Form->create('MaterialIntermedio'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Material Intermedio'); ?></legend>
	<?php
		echo $this->Form->input('material_intermedio_id');
		echo $this->Form->input('nombre_material_intermedio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MaterialIntermedio.material_intermedio_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MaterialIntermedio.material_intermedio_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('action' => 'index')); ?></li>
	</ul>
</div>
