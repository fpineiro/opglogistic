<div class="ordenCompras form">
<?php echo $this->Form->create('OrdenCompra'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Orden de Compra'); ?></legend>
	<?php
		echo $this->Form->input('PROVEEDOR_ID', array('label'=>'Nombre Proveedor'));
		echo $this->Form->input('PROCESADA_ORDEN_COMPRA',array('label'=>'Procesada'));
		echo $this->Form->input('FECHA_ORDEN_COMPRA', array('label'=>'Fecha Orden de Compra'));
	?>
	</fieldset>
<?php echo $this->Form->end(array(
	'label'=>'Agregar',
	'class'=>'btn')); ?>
</div>
 
