<div class="wrap">
<h2 class="ls-maintitle">
	LayerSlider WP Admin Page
</h2>

<div id="layerslider-sample-tab" class="layerslider_tabs">
	<form method="post" action="<?php echo $_SERVER['REQUEST_URI']?>" class="layerslider_form">
	<input type="hidden" name="posted" value="1">
	<input type="hidden" name="sliderkey" value="99">
	<table class="form-table ls-global-table">
		<tbody>
		<tr>
			<td colspan="2">
				<h2>Global Settings</h2>
				<a class="ls-openclose" href="#">minimize</a>
			</td>
		</tr>
	    <tr valign="top">
	    	<th scope="row"><strong>width</strong></th>
	    	<td>
	 			<input type="text" name="width" value="800" />
	 			<br/>
	 			<span class="description">Width of the slider (for responsive layout you can use % as well). If you want to create a slider with responsive width which is compared to the width of the browser, don't forget to change forceResponsive to true.</span>
	 		</td>
	 	</tr>
	    <tr valign="top">
	    	<th scope="row"><strong>height</strong></th>
	    	<td>
	    		<input type="text" name="height" value="400" />
	    		<br/>
	    		<span class="description">Height of the slider</span>
	    	</td>
	    </tr>
	    <tr valign="top">
	        <th scope="row"><strong>forceResponsive</strong></th>
	        <td>
	        	<label><input type="radio" name="forceresponsive" value="true"> enabled</label>
	        	<label><input type="radio" name="forceresponsive" value="false" checked="checked"> disabled</label>
	        	<br/>
	        	<span class="description">
	        		Change this property to true if you want to force responsive layout. Set the width value in percentage, for example: 90%
	        	</span><br><br>
	        	<strong class="description">Note, that in WordPress plugin you cannot use responsive height, unless you are CSS / HTML expert. To use responsive height, you must add specified height to the main container (where you are including LayerSlider), if you cannot do this, responsive height will not work because of HTML limitations. The forceResponsive property is only for responsive width with constant value of height (which is set in pixels).</strong>
	        </td>
	    </tr>
	    <tr valign="top">
	        <th scope="row"><strong>sliderStyle</strong></th>
	        <td>
	        	<input class="big" type="text" name="sliderstyle" value="" />
	        	<br/>
	        	<span class="description">You can add your own style to the LayerSlider container if you want (for exampe margin top / bottom, etc). You can use any CSS properties.</span>
	        </td>
	    </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>autoStart</strong></th>
	    	<td>
	    		<label><input type="radio" name="autostart" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="autostart" value="false"> disabled</label>
	    		<br/>
	    		<span class="description">If enabled, slideshow will automatically start after loading the page.</span>
	    	</td>
	    </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>pauseOnHover</strong></th>
	    	<td>
	    		<label><input type="radio" name="pauseonhover" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="pauseonhover" value="false"> disabled</label>
	    		<br/>
	    		<span class="description">SlideShow will pause when mouse pointer is over LayerSlider.</span>
	    	</td>
	    </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>firstLayer</strong> : number (positive integer)</th>
	    	<td>
	    		<input type="text" name="firstlayer" value="1" />
	    		<br/>
	    		<span class="description">LayerSlider will begin with this layer.</span>
	    	</td>
	    </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>animateFirstLayer</strong></th>
	    	<td>
	    		<label><input type="radio" name="animatefirstlayer" value="true"> enabled</label>
	        	<label><input type="radio" name="animatefirstlayer" value="false" checked="checked"> disabled</label>
	    		<br/>
	    		<span class="description">If enabled, first layer will animate (slide in) instead of fading</span>
	    	</td>
	    </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>twoWaySlideshow</strong></th>
	    	<td>
	    		<label><input type="radio" name="twowayslideshow" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="twowayslideshow" value="false"> disabled</label>
	    		<br/>
	    		<span class="description">If enabled, slideshow will go backwards if you click the prev button.</span>
	    	</td>
	     </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>keybNav</strong></th>
	    	<td>
	    		<label><input type="radio" name="keybnav" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="keybnav" value="false"> disabled</label>
	    		<br/>
	    		<span class="description">Keyboard navigation. You can navigate with the left and right arrow keys.</span>
	    	</td>
	    </tr>
	    <tr valign="top">
	    	<th scope="row"><strong>touchNav</strong></th>
	    	<td>
	    		<label><input type="radio" name="touchnav" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="touchnav" value="false"> disabled</label>
	    		<br/>
	    		<span class="description">Touch-control (on mobile devices).</span>
	    	</td>
	    </tr>
        <tr valign="top">
        	<th scope="row"><strong>imgPreload</strong></th>
        	<td>
	    		<label><input type="radio" name="imgpreload" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="imgpreload" value="false"> disabled</label>
        		<br/>
        		<span class="description">Image preload. Preloads all images and background-images of the next layer.</span>
        	</td>
	    </tr>
	    <tr valign="top">
        	<th scope="row"><strong>navPrevNext</strong></th>
        	<td>
	    		<label><input type="radio" name="navprevnext" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="navprevnext" value="false"> disabled</label>
        		<br/>
        		<span class="description">If diabled, Prev and Next buttons will be invisible.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>navStartStop</strong></th>
        	<td>
	    		<label><input type="radio" name="navstartstop" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="navstartstop" value="false"> disabled</label>
        		<br/>
        		<span class="description">If disabled, Start and Stop buttons will be invisible.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>navButtons</strong></th>
        	<td>
	    		<label><input type="radio" name="navbuttons" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="navbuttons" value="false"> disabled</label>
        		<br/>
        		<span class="description">If disabled, slide buttons will be invisible.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>skin</strong> : name_of_the_skin</th>
        	<td>
        		<input type="text" name="skin" value="defaultskin" />
        		<br/>
        		<span class="description">You can change the skin of the slider. The pre-defined skins are: defaultskin, lightskin, darkskin and if you don't want to show any skin, use: noskin</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>skinsPath</strong> : path_of_the_skins_folder/</th>
        	<td>
        		<input type="text" name="skinspath" value="/LayerSlider/skins/" />
        		<br/>
        		<span class="description">You can change the default path of the skins folder. Note, that you must use the slash at the end of the path.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>backgroundColor</strong></th>
        	<td>
        		<input type="text" name="backgroundcolor" value="white" class="bgchange" />
        		<br/>
        		<span class="description">Background color of LayerSlider. You can use all CSS methods, like hexa colors, rgb(r,g,b) method, color names, etc. Note, that background sublayers are covering the background.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>backgroundImage</strong></th>
        	<td>
        		<input type="text" name="backgroundimage" value="" class="layerslider_upload_input bgchange" />
        		<button class="button-primary layerslider-bg-reset empty">Reset</button>
        		<br/>
        		<span class="description">Background image of LayerSlider. This will be a fixed background image of LayerSlider by default. Note, that background sublayers are covering the global background image.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>yourLogo</strong></th>
        	<td>
        		<input type="text" name="yourlogo" value="" class="layerslider_upload_input" />
        		<button class="button-primary layerslider-bg-reset empty layerslider-yourlogo-reset">Reset</button>
        		<br/>
        		<span class="description">This is a fixed layer that will be shown above of LayerSlider container. For example if you want to display your own logo, etc., you can upload an image or choose one from the Media Library.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>yourLogoStyle</strong></th>
        	<td>
        		<input type="text" name="yourlogostyle" class="big" value="position: absolute; left: 10px; top: 10px; z-index: 99;" class="layerslider_upload_input" />
        		<br/>
        		<span class="description">You can style your logo. You can use any CSS properties, for example you can add left and top properties to place the image inside the LayerSlider container anywhere you want.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>yourLogoLink</strong></th>
        	<td>
        		<input type="text" name="yourlogolink" value="" />
        		<button class="button-primary layerslider-bg-reset empty">Reset</button>
        		<br/>
        		<span class="description">You can add a link to your logo. Set false is you want to display only an image without a link.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>yourLogoTarget</strong></th>
        	<td>
        		<select name="yourlogotarget">
        			<option selected="selected">_self</option>
        			<option>_blank</option>
        		</select>
        		<br/>
        		<span class="description">If '_blank', the clicked url will open in a new window.</span>
        	</td>
        </tr>
        
        <tr valign="top">
        	<th scope="row"><strong>loops</strong></th>
        	<td>
        		<select name="loops" value="0">
        			<?php for($c = 0; $c < 11; $c++) : ?>
        			<option><?php echo $c ?></option>
        			<?php endfor; ?>
        		</select>
        		<br/>
        		<span class="description">Number of loops if autoStart set enabled (0 means infinite!)</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>forceLoopNum</strong></th>
        	<td>
        		<label><input type="radio" name="forceloopnum" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="forceloopnum" value="false"> disabled</label>
        		<br/>
        		<span class="description">If enabled, the slider will always stop at the given number of loops even if the user restarts the slideshow</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>autoPlayVideos</strong></th>
        	<td>
        		<label><input type="radio" name="autoplayvideos" value="true" checked="checked"> enabled</label>
	        	<label><input type="radio" name="autoplayvideos" value="false"> disabled</label>
        		<br/>
        		<span class="description">If enabled, slider will autoplay youtube / vimeo videos - you can use it with autoPauseSlideshow</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>autoPauseSlideshow</strong></th>
        	<td>
        		<label><input type="radio" name="autopauseslideshow" value="true"> enabled</label>
	        	<label><input type="radio" name="autopauseslideshow" value="false"> disabled</label>
	        	<label><input type="radio" name="autopauseslideshow" value="auto" checked="checked"> auto</label>
        		<br/>
        		<span class="description">Auto means, if autoPlayVideos is enabled, slideshow will stop UNTIL the video is playing and after that it continues. Enabled means slideshow will stop and it won't continue after video is played.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>youtubePreview</strong></th>
        	<td>
        		<select name="youtubepreview">
        			<option selected="selected">maxresdefault.jpg</option>
        			<option>hqdefault.jpg</option>
        			<option>mqdefault.jpg</option>
        			<option>default.jpg</option>
        		</select>
        		<br/>
        		<span class="description">Default thumbnail picture of YouTube videos. Can be maxresdefault.jpg, hqdefault.jpg, mqdefault.jpg or default.jpg. Note, that maxresdefault.jpg is not available to all (not HD) videos.</span>
        	</td>
        </tr>
		<tr>
			<td colspan="2">
				<h2>LayerSlider API Callback Events</h2>
			</td>
		</tr>
    	<tr valign="top">
    	    <th scope="row"><strong>cbInit</strong></th>
    	    <td>
    	    	<textarea name="cbinit">function() { }</textarea>
    	    	<br/>
    	    	<span class="description">Calling when the LayerSlider loaded.</span>
    	    </td>
    	</tr>
        <tr valign="top">
        	<th scope="row"><strong>cbStart</strong></th>
        	<td>
        		<textarea name="cbstart">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when you click the slideshow start.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>cbStop</strong></th>
        	<td>
        		<textarea name="cbstop">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when click the slideshow stop / pause button.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>cbPause</strong></th>
        	<td>
        		<textarea name="cbpause">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when slideshow pauses (if pauseOnHover is true).</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>cbAnimStart</strong></th>
        	<td>
        		<textarea name="cbanimstart">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when animation starts.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>cbAnimStop</strong></th>
        	<td>
        		<textarea name="cbanimstop">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when the animation of current layer ends, but the sublayers of this layer still may be animating.</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>cbPrev</strong></th>
        	<td>
        		<textarea name="cbprev">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when you click the previous button (or if you use keyboard or touch navigation).</span>
        	</td>
        </tr>
        <tr valign="top">
        	<th scope="row"><strong>cbNext</strong></th>
        	<td>
        		<textarea name="cbnext">function() { }</textarea>
        		<br/>
        		<span class="description">Calling when you click the next button (or if you use keyboard or touch navigation).</span>
        	</td>
        </tr>
		</tbody>
	</table>
	<ul class="layerslider_slides_wrapper"></ul>
	<button class="layerslider_add_slide button-primary">Add New Layer</button>
	<button class="layerslider_sort_layers button-primary">Reorder Layers</button>
	
	<p class="submit">
    	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
	</form>
</div>


<ul id="layerslider_slides_code">
    <li class="layerslider_slides">
		
		<div class="draggable_wrapper">
    		<div class="draggable" style="position: relative;"></div>
    	</div>

    	<h2 class="layertitle">Layer Properties:</h2>
    	<table>
    		<tr>
    			<td>Title</td>
    			<th>Background</th>
    			<th>SlideDirection</th>
    			<th>SlideDelay</th>
    			<th>DurationIn</th>
    			<th>DurationOut</th>
    			<th>EasingIn</th>
    			<th>EasingOut</th>
    			<th>DelayIn</th>
    			<th>DelayOut</th>
    		</tr>
    		<tr>
    			<td><input type="text" name="title"></td>
    			<td>
    				<input type="text" name="background" class="layerslider_upload_input">
    				<button class="button-primary layerslider-bg-reset empty">Reset</button>
    			</td>
    			<td>
    				<select name="slidedirection">
    					<option>left</option>
    					<option selected="selected">right</option>
    					<option>top</option>
    					<option>bottom</option>
    				</select>
    			</td>
    			<td><input type="text" name="slidedelay" value="4000"></td>
    			<td><input type="text" name="durationin" value="1500"></td>
    			<td><input type="text" name="durationout" value="1500"></td>
    			<td>
    				<select name="easingin">
    					<option>linear</option>
    					<option>swing</option>
    					<option>easeInQuad</option>
    					<option>easeOutQuad</option>
    					<option>easeInOutQuad</option>
    					<option>easeInCubic</option>
    					<option>easeOutCubic</option>
    					<option>easeInOutCubic</option>
    					<option>easeInQuart</option>
    					<option>easeOutQuart</option>
    					<option>easeInOutQuart</option>
    					<option>easeInQuint</option>
    					<option>easeOutQuint</option>
    					<option selected="selected">easeInOutQuint</option>
    					<option>easeInSine</option>
    					<option>easeOutSine</option>
    					<option>easeInOutSine</option>
    					<option>easeInExpo</option>
    					<option>easeOutExpo</option>
    					<option>easeInOutExpo</option>
    					<option>easeInCirc</option>
    					<option>easeOutCirc</option>
    					<option>easeInOutCirc</option>
    					<option>easeInElastic</option>
    					<option>easeOutElastic</option>
    					<option>easeInOutElastic</option>
    					<option>easeInBack</option>
    					<option>easeOutBack</option>
    					<option>easeInOutBack</option>
    					<option>easeInBounce</option>
    					<option>easeOutBounce</option>
    					<option>easeInOutBounce</option>
    				</select>
    			</td>
    	    	<td>
    	    		<select name="easingout">
    	    			<option>linear</option>
    	    			<option>swing</option>
    	    			<option>easeInQuad</option>
    	    			<option>easeOutQuad</option>
    	    			<option>easeInOutQuad</option>
    	    			<option>easeInCubic</option>
    	    			<option>easeOutCubic</option>
    	    			<option>easeInOutCubic</option>
    	    			<option>easeInQuart</option>
    	    			<option>easeOutQuart</option>
    	    			<option>easeInOutQuart</option>
    	    			<option>easeInQuint</option>
    	    			<option>easeOutQuint</option>
    	    			<option selected="selected">easeInOutQuint</option>
    	    			<option>easeInSine</option>
    	    			<option>easeOutSine</option>
    	    			<option>easeInOutSine</option>
    	    			<option>easeInExpo</option>
    	    			<option>easeOutExpo</option>
    	    			<option>easeInOutExpo</option>
    	    			<option>easeInCirc</option>
    	    			<option>easeOutCirc</option>
    	    			<option>easeInOutCirc</option>
    	    			<option>easeInElastic</option>
    	    			<option>easeOutElastic</option>
    	    			<option>easeInOutElastic</option>
    	    			<option>easeInBack</option>
    	    			<option>easeOutBack</option>
    	    			<option>easeInOutBack</option>
    	    			<option>easeInBounce</option>
    	    			<option>easeOutBounce</option>
    	    			<option>easeInOutBounce</option>
    	    		</select>
    	    	</td>
    	    	<td><input type="text" name="delayin" value="0"></td>
    	    	<td><input type="text" name="delayout" value="0"></td>
    	    </tr>
    	</table>
		<h2 class="layertitle">Sublayers:</h2>
		<label class="layerslider-advanced-options"><input type="checkbox" name="advanced_options"><span>Show Advanced Options</span></label>
    	<table>
    		<tbody class="sortable">
    		<tr>
    			<th></th>
    			<th></th>
    			<th>Type</th>
    			<th>HTML</th>
    			<th>Style</th>
    			<th>ID</th>
    			<th>Top</th>
    			<th>Left</th>
    			<th>Image</th>
    			<th>Link</th>
    			<th>Target</th>
    			<th>P.Level</th>
    			<th>SlideDirection</th>
    			<th>SlideOutDirection</th>
    			<th>ParallaxIn</th>
    			<th>ParallaxOut</th>
    			<th>DurationIn</th>
    			<th>DurationOut</th>
    			<th>EasingIn</th>
    			<th>EasingOut</th>
    			<th>DelayIn</th>
    			<th>DelayOut</th>
    			<th></th>
    		</tr>
    		<tr class="layerslider_sublayer">
    			<td><input type="checkbox" name="selected" class="layerslider-layer-select"></td>
    			<td><div class="moveable"></div></td>
    			<td>
    				<select name="type">
    					<option>img</option>
    					<option>div</option>
    					<option>p</option>
    					<option>span</option>
    					<option>h1</option>
    					<option>h2</option>
    					<option>h3</option>
    					<option>h4</option>
    					<option>h5</option>
    					<option>h6</option>
    				</select>
    			</td>
    			<td><input type="text" name="html" value="" class="resize"></td>
				<td><input type="text" name="style" value="" class="resize"></td>
				<td><input type="text" name="id" value="" class="resize"></td>
    			<td><input type="text" name="top" value="0"></td>
    			<td><input type="text" name="left" value="0"></td>
    			<td><input type="text" name="image" class="layerslider_upload_input"></td>
    			<td><input type="text" name="url" value="" class="resize"></td>
    			<td>
    				<select name="target">
    					<option>_self</option>
    					<option>_blank</option>
    					<option>_parent</option>
    					<option>_top</option>
    				</select>
    			</td>
    			<td><input type="text" name="level" value="2"></td>
    			<td>
    				<select name="slidedirection">
    					<option selected="selected">auto</option>
    					<option>left</option>
    					<option>right</option>
    					<option>top</option>
    					<option>bottom</option>
    					<option>fade</option>
    				</select>
    			</td>
 				<td>
				    <select name="slideoutdirection">
				    	<option selected="selected">auto</option>
				    	<option>left</option>
				    	<option>right</option>
				    	<option>top</option>
				    	<option>bottom</option>
				    	<option>fade</option>
				    </select>					
				</td>
    			<td><input type="text" name="parallaxin" value=".45"></td>
    			<td><input type="text" name="parallaxout" value=".45"></td>
    			<td><input type="text" name="durationin" value="1500"></td>
    			<td><input type="text" name="durationout" value="1500"></td>
    			<td>
    				<select name="easingin">
    					<option>linear</option>
    					<option>swing</option>
    					<option>easeInQuad</option>
    					<option>easeOutQuad</option>
    					<option>easeInOutQuad</option>
    					<option>easeInCubic</option>
    					<option>easeOutCubic</option>
    					<option>easeInOutCubic</option>
    					<option>easeInQuart</option>
    					<option>easeOutQuart</option>
    					<option>easeInOutQuart</option>
    					<option>easeInQuint</option>
    					<option>easeOutQuint</option>
    					<option selected="selected">easeInOutQuint</option>
    					<option>easeInSine</option>
    					<option>easeOutSine</option>
    					<option>easeInOutSine</option>
    					<option>easeInExpo</option>
    					<option>easeOutExpo</option>
    					<option>easeInOutExpo</option>
    					<option>easeInCirc</option>
    					<option>easeOutCirc</option>
    					<option>easeInOutCirc</option>
    					<option>easeInElastic</option>
    					<option>easeOutElastic</option>
    					<option>easeInOutElastic</option>
    					<option>easeInBack</option>
    					<option>easeOutBack</option>
    					<option>easeInOutBack</option>
    					<option>easeInBounce</option>
    					<option>easeOutBounce</option>
    					<option>easeInOutBounce</option>
    				</select>
    			</td>
    			<td>
    				<select name="easingout">
    					<option>linear</option>
    					<option>swing</option>
    					<option>easeInQuad</option>
    					<option>easeOutQuad</option>
    					<option>easeInOutQuad</option>
    					<option>easeInCubic</option>
    					<option>easeOutCubic</option>
    					<option>easeInOutCubic</option>
    					<option>easeInQuart</option>
    					<option>easeOutQuart</option>
    					<option>easeInOutQuart</option>
    					<option>easeInQuint</option>
    					<option>easeOutQuint</option>
    					<option selected="selected">easeInOutQuint</option>
    					<option>easeInSine</option>
    					<option>easeOutSine</option>
    					<option>easeInOutSine</option>
    					<option>easeInExpo</option>
    					<option>easeOutExpo</option>
    					<option>easeInOutExpo</option>
    					<option>easeInCirc</option>
    					<option>easeOutCirc</option>
    					<option>easeInOutCirc</option>
    					<option>easeInElastic</option>
    					<option>easeOutElastic</option>
    					<option>easeInOutElastic</option>
    					<option>easeInBack</option>
    					<option>easeOutBack</option>
    					<option>easeInOutBack</option>
    					<option>easeInBounce</option>
    					<option>easeOutBounce</option>
    					<option>easeInOutBounce</option>
    				</select>
    			</td>
    			<td><input type="text" name="delayin" value="0"></td>
    			<td><input type="text" name="delayout" value="0"></td>
    			<td><a href="#" class="remove button-primary">remove</a></a></td>
    		</tr>
    	</tbody>
    	</table>
		<p>
			<button class="layerslider_add_sublayer button-primary">Add New Sublayer</button>
			<button class="layerslider_remove_layer button-primary">Remove This Layer</button>
		</p>
    </li>
</ul>

<?php $slides = get_option('layerslider-slides'); ?>
<?php $slides = is_array($slides) ? $slides : unserialize($slides); ?>
<?php $slides = !empty($slides) ? $slides : array(); ?>


 	<button id="layerslider-add-tab" class="button-primary">Create new slider</button>
 	<button id="layerslider-iebutton" class="button-primary">Import / Export settings</button>

	<div id="layerslider-export">

		<div class="left">
			<h2>Export settings</h2>
			<textarea rows="5" cols="40"><?=base64_encode(serialize($slides))?></textarea>
			<p>Copy the full text and paste it to the Import settings text field<br>on your new site.</p>
		</div>
		
		<div class="right">
			<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post" id="layerslider-import">
				<h2>Import settings</h2>
				<textarea rows="5" cols="40" name="import"></textarea>
				<button type="submit" class="button-primary">Import</button>
			</form>
		</div>

		<div class="clear"></div>

	</div>

	<div id="layerslider-tabs">
    	
    	<ul>
    		<?php foreach($slides as $slidekey => $slide) : ?>
			<li><a href="#tabs-<?php echo $slidekey+1?>"><i class="ls-hidden">LayerSlider </i>#<?php echo $slidekey+1?></a><span class="ui-icon ui-icon-close">X</span></li>
			<?php endforeach; ?>
		</ul>

		<?php foreach($slides as $slidekey => $slide) : ?>
		<div id="tabs-<?php echo $slidekey+1?>" class="layerslider_tabs">
			<form method="post" action="<?php echo $_SERVER['REQUEST_URI']?>" class="layerslider_form">
			<input type="hidden" name="posted" value="1">
			<input type="hidden" name="sliderkey" value="<?php echo $slidekey ?>">
			<table class="form-table ls-global-table">
				<tbody>
				<tr>
					<td colspan="2">
						<h2>Global Settings</h2>
						<a class="ls-openclose" href="#">minimize</a>
					</td>
				</tr>
				<tr valign="top">
  					<th scope="row"><strong>width</strong></th>
					<td>
   		     			<input type="text" name="width" value="<?php echo $slide['properties']['width']?>" />
   		     			<br/>
   		     			<span class="description">Width of the slider (for responsive layout you can use % as well). If you want to create a slider with responsive width which is compared to the width of the browser, don't forget to change forceResponsive to true.</span>
   		     		</td>
   		     	</tr>
        		<tr valign="top">
        			<th scope="row"><strong>height</strong></th>
        			<td>
        				<input type="text" name="height" value="<?php echo $slide['properties']['height']?>" />
        				<br/>
        				<span class="description">Height of the slider</span>
        			</td>
        		</tr>
	    		<tr valign="top">
	    			<th scope="row"><strong>forceResponsive</strong></th>
	    			<td>
	    				<?php $forceresponsive = !empty($slide['properties']['forceresponsive']) ? $slide['properties']['forceresponsive'] : 'false'; ?>
	    				<label><input type="radio" name="forceresponsive" value="true" <?php echo ($forceresponsive == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="forceresponsive" value="false" <?php echo ($forceresponsive == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
	    				<br/>
	    				<span class="description">
	    					Change this property to true if you want to force responsive layout. Set the width value in percentage, for example: 90%
	    				</span><br><br>
	    				<strong class="description">Note, that in WordPress plugin you cannot use responsive height, unless you are CSS / HTML expert. To use responsive height, you must add specified height to the main container (where you are including LayerSlider), if you cannot do this, responsive height will not work because of HTML limitations. The forceResponsive property is only for responsive width with constant value of height (which is set in pixels).</strong>
	    			</td>
	    		</tr>
	    		<tr valign="top">
	    		    <th scope="row"><strong>sliderStyle</strong></th>
	    		    <td>
	    		    	<input class="big" type="text" name="sliderstyle" value="<?php echo $slide['properties']['sliderstyle']?>" />
	    		    	<br/>
	    		    	<span class="description">You can add your own style to the LayerSlider container if you want (for exampe margin top / bottom, etc). You can use any CSS properties.</span>
	    		    </td>
	    		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>autoStart</strong></th>
        			<td>
	    				<?php $autostart = !empty($slide['properties']['autostart']) ? $slide['properties']['autostart'] : 'true'; ?>
	    				<label><input type="radio" name="autostart" value="true" <?php echo ($autostart == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="autostart" value="false" <?php echo ($autostart == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
        				<br/>
        				<span class="description">If enabled, slideshow will automatically start after loading the page.</span>
        			</td>
        		</tr>
	    		<tr valign="top">
	    			<th scope="row"><strong>pauseOnHover</strong></th>
	    			<td>
	    				<?php $pauseonhover = !empty($slide['properties']['pauseonhover']) ? $slide['properties']['pauseonhover'] : 'true'; ?>
	    				<label><input type="radio" name="pauseonhover" value="true" <?php echo ($pauseonhover == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="pauseonhover" value="false" <?php echo ($pauseonhover == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
	    				<br/>
	    				<span class="description">SlideShow will pause when mouse pointer is over LayerSlider.</span>
	    			</td>
	    		</tr>
				<tr valign="top">
        			<th scope="row"><strong>firstLayer</strong> : number (positive integer)</th>
        			<td>
        				<input type="text" name="firstlayer" value="<?php echo $slide['properties']['firstlayer']?>" />
        				<br/>
        				<span class="description">LayerSlider will begin with this layer.</span>
        			</td>
        		</tr>
				<tr valign="top">
					<th scope="row"><strong>animateFirstLayer</strong></th>
					<td>
	    				<?php $animatefirstlayer = !empty($slide['properties']['animatefirstlayer']) ? $slide['properties']['animatefirstlayer'] : 'false'; ?>
	    				<label><input type="radio" name="animatefirstlayer" value="true" <?php echo ($animatefirstlayer == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="animatefirstlayer" value="false" <?php echo ($animatefirstlayer == 'false') ? 'checked="checked"' : '' ?>> disabled</label>

						<br/>
						<span class="description">If enabled, first layer will animate (slide in) instead of fading</span>
					</td>
				</tr>
        		<tr valign="top">
        			<th scope="row"><strong>twoWaySlideshow</strong></th>
        			<td>
	    				<?php $twowayslideshow = !empty($slide['properties']['twowayslideshow']) ? $slide['properties']['twowayslideshow'] : 'true'; ?>
	    				<label><input type="radio" name="twowayslideshow" value="true" <?php echo ($twowayslideshow == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="twowayslideshow" value="false" <?php echo ($twowayslideshow == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
        				<br/>
        				<span class="description">If enabled, slideshow will go backwards if you click the prev button.</span>
        			</td>
       			 </tr>
				<tr valign="top">
        			<th scope="row"><strong>keybNav</strong></th>
        			<td>
	    				<?php $keybnav = !empty($slide['properties']['keybnav']) ? $slide['properties']['keybnav'] : 'true'; ?>
	    				<label><input type="radio" name="keybnav" value="true" <?php echo ($keybnav == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="keybnav" value="false" <?php echo ($keybnav == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
        				<br/>
        				<span class="description">Keyboard navigation. You can navigate with the left and right arrow keys.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        		    <th scope="row"><strong>touchNav</strong></th>
        		    <td>
        		    	<?php $keybnav = !empty($slide['properties']['touchnav']) ? $slide['properties']['touchnav'] : 'true'; ?>
        		    	<label><input type="radio" name="touchnav" value="true" <?php echo ($keybnav == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
        		    	<label><input type="radio" name="touchnav" value="false" <?php echo ($keybnav == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
        		    	<br/>
        		    	<span class="description">Touch-control (on mobile devices).</span>
        		    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>imgPreload</strong></th>
        			<td>
	    				<?php $imgpreload = !empty($slide['properties']['imgpreload']) ? $slide['properties']['imgpreload'] : 'true'; ?>
	    				<label><input type="radio" name="imgpreload" value="true" <?php echo ($imgpreload == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="imgpreload" value="false" <?php echo ($imgpreload == 'false') ? 'checked="checked"' : '' ?>> disabled</label>

        				<br/>
        				<span class="description">Image preload. Preloads all images and background-images of the next layer.</span>
        			</td>
				</tr>
				<tr valign="top">
        			<th scope="row"><strong>navPrevNext</strong></th>
        			<td>
	    				<?php $navprevnext = !empty($slide['properties']['navprevnext']) ? $slide['properties']['navprevnext'] : 'true'; ?>
	    				<label><input type="radio" name="navprevnext" value="true" <?php echo ($navprevnext == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="navprevnext" value="false" <?php echo ($navprevnext == 'false') ? 'checked="checked"' : '' ?>> disabled</label>

        				<br/>
        				<span class="description">If disabled, Prev and Next buttons will be invisible.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>navStartStop</strong></th>
        			<td>
	    				<?php $navstartstop = !empty($slide['properties']['navstartstop']) ? $slide['properties']['navstartstop'] : 'true'; ?>
	    				<label><input type="radio" name="navstartstop" value="true" <?php echo ($navstartstop == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="navstartstop" value="false" <?php echo ($navstartstop == 'false') ? 'checked="checked"' : '' ?>> disabled</label>

        				<br/>
        				<span class="description">If disabled, Start and Stop buttons will be invisible.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>navButtons</strong></th>
        			<td>
	    				<?php $navbuttons = !empty($slide['properties']['navbuttons']) ? $slide['properties']['navbuttons'] : 'true'; ?>
	    				<label><input type="radio" name="navbuttons" value="true" <?php echo ($navbuttons == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="navbuttons" value="false" <?php echo ($navbuttons == 'false') ? 'checked="checked"' : '' ?>> disabled</label>

        				<br/>
        				<span class="description">If disabled, slide buttons will be invisible.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>skin</strong> : name_of_the_skin</th>
        			<td>
        				<input type="text" name="skin" value="<?php echo $slide['properties']['skin']?>" />
        				<br/>
        				<span class="description">You can change the skin of the slider. Pre-defined skins are: defaultskin, lightskin, darkskin and if you don't want to show any skin, use: noskin</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>skinsPath</strong> : path_of_the_skins_folder/</th>
        			<td>
        				<input type="text" name="skinspath" value="<?php echo $slide['properties']['skinspath']?>" />
        				<br/>
        				<span class="description">You can change the default path of the skins folder. Note, that you must use the slash at the end of the path.</span>
        			</td>
        		</tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>backgroundColor</strong></th>
    		    	<td>
    		    		<input type="text" name="backgroundcolor" value="<?php echo $slide['properties']['backgroundcolor']?>" class="bgchange"/>
    		    		<br/>
    		    		<span class="description">
Background color of LayerSlider. You can use all CSS methods, like hexa colors, rgb(r,g,b) method, color names, etc. Note, that background sublayers are covering the background.</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>backgroundImage</strong></th>
    		    	<td>
    		    		<input type="text" name="backgroundimage" value="<?php echo $slide['properties']['backgroundimage']?>" class="layerslider_upload_input bgchange" />
    		    		<button class="button-primary layerslider-bg-reset empty">Reset</button>
    		    		<br/>
    		    		<span class="description">Background image of LayerSlider. This will be a fixed background image of LayerSlider by default. Note, that background sublayers are covering the global background image.</span>
    		    	</td>
    		    </tr>
        		<tr valign="top">
        			<th scope="row"><strong>yourLogo</strong></th>
        			<td>
        				<input type="text" name="yourlogo" value="<?php echo $slide['properties']['yourlogo']?>" class="layerslider_upload_input" />
        				<button class="button-primary layerslider-bg-reset empty layerslider-yourlogo-reset">Reset</button>
        				<br/>
        				<span class="description">This is a fixed layer that will be shown above of LayerSlider container. For example if you want to display your own logo, etc., you can upload an image or choose one from the Media Library.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>yourLogoStyle</strong></th>
        			<td>
        				<input type="text" name="yourlogostyle" class="big" value="<?php echo !empty($slide['properties']['yourlogostyle']) ? $slide['properties']['yourlogostyle'] : 'position: absolute; left: 10px; top: 10px; z-index: 1000;' ?>" class="layerslider_upload_input" />
        				<br/>
        				<span class="description">You can style your logo. You can use any CSS properties, for example you can add left and top properties to place the image inside the LayerSlider container anywhere you want.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>yourLogoLink</strong></th>
        			<td>
        				<input type="text" name="yourlogolink" value="<?php echo $slide['properties']['yourlogolink']?>" />
        				<button class="button-primary layerslider-bg-reset empty">Reset</button>
        				<br/>
        				<span class="description">You can add a link to your logo. Set false is you want to display only an image without a link.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>yourLogoTarget</strong></th>
        			<td>
        				<select name="yourlogotarget">
        					<option <?=($slide['properties']['yourlogotarget'] == '_self') ? 'selected="selected"' : ''?>>_self</option>
        					<option <?=($slide['properties']['yourlogotarget'] == '_blank') ? 'selected="selected"' : ''?>>_blank</option>
        				</select>
        				<br/>
        				<span class="description">If '_blank', the clicked url will open in a new window.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>loops</strong></th>
        			<td>
        				<select name="loops">
        					<?php for($c = 0; $c < 11; $c++) : ?>
        						<option <?php echo($c == $slide['properties']['loops']) ? 'selected="selected"' : ''?>><?php echo $c ?></option>
        					<?php endfor; ?>
        				</select>
        				<br/>
        				<span class="description">Number of loops if autoStart set true (0 means infinite!)</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>forceLoopNum</strong></th>
        			<td>
	    				<?php $forceloopnum = !empty($slide['properties']['forceloopnum']) ? $slide['properties']['forceloopnum'] : 'true'; ?>
	    				<label><input type="radio" name="forceloopnum" value="true" <?php echo ($forceloopnum == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="forceloopnum" value="false" <?php echo ($forceloopnum == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
	    				
        				<br/>
        				<span class="description">If enabled, the slider will always stop at the given number of loops even if the user restarts the slideshow</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>autoPlayVideos</strong></th>
        			<td>
	    				<?php $autoplayvideos = !empty($slide['properties']['autoplayvideos']) ? $slide['properties']['autoplayvideos'] : 'true'; ?>
	    				<label><input type="radio" name="autoplayvideos" value="true" <?php echo ($autoplayvideos == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="autoplayvideos" value="false" <?php echo ($autoplayvideos == 'false') ? 'checked="checked"' : '' ?>> disabled</label>

        				<br/>
        				<span class="description">If enabled, slider will autoplay youtube / vimeo videos - you can use it with autoPauseSlideshow</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>autoPauseSlideshow</strong></th>
        			<td>
	    				<?php $autopauseslideshow = !empty($slide['properties']['autopauseslideshow']) ? $slide['properties']['autopauseslideshow'] : 'auto'; ?>
	    				<label><input type="radio" name="autopauseslideshow" value="true" <?php echo ($autopauseslideshow == 'true') ? 'checked="checked"' : '' ?>> enabled</label>
	    				<label><input type="radio" name="autopauseslideshow" value="false" <?php echo ($autopauseslideshow == 'false') ? 'checked="checked"' : '' ?>> disabled</label>
	    				<label><input type="radio" name="autopauseslideshow" value="auto" <?php echo ($autopauseslideshow == 'auto') ? 'checked="checked"' : '' ?>> auto</label>
	    				
        				<br/>
        				<span class="description">Auto means, if autoPlayVideos is set to enabled, slideshow will stop UNTIL the video is playing and after that it continues. Enabled means slideshow will stop and it won't continue after video is played.</span>
        			</td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><strong>youtubePreview</strong></th>
        			<td>
        				<?php $youtubepreview = !empty($slide['properties']['youtubepreview']) ? $slide['properties']['youtubepreview'] : 'maxresdefault.jpg'; ?>
        				<select name="youtubepreview">
        				    <option <?php echo ($youtubepreview == 'maxresdefault.jpg') ? 'selected="selected"' : '' ?>>maxresdefault.jpg</option>
        				    <option <?php echo ($youtubepreview == 'hqdefault.jpg') ? 'selected="selected"' : '' ?>>hqdefault.jpg</option>
        				    <option <?php echo ($youtubepreview == 'mqdefault.jpg') ? 'selected="selected"' : '' ?>>mqdefault.jpg</option>
        				    <option <?php echo ($youtubepreview == 'default.jpg') ? 'selected="selected"' : '' ?>>default.jpg</option>
        				</select>
        				<br/>
        				<span class="description">Default thumbnail picture of YouTube videos. Can be maxresdefault.jpg, hqdefault.jpg, mqdefault.jpg or default.jpg. Note, that maxresdefault.jpg is not available to all (not HD) videos.</span>
        			</td>
        		</tr>

				<tr>
					<td colspan="2">
						<h2>LayerSlider API Callback Events</h2>
					</td>
				</tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbInit</strong></th>
    		    	<td>
    		    		<textarea name="cbinit"><?php echo !empty($slide['properties']['cbinit']) ? stripslashes($slide['properties']['cbinit']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when the LayerSlider loaded.</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbStart</strong></th>
    		    	<td>
    		    		<textarea name="cbstart"><?php echo !empty($slide['properties']['cbstart']) ? stripslashes($slide['properties']['cbstart']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when you click the slideshow start.</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbStop</strong></th>
    		    	<td>
    		    		<textarea name="cbstop"><?php echo !empty($slide['properties']['cbstop']) ? stripslashes($slide['properties']['cbstop']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when click the slideshow stop / pause button.</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbPause</strong></th>
    		    	<td>
    		    		<textarea name="cbpause"><?php echo !empty($slide['properties']['cbpause']) ? stripslashes($slide['properties']['cbpause']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when slideshow pauses (if pauseOnHover is true).</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbAnimStart</strong></th>
    		    	<td>
    		    		<textarea name="cbanimstart"><?php echo !empty($slide['properties']['cbanimstart']) ? stripslashes($slide['properties']['cbanimstart']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when animation starts.</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbAnimStop</strong></th>
    		    	<td>
    		    		<textarea name="cbanimstop"><?php echo !empty($slide['properties']['cbanimstop']) ? stripslashes($slide['properties']['cbanimstop']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when the animation of current layer ends, but the sublayers of this layer still may be animating.</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbPrev</strong></th>
    		    	<td>
    		    		<textarea name="cbprev"><?php echo !empty($slide['properties']['cbprev']) ? stripslashes($slide['properties']['cbprev']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when you click the previous button (or if you use keyboard or touch navigation).</span>
    		    	</td>
    		    </tr>
    		    <tr valign="top">
    		    	<th scope="row"><strong>cbNext</strong></th>
    		    	<td>
    		    		<textarea name="cbnext"><?php echo !empty($slide['properties']['cbnext']) ? stripslashes($slide['properties']['cbnext']) : 'function() { }'?></textarea>
    		    		<br/>
    		    		<span class="description">Calling when you click the next button (or if you use keyboard or touch navigation).</span>
    		    	</td>
    		    </tr>
				</tbody>
			</table>
			
			<ul class="layerslider_slides_wrapper">
				<?php if(is_array($slide)) : ?>
				<?php if(is_array($slide['layers'])) : ?>
				<?php foreach($slide['layers'] as $layerkey => $layer) : ?>
				<li class="layerslider_slides">
					
					<div class="draggable_wrapper" style="width: <?php echo layerslider_check_unit($slide['properties']['width'])?>; height: <?php echo layerslider_check_unit($slide['properties']['height'])?>; position: relative;">
						<?php if(!empty($slide['properties']['yourlogo'])) : ?>
						<img src="<?php echo $slide['properties']['yourlogo']?>" style="<?php echo $slide['properties']['yourlogostyle']?>" class="layerslider-yourlogo-img">
						<?php endif;?>
						<div class="draggable" style="position: relative; background-image: url(<?php echo !empty($layer['properties']['background']) ? $layer['properties']['background'] : $slide['properties']['backgroundimage'] ?>); <?php echo  !empty($slide['properties']['backgroundcolor']) ? 'background-color: '.$slide['properties']['backgroundcolor'].'' : ''?>;">
							<?php if(is_array($layer['sublayers'])) : ?>
							<?php foreach($layer['sublayers'] as $sublayerkey => $sublayer) : ?>
								<?php if(empty($sublayer['type']) || $sublayer['type'] == 'img') { ?>
									<img src="<?php echo $sublayer['image']?>" style="position: absolute; top: <?php echo layerslider_check_unit($sublayer['top'])?>; left: <?php echo layerslider_check_unit($sublayer['left'])?>; z-index: <?php echo $sublayerkey?>;">
								<?php } else { ?>
									<<?php echo $sublayer['type']?> style="position: absolute; top:<?php echo layerslider_check_unit($sublayer['top'])?>; left:<?php echo layerslider_check_unit($sublayer['left'])?>; z-index: <?php echo $sublayerkey?>; <?php echo $sublayer['style']?>"><?php echo stripslashes($sublayer['html'])?></<?php echo $sublayer['type']?>>
								<?php } ?>
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>

			    	<h2 class="layertitle">Layer Properties:</h2>
					<table>
						<tr>
							<th>Title</th>
							<th>Background</th>
							<th>SlideDirection</th>
							<th>SlideDelay</th>
							<th>DurationIn</th>
							<th>DurationOut</th>
							<th>EasingIn</th>
							<th>EasingOut</th>
							<th>DelayIn</th>
							<th>DelayOut</th>
						</tr>
						<tr>
							<td><input type="text" name="title" value="<?php echo $layer['properties']['title']?>" class="resize"></td>
							<td>
								<input type="text" name="background" class="layerslider_upload_input" value="<?php echo $layer['properties']['background']?>">
								<button class="button-primary layerslider-bg-reset empty">Reset</button>
							</td>
							<td>
								<select name="slidedirection">
									<option <?php echo ($layer['properties']['slidedirection'] == 'left') ? 'selected="selected"' : ''?>>left</option>
									<option <?php echo ($layer['properties']['slidedirection'] == 'right') ? 'selected="selected"' : ''?>>right</option>
									<option <?php echo ($layer['properties']['slidedirection'] == 'top') ? 'selected="selected"' : ''?>>top</option>
									<option <?php echo ($layer['properties']['slidedirection'] == 'bottom') ? 'selected="selected"' : ''?>>bottom</option>
								</select>
							</td>
							<td><input type="text" name="slidedelay" value="<?php echo $layer['properties']['slidedelay']?>"></td>
							<td><input type="text" name="durationin" value="<?php echo $layer['properties']['durationin']?>"></td>
							<td><input type="text" name="durationout" value="<?php echo $layer['properties']['durationout']?>"></td>
							<td>
								<select name="easingin">
									<option <?php echo ($layer['properties']['easingin'] == 'linear')				? 'selected="selected"' : ''?>>linear</option>
									<option <?php echo ($layer['properties']['easingin'] == 'swing')				? 'selected="selected"' : ''?>>swing</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInQuad')			? 'selected="selected"' : ''?>>easeInQuad</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutQuad')		? 'selected="selected"' : ''?>>easeOutQuad</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutQuad')		? 'selected="selected"' : ''?>>easeInOutQuad</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInCubic')		? 'selected="selected"' : ''?>>easeInCubic</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutCubic')		? 'selected="selected"' : ''?>>easeOutCubic</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutCubic')		? 'selected="selected"' : ''?>>easeInOutCubic</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInQuart')		? 'selected="selected"' : ''?>>easeInQuart</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutQuart')		? 'selected="selected"' : ''?>>easeOutQuart</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutQuart')		? 'selected="selected"' : ''?>>easeInOutQuart</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInQuint')		? 'selected="selected"' : ''?>>easeInQuint</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutQuint')		? 'selected="selected"' : ''?>>easeOutQuint</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutQuint')		? 'selected="selected"' : ''?>>easeInOutQuint</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInSine')			? 'selected="selected"' : ''?>>easeInSine</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutSine')		? 'selected="selected"' : ''?>>easeOutSine</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutSine')		? 'selected="selected"' : ''?>>easeInOutSine</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInExpo')			? 'selected="selected"' : ''?>>easeInExpo</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutExpo')		? 'selected="selected"' : ''?>>easeOutExpo</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutExpo')		? 'selected="selected"' : ''?>>easeInOutExpo</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInCirc')			? 'selected="selected"' : ''?>>easeInCirc</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutCirc')		? 'selected="selected"' : ''?>>easeOutCirc</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutCirc')		? 'selected="selected"' : ''?>>easeInOutCirc</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInElastic')		? 'selected="selected"' : ''?>>easeInElastic</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutElastic')		? 'selected="selected"' : ''?>>easeOutElastic</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutElastic')	? 'selected="selected"' : ''?>>easeInOutElastic</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInBack')			? 'selected="selected"' : ''?>>easeInBack</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutBack')		? 'selected="selected"' : ''?>>easeOutBack</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutBack')		? 'selected="selected"' : ''?>>easeInOutBack</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInBounce')		? 'selected="selected"' : ''?>>easeInBounce</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeOutBounce')		? 'selected="selected"' : ''?>>easeOutBounce</option>
									<option <?php echo ($layer['properties']['easingin'] == 'easeInOutBounce')	? 'selected="selected"' : ''?>>easeInOutBounce</option>
								</select>
							</td>
							<td>
								<select name="easingout">
									<option <?php echo ($layer['properties']['easingout'] == 'linear')			? 'selected="selected"' : ''?>>linear</option>
									<option <?php echo ($layer['properties']['easingout'] == 'swing')				? 'selected="selected"' : ''?>>swing</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInQuad')		? 'selected="selected"' : ''?>>easeInQuad</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutQuad')		? 'selected="selected"' : ''?>>easeOutQuad</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutQuad')		? 'selected="selected"' : ''?>>easeInOutQuad</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInCubic')		? 'selected="selected"' : ''?>>easeInCubic</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutCubic')		? 'selected="selected"' : ''?>>easeOutCubic</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutCubic')	? 'selected="selected"' : ''?>>easeInOutCubic</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInQuart')		? 'selected="selected"' : ''?>>easeInQuart</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutQuart')		? 'selected="selected"' : ''?>>easeOutQuart</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutQuart')	? 'selected="selected"' : ''?>>easeInOutQuart</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInQuint')		? 'selected="selected"' : ''?>>easeInQuint</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutQuint')		? 'selected="selected"' : ''?>>easeOutQuint</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutQuint')	? 'selected="selected"' : ''?>>easeInOutQuint</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInSine')		? 'selected="selected"' : ''?>>easeInSine</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutSine')		? 'selected="selected"' : ''?>>easeOutSine</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutSine')		? 'selected="selected"' : ''?>>easeInOutSine</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInExpo')		? 'selected="selected"' : ''?>>easeInExpo</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutExpo')		? 'selected="selected"' : ''?>>easeOutExpo</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutExpo')		? 'selected="selected"' : ''?>>easeInOutExpo</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInCirc')		? 'selected="selected"' : ''?>>easeInCirc</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutCirc')		? 'selected="selected"' : ''?>>easeOutCirc</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutCirc')		? 'selected="selected"' : ''?>>easeInOutCirc</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInElastic')		? 'selected="selected"' : ''?>>easeInElastic</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutElastic')	? 'selected="selected"' : ''?>>easeOutElastic</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutElastic')	? 'selected="selected"' : ''?>>easeInOutElastic</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInBack')		? 'selected="selected"' : ''?>>easeInBack</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutBack')		? 'selected="selected"' : ''?>>easeOutBack</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutBack')		? 'selected="selected"' : ''?>>easeInOutBack</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInBounce')		? 'selected="selected"' : ''?>>easeInBounce</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeOutBounce')		? 'selected="selected"' : ''?>>easeOutBounce</option>
									<option <?php echo ($layer['properties']['easingout'] == 'easeInOutBounce')	? 'selected="selected"' : ''?>>easeInOutBounce</option>
								</select>
							</td>
							<td><input type="text" name="delayin" value="<?php echo $layer['properties']['delayin']?>"></td>
							<td><input type="text" name="delayout" value="<?php echo $layer['properties']['delayout']?>"></td>
						</tr>
					</table>
					<h2 class="layertitle">Sublayers:</h2>
					<label class="layerslider-advanced-options">
						<input type="checkbox" name="advanced_options" <?php echo isset($layer['properties']['advanced_options']) ? 'checked="checked"' : ''?>>
						<span>Show Advanced Options</span>
					</label>
					
					<table>
						<tbody class="sortable">
						<tr>
							<th></th>
							<th></th>
							<th>Type</th>
							<th>HTML</th>
							<th>Style</th>
							<th>ID</th>
							<th>Top</th>
							<th>Left</th>
							<th>Image</th>
							<th>Link</th>
							<th>Target</th>
							<th>P.Level</th>
							<th>SlideDirection</th>
							<th>SlideOutDirection</th>
							<th>ParallaxIn</th>
							<th>ParallaxOut</th>
							<th>DurationIn</th>
							<th>DurationOut</th>
							<th>EasingIn</th>
							<th>EasingOut</th>
							<th>DelayIn</th>
							<th>DelayOut</th>
							<th></th>
						</tr>
						<?php if(is_array($layer['sublayers'])) : ?>
						<?php foreach($layer['sublayers'] as $sublayerkey => $sublayer) : ?>
						<tr>
							<td><input type="checkbox" name="selected" class="layerslider-layer-select"></td>
							<td><div class="moveable"></div></td>
							<td>
    							<select name="type">
    								<option <?php echo ($sublayer['type'] == 'img') ? 'selected="selected"' : ''?>>img</option>
    								<option <?php echo ($sublayer['type'] == 'div') ? 'selected="selected"' : ''?>>div</option>
    								<option <?php echo ($sublayer['type'] == 'p') ? 'selected="selected"' : ''?>>p</option>
    								<option <?php echo ($sublayer['type'] == 'span') ? 'selected="selected"' : ''?>>span</option>
    								<option <?php echo ($sublayer['type'] == 'h1') ? 'selected="selected"' : ''?>>h1</option>
    								<option <?php echo ($sublayer['type'] == 'h2') ? 'selected="selected"' : ''?>>h2</option>
    								<option <?php echo ($sublayer['type'] == 'h3') ? 'selected="selected"' : ''?>>h3</option>
    								<option <?php echo ($sublayer['type'] == 'h4') ? 'selected="selected"' : ''?>>h4</option>
    								<option <?php echo ($sublayer['type'] == 'h5') ? 'selected="selected"' : ''?>>h5</option>
    								<option <?php echo ($sublayer['type'] == 'h6') ? 'selected="selected"' : ''?>>h6</option>
    							</select>
							</td>
							<td><input type="text" name="html" value="<?php echo str_replace('"', '&quot;', stripslashes($sublayer['html']))?>" class="resize"></td>
							<td><input type="text" name="style" value="<?php echo $sublayer['style']?>" class="resize"></td>
							<td><input type="text" name="id" value="<?php echo $sublayer['id']?>" class="resize"></td>
							<td><input type="text" name="top" value="<?php echo $sublayer['top']?>"></td>
							<td><input type="text" name="left" value="<?php echo $sublayer['left']?>"></td>
							<td><input type="text" name="image" class="layerslider_upload_input" value="<?php echo $sublayer['image']?>"></td>
							<td><input type="text" name="url" value="<?php echo $sublayer['url']?>" class="resize"></td>
							<td>
    							<select name="target">
    								<option <?php echo ($sublayer['target'] == '_self') 		? 'selected="selected"' : ''?>>_self</option>
    								<option <?php echo ($sublayer['target'] == '_blank') 		? 'selected="selected"' : ''?>>_blank</option>
    								<option <?php echo ($sublayer['target'] == '_parent') 		? 'selected="selected"' : ''?>>_parent</option>
    								<option <?php echo ($sublayer['target'] == '_top') 			? 'selected="selected"' : ''?>>_top</option>
    							</select>
							</td>
							<td><input type="text" name="level" value="<?php echo $sublayer['level']?>"></td>
							<td>
								<select name="slidedirection">
									<option <?php echo ($sublayer['slidedirection'] == 'auto') 		? 'selected="selected"' : ''?>>auto</option>
									<option <?php echo ($sublayer['slidedirection'] == 'left') 		? 'selected="selected"' : ''?>>left</option>
									<option <?php echo ($sublayer['slidedirection'] == 'right') 	? 'selected="selected"' : ''?>>right</option>
									<option <?php echo ($sublayer['slidedirection'] == 'top')		? 'selected="selected"' : ''?>>top</option>
									<option <?php echo ($sublayer['slidedirection'] == 'bottom') 	? 'selected="selected"' : ''?>>bottom</option>
									<option <?php echo ($sublayer['slidedirection'] == 'fade') 		? 'selected="selected"' : ''?>>fade</option>
								</select>					
							</td>
							<td>
								<select name="slideoutdirection">
									<option <?php echo ($sublayer['slideoutdirection'] == 'auto') 		? 'selected="selected"' : ''?>>auto</option>
									<option <?php echo ($sublayer['slideoutdirection'] == 'left') 		? 'selected="selected"' : ''?>>left</option>
									<option <?php echo ($sublayer['slideoutdirection'] == 'right') 		? 'selected="selected"' : ''?>>right</option>
									<option <?php echo ($sublayer['slideoutdirection'] == 'top')		? 'selected="selected"' : ''?>>top</option>
									<option <?php echo ($sublayer['slideoutdirection'] == 'bottom') 	? 'selected="selected"' : ''?>>bottom</option>
									<option <?php echo ($sublayer['slideoutdirection'] == 'fade') 		? 'selected="selected"' : ''?>>fade</option>
								</select>					
							</td>
							<td><input type="text" name="parallaxin" value="<?php echo $sublayer['parallaxin']?>"></td>
							<td><input type="text" name="parallaxout" value="<?php echo $sublayer['parallaxout']?>"></td>
							<td><input type="text" name="durationin" value="<?php echo $sublayer['durationin']?>"></td>
							<td><input type="text" name="durationout" value="<?php echo $sublayer['durationout']?>"></td>
							<td>
								<select name="easingin">
									<option <?php echo ($sublayer['easingin'] == 'linear')				? 'selected="selected"' : ''?>>linear</option>
									<option <?php echo ($sublayer['easingin'] == 'swing')				? 'selected="selected"' : ''?>>swing</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInQuad')			? 'selected="selected"' : ''?>>easeInQuad</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutQuad')		? 'selected="selected"' : ''?>>easeOutQuad</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutQuad')		? 'selected="selected"' : ''?>>easeInOutQuad</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInCubic')		? 'selected="selected"' : ''?>>easeInCubic</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutCubic')		? 'selected="selected"' : ''?>>easeOutCubic</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutCubic')		? 'selected="selected"' : ''?>>easeInOutCubic</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInQuart')		? 'selected="selected"' : ''?>>easeInQuart</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutQuart')		? 'selected="selected"' : ''?>>easeOutQuart</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutQuart')		? 'selected="selected"' : ''?>>easeInOutQuart</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInQuint')		? 'selected="selected"' : ''?>>easeInQuint</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutQuint')		? 'selected="selected"' : ''?>>easeOutQuint</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutQuint')		? 'selected="selected"' : ''?>>easeInOutQuint</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInSine')			? 'selected="selected"' : ''?>>easeInSine</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutSine')		? 'selected="selected"' : ''?>>easeOutSine</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutSine')		? 'selected="selected"' : ''?>>easeInOutSine</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInExpo')			? 'selected="selected"' : ''?>>easeInExpo</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutExpo')		? 'selected="selected"' : ''?>>easeOutExpo</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutExpo')		? 'selected="selected"' : ''?>>easeInOutExpo</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInCirc')			? 'selected="selected"' : ''?>>easeInCirc</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutCirc')		? 'selected="selected"' : ''?>>easeOutCirc</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutCirc')		? 'selected="selected"' : ''?>>easeInOutCirc</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInElastic')		? 'selected="selected"' : ''?>>easeInElastic</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutElastic')		? 'selected="selected"' : ''?>>easeOutElastic</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutElastic')	? 'selected="selected"' : ''?>>easeInOutElastic</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInBack')			? 'selected="selected"' : ''?>>easeInBack</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutBack')		? 'selected="selected"' : ''?>>easeOutBack</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutBack')		? 'selected="selected"' : ''?>>easeInOutBack</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInBounce')		? 'selected="selected"' : ''?>>easeInBounce</option>
									<option <?php echo ($sublayer['easingin'] == 'easeOutBounce')		? 'selected="selected"' : ''?>>easeOutBounce</option>
									<option <?php echo ($sublayer['easingin'] == 'easeInOutBounce')	? 'selected="selected"' : ''?>>easeInOutBounce</option>
								</select>
							</td>
							<td>
								<select name="easingout">
									<option <?php echo ($sublayer['easingout'] == 'linear')			? 'selected="selected"' : ''?>>linear</option>
									<option <?php echo ($sublayer['easingout'] == 'swing')				? 'selected="selected"' : ''?>>swing</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInQuad')		? 'selected="selected"' : ''?>>easeInQuad</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutQuad')		? 'selected="selected"' : ''?>>easeOutQuad</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutQuad')		? 'selected="selected"' : ''?>>easeInOutQuad</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInCubic')		? 'selected="selected"' : ''?>>easeInCubic</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutCubic')		? 'selected="selected"' : ''?>>easeOutCubic</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutCubic')	? 'selected="selected"' : ''?>>easeInOutCubic</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInQuart')		? 'selected="selected"' : ''?>>easeInQuart</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutQuart')		? 'selected="selected"' : ''?>>easeOutQuart</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutQuart')	? 'selected="selected"' : ''?>>easeInOutQuart</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInQuint')		? 'selected="selected"' : ''?>>easeInQuint</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutQuint')		? 'selected="selected"' : ''?>>easeOutQuint</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutQuint')	? 'selected="selected"' : ''?>>easeInOutQuint</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInSine')		? 'selected="selected"' : ''?>>easeInSine</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutSine')		? 'selected="selected"' : ''?>>easeOutSine</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutSine')		? 'selected="selected"' : ''?>>easeInOutSine</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInExpo')		? 'selected="selected"' : ''?>>easeInExpo</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutExpo')		? 'selected="selected"' : ''?>>easeOutExpo</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutExpo')		? 'selected="selected"' : ''?>>easeInOutExpo</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInCirc')		? 'selected="selected"' : ''?>>easeInCirc</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutCirc')		? 'selected="selected"' : ''?>>easeOutCirc</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutCirc')		? 'selected="selected"' : ''?>>easeInOutCirc</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInElastic')		? 'selected="selected"' : ''?>>easeInElastic</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutElastic')	? 'selected="selected"' : ''?>>easeOutElastic</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutElastic')	? 'selected="selected"' : ''?>>easeInOutElastic</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInBack')		? 'selected="selected"' : ''?>>easeInBack</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutBack')		? 'selected="selected"' : ''?>>easeOutBack</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutBack')		? 'selected="selected"' : ''?>>easeInOutBack</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInBounce')		? 'selected="selected"' : ''?>>easeInBounce</option>
									<option <?php echo ($sublayer['easingout'] == 'easeOutBounce')		? 'selected="selected"' : ''?>>easeOutBounce</option>
									<option <?php echo ($sublayer['easingout'] == 'easeInOutBounce')	? 'selected="selected"' : ''?>>easeInOutBounce</option>
								</select>
							</td>
							<td><input type="text" name="delayin" value="<?php echo $sublayer['delayin']?>"></td>
							<td><input type="text" name="delayout" value="<?php echo $sublayer['delayout']?>"></td>
							<td><a href="#" class="remove button-primary">remove</a></a></td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
					</table>
					<p>
						<button class="layerslider_add_sublayer button-primary">Add New Sublayer</button>
						<button class="layerslider_remove_layer button-primary">Remove This Layer</button>
					</p>
				</li>
				<?php endforeach; ?>
				<?php endif; ?>
				<?php endif; ?>
			</ul>
			<button class="layerslider_add_slide button-primary">Add New Layer</button>
			<button class="layerslider_sort_layers button-primary">Reorder Layers</button>
			
			<p class="submit">
    			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    		</p>
		</form>
		</div>
		<?php endforeach; ?>
	</div>
