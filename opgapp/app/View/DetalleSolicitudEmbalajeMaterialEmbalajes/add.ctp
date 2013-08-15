<div class="detalleSolicitudEmbalajeMaterialEmbalajes form">
<?php echo $this->Form->create('DetalleSolicitudEmbalajeMaterialEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Add Detalle Solicitud Embalaje Material Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID');
		echo $this->Form->input('CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Embalajes'), array('action' => 'index')); ?></li>
	</ul>
</div>
