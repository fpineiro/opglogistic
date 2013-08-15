<div class="guiaDespachoEntradaProveedors form">
<?php echo $this->Form->create('GuiaDespachoEntradaProveedor'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Guia Despacho Entrada Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('fecha_guia_despacho_entrada_proveedor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guia Despacho Entrada Proveedors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
