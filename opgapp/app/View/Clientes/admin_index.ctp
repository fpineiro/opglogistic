<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_contacto_cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('email_cliente'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['cliente_id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre_cliente']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['direccion_cliente']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefono_contacto_cliente']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email_cliente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['cliente_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['cliente_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['cliente_id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['cliente_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>
