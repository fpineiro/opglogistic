<div class="cajaMaterialIndividuals view">
<h2><?php  echo __('Caja Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('Caja Material Individual Id'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posicion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cajaMaterialIndividual['Posicion']['posicion_id'], array('controller' => 'posicions', 'action' => 'view', $cajaMaterialIndividual['Posicion']['posicion_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Caja Material Individual'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['nombre_caja_material_individual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidad Caja Material Individual'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['capacidad_caja_material_individual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alto Caja Material Individual'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['alto_caja_material_individual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Largo Caja Material Individual'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['largo_caja_material_individual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancho Caja Material Individual'); ?></dt>
		<dd>
			<?php echo h($cajaMaterialIndividual['CajaMaterialIndividual']['ancho_caja_material_individual']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caja Material Individual'), array('action' => 'edit', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caja Material Individual'), array('action' => 'delete', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id']), null, __('Are you sure you want to delete # %s?', $cajaMaterialIndividual['CajaMaterialIndividual']['caja_material_individual_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caja Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material Individual'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posicions'), array('controller' => 'posicions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posicion'), array('controller' => 'posicions', 'action' => 'add')); ?> </li>
	</ul>
</div>
