<div class="proveedors index">
	<h2><?php echo __('Proveedors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('PROVEEDOR_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_PROVEEDOR'); ?></th>
			<th><?php echo $this->Paginator->sort('DIRECCION_PROVEEDOR'); ?></th>
			<th><?php echo $this->Paginator->sort('TELEFONO_CONTACTO_PROVEEDOR'); ?></th>
			<th><?php echo $this->Paginator->sort('EMAIL_PROVEEDOR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proveedors as $proveedor): ?>
	<tr>
		<td><?php echo h($proveedor['Proveedor']['PROVEEDOR_ID']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['NOMBRE_PROVEEDOR']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['DIRECCION_PROVEEDOR']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['TELEFONO_CONTACTO_PROVEEDOR']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['EMAIL_PROVEEDOR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proveedor['Proveedor']['PROVEEDOR_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proveedor['Proveedor']['PROVEEDOR_ID']), null, __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['PROVEEDOR_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proveedor'), array('action' => 'add')); ?></li>
	</ul>
</div>
