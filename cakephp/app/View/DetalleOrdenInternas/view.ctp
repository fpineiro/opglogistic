<div class="detalleOrdenInternas view">
<h2><?php  echo __('Detalle Orden Interna'); ?></h2>
	<dl>
		<dt><?php echo __('ORDEN INTERNA ID'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenInterna['DetalleOrdenInterna']['ORDEN_INTERNA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenInterna['DetalleOrdenInterna']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE ORDEN INTERNA'); ?></dt>
		<dd>
			<?php echo h($detalleOrdenInterna['DetalleOrdenInterna']['CANTIDAD_DETALLE_ORDEN_INTERNA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Orden Interna'), array('action' => 'edit', $detalleOrdenInterna['DetalleOrdenInterna']['ORDEN_INTERNA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Orden Interna'), array('action' => 'delete', $detalleOrdenInterna['DetalleOrdenInterna']['ORDEN_INTERNA_ID']), null, __('Are you sure you want to delete # %s?', $detalleOrdenInterna['DetalleOrdenInterna']['ORDEN_INTERNA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Orden Internas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Orden Interna'), array('action' => 'add')); ?> </li>
	</ul>
</div>
