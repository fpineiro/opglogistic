<div class="solicitudEmbalajes view">
<h2><?php  echo __('Solicitud Embalaje'); ?></h2>
	<dl>
		<dt><?php echo __('SOLICITUD EMBALAJE ID'); ?></dt>
		<dd>
			<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESTADO AUTOMATA ID'); ?></dt>
		<dd>
			<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['ESTADO_AUTOMATA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DETALLE SOLICITUD EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['FECHA_DETALLE_SOLICITUD_EMBALAJE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CONTIENE EMBALAJE SOLICITUD EMBALAJE'); ?></dt>
		<dd>
			<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitud Embalaje'), array('action' => 'edit', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitud Embalaje'), array('action' => 'delete', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']), null, __('Are you sure you want to delete # %s?', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Embalajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Embalaje'), array('action' => 'add')); ?> </li>
	</ul>
</div>
