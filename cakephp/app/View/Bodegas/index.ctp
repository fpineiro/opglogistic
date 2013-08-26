<div class="bodegas index">
<?php 

	echo $this->Html->script('funciones');
	echo '<legend><h3>Lista de bodegas</h3></legend>';
	echo '<table border="0" class="tablaNav"><tr><td>';
	echo '</tr></table>';
	echo $this->Html->link('Ingresar bodega', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=> 'float:right')).'</tr></table>';

	
	echo '<h5>'."Seleccione una bodega para ver su detalle".'</h5><br>';
	?>

	
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<thead>
			<th><?php echo $this->Paginator->sort('NAME','Jefe de Bodega'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_CLIENTE', 'Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORIA_BODEGA', 'Catergoría de la bodega'); ?></th>
			</thead>	
	</tr>
	<?php foreach ($bodegas as $bodega): ?>
	<tr>
		</tbody>	
		<td><?php echo $this->Html->link($bodega['User']['NAME'], array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?></td>
		<td><?php echo $this->Html->link($bodega['Cliente']['NOMBRE_CLIENTE'], array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?></td>
		<td><?php echo $this->Html->link($bodega['Bodega']['CATEGORIA_BODEGA'], array('action' => 'view', $bodega['Bodega']['BODEGA_ID'])); ?></td>
		</tbody>
	</tr>
<?php endforeach; ?>
	</table>

