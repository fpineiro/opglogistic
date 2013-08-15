<div class="despachoCamions index">
	<h2><?php echo __('Despacho Camions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('despacho_camion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_despacho_camion'); ?></th>
			<th><?php echo $this->Paginator->sort('id_camion'); ?></th>
			<th><?php echo $this->Paginator->sort('rut_camionero'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($despachoCamions as $despachoCamion): ?>
	<tr>
		<td><?php echo h($despachoCamion['DespachoCamion']['despacho_camion_id']); ?>&nbsp;</td>
		<td><?php echo h($despachoCamion['DespachoCamion']['fecha_despacho_camion']); ?>&nbsp;</td>
		<td><?php echo h($despachoCamion['DespachoCamion']['id_camion']); ?>&nbsp;</td>
		<td><?php echo h($despachoCamion['DespachoCamion']['rut_camionero']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $despachoCamion['DespachoCamion']['despacho_camion_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $despachoCamion['DespachoCamion']['despacho_camion_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $despachoCamion['DespachoCamion']['despacho_camion_id']), null, __('Are you sure you want to delete # %s?', $despachoCamion['DespachoCamion']['despacho_camion_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Despacho Camion'), array('action' => 'add')); ?></li>
	</ul>
</div>
