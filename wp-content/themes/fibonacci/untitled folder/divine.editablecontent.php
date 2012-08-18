<?php

// frontend module only
if(
	strstr($_SERVER['REQUEST_URI'], 'wp-admin') ||
	strstr($_SERVER['REQUEST_URI'], 'wp-login')
)
	return false;


wp_enqueue_script("jquery");







 
 
 
class DivineEditableContent {
        
    /**
    * Create or update editable content table structure
    * 
    */
	public function CreateDB() {
		mysql_query("
           CREATE TABLE IF NOT EXISTS `divine_editable_content`(
            id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
           ) ENGINE = MYISAM;
        ");
        
        $this->UpdateFields('divine_editable_content');
	}

    /**
    * Get editable content value
    * 
    * @param mixed $var
    * Editable content element identifier
    * 
    * @return Editable content value
    */
	public function Get($var) {
		list($content) = mysql_fetch_row(mysql_query("SELECT content FROM divine_editable_content WHERE var = '{$var}' AND `theme_id`='".DIVINE_BILLBOARDS_THEME_ID."'"));
		
		return $content;
	}
	
    /**
    * Set editable content value in database
    * 
    * @param mixed $var
    * Editable content element identifier  
    * @param mixed $content
    * Content value
    * @param mixed $rewrite
    * If this argument is True. then always rewrite content to a new one, otherwise check for existance and add if doesn't
    */
	public function Set($var, $content, $rewrite = true) {
		list($id) = mysql_fetch_row(mysql_query("SELECT id FROM divine_editable_content WHERE var = '{$var}' AND `theme_id`='".DIVINE_BILLBOARDS_THEME_ID."'"));
		
		if(!$id) {
			// add
			mysql_query("
				INSERT divine_editable_content
				SET
                    theme_id = '".DIVINE_BILLBOARDS_THEME_ID."',
					var = '{$var}',
					content = '{$content}'
			") or die(mysql_error());
		} elseif($rewrite) {
			// update
			mysql_query("
				UPDATE divine_editable_content
				SET
					content = '{$content}'
				WHERE
					var = '{$var}' AND
                    theme_id = '".DIVINE_BILLBOARDS_THEME_ID."'
			") or die(mysql_error());
		}
		
		return true;
	}
	
    /**
    * Generate editable content header only for admin user
    * 
    * @return Editable content header
    * 
    */
	public function Head() {
		$admin = wp_get_current_user()->user_level >= 10;
		if(!$admin)
			return false;
		
		?>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/divine.editablecontent.css.php" type="text/css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/divine.editablecontent.js.php"></script>
		
		<link rel="stylesheet" id="thickbox-css"  href="<?php echo get_template_directory_uri(); ?>/thickbox.css" type="text/css" media="all" />
		<link rel="stylesheet" id="colors-css"  href="<?php echo get_template_directory_uri(); ?>/colors-fresh.css" type="text/css" media="all" />

		<script type="text/javascript">
			addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
			var userSettings = {
					'url': '/',
					'uid': '1',
					'time':'<?php echo time(); ?>'
				},
				ajaxurl = '<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php',
				pagenow = 'post',
				typenow = 'post',
				adminpage = 'post-php',
				thousandsSeparator = ',',
				decimalPoint = '.',
				isRtl = 0;
		</script>
		<script type="text/javascript" src="<?php bloginfo("url"); ?>/wp-includes/js/l10n.js"></script>
		<script type="text/javascript" src="<?php bloginfo("url"); ?>/wp-admin/load-scripts.php?c=1&load=jquery,utils,editor"></script>
		<script type="text/javascript">
			var commonL10n = {
				warnDelete: "You are about to permanently delete the selected items.\n  \'Cancel\' to stop, \'OK\' to delete."
			};
			try{convertEntities(commonL10n);}catch(e){};
			var wpAjax = {
				noPerm: "You do not have permission to do that.",
				broken: "An unidentified error has occurred."
			};
			try{convertEntities(wpAjax);}catch(e){};
			var autosaveL10n = {
				autosaveInterval: "0",
				previewPageText: "Preview this Page",
				previewPostText: "Preview this Post",
				requestFile: "<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php",
				savingText: "Saving Draft&#8230;",
				saveAlert: "The changes you made will be lost if you navigate away from this page."
			};
			try{convertEntities(autosaveL10n);}catch(e){};
			var adminCommentsL10n = {
				hotkeys_highlight_first: "",
				hotkeys_highlight_last: ""
			};
			var postL10n = {
				tagsUsed: "Tags used on this post:",
				add: "Add",
				addTag: "Add new Tag",
				separate: "Separate tags with commas",
				ok: "OK",
				cancel: "Cancel",
				edit: "Edit",
				publishOn: "Publish on:",
				publishOnFuture: "Schedule for:",
				publishOnPast: "Published on:",
				showcomm: "Show more comments",
				endcomm: "No more comments found.",
				publish: "Publish",
				schedule: "Schedule",
				update: "Update",
				savePending: "Save as Pending",
				saveDraft: "Save Draft",
				private: "Private",
				public: "Public",
				publicSticky: "Public, Sticky",
				password: "Password Protected",
				privatelyPublished: "Privately Published",
				published: "Published"
			};
			try{convertEntities(postL10n);}catch(e){};
			var wordCountL10n = {
				count: "Word count: %d"
			};
			try{convertEntities(wordCountL10n);}catch(e){};
			var thickboxL10n = {
				next: "Next &gt;",
				prev: "&lt; Prev",
				image: "Image",
				of: "of",
				close: "Close",
				noiframes: "This feature requires inline frames. You have iframes disabled or your browser does not support them."
			};
			try{convertEntities(thickboxL10n);}catch(e){};
		</script>
		<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-admin/load-scripts.php?c=1&load=thickbox,media-upload"></script>

		<script type="text/javascript">
			tinyMCEPreInit = {
				base : "<?php bloginfo('url'); ?>/wp-includes/js/tinymce",
				suffix : "",
				query : "ver=3393",
				mceInit : {mode:"specific_textareas", editor_selector:"theEditor", width:"100%", theme:"advanced", skin:"wp_theme", theme_advanced_buttons1:"bold,italic,strikethrough,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,|,link,unlink,wp_more,|,spellchecker,fullscreen,wp_adv", theme_advanced_buttons2:"formatselect,underline,justifyfull,forecolor,|,pastetext,pasteword,removeformat,|,charmap,|,outdent,indent,|,undo,redo,wp_help", theme_advanced_buttons3:"", theme_advanced_buttons4:"", language:"en", spellchecker_languages:"+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv", theme_advanced_toolbar_location:"top", theme_advanced_toolbar_align:"left", theme_advanced_statusbar_location:"bottom", theme_advanced_resizing:true, theme_advanced_resize_horizontal:false, dialog_type:"modal", formats:{
						alignleft : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'left'}},
							{selector : 'img,table', classes : 'alignleft'}
						],
						aligncenter : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'center'}},
							{selector : 'img,table', classes : 'aligncenter'}
						],
						alignright : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'right'}},
							{selector : 'img,table', classes : 'alignright'}
						],
						strikethrough : {inline : 'del'}
					}, relative_urls:false, remove_script_host:false, convert_urls:false, apply_source_formatting:false, remove_linebreaks:true, gecko_spellcheck:true, entities:"38,amp,60,lt,62,gt", accessibility_focus:true, tabfocus_elements:"major-publishing-actions", media_strict:false, paste_remove_styles:true, paste_remove_spans:true, paste_strip_class_attributes:"all", paste_text_use_dialog:true, wpeditimage_disable_captions:false, plugins:"inlinepopups,spellchecker,paste,wordpress,fullscreen,wpeditimage,wpgallery,tabfocus,wplink,wpdialogs"},
				load_ext : function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
			};
		</script>
		<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-includes/js/tinymce/wp-tinymce.php?c=1"></script>
		<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-includes/js/tinymce/langs/wp-langs-en.js"></script>
		<script type="text/javascript">
			tinyMCE.init(tinyMCEPreInit.mceInit);
		</script>
		
		<?php
	}
	
    /**
    * Generate front-end label only for admin user
    * 
    */
	public function Body() {
		$admin = wp_get_current_user()->user_level >= 10;
		if(!$admin)
			return false;
		if(!isset($var))$var = '';
        echo "
			<div id=\"".DIVINE_EDITABLECONTENT_CSSID."\">
                <div id=\"".DIVINE_EDITABLECONTENT_CSSID."_head\"><a style=\"color:#000;text-decoration:none;\"  target=\"_blank\" href=\"http://divine-project.com/\">Divine Elemente</a></div>

                <div style=\"height:20px;border-bottom:1px solid #292929;margin:0 20px;padding:5px 0;color:#fff;overflow: hidden;width:120px;\">
                    <div id=\"switch\" onclick=\"EditableContentPanel()\"></div>
                    <input type=\"hidden\" id=\"isEdit\" value=\"off\">
                    <div style=\"float:left;padding-left:6px;padding-top:2px;cursor:pointer;\" onclick=\"EditableContentPanel()\">Edit Content</div>
                    <div style=\"clear:both\"></div>
                </div>
                
                <div style=\"height:20px;border-bottom:1px solid #292929;margin:0 20px;padding:5px 0;color:#fff;overflow: hidden;width:120px;\">
                    <div id=\"wordpress\"></div>
                    <div style=\"float:left;padding-left:8px;padding-top:2px;\"><a style=\"color:#fff;text-decoration:none;\" href=\"/wp-admin\">Go to backend</a></div>
                    <div style=\"clear:both\"></div>
                </div>

                <div style=\"height:20px;margin:0 20px;padding:5px 0;color:#fff;overflow: hidden;width:120px;\">
                    <div id=\"logout\"></div>
                    <div style=\"float:left;padding-left:9px;padding-top:2px;\"><a style=\"color:#fff;text-decoration:none;\" href=\"".wp_logout_url()."\">Log out</a></div>
                    <div style=\"clear:both\"></div>
                </div>
			</div>
            <div id=\"shroud\"></div>
<script language=\"JavaScript\" type=\"text/javascript\">
<!--

function $(id){
	return document.getElementById(id);
}

var _startX = 0;			// mouse starting positions
var _startY = 0;
var _offsetX = 0;			// current element offset
var _offsetY = 0;
var _dragElement;			// needs to be passed from OnMouseDown to OnMouseMove
var _oldZIndex = 0;			// we temporarily increase the z-index during drag

InitDragDrop();

function InitDragDrop(){
	document.onmousedown = OnMouseDown;
	document.onmouseup = OnMouseUp;
}

function OnMouseDown(e){
    jQuery('.drag').css('cursor','move');
	if (e == null) 
		e = window.event; 
	var target = e.target != null ? e.target : e.srcElement;
	if((e.button == 1 && window.event != null || 
		e.button == 0) && 
		target.className == 'drag'){
		_startX = e.clientX;
		_startY = e.clientY;
		_offsetX = ExtractNumber(target.style.left);
		_offsetY = ExtractNumber(target.style.top);
		_oldZIndex = target.style.zIndex;
		target.style.zIndex = 10000;
		_dragElement = target;
		document.onmousemove = OnMouseMove;
		document.body.focus();
		document.onselectstart = function () { return false; };
		target.ondragstart = function() { return false; };
		return false;
    }
}

function ExtractNumber(value){
	var n = parseInt(value);
	return n == null || isNaN(n) ? 0 : n;
}

function OnMouseMove(e){
	if(e == null) 
		var e = window.event; 
	_dragElement.style.left = (_offsetX + e.clientX - _startX) + 'px';
	_dragElement.style.top = (_offsetY + e.clientY - _startY) + 'px';
}

function OnMouseUp(e){
    jQuery('.drag').css('cursor','default');
	if(_dragElement != null){
		_dragElement.style.zIndex = _oldZIndex;
		document.onmousemove = null;
		document.onselectstart = null;
		_dragElement.ondragstart = null;
		_dragElement = null;
	}
}
//-->
</script>

			<div id=\"div_ec_e\" class=\"drag\" style=\"display:none;top:100px;left:300px;\">
            &nbsp;&nbsp;&nbsp;Edit: \"<span id=\"div_ec_title\"></span>\"
            <div style=\"cursor:pointer;height:15px;width:16px;float:right;margin-right:11px;margin-top:1px;color:#ffffff;font-size:13px;font-weight:bold;-webkit-border-radius:2px;-moz-border-radius:2px;background-color:#4b4a48;\" onClick=\"DivineEditableClose('{$var}')\"><div style=\"padding-left:4px;margin-top:-2px;\">x</div></div>
            <div style=\"clear:both;height:5px;\"></div>
				<div style=\"padding:0 10px 20px;background:#ffffff;\">
					<div style=\"padding:22px 0 0 10px;vertical-align: bottom;\">
						<div style=\"float:left;color:#333333;padding:5px 10px 5px 0;\">Upload/Insert</div>
						<div style=\"float:left;margin-top:7px;\">
							<a style=\"margin-left:5px;\" href=\"".get_bloginfo('url')."/wp-admin/media-upload.php?post_id=4&amp;type=image&amp;TB_iframe=1&amp;width=640&amp;height=380\" id=\"add_image\" class=\"thickbox\" title=\"Add an Image\"><img src=\"".get_bloginfo('url')."/wp-admin/images/media-button-image.gif?ver=20100531\" alt=\"Add an Image\" style=\"border:0\"></a>
							<a style=\"margin-left:5px;\" href=\"".get_bloginfo('url')."/wp-admin/media-upload.php?post_id=4&amp;type=video&amp;TB_iframe=1&amp;width=640&amp;height=380\" id=\"add_video\" class=\"thickbox\" title=\"Add Video\" style=\"border:0\"><img src=\"".get_bloginfo('url')."/wp-admin/images/media-button-video.gif?ver=20100531\" alt=\"Add Video\" style=\"border:0\"></a>
							<a style=\"margin-left:5px;\" href=\"".get_bloginfo('url')."/wp-admin/media-upload.php?post_id=4&amp;type=audio&amp;TB_iframe=1&amp;width=640&amp;height=380\" id=\"add_audio\" class=\"thickbox\" title=\"Add Audio\" style=\"border:0\"><img src=\"".get_bloginfo('url')."/wp-admin/images/media-button-music.gif?ver=20100531\" alt=\"Add Audio\" style=\"border:0\"></a>
							<a style=\"margin-left:5px;\" href=\"".get_bloginfo('url')."/wp-admin/media-upload.php?post_id=4&amp;TB_iframe=1&amp;width=640&amp;height=380\" id=\"add_media\" class=\"thickbox\" title=\"Add Media\" style=\"border:0\"><img src=\"".get_bloginfo('url')."/wp-admin/images/media-button-other.gif?ver=20100531\" alt=\"Add Media\" style=\"border:0\"></a>                    
						</div>
						<div style=\"background-color:#f1f1f1;color:#999999;margin-right:14px;\" class=\"tabs_html_visual\" id=\"div_ec_tab1\" onClick=\"DivineEditableContentTab(2)\">HTML</div>
						<div style=\"background-color:#e9e9e9;color:#333333;margin-right:5px;\" class=\"tabs_html_visual\" id=\"div_ec_tab2\" onClick=\"DivineEditableContentTab(1)\">Visual</div>
						<div style=\"clear:both;\"></div>
					</div>
					<div id=\"div_ec_1\">
						<textarea class=\"theEditor\" style=\"width:100%;\" id=\"div_ec_1_ta\"></textarea>
					</div>
					<div id=\"div_ec_2\" style=\"display:none;\">
						<textarea style=\"height:220px;width:644px;border:1px solid #e9e9e9;\" id=\"div_ec_2_ta\"></textarea>
					</div>
					<div style=\"padding-top:20px;font-size:11px;color:#333333;\">
					Powered by <a href=\"http://divine-project.com\" target=\"_blank\" style=\"font-size:11px;text-transform: none;color:#0066cc;\" title=\"Divine Elemente\">Divine Elemente</a> &amp; 
					<a href=\"http://wordpress.org\" target=\"_blank\" style=\"font-size:11px;text-transform: none;color:#0066cc;\" title=\"Wordpress\">WordPress</a>
					</div>
					<div style=\"float:right;margin-top:-18px;\">
						<input class=\"button\" type=\"button\" style=\"font-weight:bold;margin-right:10px;\" id=\"div_ec_e_save\" onClick=\"\" value=\"OK\">
						<input class=\"button\" type=\"button\" onClick=\"DivineEditableClose()\" value=\"Cancel\">
					</div>
				</div>
			</div>
		";
	}
	
    /**
    * Generate editable content block
    * 
    * @param mixed $var
    * Editable content identifier
    */
	public function Html($var) {
		$content = $this->Get($var);
		
		return "
			<span id=\"div_ec_{$var}\">{$content}</span>
		";
	}
	
    /**
    * Generate editable content edit button
    * 
    * @param mixed $var
    * Editable content identifier    
    */
	public function Admin($var) {
		$admin = wp_get_current_user()->user_level >= 10;
		
		if($admin) {
			$content = $this->Get($var);
			
			return "
				<div class=\"fly_panel\" id=\"{$var}_block\" onClick=\"DivineEditableContentEdit('{$var}')\"></div>
				<script type=\"text/javascript\">
					jQuery(document).ready(function(){
						var p = jQuery('span#div_ec_{$var}').children();
						var position = p.position();
						document.getElementById('{$var}_block').style.top = (position.top+3)+'px';
						document.getElementById('{$var}_block').style.left = (position.left-20)+'px';
					});
				</script>
				
				<div id=\"div_ec_{$var}_e\" style=\"display: none;\">".$content."</div>
			";
		}
	}
	
    /**
    * Generate editable content markup
    * 
    * @param mixed $var
    */
	public function Show($var) {
        echo $this->Admin($var);

        $val = eval( '?>'.$this->Html($var) );
        echo $val;
	}
    
    /**
    * Get table fields list
    * 
    * @param tableName 
    * Table name to get fields list from
    */
    private function GetTableColumnsList($tableName) {
        $result = array();
     
        $query = mysql_query("DESCRIBE {$tableName}");
        if ( !$query ){
            return $result;
        }
        while($row = mysql_fetch_assoc($query)) { 
            $result[] = $row['Field'];
        }
     
        return $result;
    }
    
    /**
    * Add necessary table fields id they doesn't exist
    * 
    * @param mixed $tableName
    * Table name to check
    * 
    */
    private function UpdateFields($tableName){
        $tableFieldsNecessary = array(   'theme_id' => 'VARCHAR( 255 ) NOT NULL'
                                        , 'var'      => 'VARCHAR( 32 ) NOT NULL'
                                        , 'content'  => 'TEXT NOT NULL' );
                                    
        $tableFieldsCurrent = $this->GetTableColumnsList($tableName);
        foreach($tableFieldsNecessary as $fieldName => $createParams)
            if(!in_array($fieldName, $tableFieldsCurrent))
                mysql_query('ALTER TABLE  `'.$tableName.'` ADD  `'.$fieldName.'` '.$createParams.' ;');   
    }
}

$div_ec = new DivineEditableContent();


// ajax
// get
if(
	isset($_GET['div_ec_var']) &&
	!isset($_GET['div_ec_content'])
) {
	echo $div_ec->Get($_GET['div_ec_var']);
	die();
}
// set
if(
	isset($_GET['div_ec_var']) &&
	isset($_GET['div_ec_content'])
) {
	$div_ec->Set($_GET['div_ec_var'], $_GET['div_ec_content']);
	echo eval( '?>'.$div_ec->Get($_GET['div_ec_var']));
	die();
}

?>
