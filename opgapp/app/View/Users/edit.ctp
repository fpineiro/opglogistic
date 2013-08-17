<div class="users form">
<?php 
echo $this->Html->script('funciones');
echo $this->Form->create('User'); 
?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php

		echo $this->Form->input('ID', array('visibility' => false));
		echo $this->Form->input('USERNAME', array('label' => 'Usuario: '));
		echo $this->Form->input('PASSWORD', array('type' => 'password', 'label' => 'Contraseña: '));
		echo $this->Form->input('NAME', array('label' => 'Nombre: '));
		echo $this->Form->input('LASTNAME', array('label' => 'Apellido: '));
		echo $this->Form->input('MAIL', array('label' => 'E-mail: '));
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
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
