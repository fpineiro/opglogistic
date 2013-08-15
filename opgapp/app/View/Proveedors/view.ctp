<div class="proveedors view">
<h2><?php  echo __('Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('PROVEEDOR ID'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['PROVEEDOR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE PROVEEDOR'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['NOMBRE_PROVEEDOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIRECCION PROVEEDOR'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['DIRECCION_PROVEEDOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TELEFONO CONTACTO PROVEEDOR'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['TELEFONO_CONTACTO_PROVEEDOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL PROVEEDOR'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['EMAIL_PROVEEDOR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedor'), array('action' => 'edit', $proveedor['Proveedor']['PROVEEDOR_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['PROVEEDOR_ID']), null, __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['PROVEEDOR_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
