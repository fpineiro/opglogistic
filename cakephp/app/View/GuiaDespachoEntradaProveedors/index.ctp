<div class="guiaDespachoEntradaProveedors index">
	<?php 
	echo '<legend><h3>Lista de guias de despacho</h3></legend>';

	echo $this->Html->link('Ingresar guía de despacho de entrada', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=> 'float:right')).'</tr></table>';

	echo '<h5>'."Seleccione una guía de despacho para ver su detalle".'</h5><br>';
	?>
<div id="context">

	
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_PROVEEDOR_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PROVEEDOR_ID'); ?></th>
	</tr>
	<?php foreach ($guiaDespachoEntradaProveedors as $guiaDespachoEntradaProveedor): ?>
	<tr>
		<td><?php echo $this->Html->link($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'], array('action' => 'view', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?></td>
		<td><?php echo $this->Html->link($guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['PROVEEDOR_ID'], array('action' => 'view', $guiaDespachoEntradaProveedor['GuiaDespachoEntradaProveedor']['GUIA_DESPACHO_PROVEEDOR_ID'])); ?></td>
	</tr>
<?php endforeach; ?>
	</table>