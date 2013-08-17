<div class="bodegas form">
<?php echo $this->Form->create('Bodega'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Bodega'); ?></legend>
	<?php
		echo $this->Form->input('id', array('label' => 'Jefe de Bodega: '));
		echo $this->Form->input('cliente_id', array('label' => 'Cliente asociado: '));
		echo $this->Form->input('categoria_bodega', array('label' => 'Categoria de la bodega: '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
