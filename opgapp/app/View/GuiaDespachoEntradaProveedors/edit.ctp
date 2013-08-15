<div class="guiaDespachoEntradaProveedors form">
<?php echo $this->Form->create('GuiaDespachoEntradaProveedor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guia Despacho Entrada Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_PROVEEDOR_ID');
		echo $this->Form->input('PROVEEDOR_ID');
		echo $this->Form->input('FECHA_GUIA_DESPACHO_ENTRADA_PROVEEDOR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GuiaDespachoEntradaProveedor.GUIA_DESPACHO_PROVEEDOR_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GuiaDespachoEntradaProveedor.GUIA_DESPACHO_PROVEEDOR_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?></li>
	</ul>
</div>
