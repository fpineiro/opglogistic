<div class="cajaMaterialIndividuals view">
<h2><?php  echo __('Caja Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('CAJA MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('POSICION ID'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['POSICION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE CAJA MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['NOMBRE_CAJA_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CAPACIDAD CAJA MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['CAPACIDAD_CAJA_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ALTO CAJA MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['ALTO_CAJA_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LARGO CAJA MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['LARGO_CAJA_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ANCHO CAJA MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['ANCHO_CAJA_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caja Material Individual'), array('action' => 'edit', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caja Material Individual'), array('action' => 'delete', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID']), null, __('Are you sure you want to delete # %s?', $cajaMaterialIndividual['CajaMaterialIndividual']['CAJA_MATERIAL_INDIVIDUAL_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Individual'), array('action' => 'add')); ?> </li>
	</ul>
</div>
