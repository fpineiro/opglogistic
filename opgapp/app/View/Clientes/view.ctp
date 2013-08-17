<div class="clientes view">
<fieldset>
	<legend><?php  echo __('Detalle de usuario'); ?></legend>
	<dl class="dl-horizontal">
		<dt><?php echo __('ID cliente'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID usuario'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['NOMBRE_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['DIRECCION_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['TELEFONO_CONTACTO_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-Mail'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['EMAIL_CLIENTE']); ?>
			&nbsp;
		</dd>
	</dl>
	</fieldset>
</div>
<div class="actions">
	<div style="float: right"><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['CLIENTE_ID'], null, ('Are you sure you want to delete # %s?'), $cliente['Cliente']['CLIENTE_ID']), array('class' => 'btn')); ?></div>
	<div style="float: right"><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['CLIENTE_ID']), array('class' => 'btn')); ?> </div>
</div>
