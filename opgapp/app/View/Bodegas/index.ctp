<div class="bodegas index">
	<h2><?php echo __('Bodegas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('BODEGA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORIA_BODEGA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bodegas as $bodega): ?>
	<tr>
		<td><?php echo h($bodega['Bodega']['BODEGA_ID']); ?>&nbsp;</td>
		<td><?php echo h($bodega['Bodega']['ID']); ?>&nbsp;</td>
		<td><?php echo h($bodega['Bodega']['CATEGORIA_BODEGA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bodega['Bodega']['BODEGA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bodega['Bodega']['BODEGA_ID']), null, __('Are you sure you want to delete # %s?', $bodega['Bodega']['BODEGA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bodega'), array('action' => 'add')); ?></li>
	</ul>
</div>
