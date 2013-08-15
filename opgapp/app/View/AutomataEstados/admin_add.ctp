<div class="automataEstados form">
<?php echo $this->Form->create('AutomataEstado'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Automata Estado'); ?></legend>
	<?php
		echo $this->Form->input('estado_automata_id');
		echo $this->Form->input('est_estado_automata_id');
		echo $this->Form->input('es_estado_inicial');
		echo $this->Form->input('final_normal');
		echo $this->Form->input('final_inesperado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Automata Estados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
