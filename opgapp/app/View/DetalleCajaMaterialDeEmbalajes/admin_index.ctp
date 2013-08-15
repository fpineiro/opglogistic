<div class="detalleCajaMaterialDeEmbalajes index">
	<h2><?php echo __('Detalle Caja Material De Embalajes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('caja_material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_caja_material_de_embalaje'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleCajaMaterialDeEmbalajes as $detalleCajaMaterialDeEmbalaje): ?>
	<tr>
		<td><?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleCajaMaterialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleCajaMaterialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
		</td>
		<td><?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['cantidad_detalle_caja_material_de_embalaje']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Caja Material De Embalaje'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
