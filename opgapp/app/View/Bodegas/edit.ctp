<div class="bodegas form">
<?php echo $this->Form->create('Bodega'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bodega'); ?></legend>
	<?php
		echo $this->Form->input('BODEGA_ID');
		echo $this->Form->input('ID');
		echo $this->Form->input('CATEGORIA_BODEGA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bodega.BODEGA_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bodega.BODEGA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('action' => 'index')); ?></li>
	</ul>
</div>
