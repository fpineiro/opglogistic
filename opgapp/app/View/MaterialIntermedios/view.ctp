<div class="materialIntermedios view">
<h2><?php  echo __('Material Intermedio'); ?></h2>
	<dl>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($materialIntermedio['MaterialIntermedio']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE MATERIAL INTERMEDIO'); ?></dt>
		<dd>
			<?php echo h($materialIntermedio['MaterialIntermedio']['NOMBRE_MATERIAL_INTERMEDIO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material Intermedio'), array('action' => 'edit', $materialIntermedio['MaterialIntermedio']['MATERIAL_INTERMEDIO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material Intermedio'), array('action' => 'delete', $materialIntermedio['MaterialIntermedio']['MATERIAL_INTERMEDIO_ID']), null, __('Are you sure you want to delete # %s?', $materialIntermedio['MaterialIntermedio']['MATERIAL_INTERMEDIO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Material Intermedios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material Intermedio'), array('action' => 'add')); ?> </li>
	</ul>
</div>
