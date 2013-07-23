<h1>Editar usuario</h1>
<?php
	echo $this->Html->script('funciones');

	echo $this->Form->input('role', 
	array(
    	'options' => array('admin' => 'Administrador', 'jb' => 'Jefe de Bodega', 'cliente' => 'Cliente'), 
		'label' => 'Tipo de Usuario: ',
		'onChange' => 'checkOption()',
		'id' => 'role'
    ));
    echo $this->Form->create('User', array('action' => 'edit'));
    echo $this->Form->input('id', array('type' => 'text','disabled' => true,'label'=>'Id: ','size'=>3));
    echo $this->Form->input('username',array('label'=>'Nombre de usuario'));
    echo $this->Form->input('name',array('label'=>'Nombre'));
    echo $this->Form->input('password',array('label'=>'Contraseña'));
    echo $this->Form->input('mail',array('label'=>'Correo'));
 	echo '<div id="context" style="display: none">'.$this->Form->input('nombre_cliente',array('label'=>'Cliente asociado')).'</div>';
 	echo $this->Form->end('Guardar cambios');
?>