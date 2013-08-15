<div class="cajaMaterialDeEmbalajes view">
<h2><?php  echo __('Caja Material De Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('Caja Material De Embalaje Id'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posicion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cajaMaterialDeEmbalaje['Posicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $cajaMaterialDeEmbalaje['Posicion']['posicion_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['nombre_caja_material_de_embalaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidad Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['capacidad_caja_material_de_embalaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alto Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['alto_caja_material_de_embalaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Largo Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['largo_caja_material_de_embalaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancho Caja Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['ancho_caja_material_de_embalaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caja Material De Embalaje'), array('action' => 'edit', $cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caja Material De Embalaje'), array('action' => 'delete', $cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id']), null, __('Are you sure you want to delete # %s?', $cajaMaterialDeEmbalaje['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
	</ul>
</div>
