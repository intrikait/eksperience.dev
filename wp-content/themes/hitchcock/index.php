<?php get_header(); ?>

<div class="content section-inner">																                   
	
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$total_post_count = wp_count_posts();
		$published_post_count = $total_post_count->publish;
		$total_pages = ceil( $published_post_count / $posts_per_page );
		
		if ( "1" < $paged ) : ?>
		
			<div class="page-title">
			
				<h4><?php printf( __('Page %s of %s', 'hitchcock'), $paged, $wp_query->max_num_pages ); ?></h4>
				
			</div> <!-- /page-title -->
			
			<div class="clear"></div>
		
		<?php endif; ?>
	
		<div class="posts" id="posts">

 	    	<?php 
 	    		$args = array( 'post_type' => 'moment', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
	    			get_template_part( 'content', get_post_format() ); 
	    		endwhile; ?>
	        
	        <div class="clear"></div>
				
		</div> <!-- /posts -->
			
	<div class="clear"></div>
	
	<?php hitchcock_archive_navigation(); ?>
		
</div> <!-- /content -->
	              	        
<?php get_footer(); ?>