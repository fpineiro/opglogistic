<div class="compatibilidads form">
<?php echo $this->Form->create('Compatibilidad'); ?>
	<fieldset>
		<legend><h3><?php echo ('Agregar compatibilidad'); ?></h3></legend>
	<?php
		echo $this->Form->input('MATERIAL_INTERMEDIO_ID', array('label'=>'Material intermedio', 'placeholder'=>'Ingrese material intermedio', 'options' => $intermedio));
		echo $this->Form->input('MATERIAL_DE_EMBALAJE_ID', array('label'=>'Material de embalaje', 'placeholder'=>'Ingrese material de embalaje', 'options' => $deembalaje));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Guardar datos', 'class' => 'btn btn-success','formnovalidate' => true)); debug($p);?>
</div>
	
