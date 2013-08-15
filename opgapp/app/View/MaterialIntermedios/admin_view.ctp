<div class="materialIntermedios view">
<h2><?php  echo __('Material Intermedio'); ?></h2>
	<dl>
		<dt><?php echo __('Material Intermedio Id'); ?></dt>
		<dd>
			<?php echo h($materialIntermedio['MaterialIntermedio']['material_intermedio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Material Intermedio'); ?></dt>
		<dd>
			<?php echo h($materialIntermedio['MaterialIntermedio']['nombre_material_intermedio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material Intermedio'), array('action' => 'edit', $materialIntermedio['MaterialIntermedio']['material_intermedio_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material Intermedio'), array('action' => 'delete', $materialIntermedio['MaterialIntermedio']['material_intermedio_id']), null, __('Are you sure you want to delete # %s?', $materialIntermedio['MaterialIntermedio']['material_intermedio_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('action' => 'add')); ?> </li>
	</ul>
</div>
