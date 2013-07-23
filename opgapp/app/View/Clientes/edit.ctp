<h1>Editar cliente</h1>

<?php

	echo $this->Form->create('Cliente', array('action' => 'edit'));
	echo $this->Form->input('nombre_cliente', array('label' => 'Nombre Cliente: '));
    echo $this->Form->input('direccion_cliente', array('label' => 'Dirección: '));
    echo $this->Form->input('telefono_contacto_cliente', array('label' => 'Teléfono: '));
    echo $this->Form->input('email_cliente', array('label' => 'Correo Electronico: '));

 	echo $this->Form->end('Guardar cambios');

?>