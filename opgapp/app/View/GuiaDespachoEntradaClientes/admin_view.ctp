<div class="guiaDespachoEntradaClientes view">
<h2><?php  echo __('Guia Despacho Entrada Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Cliente Id'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guiaDespachoEntradaCliente['Cliente']['cliente_id'], array('controller' => 'clientes', 'action' => 'view', $guiaDespachoEntradaCliente['Cliente']['cliente_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Detalle Guia Despacho Entrada Cliente'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['fecha_detalle_guia_despacho_entrada_cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contiene Embalaje Guia Despacho Entrada Clientes'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['contiene_embalaje_guia_despacho_entrada_clientes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guia Despacho Entrada Cliente'), array('action' => 'edit', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guia Despacho Entrada Cliente'), array('action' => 'delete', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Entrada Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
