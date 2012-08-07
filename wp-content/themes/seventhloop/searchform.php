<?php
// Spark
// Release: 1.0
?>
	<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('search here &hellip;', 'spark'); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Go', 'spark'); ?>"  />
	</form>