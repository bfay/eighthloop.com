<?php
/*
 Spark - Footer
 Release: 1.0
*/

global $spark_options;

?>

	<?php if (!is_home() && is_numeric($spark_options['spark_footer_pageid'])) : // No footer on the landing-paga and if no pageid specified. ?>
		<footer>
			<div class="container">
		
				<?php
				$footer_page_data = get_page($spark_options['spark_footer_pageid']);
				echo apply_filters('the_content', $footer_page_data->post_content);
				?>

			</div>
		</footer>
	<?php endif; ?>


</div><!-- #main -->

<?php wp_footer(); ?>
<?php spark_footer_hook(); ?>
<?php echo $spark_options['spark_code_snippet']; ?>

</body>
</html>