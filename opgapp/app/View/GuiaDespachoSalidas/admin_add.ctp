<div class="guiaDespachoSalidas form">
<?php echo $this->Form->create('GuiaDespachoSalida'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Guia Despacho Salida'); ?></legend>
	<?php
		echo $this->Form->input('orden_despacho_id');
		echo $this->Form->input('despacho_id');
		echo $this->Form->input('fecha_detalle_guia_despacho_salida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('controller' => 'orden_despachos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('controller' => 'orden_despachos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('controller' => 'despacho_camions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despacho'), array('controller' => 'despacho_camions', 'action' => 'add')); ?> </li>
	</ul>
</div>
