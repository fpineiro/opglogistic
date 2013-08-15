<div class="clientes view">
<h2><?php  echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['NOMBRE_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIRECCION CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['DIRECCION_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TELEFONO CONTACTO CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['TELEFONO_CONTACTO_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['EMAIL_CLIENTE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
