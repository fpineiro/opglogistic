<div class="detalleSolicitudEmbalajeMaterialIndividuals view">
<h2><?php  echo __('Detalle Solicitud Embalaje Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('SOLICITUD EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['SOLICITUD_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE SOLICITUD EMBALAJE MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Solicitud Embalaje Material Individual'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Solicitud Embalaje Material Individual'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['SOLICITUD_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Individual'), array('action' => 'add')); ?> </li>
	</ul>
</div>
