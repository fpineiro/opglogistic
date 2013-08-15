<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('BODEGA_ID');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('USERNAME');
		echo $this->Form->input('PASSWORD');
		echo $this->Form->input('NAME');
		echo $this->Form->input('LASTNAME');
		echo $this->Form->input('MAIL');
		echo $this->Form->input('ROLE');
		echo $this->Form->input('CREATED');
		echo $this->Form->input('MODIFIED');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
