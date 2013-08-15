<div class="materialIndividuals view">
<h2><?php  echo __('Material Individual'); ?></h2>
	<dl>
		<dt><?php echo __('MATERIAL INDIVIDUAL ID'); ?></dt>
		<dd>
			<?php echo h($materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE MATERIAL INDIVIDUAL'); ?></dt>
		<dd>
			<?php echo h($materialIndividual['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material Individual'), array('action' => 'edit', $materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material Individual'), array('action' => 'delete', $materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']), null, __('Are you sure you want to delete # %s?', $materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Individuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Individual'), array('action' => 'add')); ?> </li>
	</ul>
</div>
