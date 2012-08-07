<?php


// Smart way of including CSS
if (!is_admin()) {
	add_action('wp_print_styles', 'spark_enqueue_css'); // The correct WordPress way to add CSS files.
	add_action('wp_head',  'spark_output_css'); // Custom <style> tag output to support Spark Speed mode (CSS minify/merge/cache).
	add_filter('print_styles_array', 'spark_print_styles_override'); // Prevent WordPress from outputing its own <style> tags for previously enqueued styles.
}

if (!function_exists('spark_enqueue_css')) {
	function spark_enqueue_css() {
	 
	  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton-v1.1.css', array(), '1.1', 'all');
	  wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider-v1.8.1.css', array(), '1.8.1', 'all');
	  wp_enqueue_style('spark-main', get_template_directory_uri() . '/css/main-r8.css', array('skeleton', 'flexslider'), '8', 'all');
	  wp_enqueue_style('media-queries', get_template_directory_uri() . '/css/media-queries-r7.css', array('skeleton'), '7', 'all');
	  wp_enqueue_style('spark-theme-default', get_template_directory_uri() . '/css/theme-default-r6.css', array('spark-main'), '6', 'all');
	}
}

if (!function_exists('spark_print_styles_override')) {
	function spark_print_styles_override($css_array) {

			global $spark_options;

			if ($spark_options['spark_performance_mode'] == "Speed") {

				// Speed Mode activated: prevent default WP's CSS inclusion, and provide a minified-merged-cached-gzipped version instead (see spark_output_css).
				$skeleton_key = array_search( 'skeleton', $css_array );
				$flexslider_key = array_search( 'flexslider', $css_array );
				$spark_main_key = array_search( 'spark-main', $css_array );
				$media_queries_key = array_search( 'media-queries', $css_array );
				$spark_theme_default_key = array_search( 'spark-theme-default', $css_array );

				unset($css_array[$skeleton_key]);
				unset($css_array[$flexslider_key]);
				unset($css_array[$spark_main_key]);
				unset($css_array[$media_queries_key]);
				unset($css_array[$spark_theme_default_key]);
			}
		 
			return $css_array; 
	}
}

if (!function_exists('spark_output_css')) {
	function spark_output_css() {

			global $spark_options;

			// Provide Speed Mode support
			if ($spark_options['spark_performance_mode'] == "Speed") {
				echo '<!-- [Speed mode activated] - If you encounter problems loading the following URL, revert back to the Default mode in the Theme Options page. -->'."\n";
				echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/static-server/min-merge-cache.php?format=css&files=skeleton-v1.1.css,flexslider-v1.8.1.css,main-r8.css,media-queries-r7.css,theme-default-r6.css">'."\n";
			} else {
				echo '<!-- [Default mode] - Go to the Theme Options page to activate Speed mode, it\'ll merge and minify all those CSS. -->'."\n";
			}
	}
}

