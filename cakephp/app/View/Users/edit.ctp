<div class="users form">
<?php 
echo $this->Html->script('funciones');
echo $this->Form->create('User'); 
?>
	<fieldset>
	<legend><h3><?php echo ('Editar Usuario'); ?></h3></legend>
	<?php
		echo $this->Form->input('ID', array('visibility' => false));
		echo $this->Form->input('USERNAME', array('label' => '<h5>Usuario</h5>','placeholder' => 'Ingrese nombre de usuario'));
		echo $this->Form->input('PASSWORD', array('type' => 'password', 'label' => '<h5>Contraseña</h5>','placeholder' => 'Ingrese contraseña'));
		echo $this->Form->input('PASSWORD_CONFIRMA', array(
											'type' => 'password', 
											'label' => '<h5>Repetir contraseña</h5>',
											'placeholder' => 'Ingrese contraseña nuevamente'
											));
		echo $this->Form->input('NAME', array('label' => '<h5>Nombre</h5>'));
		echo $this->Form->input('LASTNAME', array('label' => '<h5>Apellido</h5>'));
		echo $this->Form->input('MAIL', array('label' => '<h5>E-mail</h5>'));
		/*
		if($rol == 'cliente'){
			echo '<div id="context" style="display: block">'.$this->Form->input('CLIENTE_ID',array('label'=>'Cliente asociado: ')).'</div>';
			echo '<div id="context2" style="display: block">'.$this->Form->input('BODEGA_ID',array('label'=>'Bodega asociada: ')).'</div>';
		}else{
			if($rol == 'jb'){
				echo '<div id="context" style="display: none">'.$this->Form->input('CLIENTE_ID',array('label'=>'Cliente asociado: ')).'</div>';
				echo '<div id="context2" style="display: block">'.$this->Form->input('BODEGA_ID',array('label'=>'Bodega asociada: ')).'</div>';
			}else{
				echo '<div id="context" style="display: none">'.$this->Form->input('CLIENTE_ID',array('label'=>'Cliente asociado: ')).'</div>';
				echo '<div id="context2" style="display: none">'.$this->Form->input('BODEGA_ID',array('label'=>'Bodega asociada: ')).'</div>';
			}
		}*/
	?>
	</fieldset>

<?php echo $this->Form->end(array('label' => 'Guardar', 'class' => 'btn btn-success','formnovalidate' => true))?>
</div>
