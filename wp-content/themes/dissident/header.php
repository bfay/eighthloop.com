<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
    <!-- Start the main container -->

    <div id="container" class="container" role="document">
        <div class="row">
            <header class="twelve columns main-nav" role="navigation">
                <!-- Row for blog navigation -->

                <div class="initials left"><img src="http://cdn.images.eighthloop.com/eighthloop-logo.png" alt="Byron Fay Initials"></div>

                <nav class="nav-bar right" role="navigation">
                    <div class="hiphop jump dim centered">
                        <div class="item">
                            <a href="front-page"><img class="image" src="http://cdn.images.eighthloop.com/home-icon.png" alt="Home Icon"></a> <img class="shadow" src="http://cdn.images.eighthloop.com/shadow.png" alt="shadow"> <a href="front-page" class="more">Home</a>
                        </div>

                        <div class="item">
                            <a href="/home"><img class="image" src="http://cdn.images.eighthloop.com/articles-icon.png" alt="Articles Icon"></a> <img class="shadow" src="http://cdn.images.eighthloop.com/shadow.png" alt="shadow"> <a href="/home" class="more">Articles</a>
                        </div>

                        <div class="item">
                            <a href="/contact"><img class="image" src="http://cdn.images.eighthloop.com/mail-icon.png" alt="Contact Icon"></a> <img class="shadow" src="http://cdn.images.eighthloop.com/shadow.png" alt="shadow"> <a href="/contact" class="more">Contact</a>
                        </div>
                    </div><!--end hiphop-->
                </nav>
            </header>
        </div><!--  !end header row  -->