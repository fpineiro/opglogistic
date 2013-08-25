<div class="proveedors view">
<fieldset>
	<legend><h3><?php  echo __('Detalle de proveedor'); ?></h3></legend>
	<dl class="dl-horizontal">
		<dt><?php echo __('Identificador'); ?></dt>
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
	<div style="float:left"><?php echo $this->Html->link(__('Editar proveedor'), array('action' => 'edit', $proveedor['Proveedor']['PROVEEDOR_ID']), array('class' => 'btn btn-primary')); ?>&nbsp;</div>
	<div style="float:left"><?php echo $this->Form->postLink(('Eliminar proveedor'), array('action' => 'delete', $proveedor['Proveedor']['PROVEEDOR_ID'], null, ('Está que desea seguro de eliminar proveedor# %s?'), $proveedor['Proveedor']['PROVEEDOR_ID']), array('class' => 'btn btn-danger')); ?></div>

