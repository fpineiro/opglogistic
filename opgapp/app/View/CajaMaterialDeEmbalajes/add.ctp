<div class="cajaMaterialDeEmbalajes form">
<?php echo $this->Form->create('CajaMaterialDeEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Caja de Material Individual'); ?></legend>
	<?php
		echo $this->Form->input('CAJA_MATERIAL_DE_EMBALAJE_ID', array('label' => 'ID Caja', 'type' => 'text'));
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID', array('label' => 'Material', 'options' => $materiales));
		echo $this->Form->input('POSICION_ID', array('label' => 'Posicion'));
		echo $this->Form->input('CAPACIDAD_CAJA_MATERIAL_DE_EMBALAJE', array('label' => 'Capacidad'));
		echo $this->Form->input('CANTIDAD_MATERIAL_DE_EMBALAJE', array('label' => 'Cantidad en caja'));
		echo $this->Form->input('ALTO_CAJA_MATERIAL_DE_EMBALAJE', array('label' => 'Alto'));
		echo $this->Form->input('LARGO_CAJA_MATERIAL_DE_EMBALAJE', array('label' => 'Largo'));
		echo $this->Form->input('ANCHO_CAJA_MATERIAL_DE_EMBALAJE', array('label' => 'Ancho'));
	?>
	</fieldset>
<?php
	echo $this->Form->button('Siguiente Caja', array('class' => 'btn btn-success', 'name' => 'Sgte'));
	echo $this->Form->button('Finalizar', array('class' => 'btn btn-success', 'name' => 'Fin')); 
	echo $this->Form->end();
?>
</div>
<div class="actions">
	<h3><?php 
	//debug($posiciones);
	//echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('List Caja Material Individuals'), array('action' => 'index')); ?></li>
	</ul>
</div>