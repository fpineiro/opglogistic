<div class="detalleGuiaDespachoEntradaProveedors index">
	<h2><?php echo __('Detalle Guia Despacho Entrada Proveedors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_proveedor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caja_material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_guia_despacho_entrada_proveedores'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoEntradaProveedors as $detalleGuiaDespachoEntradaProveedor): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaProveedor['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaProveedor['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaProveedor['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'], array('controller' => 'caja_material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaProveedor['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
		</td>
		<td><?php echo h($detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['cantidad_detalle_guia_despacho_entrada_proveedores']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaProveedor['DetalleGuiaDespachoEntradaProveedor']['guia_despacho_proveedor_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Proveedor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('controller' => 'caja_material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('controller' => 'caja_material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
