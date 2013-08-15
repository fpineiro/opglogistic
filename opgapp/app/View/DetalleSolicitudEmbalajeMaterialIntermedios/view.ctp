<div class="detalleSolicitudEmbalajeMaterialIntermedios view">
<h2><?php  echo __('Detalle Solicitud Embalaje Material Intermedio'); ?></h2>
	<dl>
		<dt><?php echo __('SOLICITUD EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD MATERIAL INTERMEDIO DETALLE SOLICITUD EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialIntermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Intermedios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Intermedio'), array('action' => 'add')); ?> </li>
	</ul>
</div>
