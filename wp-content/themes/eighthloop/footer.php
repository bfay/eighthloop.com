		</div><!-- End Main row -->

    <footer id="content-info" role="contentinfo">
        <div class="row">
            <?php dynamic_sidebar("Footer"); ?>
        </div>

        <div class="row">
            <div class="four columns">
                &copy; Byron Fay 2007-<?php echo date('Y'); ?> All rights reserved.<br>
                Powered by <a href="http://www.byronfay.com/eighthloop-framework/" rel="nofollow" title="eighthloop Framework">Eighthloop Framework</a>.
            </div>
        </div>
    </footer><!-- Container End -->
    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
         chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7]>
        <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
    <?php wp_footer(); ?>

</body>
</html>