<div class="detalleSolicitudEmbalajeMaterialIntermedios form">
<?php echo $this->Form->create('DetalleSolicitudEmbalajeMaterialIntermedio'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Detalle Solicitud Embalaje Material Intermedio'); ?></legend>
	<?php
		echo $this->Form->input('material_intermedio_id');
		echo $this->Form->input('cantidad_material_intermedio_detalle_solicitud_embalaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Intermedios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
