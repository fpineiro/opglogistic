<div class="detalleGuiaDespachoEntradaMaterialEmbalajeClientes view">
<h2><?php  echo __('Detalle Guia Despacho Entrada Material Embalaje Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAJA MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['CAJA_MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE GD ENTRADA MATERIAL EMBALAJE CLIENTE'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_EMBALAJE_CLIENTE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Embalaje Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
