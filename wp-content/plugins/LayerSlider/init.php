    <script type="text/javascript">
    
    jQuery(document).ready(function(){
    	
    	<?php foreach($slides as $key => $val) : ?>
    	jQuery("#layerslider_<?php echo ($key+1)?>").layerSlider({    		
   			autoStart			: <?php echo $val['properties']['autostart']?>,
   			pauseOnHover		: <?php echo $val['properties']['pauseonhover']?>,
			firstLayer			: <?php echo $val['properties']['firstlayer']?>,
			animateFirstLayer	: <?php echo !empty($val['properties']['animatefirstlayer']) ? $val['properties']['animatefirstlayer'] : 'false'?>,
			twoWaySlideshow		: <?php echo $val['properties']['twowayslideshow']?>,
    		keybNav				: <?php echo $val['properties']['keybnav']?>,
    		touchNav			: <?php echo !empty($val['properties']['touchnav']) ? $val['properties']['touchnav'] : 'true' ?>,
    		imgPreload			: <?php echo $val['properties']['imgpreload']?>,
    		navPrevNext			: <?php echo $val['properties']['navprevnext']?>,
    		navStartStop		: <?php echo $val['properties']['navstartstop']?>,
    		navButtons			: <?php echo $val['properties']['navbuttons']?>,
    		skin				: '<?php echo $val['properties']['skin']?>',
    		skinsPath			: '<?php echo plugins_url() ?><?php echo $val['properties']['skinspath']?>',
    		<?php if(!empty($val['properties']['backgroundcolor'])) : ?>
    		globalBGColor		: '<?php echo $val['properties']['backgroundcolor']?>',
    		<?php endif; ?>
    		<?php if(!empty($val['properties']['backgroundimage'])) : ?>
    		globalBGImage		: <?php echo !empty($val['properties']['backgroundimage']) ? '\''.$val['properties']['backgroundimage'].'\'' : 'false' ?>,
    		<?php endif; ?>
    		yourLogo			: <?php echo !empty($val['properties']['yourlogo']) ? '\''.$val['properties']['yourlogo'].'\'' : 'false'?>,
    		yourLogoStyle		: <?php echo !empty($val['properties']['yourlogostyle']) ? '\''.$val['properties']['yourlogostyle'].'\'' : '\'position: absolute; left: 10px; top: 10px; z-index: 99;\''?>,
    		yourLogoLink		: <?php echo !empty($val['properties']['yourlogolink']) ? '\''.$val['properties']['yourlogolink'].'\'' : 'false'?>,
    		yourLogoTarget		: <?php echo !empty($val['properties']['yourlogotarget']) ? '\''.$val['properties']['yourlogotarget'].'\'' : '\'_self\''?>,
    		
    		loops				: <?php echo !empty($val['properties']['loops']) ? $val['properties']['loops'] : 0 ?>,
    		forceLoopNum		: <?php echo !empty($val['properties']['forceloopnum']) ? $val['properties']['forceloopnum'] : 'true' ?>,
    		autoPlayVideos		: <?php echo !empty($val['properties']['autoplayvideos']) ? $val['properties']['autoplayvideos'] : 'true' ?>,
    		
    		<?php
    		$autoPauseSlideshow = !empty($val['properties']['autopauseslideshow']) ? $val['properties']['autopauseslideshow'] : 'auto';
    		
    		if($autoPauseSlideshow == 'auto') {
	    		$autoPauseSlideshow = '\'auto\'';
    		}
    		
    		?>
    		
    		autoPauseSlideshow	: <?php echo $autoPauseSlideshow ?>,
    		youtubePreview		: <?php echo !empty($val['properties']['youtubepreview']) ? '\''.$val['properties']['youtubepreview'].'\'' : '\'maxresdefault.jpg\'' ?>,
    		
    		cbInit				: <?php echo !empty($val['properties']['cbinit']) ? stripslashes($val['properties']['cbinit']) : 'function() {}'?>,
    		cbStart				: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbstart']) : 'function() {}'?>,
    		cbStop				: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbstop']) : 'function() {}'?>,
    		cbPause				: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbpause']) : 'function() {}'?>,
    		cbAnimStart			: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbanimstart']) : 'function() {}'?>,
    		cbAnimStop			: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbanimstop']) : 'function() {}'?>,
    		cbPrev				: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbprev']) : 'function() {}'?>,
    		cbNext				: <?php echo !empty($val['properties']['cbstart']) ? stripslashes($val['properties']['cbnext']) : 'function() {}'?>
    	});
    	<?php endforeach; ?>
    });
    
    </script>
    