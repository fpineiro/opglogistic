<div class="materialDeEmbalajes view">
<h2><?php  echo __('Material De Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('MATERIAL DE EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE MATERIAL DE EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($materialDeEmbalaje['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material De Embalaje'), array('action' => 'edit', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material De Embalaje'), array('action' => 'delete', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $materialDeEmbalaje['MaterialDeEmbalaje']['MATERIAL_DE_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('action' => 'add')); ?> </li>
	</ul>
</div>
