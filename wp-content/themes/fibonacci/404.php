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
       <h1 class="post-title">Hmm, the page are you looking for can`t be found.</h1>
       <br />
       <div class="post-text">
        <div><?php get_search_form(); ?></div>
        <div class="clear_both"></div>
        <br />
        <div>Did you try searching? Enter a keyword(s) in the search field above. Or, try one of the links below.</div>
        <?php $pages = $childrens = get_pages(); foreach($pages as $page): ?>
         <?php if(!$page->post_parent): ?>
          <div style="float: left;padding:10px 30px 10px 0;">
           <div><strong><a href="<?php bloginfo('url'); ?>/<?php echo $page->post_name; ?>"><?php echo $page->post_title; ?></a></strong></div>
           <?php foreach($childrens as $children): ?>
            <?php if($children->post_parent == $page->ID): ?>
             <div><a href="<?php bloginfo('url'); ?>/<?php echo $children->post_name; ?>"><?php echo $children->post_title; ?></a></div>
            <?php endif; ?>
           <?php endforeach; ?>
          </div>
         <?php endif; ?>
        <?php endforeach; ?>
       </div>
       <div class="clear_both"></div>
     </div>
    </div>    
<?php
      get_footer();
    ?>