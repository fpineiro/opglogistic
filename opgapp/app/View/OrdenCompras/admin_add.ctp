<div class="ordenCompras form">
<?php echo $this->Form->create('OrdenCompra'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Orden Compra'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Orden Compras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
