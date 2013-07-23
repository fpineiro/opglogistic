<div class="test form">

<?php   
	echo $this->Html->script('funciones');
	echo '<fieldset><legend>Ingresar test</legend>';
	echo $this->Form->create('Test');
	echo $this->Form->input('nombre', array('label' => 'Nombre: '));
   	echo $this->Form->end(__('Agregar test')); 
	echo '</fieldset>';
?>
	
</div>