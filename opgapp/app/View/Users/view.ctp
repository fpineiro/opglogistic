<div class="users form">
<fieldset>
	<legend><h3><?php  echo __('Detalle de usuario'); ?></h3></legend>
	<dl class="dl-horizontal">
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bodega'); ?></dt>
		<dd>
			<?php echo h($user['User']['BODEGA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo h($user['User']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($user['User']['USERNAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['NAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($user['User']['LASTNAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-Mail'); ?></dt>
		<dd>
			<?php echo h($user['User']['MAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo h($user['User']['ROLE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($user['User']['CREATED']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($user['User']['MODIFIED']); ?>
			&nbsp;
		</dd>
	</dl>
	
	</fieldset>
</div>
<div class="actions">		
		<div style="float: left"><?php echo $this->Html->link(__('Editar usuario'), array('action' => 'edit', $user['User']['ID']), array('class' => 'btn btn-primary')); ?>&nbsp;</div>		
		<div style="float: left"><?php echo $this->Form->postLink(('Eliminar usuario'), array('action' => 'delete', $user['User']['ID'], null, ('Está seguro de eliminar usuario# %s?'), $user['User']['ID']), array('class' => 'btn btn-danger')); ?></div>
</div>
