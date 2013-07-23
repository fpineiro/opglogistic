<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
     echo $this->html->css('estilo'); 
     echo $this->Html->meta('icon'); 
?>  
<title>OPG Logistic</title>
</head>
<body>
<div id="sidenav">
<?php echo $this->element('menus/sidenav'); ?>  
</div>
<div id="header"><?php echo $this->element('menus/header'); ?></div>
<div id="bigbox">
<div id="contenido">
<?php
	$this->Session->flash();   
	echo $content_for_layout;   
?>
</div>
</div>
</body>
</html>
