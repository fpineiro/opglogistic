<div class="guiaDespachoEntradaProveedors form">
<?php echo $this->Form->create('GuiaDespachoEntradaProveedor'); ?>
	<fieldset>
		<legend><?php echo __('Add Guia Despacho Entrada Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('PROVEEDOR_ID');
		echo $this->Form->input('FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?></li>
	</ul>
</div>
