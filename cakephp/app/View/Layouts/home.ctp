<?php
 
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css(array('reset', 'style', 'fonts', 'http://fonts.googleapis.com/css?family=Amaranth'));
		echo $this->Html->script(array('jquery-1.7.2.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
		<h1>Diario el Planeta</h1>
		<nav>
			<ul>
				<li><a href="#">Nacional</a></li>
				<li><a href="#">Internacional</a></li>
				<li><a href="#">Política</a></li>
				<li><a href="#">Ciencia</a></li>
				<li><a href="#">Medio Ambiente</a></li>
				<li><a href="#">Aviso Oportuno</a></li>
			</ul>
		</nav>
	</header>
	<div class="wrapper_all">
		<section id="render_cake">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</section>
		<section class="content">
			<section id="video">
			</section>
			<aside id="podcast-rel">
			</aside>
		</section>
		<section class="content">
			<section id="noticia-principal">
			</section>
			<aside id="noticias-rel">
			</aside>
		</section>
	</div>
	<footer>
		
	</footer>
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>
