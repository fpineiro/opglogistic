<div class="detalleOrdenCompras form">
<?php echo $this->Form->create('DetalleOrdenCompra'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Detalle Orden Compra'); ?></legend>
	<?php
		echo $this->Form->input('material_de_embalaje_id');
		echo $this->Form->input('cantidad_detalle_orden_compra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Orden Compras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
