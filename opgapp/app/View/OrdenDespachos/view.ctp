<div class="ordenDespachos view">
<h2><?php  echo __('Orden Despacho'); ?></h2>
	<dl>
		<dt><?php echo __('ORDEN DESPACHO ID'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GUIA DESPACHO SALIDA ID'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['GUIA_DESPACHO_SALIDA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESTADO AUTOMATA ID'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['ESTADO_AUTOMATA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DETALLE SOLICITUD DESPACHO'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['FECHA_DETALLE_SOLICITUD_DESPACHO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESTINO DETALLE SOLICITUD DESPACHO'); ?></dt>
		<dd>
			<?php echo h($ordenDespacho['OrdenDespacho']['DESTINO_DETALLE_SOLICITUD_DESPACHO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Despacho'), array('action' => 'edit', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Despacho'), array('action' => 'delete', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID']), null, __('Are you sure you want to delete # %s?', $ordenDespacho['OrdenDespacho']['ORDEN_DESPACHO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('action' => 'add')); ?> </li>
	</ul>
</div>
