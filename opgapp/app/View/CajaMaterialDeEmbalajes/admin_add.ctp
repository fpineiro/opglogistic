<div class="cajaMaterialDeEmbalajes form">
<?php echo $this->Form->create('CajaMaterialDeEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Caja Material De Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('posicion_id');
		echo $this->Form->input('nombre_caja_material_de_embalaje');
		echo $this->Form->input('capacidad_caja_material_de_embalaje');
		echo $this->Form->input('alto_caja_material_de_embalaje');
		echo $this->Form->input('largo_caja_material_de_embalaje');
		echo $this->Form->input('ancho_caja_material_de_embalaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
	</ul>
</div>
