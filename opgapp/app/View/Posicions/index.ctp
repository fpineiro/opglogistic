<?php
	if(isset($alerta)){
		if(strcmp($alerta, "agregar")==0){
			echo '
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					La posición se ha agregado exitosamente.
				</div>';
		}else if(strcmp($alerta, "editar")==0){
			echo '
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					La posición se ha editado exitosamente.
				</div>';
		}else if(strcmp($alerta, "eliminar")==0){
			echo '
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					La posición se ha eliminado exitosamente.
				</div>';
		}
	}
?>
<div class="posicions index">
	<h2><?php echo __('Posiciones'); ?></h2>
	<p>Lista de posiciones. Presione en algun elemento de una posición para ver su detalle</p>
	<table class="table table-bordered table-condensed table-hover table-striped">
		<thead>
			<tr>
				<th><p class="text-center"><?php echo $this->Paginator->sort('POSICION_ID', 'Identificador'); ?></p></th>
				<th><p class="text-center"><?php echo $this->Paginator->sort('POS_POSICION_ID', '¿Es sub-posición?'); ?></p></th>
				<th><p class="text-center"><?php echo $this->Paginator->sort('BODEGA_ID', 'Bodega asociada'); ?></p></th>
				<th><p class="text-center"><?php echo $this->Paginator->sort('NOMBRE_POSICION', 'Nombre Posición'); ?></p></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($posicions as $posicion): ?>
				<?php
					if($posicion['Posicion']['POS_POSICION_ID']==null) $auxiliar="No";
					else $auxiliar="Si";
				?>
				<tr>
					<td><p class="text-center"><?php echo $this->Html->link($posicion['Posicion']['POSICION_ID'], array('action' => 'view', $posicion['Posicion']['POSICION_ID'])); ?>&nbsp;</p></td>
					<td><p class="text-center"><?php echo $this->Html->link($auxiliar, array('action' => 'view', $posicion['Posicion']['POSICION_ID']))
					?>&nbsp;</p></td>
					<td><p class="text-center"><?php echo $this->Html->link($posicion['Bodega']['CATEGORIA_BODEGA'], array('action' => 'view', $posicion['Posicion']['POSICION_ID'])); ?>&nbsp;</p></td>
					<td><p class="text-center"><?php echo $this->Html->link($posicion['Posicion']['NOMBRE_POSICION'], array('action' => 'view', $posicion['Posicion']['POSICION_ID'])); ?>&nbsp;</p></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="actions span2 offset10">
		<?php echo $this->Html->link('Agregar Posicion', array('action' => 'add'), array('class' =>'btn')); ?>
</div>