<div class="span12 users form">
<?php echo $this->Session->flash();
	$this->layout = 'login';
	echo $this->Form->create('User');
	echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end(__('Login'));
	 ?>
</div>