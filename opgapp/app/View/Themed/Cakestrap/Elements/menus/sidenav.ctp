<?php  
	$user = AuthComponent::user('ROLE');
	echo $this->html->image('opglogo.png');
	if(strcmp($user, 'cliente')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Cliente</strong></p>';
		echo $this->html->link('Realizar Solicitud de Embalaje', '/SolicitudEmbalajes/Add', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Realizar Orden de Despacho', '/OrdenDespachos/Add', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Solicitud de Embalaje', '/SolicitudEmbalajes/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Orden de Despacho', '/OrdenDespachos/', array('style' => 'font-size:12px'));
		echo '<br>';
	}else if(strcmp($user, 'jb')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Jefe de Bodega</strong></p>';
		echo $this->html->link('Revisar Material (¿?)', '/MaterialIndividuals/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Guias de Despacho (¿?)', '/GuiaDespachoEntradaClientes/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Órdenes de Compra', '/OrdenCompras/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Posiciones', '/Posicions/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Estado Solicitudes de Embalaje', '/SolicitudEmbalajes/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Órdenes Internas', '/OrdenInternas/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Compatibilidades', '/Compatibilidads/', array('style' => 'font-size:12px'));
		echo '<br>';
	}else if(strcmp($user, 'admin')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Administrador</strong></p>';
		echo $this->html->link('Gestionar Usuarios', '/Users/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Bodegas', '/Bodegas/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Compatibilidades', '/Compatibilidads/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Gestionar Proveedores', '/Proveedors/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Solicitudes de Embalaje', '/SolicitudEmbalajes/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Órdenes de Compra', '/OrdenCompras/', array('style' => 'font-size:12px'));
		echo '<br>';
		echo $this->html->link('Revisar Órdenes de Despacho', '/OrdenDespachos/', array('style' => 'font-size:12px'));
		echo '<br>';
	}else{
		echo '<p class="lead"><strong>Ha ocurrido el mega-error</strong></p>';
	}
?> 