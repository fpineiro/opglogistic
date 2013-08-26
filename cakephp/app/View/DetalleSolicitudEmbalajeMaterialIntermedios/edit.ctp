<div class="detalleSolicitudEmbalajeMaterialIntermedios form">
<?php echo $this->Form->create('DetalleSolicitudEmbalajeMaterialIntermedio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detalle Solicitud Embalaje Material Intermedio'); ?></legend>
	<?php
		echo $this->Form->input('SOLICITUD_EMBALAJE_ID');
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID');
		echo $this->Form->input('CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleSolicitudEmbalajeMaterialIntermedio.SOLICITUD_EMBALAJE_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleSolicitudEmbalajeMaterialIntermedio.SOLICITUD_EMBALAJE_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Intermedios'), array('action' => 'index')); ?></li>
	</ul>
</div>
