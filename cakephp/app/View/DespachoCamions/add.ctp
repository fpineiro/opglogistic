<div class="despachoCamions form">
<?php echo $this->Form->create('DespachoCamion'); ?>
	<fieldset>
		<legend><?php echo __('Add Despacho Camion'); ?></legend>
	<?php
		echo $this->Form->input('FECHA_DESPACHO_CAMION');
		echo $this->Form->input('ID_CAMION');
		echo $this->Form->input('RUT_CAMIONERO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('action' => 'index')); ?></li>
	</ul>
</div>
