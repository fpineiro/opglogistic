<div class="proveedors index">
	<?php 
	echo $this->Html->script('funciones');
	echo '<legend><h3>Lista de proveedores</h3></legend>';
	echo $this->Html->link('Ingresar proveedor', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=>'float:right'));
	
	echo '<h5>'."Seleccione un proveedor para ver su detalle".'</h5><br>';
	?>
	<!--table table-striped table-bordered table-condensed-->
	<div id="context">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Dirección'); ?></th>
		<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
		<th><?php echo $this->Paginator->sort('E-Mail'); ?></th>
		
	</tr>
	</thead>
	<?php foreach ($proveedors as $proveedor): ?>
	<tr>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['NOMBRE_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['DIRECCION_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['TELEFONO_CONTACTO_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($proveedor['Proveedor']['EMAIL_PROVEEDOR']), array('action' => 'view', $proveedor['Proveedor']['PROVEEDOR_ID']));?>&nbsp;</td>
	</tr>
	<?php endforeach; ?>
	</table>
	</div>
</div>


