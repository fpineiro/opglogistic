<?php  
 // En este archivo es necesario hacer el PHP para reconocer que usuario está conectado, y mostrar su nombre
 echo '<b>Bienvenido: '.AuthComponent::user('NAME').'</b>';
 echo '&nbsp;';
 echo '&nbsp;';
 echo $this->html->link('Salir', '/Users/logout', array('style' => 'padding-bottom: 3px', 'class'=>'btn btn-danger btn-small'));
 echo '&nbsp;';
?> 