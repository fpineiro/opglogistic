<div class="clientes form">

<?php   
	echo $this->Html->script('funciones');
	echo '<fieldset><legend>Ingresar usuario</legend>';
	echo $this->Form->create('Cliente');
	echo $this->Form->input('nombre_cliente', array('label' => 'Nombre: ', 'type' => 'text'));
	echo $this->Form->input('direccion_cliente', array('label' => 'Dirección: '));
	echo $this->Form->input('telefono_contacto_cliente', array('label' => 'Teléfono: '));
	echo $this->Form->input('email_cliente', array('label' => 'Correo Electronico: '));
   	echo $this->Form->end(__('Agregar Cliente')); 
	echo '</fieldset>';
?>
	
</div>