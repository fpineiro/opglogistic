<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/cakephp/proveedors/find/'+valor+' #datos');
			}
	}
</script>
<div class="proveedors index">
	<?php 
	echo $this->Html->script('funciones');
	echo '<legend><h3>Lista de proveedores</h3></legend>';
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

	echo $this->Form->submit('Buscar', array(
		'div' => false, 
		'class' => 'btn', 
		'onclick' => "actualizar('busca', inputbusqueda.value)",
		'style' => 'vertical-align: top; margin-bottom: 0px;'
	));
	echo $this->Html->link('Ingresar proveedor', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=>'float:right'));
	
	echo '<h5>'."Seleccione un proveedor para ver su detalle".'</h5><br>';
	?>
	<!--table table-striped table-bordered table-condensed-->
	<div id="context">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Dirección'); ?></th>
		<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
		<th><?php echo $this->Paginator->sort('E-Mail'); ?></th>
		
	</tr>
	</thead>
	<?php foreach ($proveedors as $proveedor): ?>
	<tr>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['NOMBRE_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['DIRECCION_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['TELEFONO_CONTACTO_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['EMAIL_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>
	</div>
</div>


