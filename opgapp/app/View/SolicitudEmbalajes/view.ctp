<div class="solicitudEmbalajes view">
<h2><?php  echo __('Revisar Estado Solicitud Embalaje'); ?></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo __('SOLICITUD EMBALAJE ID'); ?></th>
				<th><?php echo __('ESTADO AUTOMATA ID'); ?></th>
				<th><?php echo __('FECHA DETALLE SOLICITUD EMBALAJE'); ?></th>
				<th><?php echo __('CONTIENE EMBALAJE SOLICITUD EMBALAJE'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['SOLICITUD_EMBALAJE_ID']); ?>
					&nbsp;
				</td>
				<td>
					<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['ESTADO_AUTOMATA_ID']); ?>
					&nbsp;
				</td>
				<td>
					<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['FECHA_DETALLE_SOLICITUD_EMBALAJE']); ?>
					&nbsp;
				</td>
				<td>
					<?php echo h($solicitudEmbalaje['SolicitudEmbalaje']['CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE']); ?>
					&nbsp;
				</td>
			</tr>
		</tbody>
	</table>
</div>