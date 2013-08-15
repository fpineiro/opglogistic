<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('NOMBRE_CLIENTE');
		echo $this->Form->input('DIRECCION_CLIENTE');
		echo $this->Form->input('TELEFONO_CONTACTO_CLIENTE');
		echo $this->Form->input('EMAIL_CLIENTE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
