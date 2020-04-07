<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	
	<!-- push on file functions.php -->
	<?php wp_head(); ?>

	<!-- -color of the flap, chrome mobile -->
	<meta name="theme-color" content="#5f88bc">
	<!-- -color of the flap, safari mobile -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#5f88bc">
	<!---color of the flap, WPhone mobile -->
	<meta name="msapplication-navbutton-color" content="#5f88bc">
  
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="index, nofollow">
	
	<!-- use to get icons by to be another lib -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-custom"> -->
			<div class="container">
        <a class="navbar-brand" href="#">DAVI<span>WP</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- <div class="collapse navbar-collapse navbar-collapse-custom" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
        </div> -->

        <?php require_once('assets/includes/wp_bootstrap_navwalker.php') ?>
        <?php
          wp_nav_menu( array(
              'menu'            => 'Menu',
              'theme_location'  => 'menu-header', // name on function php
              'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse navbar-collapse-custom',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class'      => 'navbar-nav mr-auto mt-2 mt-lg-0',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
        ?>

			</div>
		</nav>
</div>
