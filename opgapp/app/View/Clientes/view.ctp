<div class="clientes view">
<fieldset>
	<legend><h3><?php  echo __('Detalle de usuario'); ?></h3></legend>
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
	
	<div style="float: left"><?php echo $this->Html->link(__('Editar cliente'), array('action' => 'edit', $cliente['Cliente']['CLIENTE_ID']), array('class' => 'btn btn-primary')); ?> &nbsp;</div>
	<div style="float: left"><?php echo $this->Form->postLink(__('Eliminar cliente'), array('action' => 'delete', $cliente['Cliente']['CLIENTE_ID'], null, ('¿Está seguro de eliminar el cliente? # %s?'), $cliente['Cliente']['CLIENTE_ID']), array('class' => 'btn btn-danger')); ?> </div>
</div>
