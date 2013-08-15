<div class="detalleCajaMaterialEmbalados form">
<?php echo $this->Form->create('DetalleCajaMaterialEmbalado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Caja Material Embalado'); ?></legend>
	<?php
		echo $this->Form->input('CAJA_MATERIAL_EMBALADO_ID');
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleCajaMaterialEmbalado.CAJA_MATERIAL_EMBALADO_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleCajaMaterialEmbalado.CAJA_MATERIAL_EMBALADO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material Embalados'), array('action' => 'index')); ?></li>
	</ul>
</div>
