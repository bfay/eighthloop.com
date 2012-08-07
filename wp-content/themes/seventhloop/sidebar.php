<?php
// Spark - Sidebar
// Release: 1.0
// This file is not used anywhere. "Sidebars" or more specifically "widgets" can be inserted in any post with a simple shortcode: [widgets area=one]
?>
	<?php if (!dynamic_sidebar('widgets-area-one')) : ?>
		<div class="row">
			<div class="one-third column headset">
				<img src="images/empty.gif" alt="" class="large-icons icon-menu" />
				<h4>Dynamic Menu</h4>
				<p>Go Ahead, <a href="#features" class="animate">Scroll The Page</a></p>
			</div>

			<div class="one-third column headset">
				<img src="images/empty.gif" alt="" class="large-icons icon-layers" />
				<h4>Responsive Grid Layout</h4>
				<p>Go Ahead, Resize This Page</p>
			</div>

			<div class="one-third column headset">
				<img src="images/empty.gif" alt="" class="large-icons icon-resize" />
				<h4>Browser History</h4>
				<p>Go Ahead, Try The Back Button</p>
			</div>
		</div><!-- .row -->
	<?php endif; //end of main-sidebar ?>
