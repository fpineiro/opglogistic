<div class="detalleOrdenDespachos view">
<h2><?php  echo __('Detalle Orden Despacho'); ?></h2>
	<dl>
		<dt><?php echo __('ORDEN DESPACHO ID'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE ORDEN DESPACHO'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenDespacho['DetalleOrdenDespacho']['CANTIDAD_DETALLE_ORDEN_DESPACHO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Orden Despacho'), array('action' => 'edit', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Orden Despacho'), array('action' => 'delete', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID']), null, __('Are you sure you want to delete # %s?', $detalleOrdenDespacho['DetalleOrdenDespacho']['ORDEN_DESPACHO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Despachos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Orden Despacho'), array('action' => 'add')); ?> </li>
	</ul>
</div>
