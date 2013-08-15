<div class="guiaDespachoEntradaProveedors index">
	<h2><?php echo __('Guia Despacho Entrada Proveedors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_proveedor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proveedor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_guia_despacho_entrada_proveedor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($guiaDespachoEntradaProveedors as $guiaDespachoEntradaProveedor): ?>
	<tr>
		<td><?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guiaDespachoEntradaProveedor['Proveedor']['proveedor_id'], array('controller' => 'proveedors', 'action' => 'view', $guiaDespachoEntradaProveedor['Proveedor']['proveedor_id'])); ?>
		</td>
		<td><?php echo h($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['fecha_guia_despacho_entrada_proveedor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']), null, __('Are you sure you want to delete # %s?', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
