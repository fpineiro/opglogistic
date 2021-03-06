<div class="estadoAutomatas index">
	<h2><?php echo __('Estado Automatas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_ESTADO_AUTOMATA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoAutomatas as $estadoAutomata): ?>
	<tr>
		<td><?php echo h($estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($estadoAutomata['EstadoAutomata']['NOMBRE_ESTADO_AUTOMATA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID']), null, __('Are you sure you want to delete # %s?', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('action' => 'add')); ?></li>
	</ul>
</div>
