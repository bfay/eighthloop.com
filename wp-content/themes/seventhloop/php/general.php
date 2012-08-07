<?php
// Spark v1.0
// Note: All function_exists() checks allow override in child-theme.

// Spark theme setup
add_action('after_setup_theme', 'spark_setup');
if (!function_exists('spark_setup')) {
    function spark_setup() {

        // Ready for internationalization (i18n)
	    load_theme_textdomain('spark', get_template_directory().'/locales');

		$locale = get_locale();
		$locale_file = get_template_directory().'/locales/$locale.php';
		if (is_readable($locale_file)) {
			require_once($locale_file);
		}

		// Feed links support
		add_theme_support('automatic-feed-links');

		// Custom-menus support
		add_theme_support('menus');
		register_nav_menus(array(
			'top-menu-landing-page'   => __('Top menu on the landing-page', 'spark'),
			'top-menu-regular-pages'  => __('Top menu on regular pages', 'spark')
/*			'menu-for-shortcode-one'  => __('Shortcode Menu 1 - [menu menu=1]', 'spark'),
			'menu-for-shortcode-two'  => __('Shortcode Menu 2 - [menu menu=2]', 'spark'),
			'menu-for-shortcode-three'=> __('Shortcode Menu 3 - [menu menu=3]', 'spark'),
			'menu-for-shortcode-four' => __('Shortcode Menu 4 - [menu menu=4]', 'spark'),
			'menu-for-shortcode-five' => __('Shortcode Menu 5 - [menu menu=5]', 'spark') */
			)
		);
		
		// Add sample data
		$spark_status = get_option('spark_setup_status');
		// Check if the theme has not yet been used
		if ($spark_status !== '1' ) {

			// Create sample pages
			$aPages = array();
			$aPages['home'] = array(
				'post_title' => 'Spark Home',
				'post_content' => file_get_contents(get_template_directory().'/php/others/sample-data/Home.txt'),
				'post_status' => 'publish',
				'post_type' => 'page',
				'comment_status' => 'closed',
				'post_author' => 1
			);
			$aPages['features'] = array(
				'post_title' => 'Spark Features',
				'post_content' => file_get_contents(get_template_directory().'/php/others/sample-data/Features.txt'),
				'post_status' => 'publish',
				'post_type' => 'page',
				'comment_status' => 'closed',
				'post_author' => 1
			);
			$aPages['prices'] = array(
				'post_title' => 'Spark Prices',
				'post_content' => file_get_contents(get_template_directory().'/php/others/sample-data/Prices.txt'),
				'post_status' => 'publish',
				'post_type' => 'page',
				'comment_status' => 'closed',
				'post_author' => 1
			);
			$aPages['contact'] = array(
				'post_title' => 'Spark Contact',
				'post_content' => file_get_contents(get_template_directory().'/php/others/sample-data/Contact.txt'),
				'post_status' => 'publish',
				'post_type' => 'page',
				'comment_status' => 'closed',
				'post_author' => 1
			);				
			$aPages['footer'] = array(
				'post_title' => 'Spark Footer',
				'post_content' => file_get_contents(get_template_directory().'/php/others/sample-data/Footer.txt'),
				'post_status' => 'publish',
				'post_type' => 'page',
				'comment_status' => 'closed',
				'post_author' => 1
			);
			
			// Insert the pages into the database
			foreach($aPages as $page) {
				wp_insert_post($page);
			}
			  
			// Once done, we register our setting to make sure we don't duplicate everytime we activate.
			update_option( 'spark_setup_status', '1' );
			$msg = '
			<div class="updated">
				<p>Spark was successfully installed and sample pages were created.</p>
			</div>';
			add_action('admin_notices', $c = create_function( '', 'echo "' . addcslashes( $msg, '"' ) . '";' ));
		}
		
		
		// Else if we are re-activing the theme
		elseif ( $spark_status === '1' and isset( $_GET['activated'] ) ) {
			$msg = '
			<div class="updated">
				<p>Spark was successfully re-activated.</p>
			</div>';
			add_action('admin_notices', $c = create_function( '', 'echo "' . addcslashes( $msg, '"' ) . '";' ));
		}
    }
}


add_action('init', 'spark_gzip_compression');
function spark_gzip_compression() {
	
	global $spark_options;
	
	if ($spark_options['spark_performance_mode'] == "Speed") {
		// don't use on TinyMCE
		if (stripos($_SERVER['REQUEST_URI'], 'wp-includes/js/tinymce') !== false) {
			return false;
		}
		
		// can't use zlib.output_compression and ob_gzhandler at the same time
		if ((ini_get('zlib.output_compression') == 'On' || ini_get('zlib.output_compression_level') > 0 ) || ini_get('output_handler') == 'ob_gzhandler') {
			return false;
		}

		if (extension_loaded('zlib')) {
			ob_start('ob_gzhandler');
		}
	}
}


// Spark Widgets Areas (see shortcodes.php, simple usage: [widgets area=one])
add_action('widgets_init', 'spark_widgets');
if (!function_exists('spark_widgets')) {
	function spark_widgets() {

		$numbers_words = array('zero','one','two','three','four','five','six','seven','eight','nine','ten');

		for ($i = 1; $i <= 10; $i++) { // 10 widgets area
			register_sidebar(array(
				'name' => __('Widgets Area '.ucfirst($numbers_words[$i]), 'spark'),
				'description' => __('Add this widgets area to any page using this shortcode: [widgets area='.$numbers_words[$i].']', 'spark'),
				'id' => 'widgets-area-'.$numbers_words[$i],
				'before_title' => '<div class="widgets-title widgets-area-'.$numbers_words[$i].'">',
				'after_title' => '</div>',
				'before_widget' => '<div class="one-third column widgets-container widgets-area-'.$numbers_words[$i].'">',
				'after_widget' => '</div>'
			));
		}
	}
}

// Don't show the admin bar in frontend
add_filter('show_admin_bar', '__return_false');

// Custom admin footer in backend
add_filter('admin_footer_text', 'spark_custom_admin_footer');
if (!function_exists('spark_custom_admin_footer')) {
	function spark_custom_admin_footer () {
		echo 'Thank you for creating with WordPress <em>and Spark</em>.';
	}
}

// WordPress MultiSite support (for TimThumb)
function spark_fix_image_path($theImageSrc) {

	global $blog_id;
	if (isset($blog_id) && $blog_id > 0) {
		$imageParts = explode('/files/', $theImageSrc);
		if (isset($imageParts[1])) {
			$theImageSrc = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
		}
	}
	return $theImageSrc;
}

// Adds Spark's version, usefull for debug requests
add_action('wp_head', 'spark_debug_info');
if (!function_exists('spark_debug_info')) {
	function spark_debug_info() {
		$theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
		echo "<!-- Debug info: {$theme_data['Name']} {$theme_data['Version']} --> \n";
	}
}

// Spark Hooks
function spark_footer_hook() {
    do_action('spark_footer_hook');
}


// Image-widget custom template
add_filter('sp_template_image-widget_widget.php', 'spark_image_widget_custom_template_filter');
function spark_image_widget_custom_template_filter($template) {
    return get_template_directory() . '/php/others/image-widget/widget.php';
}
add_filter('sp_template_image-widget_widget-admin.php', 'spark_image_widget_custom_admin_template_filter');
function spark_image_widget_custom_admin_template_filter($template) {
    return get_template_directory() . '/php/others/image-widget/widget-admin.php';
}



/**
 * Breadcrumb Lists
 * Allows visitors to quickly navigate back to a previous section or the root page.
 *
 * Courtesy of Dimox
 *
 * bbPress compatibility patch by Dan Smith
 */
function spark_breadcrumb_lists() {
  
  $chevron = '<span class="chevron">&#8250;</span>';
  $home = 'Home'; // text for the 'Home' link
  $before = '<span class="breadcrumb-current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div class="breadcrumb-list">';
 
    global $post;
    $homeLink = home_url();
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $chevron . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $chevron . ' '));
      echo $before . __('Archive for ','responsive') . single_cat_title('', false) . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $chevron . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $chevron . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $chevron . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $chevron . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $chevron . ' ');
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $chevron . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $chevron . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $chevron . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . __('Search results for ','responsive') . get_search_query() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . __('Posts tagged ','responsive') . single_tag_title('', false) . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . __('All posts by ','responsive') . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . __('Error 404 ','responsive') . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page','responsive') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
} 

/**
 * Filter 'get_comments_number'
 * 
 * Filter 'get_comments_number' to display correct 
 * number of comments (count only comments, not 
 * trackbacks/pingbacks)
 *
 * Courtesy of Chip Bennett
 */
add_filter('get_comments_number', 'spark_comment_count', 0);
function spark_comment_count( $count ) {  
	if ( ! is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}

// check the current post for the existence of a short code  
function has_shortcode($shortcode = '') {  

	$post_to_check = get_post(get_the_ID());  

	// false because we have to search through the post content first
	$found = false;  

	// if no short code was provided, return false
	if (!$shortcode) {  
		return $found;  
	}  
	// check the post content for the short code  
	if ( stripos($post_to_check->post_content, '[' . $shortcode) !== false ) {  
		// we have found the short code  
		$found = true;  
	}  

	return $found;
}

// Check if we need to surround the post with a <div class="sixteen columns"> to correct content aligning
function has_columns() {

	if (   has_shortcode('fullwidth-column')  || has_shortcode('one-third-column') 
		|| has_shortcode('two-thirds-column') || has_shortcode('pricing_column') 
		|| has_shortcode('icon') ) {
		return true;
	}
	
	return false;
}