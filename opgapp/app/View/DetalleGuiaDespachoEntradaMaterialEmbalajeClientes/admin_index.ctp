<div class="detalleGuiaDespachoEntradaMaterialEmbalajeClientes index">
	<h2><?php echo __('Detalle Guia Despacho Entrada Material Embalaje Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('guia_despacho_cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caja_material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_de_embalaje_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_detalle_guia_despacho_entrada_material_embalaje_cliente'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detalleGuiaDespachoEntradaMaterialEmbalajeClientes as $detalleGuiaDespachoEntradaMaterialEmbalajeCliente): ?>
	<tr>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'], array('controller' => 'caja_material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['CajaMaterialDeEmbalaje']['caja_material_de_embalaje_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['MaterialDeEmbalaje']['material_de_embalaje_id'], array('controller' => 'material_de_embalajes', 'action' => 'view', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['MaterialDeEmbalaje']['material_de_embalaje_id'])); ?>
		</td>
		<td><?php echo h($detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['cantidad_detalle_guia_despacho_entrada_material_embalaje_cliente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id']), null, __('Are you sure you want to delete # %s?', $detalleGuiaDespachoEntradaMaterialEmbalajeCliente['DetalleGuiaDespachoEntradaMaterialEmbalajeCliente']['guia_despacho_cliente_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Detalle Guia Despacho Entrada Material Embalaje Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Caja Material De Embalajes'), array('controller' => 'caja_material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caja Material De Embalaje'), array('controller' => 'caja_material_de_embalajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Material De Embalajes'), array('controller' => 'material_de_embalajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material De Embalaje'), array('controller' => 'material_de_embalajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
