<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/cakephp/compatibilidads/find/'+valor+' #datos');
			}
	}
</script>
<div class="clientes index">
	<?php 
	
	echo $this->Html->script('funciones');
	echo '<legend><h3>Lista de compatibilidades</h3></legend>';
	echo '<table border="0" class="tablaNav"><tr><td>';
	echo $this->Form->input('inputbusqueda', array(
		'div' => false, 
		'class' => false,
		'label' => false,
		'placeholder' => 'Ingrese de material intermedio',
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
	echo $this->Html->link('Ingresar compatibilidad', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=>'float:right'));
	echo '<br><br>';
	?>	
	<div id="context">
	<div class="compatibilidads index">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
				
				<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID', 'Material intermedio'); ?></th>
				<th><?php echo $this->Paginator->sort('MATERIAL_DE_EMBALAJE_ID', 'Material de embalaje'); ?></th>
		</tr>
	</thead>

	<?php foreach ($compatibilidads as $compatibilidad): ?>
	<tbody>
	<tr>
		<td><?php echo $this->Html->link(($compatibilidad['Compatibilidads']['MATERIAL_INTERMEDIO_ID']), array('action' => 'view', $user['Compatibilidads']['MATERIAL_INTERMEDIO_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($compatibilidad['Compatibilidads']['MATERIAL_DE_EMBALAJE_ID']), array('action' => 'view', $user['Compatibilidads']['MATERIAL_DE_EMBALAJE_ID']));?>&nbsp;</td>
	</tr>
	</tbody>
<?php endforeach; ?>
	</table>
	</div>
</div>

