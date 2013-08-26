<div class="detalleCajaMaterialEmbalados form">
<?php echo $this->Form->create('DetalleCajaMaterialEmbalado'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Caja Material Embalado'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Caja Material Embalados'), array('action' => 'index')); ?></li>
	</ul>
</div>
