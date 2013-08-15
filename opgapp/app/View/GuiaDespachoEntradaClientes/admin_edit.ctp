<div class="guiaDespachoEntradaClientes form">
<?php echo $this->Form->create('GuiaDespachoEntradaCliente'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Guia Despacho Entrada Cliente'); ?></legend>
	<?php
		echo $this->Form->input('guia_despacho_cliente_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('fecha_detalle_guia_despacho_entrada_cliente');
		echo $this->Form->input('contiene_embalaje_guia_despacho_entrada_clientes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GuiaDespachoEntradaCliente.guia_despacho_cliente_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GuiaDespachoEntradaCliente.guia_despacho_cliente_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
