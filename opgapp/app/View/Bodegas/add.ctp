<div class="bodegas form">
<?php echo $this->Form->create('Bodega'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Bodega'); ?></legend>
	<?php
		echo $this->Form->input('BODEGA_ID', array('label' => 'Jefe de Bodega', 'options' => $jb));
		echo $this->Form->input('ID', array('label' => 'Cliente asociado', 'options' => $clientes));
		echo $this->Form->input('CATEGORIA_BODEGA', array('label' => 'Categoria de la bodega'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
