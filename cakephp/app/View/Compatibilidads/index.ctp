<div class="clientes index">
	<?php 
	echo $this->Html->script('funciones');
	echo '<legend><h3>Lista de compatibilidades</h3></legend>';
	if($rol == 'admin'){
		echo $this->Html->link('Ingresar compatibilidad', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=>'float:right'));
	}
	echo '<h5>'."Seleccione una compatibilidad para ver su detalle".'</h5><br>';
	?>	
	<div id="context">
	<div class="compatibilidads index">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
				
				<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID', 'Material intermedio'); ?></th>
				<th><?php echo $this->Paginator->sort('MATERIAL_DE_EMBALAJE_ID', 'Material de embalaje'); ?></th>
		</tr>
	</thead>

	<?php foreach ($compatibilidads as $compatibilidad): ?>
	<tbody>
	<tr>
		<td><?php echo $this->Html->link(($compatibilidad['MaterialIntermedio'][0]['NOMBRE_MATERIAL_INTERMEDIO']), array('action' => 'view', $compatibilidad['Compatibilidad']['MATERIAL_INTERMEDIO_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($compatibilidad['MaterialDeEmbalaje'][0]['NOMBRE_MATERIAL_DE_EMBALAJE']), array('action' => 'view', $compatibilidad['Compatibilidad']['MATERIAL_DE_EMBALAJE_ID'])); ?>&nbsp;</td>
	</tr>
	</tbody>
<?php endforeach; ?>
	</table>
	</div>
</div>

