<div class="cajaMaterialEmbalados index">
	<h2><?php echo __('Caja Material Embalados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('CAJA_MATERIAL_EMBALADO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('POSICION_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_CAJA_MATERIAL_EMBALADO'); ?></th>
			<th><?php echo $this->Paginator->sort('CAPACIDAD_CAJA_MATERIAL_EMBALADO'); ?></th>
			<th><?php echo $this->Paginator->sort('ALTO_CAJA_MATERIAL_EMBALADO'); ?></th>
			<th><?php echo $this->Paginator->sort('LARGO_CAJA_MATERIAL_EMBALADO'); ?></th>
			<th><?php echo $this->Paginator->sort('ANCHO_CAJA_MATERIAL_EMBALADO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cajaMaterialEmbalados as $cajaMaterialEmbalado): ?>
	<tr>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['POSICION_ID']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['NOMBRE_CAJA_MATERIAL_EMBALADO']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['CAPACIDAD_CAJA_MATERIAL_EMBALADO']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['ALTO_CAJA_MATERIAL_EMBALADO']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['LARGO_CAJA_MATERIAL_EMBALADO']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['ANCHO_CAJA_MATERIAL_EMBALADO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']), null, __('Are you sure you want to delete # %s?', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Caja Material Embalado'), array('action' => 'add')); ?></li>
	</ul>
</div>
