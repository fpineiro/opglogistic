<div class="materialDeEmbalajes form">
<?php echo $this->Form->create('MaterialDeEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Add Material De Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('NOMBRE_MATERIAL_DE_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('action' => 'index')); ?></li>
	</ul>
</div>
