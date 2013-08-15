<div class="materialIntermedios form">
<?php echo $this->Form->create('MaterialIntermedio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Material Intermedio'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('NOMBRE_MATERIAL_INTERMEDIO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MaterialIntermedio.MATERIAL_INTERMEDIO_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MaterialIntermedio.MATERIAL_INTERMEDIO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('action' => 'index')); ?></li>
	</ul>
</div>
