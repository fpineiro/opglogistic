<div class="detalleGuiaDespachoEntradaMaterialIndividualClientes view">
<h2><?php  echo __('Detalle Guia Despacho Entrada Material Individual Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAJA MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['CAJA_MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE GD ENTRADA MATERIAL INDIVIDUAL CLIENTE'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_INDIVIDUAL_CLIENTE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialIndividualCliente['DetalleGuiaDespachoEntradaMaterialIndividualCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Individual Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Individual Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
