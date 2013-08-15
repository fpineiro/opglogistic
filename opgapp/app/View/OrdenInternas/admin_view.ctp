<div class="ordenInternas view">
<h2><?php  echo __('Orden Interna'); ?></h2>
	<dl>
		<dt><?php echo __('Orden Interna Id'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['orden_interna_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bodega'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenInterna['Bodega']['bodega_id'], array('controller' => 'bodegas', 'action' => 'view', $ordenInterna['Bodega']['bodega_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Automata'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenInterna['EstadoAutomata']['estado_automata_id'], array('controller' => 'estado_automatas', 'action' => 'view', $ordenInterna['EstadoAutomata']['estado_automata_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orden Despacho'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenInterna['OrdenDespacho']['orden_despacho_id'], array('controller' => 'orden_despachos', 'action' => 'view', $ordenInterna['OrdenDespacho']['orden_despacho_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Detalle Orden Interna'); ?></dt>
		<dd>
			<?php echo h($ordenInterna['OrdenInterna']['fecha_detalle_orden_interna']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Interna'), array('action' => 'edit', $ordenInterna['OrdenInterna']['orden_interna_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Interna'), array('action' => 'delete', $ordenInterna['OrdenInterna']['orden_interna_id']), null, __('Are you sure you want to delete # %s?', $ordenInterna['OrdenInterna']['orden_interna_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Internas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Interna'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('controller' => 'bodegas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('controller' => 'bodegas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Automatas'), array('controller' => 'estado_automatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Automata'), array('controller' => 'estado_automatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Despachos'), array('controller' => 'orden_despachos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Despacho'), array('controller' => 'orden_despachos', 'action' => 'add')); ?> </li>
	</ul>
</div>
