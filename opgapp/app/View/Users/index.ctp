<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('BODEGA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('USERNAME'); ?></th>
			<th><?php echo $this->Paginator->sort('PASSWORD'); ?></th>
			<th><?php echo $this->Paginator->sort('NAME'); ?></th>
			<th><?php echo $this->Paginator->sort('LASTNAME'); ?></th>
			<th><?php echo $this->Paginator->sort('MAIL'); ?></th>
			<th><?php echo $this->Paginator->sort('ROLE'); ?></th>
			<th><?php echo $this->Paginator->sort('CREATED'); ?></th>
			<th><?php echo $this->Paginator->sort('MODIFIED'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['BODEGA_ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['USERNAME']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['PASSWORD']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['NAME']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['LASTNAME']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['MAIL']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ROLE']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['CREATED']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['MODIFIED']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['ID']), null, __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
