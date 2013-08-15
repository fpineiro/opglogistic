<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<?php
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('core');
		    echo $this->Html->css('estilo');
		    echo $this->Html->script('jquery');
		    echo $this->Html->script('bootstrap');
		    echo $this->Html->meta('icon');
		?>  
		<title>OPG Logistic</title>
	</head>
	<body>
		<div id="sidenav"><?php echo $this->element('menus/sidenav'); ?></div>
		<div id="header"><?php echo $this->element('menus/header'); ?></div>
		<div id="bigbox" class="row-fluid">
			<div id="contenido" class="span12">
				<input type="text" class="span3" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="["CACA","MAN"]">
				<?php
					$this->session->flash();   
					echo $content_for_layout;   
				?>
			</div>
		</div>
	</body>
</html>