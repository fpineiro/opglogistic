<div class="detalleCajaMaterialEmbalados form">
<?php echo $this->Form->create('DetalleCajaMaterialEmbalado'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Detalle Caja Material Embalado'); ?></legend>
	<?php
		echo $this->Form->input('material_intermedio_id');
		echo $this->Form->input('cantidad_detalle_caja_material_embalado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Caja Material Embalados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
