<div class="ordenDespachos form">
<?php echo $this->Form->create('OrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Orden Despacho'); ?></legend>
	<?php
		echo $this->Form->input('orden_despacho_id');
		echo $this->Form->input('guia_despacho_salida_id');
		echo $this->Form->input('estado_automata_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('fecha_detalle_solicitud_despacho');
		echo $this->Form->input('destino_detalle_solicitud_despacho');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenDespacho.orden_despacho_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrdenDespacho.orden_despacho_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('controller' => 'guia_despacho_salidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Salida'), array('controller' => 'guia_despacho_salidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
