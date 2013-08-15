<div class="bodegas view">
<h2><?php  echo __('Bodega'); ?></h2>
	<dl>
		<dt><?php echo __('Bodega Id'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['bodega_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Bodega'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['categoria_bodega']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bodega'), array('action' => 'edit', $bodega['Bodega']['bodega_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bodega'), array('action' => 'delete', $bodega['Bodega']['bodega_id']), null, __('Are you sure you want to delete # %s?', $bodega['Bodega']['bodega_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('action' => 'add')); ?> </li>
	</ul>
</div>
