<div class="compatibilidads view">
<h2><?php  echo __('Compatibilidad'); ?></h2>
	<dl>
		<dt><?php echo __('MATERIAL INTERMEDIO ID'); ?></dt>
		<dd>
			<?php echo h($compatibilidad['Compatibilidad']['MATERIAL_INTERMEDIO_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($compatibilidad['Compatibilidad']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Compatibilidad'), array('action' => 'edit', $compatibilidad['Compatibilidad']['MATERIAL_INTERMEDIO_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Compatibilidad'), array('action' => 'delete', $compatibilidad['Compatibilidad']['MATERIAL_INTERMEDIO_ID']), null, __('Are you sure you want to delete # %s?', $compatibilidad['Compatibilidad']['MATERIAL_INTERMEDIO_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Compatibilidads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compatibilidad'), array('action' => 'add')); ?> </li>
	</ul>
</div>
