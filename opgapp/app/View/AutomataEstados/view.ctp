<div class="automataEstados view">
<h2><?php  echo __('Automata Estado'); ?></h2>
	<dl>
		<dt><?php echo __('TRANSICION ID'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['TRANSICION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESTADO AUTOMATA ID'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['ESTADO_AUTOMATA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EST ESTADO AUTOMATA ID'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['EST_ESTADO_AUTOMATA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ES ESTADO INICIAL'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['ES_ESTADO_INICIAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FINAL NORMAL'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['FINAL_NORMAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FINAL INESPERADO'); ?></dt>
		<dd>
			<?php echo h($automataEstado['AutomataEstado']['FINAL_INESPERADO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Automata Estado'), array('action' => 'edit', $automataEstado['AutomataEstado']['TRANSICION_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Automata Estado'), array('action' => 'delete', $automataEstado['AutomataEstado']['TRANSICION_ID']), null, __('Are you sure you want to delete # %s?', $automataEstado['AutomataEstado']['TRANSICION_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Automata Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automata Estado'), array('action' => 'add')); ?> </li>
	</ul>
</div>
