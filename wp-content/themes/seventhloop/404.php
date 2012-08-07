<?php
// Spark - 404 error page

get_header(); ?>

	<article>
        <div class="container">
			<?php
			if (!empty($spark_options['spark_404_page'])) {
				$notfound_page_data = get_page($spark_options['spark_404_page']);
				echo apply_filters('the_content', $notfound_page_data->post_content);
				
			} else {
			?>
				<h1><?php _e('Page Not Found', 'spark'); ?></h1>
				<p><?php _e('This page is unavailable, it might have been deleted or worse: it could have never existed!', 'spark'); ?></p>
				<h6><?php _e('One suggestion would be that you go back', 'spark'); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e('Home', 'spark'); ?>"><?php _e('Home', 'spark'); ?></a></h6>
				<?php // get_search_form(); ?>
			<?php } ?>
		</div>
	</article>

<?php get_footer(); ?>