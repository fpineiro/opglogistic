<div class="guiaDespachoSalidas view">
<h2><?php  echo __('Guia Despacho Salida'); ?></h2>
	<dl>
		<dt><?php echo __('GUIA DESPACHO SALIDA ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ORDEN DESPACHO ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['ORDEN_DESPACHO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESPACHO CAMION ID'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['DESPACHO_CAMION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DETALLE GUIA DESPACHO SALIDA'); ?></dt>
		<dd>
			<?php echo h($guiaDespachoSalida['GuiaDespachoSalida']['FECHA_DETALLE_GUIA_DESPACHO_SALIDA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guia Despacho Salida'), array('action' => 'edit', $guiaDespachoSalida['GuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guia Despacho Salida'), array('action' => 'delete', $guiaDespachoSalida['GuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID']), null, __('Are you sure you want to delete # %s?', $guiaDespachoSalida['GuiaDespachoSalida']['GUIA_DESPACHO_SALIDA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Salida'), array('action' => 'add')); ?> </li>
	</ul>
</div>
