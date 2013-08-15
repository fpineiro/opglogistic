<div class="estadoAutomatas view">
<h2><?php  echo __('Estado Automata'); ?></h2>
	<dl>
		<dt><?php echo __('Estado Automata Id'); ?></dt>
		<dd>
			<?php echo h($estadoAutomata['EstadoAutomata']['estado_automata_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Estado Automata'); ?></dt>
		<dd>
			<?php echo h($estadoAutomata['EstadoAutomata']['nombre_estado_automata']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado Automata'), array('action' => 'edit', $estadoAutomata['EstadoAutomata']['estado_automata_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado Automata'), array('action' => 'delete', $estadoAutomata['EstadoAutomata']['estado_automata_id']), null, __('Are you sure you want to delete # %s?', $estadoAutomata['EstadoAutomata']['estado_automata_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('action' => 'add')); ?> </li>
	</ul>
</div>
