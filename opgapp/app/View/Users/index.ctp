<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
	function actualizar(filtro){
		$.ajax({
			url: '/cakephp/users/index/'+filtro,
		    type: 'POST',
		    success: function (data) {
		        $('#context').html(data);
			},
			error: function(xhr, ajaxOptions, thrownError){
				alert(xhr.status);
			}
		});
	}
</script>
<?php
	echo $this->Form->input('filtrorol', array(
			'options' => array('cliente' => 'Cliente', 'jb' => 'Jefe de Bodega', 'admin' => 'Administrador'), 
			'label' => 'Tipo de Usuario: ',
			'onchange' => "actualizar(this.value)"
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