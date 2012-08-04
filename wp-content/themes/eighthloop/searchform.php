<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row">
	<div class="twelve columns">
		<div class="row collapse">
			
			<div class="eight mobile-three columns">
				<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'eighthloop'); ?>">
			</div>
			
			<div class="four mobile-one columns">
				<input type="submit" id="searchsubmit" value="<?php _e('Search', 'eighthloop'); ?>" class="postfix button">
			</div>
		</div>
	</div>
	</div>
</form>