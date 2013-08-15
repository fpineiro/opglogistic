<div class="detalleOrdenDespachos form">
<?php echo $this->Form->create('DetalleOrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Detalle Orden Despacho'); ?></legend>
	<?php
		echo $this->Form->input('orden_despacho_id');
		echo $this->Form->input('material_intermedio_id');
		echo $this->Form->input('cantidad_detalle_orden_despacho');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleOrdenDespacho.orden_despacho_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleOrdenDespacho.orden_despacho_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Despachos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
