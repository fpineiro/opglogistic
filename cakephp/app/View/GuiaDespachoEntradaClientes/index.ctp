<div class="guiaDespachoEntradaClientes index">	
<?php 
	echo '<legend><h3>Lista de guias de despacho</h3></legend>';

	echo $this->Html->link('Ingresar guía de despacho', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=> 'float:right')).'</tr></table>';

	echo '<h5>'."Seleccione una guía de despacho para ver su detalle".'</h5><br>';
	?>
<div id="context">

	
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_CLIENTE_ID', 'Identificador de la guía de despacho'); ?></th>
		<th><?php echo $this->Paginator->sort('CLIENTE_ID', 'Cliente asociado'); ?></th>
		<th><?php echo $this->Paginator->sort('CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES','Contiene material de embalaje'); ?></th>
	</tr>
	</thead>
	<?php foreach ($guiaDespachoEntradaClientes as $guiaDespachoEntradaCliente): ?>
	<tr>
	<tbody>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CLIENTE_ID'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
		<td><?php echo $this->Html->link($guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['CONTIENE_EMBALAJE_GUIA_DESPACHO_ENTRADA_CLIENTES'], array('action' => 'view', $guiaDespachoEntradaCliente['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID'])); ?></td>
	</tbody>
	</tr>
<?php endforeach; ?>
	</table>
</div>
