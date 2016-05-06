<?php get_header(); ?>

<div class="content section-inner">
											        
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class('single single-post'); ?>>
			
			<div class="post-container">
				
				<?php $post_format = get_post_format(); ?>
				
				<?php if ( $post_format == 'gallery' ) : ?>
				
					<div class="featured-media">	
		
						<?php hitchcock_flexslider('post-image'); ?>
						
						<div class="clear"></div>
						
					</div> <!-- /featured-media -->
					
				<?php elseif ( has_post_thumbnail() ) : ?>
						
					<div class="featured-media">
			
						<?php the_post_thumbnail('post-image'); ?>
						
					</div> <!-- /featured-media -->
						
				<?php endif; ?>
				
				<div class="post-header">
					
					<p class="post-date"><?php echo types_render_field("start-date", array("style"=>"text","format"=>"M j, Y")) ?> - <?php echo types_render_field("end-date", array("style"=>"text","format"=>"M j, Y")) ?></p>
					
					<h1 class="post-title"><?php the_title(); ?></h1>

					<h3 class="adventure-location"><?php echo types_render_field("location", array()); ?></h3>
					
				</div>
				
				<div class="post-inner">
					    
				    <div class="post-content">

				    	<?php the_content(); ?>

				    	<?php

							$args = array(
								'post_type' => 'moment',
								'posts_per_page' => -1,
								'post_status' => 'publish',
								'order' => 'ASC',
								'post_parent' => $post->ID
							);
							$loop = new WP_Query( $args ); 
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<h3><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
								<?php echo the_title(); ?></a></h3>
							<?php endwhile; ?>
				    
				    	<p class="adventure-story"><?php echo types_render_field("story", array()); ?></p>
				    
				    </div> <!-- /post-content -->
				    
				    <div class="clear"></div>
				    
				    <?php 
				    	$args = array(
							'before'           => '<div class="page-links"><span class="title">' . __( 'Pages:','hitchcock' ) . '</span>',
							'after'            => '<div class="clear"></div></div>',
							'link_before'      => '<span>',
							'link_after'       => '</span>',
							'separator'        => '',
							'pagelink'         => '%',
							'echo'             => 1
						);
			    	
			    		wp_link_pages($args); 
					?>
					
					<div class="post-meta">
				
						<?php if (has_category()) : ?>
							<p class="categories">
								<?php _e('In','hitchcock'); ?> <?php the_category(', '); ?>
							</p>
						<?php endif; ?>
						<?php if (has_tag()) : ?>
							<p class="tags">
								<?php the_tags('', ' '); ?>
							</p>
						<?php endif; ?>
						
						<?php edit_post_link('Edit Post', '<p class="post-edit">', '</p>'); ?>
	
					</div> <!-- /post-meta -->
					
					<?php
						$prev_post = get_previous_post();
						$next_post = get_next_post();
					?>
					
					<div class="post-navigation">
						
						<?php
						if (!empty( $prev_post )): ?>
							
							<a class="post-nav-prev" title="<?php echo esc_attr( get_the_title($prev_post) ); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">					
								<p><?php _e('Next','hitchcock'); ?><span class="hide"> <?php _e('Post','hitchcock'); ?></span></p>
								<span class="fa fw fa-angle-right"></span>
							</a>
					
						<?php endif; ?>
					
						<?php
						if (!empty( $next_post )): ?>
						
							<a class="post-nav-next" title="<?php echo esc_attr( get_the_title($next_post) ); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">
								<span class="fa fw fa-angle-left"></span>
								<p><?php _e('Previous','hitchcock'); ?><span class="hide"> <?php _e('Post','hitchcock'); ?></span></p>
							</a>
						<?php endif; ?>
						
						<div class="clear"></div>
					
					</div> <!-- /post-navigation -->
				
				</div> <!-- /post-inner -->
				
				<?php comments_template( '', true ); ?>
			
			</div> <!-- /post-container -->
			
		</div> <!-- /post -->
		
	</div> <!-- /content -->
	
	<?php hitchcock_related_posts(); ?>
		
   	<?php endwhile; else: ?>

		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "hitchcock"); ?></p>
	
	<?php endif; ?>    

</div> <!-- /content -->
		
<?php get_footer(); ?>