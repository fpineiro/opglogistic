<div class="guiaDespachoEntradaClientes index">
	<h2><?php echo __('Guia Despacho Entrada Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_detalle_guia_despacho_entrada_cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('contiene_embalaje_guia_despacho_entrada_clientes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($guiaDespachoEntradaClientes as $guiaDespachoEntradaCliente): ?>
	<tr>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guiaDespachoEntradaCliente['Cliente']['cliente_id'], array('controller' => 'clientes', 'action' => 'view', $guiaDespachoEntradaCliente['Cliente']['cliente_id'])); ?>
		</td>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['fecha_detalle_guia_despacho_entrada_cliente']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['contiene_embalaje_guia_despacho_entrada_clientes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['guia_despacho_cliente_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Guia Despacho Entrada Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
