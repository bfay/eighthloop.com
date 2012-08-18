    <?php
      get_header();
    ?>
    <div class="divine-content">
     <div class="sidebar-grid"><!-- Sidebar -->
      <div class="clear-both">
       <?php get_sidebar(); ?>
      </div>
     </div>
     <div class="post-grid"><!-- Post -->
      <?php if(have_posts()): while(have_posts()): the_post(); $temp = the_date('', '', '', ''); if(!isset($the_date) || $temp) $the_date = $temp; ?>
      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="row-n16">
         <h1 class="post-title" title="Post title">
          <a href="<?php the_permalink(); ?>">
           <?php the_title(); ?>
          </a>
         </h1>
         <a href="<?php the_permalink(); ?>#comments" class="comments-count">
          <?php echo get_comments_number(); ?>
         </a>
         <div class="clear-both"></div>
        </div>
        <div class="row-n17">
         <div class="post-author">
          <span>Author: <?php list(,$last_name) = explode(' ', get_the_author(), 2); if($last_name){ echo $last_name; } else{ echo get_the_author(); } ?></span>
         </div>
         <div class="clear-both"></div>
        </div>
        <div class="row-n18">
         <div class="post-date">
          <span><?php echo( date( "D j", strtotime($post->post_date) ) ); ?></span>
         </div>
         <div class="clear-both"></div>
        </div>
        <div class="row-n19">
         <div class="post-text">
          <?php the_content( 'READ MORE' ); ?>
         </div>
         <div class="clear-both"></div>
        </div>
        <div class="row-n20">
         <div class="categories" title="Categories">
          <?php echo the_elemente_categories( array( 'before' => __(''), 'after' => __(''), 'separator' => __(', '), 'hierarchy_separator' => __('"'), 'limit' => 1, 'hierarchy_limit' => 1 ) ); ?>
         </div>
         <div class="clear-both"></div>
        </div>
        <div class="row-n21">
         <div class="tags" title="Tags">
          <?php echo the_elemente_tags( array( 'before' => __(''), 'after' => __(''), 'separator' => ', ', 'limit' => 1000, 'before_tag' => '', 'after_tag' => '' ) ); ?>
         </div>
         <div class="clear-both"></div>
        </div>
        <div class="row-n22">

         <?php if ( !is_single() ): ?>
         <a href="<?php the_permalink(); ?>#comments" class="comment-link" title="Comment link">
          <span><?php comments_number('Comment(s)', 'Comment(s)', 'Comment(s)'); ?></span>
         </a>
         <?php endif; ?>

         <div class="clear-both"></div>
        </div>
        <div class="row-n23">

         <?php if ( !is_single() && IsTextHasReadMore( $post, $pages ) ): ?>
         <a href="<?php echo (get_permalink() . '#more-' . $post->ID); ?>" class="read-more" title="Read more">
          READ MORE</a>
         <?php endif; ?>

         <div class="clear-both"></div>
        </div>
        <div class="row-n24">

         <?php if ( is_single() ): ?>
         <div class="pagination" title="Pagination">
          <?php echo the_elemente_link_pages( array( 'link_type' => 'mixed', 'before_link' => '<span style="padding: 0 .25em;">', 'after_link' => '</span>', 'previous_link' => '&lt;&lt; '.__('Previous'), 'next_link' => __('Next').' &gt;&gt;' ) ); ?>
         </div>
         <?php endif; ?>

         <div class="clear-both"></div>
        </div>
        <div class="row-n25">

         <?php if ( !is_single() ): ?>
         <a href="#" class="separator" title="Separator"></a>
         <?php endif; ?>

         <div class="clear-both"></div>
        </div>
        <div class="clear-both"></div>
      </div>
      <?php comments_template(); ?>
      <?php endwhile; ?>
      <div class="row-n29">
       <div class="previous" title="Previous">
        <?php if ( is_single() ){ previous_post_link( '%link', '&lt;&lt; %title' ); } else {  next_posts_link( '<span class="meta-nav">&larr;</span> Older posts' ); } ?>
       </div>
       <div class="next" title="Next">
        <?php if ( is_single() ){ next_post_link( '%link', '%title &gt;&gt;' ); } else { previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ); } ?>
       </div>
       <div class="clear-both"></div>
      </div>
      <?php else: ?><span></span>
      <?php endif; ?>
     </div>
    </div>    
<?php
      get_footer();
    ?>