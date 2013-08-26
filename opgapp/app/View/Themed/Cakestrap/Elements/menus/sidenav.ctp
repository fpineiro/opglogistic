<?php  
	$user = AuthComponent::user('ROLE');
	echo $this->html->image('opglogo.png');
	if(strcmp($user, 'cliente')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Cliente</strong></p>';
		echo $this->Html->link(($this->Html->image('box.png', array('width' => '33px', 'style'=>'margin-top: -4px'))).('Solicitud de embalaje'), '/SolicitudEmbalajes/add', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(($this->Html->image('camion.png', array('width' => '36px', 'style'=>'margin-top: -4px'))).('Orden de despacho'), '/OrdenDespachos/Add', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
	}else if(strcmp($user, 'jb')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Jefe de Bodega</strong></p>';
		echo $this->Html->link(($this->Html->image('bottle.png', array('width' => '15px', 'style'=>'margin-left:3px;margin-top:-3px;margin-right:7px'))).' '.('Material individual'), '/MaterialIndividuals/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(($this->Html->image('document.png', array('width' => '25px', 'style'=>'margin-top:-1px;margin-right:3px'))).''.('Guias de Despacho'), '/GuiaDespachoEntradaClientes/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(($this->Html->image('buy.png', array('width' => '25px', 'style'=>'margin-top:-3px;margin-right:4px'))).('Órdenes de compra'), '/OrdenCompras/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(($this->Html->image('location.png', array('width' => '28px', 'style'=>'margin-top:-1px;margin-right:2px'))).('Posiciones'), '/Posicions/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));	
		
		echo $this->Html->link(($this->Html->image('work.png', array('width' => '26px', 'style'=>'margin-right:2px ;margin-top:-1px;margin-right:4px'))).('Órdenes internas'), '/OrdenInternas/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));	

		echo $this->Html->link(($this->Html->image('pieza.png', array('width' => '26px', 'style'=>'margin-right:3px;margin-top:-1px;padding-right:2px'))).('Compatibilidades'), '/compatibilidads/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		
		echo $this->html->link(' Estado Solicitudes de Embalaje', '/SolicitudEmbalajes/', array('style' => 'font-size:12px'));
		
	}else if(strcmp($user, 'admin')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Administrador</strong></p>';
		echo $this->Html->link(($this->Html->image('users.png', array('width' => '28px', 'style'=>'margin-right: 4px;'))).' '.__('Usuarios'), '/users/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(($this->Html->image('bodega.png', array('width' => '28px', 'style'=>'margin-right: 4px;'))).' '.__('Bodegas'), '/bodegas/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
			
		echo $this->Html->link(($this->Html->image('provider.png', array('width' => '26px', 'style'=>'margin-right: 4px;'))).' '.__('Proveedores'), '/proveedors/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(($this->Html->image('client.png', array('width' => '28px', 'style'=>'margin-right: 4px;margin-top:-2px'))).__('Clientes'), '/clientes/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold;', 'class' => 'btn btn-mini'));

		echo $this->Html->link(($this->Html->image('pieza.png', array('width' => '26px', 'style'=>'margin-right: 5px; margin-top: 2px'))).__('Compatibilidades'), '/compatibilidads/', array('escape' => false,'style' => 'font-size:12px; font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(($this->Html->image('box.png', array('width' => '28px', 'style'=>'margin-right: 4px; margin-top: -1px'))).__('Solicitudes de embalaje'), '/SolicitudEmbalajes', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(($this->Html->image('document.png', array('width' => '25px', 'style'=>'margin-right: 7px;'))).__('Órdenes de compra'), '/OrdenCompras/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(($this->Html->image('camion.png', array('width' => '33px', 'style'=>'margin-right: 0px;margin-top:-4px'))).__('Órdenes de despacho'), '/OrdenDespachos/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
	}else{
		echo '<p class="lead"><strong>Ha ocurrido el mega-error</strong></p>';
	}
?> 