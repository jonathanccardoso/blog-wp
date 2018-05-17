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
		<div class="wrap">
			<!--titulo sempre h1-->
			<h1><a href="<?php echo site_url(); ?>" title="<?php blog_info('name'); ?>">BLOGWP</a></h1>
			<div class="infor">
				<h2>skfafnfnsjnfdknfdofjdfn</h2>
				<p>skfafnfnsjnfdknfdofjdfnskfafnfnsjnfdknfdofjdfnskfafnfnsjnfdknfdofjdfn
				skfafnfnsjnfdknfdofjdfnskfafnfnsjnfdknfdofjdfn</p>
				<a href="#" class="custom-botao">Leia Mais</a>
			</div>
		</div>
	</div>

