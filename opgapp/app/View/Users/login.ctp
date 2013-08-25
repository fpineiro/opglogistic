<div class="users form span3">
<?php
	echo $this->Html->css('bootstrap'); 
	echo '<center>'.$this->element('menus/logo').'</center>';
	$this->layout = 'login';
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('label' => '<h5>Nombre de usuario:</h5>'));
    echo $this->Form->input('password', array('label' => '<h5>Contraseña:</h5>'));
    echo '<div style="margin-left: 68px">'.$this->Form->button('Entrar', array('class' => 'btn btn-primary btn-large')).'</div>';
    echo $this->Session->flash('auth', array('params' => array('class' => 'alert')));
	?>
</div>