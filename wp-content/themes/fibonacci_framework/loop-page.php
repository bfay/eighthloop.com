<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'fibonacci'), 'after' => '</p></nav>' )); ?>
<?php endwhile; // End the loop ?>