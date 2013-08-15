<div class="materialDeEmbalajes form">
<?php echo $this->Form->create('MaterialDeEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Material De Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('material_de_embalaje_id');
		echo $this->Form->input('nombre_material_de_embalaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MaterialDeEmbalaje.material_de_embalaje_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MaterialDeEmbalaje.material_de_embalaje_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('action' => 'index')); ?></li>
	</ul>
</div>
