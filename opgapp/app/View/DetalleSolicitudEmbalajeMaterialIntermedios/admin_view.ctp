<div class="detalleSolicitudEmbalajeMaterialIntermedios view">
<h2><?php  echo __('Detalle Solicitud Embalaje Material Intermedio'); ?></h2>
	<dl>
		<dt><?php echo __('Solicitud Embalaje Id'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['solicitud_embalaje_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Intermedio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleSolicitudEmbalajeMaterialIntermedio['MaterialIntermedio']['material_intermedio_id'], array('controller' => 'material_intermedios', 'action' => 'view', $detalleSolicitudEmbalajeMaterialIntermedio['MaterialIntermedio']['material_intermedio_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Material Intermedio Detalle Solicitud Embalaje'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['cantidad_material_intermedio_detalle_solicitud_embalaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['solicitud_embalaje_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['solicitud_embalaje_id']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['solicitud_embalaje_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Intermedios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('controller' => 'material_intermedios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('controller' => 'material_intermedios', 'action' => 'add')); ?> </li>
	</ul>
</div>
