<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php blog_info( 'stylesheet_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500i,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom"><!--navbar-custom => customizando navbar-->
		  <a class="navbar-brand" href="#">BLOG<span>WP</span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse navbar-collapse-custom" id="navbarSupportedContent">
		    <ul class="navbar-nav navbar-right mr-auto">
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">CONTATO</a></li>
		    </ul>
		  </div>
		</nav>
	</div>
	<div class="slider">
		<img class="img-responsive" src="<?php blog_info('template_directory'); ?>/assets/images/slider-01">		 
	</div>