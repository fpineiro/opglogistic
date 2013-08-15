<div class="auditorias form">
<?php echo $this->Form->create('Auditoria'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Auditoria'); ?></legend>
	<?php
		echo $this->Form->input('auditoria_id');
		echo $this->Form->input('fecha_auditoria');
		echo $this->Form->input('usuario_auditoria');
		echo $this->Form->input('datos_anteriores_auditoria');
		echo $this->Form->input('datos_nuevos_auditoria');
		echo $this->Form->input('consulta_auditoria');
		echo $this->Form->input('operacion_auditoria');
		echo $this->Form->input('tabla_modificada_auditoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Auditoria.auditoria_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Auditoria.auditoria_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('action' => 'index')); ?></li>
	</ul>
</div>
