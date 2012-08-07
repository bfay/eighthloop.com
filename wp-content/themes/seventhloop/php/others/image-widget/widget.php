<?php
// Spark - Image Widget Override
// Realease: 1.0

// Block direct requests
if (!defined('ABSPATH')) {
	die('-1');
}

$description = (!empty($description)) ? apply_filters( 'widget_text', $description) : '';
if (!empty($title) && $imageurl) : ?>
	
		<div class="one-third column headset">
			<img src="<?php echo esc_url($imageurl); ?>" alt="" />
			<h4><?php echo $title; ?></h4>
			<?php echo wpautop($description); ?>
		</div>
			
<?php endif; ?>