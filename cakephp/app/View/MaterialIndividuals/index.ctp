<div class="materialIndividuals index">
<?php 
	echo '<legend><h3>Lista de materiales individuales</h3></legend>';
	echo '<h5>'."Seleccione un material individual para ver su detalle".'</h5><br>';
	?>

	<div id="context">
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<thead>
			<th><?php echo $this->Paginator->sort('NOMBRE_MATERIAL_INDIVIDUAL','Nombre del material individual'); ?></th>
		</thead>	
	</tr>
	<?php foreach ($materialIndividuals as $materialIndividual): ?>
	<tr>
		<tbody>
			<td><?php echo $this->Html->link($materialIndividual['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL'], array('action' => 'view', $materialIndividual['MaterialIndividual']['MATERIAL_INDIVIDUAL_ID'])); ?></td>
		</tbody>
	</tr>
<?php endforeach; ?>
	</table>
</div>
