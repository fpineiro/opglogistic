<div class="guiaDespachoSalidas view">
<h2><?php  echo __('Guia Despacho Salida'); ?></h2>
	<dl>
		<dt><?php echo __('Guia Despacho Salida Id'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orden Despacho'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guiaDespachoSalida['OrdenDespacho']['orden_despacho_id'], array('controller' => 'orden_despachos', 'action' => 'view', $guiaDespachoSalida['OrdenDespacho']['orden_despacho_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Despacho Id'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['despacho_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Detalle Guia Despacho Salida'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['fecha_detalle_guia_despacho_salida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guia Despacho Salida'), array('action' => 'edit', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guia Despacho Salida'), array('action' => 'delete', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id']), null, __('Are you sure you want to delete # %s?', $guiaDespachoSalida['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Salida'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('controller' => 'orden_despachos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('controller' => 'orden_despachos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('controller' => 'despacho_camions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despacho'), array('controller' => 'despacho_camions', 'action' => 'add')); ?> </li>
	</ul>
</div>
