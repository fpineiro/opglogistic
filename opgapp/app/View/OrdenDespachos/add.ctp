<div class="ordenDespachos form">
<?php echo $this->Form->create('OrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Add Orden Despacho'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_SALIDA_ID');
		echo $this->Form->input('ESTADO_AUTOMATA_ID');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('FECHA_DETALLE_SOLICITUD_DESPACHO');
		echo $this->Form->input('DESTINO_DETALLE_SOLICITUD_DESPACHO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('action' => 'index')); ?></li>
	</ul>
</div>
