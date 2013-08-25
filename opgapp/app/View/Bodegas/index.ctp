<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(tipo, filtro){
	        $('#context').load('/cakephp/bodegas/index/'+tipo+'/'+filtro+' #tablaDatos');
	}
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/cakephp/bodegas/find/'+valor+' #datos');
			}
	}
</script>
<div class="bodegas index">
<?php 

	echo $this->Html->script('funciones');
	echo '<legend><h3>Lista de bodegas</h3></legend>';
	echo '<table border="0" class="tablaNav"><tr><td>';

	echo $this->Form->input('inputbusqueda', array(
		'div' => false, 
		'class' => false,
		'label' => false,
		'placeholder' => 'Ingrese nombre o apellido',
		'autocomplete' => 'off',
		'onkeyup' => 'autosugerir(inputbusqueda.value)',
		'onfocus' => 'autosugerir(inputbusqueda.value)',
		'onblur' => 'document.getElementById("listasugerida").style.visibility="hidden"',
		'style' => 'margin-bottom: 0px;margin-top: -1px; width: 15em'
	));

	echo '</td></tr><tr><td><div class="listaSuger" id="listasugerida"></div></td>';

	echo '</tr></table>';
	echo $this->Html->link('Ingresar bodega', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=> 'float:right')).'</tr></table>';
	echo $this->Form->submit('Buscar', array(
		'div' => false, 
		'class' => 'btn', 
		'onclick' => "actualizar('busca', inputbusqueda.value)",
		'style' => 'vertical-align: top; margin-bottom: 0px;'
	));

	
	echo '<h5>'."Seleccione una bodega para ver su detalle".'</h5><br>';
	?>

	
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<thead>
			<th><?php echo $this->Paginator->sort('NAME','Jefe de Bodega'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_CLIENTE', 'Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORIA_BODEGA', 'Catergoría de la bodega'); ?></th>
			</thead>	
	</tr>
	<?php foreach ($bodegas as $bodega): ?>
	<tr>
		</tbody>	
		<td><?php echo $this->Html->link($bodega['User']['NAME'], array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?></td>
		<td><?php echo $this->Html->link($bodega['Cliente']['NOMBRE_CLIENTE'], array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?></td>
		<td><?php echo $this->Html->link($bodega['Bodega']['CATEGORIA_BODEGA'], array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?></td>
		</tbody>
	</tr>
<?php endforeach; ?>
	</table>

