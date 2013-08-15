<div class="posicions view">
<h2><?php  echo __('Posicion'); ?></h2>
	<dl>
		<dt><?php echo __('POSICION ID'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['POSICION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('POS POSICION ID'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['POS_POSICION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BODEGA ID'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['BODEGA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE POSICION'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['NOMBRE_POSICION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ALTO POSICION'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['ALTO_POSICION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LARGO POSICION'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['LARGO_POSICION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ANCHO POSICION'); ?></dt>
		<dd>
			<?php echo h($posicion['Posicion']['ANCHO_POSICION']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Posicion'), array('action' => 'edit', $posicion['Posicion']['POSICION_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Posicion'), array('action' => 'delete', $posicion['Posicion']['POSICION_ID']), null, __('Are you sure you want to delete # %s?', $posicion['Posicion']['POSICION_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
