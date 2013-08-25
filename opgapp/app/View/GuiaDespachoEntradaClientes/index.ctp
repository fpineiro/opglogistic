<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(tipo, filtro){
	        $('#context').load('/cakephp/GuiaDespachoEntradaClientes/index/'+tipo+'/'+filtro+' #tablaDatos');
	}
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/cakephp/GuiaDespachoEntradaClientes/find/'+valor+' #datos');
			}
	}
</script>
<div class="guiaDespachoEntradaClientes index">	
<?php 
	echo '<legend><h3>Lista de guias de despacho</h3></legend>';
	echo $this->Html->script('funciones');
	echo $this->Form->input('filtrorol', array(
		'options' => array('' => 'Sin Filtro', 'cliente' => 'Cliente', 'jb' => 'Jefe de Bodega', 'admin' => 'Administrador'), 
		'label' => '',
		'onchange' => "actualizar('filtra', this.value)",
		'div' => false,
		'class' => 'input-medium select',
		'style' => 'margin-bottom: 0px;'
	));
	echo '<table border="0" class="tablaNav"><tr><td>';
	echo $this->Form->input('inputbusqueda', array(
		'div' => false, 
		'class' => false,
		'label' => false,
		'placeholder' => 'Ingrese identificador de G/D',
		'autocomplete' => 'off',
		'onkeyup' => 'autosugerir(inputbusqueda.value)',
		'onfocus' => 'autosugerir(inputbusqueda.value)',
		'onblur' => 'document.getElementById("listasugerida").style.visibility="hidden"',
		'style' => 'margin-bottom: 0px;margin-top: -1px; width: 15em'
	));
	echo '</td></tr><tr><td><div class="listaSuger" id="listasugerida"></div></td>';

	echo $this->Html->link('Ingresar guía de despacho', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=> 'float:right')).'</tr></table>';
	echo $this->Form->submit('Buscar', array(
		'class' => 'btn', 
		'div' => false,
		'onclick' => "actualizar('busca', inputbusqueda.value)",
		'style' => 'vertical-align: top; margin-top: 1px;'
	)).'</div>';

	echo '<h5>'."Seleccione una guía de despacho para ver su detalle".'</h5><br>';
	?>
<div id="context">

	
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_CLIENTE_ID', 'Identificador de la guía de despacho'); ?></th>
		<th><?php echo $this->Paginator->sort('CLIENTE_ID', 'Cliente asociado'); ?></th>
		<th><?php echo $this->Paginator->sort('FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE','Fecha'); ?></th>
		<th><?php echo $this->Paginator->sort('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES','Contiene material de embalaje'); ?></th>
	</tr>
	</thead>
	<?php foreach ($guiaDespachoEntradaClientes as $guiaDespachoEntradaCliente): ?>
	<tr>
	<tbody>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CLIENTE_ID'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['FECHA_DETALLE_GUIA_DESPACHO_ENTRADA_CLIENTE'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
	</tbody>
	</tr>
<?php endforeach; ?>
	</table>
</div>
