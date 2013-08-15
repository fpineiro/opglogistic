<div class="materialDeEmbalajes index">
	<h2><?php echo __('Material De Embalajes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('MATERIAL_DE_EMBALAJE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_MATERIAL_DE_EMBALAJE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materialDeEmbalajes as $materialDeEmbalaje): ?>
	<tr>
		<td><?php echo h($materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']); ?>&nbsp;</td>
		<td><?php echo h($materialDeEmbalaje['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('action' => 'add')); ?></li>
	</ul>
</div>
