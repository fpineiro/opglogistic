<div class="posicions view">
<h2><?php  echo __('Posicion'); ?></h2>
	<dl>
		<dt><?php echo __('Posicion Id'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['posicion_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pos Posicion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($posicion['PosPosicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $posicion['PosPosicion']['posicion_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bodega'); ?></dt>
		<dd>
			<?php echo $this->Html->link($posicion['Bodega']['bodega_id'], array('controller' => 'bodegas', 'action' => 'view', $posicion['Bodega']['bodega_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Posicion'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['nombre_posicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alto Posicion'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['alto_posicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Largo Posicion'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['largo_posicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancho Posicion'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['ancho_posicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Posicion'), array('action' => 'edit', $posicion['Posicion']['posicion_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Posicion'), array('action' => 'delete', $posicion['Posicion']['posicion_id']), null, __('Are you sure you want to delete # %s?', $posicion['Posicion']['posicion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pos Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('controller' => 'bodegas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('controller' => 'bodegas', 'action' => 'add')); ?> </li>
	</ul>
</div>
