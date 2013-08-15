<div class="estadoAutomatas index">
	<h2><?php echo __('Estado Automatas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('estado_automata_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_estado_automata'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoAutomatas as $estadoAutomata): ?>
	<tr>
		<td><?php echo h($estadoAutomata['EstadoAutomata']['estado_automata_id']); ?>&nbsp;</td>
		<td><?php echo h($estadoAutomata['EstadoAutomata']['nombre_estado_automata']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estadoAutomata['EstadoAutomata']['estado_automata_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estadoAutomata['EstadoAutomata']['estado_automata_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estadoAutomata['EstadoAutomata']['estado_automata_id']), null, __('Are you sure you want to delete # %s?', $estadoAutomata['EstadoAutomata']['estado_automata_id'])); ?>
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
