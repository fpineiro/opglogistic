<div class="detalleCajaMaterialDeEmbalajes view">
<h2><?php  echo __('Detalle Caja Material De Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('Caja Material De Embalaje Id'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleCajaMaterialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleCajaMaterialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['cantidad_detalle_caja_material_de_embalaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Caja Material De Embalaje'), array('action' => 'edit', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Caja Material De Embalaje'), array('action' => 'delete', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material De Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Caja Material De Embalaje'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
