		</div><!-- End Main row -->
		
		<footer id="content-info" role="contentinfo">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
			<div class="row">
				<div class="four columns">
					&copy; 2007-<?php echo date('Y'); ?> Eighth Loop
					<br>
					All rights reserved.
				</div>
				<div class="four columns">
					<img src="http://cdn.images.eighthloop.com/loop-logo-100.png" alt="Small Eighth Loop Logo">
				</div>
				<div class="four columns">
						<p>Developed by <a href="http://www.byronfay.com" title="secondloop Framework">Byron Fay</a>.</p>
				</div>
			</div>
		</footer>	
		
		</div><!-- Container End -->
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
</body>
</html>