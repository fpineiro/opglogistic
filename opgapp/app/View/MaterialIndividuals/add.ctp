<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(tipo, filtro){
	        $('#context').load('/cakephp/users/index/'+tipo+'/'+filtro+' #tablaDatos');
	}
	function autosugerir(valor, num){
			if(document.getElementById('listasugerida'+num).value==''){
				document.getElementById('listasugerida'+num).style.visibility="hidden";
			}else{
				document.getElementById('listasugerida'+num).style.visibility="visible";
				$('#listasugerida'+num).load('/cakephp/materialindividuals/find/'+valor+' #datos');
			}
	}
	function inputMaterial(accion, count1){
			var count2 = $('#inputsMaterial'+count1+' > div').size();
			if(accion == 'agregar'){
				count2 = count2 + 1;
				var input = '<div id="inputsMaterials'+count1+'"><label for="inputMaterial'+count2+'">Numero de cajas / Cantidad en caja</label><input id="inputMaterial'+count2+'" type="text" style="display: inline" name="data['+count1+'][MaterialIndividual][Formato]['+count2+'][cantCajas]" class="input-mini"></input><input id="cantInputMaterial'+count2+'" type="text" style="display: inline" name="data['+count1+'][MaterialIndividual][Formato]['+count2+'][cantPorCaja]" class="input-mini"></input></div>';
				$('#inputsMaterial'+count1).append(input);
			}else if(accion == 'eliminar'){
				$('#inputsMaterials'+count1).remove();
				count2 = count2 - 1;
			}
	}

	function inputMaterialIndividual(accion){
			var count = $('#inputsMaterialIndividual > div').size();
			if(accion == 'agregar'){
				count = count + 1;
				var input = '<div id="inputsMaterialIndividual'+count+'"><table border="0" class="tablaNav"><tr><td><input name="data['+count+'][MaterialIndividual][NOMBRE_MATERIAL_INDIVIDUAL]" maxlength="40" type="text" id="MaterialIndividual'+count+'NOMBREMATERIALINDIVIDUAL" onblur="document.getElementById(\'listasugerida'+count+'\').style.visibility=\'hidden\'" onfocus="autosugerir(this.value, '+count+')" onkeyup="autosugerir(this.value, '+count+')" placeholder="Ingrese nombre de material" autocomplete="off" style="margin-bottom: 0px"/></td><td><button type="button" class="btn btn-success" onclick="inputMaterial(\'agregar\', '+count+')">+</button><button type="button" class="btn btn-danger" onclick="inputMaterial(\'eliminar\', '+count+')">-</button></td></tr><tr><td><div class="listaSuger" id="listasugerida'+count+'"></div></td></tr></table><div id="inputsMaterial'+count+'"></div>';
				$('#inputsMaterialIndividual').append(input);
			}else if(accion == 'eliminar'){
				if(count != 1){
					$('#inputsMaterialIndividual'+count).remove();
					count = count - 1;
				}
			}
	}
</script>
<div class="materialIndividuals form">
<fieldset>
<legend><?php echo __('Agregar Material Individual'); ?></legend>
<?php echo $this->Form->create('MaterialIndividual'); ?>
	<div id="inputsMaterialIndividual">
	<?php

		echo '<table border="0" class="tablaNav"><tr><td>';

		echo $this->Form->input('1.MaterialIndividual.NOMBRE_MATERIAL_INDIVIDUAL', array(
			'div' => false, 
			'class' => false,
			'style' => 'margin-bottom: 0px',
			'label' => false,
			'autocomplete' => 'off',
			'placeholder' => 'Ingrese nombre de material',
			'onkeyup' => 'autosugerir(this.value, 1)',
			'onfocus' => 'autosugerir(this.value, 1)',
			'onblur' => 'document.getElementById("listasugerida1").style.visibility="hidden"',
		));

		echo '</td><td>';
		echo $this->Form->button('+', array('type' => 'button', 'class' => 'btn btn-success', 'onclick' => 'inputMaterial(\'agregar\', 1)'));
		echo $this->Form->button('-', array('type' => 'button', 'class' => 'btn btn-danger', 'onclick' => 'inputMaterial(\'eliminar\', 1)'));
		echo '</td></tr><tr><td><div class="listaSuger" id="listasugerida1"></div></td></tr><tr><td>';
	?>
	<?php echo '</td></tr></table>'; ?>
	<div id="inputsMaterial1">
	</div>
	</div>
<?php echo $this->Form->button('Siguiente', array('type' =>'submit', 'class' => 'btn')); ?>
</div>
</fieldset>
<?php 
	echo $this->Form->button('+', array('type' => 'button', 'class' => 'btn btn-success', 'onclick' => 'inputMaterialIndividual(\'agregar\')'));
	echo $this->Form->button('-', array('type' => 'button', 'class' => 'btn btn-danger', 'onclick' => 'inputMaterialIndividual(\'eliminar\')'));
?>
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
		<?php //echo $this->Html->link(__('List Material Individuals'), array('action' => 'index')); ?>
</div>
