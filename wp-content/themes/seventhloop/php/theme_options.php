<?php


// Get Spark Theme Options (user-defined, replaced with default values if empty)
if (!function_exists('get_spark_options')) {
	function get_spark_options(){

		// Array of default values (used only if user-defined values are empty)
		$spark_options_default_values = array(
			'spark_logo' => 'http://8images.eighthloop.com/loop-logo-100.png',
			'spark_logo_mobile' => 'http://8images.eighthloop.com/loop-logo-60.png',
			'spark_welcome_title' => '<h1>Make it Yours</h1>',
			'spark_welcome_text' => __('<p>Designed with the latest technologies and most advanced techniques, this one-page website loads lightning-fast!</p>
										<p class="hide-for-mobile">The layout focus on usability, it offers enterprise-level features, design quality,
											technical implementation, compatibility, accessibility and performance.
										</p>','spark'),
			'spark_main_button_url' => '#features',
			'spark_main_button_text' => __('Check Out The Features','spark'),
			'spark_main_slider' => array(
									0 => array(
										'order' => 0,
										'title' => '',
										'image' => get_bloginfo('template_url').'/images/slides/performance.jpg',
										'link'  => '',
										'description' => ''
										),
									1 => array(
										'order' => 1,
										'title' => '',
										'image' => get_bloginfo('template_url').'/images/slides/crossbrowser.jpg',
										'link'  => '',
										'description' => ''
										),
									2 => array(
										'order' => 2,
										'title' => '',
										'image' => get_bloginfo('template_url').'/images/slides/html5.jpg',
										'link'  => '',
										'description' => ''
										)
									),
			'spark_favicon_img' 		=> get_bloginfo('template_url').'/images/favicon.ico',
			'spark_apple_touch_icon'	=> get_bloginfo('template_url').'/images/apple-touch-icon.png',
			'spark_apple_touch_icon_72'	=> get_bloginfo('template_url').'/images/apple-touch-icon-72x72.png',
			'spark_apple_touch_icon_114'=> get_bloginfo('template_url').'/images/apple-touch-icon-114x114.png',
			'spark_menu' => 'Auto'
		);

		if (function_exists('get_option')) {
			$spark_options = stripslashes_deep(get_option('option_tree'));
			
			foreach($spark_options_default_values as $key => $value) {
				// If the user-defined value is empty we replace it with default value.
				$spark_options[$key] = (!empty($spark_options[$key])) ? $spark_options[$key] : $spark_options_default_values[$key];
			}

		} else { // OptionTree plugin is probably missing: let's use default values.
			$spark_options = $spark_options_default_values;
		}
		
		return $spark_options;
	}
}



// Spark backend (OptionTree) - Slider manager
add_filter( 'image_slider_fields', 'spark_slider_fields', 10, 2 );
if (!function_exists('spark_slider_fields')) {
	function spark_slider_fields( $image_slider_fields, $id ) {
	  if ( $id == 'spark_main_slider' ) {
		$image_slider_fields = array(
		  array(
			'name'  => 'image',
			'type'  => 'text',
			'label' => 'Image URL',
			'class' => ''
		  ),
		  array(
			'name'  => 'link',
			'type'  => 'text',
			'label' => '(Optional) Link URL',
			'class' => ''
		  ),
		  array(
			'name'  => 'description',
			'type'  => 'textarea',
			'label' => '(Optional) Caption',
			'class' => ''
		  )
		);
	  } 
	  
	  else if ( $id == 'spark_sections' ) {
		$image_slider_fields = array(
		  array(
			'name'  => 'subtitle',
			'type'  => 'text',
			'label' => '<strong>Subtitle</strong> (used for the Top Menu, make it short)',
			'class' => ''
		  ),
		  array(
			'name'  => 'title_inpage',
			'type'  => 'text',
			'label' => 'Title (appears in the Section)',
			'class' => ''
		  ),
		  array(
			'name'  => 'subtitle_inpage',
			'type'  => 'text',
			'label' => 'Subtitle (appears in the Section)',
			'class' => ''
		  ),
		  array(
			'name'  => 'pageid',
			'type'  => 'text',
			'label' => 'ID or Title of the page to display in this section',
			'class' => ''
		  ),
		  array(
			'name'  => 'sectionurl',
			'type'  => 'text',
			'label' => '(Optional) ID to display in the Address-bar (URL) for this section (It must start with a letter, be unique, it can contain numbers and dashes)',
			'class' => ''
		  )
		);
	  }
	  
	  return $image_slider_fields;
	}
}



// Adds some inline CSS for the admin Theme Options page
add_action('admin_head', 'spark_admin_css');
if (!function_exists('spark_admin_css')) {
	function spark_admin_css() {

		$template_path = get_template_directory_uri();
		echo '<style>
				/* Customize Header Logo */
				#framework_wrap #header div.version {
					display: none;
				}
				#framework_wrap #header h1 {
					background: url('.$template_path.'/images/logo-admin.png) 0px -25px;
				}
				/* Hide the layout bar */
				#framework_wrap #content_wrap div.top-layout-bar {
					display: none;
				}
				#framework_wrap #content_wrap .info.is-option-page {
					height: 35px;
				}
				#framework_wrap form#the-theme-options input.reset {
					display: none;
				}
			 </style>';
	}
}

// Adds some inline JS for the admin Theme Options page
add_action('admin_footer', 'spark_admin_js');
if (!function_exists('spark_admin_js')) {
	function spark_admin_js() {

		$template_path = get_template_directory_uri();
		echo <<<INLINEJS
		'<script>
				(function ($) {
				
					function spark_js() {
						$("a#spark_sections").text("Add Section");
						$("ul#spark_sections_list input.option-tree-slider-title").parent("p").find("label").html("<strong>Title</strong> (used for the Top Menu, make it short)");
						$("#spark_main_slider_list input.option-tree-slider-title").parent("p").hide();
					}	
				
					$(document).ready(function () { 
						spark_js(); 
							
						$("input#spark_performance_mode_1").parent("div").after("<div class='input_wrap'><h4>Clear Server Cache</h4><p>Hit this button if you made changes to the CSS or javascript files.</p><input class='button-framework' value='Clear Server Cache' id='spark-clear-cache-button' type='button' /></div>");
						
						$("#spark-clear-cache-button").click(function(e){
							e.preventDefault();
							
							$.ajax({
								url: '{$template_path}/static-server/clear-cache.php',
								success: function(data) {
									//$('.result').html(data);
									$('.ajax-message').ajaxMessage('<div class="message"><span>&nbsp;</span>Cache cleared</div>');
								}
							});
							
						});

					});
					$(document).ajaxComplete(function () { spark_js(); });
				})(jQuery);
			 </script>';
INLINEJS;
	}
}
 