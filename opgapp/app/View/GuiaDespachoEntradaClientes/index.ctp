<div class="guiaDespachoEntradaClientes index">
	<h2><?php echo __('Guia Despacho Entrada Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($guiaDespachoEntradaClientes as $guiaDespachoEntradaCliente): ?>
	<tr>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?>
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
	</ul>
</div>
