<script type="text/javascript">
	function revisarCheckbox(){
		if(!document.getElementById('PosicionPOSPOSICIONID').checked){
			document.getElementById('checkbox').innerHTML+= '<br /><br /><div hidden><label for="PosicionPOSICIONID">Identificador de la Posición Padre</label><input name="data[Posicion][POS_POSICION_ID]" type="number" id="PosicionPOSICIONID"></div>';
		}
	}

	function subPosicion(){
		if(document.getElementById('PosicionPOSPOSICIONID').checked){
			document.getElementById('checkbox').innerHTML+= '<br /><br /><div><label for="PosicionPOSICIONID">Identificador de la Posición Padre</label><input name="data[Posicion][POS_POSICION_ID]" type="number" id="PosicionPOSICIONID" required="required"></div>';
			document.getElementById('PosicionPOSPOSICIONID').checked=true;
		}else{
			document.getElementById('checkbox').innerHTML= '<div id="checkbox"><input type="hidden" name="data[Posicion][POS_POSICION_ID]" id="PosicionPOSPOSICIONID_" value="0"><input type="checkbox" name="data[Posicion][POS_POSICION_ID]" onclick="subPosicion()" value="1" id="PosicionPOSPOSICIONID"> ¿Es sub-posición?</div>';
		}
	}
</script>
<div class="posicions form">
<?php echo $this->Form->create('Posicion'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Posicion'); ?></legend>
	<?php
		echo '<div id="checkbox">'.$this->Form->checkbox('POS_POSICION_ID',array(
			'onClick' => 'subPosicion()'
		)).' ¿Es sub-posición?</div><br />';
		echo $this->Form->input('BODEGA_ID',array('label' => 'Bodega asociada'));
		echo $this->Form->input('NOMBRE_POSICION', array('label' => 'Nombre'));
		echo $this->Form->input('ALTO_POSICION', array('label' => 'Alto'));
		echo $this->Form->input('LARGO_POSICION', array('label' => 'Largo'));
		echo $this->Form->input('ANCHO_POSICION', array('label' => 'Ancho'));
	?>
	</fieldset>
<?php 
	$options = array(
		'label' => 'Agregar Posicion',
		'class' => 'btn btn-success',
		'onClick' => 'revisarCheckbox()'
	);
	echo $this->Form->end($options); 
?>
</div>
