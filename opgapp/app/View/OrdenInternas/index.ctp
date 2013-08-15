<div class="ordenInternas index">
	<h2><?php echo __('Orden Internas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_INTERNA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('BODEGA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ORDEN_DESPACHO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_DETALLE_ORDEN_INTERNA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordenInternas as $ordenInterna): ?>
	<tr>
		<td><?php echo h($ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['BODEGA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['ORDEN_DESPACHO_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['FECHA_DETALLE_ORDEN_INTERNA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID']), null, __('Are you sure you want to delete # %s?', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orden Interna'), array('action' => 'add')); ?></li>
	</ul>
</div>
