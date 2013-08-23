<div class="users form span3">
<?php
	echo $this->Html->css('bootstrap'); 
	echo '<center>'.$this->element('menus/logo').'</center>';
	$this->layout = 'login';
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('label' => 'Nombre de usuario'));
    echo $this->Form->input('password', array('label' => 'Contraseña'));
    echo $this->Form->button('Login', array('class' => 'btn'));
    echo "<br /><br />";
    echo $this->Session->flash('auth', array('params' => array('class' => 'alert')));
	 ?>
</div>