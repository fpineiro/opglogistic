<div class="bodegas form">
<?php echo $this->Form->create('Bodega'); ?>
	<fieldset>
		<legend><h3><?php echo __('Agregar Usuario'); ?></h3></legend>
	<?php
		echo $this->Form->input('BODEGA_ID', array('label' => '<h5>Jefe de Bodega</h5>', 'options' => $jb));
		echo $this->Form->input('ID', array('label' => '<h5>Cliente asociado</h5>', 'options' => $clientes));
		echo $this->Form->input('CATEGORIA_BODEGA', array('label' => '<h5>Categoria de la bodega</h5>'));
	?>
	</fieldset>
<?php $options = array(
		'label' => 'Guardar datos',
		'class' => 'btn btn-success',
		'formnovalidate' => true
	);
	echo $this->Form->end(($options)); ?>
</div>
