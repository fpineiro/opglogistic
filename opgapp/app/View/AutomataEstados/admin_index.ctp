<div class="automataEstados index">
	<h2><?php echo __('Automata Estados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('transicion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_automata_id'); ?></th>
			<th><?php echo $this->Paginator->sort('est_estado_automata_id'); ?></th>
			<th><?php echo $this->Paginator->sort('es_estado_inicial'); ?></th>
			<th><?php echo $this->Paginator->sort('final_normal'); ?></th>
			<th><?php echo $this->Paginator->sort('final_inesperado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($automataEstados as $automataEstado): ?>
	<tr>
		<td><?php echo h($automataEstado['AutomataEstado']['transicion_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($automataEstado['EstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $automataEstado['EstadoAutomata']['estado_automata_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($automataEstado['EstEstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $automataEstado['EstEstadoAutomata']['estado_automata_id'])); ?>
		</td>
		<td><?php echo h($automataEstado['AutomataEstado']['es_estado_inicial']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['final_normal']); ?>&nbsp;</td>
		<td><?php echo h($automataEstado['AutomataEstado']['final_inesperado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $automataEstado['AutomataEstado']['transicion_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $automataEstado['AutomataEstado']['transicion_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $automataEstado['AutomataEstado']['transicion_id']), null, __('Are you sure you want to delete # %s?', $automataEstado['AutomataEstado']['transicion_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
