<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function autosugerir(valor){
		if(document.getElementById('listasugerida').value==''){
			document.getElementById('listasugerida').style.visibility="hidden";
		}else{
			document.getElementById('listasugerida').style.visibility="visible";
			if(document.getElementById("tipoMaterial").value == "individual"){
				$('#listasugerida').load('/cakephp/solicitudEmbalajes/findindividual/'+valor+' #datos');
			}else if(document.getElementById("tipoMaterial").value == "deEmbalaje"){
				$('#listasugerida').load('/cakephp/solicitudEmbalajes/finddeembalaje/'+valor+' #datos');
			}else if(document.getElementById("tipoMaterial").value == "intermedio"){
				$('#listasugerida').load('/cakephp/solicitudEmbalajes/findintermedio/'+valor+' #datos');
			}
		}
	}
</script>

<script type="text/javascript">
	var intermedio = false;
	var contador = 0;
	var contador_nombre_individual = 0;
	var contador_cantidad_individual = 0;
	var contador_nombre_embalaje = 0;
	var contador_cantidad_embalaje = 0;
	var contador_nombre_intermedio = 0;
	var contador_cantidad_intermedio = 0;
	var id_intermedio = 0;
	function agregarMaterial(){
		var nombreMaterial = document.getElementById("nombreMaterial").value;
		var cantidadMaterial = document.getElementById("cantidadMaterial").value;
		var tipoMaterial = document.getElementById("tipoMaterial").value;
		if(nombreMaterial != "" && cantidadMaterial > 0){
			if(tipoMaterial == "individual"){
				document.getElementById("tabla").innerHTML+='<tr id="'+contador+'"><td><p class="text-center">'+nombreMaterial+'</p></td><td><p class="text-center">'+cantidadMaterial+'</p></td><td><p class="text-center">Material Individual</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+contador+',datosmaterialIndividualnombre'+contador_nombre_individual+',datosmaterialIndividualcantidad'+contador_cantidad_individual+')"></i></p></td></tr>';
				document.getElementById("datoshidden").innerHTML+='<input type="text" name="data[datos][materialIndividual][nombre]['+contador_nombre_individual+']" value="'+nombreMaterial+'" id="datosmaterialIndividualnombre'+contador_nombre_individual+'">';
				document.getElementById("datoshidden").innerHTML+='<input type="text" name="data[datos][materialIndividual][cantidad]['+contador_cantidad_individual+']" value="'+cantidadMaterial+'" id="datosmaterialIndividualcantidad'+contador_cantidad_individual+'">';
				contador+=1;
				contador_nombre_individual+=1;
				contador_cantidad_individual+=1;
			}else if(tipoMaterial == "deEmbalaje"){
				document.getElementById("tabla").innerHTML+='<tr id="'+contador+'"><td><p class="text-center">'+nombreMaterial+'</p></td><td><p class="text-center">'+cantidadMaterial+'</p></td><td><p class="text-center">Material de Embalaje</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+contador+',datosmaterialEmbalajenombre'+contador_nombre_embalaje+',datosmaterialEmbalajecantidad'+contador_cantidad_embalaje+')"></i></p></td></tr>';
				document.getElementById("datoshidden").innerHTML+='<input type="text" name="data[datos][materialEmbalaje][nombre]['+contador_nombre_embalaje+']" value="'+nombreMaterial+'" id="datosmaterialEmbalajenombre'+contador_nombre_embalaje+'">';
				document.getElementById("datoshidden").innerHTML+='<input type="text" name="data[datos][materialEmbalaje][cantidad]['+contador_cantidad_embalaje+']" value="'+cantidadMaterial+'" id="datosmaterialEmbalajecantidad'+contador_cantidad_embalaje+'">';
				contador+=1;
				contador_nombre_embalaje+=1;
				contador_cantidad_embalaje+=1;
			}else if(tipoMaterial == "intermedio" && intermedio == false){
				id_intermedio = contador;
				document.getElementById("tabla").innerHTML+='<tr id="'+id_intermedio+'"><td><p class="text-center">'+nombreMaterial+'</p></td><td><p class="text-center">'+cantidadMaterial+'</p></td><td><p class="text-center">Material Intermedio</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+id_intermedio+',datosmaterialIntermedionombre'+contador_nombre_intermedio+',datosmaterialIntermediocantidad'+contador_cantidad_intermedio+')"></i></p></td></tr>';
				document.getElementById("datoshidden").innerHTML+='<input type="text" name="data[datos][materialIntermedio][nombre]['+contador_nombre_intermedio+']" value="'+nombreMaterial+'" id="datosmaterialIntermedionombre'+contador_nombre_intermedio+'">';
				document.getElementById("datoshidden").innerHTML+='<input type="text" name="data[datos][materialIntermedio][cantidad]['+contador_cantidad_intermedio+']" value="'+cantidadMaterial+'" id="datosmaterialIntermediocantidad'+contador_cantidad_intermedio+'">';
				intermedio = true;
				contador+=1;
				contador_nombre_intermedio+=1;
				contador_cantidad_intermedio+=1;
			}else if(tipoMaterial == "intermedio" && intermedio == true){
				if(document.getElementById('alerta')==null) document.getElementById('fieldset').innerHTML='<div class="alert" id="alerta"><button type="button" class="close" data-dismiss="alert">&times;</button>Solo se puede agregar un material intermedio por solicitud</div>'+document.getElementById('fieldset').innerHTML;
				else ;
			}
		}
		document.getElementById("nombreMaterial").value="";
		document.getElementById("cantidadMaterial").value="";
	}
	function sacarTD(id,id_nombre,id_cantidad){
		if(intermedio==true && id==id_intermedio){
			intermedio=false;
		}
		var fila = document.getElementById(id);
		fila.parentNode.removeChild(fila);
		id_nombre.parentNode.removeChild(id_nombre);
		id_cantidad.parentNode.removeChild(id_cantidad);
	}
</script>
<div class="solicitudEmbalajes form">
		<fieldset id="fieldset">
			<legend><?php echo __('Enviar Solicitud Embalaje'); ?></legend>
			<?php
				echo '<div style="margin-bottom: 10px">';
					echo $this->Form->label('Tipo de Material');
					echo $this->Form->select('tipoMaterial',array(
						'individual' => 'Material Individual',
						'deEmbalaje' => 'Material de Embalaje',
						'intermedio' => 'Material Intermedio'
					),array(
						'class' => 'input-large',
						'multiple' => 'radiobox'
					));
				echo "</div>";

				/*echo $this->Form->input('nombreMaterial',array(
					'label' => 'Nombre Material',
					'class' => 'input-large',
				));*/

				echo $this->Html->script('funciones');

				echo '<table border="0" class="tablaNav"><tr><td>';

				echo $this->Form->input('nombreMaterial', array(
					'div' => false, 
					'class' => false,
					'label' => 'Nombre Material',
					'placeholder' => 'Ingrese el nombre del material',
					'autocomplete' => 'off',
					'onkeyup' => 'autosugerir(nombreMaterial.value)',
					'onfocus' => 'autosugerir(nombreMaterial.value)',
					'onblur' => 'document.getElementById("listasugerida").style.visibility="hidden"',
					'style' => 'margin-bottom: 0px;margin-top: -1px; width: 15em'
				));

				echo '</td></tr><tr><td><div class="listaSuger" id="listasugerida"></div></td>';

				echo '</tr></table>';

				/*echo $this->Form->submit('Buscar', array(
					'div' => false, 
					'class' => 'btn', 
					'onclick' => "actualizar('busca', nombreMaterial.value)",
					'style' => 'vertical-align: top; margin-top: 25px;'
				));*/
				echo $this->Form->input('cantidadMaterial',array(
					'label' => 'Cantidad Material',
					'class' => 'input-mini',
					'style' => 'margin-bottom: 20px',
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
			<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<tr>
						<th><p class="text-center"><?php echo __('Nombre del Material'); ?></p></th>
						<th><p class="text-center"><?php echo __('Cantidad'); ?></p></th>
						<th><p class="text-center"><?php echo __('Tipo de Material'); ?></p></th>
						<th><p class="text-center"><?php echo __('Eliminar'); ?></p></th>
					</tr>
				</thead>
				<tbody id="tabla">
					
				</tbody>
			</table>
			<?php
				echo $this->Form->input('SOLICITUD_EMBALAJE_ID',array('type' => 'text', 'label' => 'Identificador de la Solicitud', 'style' => 'margin-bottom: 20px'/*, 'required' => 'true'*/, 'min' => '0'));
				foreach($users as $user){
					if($user['User']['ID'] == AuthComponent::user('ID')){
						$cliente_id = $user['User']['CLIENTE_ID'];
					}
				}
				echo $this->Form->input('CLIENTE_ID',array('type' => 'hidden', 'value' => $cliente_id));
				echo $this->Form->input('ESTADO_AUTOMATA_ID',array('type' => 'hidden', 'value' => '1'));
			?>
			<div id="datoshidden" hidden>
				
			</div>
		</fieldset>
	<?php 
		$options = array(
			'label' => 'Enviar Solicitud',
			'class' => 'btn btn-primary'
		);
		echo $this->Form->end($options); 
	?>
</div>