<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(filtro){
		 $('#context').load('/cakephp/clientes/index/'+filtro+' #context');
	}
</script>
<?php	
	echo $this->Form->input('inputbusqueda', array(
		'div' => false, 
		'class' => false, 
		'label' => false,
		'placeholder' => 'Ingrese nombre de cliente',
		'size' => '25'
	));
	
	echo $this->Form->submit('Buscar', array(
		'div' => false, 
		'class' => false, 
		'onclick' => "actualizar(inputbusqueda.value)",
	));
		
?>
<table id="context">
    <tr>
        <th>Cliente</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td>
		<?php 
			echo $this->Html->link($cliente['Cliente']['nombre_cliente'], array('action' => 'view', $cliente['Cliente']['nombre_cliente'])); 	
		?>
        </td>
        <td>
		<?php 
			echo $this->Html->link($cliente['Cliente']['direccion_cliente'], array('action' => 'view', $cliente['Cliente']['nombre_cliente'])); 	
		?>
        </td>
        <td>
		<?php 
			echo $this->Html->link($cliente['Cliente']['telefono_contacto_cliente'], array('action' => 'view', $cliente['Cliente']['nombre_cliente'])); 	
		?>
        </td>
        <td>
		<?php 
			echo $this->Html->link($cliente['Cliente']['email_cliente'], array('action' => 'view', $cliente['Cliente']['nombre_cliente'])); 	
		?>
        </td>
    </tr>
    <?php 	
		endforeach;
		unset($cliente); 
	?>
</table>