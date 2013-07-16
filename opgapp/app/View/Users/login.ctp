<div class="users form">
<?php echo $this->Session->flash('auth');
	$this->layout = 'login';
	echo $this->Form->create('User');
	echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end(__('Login'));
	 ?>
</div>