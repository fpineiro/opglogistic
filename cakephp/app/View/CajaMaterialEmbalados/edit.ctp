<div class="cajaMaterialEmbalados form">
<?php echo $this->Form->create('CajaMaterialEmbalado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Caja Material Embalado'); ?></legend>
	<?php
		echo $this->Form->input('CAJA_MATERIAL_EMBALADO_ID');
		echo $this->Form->input('POSICION_ID');
		echo $this->Form->input('NOMBRE_CAJA_MATERIAL_EMBALADO');
		echo $this->Form->input('CAPACIDAD_CAJA_MATERIAL_EMBALADO');
		echo $this->Form->input('ALTO_CAJA_MATERIAL_EMBALADO');
		echo $this->Form->input('LARGO_CAJA_MATERIAL_EMBALADO');
		echo $this->Form->input('ANCHO_CAJA_MATERIAL_EMBALADO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CajaMaterialEmbalado.CAJA_MATERIAL_EMBALADO_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CajaMaterialEmbalado.CAJA_MATERIAL_EMBALADO_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Caja Material Embalados'), array('action' => 'index')); ?></li>
	</ul>
</div>
