<?php get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<h1><?php _e('File Not Found', 'eighthloop'); ?></h1>
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'eighthloop'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'eighthloop'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'eighthloop'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'eighthloop'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'eighthloop'); ?></li>
				</ul>
			</div>

		</div><!-- End Content row -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>