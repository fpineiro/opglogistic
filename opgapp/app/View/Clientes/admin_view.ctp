<div class="clientes view">
<h2><?php  echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Cliente Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliente_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Cliente'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre_cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Cliente'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['direccion_cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Contacto Cliente'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefono_contacto_cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Cliente'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email_cliente']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['cliente_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['cliente_id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['cliente_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
