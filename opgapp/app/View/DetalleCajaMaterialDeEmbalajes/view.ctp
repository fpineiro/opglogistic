<div class="detalleCajaMaterialDeEmbalajes view">
<h2><?php  echo __('Detalle Caja Material De Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('CAJA MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE CAJA MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['CANTIDAD_DETALLE_CAJA_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Caja Material De Embalaje'), array('action' => 'edit', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Caja Material De Embalaje'), array('action' => 'delete', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialDeEmbalaje['DetalleCajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material De Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Caja Material De Embalaje'), array('action' => 'add')); ?> </li>
	</ul>
</div>
