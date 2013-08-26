<div class="ordenCompras index">
<?php
	echo '<legend><h3>Lista de ordenes de compra</h3></legend>';
	
	echo '<h5>'."Seleccione una orden para ver su detalle".'</h5><br>';
?>
	
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>	
	<tr>
		
			<th><?php echo $this->Paginator->sort('Proveedor'); ?></th>
			<th><?php echo $this->Paginator->sort('Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha orden de compra'); ?></th>	
	</tr>
	</thead>
	<?php foreach ($ordenCompras as $ordenCompra): ?>
	<tr>
		<td><?php echo $this->Html->link(($ordenCompra['OrdenCompra']['PROVEEDOR_ID']), array('action' => 'view', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($ordenCompra['OrdenCompra']['PROCESADA_ORDEN_COMPRA']), array('action' => 'view', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($ordenCompra['OrdenCompra']['FECHA_ORDEN_COMPRA']), array('action' => 'view', $ordenCompra['OrdenCompra']['ORDEN_COMPRA_ID']));?>&nbsp;</td>

	</tr>
	<?php endforeach; ?>
	</table>
	<p>
	<?php
	//echo $this->Paginator->counter(array(
	//'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	//));
	?>	</p>
	<div class="paging">
	<?php
	/*	echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
</div>