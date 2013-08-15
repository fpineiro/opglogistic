<div class="estadoAutomatas form">
<?php echo $this->Form->create('EstadoAutomata'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Estado Automata'); ?></legend>
	<?php
		echo $this->Form->input('estado_automata_id');
		echo $this->Form->input('nombre_estado_automata');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstadoAutomata.estado_automata_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstadoAutomata.estado_automata_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('action' => 'index')); ?></li>
	</ul>
</div>
