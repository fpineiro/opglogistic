<div class="guiaDespachoEntradaProveedors view">
<h2><?php  echo __('Guia Despacho Entrada Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO PROVEEDOR ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PROVEEDOR ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['PROVEEDOR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA GUIA DESPACHO ENTRADA PROVEEDOR'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guia Despacho Entrada Proveedor'), array('action' => 'edit', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guia Despacho Entrada Proveedor'), array('action' => 'delete', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Entrada Proveedor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
