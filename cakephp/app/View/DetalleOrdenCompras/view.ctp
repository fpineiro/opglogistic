<div class="detalleOrdenCompras view">
<h2><?php  echo __('Detalle Orden Compra'); ?></h2>
	<dl>
		<dt><?php echo __('ORDEN COMPRA ID'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['ORDEN_COMPRA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE ORDEN COMPRA'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['CANTIDAD_DETALLE_ORDEN_COMPRA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Orden Compra'), array('action' => 'edit', $detalleOrdenCompra['DetalleOrdenCompra']['ORDEN_COMPRA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Orden Compra'), array('action' => 'delete', $detalleOrdenCompra['DetalleOrdenCompra']['ORDEN_COMPRA_ID']), null, __('Are you sure you want to delete # %s?', $detalleOrdenCompra['DetalleOrdenCompra']['ORDEN_COMPRA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Orden Compra'), array('action' => 'add')); ?> </li>
	</ul>
</div>
