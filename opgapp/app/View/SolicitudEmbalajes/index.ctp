<?php
	echo $this->Form->input('filtrorol', array(
			'options' => array('sinfiltro' => 'Escoja un filtro', 'espera' => 'En Espera', 'embalando' => 'Embalando', 'embalado' => 'Embalado'), 
			'label' => 'Estado: '
		));
?>

<h4>Seleccione una solicitud de embalaje para ver su detalle</h4>

<table id="context">
    <tr>
        <th>Numero Solicitud</th>
        <th>Cliente</th>
        <th>Estado</th>
    </tr>

    <?php if(isset($solicitudes) && isset($estados)){
    	for($cnt=0;$cnt<count($solicitudes);$cnt++){ ?>
		    <tr>
		        <td>
				<?php 
					echo $this->Html->link($solicitudes[$cnt]['SolicitudEmbalaje']['id'], array('action' => 'view', $solicitudes[$cnt]['SolicitudEmbalaje']['id'])); 	
				?>
		        </td>
		        <td>
				<?php 
					echo $this->Html->link($solicitudes[$cnt]['SolicitudEmbalaje']['nombre_cliente'], array('action' => 'view', $solicitudes[$cnt]['SolicitudEmbalaje']['id'])); 	
				?>
		        </td>
				<td>
				<?php
					echo $this->Html->link($estados[$cnt]['EstadoAutomata']['nombre_estado_automata'], array('action' => 'view', $estados[$cnt]['EstadoAutomata']['id']));
				?>
				</td>
		    </tr>
		<?php
		unset($estado);
		unset($solicitud);
		}
	}?>
</table>