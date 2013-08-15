<div class="guiaDespachoSalidas form">
<?php echo $this->Form->create('GuiaDespachoSalida'); ?>
	<fieldset>
		<legend><?php echo __('Add Guia Despacho Salida'); ?></legend>
	<?php
		echo $this->Form->input('ORDEN_DESPACHO_ID');
		echo $this->Form->input('DESPACHO_CAMION_ID');
		echo $this->Form->input('FECHA_DETALLE_GUIA_DESPACHO_SALIDA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('action' => 'index')); ?></li>
	</ul>
</div>
