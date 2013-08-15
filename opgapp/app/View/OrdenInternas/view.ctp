<div class="ordenInternas view">
<h2><?php  echo __('Orden Interna'); ?></h2>
	<dl>
		<dt><?php echo __('ORDEN INTERNA ID'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BODEGA ID'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['BODEGA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESTADO AUTOMATA ID'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['ESTADO_AUTOMATA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ORDEN DESPACHO ID'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['ORDEN_DESPACHO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DETALLE ORDEN INTERNA'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['FECHA_DETALLE_ORDEN_INTERNA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Interna'), array('action' => 'edit', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Interna'), array('action' => 'delete', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID']), null, __('Are you sure you want to delete # %s?', $ordenInterna['OrdenInterna']['ORDEN_INTERNA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Internas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Interna'), array('action' => 'add')); ?> </li>
	</ul>
</div>
