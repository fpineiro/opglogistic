<div class="ordenInternas form">
<?php echo $this->Form->create('OrdenInterna'); ?>
	<fieldset>
		<legend><?php echo __('Add Orden Interna'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Orden Internas'), array('action' => 'index')); ?></li>
	</ul>
</div>
