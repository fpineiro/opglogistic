<div class="detalleGuiaDespachoSalidas view">
<h2><?php  echo __('Detalle Guia Despacho Salida'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO SALIDA ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE GUIA DESPACHO SALIDA'); ?></dt>
		<dd>
			<?php echo h($detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['CANTIDAD_DETALLE_GUIA_DESPACHO_SALIDA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Guia Despacho Salida'), array('action' => 'edit', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Guia Despacho Salida'), array('action' => 'delete', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoSalida['DetalleGuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Guia Despacho Salidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Salida'), array('action' => 'add')); ?> </li>
	</ul>
</div>
