<?php
/**
 * @package LayerSlider WP
 * @version 2.0.0
 */
/*

Plugin Name: LayerSlider WP
Plugin URI: http://codecanyon.net/user/kreatura/
Description: WordPress plugin for LayerSlider
Version: 2.0.0
Author: Kreatura Media
Author URI: http://kreaturamedia.com/
*/

/********************************************************/
/*                        Actions                       */
/********************************************************/
	
	// Link content resources
	add_action('wp_enqueue_scripts', 'layerslider_enqueue_content_res');

	// Link admin resources
	add_action('admin_enqueue_scripts', 'layerslider_enqueue_admin_res');

	// Register custom settings menu
	add_action('admin_menu', 'layerslider_settings_menu');
	
	// Widget action
	add_action( 'widgets_init', create_function( '', 'register_widget("LayerSlider_Widget");' ) );
	
	// Init LayerSlider
	add_action('wp_head', 'layerslider_js');

	// Add admin ajax actions
	if(is_admin()) {
		add_action('wp_ajax_layerslider_removeslider', 'layerslider_removeslider');
	}

	// Add shortcode
	add_shortcode("layerslider","layerslider_init");

/********************************************************/
/*               Enqueue Content Scripts                */
/********************************************************/
	
	function layerslider_enqueue_content_res() {

		wp_enqueue_script('layerslider_js', plugins_url('/js/layerslider.kreaturamedia.jquery-min.js', __FILE__), array('jquery'), '2.0.0' );
		wp_enqueue_script('layerslider_easing', plugins_url('/js/jquery-easing-1.3.js', __FILE__), array('jquery'), '2.0.0' );
		wp_enqueue_style('layerslider_css', plugins_url('/css/layerslider.css', __FILE__), array(), '2.0.0' );
	}


/********************************************************/
/*                Enqueue Admin Scripts                 */
/********************************************************/

	function layerslider_enqueue_admin_res() {
		
		if(strstr($_SERVER['REQUEST_URI'], 'layerslider')) {

			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			
			wp_enqueue_script('jquery-ui-tabs');
			wp_enqueue_script('jquery-ui-sortable');
			wp_enqueue_script('jquery-ui-draggable');

			wp_enqueue_script('layerslider_admin_js', plugins_url('/js/layerslider_admin.js', __FILE__), array('jquery'), '2.0.0' );
			wp_enqueue_style('layerslider_admin_css', plugins_url('/css/layerslider_admin.css', __FILE__), array(), '2.0.0' );
		}
	}


/********************************************************/
/*                 Loads settings menu                  */
/********************************************************/
function layerslider_settings_menu() {

	//create new top-level menu
	add_menu_page('LayerSlider WP', 'LayerSlider WP', 'administrator', __FILE__, 'layerslider_settings_page');

	//call register settings function
	add_action( 'admin_init', 'layerslider_register_settings' );
}


/********************************************************/
/*                  Register settings                   */
/********************************************************/
function layerslider_register_settings() {
	
	// Save settings
	if(isset($_POST['posted']) && strstr($_SERVER['REQUEST_URI'], 'layerslider')) {

		// Get option
		$slides = get_option('layerslider-slides');
		$slides = empty($slides) ? array() : $slides;
		$slides = is_array($slides) ? $slides : unserialize($slides);
		
		// Add modifications
		$slides[ $_POST['sliderkey'] ] = layerslider_convert_urls($_POST['layerslider-slides']);

		// Add option if it is not extists yet
		if(get_option('layerslider-slides') === false) {
			add_option('layerslider-slides', serialize($slides));
		
		// Update option
		} else {
			update_option('layerslider-slides', serialize($slides));
		}
		
		// Redirect back
		//header('Location: '.$_SERVER['REQUEST_URI'].'');
		die();
	}

	// Import settings
	if(isset($_POST['import']) && strstr($_SERVER['REQUEST_URI'], 'layerslider')) {
		
		// Get option
		$slides = base64_decode($_POST['import']);
		
		// Test the serialized string
		$test = unserialize($slides);
		
		// Exit when the unserialization failes
		if(!is_array($test)) {
			die();
		}
		
		// Empty slides
		$slides = array();
		
		// Convert URLs
		foreach($test as $key => $val) {
			$slides[$key] = layerslider_convert_urls($val);
		}
		
		$slides = serialize($slides);
		
		// Add option if it is not extists yet
		if(get_option('layerslider-slides') === false) {
			add_option('layerslider-slides', $slides);
		
		// Update option
		} else {
			update_option('layerslider-slides', $slides);
		}
		
		// Redirect back
		//header('Location: '.$_SERVER['REQUEST_URI'].'');
		die();
	}
}


/********************************************************/
/*                Action to remove slider               */
/********************************************************/
function layerslider_removeslider() {

	// Get slider ID
	$key = (int) $_POST['key'];

	// Get option
	$slides = get_option('layerslider-slides');
	$slides = is_array($slides) ? $slides : unserialize($slides);
	
	// Remove the slider
	array_splice($slides, $key, 1);

	// Update settings
	update_option('layerslider-slides', serialize($slides));
	
	// Success
	die('SUCCESS');
}

/********************************************************/
/*                  Settings page HTML                  */
/********************************************************/
function layerslider_settings_page() {

	include(dirname(__FILE__).'/settings.php');

} 


/********************************************************/
/*                  LayerSlider JS                    */
/********************************************************/

function layerslider_js() {
	
	$slides = get_option('layerslider-slides');
	$slides = is_array($slides) ? $slides : unserialize($slides);
	$slides = empty($slides) ? array() : $slides;
	
	include(dirname(__FILE__).'/init.php');
}


/********************************************************/
/*                 LayerSlider init                  */
/********************************************************/

function layerslider_init($atts) {
	
	// Get slider ID
	$id = $atts['id'];
	$id = empty($id) ? 1 : $id;

	// Get slider data
	$slides = get_option('layerslider-slides');
	$slides = is_array($slides) ? $slides : unserialize($slides);
	$slides = $slides[($id-1)];
	
	// Include slider file
	include(dirname(__FILE__).'/slider.php');
	
	// Return data
	return $data;
}


function layerslider_check_unit($str) {
	
	if(strstr($str, 'px') == false && strstr($str, '%') == false) {
		return $str.'px';
	} else {
		return $str;
	}
}


function layerslider_convert_urls($arr) {

	// Iterate over the array and remove basehref from URLs
	foreach($arr['layers'] as $layerkey => $layer) {
		
		// Layer background
		if(strpos($layer['properties']['background'], 'http://') !== false) {

		    $arr['layers'][$layerkey]['properties']['background'] = parse_url($layer['properties']['background'], PHP_URL_PATH);
		}
		
		// Image sublayers
		foreach($layer['sublayers'] as $sublayerkey => $sublayer) {
		    
		    if($sublayer['type'] == 'img') {
		    	if(strpos($sublayer['image'], 'http://') !== false) {
		    		$arr['layers'][$layerkey]['sublayers'][$sublayerkey]['image'] = parse_url($sublayer['image'], PHP_URL_PATH);
		    	}
		    }
		}
	}

	return $arr;
}

/********************************************************/
/*                   Widget settings                    */
/********************************************************/

class LayerSlider_Widget extends WP_Widget {

	function LayerSlider_Widget() {
	
		$widget_ops = array( 'classname' => 'layerslider_widget', 'description' => __('Insert a slider with LayerSlider WP Widget', 'layerslider') );
		$control_ops = array( 'id_base' => 'layerslider_widget' );
		$this->WP_Widget( 'layerslider_widget', __('LayerSlider WP Widget', 'layerslider'), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );


		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		// Call layerslider_init to show the slider
		echo do_shortcode('[layerslider id="'.$instance['id'].'"]');
		
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['id'] = strip_tags( $new_instance['id'] );
		$instance['title'] = strip_tags( $new_instance['title'] );
		return $instance;
	}

	function form( $instance ) {

		$defaults = array( 'title' => __('LayerSlider', 'layerslider'));
		$instance = wp_parse_args( (array) $instance, $defaults );
		$slides = get_option('layerslider-slides');  
		$slides = is_array($slides) ? $slides : unserialize($slides);
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'id' ); ?>">Choose a slider:</label><br>
			<select id="<?php echo $this->get_field_id( 'id' ); ?>" name="<?php echo $this->get_field_name( 'id' ); ?>">
				<?php foreach($slides as $key => $val) : ?>
				<?php if(($key+1) == $instance['id']) { ?>
				<option value="<?php echo $key+1?>" selected="selected">LayerSlider #<?php echo $key+1?></option>
				<?php } else { ?>
				<option value="<?php echo $key+1?>">LayerSlider #<?php echo $key+1?></option>
				<?php } ?>
				<?php endforeach; ?>
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
		</p>


	<?php
	}
}

?>