<div class="despachoCamions form">
<?php echo $this->Form->create('DespachoCamion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Despacho Camion'); ?></legend>
	<?php
		echo $this->Form->input('fecha_despacho_camion');
		echo $this->Form->input('id_camion');
		echo $this->Form->input('rut_camionero');
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
