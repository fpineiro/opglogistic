<div class="materialIntermedios form">
<?php echo $this->Form->create('MaterialIntermedio'); ?>
	<fieldset>
		<legend><?php echo __('Add Material Intermedio'); ?></legend>
	<?php
		echo $this->Form->input('NOMBRE_MATERIAL_INTERMEDIO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('action' => 'index')); ?></li>
	</ul>
</div>
