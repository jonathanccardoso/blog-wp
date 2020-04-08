<?php get_header(); ?>
    
<div class="header-internas">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>	
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if( have_posts() ) : while( have_posts()) :	the_post();
                ?>
                    <?php the_content(); ?>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div>
            <div class="col-md-4">
                <?php 
                    if( have_posts() ) : while( have_posts()) :	the_post();
                ?>
                    <?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div>
        </div>	
    </div>
</div>

<?php get_footer(); ?>