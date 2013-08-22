<div class="compatibilidads index">

	<?php echo '<h5>'."Lista de compatibilidades".'</h5>'; ?>
	<div id="context">
	<table cellpadding="0" cellspacing="0" id="tablaDatos" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
				
				<th><?php echo $this->Paginator->sort('MATERIAL_INTERMEDIO_ID', 'ID Material Intermedio'); ?></th>
				<th><?php echo $this->Paginator->sort('MATERIAL_DE_EMBALAJE_ID', 'ID Material de Embalaje'); ?></th>
		</tr>
	</thead>

	<?php foreach ($compatibilidads as $compatibilidad): ?>
	<tbody>
	<tr>
		<td><?php echo $this->Html->link(($compatibilidad['Compatibilidads']['MATERIAL_INTERMEDIO_ID']), array('action' => 'view', $user['Compatibilidads']['MATERIAL_INTERMEDIO_ID']));?>&nbsp;</td>
		<td><?php echo $this->Html->link(($compatibilidad['Compatibilidads']['MATERIAL_DE_EMBALAJE_ID']), array('action' => 'view', $user['Compatibilidads']['MATERIAL_DE_EMBALAJE_ID']));?>&nbsp;</td>
	</tr>
	</tbody>
<?php endforeach; ?>
	</table>
	</div>
</div>

