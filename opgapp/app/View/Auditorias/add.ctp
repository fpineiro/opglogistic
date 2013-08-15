<div class="auditorias form">
<?php echo $this->Form->create('Auditoria'); ?>
	<fieldset>
		<legend><?php echo __('Add Auditoria'); ?></legend>
	<?php
		echo $this->Form->input('FECHA_AUDITORIA');
		echo $this->Form->input('USUARIO_AUDITORIA');
		echo $this->Form->input('DATOS_ANTERIORES_AUDITORIA');
		echo $this->Form->input('DATOS_NUEVOS_AUDITORIA');
		echo $this->Form->input('CONSULTA_AUDITORIA');
		echo $this->Form->input('OPERACION_AUDITORIA');
		echo $this->Form->input('TABLA_MODIFICADA_AUDITORIA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Auditorias'), array('action' => 'index')); ?></li>
	</ul>
</div>
