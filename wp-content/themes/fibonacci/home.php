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

    <link rel="stylesheet" href = "<?php bloginfo('template_directory'); ?>/home_style.css" type="text/css" media="screen" />
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
      <div class="start-template-home-slides">
       <div id="start-template-home-slides">
        <?php if(function_exists('DivineBillboardShow')) DivineBillboardShow('start-template-home-slides'); ?>
       </div>
       <a href="javascript:void(0);" class="billboard-previous" onclick="OnPreviousSlideClick(this, 0);">
        <span class="billboard-previous-gt">&gt;</span>
       </a>
       <a href="javascript:void(0);" class="billboard-next" onclick="OnNextSlideClick(this, 0);">
        <span class="billboard-next-lt">&lt;</span>
       </a>
      </div>
      <a href="http://www.facebook.com/" class="facebook" title="Facebook"></a>
      <a href="http://twitter.com/" class="twitter" title="Twitter"></a>
      <a href="#" class="rss" title="Rss"></a>
      <a href="#" class="link" title="Link"><span class="link-n11">//</span><span class="link-nbsp"> &nbsp; </span><span class="link-about">ABOUT</span>
      </a>
      <a href="#" class="link-n1" title="Link"><span class="link-n12">//</span><span class="link-nbsp-n1"> &nbsp; </span><span class="link-folio">FOLIO</span>
      </a>
      <a href="<?php bloginfo('home'); ?>" class="logo" title="Logo">Brave<em>&amp;</em>Bold</a>
      <a href="#" class="link-n2" title="Link"><span class="link-n13">//</span><span class="link-nbsp-n2"> &nbsp; </span><span class="link-blog">BLOG</span>
      </a>
      <a href="#" class="link-n3" title="Link"><span class="link-n14">//</span><span class="link-nbsp-n3"> &nbsp; </span><span class="contacts">CONTACTS</span>
      </a>
      <p class="text" title="Text">Create. Inspire. Believe.</p>
      <div class="text-n1" title="Text">
       <p class="we-build-brand-loyalty-through">We build brand loyalty through</p>
       <p class="great-customer-experiences">great customer experiences.</p>
      </div>
      <p class="text-n2" title="Text"><span class="text-n17">//</span><span class="create"> CREATE</span></p>
      <p class="text-n3" title="Text"><span class="text-n18">//</span><span class="inspire"> INSPIRE</span></p>
      <p class="text-n4" title="Text"><span class="text-n19">//</span><span class="believe"> BELIEVE</span></p>
      <img alt="Image" class="image-n9" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-5.png" title="Image" />
      <img alt="Image" class="image-n10" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-4.png" title="Image" />
      <img alt="Image" class="image-n11" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-3.png" title="Image" />
      <div class="text-n5" title="Text">
       <p class="quisque-ultricies-leo-id-felis">Quisque ultricies leo id felis</p>
       <p class="porttitor-eu-sagittis-imperdiet">porttitor eu sagittis orci imperdiet.</p>
       <br />
       <p class="nulla-vitae-odio-quis-massa">Nulla vitae odio quis massa</p>
       <p class="condimentum-venenatis-quisque">condimentum venenatis. Quisque</p>
       <p class="ultricies-leo-id-felis-eu">ultricies leo id felis porttitor eu</p>
       <p class="sagittis-orci-imperdiet">sagittis orci imperdiet. </p>
      </div>
      <div class="text-n6" title="Text">
       <p class="nulla-vitae-odio-quis-massa-n1">Nulla vitae odio quis massa</p>
       <p class="condimentum-venenatis">condimentum venenatis.</p>
       <br />
       <p class="quisque-ultricies-leo-porttitor">Quisque ultricies leo id felis porttitor</p>
       <p class="eu-sagittis-orci-imperdiet-vitae">eu sagittis orci imperdiet. Nulla vitae</p>
       <p class="odio-quis-massa-condimentum">odio quis massa condimentum</p>
       <p class="venenatis">venenatis. </p>
      </div>
      <div class="text-n7" title="Text">
       <p class="quisque-ultricies-leo-felis-n1">Quisque ultricies leo id felis</p>
       <p class="porttitor-eu-imperdiet-n2"><strong>porttitor eu sagittis orci imperdiet.</strong> </p>
       <br />
       <p class="nulla-vitae-odio-quis-massa-n2">Nulla vitae odio quis massa</p>
       <p class="condimentum-venenatis-ut">condimentum venenatis. Ut</p>
       <p class="fermentum-felis-et-massa-sit">fermentum felis et massa sodales sit</p>
       <p class="amet-auctor-urna-pulvinar">amet auctor urna pulvinar. </p>
      </div>
      <a href="#" class="link-n4" title="Link">READ MORE</a>
      <a href="#" class="link-n5" title="Link">READ MORE</a>
      <a href="#" class="link-n6" title="Link">READ MORE</a>
      <p class="text-n8" title="Text"><span class="text-n20">//</span><span class="proven-methods"> PROVEN METHODS</span></p>
      <p class="text-n9" title="Text"><span class="text-n21">//</span><span class="our-video"> OUR VIDEO</span></p>
      <img alt="Image" class="image-n7" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-7.png" title="Image" />
      <img alt="Image" class="image-n8" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-6.png" title="Image" />
      <div class="text-n10" title="Text">
       <p class="duis-fringilla-dapibus-risus">Duis fringilla dapibus justo, ut congue ligula venenatis sed. In euismod risus</p>
       <p class="eget-mi-vestibulum-a-commodo">eget mi vestibulum a interdum sem commodo.</p>
       <br />
       <p class="quisque-ultricies-leo-id-odio">Quisque ultricies leo id felis porttitor eu sagittis orci imperdiet. Nulla vitae odio</p>
       <p class="quis-massa-condimentum-amet">quis massa condimentum venenatis. Ut fermentum felis et massa sodales sit amet</p>
       <p class="auctor-urna-pulvinar-in-lacinia">auctor urna pulvinar. In faucibus neque egestas ipsum lacinia lacinia. </p>
      </div>
      <div style="height: 25px; left: 81px; position: absolute; top: 1126px; width: 123px;">
       <a href="#" title="Link" style="background: transparent url(<?php bloginfo('template_directory'); ?>/home_images/color-fill-5-2.png) no-repeat scroll left top; color: #ffffff; display: block; font: 0.875em/1.1em 'Palatino Linotype'; height: 25px; padding-left: 4px; padding-top: 4px; text-align: center; text-decoration: none; text-shadow: 0 1px 0 #000101; width: 123px;">READ MORE</a>
      </div>
      <img alt="Image" class="image" src="<?php bloginfo('template_directory'); ?>/home_images/shape-6.png" title="Image" />
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- end Header -->
 <?php include_once('home_footer.php'); ?>