<div class="detalleSolicitudEmbalajeMaterialEmbalajes view">
<h2><?php  echo __('Detalle Solicitud Embalaje Material Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('Solicitud Embalaje Id'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['solicitud_embalaje_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleSolicitudEmbalajeMaterialEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleSolicitudEmbalajeMaterialEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Solicitud Embalaje Material Embalaje'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['cantidad_detalle_solicitud_embalaje_material_embalaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Solicitud Embalaje Material Embalaje'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['solicitud_embalaje_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Solicitud Embalaje Material Embalaje'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['solicitud_embalaje_id']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['solicitud_embalaje_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Embalaje'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
