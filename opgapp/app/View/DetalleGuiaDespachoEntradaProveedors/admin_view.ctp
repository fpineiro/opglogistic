<div class="detalleGuiaDespachoEntradaProveedors view">
<h2><?php  echo __('Detalle Guia Despacho Entrada Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Proveedor Id'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaProveedor['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaProveedor['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaProveedor['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'], array('controller' => 'caja_material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaProveedor['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Guia Despacho Entrada Proveedores'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['cantidad_detalle_guia_despacho_entrada_proveedores']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Entrada Proveedor'), array('action' => 'edit', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Entrada Proveedor'), array('action' => 'delete', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Proveedor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('controller' => 'caja_material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('controller' => 'caja_material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
