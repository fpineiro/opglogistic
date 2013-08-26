<div class="detalleCajaMaterialEmbalados view">
<h2><?php  echo __('Detalle Caja Material Embalado'); ?></h2>
	<dl>
		<dt><?php echo __('CAJA MATERIAL EMBALADO ID'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE CAJA MATERIAL EMBALADO'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CANTIDAD_DETALLE_CAJA_MATERIAL_EMBALADO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Caja Material Embalado'), array('action' => 'edit', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Caja Material Embalado'), array('action' => 'delete', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialEmbalado['DetalleCajaMaterialEmbalado']['CAJA_MATERIAL_EMBALADO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material Embalados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Caja Material Embalado'), array('action' => 'add')); ?> </li>
	</ul>
</div>
