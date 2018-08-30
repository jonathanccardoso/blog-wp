<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4-col-lg-4">
				<?php 
			    $args = array('post_type'=>'page]','pagename'=>'sobre')
			    $my_sobre = get_posts( $args );
			    if($my_sobre) : foreach($my_sobre as $post) : setup_postdata( $post );
			     ?>
					
					<?php the_excerpt(); ?>

				<?php 
			    	endforeach;
			    	endif;
			     ?>
			</div> 
			
			<div class="col-md-4-col-lg-4">
			
			</div> 
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>