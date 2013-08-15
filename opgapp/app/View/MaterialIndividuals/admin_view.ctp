<div class="materialIndividuals view">
<h2><?php  echo __('Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('Material Individual Id'); ?></dt>
		<dd>
			<?php echo h($materialIndividual['MaterialIndividual']['material_individual_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Material Individual'); ?></dt>
		<dd>
			<?php echo h($materialIndividual['MaterialIndividual']['nombre_material_individual']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material Individual'), array('action' => 'edit', $materialIndividual['MaterialIndividual']['material_individual_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material Individual'), array('action' => 'delete', $materialIndividual['MaterialIndividual']['material_individual_id']), null, __('Are you sure you want to delete # %s?', $materialIndividual['MaterialIndividual']['material_individual_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('action' => 'add')); ?> </li>
	</ul>
</div>
