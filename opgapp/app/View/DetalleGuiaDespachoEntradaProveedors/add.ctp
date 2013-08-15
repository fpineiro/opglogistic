<div class="detalleGuiaDespachoEntradaProveedors form">
<?php echo $this->Form->create('DetalleGuiaDespachoEntradaProveedor'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Guia Despacho Entrada Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('CAJA_MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_GUIA_DESPACHO_ENTRADA_PROVEEDORES');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?></li>
	</ul>
</div>
