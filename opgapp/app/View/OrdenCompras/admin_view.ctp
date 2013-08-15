<div class="ordenCompras view">
<h2><?php  echo __('Orden Compra'); ?></h2>
	<dl>
		<dt><?php echo __('Orden Compra Id'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['orden_compra_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenCompra['Proveedor']['proveedor_id'], array('controller' => 'proveedors', 'action' => 'view', $ordenCompra['Proveedor']['proveedor_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Procesada Orden Compra'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['procesada_orden_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Orden Compra'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['fecha_orden_compra']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Compra'), array('action' => 'edit', $ordenCompra['OrdenCompra']['orden_compra_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Compra'), array('action' => 'delete', $ordenCompra['OrdenCompra']['orden_compra_id']), null, __('Are you sure you want to delete # %s?', $ordenCompra['OrdenCompra']['orden_compra_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Compra'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
