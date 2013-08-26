<div class="materialIndividuals view">
<fieldset><legend><h3><?php  echo ('Material individual'); ?></h3></legend></legend>
	<dl class="dl-horizontal">
		<dt><?php echo __('Identificador material'); ?></dt>
		<dd > 
			<?php echo h($materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre material'); ?></dt>
		<dd>
			<?php echo h($materialIndividual['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL']); ?>
			&nbsp;
		</dd>
	</dl>
	</fieldset>
</div>
	<?php echo $this->Html->link(
    'Volver',
    array('controller' => 'materialindividuals', 'action' => 'index', 'full_base' => true), array('class' => 'btn btn-primary')
); ?>
