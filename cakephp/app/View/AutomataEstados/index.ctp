<div class="automataEstados index">
	<h2><?php echo __('Automata Estados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('TRANSICION_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('EST_ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ES_ESTADO_INICIAL'); ?></th>
			<th><?php echo $this->Paginator->sort('FINAL_NORMAL'); ?></th>
			<th><?php echo $this->Paginator->sort('FINAL_INESPERADO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($automataEstados as $automataEstado): ?>
	<tr>
		<td><?php echo h($automataEstado['AutomataEstado']['TRANSICION_ID']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['EST_ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['ES_ESTADO_INICIAL']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['FINAL_NORMAL']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['FINAL_INESPERADO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $automataEstado['AutomataEstado']['TRANSICION_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $automataEstado['AutomataEstado']['TRANSICION_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $automataEstado['AutomataEstado']['TRANSICION_ID']), null, __('Are you sure you want to delete # %s?', $automataEstado['AutomataEstado']['TRANSICION_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Automata Estado'), array('action' => 'add')); ?></li>
	</ul>
</div>
