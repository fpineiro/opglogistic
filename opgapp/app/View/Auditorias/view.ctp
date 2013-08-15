<div class="auditorias view">
<h2><?php  echo __('Auditoria'); ?></h2>
	<dl>
		<dt><?php echo __('AUDITORIA ID'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['AUDITORIA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['FECHA_AUDITORIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('USUARIO AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['USUARIO_AUDITORIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DATOS ANTERIORES AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['DATOS_ANTERIORES_AUDITORIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DATOS NUEVOS AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['DATOS_NUEVOS_AUDITORIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CONSULTA AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['CONSULTA_AUDITORIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OPERACION AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['OPERACION_AUDITORIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TABLA MODIFICADA AUDITORIA'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['TABLA_MODIFICADA_AUDITORIA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditoria'), array('action' => 'edit', $auditoria['Auditoria']['AUDITORIA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditoria'), array('action' => 'delete', $auditoria['Auditoria']['AUDITORIA_ID']), null, __('Are you sure you want to delete # %s?', $auditoria['Auditoria']['AUDITORIA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('action' => 'add')); ?> </li>
	</ul>
</div>
