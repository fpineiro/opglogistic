<div class="compatibilidads form">
<?php echo $this->Form->create('Compatibilidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Compatibilidad'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Compatibilidad.MATERIAL_INTERMEDIO_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Compatibilidad.MATERIAL_INTERMEDIO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Compatibilidads'), array('action' => 'index')); ?></li>
	</ul>
</div>
