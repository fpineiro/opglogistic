<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">

	var contador = 1;
	var arreglo = new Array();

	function actualizar(tipo, filtro){
	        $('#context').load('/ordenDespachos/add/'+tipo+'/'+filtro+' #tablaDatos');
	}
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/ordenDespachos/find/'+valor+' #datos');
			}
	}

	function agregarMaterial(){
		var nombreMaterial = document.getElementById("nombreMaterial").value;
		var cantidadMaterial = document.getElementById("cantidadMaterial").value;
		if(nombreMaterial != "" && cantidadMaterial > 0){
			document.getElementById("tabla").innerHTML+='<tr id="'+contador+'"><td><p class="text-center">'+nombreMaterial+'</p></td><td><p class="text-center">'+cantidadMaterial+'</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+contador+')"></i></p></td></tr>';
			arreglo.push(contador,nombreMaterial, cantidadMaterial);
			contador+=1;
		}
		document.getElementById("nombreMaterial").value="";
		document.getElementById("cantidadMaterial").value="";
	}

	function sacarTD(id){
		for(var i = 0; i < arreglo.length/3; i++){

			if(arreglo[3*(i+1)-3] == id){
				var fila = document.getElementById(id);
				fila.parentNode.removeChild(fila);
				arreglo.splice((3*(i+1)-3),3);
			}
			
		}
	}

</script>

<div class="ordenDespachos form">
	<fieldset>
		<legend><?php echo __('Realizar Orden Despacho'); ?></legend>
		<?php

			echo '<table border="0" class="tablaNav"><tr><td>';

			echo $this->Form->input('nombreMaterial', array(
				'div' => false, 
				'class' => false,
				'label' => 'Nombre Material',
				'autocomplete' => 'off',
				'onkeyup' => 'autosugerir(nombreMaterial.value)',
				'onfocus' => 'autosugerir(nombreMaterial.value)',
				'onblur' => 'document.getElementById("listasugerida").style.visibility="hidden"',
				'style' => 'margin-bottom: 0px;margin-top: -1px; width: 15em'
			));

			echo '</td></tr><tr><td><div class="listaSuger" id="listasugerida"></div></td>';

			echo '</tr></table>';

			echo $this->Form->input('cantidadMaterial',array(
				'label' => 'Cantidad Material',
				'class' => 'input-mini',
				'type' => 'number',
				'min' => '0'
			));

			echo $this->Form->button('Agregar Material',array(
				'type' => 'button',
				'class' => 'btn',
				'onClick' => 'agregarMaterial()',
				'style' => 'margin-bottom: 20px'
			));

		?>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th><p class="text-center"><?php echo __('Nombre del Material Intermedio'); ?></p></th>
					<th><p class="text-center"><?php echo __('Cantidad'); ?></p></th>
					<th><p class="text-center"><?php echo __('Eliminar'); ?></p></th>
				</tr>
			</thead>
			<tbody id="tabla">
					
			</tbody>
		</table>
	</fieldset>
	<?php
		$options = array(
			'label' => 'Realizar Orden',
			'class' => 'btn btn-primary'
		);
		echo $this->Form->end($options);
	?>
</div>