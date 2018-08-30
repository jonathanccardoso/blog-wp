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
				    <a class="leia-mais" href="#">LEIA MAIS</a>
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
			<div class="col-md-4-col-lg-4">
				<i class=""></i>
				<h2>sjahkagfkdfdjfh</h2>
				<p>sskbasdsfhdjhasjhsss sdsajkdhsd ssdhsadssj asdjhss dss ssdsajsds</p>
			</div>
			<div class="col-md-4-col-lg-4">
				<i class=""></i>
				<h2>sjahkagfkdfdjfh</h2>
				<p>sskbasdsfhdjhasjhsss sdsajkdhsd ssdhsadssj asdjhss dss ssdsajsds</p>
			</div>
			<div class="col-md-4-col-lg-4">
				<i class=""></i>
				<h2>sjahkagfkdfdjfh</h2>
				<p>sskbasdsfhdjhasjhsss sdsajkdhsd ssdhsadssj asdjhss dss ssdsajsds</p>
			</div>
		</div>
	</div>
</div>












<?php get_footer(); ?>