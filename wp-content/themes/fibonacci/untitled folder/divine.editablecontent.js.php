<?php include('divine.config.php'); ?>
<?php header('content-type: text/javascript;'); ?>
function DivineEditableContentEdit(v) {
	DivineEditableContentTab(1);
	jQuery.get(
		'./',
		{
			'div_ec_var': v
		},
		function(data) {
			//var content = jQuery('#div_ec_'+v+'_e').html();
			var content = data;
			content = content.replace('<'+'?', '&lt;?').replace('?'+'>', '?&gt;');
			tinyMCE.activeEditor.setContent(content);
		}
	);
	
	jQuery('#div_ec_title').text(v);
	
	jQuery('#div_ec_e_save').attr('onClick', 'DivineEditableContentSave(\''+v+'\')');
	
    jQuery('#shroud').show();
	jQuery('.drag').hide();
	jQuery('#div_ec_e').show();
	jQuery('#div_ec_e').focus();
}

function DivineEditableContentRenderFlyPanel(v){
    var p = jQuery('span#div_ec_'+v);
    var position = p.position();
    document.getElementById(v+'_block').style.top = (position.top-3)+'px';
    document.getElementById(v+'_block').style.left = (position.left-3)+'px';
    document.getElementById(v+'_block').style.height = (p.height()+6)+'px';
    document.getElementById(v+'_block').style.width = (p.width()+6)+'px';
}

function DivineEditableClose() {
	jQuery('#div_ec_e').hide();
    jQuery('#shroud').hide();
}                

function DivineEditableContentSave(v) {
	if(div_ec_tab == 1)
		var content = tinyMCE.activeEditor.getContent();
	else if(div_ec_tab == 2)
		var content = jQuery('#div_ec_2_ta').val();
	
	content = content.replace('&lt;?', '<'+'?').replace('?&gt;', '?'+'>');
	jQuery.get(
		'./',
		{
			'div_ec_var': v,
			'div_ec_content': content
		},
		function(data) {
			content = data;
			jQuery('#div_ec_'+v).html(content);
			jQuery('#div_ec_'+v+'_e').html(content);
			
			jQuery('#div_ec_e').hide();
			
			jQuery('#shroud').hide();
            //DivineEditableContentRenderFlyPanel(v);
		}
	);
}

function EditableContentPanel() {
	var whot = jQuery('#isEdit').val();
	if(whot == 'off'){
		jQuery('.fly_panel').show();
		jQuery('#switch').css('background','url(<?php echo str_replace('/divine.editablecontent.js.php', '', $_SERVER['REQUEST_URI']) ?>/images/editable-content-checkbox-checked.gif)');
        jQuery('#isEdit').val('on');
	}else{
		jQuery('.fly_panel').hide();
		jQuery('#switch').css('background','url(<?php echo str_replace('/divine.editablecontent.js.php', '', $_SERVER['REQUEST_URI']) ?>/images/editable-content-checkbox-unchecked.gif)');
        jQuery('#isEdit').val('off');
	}
}

function mousePageXY(e) {
	var x = 0, y = 0;
	if(!e) e = window.event;
	if(e.pageX || e.pageY) {
		x = e.pageX;
		y = e.pageY;
	}
	else if(e.clientX || e.clientY) {
		x = e.clientX + 
			(document.documentElement.scrollLeft || document.body.scrollLeft) - 
			document.documentElement.clientLeft;
	}
	return x;
}

var show = false;
var show_action = false;
jQuery(document).mousemove(function(e){
	var mCur = mousePageXY(e);
	var x    = document.body.clientWidth;

    <?php if(DIVINE_EDITABLECONTENT_POSITION == 'left'): ?>
       
        if(mCur <= 50 && !show) show = true;
        if(mCur >= 200 && show) show = false;

    	if(show && !show_action){
            show_action = true;
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').css('left','-160px');
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').css('width','160px');
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').css('display','block');
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').stop(true,true).animate({left:0}, 400);
    	}
    	
        if(!show && show_action){
            show_action = false;
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').stop(true,true).animate({left:-160}, 400);
    	}
    <?php else: ?>
        if(mCur >= x-50 && !show) show = true;
        if(mCur <= x-200 && show) show = false;

    	if(show && !show_action){
            show_action = true;
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').css('display','block');
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').stop(true,true).animate({width:160}, 400);
    	}
    	
        if(!show && show_action){
            show_action = false;
            jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').stop(true,true).animate({width:0}, 400,function(){
                jQuery('#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>').css('display','none');
            });
    	}
    <?php endif; ?>


    if(show)
        window.status = 'true';
    else
        window.status = 'false';

});

var div_ec_tab = 1;
function DivineEditableContentTab(id) {
	switch(id) {
		case 1:
			if(div_ec_tab == 1)
				return false;
			
			// activate tab 1
			jQuery('#div_ec_tab1').css({'background-color': '#f1f1f1', 'color': '#999999'});
			jQuery('#div_ec_tab2').css({'background-color': '#e9e9e9', 'color': '#333333'});
			
			var content = jQuery('#div_ec_2_ta').val();
			content = content.replace('<'+'?', '&lt;?').replace('?'+'>', '?&gt;');
			tinyMCE.activeEditor.setContent(content);
			
			jQuery('#div_ec_2').hide();
			jQuery('#div_ec_1').show();
			
			div_ec_tab = 1;
			break;
		case 2:
			if(div_ec_tab == 2)
				return false;
			
			// activate tab 2
			jQuery('#div_ec_tab1').css({'background-color': '#e9e9e9', 'color': '#333333'});
			jQuery('#div_ec_tab2').css({'background-color': '#f1f1f1', 'color': '#999999'});
			
			var content = tinyMCE.activeEditor.getContent()
			content = content.replace('&lt;?', '<'+'?').replace('?&gt;', '?'+'>');
			jQuery('#div_ec_2_ta').val( content );
			
			jQuery('#div_ec_1').hide();
			jQuery('#div_ec_2').show();
			
			div_ec_tab = 2;
			break;
	}
}
