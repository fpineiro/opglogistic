<div class="solicitudEmbalajes form">
<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Edit Solicitud Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('SOLICITUD_EMBALAJE_ID', array('label' => 'Identificador de la solicitud'));
		echo $this->Form->input('ESTADO_AUTOMATA_ID', array('label' => 'Identificador del estado'));
		echo $this->Form->input('CLIENTE_ID', array('label' => 'Identificador del cliente'));
		echo $this->Form->dateTime('FECHA_SOLICITUD_EMBALAJE', 'DM', '12', array('class' => 'input-small'));
		echo $this->Form->input('CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE', array('label' => '¿Solicitud con embalaje personalizado?'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php
	print_r(array_keys($estados));
?>