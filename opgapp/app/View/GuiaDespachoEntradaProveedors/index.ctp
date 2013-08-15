<div class="guiaDespachoEntradaProveedors index">
	<h2><?php echo __('Guia Despacho Entrada Proveedors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_PROVEEDOR_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PROVEEDOR_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($guiaDespachoEntradaProveedors as $guiaDespachoEntradaProveedor): ?>
	<tr>
		<td><?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['PROVEEDOR_ID']); ?>&nbsp;</td>
		<td><?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guia Despacho Entrada Proveedor'), array('action' => 'add')); ?></li>
	</ul>
</div>
