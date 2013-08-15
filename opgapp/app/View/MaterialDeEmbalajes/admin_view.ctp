<div class="materialDeEmbalajes view">
<h2><?php  echo __('Material De Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('Material De Embalaje Id'); ?></dt>
		<dd>
			<?php echo h($materialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Material De Embalaje'); ?></dt>
		<dd>
			<?php echo h($materialDeEmbalaje['MaterialDeEmbalaje']['nombre_material_de_embalaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material De Embalaje'), array('action' => 'edit', $materialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material De Embalaje'), array('action' => 'delete', $materialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id']), null, __('Are you sure you want to delete # %s?', $materialDeEmbalaje['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('action' => 'add')); ?> </li>
	</ul>
</div>
