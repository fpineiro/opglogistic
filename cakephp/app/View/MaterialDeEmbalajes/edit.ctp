<div class="materialDeEmbalajes form">
<?php echo $this->Form->create('MaterialDeEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Edit Material De Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('NOMBRE_MATERIAL_DE_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MaterialDeEmbalaje.MATERIAL_DE_EMBALAJE_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MaterialDeEmbalaje.MATERIAL_DE_EMBALAJE_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('action' => 'index')); ?></li>
	</ul>
</div>
