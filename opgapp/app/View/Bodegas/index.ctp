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

	echo '<div style="float:right">'.$this->Html->link('Ingresar bodega', array('action' => 'add'),array('class' => 'btn')).'</div>'; 
	echo '<h5>'."Seleccione una bodega para ver su detalle".'</h5>';
	?>

	
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			
			<th><?php echo $this->Paginator->sort('Jefe de Bodega'); ?></th>
			<th><?php echo $this->Paginator->sort('Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('Catergoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bodegas as $bodega): ?>
	<tr>
		
		<td><?php echo h($bodega['Bodega']['ID']); ?>&nbsp;</td>
		<td><?php echo h($bodega['Bodega']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($bodega['Bodega']['CATEGORIA_BODEGA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	/*echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));*/
	?>	</p>
	<div class="paging">
	<?php
		/*echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
</div>

