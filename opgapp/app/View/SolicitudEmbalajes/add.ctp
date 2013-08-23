<script type="text/javascript">
	var intermedio = false;
	var contador = 0;
	var id_intermedio = 0;
	function agregarMaterial(){
		if(document.getElementById("SolicitudEmbalajeNombreMaterial").value != "" && document.getElementById("SolicitudEmbalajeCantidadMaterial").value > 0){
			if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "individual"){
				document.getElementById("tabla").innerHTML+='<tr id="'+contador+'"><td><p class="text-center">'+document.getElementById("SolicitudEmbalajeNombreMaterial").value+'</p></td><td><p class="text-center">'+document.getElementById("SolicitudEmbalajeCantidadMaterial").value+'</p></td><td><p class="text-center">Material Individual</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+contador+')"></i></p></td></tr>';
				contador+=1;
			}else if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "deEmbalaje"){
				document.getElementById("tabla").innerHTML+='<tr id="'+contador+'"><td><p class="text-center">'+document.getElementById("SolicitudEmbalajeNombreMaterial").value+'</p></td><td><p class="text-center">'+document.getElementById("SolicitudEmbalajeCantidadMaterial").value+'</p></td><td><p class="text-center">Material de Embalaje</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+contador+')"></i></p></td></tr>';
				contador+=1;
			}else if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "intermedio" && intermedio == false){
				id_intermedio = contador;
				document.getElementById("tabla").innerHTML+='<tr id="'+id_intermedio+'"><td><p class="text-center">'+document.getElementById("SolicitudEmbalajeNombreMaterial").value+'</p></td><td><p class="text-center">'+document.getElementById("SolicitudEmbalajeCantidadMaterial").value+'</p></td><td><p class="text-center">Material Intermedio</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+id_intermedio+')"></i></p></td></tr>';
				intermedio = true;
				contador+=1;
			}else if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "intermedio" && intermedio == true){
				if(document.getElementById('alerta')==null) document.getElementById('fieldset').innerHTML='<div class="alert" id="alerta"><button type="button" class="close" data-dismiss="alert">&times;</button>Solo se puede agregar un material intermedio por solicitud</div>'+document.getElementById('fieldset').innerHTML;
				else ;
			}
		}
		document.getElementById("SolicitudEmbalajeNombreMaterial").value="";
		document.getElementById("SolicitudEmbalajeCantidadMaterial").value="";
	}
	function sacarTD(id){
		if(intermedio==true && id==id_intermedio){
			intermedio=false;
		}
		var fila = document.getElementById(id);
		fila.parentNode.removeChild(fila);
	}
</script>
<div class="solicitudEmbalajes form">
	<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
		<fieldset id="fieldset">
			<legend><?php echo __('Enviar Solicitud Embalaje'); ?></legend>
			<?php
				echo $this->Form->input('nombreMaterial',array(
					'label' => 'Nombre Material',
					'class' => 'input-large',
				));
				echo $this->Form->input('cantidadMaterial',array(
					'label' => 'Cantidad Material',
					'class' => 'input-mini',
					'type' => 'number',
					'min' => '0'
				));
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
				echo $this->Form->button('Agregar Material',array(
					'type' => 'button',
					'class' => 'btn',
					'onClick' => 'agregarMaterial()',
					'style' => 'margin-bottom: 20px'
				));
			?>

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
		</fieldset>
	<?php 
		$options = array(
			'label' => 'Enviar Solicitud',
			'class' => 'btn btn-primary'
		);
		echo $this->Form->end($options); 
	?>
</div>