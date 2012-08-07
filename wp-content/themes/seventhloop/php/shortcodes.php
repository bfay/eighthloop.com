<?php

// Spark Shortcodes

// Fix for a known WP issue with shortcode and autop (http://core.trac.wordpress.org/ticket/12061)
add_filter('the_content', 'shortcode_empty_paragraph_fix');
function shortcode_empty_paragraph_fix($content) {   
	$array = array (
		'<p>[' => '[', 
		']</p>' => ']', 
		']<br />' => ']'
	);

	$content = strtr($content, $array);
	return $content;
}

// Process shortcodes within text widgets
add_filter('widget_text', 'do_shortcode');

// Visual separator like an <hr /> tag
// Usage: [separator], optional "class" attribute.
add_shortcode ('separator', 'separator_shortcode');
function separator_shortcode($atts, $content = null){
    return '
<div class="bottom-gradient '.$atts['class'].'">
	<span class="left"></span>
	<span class="center"></span>
	<span class="right"></span>
</div>
';
}

// Give the user the power to include widgets areas anywhere
// Usage: [widgets area=one]
add_shortcode ('widgets', 'spark_widgets_shortcode');
function spark_widgets_shortcode($atts, $content = null){
	ob_start();
	dynamic_sidebar('widgets-area-'.$atts['area']);
	$sidebar_contents = ob_get_clean();
	return '<div class="row">'.$sidebar_contents.'</div>';
	// Todo: add a notice if widgets area is empty with a link to the widget page. ## WIP ##
}

// Button
add_shortcode ('button', 'spark_button_shortcode');
function spark_button_shortcode($atts, $content = null){
    $extra_class = ($atts['featured']) ? 'featured' : '';
    $extra_class.= ($atts['url'][0] =='#') ? ' animate' : ''; // Internal link?
    return '<a href="'.$atts['url'].'" class="button '.$extra_class.'">'.$content.'</a>';
}

// Columns
add_shortcode ('fullwidth-column', 'spark_fullwidth_column_shortcode');
function spark_fullwidth_column_shortcode($atts, $content = null){
    return '<div class="sixteen columns'.$atts['class'].'">'.do_shortcode($content).'</div>';
}
add_shortcode('half-column', 'spark_half_column_shortcode');
function spark_half_column_shortcode($atts, $content = null){
    return '<div class="eight columns '.$atts['class'].'">'.do_shortcode($content).'</div>';
}
add_shortcode('one-third-column', 'spark_one_third_column_shortcode');
function spark_one_third_column_shortcode($atts, $content = null){
    return '<div class="one-third column '.$atts['class'].'">'.do_shortcode($content).'</div>';
}
add_shortcode('two-thirds-column', 'spark_two_thirds_column_shortcode');
function spark_two_thirds_column_shortcode($atts, $content = null){
    return '<div class="two-thirds column '.$atts['class'].'">'.do_shortcode($content).'</div>';
}
add_shortcode('row', 'spark_row_shortcode');
function spark_row_shortcode($atts, $content = null){
   return '<div class="row '.$atts['class'].'">'.do_shortcode($content).'</div>';
}

// Lists
/* 
Usage: 
	[ul class="disc]
		[li]First element[/li]
		[li]Second element[/li]
	[/ul]
*/
add_shortcode('ul', 'spark_ul_shortcode');
add_shortcode('li', 'spark_li_shortcode');
function spark_ul_shortcode($atts, $content = null){
	$ul_class = (!empty($atts['class'])) ? $atts['class'] : 'disc';
    return '<ul class="'.$ul_class.'">'.do_shortcode($content).'</ul>';
}
function spark_li_shortcode($atts, $content = null){
   return '<li class="'.$atts['class'].'">'.do_shortcode($content).'</li>';
}


// Tabs
add_shortcode('tabs-container', 'spark_tabs_container_shortcode');
add_shortcode('tab', 'spark_tab_shortcode');
function spark_tabs_container_shortcode($atts, $content){
	$GLOBALS['spark_tabs_count'] = 0;
	$i=0;
	do_shortcode($content);

	if (is_array($GLOBALS['spark_tabs'])) {
		foreach($GLOBALS['spark_tabs'] as $tab){
			$i++;
			$active_class = ($i == 1) ? 'active' : '';
			$tabs[] = '<li><a class="'.$active_class.'" href="#tab-'.$i.'">'.$tab['title'].'</a></li>';
			$panes[] = '<li class="'.$active_class.'" id="tab-'.$i.'">'.do_shortcode($tab['content']).'</li>';
		}
	$return = '<ul class="tabs">'.implode( "\n", $tabs ).'</ul>';
	$return.= '<ul class="tabs-content">'.implode( "\n", $panes ).'</ul>';
	
	}
	return $return;
}
function spark_tab_shortcode($atts, $content){
	extract(shortcode_atts(array('title' => 'Tab %d'), $atts));

	$i = $GLOBALS['spark_tabs_count'];
	$GLOBALS['spark_tabs'][$i] = array(
				'title'   => sprintf(str_replace('%', ' ', $title), $GLOBALS['spark_tabs_count']), 
				'content' => $content);
				
	$GLOBALS['spark_tabs_count']++;
}

// Pricing box Shortcode
/* Usage:
[pricing_column featured=1 display_four_columns=0 icon="black/compass_icon&48.png" title="Example" currency="€" amount=35 amount_detail="/mo"]

	[pricing_column 
		featured=1
		display_four_columns=1
		icon="black/example_icon.png" 
		title="Example" 
		currency="€" 
		amount=35 
		amout_detail="/mo"]
			<p>This section offers great possibilities to compare plans, products, subscriptions or to just price your services in a clear and distinguish way.</p>
			[ul]
				[li]SEO Optimised[/li]
				[li]Browser History[/li]
			[/ul]
			[button featured url="#"]Sign Up[/button]
	[/pricing_column]		
*/
add_shortcode ('pricing_column', 'spark_pricing_column_shortcode');
function spark_pricing_column_shortcode($atts, $content = null){

	ob_start();
	?>
		<div class="<?php echo ($atts['display_four_columns']) ? 'four columns' : 'one-third column'; ?> <?php echo ($atts['featured']) ? 'box light featured' : '' ?>">
			<div class="headset price clearfix">
				<img src="<?php bloginfo('template_url'); ?>/images/icons/<?php echo (!empty($atts['icon'])) ? $atts['icon'] : 'black/message_attention_icon&48.png'; ?>" alt="" />
				<h4><?php echo (!empty($atts['title'])) ? $atts['title'] : _('Untitled'); ?></h4>
				<?php if (!empty($atts['amount'])) : ?>
				<span>
					<sup><?php echo (!empty($atts['currency'])) ? $atts['currency'] : '$' ?></sup><?php echo $atts['amount']; ?><sub><?php echo $atts['amount_detail']; ?></sub>
				</span>
				<?php endif; ?>
			</div>
			<div class="bottom-gradient add-top add-bottom">
				<span class="left"></span>
				<span class="center"></span>
				<span class="right"></span>
			</div>
			<?php echo do_shortcode($content); ?>
		</div><!-- .columns -->
	<?php 
	return ob_get_clean();
}

// Adds an icon floating on the left ot the content
// Usage: [icon icon="" bigtitle=1]<p>My content here...</p>[/icon]
add_shortcode('icon-column', 'spark_icon_column_shortcode');
function spark_icon_column_shortcode($atts, $content = null){

	$content = do_shortcode($content);
	
	switch ($atts['column']) {
	case 'one-third':
	case 'one-thirds':
		$column = 'one-third column';
		break;
	case 'two-third':
	case 'two-thirds':
		$column = 'two-thirds column';
		break;
	case 'half':
		$column = 'eight columns';
		break;
	case 'full':
	case 'fullwidth':
		$column = 'sixteen columns';
		break;
	case 'quarter':
	case 'one-fourth':
		$column = 'four columns';
		break;
	default:
		$column = 'one-third column';
	}
	
	//ob_start();
	$return = '
		<div class="'.$column.' headset">
			<img src="'.get_bloginfo('template_url').'/images/icons/'.((!empty($atts['icon'])) ? $atts['icon'] : 'black/message_attention_icon&48.png').'" alt="" />';
	$return.= (($atts['bigtitle']) ? '<h3>'.$atts['title'].'</h3>' : '<h4>'.$atts['title'].'</h4>'); 
	$return.= ((substr(trim($content),0,3) == '<p>') ? $content : '<p>'.$content.'</p>'); // Always round the content with a <p> for this specific shortcode
	$return.= '</div>';

	//	return ob_get_clean();
	return $return;
}

// Content sliders
add_shortcode('slides-container', 'spark_slides_container_shortcode');
add_shortcode('slide', 'spark_slide_shortcode');
function spark_slides_container_shortcode($atts, $content = null) {

	$slider_options = (!empty($atts['animation'])) ? ' animation-'.strtolower($atts['animation']) : ''; // "slide" or "fade"
	$slider_options.= (!empty($atts['animation_speed'])) ? ' animation-speed-'.strtolower($atts['animation_speed']) : ''; // "fast" or "slow"
	$slider_options.= (!empty($atts['delay_between_slides'])) ? ' delay-between-slides-'.strtolower($atts['delay_between_slides']) : ''; // "short" or "long"
	$slider_options.= ($atts['hide_controls']) ? ' hide-controls' : '';
	
   return '<div class="flexslider'.$slider_options.' '.$atts['class'].'"><ul class="slides notloaded">'.do_shortcode($content).'</ul></div>';
}
function spark_slide_shortcode($atts, $content = null){
   return '<li class="'.$atts['class'].'">'.do_shortcode($content).'</li>';
}

// Resonsive video embed
add_shortcode('video', 'spark_video_shortcode');
function spark_video_shortcode($atts, $content = null){
	
	$content = html_entity_decode($content, ENT_NOQUOTES, 'UTF-8');
	$content = wp_kses_decode_entities($content);
	$content = strtr($content, array("″" => "\"", "“" => "\"", "”" => "\""));
	
	return '<div class="video '.$atts['class'].'">'.$content.'</div>';
}

// Spark Welcome Screen (text + slider)
// Defined in ThemeOptions page
add_shortcode('welcome-block', 'spark_welcome_block_shortcode');
function spark_welcome_block_shortcode() {

	global $spark_options;
	
	switch ($spark_options['spark_layout_color']) {
	case 'Contrasted':
		$color_class = 'dark';
		break;
	case 'Black':
		$color_class = 'dark light';
		break;
	case 'White':
		$color_class = 'light';
		break;
	}

	$fullwidth = ($spark_options['spark_slider_width'] == 'Fullwidth') ? true : false;
	$animation = ($spark_options['spark_main_slider_animation'] == 'Slide') ? ' animation-slide' : '';
	$animation.= ($spark_options['spark_main_slider_animation_speed'] !== 'Default') ? ' animation-speed-'.strtolower($spark_options['spark_main_slider_animation_speed']) : '';
	$animation.= ($spark_options['spark_main_slider_delay_between_slides'] !== 'Default') ? ' delay-between-slides-'.strtolower($spark_options['spark_main_slider_delay_between_slides']) : '';
	$animation.= ($spark_options['spark_main_slider_controls'] == 'Hide') ? ' hide-controls' : '';
	
	ob_start();
	?>	
		<div class="row box <?php echo $color_class; ?>">
			<?php if (!$fullwidth) : ?>
			<div class="seven columns">
				<div class="welcome-container">
				<?php echo $spark_options['spark_welcome_title']; ?>
				<?php echo $spark_options['spark_welcome_text']; ?>
					<a href="<?php echo $spark_options['spark_main_button_url']; ?>" class="button featured animate">
						<?php echo $spark_options['spark_main_button_text']; ?>
					</a>			
				</div>
			</div>
			<?php endif; ?>
			
			<div class="<?php echo ($fullwidth) ? 'sixteen' : 'nine'; ?> columns">
				<div class="flexslider <?php echo $animation; ?>">
					<ul class="slides notloaded">
						<?php $slider_width = $fullwidth ? '940' : '520'; ?>
						<?php foreach($spark_options['spark_main_slider'] as $slide) : ?>	
							<li>
								<?php
									echo (!empty($slide['link'])) ? '<a href="'.$slide['link'].'">' : ''; // Link
									echo '<img src="'.get_bloginfo('template_url').'/php/others/timthumb/timthumb.php?src='.spark_fix_image_path($slide['image']).'&h=280&w='.$slider_width.'" alt="'.$slide['title'].'" />'; // Image
									echo (!empty($slide['link'])) ? '</a>' : ''; // Link
									echo (!empty($slide['description'])) ? '<p class="flex-caption"><span>'.$slide['description'].'</span></p>' : ''; // Caption
								?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>			
			</div>
		</div><!-- .row -->
	
	<?php
	return ob_get_clean();
}

// Contact form 
// Email address defined in ThemeOption page
add_shortcode('contact-form', 'spark_contact_form_shortcode');
function spark_contact_form_shortcode() {
	
	$template_url_path = get_bloginfo('template_url');
	$return = <<<FORM
	
		<form action="{$template_url_path}/php/others/ajax.php" method="post" class="send-with-ajax">
			
			<div class="row">
				<div class="three columns alpha">
					<label for="form-name">Your Name <span>required</span></label>
				</div>
				<div class="seven columns omega">
					<input type="text" name="name" id="form-name" placeholder="Your Name" required="required" />
				</div>
			</div>

			<div class="row">
				<div class="three columns alpha">
					<label for="form-email">Your Email <span>email required</span></label>
				</div>
				<div class="seven columns omega">	
					<input type="email" name="email" id="form-email" placeholder="your@email.com" required="required" />
				</div>
			</div>

			<div class="row">			
				<div class="three columns alpha">
					<label for="form-message">Message</label>
				</div>
				<div class="seven columns omega">	
					<textarea name="message" id="form-message"></textarea>
				</div>
			</div>
			
			<div class="seven columns offset-by-three">
				<button type="submit">Submit Form</button>
				<div class="ajax-response"></div>
			</div>
		
		</form>
FORM;

	return $return;
}


// Menus
// ## WIP ##






