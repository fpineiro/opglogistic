<div class="bodegas view">
<fieldset>
<legend><h3><?php  echo __('Detalle bodega'); ?></h3></legend>
	<dl class="dl-horizontal">
		<dt><?php echo __('Identificador bodega'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['BODEGA_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jefe de bodega'); ?></dt>
		<dd>
			<?php echo h($bodega['User']['NAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente asociado'); ?></dt>
		<dd>
			<?php echo h($bodega['Cliente']['NOMBRE_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Bodega'); ?></dt>
		<dd>
			<?php echo h($bodega['Bodega']['CATEGORIA_BODEGA']); ?>
			&nbsp;
		</dd>
	</dl>
	</fieldset>
</div>

		<div style="float: left"><?php echo $this->Html->link(__('Editar bodega'), array('action' => 'edit', $bodega['Bodega']['BODEGA_ID']), array('class' => 'btn btn-primary')); ?>&nbsp;</div>

		<div style="float: left"><?php echo $this->Form->postLink(('Eliminar bodega'), array('action' => 'delete', $bodega['Bodega']['BODEGA_ID']	, null, ('Are you sure you want to delete # %s?'), $bodega['Bodega']['BODEGA_ID']), array('class' => 'btn btn-danger')); ?> </div>
