<div class="detalleGuiaDespachoEntradaMaterialEmbalajeClientes form">
<?php echo $this->Form->create('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Guia Despacho Entrada Material Embalaje Cliente'); ?></legend>
	<?php
		echo $this->Form->input('GUIA_DESPACHO_CLIENTE_ID');
		echo $this->Form->input('CAJA_MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_GD_ENTRADA_MATERIAL_EMBALAJE_CLIENTE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.GUIA_DESPACHO_CLIENTE_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleGuiaDespachoEntradaMaterialEmbalajeCliente.GUIA_DESPACHO_CLIENTE_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Entrada Material Embalaje Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
