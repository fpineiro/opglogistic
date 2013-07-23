<?php 

echo '</big><p> Nombre: ';
echo $cliente['Cliente']['nombre_cliente'];
echo '<p> Dirección: ';
echo $cliente['Cliente']['direccion_cliente'];
echo '<p> Teléfono: ';
echo $cliente['Cliente']['telefono_contacto_cliente'];
echo '<p> Correo: ';
echo $cliente['Cliente']['email_cliente'];
echo "<br/>".$this->Html->link("Editar", array('action'=> 'edit',  $cliente['Cliente']['nombre_cliente']), array( 'class' => 'button'));
//echo $this->Form->submit('Editar usuario', array());

?>