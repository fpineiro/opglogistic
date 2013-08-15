<div class="detalleOrdenInternas form">
<?php echo $this->Form->create('DetalleOrdenInterna'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Orden Interna'); ?></legend>
	<?php
		echo $this->Form->input('ORDEN_INTERNA_ID');
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_ORDEN_INTERNA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleOrdenInterna.ORDEN_INTERNA_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleOrdenInterna.ORDEN_INTERNA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Internas'), array('action' => 'index')); ?></li>
	</ul>
</div>
