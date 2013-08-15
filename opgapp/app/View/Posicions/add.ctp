<div class="posicions form">
<?php echo $this->Form->create('Posicion'); ?>
	<fieldset>
		<legend><?php echo __('Add Posicion'); ?></legend>
	<?php
		echo $this->Form->input('POS_POSICION_ID');
		echo $this->Form->input('BODEGA_ID');
		echo $this->Form->input('NOMBRE_POSICION');
		echo $this->Form->input('ALTO_POSICION');
		echo $this->Form->input('LARGO_POSICION');
		echo $this->Form->input('ANCHO_POSICION');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posicions'), array('action' => 'index')); ?></li>
	</ul>
</div>
