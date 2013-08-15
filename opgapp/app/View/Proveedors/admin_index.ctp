<div class="proveedors index">
	<h2><?php echo __('Proveedors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('proveedor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_proveedor'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_proveedor'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_contacto_proveedor'); ?></th>
			<th><?php echo $this->Paginator->sort('email_proveedor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proveedors as $proveedor): ?>
	<tr>
		<td><?php echo h($proveedor['Proveedor']['proveedor_id']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['nombre_proveedor']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['direccion_proveedor']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['telefono_contacto_proveedor']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['email_proveedor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proveedor['Proveedor']['proveedor_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proveedor['Proveedor']['proveedor_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proveedor['Proveedor']['proveedor_id']), null, __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['proveedor_id'])); ?>
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
