<div class="detalleOrdenInternas form">
<?php echo $this->Form->create('DetalleOrdenInterna'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Orden Interna'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_ORDEN_INTERNA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Orden Internas'), array('action' => 'index')); ?></li>
	</ul>
</div>
