<div class="cajaMaterialDeEmbalajes form">
<?php echo $this->Form->create('CajaMaterialDeEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Add Caja Material De Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('POSICION_ID');
		echo $this->Form->input('NOMBRE_CAJA_MATERIAL_DE_EMBALAJE');
		echo $this->Form->input('CAPACIDAD_CAJA_MATERIAL_DE_EMBALAJE');
		echo $this->Form->input('ALTO_CAJA_MATERIAL_DE_EMBALAJE');
		echo $this->Form->input('LARGO_CAJA_MATERIAL_DE_EMBALAJE');
		echo $this->Form->input('ANCHO_CAJA_MATERIAL_DE_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('action' => 'index')); ?></li>
	</ul>
</div>
