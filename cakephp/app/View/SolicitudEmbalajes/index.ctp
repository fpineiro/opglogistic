<div class="solicitudEmbalajes index">
	<fieldset>
	<?php echo '<legend><h3>Lista de Solicitudes de Embalaje</h3></legend>';
	echo $this->Html->link('Ingresar Solicitud', array('action' => 'add'), array('class' => 'btn btn-success', 'style'=>'float:right'));
	echo '<h5>'."Seleccione una solicitud para ver su detalle".'</h5><br>';
	?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-bordered table-condensed">
		<thead>
			<tr>
					<th><p class="text-center"><?php echo $this->Paginator->sort('SOLICITUD_EMBALAJE_ID', 'Identificador'); ?></p></th>
					<th><p class="text-center"><?php echo $this->Paginator->sort('ESTADO_AUTOMATA_ID', 'Estado de la Solicitud'); ?></p></th>
					<th><p class="text-center"><?php echo $this->Paginator->sort('FECHA_SOLICITUD_EMBALAJE','Fecha de Creacion'); ?></p></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($solicitudes as $solicitud): ?>
				<tr>
					<td><p class="text-center"><?php echo $this->Html->link($solicitud['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'], array('action' => 'view', $solicitud['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']));?>&nbsp;</p></td>
					<td><p class="text-center"><?php echo $this->Html->link($estados[$solicitud['SolicitudEmbalaje']['ESTADO_AUTOMATA_ID']-1]['EstadoAutomata']['NOMBRE_ESTADO_AUTOMATA'], array('action' => 'view', $solicitud['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?>&nbsp;</p></td>
					<td><p class="text-center"><?php echo $this->Html->link($solicitud['SolicitudEmbalaje']['FECHA_SOLICITUD_EMBALAJE'], array('action' => 'view', $solicitud['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?>&nbsp;</p></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</fieldset>
</div>