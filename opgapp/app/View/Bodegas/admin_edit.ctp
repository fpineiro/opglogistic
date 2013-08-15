<div class="bodegas form">
<?php echo $this->Form->create('Bodega'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Bodega'); ?></legend>
	<?php
		echo $this->Form->input('bodega_id');
		echo $this->Form->input('id');
		echo $this->Form->input('categoria_bodega');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bodega.bodega_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bodega.bodega_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('action' => 'index')); ?></li>
	</ul>
</div>
