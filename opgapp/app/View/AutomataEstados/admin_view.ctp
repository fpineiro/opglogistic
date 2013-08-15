<div class="automataEstados view">
<h2><?php  echo __('Automata Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Transicion Id'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['transicion_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Automata'); ?></dt>
		<dd>
			<?php echo $this->Html->link($automataEstado['EstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $automataEstado['EstadoAutomata']['estado_automata_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Est Estado Automata'); ?></dt>
		<dd>
			<?php echo $this->Html->link($automataEstado['EstEstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $automataEstado['EstEstadoAutomata']['estado_automata_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Es Estado Inicial'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['es_estado_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Final Normal'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['final_normal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Final Inesperado'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['final_inesperado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Automata Estado'), array('action' => 'edit', $automataEstado['AutomataEstado']['transicion_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Automata Estado'), array('action' => 'delete', $automataEstado['AutomataEstado']['transicion_id']), null, __('Are you sure you want to delete # %s?', $automataEstado['AutomataEstado']['transicion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Automata Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automata Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
