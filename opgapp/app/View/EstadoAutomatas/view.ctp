<div class="estadoAutomatas view">
<h2><?php  echo __('Estado Automata'); ?></h2>
	<dl>
		<dt><?php echo __('ESTADO AUTOMATA ID'); ?></dt>
		<dd>
			<?php echo h($estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE ESTADO AUTOMATA'); ?></dt>
		<dd>
			<?php echo h($estadoAutomata['EstadoAutomata']['NOMBRE_ESTADO_AUTOMATA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado Automata'), array('action' => 'edit', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado Automata'), array('action' => 'delete', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID']), null, __('Are you sure you want to delete # %s?', $estadoAutomata['EstadoAutomata']['ESTADO_AUTOMATA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('action' => 'add')); ?> </li>
	</ul>
</div>
