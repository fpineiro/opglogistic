<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BODEGA ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['BODEGA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('USERNAME'); ?></dt>
		<dd>
			<?php echo h($user['User']['USERNAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PASSWORD'); ?></dt>
		<dd>
			<?php echo h($user['User']['PASSWORD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NAME'); ?></dt>
		<dd>
			<?php echo h($user['User']['NAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LASTNAME'); ?></dt>
		<dd>
			<?php echo h($user['User']['LASTNAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MAIL'); ?></dt>
		<dd>
			<?php echo h($user['User']['MAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ROLE'); ?></dt>
		<dd>
			<?php echo h($user['User']['ROLE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CREATED'); ?></dt>
		<dd>
			<?php echo h($user['User']['CREATED']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MODIFIED'); ?></dt>
		<dd>
			<?php echo h($user['User']['MODIFIED']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['ID']), null, __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
