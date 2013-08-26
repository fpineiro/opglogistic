<div class="despachoCamions view">
<h2><?php  echo __('Despacho Camion'); ?></h2>
	<dl>
		<dt><?php echo __('DESPACHO CAMION ID'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['DESPACHO_CAMION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DESPACHO CAMION'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['FECHA_DESPACHO_CAMION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID CAMION'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['ID_CAMION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RUT CAMIONERO'); ?></dt>
		<dd>
			<?php echo h($despachoCamion['DespachoCamion']['RUT_CAMIONERO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Despacho Camion'), array('action' => 'edit', $despachoCamion['DespachoCamion']['DESPACHO_CAMION_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Despacho Camion'), array('action' => 'delete', $despachoCamion['DespachoCamion']['DESPACHO_CAMION_ID']), null, __('Are you sure you want to delete # %s?', $despachoCamion['DespachoCamion']['DESPACHO_CAMION_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Despacho Camions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despacho Camion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
