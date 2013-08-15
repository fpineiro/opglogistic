<div class="auditorias index">
	<h2><?php echo __('Auditorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('auditoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_auditoria'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_auditoria'); ?></th>
			<th><?php echo $this->Paginator->sort('datos_anteriores_auditoria'); ?></th>
			<th><?php echo $this->Paginator->sort('datos_nuevos_auditoria'); ?></th>
			<th><?php echo $this->Paginator->sort('consulta_auditoria'); ?></th>
			<th><?php echo $this->Paginator->sort('operacion_auditoria'); ?></th>
			<th><?php echo $this->Paginator->sort('tabla_modificada_auditoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($auditorias as $auditoria): ?>
	<tr>
		<td><?php echo h($auditoria['Auditoria']['auditoria_id']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['fecha_auditoria']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['usuario_auditoria']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['datos_anteriores_auditoria']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['datos_nuevos_auditoria']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['consulta_auditoria']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['operacion_auditoria']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['tabla_modificada_auditoria']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $auditoria['Auditoria']['auditoria_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $auditoria['Auditoria']['auditoria_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $auditoria['Auditoria']['auditoria_id']), null, __('Are you sure you want to delete # %s?', $auditoria['Auditoria']['auditoria_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('action' => 'add')); ?></li>
	</ul>
</div>
