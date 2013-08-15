<div class="detalleCajaMaterialIndividuals view">
<h2><?php  echo __('Detalle Caja Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('CAJA MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANTIDAD DETALLE CAJA MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['CANTIDAD_DETALLE_CAJA_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Caja Material Individual'), array('action' => 'edit', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Caja Material Individual'), array('action' => 'delete', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID']), null, __('Are you sure you want to delete # %s?', $detalleCajaMaterialIndividual['DetalleCajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Caja Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Caja Material Individual'), array('action' => 'add')); ?> </li>
	</ul>
</div>
