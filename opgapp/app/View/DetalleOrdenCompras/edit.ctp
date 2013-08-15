<div class="detalleOrdenCompras form">
<?php echo $this->Form->create('DetalleOrdenCompra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Orden Compra'); ?></legend>
	<?php
		echo $this->Form->input('ORDEN_COMPRA_ID');
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_ORDEN_COMPRA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleOrdenCompra.ORDEN_COMPRA_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleOrdenCompra.ORDEN_COMPRA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Compras'), array('action' => 'index')); ?></li>
	</ul>
</div>
