<div class="detalleOrdenDespachos form">
<?php echo $this->Form->create('DetalleOrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Orden Despacho'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_ORDEN_DESPACHO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Orden Despachos'), array('action' => 'index')); ?></li>
	</ul>
</div>
