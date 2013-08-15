<div class="compatibilidads form">
<?php echo $this->Form->create('Compatibilidad'); ?>
	<fieldset>
		<legend><?php echo __('Add Compatibilidad'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Compatibilidads'), array('action' => 'index')); ?></li>
	</ul>
</div>
