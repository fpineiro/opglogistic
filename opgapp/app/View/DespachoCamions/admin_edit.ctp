<div class="despachoCamions form">
<?php echo $this->Form->create('DespachoCamion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Despacho Camion'); ?></legend>
	<?php
		echo $this->Form->input('despacho_camion_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DespachoCamion.despacho_camion_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DespachoCamion.despacho_camion_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('action' => 'index')); ?></li>
	</ul>
</div>
