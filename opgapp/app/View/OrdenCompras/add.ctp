<div class="ordenCompras form">
<?php echo $this->Form->create('OrdenCompra'); ?>
	<fieldset>
		<legend><?php echo __('Add Orden Compra'); ?></legend>
	<?php
		echo $this->Form->input('PROVEEDOR_ID');
		echo $this->Form->input('PROCESADA_ORDEN_COMPRA');
		echo $this->Form->input('FECHA_ORDEN_COMPRA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orden Compras'), array('action' => 'index')); ?></li>
	</ul>
</div>
