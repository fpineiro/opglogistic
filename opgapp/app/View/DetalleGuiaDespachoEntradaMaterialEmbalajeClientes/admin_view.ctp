<div class="detalleGuiaDespachoEntradaMaterialEmbalajeClientes view">
<h2><?php  echo __('Detalle Guia Despacho Entrada Material Embalaje Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Cliente Id'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'], array('controller' => 'caja_material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Guia Despacho Entrada Material Embalaje Cliente'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['cantidad_detalle_guia_despacho_entrada_material_embalaje_cliente']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Embalaje Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('controller' => 'caja_material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('controller' => 'caja_material_de_embalajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
