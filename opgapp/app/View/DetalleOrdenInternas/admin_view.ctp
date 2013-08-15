<div class="detalleOrdenInternas view">
<h2><?php  echo __('Detalle Orden Interna'); ?></h2>
	<dl>
		<dt><?php echo __('Orden Interna Id'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenInterna['DetalleOrdenInterna']['orden_interna_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Intermedio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleOrdenInterna['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleOrdenInterna['MaterialIntermedio']['material_intermedio_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Orden Interna'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenInterna['DetalleOrdenInterna']['cantidad_detalle_orden_interna']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Orden Interna'), array('action' => 'edit', $detalleOrdenInterna['DetalleOrdenInterna']['orden_interna_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Orden Interna'), array('action' => 'delete', $detalleOrdenInterna['DetalleOrdenInterna']['orden_interna_id']), null, __('Are you sure you want to delete # %s?', $detalleOrdenInterna['DetalleOrdenInterna']['orden_interna_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Internas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Orden Interna'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
