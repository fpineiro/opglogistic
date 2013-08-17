<script type="text/javascript">
	function agregarMaterial(){
		if(document.getElementById("SolicitudEmbalajeNombreMaterial").value != "" && document.getElementById("SolicitudEmbalajeCantidadMaterial").value > 0){
			if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "individual"){
				alert("INDIVIDIVI");
			}if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "deEmbalaje"){
				alert("EMBALAJS");
			}if(document.getElementById("SolicitudEmbalajeTipoMaterial").value == "intermedio"){
				alert("INTERMEDI");
			}
		}else{
			alert("NO TIENE NADITA");
		}
	}
</script>
<div class="solicitudEmbalajes form">
	<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
		<fieldset>
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
			<table class="table table-striped table-bordered">
				<thead>
					<?php
						echo $this->Html->tableHeaders(array(
								array('Material Individual' => array('class' => 'materialIndividual')),
								array('Cantidad' => array('class' => 'cantidadIndividual')),
								array('Material de Embalaje' => array('class' => 'materialDeEmbalaje')),
								array('Cantidad' => array('class' => 'cantidadDeEmbalaje')),
								array('Material Intermedio' => array('class' => 'materialIntermedio')),
								array('Cantidad' => array('class' => 'cantidadIntermedio'))
							));
					?>
				</thead>
				<tbody>
					<?php
						echo $this->Html->tableCells(array(
								array('CACAMAN','95','GANTTERMAN','69','BUCAKEMAN','45'),
								array('TONTOMAN','59','CHAUFETA','96','POWERMAN','54')
							)
						);
					?>
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
	<div id="modalAgregarMaterial" class="modal hide fade">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>No ha seleccionado ninguna sección</h3>
		</div>
		<div class="modal-body">
			<p>Por favor seleccione una sección y vuelva a intentarlo.</p>
		</div>
		<div class="modal-footer">
			<button class="btn" type="button" data-dismiss="modal">Cerrar</button>
		</div>
	</div>
</div>