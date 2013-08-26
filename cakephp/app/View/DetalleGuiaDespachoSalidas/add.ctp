<div class="detalleGuiaDespachoSalidas form">
<?php echo $this->Form->create('DetalleGuiaDespachoSalida'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Guia Despacho Salida'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_GUIA_DESPACHO_SALIDA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Salidas'), array('action' => 'index')); ?></li>
	</ul>
</div>
