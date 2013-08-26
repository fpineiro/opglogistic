<div class="detalleSolicitudEmbalajeMaterialEmbalajes view">
<h2><?php  echo __('Detalle Solicitud Embalaje Material Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('SOLICITUD EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['SOLICITUD_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE SOLICITUD EMBALAJE MATERIAL EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_EMBALAJE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Solicitud Embalaje Material Embalaje'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Solicitud Embalaje Material Embalaje'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['SOLICITUD_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialEmbalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Embalaje'), array('action' => 'add')); ?> </li>
	</ul>
</div>
