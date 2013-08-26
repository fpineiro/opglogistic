<div class="ordenInternas index">
	<?php 
	echo '<legend><h3>Lista de ordenes internas</h3></legend>';

	echo '<h5>'."Seleccione una orden interna para ver su detalle".'</h5><br>';
	?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('ORDEN_INTERNA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('BODEGA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ORDEN_DESPACHO_ID'); ?></th>
	</tr>
	<?php foreach ($ordenInternas as $ordenInterna): ?>
	<tr>
		<td><?php echo h($ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['BODEGA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['ESTADO_AUTOMATA_ID']); ?>&nbsp;</td>
		<td><?php echo h($ordenInterna['OrdenInterna']['ORDEN_DESPACHO_ID']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>