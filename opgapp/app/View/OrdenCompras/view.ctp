<div class="ordenCompras view">
<h2><?php  echo __('Orden Compra'); ?></h2>
	<dl>
		<dt><?php echo __('ORDEN COMPRA ID'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PROVEEDOR ID'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['PROVEEDOR_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PROCESADA ORDEN COMPRA'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['PROCESADA_ORDEN_COMPRA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA ORDEN COMPRA'); ?></dt>
		<dd>
			<?php echo h($ordenCompra['OrdenCompra']['FECHA_ORDEN_COMPRA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Compra'), array('action' => 'edit', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Compra'), array('action' => 'delete', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']), null, __('Are you sure you want to delete # %s?', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Compra'), array('action' => 'add')); ?> </li>
	</ul>
</div>
