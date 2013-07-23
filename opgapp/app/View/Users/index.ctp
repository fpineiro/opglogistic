<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(filtro){
	        $('#context').load('/cakephp/users/index/'+filtro+' #context');
	}
</script>
<?php
	echo $this->Form->input('filtrorol', array(
		'options' => array('' => 'Sin Filtro', 'cliente' => 'Cliente', 'jb' => 'Jefe de Bodega', 'admin' => 'Administrador'), 
		'label' => 'Filtro de Usuarios: ',
		'onchange' => "actualizar(this.value)",
		'div' => false,
		'class' => false
	));
	
	echo ' o ';
	
	echo $this->Form->input('inputbusqueda', array(
		'div' => false, 
		'class' => false, 
		'label' => false,
		'placeholder' => 'Ingrese nombre o apellido',
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
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo de usuario</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
		<?php 
			echo $this->Html->link($user['User']['username'], array('action' => 'view', $user['User']['id'])); 	
		?>
        </td>
        <td>
		<?php 
			echo $this->Html->link($user['User']['name'], array('action' => 'view', $user['User']['id'])); 	
		?>
        </td>
        <td>
		<?php 
			echo $this->Html->link($user['User']['lastname'], array('action' => 'view', $user['User']['id'])); 	
		?>
        </td>
        <td>
		<?php 
			echo $this->Html->link($user['User']['role'], array('action' => 'view', $user['User']['id'])); 	
		?>
        </td>
    </tr>
    <?php 	
		endforeach;
		unset($user); 
	?>
</table>