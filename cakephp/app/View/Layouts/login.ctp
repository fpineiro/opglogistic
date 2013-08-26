<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('estilo');
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap'); 
    echo $this->Html->meta('icon'); 
?>  
<title>OPG Logistic</title>
</head>
<body>
<div id="fullcontainer" class="container">
<div id="login">
<?php   
	$this->session->flash();   
	echo $content_for_layout;   
?>
</div>
</div>
</body>
</html>
