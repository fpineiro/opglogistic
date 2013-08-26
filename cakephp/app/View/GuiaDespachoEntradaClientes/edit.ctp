<div class="guiaDespachoEntradaClientes form">
<?php echo $this->Form->create('GuiaDespachoEntradaCliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guia Despacho Entrada Cliente'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_CLIENTE_ID');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE');
		echo $this->Form->input('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GuiaDespachoEntradaCliente.GUIA_DESPACHO_CLIENTE_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GuiaDespachoEntradaCliente.GUIA_DESPACHO_CLIENTE_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
