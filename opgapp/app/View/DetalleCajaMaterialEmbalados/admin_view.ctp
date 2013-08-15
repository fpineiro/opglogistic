<div class="detalleCajaMaterialEmbalados view">
<h2><?php  echo __('Detalle Caja Material Embalado'); ?></h2>
	<dl>
		<dt><?php echo __('Caja Material Embalado Id'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['caja_material_embalado_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Intermedio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleCajaMaterialEmbalado['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleCajaMaterialEmbalado['MaterialIntermedio']['material_intermedio_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Caja Material Embalado'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['cantidad_detalle_caja_material_embalado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Caja Material Embalado'), array('action' => 'edit', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['caja_material_embalado_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Caja Material Embalado'), array('action' => 'delete', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['caja_material_embalado_id']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['caja_material_embalado_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material Embalados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Caja Material Embalado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
