<div class="automataEstados form">
<?php echo $this->Form->create('AutomataEstado'); ?>
	<fieldset>
		<legend><?php echo __('Add Automata Estado'); ?></legend>
	<?php
		echo $this->Form->input('ESTADO_AUTOMATA_ID');
		echo $this->Form->input('EST_ESTADO_AUTOMATA_ID');
		echo $this->Form->input('ES_ESTADO_INICIAL');
		echo $this->Form->input('FINAL_NORMAL');
		echo $this->Form->input('FINAL_INESPERADO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Automata Estados'), array('action' => 'index')); ?></li>
	</ul>
</div>
