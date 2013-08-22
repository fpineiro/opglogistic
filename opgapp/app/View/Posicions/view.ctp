<div class="posicions view">
	<h2><?php  echo __('Informacion Detallada de la Posicion'); ?></h2>
	<br />
	<table class="table table-bordered table-condensed table-hover table-striped">
		<thead>
			<th><p class="text-center"><?php echo __('Identificador'); ?></p></th>
			<th><p class="text-center"><?php echo __('Nombre'); ?></p></th>
			<th><p class="text-center"><?php echo __('¿Es sub-posición?'); ?></p></th>
			<th><p class="text-center"><?php echo __('Bodega asociada');?></p></th>
			<th><p class="text-center"><?php echo __('Alto'); ?></p></th>
			<th><p class="text-center"><?php echo __('Largo'); ?></p></th>
			<th><p class="text-center"><?php echo __('Ancho'); ?></p></th>
		</thead>
		<tbody>
			<?php
				if($posicion['Posicion']['POS_POSICION_ID']==null) $auxiliar="No";
				else $auxiliar="Si";
			?>
			<td><p class="text-center"><?php echo h($posicion['Posicion']['POSICION_ID']); ?></p></td>
			<td><p class="text-center"><?php echo h($posicion['Posicion']['NOMBRE_POSICION']); ?></p></td>
			<td><p class="text-center"><?php echo h($auxiliar); ?></p></td>
			<td><p class="text-center"><?php echo h($posicion['Bodega']['CATEGORIA_BODEGA']); ?></p></td>
			<td><p class="text-center"><?php echo h($posicion['Posicion']['ALTO_POSICION']).' [mts]'; ?></p></td>
			<td><p class="text-center"><?php echo h($posicion['Posicion']['LARGO_POSICION']).' [mts]'; ?></p></td>
			<td><p class="text-center"><?php echo h($posicion['Posicion']['ANCHO_POSICION']).' [mts]'; ?></p></td>
		</tbody>
	</table>
</div>
<div class="actions span4 offset8">
		<?php echo $this->Html->link('Editar Posicion', array('action' => 'edit', $posicion['Posicion']['POSICION_ID']), array('class' => 'btn')); ?>
		<?php echo $this->Form->postLink('Borrar Posicion', array('action' => 'delete', $posicion['Posicion']['POSICION_ID']), array('class' => 'btn btn-danger'), __('¿Esta seguro que desea borrar esta posición?')); ?>
</div>
