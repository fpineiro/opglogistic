<div class="solicitudEmbalajes form">
<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Add Solicitud Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('ESTADO_AUTOMATA_ID');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('FECHA_DETALLE_SOLICITUD_EMBALAJE');
		echo $this->Form->input('CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Solicitud Embalajes'), array('action' => 'index')); ?></li>
	</ul>
</div>
