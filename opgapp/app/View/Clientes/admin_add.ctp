<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_cliente');
		echo $this->Form->input('direccion_cliente');
		echo $this->Form->input('telefono_contacto_cliente');
		echo $this->Form->input('email_cliente');
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
