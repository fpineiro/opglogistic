<div class="bodegas form">
<?php echo $this->Form->create('Bodega'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bodega'); ?></legend>
	<?php
		echo $this->Form->input('BODEGA_ID',array('visibility' => false));
		echo $this->Form->input('ID', array('label'=>'<h5>Aministrador</h5>'));
		echo $this->Form->input('CLIENTE_ID', array('label'=>'<h5>Clientes</h5>'));
		echo $this->Form->input('CATEGORIA_BODEGA', array('label'=>'<h5>Categoría de la bodega</h5>'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Guardar datos', 'class' => 'btn btn-success','formnovalidate' => true))?>
</div>
 