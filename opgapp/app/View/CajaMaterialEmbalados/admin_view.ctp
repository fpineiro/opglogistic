<div class="cajaMaterialEmbalados view">
<h2><?php  echo __('Caja Material Embalado'); ?></h2>
	<dl>
		<dt><?php echo __('Caja Material Embalado Id'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posicion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cajaMaterialEmbalado['Posicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $cajaMaterialEmbalado['Posicion']['posicion_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Caja Material Embalado'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['nombre_caja_material_embalado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidad Caja Material Embalado'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['capacidad_caja_material_embalado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alto Caja Material Embalado'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['alto_caja_material_embalado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Largo Caja Material Embalado'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['largo_caja_material_embalado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancho Caja Material Embalado'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['ancho_caja_material_embalado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caja Material Embalado'), array('action' => 'edit', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caja Material Embalado'), array('action' => 'delete', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id']), null, __('Are you sure you want to delete # %s?', $cajaMaterialEmbalado['CajaMaterialEmbalado']['caja_material_embalado_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Embalados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Embalado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
	</ul>
</div>
