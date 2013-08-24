<div class="guiaDespachoEntradaClientes form">
<?php echo $this->Form->create('GuiaDespachoEntradaCliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Guia Despacho Entrada Cliente'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_CLIENTE_ID', array('label' => 'Numero Guia de Despacho', 'type' => 'text'));
		echo $this->Form->input('CLIENTE_ID', array(
							    	'options' => $clientes, 
									'label' => 'Cliente: ',
								));
		//echo $this->Form->input('FECHA_GUIA_DESPACHO_ENTRADA_CLIENTE', array('label' => 'Fecha Guia Despacho', 'type' => 'date', 'dateFormat' => 'DM'));
		echo $this->Form->input('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES', array('label' => 'Contiene material de embalaje'));
	?>
	</fieldset>
<?php echo $this->Form->button('Ingresar', array('class' => 'btn')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
