<div class="solicitudEmbalajes form">
<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Edit Solicitud Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('SOLICITUD_EMBALAJE_ID');
		echo $this->Form->input('ESTADO_AUTOMATA_ID');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('FECHA_DETALLE_SOLICITUD_EMBALAJE');
		echo $this->Form->input('CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>