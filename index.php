<?php get_header(); ?>

<div class="slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	<?php 
		    	/*  'post_type'=>'slider' porque no functions.php (registro custom post type slider) é mandado o registro para 'slider' 
				showposts é qnt de sliders
		    	*/
		    	$args = array('post_type'=>'slider','showposts'=>5)
		    	$my_slider = get_posts( $args );
		    	$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		     ?>	
		    	<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li> 
		    <?php 
		    	$count ++ ;
		    	endforeach;
		    	endif;
		     ?>
		  </ol>
		  <div class="carousel-inner">
		    <?php 
		    	$cout = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		     ?>		    

				<div class="carousel-item <?php if($cout == 0) echo "active"; ?>">
			      <?php the_post_thumbmail('full'); ?>
			      <div class="carousel-caption d-none d-md-block">
				    <h2><?php the_title(); ?></h2>
				    <a class="leia-mais" href="<?php the_field('link_do_slider'); ?>">LEIA MAIS</a>
				  </div>
			    </div>

		    <!--<div class="carousel-item active">
		      <img class="d-block w-100" src="<?php bloginfo('template_directory') ?>/assets/images/slider-01.jpg" alt="First slide">
		      <div class="carousel-caption d-none d-md-block">
			    <h2>lorem Ypssumlorem Ypssum lorem Ypssumlorem Ypssum lorem Ypssum lorem Ypssum</h2>
			    <a class="leia-mais" href="#">LEIA MAIS</a>
			  </div>
		    </div>-->

		    <?php 
		    	$cont ++ ;
		    	endforeach;
		    	endif;
		     ?>

		    <!--<div class="carousel-item">
		      <img class="d-block w-100" src="<?php bloginfo('template_directory') ?>/assets/images/slider-02.jpg" alt="Second slide">
		      <div class="carousel-caption d-none d-md-block">
			    <h2>lorem Ypssumlorem Ypssum lorem Ypssumlorem Ypssum lorem Ypssum lorem Ypssum</h2>
			    <a class="leia-mais" href="#">LEIA MAIS</a>
			  </div>
		    </div>-->
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
</div>

<div class="servicos">
	<div class="container">
		<div class="row">
			<!--sempre automatizar os editores!-->
			<?php 
		    	$args = array('post_type'=>'servicos','showposts'=>3)
		    	$my_servicos = get_posts( $args );
		    	if($my_servicos) : foreach($my_servicos as $post) : setup_postdata( $post );
		     ?>

				<div class="col-md-4-col-lg-4">
					<i class="<?php the_field('icones'); ?>"></i>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?><!--the_excerpt(); -> resumo do texto-->
				</div>

			<?php 
		    	endforeach;
		    	endif;
		     ?>

			<!--<div class="col-md-4-col-lg-4">
				<i class=""></i>
				<h2>sjahkagfkdfdjfh</h2>
				<p>sskbasdsfhdjhasjhsss sdsajkdhsd ssdhsadssj asdjhss dss ssdsajsds</p>
			</div>
			<div class="col-md-4-col-lg-4">
				<i class=""></i>
				<h2>sjahkagfkdfdjfh</h2>
				<p>sskbasdsfhdjhasjhsss sdsajkdhsd ssdhsadssj asdjhss dss ssdsajsds</p>
			</div>-->
		</div>
	</div>
</div>

<div class="sobre">
	<div class="container">
		<div class="row">
			<?php 
		    	$args = array('post_type'=>'page]','pagename'=>'sobre')
		    	$my_sobre = get_posts( $args );
		    	if($my_sobre) : foreach($my_sobre as $post) : setup_postdata( $post );
		     ?>
		     	
				<div class="col-md-12-col-lg-12">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="col-md-6-col-lg-6">
					<?php the_content(); ?>
				</div>
				<div class="col-md-6-col-lg-6">
					<?php the_post_thumbmail(false, array('class'=>'img-responsive')); ?>
				</div>

			<?php 
		    	endforeach;
		    	endif;
		     ?>
		</div>
	</div>
</div>

<div class="blog">
	<div class="container">
		<h2 class="the_title-blog">BLOG</h2>
		<div class="row">
			<?php 
		    	$args = array('post_type'=>'post','showposts'=>3)
		    	$my_post = get_posts( $args );
		    	if($my_post) : foreach($my_post as $post) : setup_postdata( $post );
		     ?>
 
				<div class="col-md-4-col-lg-4">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbmail(false,array('class'=>'img-responsive')); ?></a>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</div>

			<?php 
		    	endforeach;
		    	endif;
		     ?>
		     <div class="clear">
		     	<div class="link"><a href="leia-mais">VEJA TODOS</a></div>
		     </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>