<div class="proveedors view">
<fieldset>
	<legend><?php  echo __('Detalle de proveedor'); ?></legend>
	<dl class="dl-horizontal">
		<dt><?php echo __('ID Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['PROVEEDOR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['NOMBRE_PROVEEDOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccción'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['DIRECCION_PROVEEDOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['TELEFONO_CONTACTO_PROVEEDOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-Mail'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['EMAIL_PROVEEDOR']); ?>
			&nbsp;
		</dd>
	</dl>
	</fieldset>
</div>
<div class="actions">
	
	<div style="float: right"><?php echo $this->Form->postLink(('Eliminar Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['PROVEEDOR_ID'], null, ('Está seguro de eliminar proveedor# %s?'), $proveedor['Proveedor']['PROVEEDOR_ID']), array('class' => 'btn')); ?></div>
		<div style="float: right"><?php echo $this->Html->link(__('Editar proveedor'), array('action' => 'edit', $proveedor['Proveedor']['PROVEEDOR_ID']), array('class' => 'btn')); ?></div>
</div>
