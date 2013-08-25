<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(tipo, filtro){
	        $('#context').load('/users/index/'+tipo+'/'+filtro+' #tablaDatos');
	}
	function autosugerir(valor){
			if(document.getElementById('listasugerida').value==''){
				document.getElementById('listasugerida').style.visibility="hidden";
			}else{
				document.getElementById('listasugerida').style.visibility="visible";
				$('#listasugerida').load('/users/find/'+valor+' #datos');
			}
	}
</script>
<div class="users index">
	<?php 

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

	echo $this->Html->link('Ingresar usuario', array(
		'action' => 'add'), array('class' => 'btn'));
	
	echo '</div>';

	echo '<h5>'."Seleccione un usuario para ver su detalle".'</h5>';
	?>
	<!--table table-striped table-bordered table-condensed-->
	<div id="context">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
				
				<th><?php echo $this->Paginator->sort('USER', 'Usuario'); ?></th>
				<th><?php echo $this->Paginator->sort('NAME', 'Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('LASTNAME', 'Apellido'); ?></th>
				<th><?php echo $this->Paginator->sort('MAIL', 'E-Mail'); ?></th>
				<th><?php echo $this->Paginator->sort('ROLE', 'Rol'); ?></th>
				<th><?php echo $this->Paginator->sort('CLIENTE_ID', 'Cliente'); ?></th>
				<th><?php echo $this->Paginator->sort('BODEGA_ID', 'Bodega'); ?></th>
			
		</tr>
	</thead>

	<?php foreach ($users as $user): ?>
	<tbody>
	<tr>
		<td><?php echo $this->Html->link(($user['User']['USERNAME']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($user['User']['NAME']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($user['User']['LASTNAME']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($user['User']['MAIL']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($user['User']['ROLE']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($user['Cliente']['NOMBRE_CLIENTE']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($user['User']['BODEGA_ID']), array('action' => 'view', $user['User']['ID']));?>&nbsp;</td>
		

	</tr>
	</tbody>
<?php endforeach; ?>
	</table>
	</div>
	<p>
	<!--<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	--></p>
	<div class="paging">
	<?php
		/*echo $this->Paginator->prev('< ' . __('Anterior '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
</div>

