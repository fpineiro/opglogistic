<div class="ordenInternas form">
<?php echo $this->Form->create('OrdenInterna'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orden Interna'); ?></legend>
	<?php
		echo $this->Form->input('ORDEN_INTERNA_ID');
		echo $this->Form->input('BODEGA_ID');
		echo $this->Form->input('ESTADO_AUTOMATA_ID');
		echo $this->Form->input('ORDEN_DESPACHO_ID');
		echo $this->Form->input('FECHA_DETALLE_ORDEN_INTERNA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenInterna.ORDEN_INTERNA_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrdenInterna.ORDEN_INTERNA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Internas'), array('action' => 'index')); ?></li>
	</ul>
</div>
