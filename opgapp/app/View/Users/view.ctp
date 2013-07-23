<?php 

echo $user['User']['username'];
echo '</big><p> Nombre: ';
echo $user['User']['name'];
echo '<p> Apellido: ';
echo $user['User']['lastname'];
echo '<p> E-Mail: ';
echo $user['User']['mail'];
echo '<p> Creado el: ';
echo $user['User']['created'];
echo "<br/>".$this->Html->link("Editar", array('action'=> 'edit',  $user['User']['id']), array( 'class' => 'button'));

?>