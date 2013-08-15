<div class="bodegas view">
<h2><?php  echo __('Bodega'); ?></h2>
	<dl>
		<dt><?php echo __('BODEGA ID'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['BODEGA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CATEGORIA BODEGA'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['CATEGORIA_BODEGA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bodega'), array('action' => 'edit', $bodega['Bodega']['BODEGA_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bodega'), array('action' => 'delete', $bodega['Bodega']['BODEGA_ID']), null, __('Are you sure you want to delete # %s?', $bodega['Bodega']['BODEGA_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodegas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bodega'), array('action' => 'add')); ?> </li>
	</ul>
</div>
