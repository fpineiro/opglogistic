<div class="solicitudEmbalajes index">
	<h2><?php echo __('Solicitud Embalajes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SOLICITUD_EMBALAJE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_DETALLE_SOLICITUD_EMBALAJE'); ?></th>
			<th><?php echo $this->Paginator->sort('CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitudEmbalajes as $solicitudEmbalaje): ?>
	<tr>
		<td><?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']); ?>&nbsp;</td>
		<td><?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['FECHA_DETALLE_SOLICITUD_EMBALAJE']); ?>&nbsp;</td>
		<td><?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?>
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