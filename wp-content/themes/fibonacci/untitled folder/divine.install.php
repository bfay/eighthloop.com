<?php
 function activate_plugin($pluginName) {
  $activePlugins = get_option('active_plugins');
  $pluginName = trim($pluginName);

  if ( validate_file($pluginName) )
   return false;
  if ( !file_exists(ABSPATH . PLUGINDIR . '/' . $pluginName) )
   return false;
  if ( in_array($pluginName, $activePlugins) )
   return false;

  ob_start();
  @include(ABSPATH . PLUGINDIR . '/' . $pluginName);
  $activePlugins[] = $pluginName;
  sort($activePlugins);
  update_option('active_plugins', $activePlugins);
  do_action('activate_' . $pluginName);
  ob_end_clean();
  return true;
 }
 activate_plugin( "divine/divine-slides.php" );

 $div_ec->CreateDB();
 $templateDirVarName = get_template_directory_uri();
 $rssVarName = get_bloginfo('rss2_url');

 if(function_exists('DivineBillboardInstall')){
  DivineBillboardInstall();

 $template = $wp_object_cache->cache['options']['alloptions']['template'];
 unlink('wp-content/themes/'.$template.'/divine.install.php');

 DivineBillboardAdd('start-template-home-slides', array('slideSpeed' => 3000, 'animationSpeed' => 1000, 'effectName' => 'None'));
 DivineBillboardSlideAdd('start-template-home-slides', array('image_file' => 'slide1slide.png', 'indent_left' => 88, 'indent_top' => 27));
 DivineBillboardSlideAdd('start-template-home-slides', array('image_file' => 'slide1slide1.png', 'indent_left' => 88, 'indent_top' => 27));
 DivineBillboardSlideAdd('start-template-home-slides', array('image_file' => 'slide1slide2.png', 'indent_left' => 88, 'indent_top' => 27));

}
?>