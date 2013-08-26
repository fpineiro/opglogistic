<div class="estadoAutomatas form">
<?php echo $this->Form->create('EstadoAutomata'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estado Automata'); ?></legend>
	<?php
		echo $this->Form->input('ESTADO_AUTOMATA_ID');
		echo $this->Form->input('NOMBRE_ESTADO_AUTOMATA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstadoAutomata.ESTADO_AUTOMATA_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstadoAutomata.ESTADO_AUTOMATA_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('action' => 'index')); ?></li>
	</ul>
</div>
