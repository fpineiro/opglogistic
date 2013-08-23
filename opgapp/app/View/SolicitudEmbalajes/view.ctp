<div class="solicitudEmbalajes view">
	<h2><?php  echo __('Detalle Solicitud de Embalaje'); ?></h2>
	<br />
	<table class="table table-striped table-hover table-bordered table-condensed">
		<thead>
			<tr>
				<th><p class="text-center"><?php echo __('Identificador'); ?></p></th>
				<th><p class="text-center"><?php echo __('Estado'); ?></p></th>
				<th><p class="text-center"><?php echo __('Fecha de Emisión'); ?></p></th>
				<th><p class="text-center"><?php echo __('¿Solicitud con embalaje personalizado?'); ?></p></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><p class="text-center">
					<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']); ?>
					&nbsp;
				</p></td>
				<td><p class="text-center">
					<?php echo h($estados[$solicitudEmbalaje['SolicitudEmbalaje']['ESTADO_AUTOMATA_ID']-1]['EstadoAutomata']['NOMBRE_ESTADO_AUTOMATA']); ?>
					&nbsp;
				</p></td>
				<td><p class="text-center">
					<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['FECHA_SOLICITUD_EMBALAJE']); ?>
					&nbsp;
				</p></td>
				<td><p class="text-center">
					<?php if($solicitudEmbalaje['SolicitudEmbalaje']['CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE']==1) echo 'Si';
						  else echo 'No';
					?>
					&nbsp;
				</p></td>
			</tr>
		</tbody>
	</table>
	<p><b>Detalle de Materiales</b></p>
	<table class="table table-striped table-hover table-bordered table-condensed">
		<thead>
			<th><p class="text-center"><?php echo __('Nombre Material'); ?></p></th>
			<th><p class="text-center"><?php echo __('Cantidad'); ?></p></th>
			<th><p class="text-center"><?php echo __('Tipo de Material'); ?></p></th>
		</thead>
		<tbody>
			<?php foreach ($detalleIndividual as $individual): ?>
				<tr>
					<td><p class="text-center"><?php echo __($individual['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL']); ?></p></td>
					<td><p class="text-center"><?php echo __($individual['DetalleSolicitudEmbalajeMaterialIndividual']['CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_INDIVIDUAL']); ?></p></td>
					<td><p class="text-center"><?php echo __('Material Individual'); ?></p></td>
				</tr>
			<?php endforeach; ?>

			<?php foreach ($detalleEmbalaje as $embalaje): ?>
				<tr>
					<td><p class="text-center"><?php echo __($embalaje['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE']); ?></p></td>
					<td><p class="text-center"><?php echo __($embalaje['DetalleSolicitudEmbalajeMaterialEmbalaje']['CANTIDAD_DETALLE_SOLICITUD_EMBALAJE_MATERIAL_EMBALAJE']); ?></p></td>
					<td><p class="text-center"><?php echo __('Material de Embalaje'); ?></p></td>
				</tr>
			<?php endforeach; ?>

			<?php foreach ($detalleIntermedio as $intermedio): ?>
				<tr>
					<td><p class="text-center"><?php echo __($intermedio['MaterialIntermedio']['NOMBRE_MATERIAL_INTERMEDIO']); ?></p></td>
					<td><p class="text-center"><?php echo __($intermedio['DetalleSolicitudEmbalajeMaterialIntermedio']['CANTIDAD_MATERIAL_INTERMEDIO_DETALLE_SOLICITUD_EMBALAJE']); ?></p></td>
					<td><p class="text-center"><?php echo __('Material Intermedio'); ?></p></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="actions span4 offset9">
	<?php echo $this->Html->link('Editar Solicitud', array('action' => 'edit', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']), array('class' => 'btn')); ?>
	<?php echo $this->Form->postLink('Borrar Solicitud', array('action' => 'delete', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']), array('class' => 'btn btn-danger'), __('¿Esta seguro que desea borrar esta solicitud?')); ?>
</div>