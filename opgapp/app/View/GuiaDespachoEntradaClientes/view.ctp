<div class="guiaDespachoEntradaClientes view">
<h2><?php  echo __('Guia Despacho Entrada Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DETALLE GUIA DESPACHO ENTRADA CLIENTE'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CONTIENE EMBALAJE GUIA DESPACHO ENTRADA CLIENTES'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guia Despacho Entrada Cliente'), array('action' => 'edit', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guia Despacho Entrada Cliente'), array('action' => 'delete', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Entrada Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
