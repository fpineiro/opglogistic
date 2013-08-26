<div class="detalleGuiaDespachoEntradaProveedors view">
<h2><?php  echo __('Detalle Guia Despacho Entrada Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO PROVEEDOR ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAJA MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['CAJA_MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE GUIA DESPACHO ENTRADA PROVEEDORES'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['CANTIDAD_DETALLE_GUIA_DESPACHO_ENTRADA_PROVEEDORES']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Entrada Proveedor'), array('action' => 'edit', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Entrada Proveedor'), array('action' => 'delete', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Proveedor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
