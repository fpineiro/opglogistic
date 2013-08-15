<div class="detalleSolicitudEmbalajeMaterialIntermedios index">
	<h2><?php echo __('Detalle Solicitud Embalaje Material Intermedios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SOLICITUD_EMBALAJE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleSolicitudEmbalajeMaterialIntermedios as $detalleSolicitudEmbalajeMaterialIntermedio): ?>
	<tr>
		<td><?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['MATERIAL_INTERMEDIO_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'add')); ?></li>
	</ul>
</div>
