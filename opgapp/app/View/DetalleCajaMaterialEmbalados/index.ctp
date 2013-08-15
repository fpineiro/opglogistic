<div class="detalleCajaMaterialEmbalados index">
	<h2><?php echo __('Detalle Caja Material Embalados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('CAJA_MATERIAL_EMBALADO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleCajaMaterialEmbalados as $detalleCajaMaterialEmbalado): ?>
	<tr>
		<td><?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['MATERIAL_INTERMEDIO_ID']); ?>&nbsp;</td>
		<td><?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Caja Material Embalado'), array('action' => 'add')); ?></li>
	</ul>
</div>
