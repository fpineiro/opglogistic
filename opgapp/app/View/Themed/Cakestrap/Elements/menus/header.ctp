<?php  
 // En este archivo es necesario hacer el PHP para reconocer que usuario está conectado, y mostrar su nombre
 echo '<b>Bienvenido, '.AuthComponent::user('NAME').'</b>';
 echo '&nbsp;';
 echo '&nbsp;';
 echo $this->html->link('Cerrar Sesión', '/Users/logout');
 echo '&nbsp;';
?> 