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
      <h1 class="post-title" title="Post title"><?php the_title(); ?></h1>
      <div class="post-text"><?php echo $post->post_content; ?></div>
      <div class="clear-both"></div>
      <?php comments_template( '', true ); ?>
     </div>
    </div>    
<?php
      get_footer();
    ?>