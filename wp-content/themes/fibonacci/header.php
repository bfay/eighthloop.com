<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/foundation.css">
	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
 
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	<meta name="keywords" content="foundation, design, frameworks, framework, css framework, html framework, html5, 	css3, SASS, SCSS, compass, responsive, design, hybrid responsive web design, modernizr, categorizr, selectivizr, how to build a website" />
	<meta name="author" content="Byron Fay">
	<meta name="Copyright" content="©Byron Fay 2007-2012. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Learning to Build a Hybrid Responsive Website Design (HRWD)">
	<meta name="DC.subject" content="A web designer & developer full of youthful exuberance and curiousity which cannot be satisfied">
	<meta name="DC.creator" content="Byron Fay">   
	
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	
	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple_icon_72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple_icon_114.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple_icon_58.png" />
	
	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/apple_icon_58.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/ipad_landscape_loading.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/ipad_portrait_loading.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/iphone_load.png" media="screen and (max-device-width: 320px)" />
	
	<script type="text/javascript" src="//use.typekit.net/dpy2wej.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<header>
    <div class="row">
      <div class="twelve columns">
          
        <nav class="show-for-small">This fucking worked!</nav>
        
        <nav class="hide-for-small">      
          <ul class="hiphop jump dim">
                          
            <li class="item">
              <a href="front-page"><img class="image" src="/images/home.png" alt="Home Icon"></a>
              <img class="shadow" src="/images/shadow.png" alt="shadow">
              <a href="front-page" class="more">Home</a>
            </li>
                              
            <li class="item">
              <a href="/articles"><img class="image" src="/images/articles.png" alt="Articles Icon"></a>
              <img class="shadow" src="/images/shadow.png" alt="shadow">
              <a href="/articles" class="more">Articles</a>
            </li>
            
           <li class="icon">
            <img src="/images/iconx200.png" alt="Logo">
            </li>
                          
            <li class="item">
              <a href="/about"><img class="image" src="/images/about.png" alt="About Icon"></a>
              <img class="shadow" src="/images/shadow.png" alt="shadow">
              <a href="/about" class="more">About</a>
            </li>
              
            <li class="item">
              <a href="/contact"><img class="image" src="/images/contact.png" alt="Contact Icon"></a>
              <img class="shadow" src="/images/shadow.png" alt="shadow">
              <a href="/contact" class="more">Contact</a>
            </li>
                                          
          </ul> <!--end hiphop-->
          </nav>
         </div><!--end columns-->
                          
		</div><!--end row-->
		
