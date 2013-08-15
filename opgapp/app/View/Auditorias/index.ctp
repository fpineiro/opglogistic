<div class="auditorias index">
	<h2><?php echo __('Auditorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('AUDITORIA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_AUDITORIA'); ?></th>
			<th><?php echo $this->Paginator->sort('USUARIO_AUDITORIA'); ?></th>
			<th><?php echo $this->Paginator->sort('DATOS_ANTERIORES_AUDITORIA'); ?></th>
			<th><?php echo $this->Paginator->sort('DATOS_NUEVOS_AUDITORIA'); ?></th>
			<th><?php echo $this->Paginator->sort('CONSULTA_AUDITORIA'); ?></th>
			<th><?php echo $this->Paginator->sort('OPERACION_AUDITORIA'); ?></th>
			<th><?php echo $this->Paginator->sort('TABLA_MODIFICADA_AUDITORIA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($auditorias as $auditoria): ?>
	<tr>
		<td><?php echo h($auditoria['Auditoria']['AUDITORIA_ID']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['FECHA_AUDITORIA']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['USUARIO_AUDITORIA']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['DATOS_ANTERIORES_AUDITORIA']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['DATOS_NUEVOS_AUDITORIA']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['CONSULTA_AUDITORIA']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['OPERACION_AUDITORIA']); ?>&nbsp;</td>
		<td><?php echo h($auditoria['Auditoria']['TABLA_MODIFICADA_AUDITORIA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $auditoria['Auditoria']['AUDITORIA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $auditoria['Auditoria']['AUDITORIA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $auditoria['Auditoria']['AUDITORIA_ID']), null, __('Are you sure you want to delete # %s?', $auditoria['Auditoria']['AUDITORIA_ID'])); ?>
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
