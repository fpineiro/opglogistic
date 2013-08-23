<div class="guiaDespachoEntradaClientes form">
<?php echo $this->Form->create('GuiaDespachoEntradaCliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Guia Despacho Entrada Cliente'); ?></legend>
	<?php
		echo $this->Form->input('Numero de Guia de Despacho', array('type' => 'text'));
		echo $this->Form->input('Clientes', array(
							    	'options' => $clientes, 
									'label' => 'Cliente: ',
									'id' => 'aidicliente'
								));
		echo $this->Form->input('Fecha de Guia de Despacho', array('type' => 'date'));
		echo $this->Form->input('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
