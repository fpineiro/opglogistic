<div class="guiaDespachoEntradaClientes form">
<?php echo $this->Form->create('GuiaDespachoEntradaCliente'); ?>
	<fieldset>
		<legend><h3><?php echo __('Agregar guía de despacho de entrada'); ?></h3></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_CLIENTE_ID', array('label' => '<h5>Numero Guia de Despacho<h5>', 'type' => 'text', 'placeholder' => 'Ingresar número de G/D'));
		echo $this->Form->input('CLIENTE_ID', array(
							    	'options' => $clientes,
									'label' => '<h5>Cliente</h5>',
									'placeholder' => 'Ingresar número de G/D'
								));
		//echo $this->Form->input('FECHA_GUIA_DESPACHO_ENTRADA_CLIENTE', array('label' => 'Fecha Guia Despacho', 'type' => 'date', 'dateFormat' => 'DM'));
		echo $this->Form->input('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES', array('label' => '<h5>¿Contiene material de embalaje?</h5>'));
	?>
	</fieldset>
<?php echo $this->Form->button('Ingresar', array('class' => 'btn btn-success','formnovalidate' => true)); ?>
</div>