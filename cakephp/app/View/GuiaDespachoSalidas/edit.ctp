<div class="guiaDespachoSalidas form">
<?php echo $this->Form->create('GuiaDespachoSalida'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guia Despacho Salida'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_SALIDA_ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GuiaDespachoSalida.GUIA_DESPACHO_SALIDA_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GuiaDespachoSalida.GUIA_DESPACHO_SALIDA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('action' => 'index')); ?></li>
	</ul>
</div>
