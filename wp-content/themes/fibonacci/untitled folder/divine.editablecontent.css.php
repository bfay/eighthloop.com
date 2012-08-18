<?php include('divine.config.php'); ?>
<?php header('content-type: text/css;'); ?>
body {
	line-height: normal !important;
}
#TB_window #TB_title {
    background-color: #222222;
    color: #CFCFCF;
}
#TB_closeAjaxWindow {
    float: right;
    padding: 6px 10px 0;
    text-align: right;
}
#TB_closeWindowButton img {
	border: 0;
}
std.mceToolbar{
	padding: 0;
	padding-top: 5px !important;
	height: 58px;
}

.mceIframeContainer iframe{
	height: 90px;
}

.wp_themeSkin{
	background: #ffffff;
}
#mce_1_wp_more, #mce_1_wp_adv,
#mce_5_wp_more, #mce_5_wp_adv,
#mce_2_wp_more, #mce_2_wp_adv,
#mce_4_wp_more, #mce_4_wp_adv,
#mce_3_wp_more, #mce_3_wp_adv,
#mce_6_wp_more, #mce_6_wp_adv,
#mce_0_wp_more, #mce_0_wp_adv,
.mceTop .mceLeft, .mceTop .mceCenter, .mceTop .mceRight{display:none !important;}
.mceTop{border:1px solid #C6D9E9 !important;background:#E1E1E1;}
.mceTop span{
	border-right:1px solid #C6D9E9 !important;
	background:#E1E1E1 !important;
	color:#2B6FB6 !important;
	font-size:15px !important;
}
.mceRight{border-right:1px solid #C6D9E9 !important;background:#E1E1E1;}
.mceTop{
	background: #E4F2FD;
	border-top: 1px solid #C6D9E9;
	top: 0px;
	left: 0px;
	width: 100%;
}
.mceIframeContainer, .mceStatusbar{
	border:1px solid #E1E1E1!important;
	border-top:none!important;
}
.mce_1_tbl{height:100px;}
.clearlooks2{background:#F1F1F1!important;}

#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?> {
    font-family: Arial, sans-serif;
    font-size: 12px;
    background-color:#333333;
    height: 150px;
    position: fixed;
    top:0;
    display: none;
    <?php echo DIVINE_EDITABLECONTENT_POSITION; ?>:0;
	width:0px;
	filter: progid:DXImageTransform.Microsoft.Alpha(opacity=90);
	opacity: 0.9;
	-moz-opacity: 0.9;
    margin-top:28px;
    z-index:9;
    -webkit-box-shadow:3px 3px 15px rgba(0, 0, 0, .15);
}

#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?>_head {
    background-image: url(<?php echo str_replace('/divine.editablecontent.css.php', '', $_SERVER['REQUEST_URI']) ?>/images/divine_admin_ico.gif);
    background-repeat: no-repeat;
    background-position: 23px 13px;
    height:27px;
    width:114px;
    background-color:#ffffff;
    padding-left: 46px;
    padding-top:12px;
    margin-bottom: 9px;
}

#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?> #switch{
    float: left;
    background-image: url(<?php echo str_replace('/divine.editablecontent.css.php', '', $_SERVER['REQUEST_URI']) ?>/images/editable-content-checkbox-unchecked.gif);
    height: 19px;
    width: 19px;
    cursor: pointer;
}

#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?> #wordpress{
    float: left;
    background-image: url(<?php echo str_replace('/divine.editablecontent.css.php', '', $_SERVER['REQUEST_URI']) ?>/images/editable-content-backend.gif);
    height: 14px;
    width: 14px;
    margin:3px 0 0 3px;
    cursor: pointer;
}

#<?php echo DIVINE_EDITABLECONTENT_CSSID; ?> #logout{
    float: left;
    background-image: url(<?php echo str_replace('/divine.editablecontent.css.php', '', $_SERVER['REQUEST_URI']) ?>/images/editable-content-logout.gif);
    height: 12px;
    width: 12px;
    margin:3px 0 0 4px;
    cursor: pointer;
}



#shroud{
    display:none;
    position:fixed;
    top:0;
    left:0;
    height:100%;
    width:100%;
    background-color:#000000;
	filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60);
	opacity: 0.6;
	-moz-opacity: 0.6;
    z-index:9;
}

#switch{
	cursor:pointer;
	text-decoration:underline;
}
.fly_panel{
    cursor: pointer;
    background-image:  url(images/divine_admin_ico.gif);
    width: 16px;
    height: 14px;
	display:none;
	position:absolute;
    z-index:8;
    margin-left:-20px;
    margin-top:2px;
}
.fly_panel tr td {
	border: 0 !important;
	padding: 0 !important;
}

.mceFirst .mceToolbar{
    padding-top:2px !important;
    -webkit-border-top-left-radius:     5px;
    -webkit-border-top-right-radius:    5px;
    -moz-border-top-left-radius:     5px;
    -moz-border-top-right-radius:    5px;
}

tr.mceFirst{
    height:0;
}


.mceFirst a{
    border:#b2b2b2;
    color: #b2b2b2;
}

.mceFirst .mceText, .mceMenuItem a{
    color: #000000 !important;
    border-color:#b2b2b2 !important;
}

.mceLayout td.mceIframeContainer{
    vertical-align: top;
}

.mceStatusbar{
    background-color: #e9e9e9;
    -webkit-border-bottom-left-radius:     5px;
    -webkit-border-bottom-right-radius:    5px;
    -moz-border-bottom-left-radius:     5px;
    -moz-border-bottom-right-radius:    5px;
}

.mceLayout{height:auto !important;}

.tabs_html_visual{
    cursor: pointer;
    float:right;
    width:50px;
    height:20px;
    padding-top: 5px;
    border-top:1px solid #dfdfdf;
    border-left:1px solid #dfdfdf;
    border-right:1px solid #dfdfdf;
    -webkit-border-top-left-radius:     3px;
    -webkit-border-top-right-radius:    3px;
    -moz-border-top-left-radius:     3px;
    -moz-border-top-right-radius:    3px;
    text-align: center;
}

.drag{
    font-size:13px;
    font-family: Arial;
    background-color:#222222;
    border:1px solid #555555;
    position:fixed;
    font-size:13px;
    color:#ffffff;
    font-weight:bold;
    padding-top: 5px;
    top:100px;
    left:300px;
    z-index:9;
    width:670px;
    -webkit-box-shadow: 0 0 30px #000000;
    -moz-box-shadow: 0 0 30px #000000;
    box-shadow: 0 0 30px #000000;
}

.button{
    background-color: #F2F2F2;
    /*background-image: url(/wp-admin/images/white-grad.png);*/
    border:1px solid #bbbbbb;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    color: #464646;
    cursor: pointer;
    display: block;
    float: left;
    font-family: 'Lucida Grande', Verdana, Arial, 'Bitstream Vera Sans', sans-serif;
    font-size: 11px;
    height: 22px;
    margin: 0px;
    text-align: center;
    text-decoration: none;
    text-shadow: white 0px 1px 0px;
    top: -5px;
    width: 70px;
}
