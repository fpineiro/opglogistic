<div class="ordenDespachos index">
	<h2><?php echo __('Orden Despachos'); ?></h2>
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_DESPACHO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('GUIA_DESPACHO_SALIDA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_DETALLE_SOLICITUD_DESPACHO'); ?></th>
			<th><?php echo $this->Paginator->sort('DESTINO_DETALLE_SOLICITUD_DESPACHO'); ?></th>
	</tr>
	<?php foreach ($ordenDespachos as $ordenDespacho): ?>
	<tr>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['GUIA_DESPACHO_SALIDA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['FECHA_DETALLE_SOLICITUD_DESPACHO']); ?>&nbsp;</td>
		<td><?php echo h($ordenDespacho['OrdenDespacho']['DESTINO_DETALLE_SOLICITUD_DESPACHO']); ?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>
