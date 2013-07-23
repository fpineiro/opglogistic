<div class="add">
	<?php echo $this->Form->create('Teacher'); ?>

	<fieldset>
		<legend>Agregar profesor</legend>
		<?php echo $this->Form->input('name', array('label' => 'Ingresar nombre: ')); ?>
		<?php echo $this->Form->input('last_name', array('label' => 'Ingresar apellido: ')); ?>
		<?php echo $this->Form->input('cv'); ?>
	</fieldset>
	<?php echo $this->Form->end('Guardar profesor'); ?>
</div>
