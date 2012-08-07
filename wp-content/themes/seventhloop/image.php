<?php

// Spark
// Release: 1.0

?>
<?php get_header(); ?>

<article>
	<div class="container">
        
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<?php echo spark_breadcrumb_lists(); ?>
          
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <p><?php _e('&#8249; Return to', 'spark'); ?> <a href="<?php echo get_permalink($post->post_parent); ?>" rel="gallery"><?php echo get_the_title($post->post_parent); ?></a></p>

                <div class="post-meta">
                <?php 
                    printf( __( '<span class="%1$s">Posted on</span> %2$s by %3$s', 'spark' ),'meta-prep meta-prep-author',
		            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			            get_permalink(),
			            esc_attr( get_the_time() ),
			            get_the_date()
		            ),
		            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			            get_author_posts_url( get_the_author_meta( 'ID' ) ),
			        sprintf( esc_attr__( 'View all posts by %s', 'spark' ), get_the_author() ),
			            get_the_author()
		                )
			        );
		        ?>
				    <?php if ( comments_open() ) : ?>
                        <span class="comments-link">
                        <span class="mdash">&mdash;</span>
                    <?php comments_popup_link(__('No Comments &darr;', 'spark'), __('1 Comment &darr;', 'spark'), __('% Comments &darr;', 'spark')); ?>
                        </span>
                    <?php endif; ?> 
                </div><!-- end of .post-meta -->
                                
                <div class="attachment-entry">
                    <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a>
					<?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?>
                    <?php the_content(__('Read more &#8250;;', 'spark')); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'spark'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->

               <div class="navigation">
	               <div class="previous"><?php previous_image_link( 'thumbnail' ); ?></div>
			      <div class="next"><?php next_image_link( 'thumbnail' ); ?></div>
		       </div><!-- end of .navigation -->
                        
                <?php if ( comments_open() ) : ?>
                <div class="post-data">
				    <?php the_tags(__('Tagged with:', 'spark') . ' ', ', ', '<br />'); ?> 
                    <?php the_category(__('Posted in %s', 'spark') . ', '); ?> 
                </div><!-- end of .post-data -->
                <?php endif; ?>             

            <div class="post-edit"><?php edit_post_link(__('Edit', 'spark')); ?></div>             
            </div><!-- end of #post-<?php the_ID(); ?> -->
            
			<?php comments_template( '', true ); ?>
            
        <?php endwhile; ?>  

	    <?php else : ?>

	<h1><?php _e('Page not found', 'spark'); ?></h1>
	<p><?php _e('This page is unavailable, it might have been deleted or worse: it could have never existed!', 'spark'); ?></p>
	<h6><?php _e('One suggestion would be that you go back', 'spark'); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e('Home', 'spark'); ?>"><?php _e('Home', 'spark'); ?></a></h6>
	<?php // get_search_form(); ?>

<?php endif; ?>  
      
	</div>
</article>

<?php get_footer(); ?>