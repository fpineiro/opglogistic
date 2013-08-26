<div class="ordenDespachos form">
<?php echo $this->Form->create('OrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orden Despacho'); ?></legend>
	<?php
		echo $this->Form->input('ORDEN_DESPACHO_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenDespacho.ORDEN_DESPACHO_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrdenDespacho.ORDEN_DESPACHO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('action' => 'index')); ?></li>
	</ul>
</div>
