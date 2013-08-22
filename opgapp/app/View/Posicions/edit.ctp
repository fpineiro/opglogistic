<div class="posicions form">
<?php echo $this->Form->create('Posicion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Posicion'); ?></legend>
	<?php
		echo $this->Form->input('POSICION_ID');
		echo $this->Form->input('POS_POSICION_ID', array('label' => 'Identificador de la Posicion Padre', 'after' => '  <span class="label label-warning">OJO: Si esta posición no es subposición, deje este campo vacio</span>'));
		echo $this->Form->input('BODEGA_ID', array('label' => 'Identificador de la bodega asociada'));
		echo $this->Form->input('NOMBRE_POSICION', array('label' => 'Nombre'));
		echo $this->Form->input('ALTO_POSICION', array('label' => 'Alto'));
		echo $this->Form->input('LARGO_POSICION', array('label' => 'Largo'));
		echo $this->Form->input('ANCHO_POSICION', array('label' => 'Ancho'));
	?>
	</fieldset>
<?php 
	$options = array(
		'label' => 'Editar Posicion',
		'class' => 'btn btn-primary'
	);
	echo $this->Form->end($options); 
?>
</div>

