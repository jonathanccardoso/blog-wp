<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!---color of the flap, chrome mobile -->
	<meta name="theme-color" content="#5f88bc">
	<!---color of the flap, safari mobile-->
	<meta name="apple-mobile-web-app-status-bar-style" content="#5f88bc">
	<!---color of the flap, WPhone mobile-->
	<meta name="msapplication-navbutton-color" content="#5f88bc">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- remove maximização -->
  	<meta name="robots" content="index, nofollow">
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom"><!--navbar-custom => customizando navbar-->
		  <a class="navbar-brand" href="#">BLOG<span>WP</span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		<!-- Tudo foi otimazado!
		  <div class="collapse navbar-collapse navbar-collapse-custom" id="navbarSupportedContent">
		    <ul class="navbar-nav navbar-right mr-auto">
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">CONTATO</a></li>
		    </ul>
		  </div> -->

		  <?php require_once('assets/includes/wp_bootstrap_navwalker.php') ?>
		  <?php 
			  wp_nav_menu( array(
					'theme_location'  => 'menu-header',
					'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse navbar-collapse-custom',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav navbar-right mr-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
 			?>
		</nav>
	</div>
