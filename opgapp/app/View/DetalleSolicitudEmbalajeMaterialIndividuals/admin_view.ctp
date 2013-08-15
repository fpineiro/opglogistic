<div class="detalleSolicitudEmbalajeMaterialIndividuals view">
<h2><?php  echo __('Detalle Solicitud Embalaje Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('Solicitud Embalaje Id'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['solicitud_embalaje_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Individual'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleSolicitudEmbalajeMaterialIndividual['MaterialIndividual']['material_individual_id'], array('controller' => 'material_individuals', 'action' => 'view', $detalleSolicitudEmbalajeMaterialIndividual['MaterialIndividual']['material_individual_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Detalle Solicitud Embalaje Material Individual'); ?></dt>
		<dd>
			<?php echo h($detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['cantidad_detalle_solicitud_embalaje_material_individual']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Solicitud Embalaje Material Individual'), array('action' => 'edit', $detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['solicitud_embalaje_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Solicitud Embalaje Material Individual'), array('action' => 'delete', $detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['solicitud_embalaje_id']), null, __('Are you sure you want to delete # %s?', $detalleSolicitudEmbalajeMaterialIndividual['DetalleSolicitudEmbalajeMaterialIndividual']['solicitud_embalaje_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Solicitud Embalaje Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Solicitud Embalaje Material Individual'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('controller' => 'material_individuals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('controller' => 'material_individuals', 'action' => 'add')); ?> </li>
	</ul>
</div>
