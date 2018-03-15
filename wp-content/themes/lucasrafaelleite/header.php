<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="<?= get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?= get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
	<section class="site">
		<div class="container">
			<div class="row">
				<div class="col-md-4 lateral">
					<header>
						<img src="<?= get_template_directory_uri(); ?>/img/desenvolvedor-frontend-bauru-lucasrafaelleite.jpg">
						<h1>Lucas Rafael Leite</h1>
						<h2>Desenvolvedor Front-end</h2>
						<nav class="menu">
							<?php
								wp_nav_menu( array(
									'menu' => 'Menu Lateral'
								));
							?>
						</nav>
						<div class="social">
							<ul>
								<li><a href="http://www.fb.com.br/lucasrafaelleite" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
								<li><a href="https://www.linkedin.com/in/lucas-rafael-bb758069/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="https://github.com/lucasrafaelleite" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</header>
				</div>
		