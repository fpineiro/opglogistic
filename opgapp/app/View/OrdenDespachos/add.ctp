<script type="text/javascript">
	var intermedio = false;
	var contador = 0;
	var id_intermedio = 0;
	function agregarMaterial(){
		if(document.getElementById("OrdenDespachoNombreMaterial").value != "" && document.getElementById("OrdenDespachoCantidadMaterial").value > 0){
			document.getElementById("tabla").innerHTML+='<tr id="'+contador+'"><td><p class="text-center">'+document.getElementById("OrdenDespachoNombreMaterial").value+'</p></td><td><p class="text-center">'+document.getElementById("OrdenDespachoCantidadMaterial").value+'</p></td><td><p class="text-center"><i class="icon-remove" onClick="sacarTD('+contador+')"></i></p></td></tr>';
			contador+=1;
		}
		document.getElementById("OrdenDespachoNombreMaterial").value="";
		document.getElementById("OrdenDespachoCantidadMaterial").value="";
	}
	function sacarTD(id){
		if(intermedio==true && id==id_intermedio){
			intermedio=false;
		}
		var fila = document.getElementById(id);
		fila.parentNode.removeChild(fila);
	}
</script>

<div class="ordenDespachos form">
	<?php echo $this->Form->create('OrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Realizar Orden Despacho'); ?></legend>
		<?php
			echo $this->Form->input('nombreMaterial',array(
				'label' => 'Nombre Material',
				'class' => 'input-large'
			));
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