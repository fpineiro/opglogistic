<div class="detalleOrdenCompras view">
<h2><?php  echo __('Detalle Orden Compra'); ?></h2>
	<dl>
		<dt><?php echo __('Orden Compra Id'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleOrdenCompra['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleOrdenCompra['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Orden Compra'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenCompra['DetalleOrdenCompra']['cantidad_detalle_orden_compra']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Orden Compra'), array('action' => 'edit', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Orden Compra'), array('action' => 'delete', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id']), null, __('Are you sure you want to delete # %s?', $detalleOrdenCompra['DetalleOrdenCompra']['orden_compra_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Orden Compra'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
