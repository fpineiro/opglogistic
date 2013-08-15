<div class="detalleOrdenDespachos view">
<h2><?php  echo __('Detalle Orden Despacho'); ?></h2>
	<dl>
		<dt><?php echo __('Orden Despacho Id'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Intermedio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleOrdenDespacho['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleOrdenDespacho['MaterialIntermedio']['material_intermedio_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Orden Despacho'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['cantidad_detalle_orden_despacho']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Orden Despacho'), array('action' => 'edit', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Orden Despacho'), array('action' => 'delete', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id']), null, __('Are you sure you want to delete # %s?', $detalleOrdenDespacho['DetalleOrdenDespacho']['orden_despacho_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Despachos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Orden Despacho'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
