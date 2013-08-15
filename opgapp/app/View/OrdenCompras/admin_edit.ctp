<div class="ordenCompras form">
<?php echo $this->Form->create('OrdenCompra'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Orden Compra'); ?></legend>
	<?php
		echo $this->Form->input('orden_compra_id');
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('procesada_orden_compra');
		echo $this->Form->input('fecha_orden_compra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenCompra.orden_compra_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrdenCompra.orden_compra_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Compras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
