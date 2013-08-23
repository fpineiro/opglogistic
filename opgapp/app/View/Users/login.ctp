<div class="users form">
<?php 
	echo '<center>'.$this->element('menus/logo').'</center>';
	echo $this->Session->flash('auth');
	echo $this->Html->css('bootstrap');
	$this->layout = 'login';
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('label' => 'Nombre de usuario'));
    echo $this->Form->input('password', array('label' => 'Contraseña'));
    echo $this->Form->button('Login', array('class' => 'btn'));
	 ?>
</div>