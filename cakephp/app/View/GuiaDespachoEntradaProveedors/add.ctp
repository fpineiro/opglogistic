<div class="guiaDespachoEntradaProveedors form">
<?php echo $this->Form->create('GuiaDespachoEntradaProveedor'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Guia de Despacho de Entrada Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_PROVEEDOR_ID', array('label' => 'Numero Guia de Despacho', 'type' => 'text'));
		echo $this->Form->input('PROVEEDOR_ID', array(
							    	'options' => $proveedores, 
									'label' => 'Proveedor: ',
								));
	?>
	</fieldset>
<?php echo $this->Form->Submit('Ingresar', array('class' => 'btn btn-success')); 
?>
</div>