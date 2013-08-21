<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			echo $this->Html->css('bootstrap');
		    echo $this->Html->css('estilo');
		    echo $this->Html->script('jquery');
		    echo $this->Html->script('bootstrap');
		?>

		<title>OPG Logistic</title>
	</head>
	<body>
		<div id="sidenav"><?php echo $this->element('menus/sidenav'); ?></div>
		<div id="header"><?php echo $this->element('menus/header'); ?></div>
		<div id="bigbox">
			<div id="contenido" class="span12">
				<?php
					$this->Session->flash();   
					echo $content_for_layout;
				?>
			</div>
		</div>
	</body>
</html>