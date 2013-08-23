<div class="solicitudEmbalajes form">
<?php echo $this->Form->create('SolicitudEmbalaje'); ?>
	<fieldset>
		<legend><?php echo __('Editar Solicitud Embalaje'); ?></legend>
	<?php
		echo $this->Form->input('SOLICITUD_EMBALAJE_ID', array('label' => 'Identificador de la solicitud'));
		echo '<div style="margin-bottom: 10px">';
			echo $this->Form->label('Estado');
			echo '<input type="hidden" name="data[SolicitudEmbalaje][ESTADO_AUTOMATA_ID]" value="" id="SolicitudEmbalajeESTADOAUTOMATAID_">';
			echo '<select name="data[SolicitudEmbalaje][ESTADO_AUTOMATA_ID]" class="input-large" id="SolicitudEmbalajeESTADOAUTOMATAID">';
			foreach($estados as $estado){
				if($solicitud['SolicitudEmbalaje']['ESTADO_AUTOMATA_ID'] == $estado['EstadoAutomata']['ESTADO_AUTOMATA_ID']) echo '<option selected value="'.$estado['EstadoAutomata']['ESTADO_AUTOMATA_ID'].'">'.$estado['EstadoAutomata']['NOMBRE_ESTADO_AUTOMATA'].'</option>';
				else echo '<option value="'.$estado['EstadoAutomata']['ESTADO_AUTOMATA_ID'].'">'.$estado['EstadoAutomata']['NOMBRE_ESTADO_AUTOMATA'].'</option>';
			}
			echo "</select>";
		echo "</div>";
		echo '<div style="margin-bottom: 10px">';
			echo $this->Form->label('Cliente');
			echo '<input type="hidden" name="data[SolicitudEmbalaje][CLIENTE_ID]" value="" id="SolicitudEmbalajeCLIENTEID_">';
			echo '<select disabled name="data[SolicitudEmbalaje][CLIENTE_ID]" class="input-large" id="SolicitudEmbalajeCLIENTEID_">';
			foreach($clientes as $cliente){
				if($solicitud['SolicitudEmbalaje']['CLIENTE_ID']==$cliente['Cliente']['CLIENTE_ID']) echo '<option selected value="'.$cliente['Cliente']['CLIENTE_ID'].'">'.$cliente['Cliente']['NOMBRE_CLIENTE'].'</option>';
				else echo '<option value="'.$cliente['Cliente']['CLIENTE_ID'].'">'.$cliente['Cliente']['NOMBRE_CLIENTE'].'</option>';
			}
			echo "</select>";
		echo "</div>";
		echo $this->Form->dateTime('FECHA_SOLICITUD_EMBALAJE', 'DM', '12', array('class' => 'input-small', 'disabled' => 'true'));
		echo $this->Form->input('CONTIENE_EMBALAJE_SOLICITUD_EMBALAJE', array('label' => '¿Solicitud con embalaje personalizado?'));
	?>
	</fieldset>
	<?php 
		$options = array(
			'label' => 'Editar Solicitud',
			'class' => 'btn btn-success'
		);
		echo $this->Form->end($options); 
	?>
</div>