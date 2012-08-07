<?php
// Spark Metaboxes - not currently in use.
// Release: 1.0


require_once("others/meta-box-class/my-meta-box-class.php");

if (is_admin()){

	// prefix of meta keys
	$prefix = 'spark_';
	$config = array(
		'id' => 'spark_options_metabox',			// meta box id, unique per meta box
		'title' => 'Spark Options',					// meta box title
		'pages' => array('post', 'page'),			// post types, accept custom post types as well, default is array('post'); optional
		'context' => 'normal',						// where the meta box appear: normal (default), advanced, side; optional
		'priority' => 'high',						// order of meta box: high (default), low; optional
		'fields' => array(),						// list of meta fields (can be added by field arrays)
		'local_images' => false,					// Use local or hosted images (meta box images for add/remove)
		'use_with_theme' => true					//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	);
	
	
	// Initiate meta box
	$spark_options_metabox =  new AT_Meta_Box($config);
	
	//text field
	$spark_options_metabox->addText($prefix.'text_field_id',array('name'=> 'My Text '));
	//textarea field
	$spark_options_metabox->addTextarea($prefix.'textarea_field_id',array('name'=> 'My Textarea '));
	//checkbox field
	$spark_options_metabox->addCheckbox($prefix.'checkbox_field_id',array('name'=> 'My Checkbox '));

	//Finish Meta Box Decleration
	$spark_options_metabox->Finish();
}
