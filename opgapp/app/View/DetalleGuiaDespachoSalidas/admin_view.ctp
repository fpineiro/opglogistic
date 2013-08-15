<div class="detalleGuiaDespachoSalidas view">
<h2><?php  echo __('Detalle Guia Despacho Salida'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Salida Id'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Intermedio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleGuiaDespachoSalida['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleGuiaDespachoSalida['MaterialIntermedio']['material_intermedio_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Guia Despacho Salida'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['cantidad_detalle_guia_despacho_salida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Salida'), array('action' => 'edit', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Salida'), array('action' => 'delete', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['guia_despacho_salida_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Salidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Salida'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
