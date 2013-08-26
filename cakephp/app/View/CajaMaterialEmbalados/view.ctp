<div class="cajaMaterialEmbalados view">
<h2><?php  echo __('Caja Material Embalado'); ?></h2>
	<dl>
		<dt><?php echo __('CAJA MATERIAL EMBALADO ID'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('POSICION ID'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['POSICION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE CAJA MATERIAL EMBALADO'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['NOMBRE_CAJA_MATERIAL_EMBALADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAPACIDAD CAJA MATERIAL EMBALADO'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['CAPACIDAD_CAJA_MATERIAL_EMBALADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ALTO CAJA MATERIAL EMBALADO'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['ALTO_CAJA_MATERIAL_EMBALADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LARGO CAJA MATERIAL EMBALADO'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['LARGO_CAJA_MATERIAL_EMBALADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ANCHO CAJA MATERIAL EMBALADO'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialEmbalado['CajaMaterialEmbalado']['ANCHO_CAJA_MATERIAL_EMBALADO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caja Material Embalado'), array('action' => 'edit', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caja Material Embalado'), array('action' => 'delete', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']), null, __('Are you sure you want to delete # %s?', $cajaMaterialEmbalado['CajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Embalados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Embalado'), array('action' => 'add')); ?> </li>
	</ul>
</div>
