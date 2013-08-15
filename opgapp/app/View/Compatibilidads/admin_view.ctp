<div class="compatibilidads view">
<h2><?php  echo __('Compatibilidad'); ?></h2>
	<dl>
		<dt><?php echo __('Material Intermedio Id'); ?></dt>
		<dd>
			<?php echo h($compatibilidad['Compatibilidad']['material_intermedio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material De Embalaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($compatibilidad['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $compatibilidad['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Compatibilidad'), array('action' => 'edit', $compatibilidad['Compatibilidad']['material_intermedio_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Compatibilidad'), array('action' => 'delete', $compatibilidad['Compatibilidad']['material_intermedio_id']), null, __('Are you sure you want to delete # %s?', $compatibilidad['Compatibilidad']['material_intermedio_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Compatibilidads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compatibilidad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
