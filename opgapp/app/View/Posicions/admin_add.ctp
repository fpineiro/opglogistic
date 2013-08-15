<div class="posicions form">
<?php echo $this->Form->create('Posicion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Posicion'); ?></legend>
	<?php
		echo $this->Form->input('pos_posicion_id');
		echo $this->Form->input('bodega_id');
		echo $this->Form->input('nombre_posicion');
		echo $this->Form->input('alto_posicion');
		echo $this->Form->input('largo_posicion');
		echo $this->Form->input('ancho_posicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posicions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pos Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('controller' => 'bodegas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('controller' => 'bodegas', 'action' => 'add')); ?> </li>
	</ul>
</div>
