<div class="guiaDespachoEntradaProveedors view">
<h2><?php  echo __('Guia Despacho Entrada Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Proveedor Id'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guiaDespachoEntradaProveedor['Proveedor']['proveedor_id'], array('controller' => 'proveedors', 'action' => 'view', $guiaDespachoEntradaProveedor['Proveedor']['proveedor_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Guia Despacho Entrada Proveedor'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['fecha_guia_despacho_entrada_proveedor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guia Despacho Entrada Proveedor'), array('action' => 'edit', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guia Despacho Entrada Proveedor'), array('action' => 'delete', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Entrada Proveedor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
