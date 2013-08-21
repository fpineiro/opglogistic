<div class="compatibilidads form">
<?php echo $this->Form->create('Compatibilidad'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Compatibilidad'); ?></legend>
	<?php
		echo $this->Form->input('material_intermedio_id');
		echo $this->Form->input('material_de_embalaje_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Compatibilidad.material_intermedio_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Compatibilidad.material_intermedio_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Compatibilidads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
