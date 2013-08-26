<div class="cajaMaterialDeEmbalajes view">
<h2><?php  echo __('Caja Material De Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('CAJA MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('POSICION ID'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['POSICION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE CAJA MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['NOMBRE_CAJA_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAPACIDAD CAJA MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['CAPACIDAD_CAJA_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ALTO CAJA MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['ALTO_CAJA_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LARGO CAJA MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['LARGO_CAJA_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ANCHO CAJA MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['ANCHO_CAJA_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caja Material De Embalaje'), array('action' => 'edit', $cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caja Material De Embalaje'), array('action' => 'delete', $cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['CAJA_MATERIAL_DE_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('action' => 'add')); ?> </li>
	</ul>
</div>
