<div class="auditorias view">
<h2><?php  echo __('Auditoria'); ?></h2>
	<dl>
		<dt><?php echo __('Auditoria Id'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['auditoria_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['fecha_auditoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['usuario_auditoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datos Anteriores Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['datos_anteriores_auditoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datos Nuevos Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['datos_nuevos_auditoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['consulta_auditoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operacion Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['operacion_auditoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tabla Modificada Auditoria'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['tabla_modificada_auditoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditoria'), array('action' => 'edit', $auditoria['Auditoria']['auditoria_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditoria'), array('action' => 'delete', $auditoria['Auditoria']['auditoria_id']), null, __('Are you sure you want to delete # %s?', $auditoria['Auditoria']['auditoria_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('action' => 'add')); ?> </li>
	</ul>
</div>
