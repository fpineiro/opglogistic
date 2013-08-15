<div class="detalleOrdenDespachos form">
<?php echo $this->Form->create('DetalleOrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Orden Despacho'); ?></legend>
	<?php
		echo $this->Form->input('ORDEN_DESPACHO_ID');
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_ORDEN_DESPACHO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleOrdenDespacho.ORDEN_DESPACHO_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleOrdenDespacho.ORDEN_DESPACHO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Despachos'), array('action' => 'index')); ?></li>
	</ul>
</div>
