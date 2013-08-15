<div class="despachoCamions view">
<h2><?php  echo __('Despacho Camion'); ?></h2>
	<dl>
		<dt><?php echo __('Despacho Camion Id'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['despacho_camion_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Despacho Camion'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['fecha_despacho_camion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Camion'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['id_camion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut Camionero'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['rut_camionero']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Despacho Camion'), array('action' => 'edit', $despachoCamion['DespachoCamion']['despacho_camion_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Despacho Camion'), array('action' => 'delete', $despachoCamion['DespachoCamion']['despacho_camion_id']), null, __('Are you sure you want to delete # %s?', $despachoCamion['DespachoCamion']['despacho_camion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despacho Camion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
