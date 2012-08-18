<?php
/*
* @package WordPress
* @subpackage Divine
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://gmpg.org/xfn/11">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link href="<?php bloginfo('template_directory'); ?>/color-fill-14.png" type="image/png" rel="shortcut icon" />
	<link href="<?php bloginfo('template_directory'); ?>/color-fill-14.png" type="image/png" rel="icon" />
	<?php
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
        wp_head();
    ?>
	<script src="<?php bloginfo('template_directory'); ?>/jQuery.backgroundPosition.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/billboard.js" type="text/javascript"></script>

    <link rel="stylesheet" href = "<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php global $div_ec, $div_ap; $div_ec->Head(); ?>

 </head>
 <body <?php body_class( $class ); ?>>

 <?php global $div_ec, $div_ap; $div_ec->Body(); ?>

 <!-- start Header -->
 <div class="header-stretch-warp">
  <div class="header-stretch-bottom">
   <div class="header-stretch-top">
    <div class="header-grid"><!-- Header -->
     <div class="clear-both">
      <a href="http://www.facebook.com/" class="facebook" title="Facebook"></a>
      <a href="http://twitter.com/" class="twitter" title="Twitter"></a>
      <a href="#" class="rss" title="Rss"></a>
      <a href="#" class="link" title="Link"><span class="link-n6">//</span><span class="link-nbsp"> &nbsp; </span><span class="link-about">ABOUT</span>
      </a>
      <a href="#" class="link-n1" title="Link"><span class="link-n7">//</span><span class="link-nbsp-n1"> &nbsp; </span><span class="link-folio">FOLIO</span>
      </a>
      <a href="<?php bloginfo('home'); ?>" class="logo" title="Logo">Brave<em>&amp;</em>Bold</a>
      <a href="#" class="link-n2" title="Link"><span class="link-n8">//</span><span class="link-nbsp-n2"> &nbsp; </span><span class="link-blog">BLOG</span>
      </a>
      <a href="#" class="link-n3" title="Link"><span class="link-n9">//</span><span class="link-nbsp-n3"> &nbsp; </span><span class="contacts">CONTACTS</span>
      </a>
      <p class="text-n8" title="Text">Create. Inspire. Believe.</p>
      <div class="text" title="Text">
       <p class="we-build-brand-loyalty-through">We build brand loyalty through</p>
       <p class="great-customer-experiences">great customer experiences.</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- end Header -->


 <!-- start Content -->
 <div class="content-stretch-warp">
  <div class="content-stretch-bottom">
   <div class="content-stretch-top">