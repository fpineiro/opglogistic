<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/cakephp/materialindividuals/find/'+valor+' #datos');
			}
	}
</script>
<div class="materialIndividuals index">
<?php 
	echo '<legend><h3>Lista de materiales individuales</h3></legend>';
	echo $this->Html->script('funciones');
	
	echo '<table border="0" class="tablaNav"><tr><td>';
	echo $this->Form->input('inputbusqueda', array(
		'div' => false, 
		'class' => false,
		'label' => false,
		'placeholder' => 'Ingrese nombre del material',
		'autocomplete' => 'off',
		'onkeyup' => 'autosugerir(inputbusqueda.value)',
		'onfocus' => 'autosugerir(inputbusqueda.value)',
		'onblur' => 'document.getElementById("listasugerida").style.visibility="hidden"',
		'style' => 'margin-bottom: 0px;margin-top: -1px; width: 15em'
	));
	echo '</td></tr><tr><td><div class="listaSuger" id="listasugerida"></div></td>';

	echo '</tr></table>';
	echo $this->Form->submit('Buscar', array(
		'class' => 'btn', 
		'div' => false,
		'onclick' => "actualizar('busca', inputbusqueda.value)",
		'style' => 'vertical-align: top; margin-top: 1px;'
	)).'</div>';

	echo '<h5>'."Seleccione un material individual para ver su detalle".'</h5><br>';
	?>

	<div id="context">
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<thead>
			<th><?php echo $this->Paginator->sort('MATERIAL_INDIVIDUAL_ID','Identificador del material individual' ); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_MATERIAL_INDIVIDUAL','Nombre del material individual'); ?></th>
		</theaa>	
	</tr>
	<?php foreach ($materialIndividuals as $materialIndividual): ?>
	<tr>
		<tbody>
			<td><?php echo $this->Html->link($materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'], array('action' => 'view', $materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'])); ?></td>
			<td><?php echo $this->Html->link($materialIndividual['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL'], array('action' => 'view', $materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'])); ?></td>
		</tbody>
	</tr>
<?php endforeach; ?>
	</table>
</div>
