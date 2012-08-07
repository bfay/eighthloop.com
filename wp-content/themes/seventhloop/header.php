<?php

// Spark - Header

// Grab all Spark theme options
global $spark_options;
$spark_options = get_spark_options();
$layout_color_class = ($spark_options['spark_layout_color'] == 'Black') ? 'dark' : '';
$is_home_class = (is_home()) ? ' landing-page' : '';
	

?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php 
		if(!empty($spark_options['spark_landing_page_title']) && is_home()) {
			echo $spark_options['spark_landing_page_title'];
		} else {
			wp_title('&#124;', true, 'right'); bloginfo('name'); 
		} 
	?></title>
	
	<meta name="description" content="<?php echo $spark_options['spark_meta_desc']; ?>">
	<meta name="author" content="<?php echo $spark_options['spark_meta_author']; ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	<?php if ($spark_options['spark_color_scheme'] !== 'Blue') : ?>
		<?php 
		switch ($spark_options['spark_color_scheme']) {
			case "Custom":
				$menu_txt_color = $spark_options['spark_custom_color_txt_menu'];
				$menu_border_color = $spark_options['spark_custom_color_border_menu'];
				$content_links_color = $spark_options['spark_custom_color_links'];
				$content_links_color_dark = $spark_options['spark_custom_color_links_dark'];
				break;
			case "Green":
				$menu_txt_color = '#729e31';
				$menu_border_color = '#90d42a';
				$content_links_color = '#6e9c28';
				$content_links_color_dark = '#7db031';
				break;
			case "Orange":
				$menu_txt_color = '#db8121';
				$menu_border_color = '#fa8405';
				$content_links_color = '#c77e30';
				$content_links_color_dark = '#db8121';
				break;
			case "Red":
				$menu_txt_color = '#db2121';
				$menu_border_color = '#fa0505';
				$content_links_color = '#c73030';
				$content_links_color_dark = '#e02828';
				break;
			case "Black":
				$menu_txt_color = '#888';
				$menu_border_color = '#e0e0e0';
				$content_links_color = '#828282';
				$content_links_color_dark = '#c7c7c7';
				break;
			default:
				$menu_txt_color = '#2f96d8';
				$menu_border_color = '#37b1ff';
				$content_links_color = '#0b81be';
				$content_links_color_dark = '#37b1ff';
		}
		?>
		<style>
			/* Active menu link */
			nav a.active,
			nav a.active:focus,
			nav li.current-menu-item a,
			nav li.current-menu-item a:focus,
			.dark nav a.active,
			.dark nav a.active:focus,
			.dark nav li.current-menu-item a,
			.dark nav li.current-menu-item a:focus {
				color: <?php echo $menu_txt_color; ?>;
				border-top-color: <?php echo $menu_border_color; ?>;
			}
			nav a.active:hover,
			nav li.current-menu-item a:hover,
			.dark nav a.active:hover,
			.dark nav li.current-menu-item a:hover {
				border-top-color: <?php echo $menu_border_color; ?>;
			}
						
			/* Content links */
			a, a:visited {color: <?php echo $content_links_color; ?>;}
			a:hover, a:focus {color: #000;}
			.dark a, .dark a:visited {color: <?php echo $content_links_color_dark; ?>;}
			.dark a:hover, .dark a:focus {color: #fff;}
		</style>
	<?php endif; ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic' rel='stylesheet' type='text/css'>
		
	<link rel="shortcut icon" href="<?php echo $spark_options['spark_favicon_img']; ?>">
	<link rel="apple-touch-icon" href="<?php echo $spark_options['spark_apple_touch_icon']; ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $spark_options['spark_apple_touch_icon_72']; ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $spark_options['spark_apple_touch_icon_114']; ?>">

	<!-- Allow IE to render HTML5 -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body <?php body_class($layout_color_class.$is_home_class); ?>>

	<div id="main" role="main">
	
		<header class="<?php echo $layout_color_class; ?>">
			<div class="container">
				<h1 class="logo one-third column alpha">
					<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
						<img src="<?php echo $spark_options['spark_logo']; ?>" alt="<?php bloginfo('name'); ?>" class="scale-with-grid" />
						<img src="<?php echo $spark_options['spark_logo_mobile']; ?>" alt="<?php bloginfo('name'); ?>" class="scale-with-grid mobile-only" /><!-- Alternative image for mobile devices -->
					</a>
				</h1>

				<nav class="menu two-thirds column omega">
				
					<?php if ($spark_options['spark_menu'] == 'Auto') : // Construct the menu automatically ?>
						<ul class="nav">
							<?php if(is_array($spark_options['spark_sections'])) : ?>
								<?php foreach($spark_options['spark_sections'] as $section) : ?>	
									<?php if (!empty($section['pageid'])) : ?>
									<li>
										<a href="<?php echo (!is_home()) ? home_url('/') : ''; ?>#<?php echo (!empty($section['sectionurl'])) ? $section['sectionurl'] : 'section-'.$section['pageid']; ?>"><?php echo $section['title']; ?><br /><span><?php echo $section['subtitle']; ?></span></a>
									</li>
									<?php endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						
					<?php elseif ($spark_options['spark_menu'] == 'Manual') : // Use the user-defined menu ?>					
						<?php 
						// Get the menu
						$menu_location = is_home() ? 'top-menu-landing-page' : 'top-menu-regular-pages';
						wp_nav_menu(array(
						 'container'	=> false,
						 'menu_class' 	=> 'nav',
						 'echo' 		=> true,
						 'before' 		=> '',
						 'after' 		=> '',
						 'link_before'  => '',
						 'link_after' 	=> '',
						 'depth' 		=> 1,
						 'theme_location'=> $menu_location,
						 'walker' 		=> new spark_menu_walker())
						 );
						 ?>
					 <?php endif; ?>
				</nav>
			</div><!-- .container -->

			<?php echo do_shortcode('[separator]'); ?>
		</header>
   
