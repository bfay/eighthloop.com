<?php
 /*
 @package WordPress
 @subpackage Divine
 */
 global $div_ec, $div_ap;
?>

 <!-- start Footer -->
 <div class="footer-stretch-warp">
  <div class="footer-stretch-bottom">
   <div class="footer-stretch-top">
    <div class="footer-grid"><!-- Footer -->
     <div class="clear-both">
      <p class="text-n11" title="Text"><span class="text-n22">//</span><span class="text-nbsp"> &nbsp; </span><span class="text-about">ABOUT</span></p>
      <p class="text-n12" title="Text"><span class="text-n23">//</span><span class="text-nbsp-n1"> &nbsp; </span><span class="address">ADDRESS</span></p>
      <p class="text-n13" title="Text"><span class="text-n24">//</span><span class="text-nbsp-n2"> &nbsp; </span><span class="follow">FOLLOW</span></p>
      <div style="height: 3px; left: 79px; position: absolute; top: 111px; width: 237px;">
       <img alt="Image" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-2.png" title="Image" style="height: 3px; position: absolute; width: 237px;" />
      </div>
      <div style="height: 3px; left: 366px; position: absolute; top: 111px; width: 237px;">
       <img alt="Image" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-1.png" title="Image" style="height: 3px; position: absolute; width: 237px;" />
      </div>
      <div style="height: 3px; left: 654px; position: absolute; top: 111px; width: 237px;">
       <img alt="Image" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17.png" title="Image" style="height: 3px; position: absolute; width: 237px;" />
      </div>
      <div class="text-n14" title="Text">
       <p class="the-most-creative-ideas"> - The most creative ideas</p>
       <p class="professional-researches"> - Professional researches</p>
       <p class="precise-and-impartial-approach"> - Precise and impartial approach</p>
       <p class="providing-best-solutions"> - Providing best solutions</p>
      </div>
      <div class="text-n15" title="Text">
       <p class="n307-east-c-street">307 East C Street</p>
       <p class="washington-ws-n32072">Washington, WS 32072</p>
       <p class="e-mail-mail-demolink-org">E -mail: mail@demolink.org</p>
       <p class="telephone-n1-n800-n345-n23-n45">Telephone: +1 800 345 23 45</p>
      </div>
      <a href="http://www.facebook.com/" class="facebook-n1" title="Facebook">Like us</a>
      <a href="http://twitter.com/" class="twitter-n1" title="Twitter">Follow us</a>
      <a href="#" class="rss-n1" title="Rss">Subscribe</a>
      <div style="height: 3px; left: 79px; position: absolute; top: 217px; width: 237px;">
       <img alt="Image" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-copy-2.png" title="Image" style="height: 3px; position: absolute; width: 237px;" />
      </div>
      <div style="height: 3px; left: 366px; position: absolute; top: 217px; width: 237px;">
       <img alt="Image" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-copy-1.png" title="Image" style="height: 3px; position: absolute; width: 237px;" />
      </div>
      <div style="height: 3px; left: 654px; position: absolute; top: 217px; width: 237px;">
       <img alt="Image" src="<?php bloginfo('template_directory'); ?>/home_images/color-fill-17-copy.png" title="Image" style="height: 3px; position: absolute; width: 237px;" />
      </div>
      <a href="#" class="link-n8" title="Link">READ MORE</a>
      <a href="#" class="link-n9" title="Link">CONTACT US</a>
      <div class="text-n16" title="Text">
       <p class="n2011-brave-amp-bold">2011 Brave<em>&amp;</em>Bold</p>
       <p class="text-n25"></p>
      </div>
      <a href="#" class="link-n10" title="Link">Privacy Policy</a>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- end Footer -->
<?php
wp_footer();
?>
  
<?php
 // Initialize billboards
 if(function_exists('DivineBillboardInit'))
  DivineBillboardInit();
?>

</body>
</html>
