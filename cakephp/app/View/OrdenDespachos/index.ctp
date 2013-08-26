<div class="ordenDespachos index">
	<?php	
	echo '<legend><h3>Lista de ordenes de despacho</h3></legend>';
	echo '<h5>'."Seleccione una orden para ver su detalle".'</h5><br>'; ?>
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_DESPACHO_ID', 'ID Orden de Despacho'); ?></th>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_SALIDA_ID', 'ID Guía de Despacho'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID', 'ID Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID', 'ID Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_SOLICITUD_DESPACHO', 'Detalle Solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('DESTINO_SOLICITUD_DESPACHO', 'Destino Despacho'); ?></th>
	</tr>
	<?php foreach ($ordenDespachos as $ordenDespacho): ?>
	<tr>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['GUIA_DESPACHO_SALIDA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['FECHA_SOLICITUD_DESPACHO']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['DESTINO_SOLICITUD_DESPACHO']); ?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
