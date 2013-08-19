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
			<tr class="info">
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
	<table class="table table-striped table-hover table-bordered table-condensed">
		<thead>
		</thead>
		<tbody>
		</tbody>
	</table>
	<div class="span3 offset9">
		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']), array('class' => 'btn')); ?>
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID'])); ?>
	</div>
</div>

<p><b><?php print_r(array_keys($solicitudEmbalaje['DetalleSolicitudEmbalajeMaterialIndividual'][0]))?></b></p>