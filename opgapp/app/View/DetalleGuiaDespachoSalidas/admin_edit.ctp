<div class="detalleGuiaDespachoSalidas form">
<?php echo $this->Form->create('DetalleGuiaDespachoSalida'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Detalle Guia Despacho Salida'); ?></legend>
	<?php
		echo $this->Form->input('guia_despacho_salida_id');
		echo $this->Form->input('material_intermedio_id');
		echo $this->Form->input('cantidad_detalle_guia_despacho_salida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleGuiaDespachoSalida.guia_despacho_salida_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleGuiaDespachoSalida.guia_despacho_salida_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Salidas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
