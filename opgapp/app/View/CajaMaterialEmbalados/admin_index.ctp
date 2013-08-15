<div class="cajaMaterialEmbalados index">
	<h2><?php echo __('Caja Material Embalados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('caja_material_embalado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('posicion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_caja_material_embalado'); ?></th>
			<th><?php echo $this->Paginator->sort('capacidad_caja_material_embalado'); ?></th>
			<th><?php echo $this->Paginator->sort('alto_caja_material_embalado'); ?></th>
			<th><?php echo $this->Paginator->sort('largo_caja_material_embalado'); ?></th>
			<th><?php echo $this->Paginator->sort('ancho_caja_material_embalado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cajaMaterialEmbalados as $cajaMaterialEmbalado): ?>
	<tr>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cajaMaterialEmbalado['Posicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $cajaMaterialEmbalado['Posicion']['posicion_id'])); ?>
		</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['nombre_caja_material_embalado']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['capacidad_caja_material_embalado']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['alto_caja_material_embalado']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['largo_caja_material_embalado']); ?>&nbsp;</td>
		<td><?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['ancho_caja_material_embalado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id']), null, __('Are you sure you want to delete # %s?', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
	</ul>
</div>
