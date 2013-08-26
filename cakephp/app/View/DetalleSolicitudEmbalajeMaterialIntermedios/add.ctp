<div class="detalleSolicitudEmbalajeMaterialIntermedios form">
<?php echo $this->Form->create('DetalleSolicitudEmbalajeMaterialIntermedio'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Solicitud Embalaje Material Intermedio'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Intermedios'), array('action' => 'index')); ?></li>
	</ul>
</div>
