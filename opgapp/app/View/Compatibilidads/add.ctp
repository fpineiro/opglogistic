<div class="compatibilidads form">
<?php echo $this->Form->create('Compatibilidad'); ?>
	<fieldset>
		<legend><h3><?php echo ('Agregar compatibilidad'); ?></h3></legend>
	<?php
		echo $this->Form->input('NOMBRE_MATERIAL_INTERMEDIO', array('label'=>'Material intermedio', 'placeholder'=>'Ingrese material intermedio'));
		echo $this->Form->input('NOMBRE_MATERIAL_DE_EMBALAJE', array('label'=>'Material de embalaje', 'placeholder'=>'Ingrese material de embalaje'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Guardar datos', 'class' => 'btn btn-success','formnovalidate' => true))?>
</div>
	
