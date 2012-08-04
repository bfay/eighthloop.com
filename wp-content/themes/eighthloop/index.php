<?php get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'index'); ?>
			</div>
			
			<div class="divider"> <img src="http://8images.eighthloop.com/divider.png"></div>

		</div><!-- End Content row -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>