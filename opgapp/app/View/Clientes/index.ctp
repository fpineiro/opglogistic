<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
 
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/cakephp/clientes/find/'+valor+' #datos');
			}
	}
</script>
<div class="clientes index">
	<?php 
	echo $this->Html->script('funciones');
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

	echo '<div id="asdf" style="float: right">';
	echo $this->Html->link('Ingresar cliente', array(
		'action' => 'add'), array('class' => 'btn'));	
	echo '</div>';

	echo '<h5>'."Seleccione un cliente para ver su detalle".'</h5>';

	?>
	<!--<div class="actions">
	<ul>
		<li><?php //echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
	</ul>-->

	
	<div id="context">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('NOMBRE_CLIENTE','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('DIRECCION_CLIENTE','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('TELEFONO_CONTACTO_CLIENTE','Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('EMAIL_CLIENTE','E-Mail'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo $this->Html->link(($cliente['Cliente']['NOMBRE_CLIENTE']), array('action' => 'view', $cliente['Cliente']['CLIENTE_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($cliente['Cliente']['DIRECCION_CLIENTE']), array('action' => 'view', $cliente['Cliente']['CLIENTE_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($cliente['Cliente']['TELEFONO_CONTACTO_CLIENTE']), array('action' => 'view', $cliente['Cliente']['CLIENTE_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($cliente['Cliente']['EMAIL_CLIENTE']), array('action' => 'view', $cliente['Cliente']['CLIENTE_ID']));?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>
	</div>
	<div class="paging">
	<?php
		/*echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
</div>


