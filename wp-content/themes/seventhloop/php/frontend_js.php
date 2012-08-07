<?php

// Smart way of including JS

// This method supports both wp_enqueue_script and custom output (for CDN fallback and Spark Speed mode support)
// This system still supports wp_enqueue_script standard behavior to avoid duplicate scripts when working with additionnal plugins ;)

if (!is_admin()) {
	add_action('wp_enqueue_scripts', 'spark_enqueue_js'); // The correct WordPress way to add JS files.
	add_action('wp_footer',  'spark_output_js'); // Custom <script> tag output to support Spark Speed mode (JS minify/merge/cache).
	add_filter('print_scripts_array', 'spark_print_scripts_override'); // Prevent WordPress from outputing its own <script> tags for previously enqueued scripts.
}

if (!function_exists('spark_enqueue_js')) {
	function spark_enqueue_js() {
	
		global $spark_options;
		
		// Put jQuery at the bottom and load it from CDN
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, '1.7.1', true);
		wp_enqueue_script('jquery');
		
		wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-v1.8.min.js', array('jquery'), '1.8', true);
		wp_enqueue_script('hashchange', get_template_directory_uri() . '/js/jquery.ba-hashchange-v1.3.min.js', array('jquery'), '1.3', true);
		wp_enqueue_script('spark-main', get_template_directory_uri() . '/js/main-r8.js', array('jquery'), null, true);
	}
}

if (!function_exists('spark_output_js')) {
	function spark_output_js() {

		global $spark_options;
		
		// Provide a local CDN fallback for jQuery (how could it be done using wp_enqueue_script? let me know: jonathan+sparkwp@maddim.com)
		echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>'."\n";
		echo '<!-- Local fallback for jQuery in case of CDN faillure -->'."\n";
		echo '<script>window.jQuery || document.write(\'<script src="'.get_template_directory_uri().'/js/jquery-1.7.1.min.js"><\/script>\')</script>'."\n";

		// Provide Speed Mode support
		if ($spark_options['spark_performance_mode'] == "Speed") {
			echo '<!-- [Spark Speed mode activated] - If you encounter problems loading the following URL, revert back to the Default mode in the Theme Options page. -->'."\n";
			echo '<script src="'.get_template_directory_uri().'/static-server/min-merge-cache.php?format=js&files=jquery.flexslider-v1.8.min.js,jquery.ba-hashchange-v1.3.min.js,main-r8.js"></script>';
		} else {
			echo '<!-- [Default mode] - Go to the Theme Options page to activate Spark Speed mode, it\'ll merge and minify all JS. -->'."\n";
		}
	}
}

if (!function_exists('spark_print_scripts_override')) {
	function spark_print_scripts_override($js_array) {
	
		global $spark_options;

		// Display jQuery our way and with CDN local fallback (see spark_output_js)
		$jquery_key = array_search( 'jquery', $js_array );
		unset($js_array[$jquery_key]);

		if ($spark_options['spark_performance_mode'] == "Speed") {

			// Speed Mode activated: prevent default WP's js inclusion, and provide a minified-merged-cached-gzipped version instead (see spark_output_js).
			$flexslider_key = array_search( 'flexslider', $js_array );
			$hashchange_key = array_search( 'hashchange', $js_array );
			$spark_main_key = array_search( 'spark-main', $js_array );

			unset($js_array[$flexslider_key]);
			unset($js_array[$hashchange_key]);
			unset($js_array[$spark_main_key]);
		}
	 
		return $js_array; 
	}
}
