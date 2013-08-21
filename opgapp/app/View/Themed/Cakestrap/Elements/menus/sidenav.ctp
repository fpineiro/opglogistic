<?php  
	$user = AuthComponent::user('ROLE');
	echo $this->html->image('opglogo.png');
	if(strcmp($user, 'cliente')==0){
		echo '<p class="lead"><strong>Menu Cliente</strong></p>';
		echo $this->html->link('Realizar Solicitud de Embalaje', '/SolicitudEmbalajes/');
		echo '<br>';
		echo $this->html->link('Realizar Orden de Despacho', '/OrdenDespachos/');
		echo '<br>';
		echo $this->html->link('Revisar Solicitud de Embalaje', '/SolicitudEmbalajes/');
		echo '<br>';
		echo $this->html->link('Revisar Orden de Despacho', '/OrdenDespachos/');
		echo '<br>';
	}else if(strcmp($user, 'jb')==0){
		echo '<p class="lead"><strong>Menu Jefe de Bodega</strong></p>';
		echo $this->html->link('Revisar Material (¿?)', '/MaterialIndividuals/');
		echo '<br>';
		echo $this->html->link('Gestionar Guias de Despacho (¿?)', '/GuiaDespachoEntradaClientes/');
		echo '<br>';
		echo $this->html->link('Gestionar Órdenes de Compra', '/OrdenCompras/');
		echo '<br>';
		echo $this->html->link('Gestionar Posiciones', '/Posicions/');
		echo '<br>';
		echo $this->html->link('Gestionar Estado Solicitudes de Embalaje', '/SolicitudEmbalajes/');
		echo '<br>';
		echo $this->html->link('Revisar Órdenes Internas', '/OrdenInternas/');
		echo '<br>';
		echo $this->html->link('Revisar Compatibilidades', '/Compatibilidads/');
		echo '<br>';
	}else if(strcmp($user, 'admin')==0){
		echo '<p class="lead"><strong> MenuAdministrador</strong></p>';
		echo $this->html->link('Gestionar Usuarios', '/Users/');
		echo '<br>';
		echo $this->html->link('Gestionar Bodegas', '/Bodegas/');
		echo '<br>';
		echo $this->html->link('Gestionar Compatibilidades', '/Compatibilidads/');
		echo '<br>';
		echo $this->html->link('Gestionar Proveedores', '/Proveedors/');
		echo '<br>';
		echo $this->html->link('Revisar Solicitudes de Embalaje', '/SolicitudEmbalajes/');
		echo '<br>';
		echo $this->html->link('Revisar Órdenes de Compra', '/OrdenCompras/');
		echo '<br>';
		echo $this->html->link('Revisar Órdenes de Despacho', '/OrdenDespachos/');
		echo '<br>';
	}else{
		echo '<p class="lead"><strong>Ha ocurrido el mega-error</strong></p>';
	}
?> 