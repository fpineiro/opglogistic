<div class="guiaDespachoEntradaProveedors form">
<?php echo $this->Form->create('GuiaDespachoEntradaProveedor'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Guia Despacho Entrada Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('guia_despacho_proveedor_id');
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('fecha_guia_despacho_entrada_proveedor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GuiaDespachoEntradaProveedor.guia_despacho_proveedor_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GuiaDespachoEntradaProveedor.guia_despacho_proveedor_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
