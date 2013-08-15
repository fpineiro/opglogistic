<div class="detalleGuiaDespachoEntradaMaterialEmbalajeClientes form">
<?php echo $this->Form->create('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Detalle Guia Despacho Entrada Material Embalaje Cliente'); ?></legend>
	<?php
		echo $this->Form->input('guia_despacho_cliente_id');
		echo $this->Form->input('caja_material_de_embalaje_id');
		echo $this->Form->input('material_de_embalaje_id');
		echo $this->Form->input('cantidad_detalle_guia_despacho_entrada_material_embalaje_cliente');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.guia_despacho_cliente_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.guia_despacho_cliente_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Embalaje Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('controller' => 'caja_material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('controller' => 'caja_material_de_embalajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
