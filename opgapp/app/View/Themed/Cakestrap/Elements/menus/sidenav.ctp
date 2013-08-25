<?php  
	$user = AuthComponent::user('ROLE');
	echo $this->html->image('opglogo.png');
	if(strcmp($user, 'cliente')==0){
		
		echo $this->Html->link(__('Realizar solicitud de embalaje').' '.$this->Html->image('box.png', array('width' => '33px', 'style'=>'float:right; margin-top: -4px')), '/SolicitudEmbalajes/add', array('escape' => false,'style' => 'font-size:14px', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Realizar orden de despacho').' '.$this->Html->image('camion.png', array('width' => '36px', 'style'=>'float:right; margin-top: -4px')), '/OrdenDespachos/Add', array('escape' => false,'style' => 'font-size:14px', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Revisar solicitudes de embalaje').' '.$this->Html->image('document.png', array('width' => '28px', 'style'=>'float:right')), '/SolicitudEmbalajes', array('escape' => false,'style' => 'font-size:14px', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Revisar órdenes de despacho').' '.$this->Html->image('document.png', array('width' => '28px', 'style'=>'float:right')), '/OrdenDespachos', array('escape' => false,'style' => 'font-size:14px', 'class' => 'btn btn-mini'));				
	}else if(strcmp($user, 'jb')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Jefe de Bodega</strong></p>';
		echo $this->Html->link(__('Revisar Material individual').' '.$this->Html->image('bottle.png', array('width' => '15px', 'style'=>'float:right; margin-top:-3px;padding-right:5px')), '/MaterialIndividuals/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(__('Gestionar Guias de Despacho').' '.$this->Html->image('document.png', array('width' => '25px', 'style'=>'float:right; margin-top:-3px')), '/GuiaDespachoEntradaClientes/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Gestionar órdenes de compra').' '.$this->Html->image('buy.png', array('width' => '25px', 'style'=>'float:right; margin-top:-3px')), '/OrdenCompras/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(__('Gestionar posiciones').' '.$this->Html->image('location.png', array('width' => '28px', 'style'=>'float:right; margin-top:-1px')), '/Posicions/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));	
		
		echo $this->Html->link(__('Gestionar órdenes internas').' '.$this->Html->image('work.png', array('width' => '26px', 'style'=>'float:right; margin-top:-1px')), '/OrdenInternas/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));	

		echo $this->Html->link(__('Gestionar compatibilidades').' '.$this->Html->image('pieza.png', array('width' => '26px', 'style'=>'float:right; margin-top:-1px;padding-right:2px')), '/compatibilidads/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		
		echo $this->html->link('Gestionar Estado Solicitudes de Embalaje', '/SolicitudEmbalajes/', array('style' => 'font-size:12px'));
		
	}else if(strcmp($user, 'admin')==0){
		echo '<p class="lead" style="font-size:19px"><strong>Menu Administrador</strong></p>';
		echo $this->Html->link(__('Gestionar usuarios').' '.$this->Html->image('users.png', array('width' => '28px', 'style'=>'float:right')), '/users/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(__('Gestionar bodegas').' '.$this->Html->image('bodega.png', array('width' => '28px', 'style'=>'float:right')), '/bodegas/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
			
		echo $this->Html->link(__('Gestionar proveedores').' '.$this->Html->image('provider.png', array('width' => '26px', 'style'=>'float:right')), '/proveedors/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Gestionar clientes').' '.$this->Html->image('client.png', array('width' => '28px', 'style'=>'float:right;margin-top:-2px')), '/clientes/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold;', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Gestionar compatibilidades').' '.$this->Html->image('pieza.png', array('width' => '26px', 'style'=>'float:right; margin-top: 2px;margin-left: -3px')), '/compatibilidads/', array('escape' => false,'style' => 'font-size:12px; font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Revisar solicitudes de embalaje').' '.$this->Html->image('box.png', array('width' => '28px', 'style'=>'float:right; margin-top: -1px')), '/SolicitudEmbalajes', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));

		echo $this->Html->link(__('Gestionar órdenes de compra').' '.$this->Html->image('document.png', array('width' => '25px', 'style'=>'float:right')), '/OrdenCompras/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
		
		echo $this->Html->link(__('Gestionar órdenes de despacho').' '.$this->Html->image('camion.png', array('width' => '33px', 'style'=>'float:right; margin-top:-4px')), '/OrdenDespachos/', array('escape' => false,'style' => 'font-size:12px;font-weight: bold', 'class' => 'btn btn-mini'));
	}else{
		echo '<p class="lead"><strong>Ha ocurrido el mega-error</strong></p>';
	}
?> 