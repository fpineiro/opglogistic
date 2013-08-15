<div class="ordenDespachos view">
<h2><?php  echo __('Orden Despacho'); ?></h2>
	<dl>
		<dt><?php echo __('Orden Despacho Id'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['orden_despacho_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guia Despacho Salida'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenDespacho['GuiaDespachoSalida']['guia_despacho_salida_id'], array('controller' => 'guia_despacho_salidas', 'action' => 'view', $ordenDespacho['GuiaDespachoSalida']['guia_despacho_salida_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Automata'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenDespacho['EstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $ordenDespacho['EstadoAutomata']['estado_automata_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenDespacho['Cliente']['cliente_id'], array('controller' => 'clientes', 'action' => 'view', $ordenDespacho['Cliente']['cliente_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Detalle Solicitud Despacho'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['fecha_detalle_solicitud_despacho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destino Detalle Solicitud Despacho'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['destino_detalle_solicitud_despacho']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Despacho'), array('action' => 'edit', $ordenDespacho['OrdenDespacho']['orden_despacho_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Despacho'), array('action' => 'delete', $ordenDespacho['OrdenDespacho']['orden_despacho_id']), null, __('Are you sure you want to delete # %s?', $ordenDespacho['OrdenDespacho']['orden_despacho_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guia Despacho Salidas'), array('controller' => 'guia_despacho_salidas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guia Despacho Salida'), array('controller' => 'guia_despacho_salidas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
