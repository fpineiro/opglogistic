<div class="proveedors view">
<h2><?php  echo __('Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('Proveedor Id'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['proveedor_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['nombre_proveedor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['direccion_proveedor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Contacto Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['telefono_contacto_proveedor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['email_proveedor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedor'), array('action' => 'edit', $proveedor['Proveedor']['proveedor_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['proveedor_id']), null, __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['proveedor_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
