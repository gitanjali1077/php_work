<?php include 'connection.php';?>

<?php
function func($str){
$string_to_encrypt=$str;
$password="password";
$s=urlencode(base64_encode($string_to_encrypt));
#$encrypted=openssl_encrypt($string_to_encrypt,"AES-128-ECB",$password);
#$decrypted=openssl_decrypt($encrypted,"AES-128-ECB",$password);
return $s;}
?>
?>
<?php 


$conn = db_connect();

$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);

$conn->close();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<link rel="shortcut icon" href="sites/default/files/logo.png" type="image/png" />
    <title>Faculty | INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</title>
	<!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-touch-fullscreen" content="YES" />
    <!-- //META FOR IOS & HANDHELD -->
    <style type="text/css" media="all">
@import url("modules/system/system.base.css@oqrpvr.css");
@import url("modules/system/system.menus.css@oqrpvr.css");
@import url("modules/system/system.messages.css@oqrpvr.css");
@import url("modules/system/system.theme.css@oqrpvr.css");
@import url("sites/all/themes/nucleus/nucleus/css/base.css@oqrpvr.css");
</style>
<style type="text/css" media="all">
@import url("sites/all/modules/views_slideshow/views_slideshow.css@oqrpvr.css");
</style>
<style type="text/css" media="all">
@import url("modules/comment/comment.css@oqrpvr.css");
@import url("sites/all/modules/date/date_api/date.css@oqrpvr.css");
@import url("sites/all/modules/date/date_popup/themes/datepicker.1.7.css@oqrpvr.css");
@import url("sites/all/modules/date/date_repeat_field/date_repeat_field.css@oqrpvr.css");
@import url("modules/field/theme/field.css@oqrpvr.css");
@import url("modules/node/node.css@oqrpvr.css");
@import url("modules/search/search.css@oqrpvr.css");
@import url("modules/user/user.css@oqrpvr.css");
@import url("sites/all/modules/back_to_top/css/back_to_top.css@oqrpvr.css");
@import url("sites/all/modules/ckeditor/css/ckeditor.css@oqrpvr.css");
</style>
<style type="text/css" media="all">
@import url("sites/all/modules/ctools/css/ctools.css@oqrpvr.css");
@import url("sites/all/modules/panels/css/panels.css@oqrpvr.css");
@import url("sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/views.css@oqrpvr.css");
</style>
<style type="text/css" media="all">
@import url("sites/all/themes/nucleus/nucleus/css/messages.css@oqrpvr.css");
@import url("sites/all/themes/zircon/fonts/oswald_regular/stylesheet.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/html-elements.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/forms.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/page.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/articles.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/comments.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/forum.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/fields.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/blocks.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/block-styles.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/navigation.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/fonts.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/zircon-overrides.css@oqrpvr.css");
@import url("sites/all/themes/zircon/css/css3.css@oqrpvr.css");
</style>
<style type="text/css" media="only screen">
@import url("sites/all/themes/nucleus/nucleus/css/responsive/responsive.css@oqrpvr.css");
</style>
<style type="text/css" media="print">
@import url("sites/all/themes/zircon/css/print.css@oqrpvr.css");
</style>
<style type="text/css" media="only screen and (max-width:719px)">
@import url("sites/all/themes/zircon/css/screens/mobile.css@oqrpvr.css");
</style>
<style type="text/css" media="only screen and (max-width:479px)">
@import url("sites/all/themes/zircon/css/screens/mobile-vertical.css@oqrpvr.css");
</style>
<style type="text/css" media="only screen and (min-width: 720px) and (max-width: 959px)">
@import url("sites/all/themes/zircon/css/screens/tablet-vertical.css@oqrpvr.css");
</style>
<style type="text/css" media="only screen and (min-width: 959px) and (max-width: 1049px)">
@import url("sites/all/themes/zircon/css/screens/tablet.css@oqrpvr.css");
</style>

<!--[if IE 7]>
<style type="text/css" media="all">
@import url("http://172.16.19.10/drupal-7.54/sites/all/themes/nucleus/nucleus/css/ie7.css?oqrpvr");
</style>
<![endif]-->

<!--[if IE]>
<style type="text/css" media="all">
@import url("http://172.16.19.10/drupal-7.54/sites/all/themes/nucleus/nucleus/css/ie.css?oqrpvr");
@import url("http://172.16.19.10/drupal-7.54/sites/all/themes/zircon/css/ie.css?oqrpvr");
</style>
<![endif]-->

<!--[if IE 7]>
<style type="text/css" media="all">
@import url("http://172.16.19.10/drupal-7.54/sites/all/themes/zircon/css/ie7.css?oqrpvr");
</style>
<![endif]-->
<style type="text/css" media="all">
@import url("sites/default/files/nucleus/grid-fixed-24-1008px.css@oqrpvr.css");
</style>
    <script type="text/javascript" src="sites/all/modules/jquery_update/replace/jquery/1.10/jquery.min.js@v=1.10.2"></script>
<script type="text/javascript" src="misc/jquery.once.js@v=1.2"></script>
<script type="text/javascript" src="misc/drupal.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/modules/jquery_update/replace/ui/ui/minified/jquery.ui.effect.min.js@v=1.10.2"></script>
<script type="text/javascript" src="sites/all/modules/views_slideshow/js/views_slideshow.js@v=1.0"></script>
<script type="text/javascript" src="sites/all/modules/back_to_top/js/back_to_top.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/libraries/jquery.cycle/jquery.cycle.all.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/js/views_slideshow_cycle.js@oqrpvr"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

	(function ($) {
	  if (Drupal.Nucleus == undefined) {
		Drupal.Nucleus = {};
	  }
	  Drupal.behaviors.skinMenuAction = {
		attach: function (context) {
		  jQuery(".change-skin-button").click(function() {
			parts = this.href.split("/");
			style = parts[parts.length - 1];
			jQuery.cookie("nucleus_skin", style, {path: "/drupal-7.54/"});
			window.location.reload();
			return false;
		  });
		}
	  }
	})(jQuery);
  
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

	(function ($) {
	  if (Drupal.Nucleus == undefined) {
		Drupal.Nucleus = {};
	  }
	  Drupal.behaviors.skinMenuAction = {
		attach: function (context) {
		  jQuery(".change-skin-button").click(function() {
			parts = this.href.split("/");
			style = parts[parts.length - 1];
			jQuery.cookie("nucleus_skin", style, {path: "/drupal-7.54/"});
			window.location.reload();
			return false;
		  });
		}
	  }
	})(jQuery);
  
//--><!]]>
</script>
<script type="text/javascript" src="sites/all/themes/nucleus/nucleus/js/jquery.cookie.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/zircon.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/responsive.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/jquery.masonry.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/jquery.masonry.min.js@oqrpvr"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/drupal-7.54\/","pathPrefix":"","ajaxPageState":{"theme":"zircon","theme_token":"Jw2WmlmK16A-i0xyieVqvtgMb-1eL2ayJtp6G3X85ww","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.effect.min.js":1,"sites\/all\/modules\/views_slideshow\/js\/views_slideshow.js":1,"sites\/all\/modules\/back_to_top\/js\/back_to_top.js":1,"sites\/all\/libraries\/jquery.cycle\/jquery.cycle.all.js":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/js\/views_slideshow_cycle.js":1,"0":1,"1":1,"sites\/all\/themes\/nucleus\/nucleus\/js\/jquery.cookie.js":1,"sites\/all\/themes\/zircon\/js\/zircon.js":1,"sites\/all\/themes\/zircon\/js\/responsive.js":1,"sites\/all\/themes\/zircon\/js\/jquery.masonry.js":1,"sites\/all\/themes\/zircon\/js\/jquery.masonry.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/base.css":1,"sites\/all\/modules\/views_slideshow\/views_slideshow.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/modules\/date\/date_repeat_field\/date_repeat_field.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/back_to_top\/css\/back_to_top.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/views_slideshow_cycle.css":1,"sites\/all\/themes\/zircon\/css\/views.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/messages.css":1,"sites\/all\/themes\/zircon\/fonts\/oswald_regular\/stylesheet.css":1,"sites\/all\/themes\/zircon\/css\/html-elements.css":1,"sites\/all\/themes\/zircon\/css\/forms.css":1,"sites\/all\/themes\/zircon\/css\/page.css":1,"sites\/all\/themes\/zircon\/css\/articles.css":1,"sites\/all\/themes\/zircon\/css\/comments.css":1,"sites\/all\/themes\/zircon\/css\/forum.css":1,"sites\/all\/themes\/zircon\/css\/fields.css":1,"sites\/all\/themes\/zircon\/css\/blocks.css":1,"sites\/all\/themes\/zircon\/css\/block-styles.css":1,"sites\/all\/themes\/zircon\/css\/panel-panes.css":1,"sites\/all\/themes\/zircon\/css\/navigation.css":1,"sites\/all\/themes\/zircon\/css\/fonts.css":1,"sites\/all\/themes\/zircon\/css\/zircon-overrides.css":1,"sites\/all\/themes\/zircon\/css\/css3.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/responsive\/responsive.css":1,"sites\/all\/themes\/zircon\/css\/print.css":1,"sites\/all\/themes\/zircon\/css\/screens\/mobile.css":1,"sites\/all\/themes\/zircon\/css\/screens\/mobile-vertical.css":1,"sites\/all\/themes\/zircon\/css\/screens\/tablet-vertical.css":1,"sites\/all\/themes\/zircon\/css\/screens\/tablet.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/ie7.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/ie.css":1,"sites\/all\/themes\/zircon\/css\/ie.css":1,"sites\/all\/themes\/zircon\/css\/ie7.css":1,"public:\/\/nucleus\/grid-fixed-24-1008px.css":1}},"viewsSlideshow":{"university_latest_news-block_1":{"methods":{"goToSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"nextSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"pause":["viewsSlideshowControls","viewsSlideshowCycle"],"play":["viewsSlideshowControls","viewsSlideshowCycle"],"previousSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"transitionBegin":["viewsSlideshowPager","viewsSlideshowSlideCounter"],"transitionEnd":[]},"paused":0}},"viewsSlideshowCycle":{"#views_slideshow_cycle_main_university_latest_news-block_1":{"num_divs":4,"id_prefix":"#views_slideshow_cycle_main_","div_prefix":"#views_slideshow_cycle_div_","vss_id":"university_latest_news-block_1","effect":"scrollLeft","transition_advanced":1,"timeout":5000,"speed":700,"delay":0,"sync":1,"random":0,"pause":1,"pause_on_click":0,"play_on_hover":0,"action_advanced":0,"start_paused":0,"remember_slide":0,"remember_slide_days":1,"pause_in_middle":0,"pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","nowrap":0,"pause_after_slideshow":0,"fixed_height":1,"items_per_slide":1,"wait_for_image_load":1,"wait_for_image_load_timeout":3000,"cleartype":0,"cleartypenobg":0,"advanced_options":"{}"}},"back_to_top":{"back_to_top_button_trigger":"100","back_to_top_button_text":"Back to top","#attached":{"library":[["system","ui"]]}},"urlIsAjaxTrusted":{"\/drupal-7.54\/?q=university-faculty":true}});
//--><!]]>
</script>
  </head>

  <body class="html not-front not-logged-in one-sidebar sidebar-first page-university-faculty i18n-en zircon fixed-grid grid-24-based bf-a ptf-sss btf-sss fs-small">
    <div id="skip-link"><a href="index.html@q=university-faculty.html#main-content" class="element-invisible element-focusable">Skip to main content</a></div>
        <div id="page" class="page-default">
  <a name="Top" id="Top"></a>
  
  <!-- HEADER -->
  <div id="header-wrapper" class="wrapper">
    <div class="container grid-24">
      <div class="grid-inner clearfix">
        <div id="header" class="clearfix">

          
          
            <div class="region region-header">
    <div id="block-block-21" class="block block-block view-grid-panel block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <table align="center" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td rowspan="2" style="width:132px"><img alt="" height="95" src="sites/default/files/IGDTUW&#32;Transparent&#32;Logo_0.jpg" width="100" /></td>
<td colspan="2" rowspan="1" style="width:480px"><span style="font-size:14px"><strong><span style="color:rgb(255, 0, 0)"> </span><span style="color:rgb(0, 128, 0)">Education  Enlightenment  Empowerment </span></strong></span></td>
<td class="rtecenter" style="background-color:rgb(128, 0, 0); width:93px"><a href="index.html@q=psrelease.html"><font color="#ffffff"><span style="font-size:12px">Media Bytes</span></font></a></td>
<td class="rtecenter" style="background-color:rgb(128, 0, 0); width:54px"><span style="font-size:12px"><a href="index.html@q=university-tenders.html"><span style="color:rgb(255, 255, 255)">Tenders</span></a></span></td>
<td class="rtecenter" style="background-color:rgb(128, 0, 0); width:47px"><span style="font-size:12px"><a href="index.html@q=university-careers.html"><span style="color:rgb(255, 255, 255)">Careers</span></a></span></td>
<td class="rtecenter" style="background-color:rgb(128, 0, 0); width:53px"><span style="font-size:12px"><a href="index.html@q=uni_notices.html"><span style="color:rgb(255, 255, 255)">Notices</span></a></span></td>
<td class="rtecenter" style="background-color:rgb(128, 0, 0); width:73px"><span style="font-size:12px"><a href="index.html@q=student-life%252Fbasic-page-1.html"><span style="color:rgb(255, 255, 255)">Student Life</span></a></span></td>
</tr><tr><td class="rtecenter" colspan="8" style="width:1084px"><span style="color:#008000"><span style="font-size:22px"><span style="font-family:tahoma,geneva,sans-serif"><strong>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</strong></span></span></span><br /><strong><span style="color:#B22222"><span style="font-size:14px">(Established by Govt. of Delhi vide Act 9 of 2012)</span></span><br />
			RECOGNIZED BY UGC UNDER SECTION 22</strong></td>
</tr></tbody></table>    </div>
  </div>
</div>
<div id="block-views-university-latest-news-block-1" class="block block-views view-grid-panel block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <div class="view view-university-latest-news view-id-university_latest_news view-display-id-block_1 view-dom-id-d753d9f42caca3f156e10ce376f646a1">
        
  
  
      <div class="view-content">
      
  <div class="skin-default">
    
    <div id="views_slideshow_cycle_main_university_latest_news-block_1" class="views_slideshow_cycle_main views_slideshow_main"><div id="views_slideshow_cycle_teaser_section_university_latest_news-block_1" class="views-slideshow-cycle-main-frame views_slideshow_cycle_teaser_section">
  <div id="views_slideshow_cycle_div_university_latest_news-block_1_0" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-1 views-row-first views-row-odd" aria-labelledby='views_slideshow_pager_field_item_bottom_university_latest_news-block_1_0'>
  <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-0 views-row-odd views-row-first">
    
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=general%252Funiversitylatestnews%252Frecruitment-portal-online-application-post-assistant-professor.html"><div class="Slideshow-text-wrapper">
Recruitment Portal for Online Application  the post of Assistant Professor
</div></a></span>  </div></div>
</div>
<div id="views_slideshow_cycle_div_university_latest_news-block_1_1" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-2 views_slideshow_cycle_hidden views-row-even" aria-labelledby='views_slideshow_pager_field_item_bottom_university_latest_news-block_1_1'>
  <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-0 views-row-odd">
    
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=general%252Funiversitylatestnews%252Fadvertisement-and-application-form-filling-various-posts-igdtuw.html"><div class="Slideshow-text-wrapper">
Advertisement and Application form for filling up of various posts in IGDTUW
</div></a></span>  </div></div>
</div>
<div id="views_slideshow_cycle_div_university_latest_news-block_1_2" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-3 views_slideshow_cycle_hidden views-row-odd" aria-labelledby='views_slideshow_pager_field_item_bottom_university_latest_news-block_1_2'>
  <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-0 views-row-odd">
    
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=general%252Funiversitylatestnews%252Finformation-brochure-newly-admitted-students-igdtuw.html"><div class="Slideshow-text-wrapper">
Information Brochure for Newly Admitted Students , IGDTUW
</div></a></span>  </div></div>
</div>
<div id="views_slideshow_cycle_div_university_latest_news-block_1_3" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-4 views_slideshow_cycle_hidden views-row-last views-row-even" aria-labelledby='views_slideshow_pager_field_item_bottom_university_latest_news-block_1_3'>
  <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-0 views-row-odd">
    
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=general%252Funiversitylatestnews%252Fstart-proposals-invited-igdtuw-alumni.html"><div class="Slideshow-text-wrapper">
Start-up Proposals Invited from IGDTUW Alumni
</div></a></span>  </div></div>
</div>
</div>
</div>
      </div>
    </div>
  
  
  
  
  
  
</div>    </div>
  </div>
</div>
<div id="block-search-form" class="block block-search view-grid-panel block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <form action="index.html@q=university-faculty.html" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search form</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
 <input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" />
</div>
<div class="form-actions form-wrapper" id="edit-actions"><span class="button edit-submit">
    <input type="submit" name="op" id="edit-submit" value="Search"  class="form-submit" />
    </span>
</div><input type="hidden" name="form_build_id" value="form-gKpNZk4S9EHCFsM8I2Eaq_S5H45XcZMlNBV6ANa1P6Q" />
<input type="hidden" name="form_id" value="search_block_form" />
</div>
</div></form>    </div>
  </div>
</div>
  </div>

          		  		  <!-- MAIN NAV -->
		  <div id="menu-bar-wrapper" class="wrapper">
		    <div class="container grid-24">
			  <div class="grid-inner clearfix">
			    <a title="Navigation Icon" href="javascript:void(0);" class="tb-main-menu-button responsive-menu-button">Menu</a>
			      <div class="region region-menu-bar">
    <div id="block-system-main-menu" class="block block-system block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title element-invisible">Main menu</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first leaf"><a href="index.html" title="">Home</a></li>
<li class="expanded"><a href="index.html@q=administration%252Fabout-igdtuw.html">About Us</a><ul class="menu"><li class="first leaf"><a href="index.html@q=administration%252Fvision-and-mission.html">Vision, Mission and Objectives</a></li>
<li class="leaf"><a href="index.html@q=administration%252Fvcs-message1.html">Vice Chancellor&#039;s Message</a></li>
<li class="leaf"><a href="index.html@q=administration%252Fregistrars-message.html">Registrar&#039;s Message</a></li>
<li class="last leaf"><a href="index.html@q=administration%252Figdtuw-statutory-authorities.html">Statutory Bodies</a></li>
</ul></li>
<li class="expanded active-trail"><a href="index.html@q=academics%252Fdepartments.html" title="" class="active-trail">Academics </a><ul class="menu"><li class="first leaf"><a href="index.html@q=academics%252Fdepartments.html">Departments</a></li>
<li class="leaf"><a href="index.html@q=universityprograms.html" title="">Programs</a></li>
<li class="leaf active-trail"><a href="index.html@q=university-faculty.html" title="" class="active-trail active">University Faculty</a></li>
<li class="leaf"><a href="index.html@q=academic-calender.html">Academic Calender</a></li>
<li class="leaf"><a href="index.html@q=node%252F38.html" title="">Scholarships</a></li>
<li class="leaf"><a href="index.html@q=lessonplan.html" title="">Syllabus/ Lesson Plan</a></li>
<li class="last leaf"><a href="index.html@q=timetable.html" title="">Time-Table</a></li>
</ul></li>
<li class="expanded"><a href="index.html@q=research.html">Research</a><ul class="menu"><li class="first leaf"><a href="index.html@q=research%252Fphd-admission-guidelines.html">Ph.D. Admission Guidelines</a></li>
<li class="leaf"><a href="index.html@q=proejct.html" title="">Projects</a></li>
<li class="leaf"><a href="index.html@q=publications.html" title="">Publications</a></li>
<li class="leaf"><a href="index.html@q=node%252F47.html">Scholars and Supervisors</a></li>
<li class="leaf"><a href="index.html@q=soft_dev_projects.html">Software Development Projects</a></li>
<li class="last leaf"><a href="index.html@q=rnc-forms.html" title="">Forms And Applications</a></li>
</ul></li>
<li class="expanded"><a href="index.html@q=admission-brochure.html" title="">Admissions</a><ul class="menu"><li class="first leaf"><a href="index.html@q=admission-calender.html">Admission Calender 2017-18</a></li>
<li class="leaf"><a href="index.html@q=admission-dates.html">Important Dates</a></li>
<li class="leaf"><a href="index.html@q=admission-brochure.html" title="">Admission 2017 e-brochure</a></li>
<li class="last leaf"><a href="index.html@q=admission-hostel.html" title="">Hostel Admission E-Brochure</a></li>
</ul></li>
<li class="expanded"><a href="index.html@q=library%252Fbasic-page.html">Facilities</a><ul class="menu"><li class="first leaf"><a href="index.html@q=library%252Fbasic-page.html">Library Services</a></li>
<li class="leaf"><a href="index.html@q=it-services%252Fbasic-page.html" title="">IT Services</a></li>
<li class="leaf"><a href="index.html@q=hostel%252Fbasic-page.html">Hostels</a></li>
<li class="leaf"><a href="index.html@q=dispensary%252Fbasic-page.html">Dispensary</a></li>
<li class="leaf"><a href="index.html@q=computer-centre%252Fbasic-page.html">Computer Center</a></li>
<li class="leaf"><a href="index.html@q=bank%252Fbasic-page.html">Bank</a></li>
<li class="last leaf"><a href="index.html@q=guest-house%252Fbasic-page.html" title="">Guest House</a></li>
</ul></li>
<li class="expanded"><a href="index.html@q=placements%252Fbasic-page.html">Placements</a><ul class="menu"><li class="first leaf"><a href="index.html@q=placements.html">Visiting Companies</a></li>
<li class="leaf"><a href="index.html@q=placement-batchwise.html">Yearwise Placements</a></li>
<li class="last leaf"><a href="index.html@q=training-placement-contacts.html">Training &amp; Placement Contacts</a></li>
</ul></li>
<li class="expanded"><a href="index.html@q=examination-main.html">Examination</a><ul class="menu"><li class="first leaf"><a href="index.html@q=examination-ordinance-and-regulation.html" title="">Ordinance And Regulation</a></li>
<li class="leaf"><a href="index.html@q=examination-datesheet.html" title="">Datesheet</a></li>
<li class="leaf"><a href="index.html@q=examination-result.html" title="">Results</a></li>
<li class="last leaf"><a href="index.html@q=examination-notices-circulars.html" title="">Notices / Circulars</a></li>
</ul></li>
<li class="last expanded"><a href="index.html@q=university-tenders-archives.html" title="">Archives</a><ul class="menu"><li class="first leaf"><a href="index.html@q=university-careers-archives.html" title="">Career Archives</a></li>
<li class="leaf"><a href="index.html@q=examination-datesheet-archives.html" title="">Datesheet Archives</a></li>
<li class="leaf"><a href="index.html@q=examination-result-archives.html" title="">Result Archives</a></li>
<li class="last leaf"><a href="index.html@q=university-tenders-archives.html" title="">Tender Archives</a></li>
</ul></li>
</ul>    </div>
  </div>
</div>
  </div>
			  </div>
		    </div>
		  </div>
		  <!-- //MAIN NAV -->
	            </div>
      </div>
    </div>
  </div>
  <!-- //HEADER -->

  

  
  
  
  <div id="main-wrapper" class="wrapper">
    <div class="container grid-24 clearfix">
      <div class="group-cols-2 group-24 grid grid-24">

        <!-- MAIN CONTENT -->
        <div id="main-content" class="grid grid-18 section">
          <div class="grid-inner clearfix">

                        
            

             	
            <h1 class="page_title">Faculty</h1>
            
            

            
                          

            
            
               <div class="region region-content">
    <div id="block-system-main" class="block-system">
  <div class="block-inner clearfix">
    
    
    
    <div class="block-content clearfix">
      <div class="view view-university-faculty view-id-university_faculty view-display-id-page view-dom-id-5dfa15dfe96add806a351fd3d5bed312">
        
  
  
      <div class="view-content">
      <div class="views-view-grid cols-2">
      <div class="views-row row-1 row-first clearfix">
                      


<!-- from here starts  -->

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$id=$row["id"];

?>

  <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  

<div class="views-field views-field-field-photograph">        

<div class="field-content">

<a href="index.html@q=universityfacultydetail.php?id=<?php print $id; ?>"> 
<img typeof="foaf:Image" src="<?php echo $row["image"]; ?> " width="100" height="100" alt="" />
</a> 

</div>  </div>  
  


<div class="views-field views-field-title">        <span class="field-content">
<a href="index.html@q=universityfacultydetail.php?id=<?php print func($id); ?>"> <?php echo $row["name"]; ?> </a></span>  </div>  
 


 <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px"> <?php echo $row["designation"]; ?></span></p>
</div>  </div>  
 


 <div>        <div><p><a href="mailto:nrchauhan@igit.ac.in"><?php echo $row["email"]; ?></a></p>
</div>  </div>            </div>
          </div>


<!--here ends -->



<?php    if($row = $result->fetch_assoc()) {
$id=$row["id"]; ?>

                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"> <a href="index.html@q=universityfacultydetail.php?id=<?php print func($id); ?>"> 
<img typeof="foaf:Image" src="<?php echo $row["image"]; ?>" width="100" height="100" alt="" />  </a></div>  </div>  

  <div class="views-field views-field-title">        <span class="field-content">
<a href="index.html@q=universityfacultydetail.php?id=<?php print func($id); ?>"> <?php echo $row["name"]; ?> </a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><?php echo $row["designation"]; ?> </p>
</div>  </div>  
  <div>        <div><p><a href="mailto:nidhi.iitr@gmail.com"><?php echo $row["email"]; ?> </a></p>
</div>  </div>            </div>
          </div>


<?php }  ?>
                 



 </div>

<?php  
    }
} ?>

<!---

      <div class="views-row row-2 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fdr-manoj-soni.html"><img typeof="foaf:Image" src="sites/default/files/rsz_drpct20manoj.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fdr-manoj-soni.html">Dr. Manoj Soni</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Associate Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:manoj_soni2002@yahoo.com">manoj_soni2002@yahoo.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fdr-vandana-niranjan.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0010.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fdr-vandana-niranjan.html">Dr. Vandana Niranjan</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:vandananiranjan@igdtuw.ac.in">vandananiranjan@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-3 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fdr-ok-singh.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0024.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fdr-ok-singh.html">Dr. O.K. Singh</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:oksingh61@rediffmail.com">oksingh61@rediffmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-maria-jamal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0014.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-maria-jamal.html">Ms. Maria Jamal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-4 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-deepti-chhabra.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0022.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-deepti-chhabra.html">Ms. Deepti Chhabra</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:deepti2226@gmail.com">deepti2226@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-shobha-sharma.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0067.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-shobha-sharma.html">Ms. Shobha Sharma</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:shobhaa_sharma16@yahoo.co.in">shobhaa_sharma16@yahoo.co.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-5 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fdr-pankaj-tomar.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0013.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fdr-pankaj-tomar.html">Dr. Pankaj Tomar</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:pankaj_12343@rediffmail.com">pankaj_12343@rediffmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-pankaj-gupta.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0004.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-pankaj-gupta.html">Mr Pankaj Gupta</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-6 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-shipra-aggarwal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0028.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-shipra-aggarwal.html">Ms. Shipra Aggarwal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:shipra.agg@gmail.com">shipra.agg@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-kanchan-sharma.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0053.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-kanchan-sharma.html"> Mr. Kanchan Sharma</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:joinkanchansharma@gmail.com">joinkanchansharma@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-7 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fmr-vivek-chawla.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0032.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fmr-vivek-chawla.html">Mr. Vivek Chawla</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:vchawla24@gmail.com">vchawla24@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-greeshma-arya.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dsc_0066.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-greeshma-arya.html">Ms. Greeshma Arya</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-8 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-deepti-jaiswal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0023.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-deepti-jaiswal.html">Ms. Deepti Jaiswal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fdr-richa-yadav.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1pic-richa.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fdr-richa-yadav.html">Dr. Richa Yadav</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-9 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-tina-chaudhary.html"><img typeof="foaf:Image" src="sites/default/files/Ms.&#32;Tina.png" width="92" height="108" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fms-tina-chaudhary.html">Ms. Tina Chaudhary</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:tina.mech.auto@gmail.com">tina.mech.auto@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-veepsa-bhatia.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0007.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-veepsa-bhatia.html">Ms. Veepsa Bhatia</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:veepsa@gmail.com">veepsa@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-10 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fmr-yusuf-parvez.html"><img typeof="foaf:Image" src="sites/default/files/Mr.&#32;yusuf.png" width="92" height="108" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fmr-yusuf-parvez.html">Mr. Yusuf Parvez</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:parvez_yusuf01@yahoo.com">parvez_yusuf01@yahoo.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-neha-singh.html"><img typeof="foaf:Image" src="sites/default/files/rsz_neha_singh.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fms-neha-singh.html">Ms. Neha Singh</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-11 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fmr-urfi-khan.html"><img typeof="foaf:Image" src="sites/default/files/Mr.&#32;urfi.png" width="92" height="108" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fmae%252Fmr-urfi-khan.html"> Mr. Urfi Khan</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:khan.urfi@gmail.com">khan.urfi@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fdr-jasdeep-kaur-dhanoa.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dr_jasdeep.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fdr-jasdeep-kaur-dhanoa.html"> Dr. Jasdeep Kaur Dhanoa</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor &amp; Head</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:jasdeep@igdtuw.ac.in">jasdeep@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-12 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Fdr-preeti-vajpeyi.html"><img typeof="foaf:Image" src="sites/default/files/rsz_drpct20vajpayee.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Fdr-preeti-vajpeyi.html">Dr. Preeti Vajpeyi</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Associate Professor, Head of Department</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:vajpeyipreeti@gmail.com">vajpeyipreeti@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-mohd-ejaz-aslam-lodhi.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0006.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-mohd-ejaz-aslam-lodhi.html">Mr. Mohd. Ejaz Aslam Lodhi</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:ejaz.iitk@gmail.com">ejaz.iitk@gmail.com</a>, <a href="mailto:iitk.ejaz@gmail.com">iitk.ejaz@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-13 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-preeti-chauhan.html"><img typeof="foaf:Image" src="sites/default/files/rsz_preetipct20chauhan.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-preeti-chauhan.html">Ar. Preeti Chauhan</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:preetichauhan@igdtuw.ac.in">preetichauhan@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-akash-tayal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0005.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fmr-akash-tayal.html">Mr. Akash Tayal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:akash_tayal786@gmail.com">akash_tayal786@gmail.com</a>, <a href="mailto:akashtayal@yahoo.com">akashtayal@yahoo.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-14 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-vishal-rai.html"><img typeof="foaf:Image" src="sites/default/files/rsz_vishalpct20rai.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-vishal-rai.html">Ar. Vishal Rai</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:vishalrai@igdtuw.ac.in">vishalrai@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fdr-devendra-k-tayal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dsc_0008.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fdr-devendra-k-tayal.html">Dr Devendra K. Tayal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Professor &amp; former HOD</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:devendratayal@igit.ac.in">devendratayal@igit.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-15 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-sneha-maji.html"><img typeof="foaf:Image" src="sites/default/files/rsz_sneha.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-sneha-maji.html">Ar. Sneha Maji</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:snehamaji@igdtuw.ac.in">snehamaji@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fdr-srn-reddy.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dsc_0051.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fdr-srn-reddy.html">Dr. S.R.N. Reddy</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Associate Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:srnreddy@igdtuw.ac.in">srnreddy@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-16 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-venus-kashyap.html"><img typeof="foaf:Image" src="sites/default/files/rsz_venus.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-venus-kashyap.html">Ar. Venus Kashyap</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:venuskashyap@igdtuw.ac.in">venuskashyap@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fprof-ela-kumar.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1ela_kumar.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fprof-ela-kumar.html">Prof. Ela Kumar</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Professor &amp; HOD</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:ela_kumar@rediffmail.com">ela_kumar@rediffmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-17 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-jahnabi-kalita.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1jahnabi.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-jahnabi-kalita.html"> Ar. Jahnabi Kalita</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:jahnabi_kalita@yahoo.com">jahnabi_kalita@yahoo.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fdr-seeja-k-r.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dr_seeja.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fdr-seeja-k-r.html">Dr. Seeja . K. R</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Associate Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:seeja@igdtuw.ac.in">seeja@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-18 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-kshitij-kumar-sinha.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1kshitij.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-kshitij-kumar-sinha.html">Ar. Kshitij Kumar Sinha</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:kshitijkumarsinha@igdtuw.ac.in">kshitijkumarsinha@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fmr-b-indra-thannaya.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dsc_0068.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fmr-b-indra-thannaya.html">Mr. B. Indra Thannaya</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:indrathanaya1@redfiifmail.com">indrathanaya1@redfiifmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-19 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-amit-agrawal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_amit.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fdap%252Far-amit-agrawal.html">Ar. Amit Agrawal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:amitagarwal@igdtuw.ac.in">amitagarwal@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fms-vibha.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0027.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fms-vibha.html">Ms. Vibha</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-20 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fprof-r-k-singh.html"><img typeof="foaf:Image" src="sites/default/files/rsz_profpct20rksingh.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fprof-r-k-singh.html">Prof. R K Singh</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:12px">Professor, Dean (Examination Affairs), Head (IT Services)</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:rksingh@igdtuw.ac.in">rksingh@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fms-najme-zehra-naqvi.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dsc_0047.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fms-najme-zehra-naqvi.html"> Ms. Najme Zehra Naqvi</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:nznaqvi.igit@gmail.com">nznaqvi.igit@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-21 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fdr-k-mohapatra.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0046.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fdr-k-mohapatra.html">Dr. A K Mohapatra</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Associate Professor, Head of Department</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:akmohapatra@igdtuw.ac.in">akmohapatra@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fmr-vivekanand-jha.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dsc_0048.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fmr-vivekanand-jha.html"> Mr. Vivekanand Jha</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:vivekanand.iiitm@gmail.com">vivekanand.iiitm@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-22 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fdr-arun-sharma.html"><img typeof="foaf:Image" src="sites/default/files/rsz_drpct20arun.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fdr-arun-sharma.html">Dr. Arun Sharma</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Associate Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:arunsharma@igdtuw.ac.in">arunsharma@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fms-monika-choudhary.html"><img typeof="foaf:Image" src="sites/default/files/rsz_monikachoudhary.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fms-monika-choudhary.html">Ms. Monika Choudhary</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:monika.ch13@gmail.com">monika.ch13@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-23 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fdr-kalpana-yadav.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0015.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fdr-kalpana-yadav.html">Dr. Kalpana Yadav</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor </span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:kyadav11@yahoo.com">kyadav11@yahoo.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fmr-sumit.html"><img typeof="foaf:Image" src="sites/default/files/rsz_sumit_yadav.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fcse%252Fmr-sumit.html">Mr. Sumit</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:sumitarya007@gmail.com">sumitarya007@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-24 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fmr-rishabh-kaushal.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0020.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fmr-rishabh-kaushal.html">Mr. Rishabh Kaushal</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
, <p>This is my home page</p>
<p> </p>
</div>  </div>  
  <div>        <div><p><a href="mailto:rishabh.kaushal@gmail.com">rishabh.kaushal@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-ranu-gadi.html"><img typeof="foaf:Image" src="sites/default/files/rsz_drranu.png" width="100" height="100" alt="Dr. Ranu Gadi" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-ranu-gadi.html"> Dr. Ranu Gadi</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:12px"><strong>Associate Professor &amp; Chief Warden</strong></span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:ranugadi@igit.ac.in">ranugadi@igit.ac.in</a>, <a href="mailto:ranugadi@igdtuw.ac.in">ranugadi@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-25 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-ankita.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0016.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-ankita.html">Ms. Ankita</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:ankita.igit.2011@gmail.com">ankita.igit.2011@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-chhaya-ravikant.html"><img typeof="foaf:Image" src="sites/default/files/rsz_drchhaya.png" width="100" height="100" alt="Dr. Chhaya Ravikant" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-chhaya-ravikant.html">Dr. Chhaya Ravikant</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><strong><span style="font-size:12px">Dy. Dean (Research &amp; Consultancy) and Associate Professor (Physics)</span></strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:chhaya_rkant@yahoo.co.in">chhaya_rkant@yahoo.co.in</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-26 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-aruna-bhat.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dsc_0030.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-aruna-bhat.html">Ms. Aruna Bhat</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:arunabhat@igdtuw.ac.in">arunabhat@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-shalini-arora.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dr_shalini.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-shalini-arora.html">Dr. Shalini Arora</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><strong><span style="font-size:12px">Associate  Professor &amp; Head of Department</span></strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:shaliniaroraigit@gmail.com">shaliniaroraigit@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-27 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-nidhi-arora.html"><img typeof="foaf:Image" src="sites/default/files/rsz_nidhi.png" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-nidhi-arora.html">Ms. Nidhi Arora</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:nidhiarora@igdtuw.ac.in">nidhiarora@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-dinesh-ganotra.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dr_dinesh_ganotra.jpg" width="100" height="100" alt="Dr. Dinesh Ganotra" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-dinesh-ganotra.html">Dr. Dinesh Ganotra</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><strong><span style="font-size:12px">Assistant Professor</span></strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:dinesh_ganotra@hotmail.com">dinesh_ganotra@hotmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-28 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-nisha-rathee.html"><img typeof="foaf:Image" src="sites/default/files/rsz_nishapct20passportpct20picpct201.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-nisha-rathee.html">Ms. Nisha Rathee</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:nisharathee@igdtuw.ac.in">nisharathee@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-geeta-kumari.html"><img typeof="foaf:Image" src="sites/default/files/rsz_drgeeta.png" width="100" height="100" alt="Dr. Geeta Kumari" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-geeta-kumari.html">Dr. Geeta Kumari</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><strong>Assistant Professor</strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:geeta.mehndiratta@rediffmail.com">geeta.mehndiratta@rediffmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-29 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-neetika-bhandari.html"><img typeof="foaf:Image" src="sites/default/files/rsz_neetika.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-neetika-bhandari.html">Ms. Neetika Bhandari</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p>Assistant Professor</p>
</div>  </div>  
  <div>        <div><p><a href="mailto:neetika.igdtu@gmail.com">neetika.igdtu@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-bhavani-prasad.html"><img typeof="foaf:Image" src="sites/default/files/rsz_dr_bhavani.png" width="100" height="100" alt="Dr. Bhavani Prasad" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-bhavani-prasad.html">Dr. Bhavani Prasad</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><strong><span style="font-size:12px">Assistant Professor(Chemistry)</span></strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:nenavathbhavani@gmail.com">nenavathbhavani@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-30 clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-charu-gupta.html"><img typeof="foaf:Image" src="sites/default/files/rsz_charu.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fit%252Fms-charu-gupta.html">Ms. Charu Gupta </a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Assistant Professor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:charugupta@igdtuw.ac.in">charugupta@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-bhavya-raj.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1dr_bhavya.png" width="100" height="100" alt="Dr. Bhavya Raj" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fdr-bhavya-raj.html">Dr. Bhavya Raj</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><strong><span style="font-size:12px">Assistant Professor (English &amp; Communication Studies)</span></strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:bhavya.raj83@gmail.com">bhavya.raj83@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
      <div class="views-row row-31 row-last clearfix">
                        <div class="grid views-col col-1 col-first">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fprof-ashwani-kumar.html"><img typeof="foaf:Image" src="sites/default/files/rsz_prof_ashwni_kumar.jpg" width="100" height="100" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fece%252Fprof-ashwani-kumar.html">PROF. ASHWANI KUMAR</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p><span style="font-size:14px">Professor &amp; Chief Proctor</span></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:xyz@igdtuw.ac.in">xyz@igdtuw.ac.in</a></p>
</div>  </div>            </div>
          </div>
                                <div class="grid views-col col-2 col-last">
            <div class="grid-inner col-inner clearfix">
                
  <div class="views-field views-field-field-photograph">        <div class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fmr-dhananjay-yadav.html"><img typeof="foaf:Image" src="sites/default/files/rsz_1mr_dhananjay.png" width="100" height="100" alt="Mr. Dhananjay Yadav" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="index.html@q=universityfaculty%252Fash%252Fmr-dhananjay-yadav.html">Mr. Dhananjay Yadav</a></span>  </div>  
  <div class="views-field views-field-field-post">        <div class="field-content"><p class="rtejustify"><strong><span style="font-size:12px">Assistant Professor (Mgmt &amp;Soft Skills)</span></strong></p>
</div>  </div>  
  <div>        <div><p><a href="mailto:dhanyadav@gmail.com">dhanyadav@gmail.com</a></p>
</div>  </div>            </div>
          </div>
                  </div>
-->
  </div>



  
  
    </div>
  
  
  
  
</div>    </div>
  </div>
</div>
  </div>

          </div>
        </div>
        <!-- //MAIN CONTENT -->

                  <!-- SIDEBAR FIRST -->
          <div id="sidebar-first-wrapper" class="sidebar tb-main-box grid grid-6 grid-last">
            <div class="grid-inner clearfix">
                <div class="region region-sidebar-first">
    <div id="block-menu-menu-explore-igdtuw--2" class="block block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title">Explore IGDTUW</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first leaf"><a href="index.html@q=administration%252Fabout-igdtuw.html" title="">About IGDTUW</a></li>
<li class="leaf"><a href="index.html@q=academics%252Fdepartments.html" title="">Academics</a></li>
<li class="leaf"><a href="index.html@q=admission-brochure.html" title="">Admissions</a></li>
<li class="leaf"><a href="index.html@q=examination-main.html" title="">Examinations</a></li>
<li class="leaf"><a href="index.html@q=library%252Fbasic-page.html" title="">Facilities</a></li>
<li class="leaf"><a href="index.html@q=placements.html" title="">Placements</a></li>
<li class="last leaf"><a href="index.html@q=research.html" title="">Research</a></li>
</ul>    </div>
  </div>
</div>
  </div>
            </div>
          </div>
          <!-- //SIDEBAR FIRST -->
              </div>

          </div>
  </div>

  
      <!-- PANEL THIRD -->
    <div id="panel-third-wrapper" class="wrapper panel panel-third">
      <div class="container panel-cols-4 grid-24 clearfix">
        <div class="panel-column panel-third-1 panel-column-first grid grid-6">
        <div class="grid-inner clearfix">
                        <div class="region region-panel-third-1">
    <div id="block-block-36--2" class="block block-block block-custom-links block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <p><span style="color:#FFFFFF"><span style="font-size:18px">PEOPLE</span></span></p>
<p><span style="font-size:14px"><a href="index.html@q=university-faculty.html"><span style="color:#FFFFFF">Faculty</span></a></span><br /><a href="index.html@q=e-learning-resources%252Fbasic-page.html"><span style="color:#FFFFFF"><span style="font-size:14px">E-Learnig Resources</span></span></a><br /><span style="font-size:14px"><a href="index.html@q=administration%252Figdtuw-statutory-authorities.html"><span style="color:#FFFFFF">Statutory Bodies</span></a></span><br /><span style="font-size:14px"><a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Frli%3D19yjhqd8y0027%26rld%3D1&amp;service=mail&amp;hd=igit.ac.in&amp;sacu=1&amp;flowName=GlifWebSignIn&amp;flowEntry=AddSession"><span style="color:#FFFFFF">IGDTUW Mail</span></a></span><br /><a href="index.html@q=administration-web-forms.html"><span style="color:#FFFFFF"><span style="font-size:14px">Administrative Web Forms</span></span></a></p>
    </div>
  </div>
</div>
  </div>
                  </div>
      </div>
                <div class="panel-column panel-third-2 grid grid-6">
        <div class="grid-inner clearfix">
                        <div class="region region-panel-third-2">
    <div id="block-block-37--2" class="block block-block block-custom-address block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <p><span style="font-size:18px"><span style="color:#FFFFFF">ACADEMICS</span></span></p>
<p><span style="font-size:14px"><a href="index.html@q=academics%252Fdepartments.html"><span style="color:#FFFFFF">Departments</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=universityprograms.html"><span style="color:#FFFFFF">Programs</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=academic-calender.html"><span style="color:#FFFFFF">Academic Calendar</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=examination-main.html"><span style="color:#FFFFFF">Examination</span></a></span></p>
<p> </p>
    </div>
  </div>
</div>
  </div>
                  </div>
      </div>
                <div class="panel-column panel-third-3 grid grid-6">
        <div class="grid-inner clearfix">
                        <div class="region region-panel-third-3">
    <div id="block-block-38--2" class="block block-block block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <p><span style="font-size:18px"><span style="color:#FFFFFF">PLACEMENTS</span></span></p>
<p><span style="font-size:14px"><a href="index.html@q=placements.html"><span style="color:#FFFFFF">Visiting Companies</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=placement-batchwise.html"><span style="color:#FFFFFF">Yearwise Placements</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=training-placement-contacts.html"><span style="color:#FFFFFF">Training and Placement Contacts</span></a></span></p>
    </div>
  </div>
</div>
  </div>
                  </div>
      </div>
                <div class="panel-column panel-third-4 panel-column-last grid grid-6">
        <div class="grid-inner clearfix">
                        <div class="region region-panel-third-4">
    <div id="block-block-35--2" class="block block-block block-custom-form block-custom">
  <span class="badge">&nbsp;</span>
  <div class="block-inner clearfix">
            
    <div class="block-content clearfix">
      <p><span style="font-size:18px"><span style="color:#FFFFFF">INFO @IGDTUW</span></span></p>
<p><span style="font-size:14px"><a href="index.html@q=contact-us%252Funiversitycontactus.html"><span style="color:#FFFFFF">Contact Us</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=university-policy.html"><span style="color:#FFFFFF">Right To Information</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=privacy-policy.html"><span style="color:#FFFFFF">Privacy Policy</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=web-development-team%252Fbasic-page.html"><span style="color:#FFFFFF">Web Development Team</span></a></span><br /><span style="font-size:14px"><a href="index.html@q=portal-feedback.html"><span style="color:#FFFFFF">Feedback</span></a></span></p>
<p> </p>
    </div>
  </div>
</div>
  </div>
                  </div>
      </div>      </div>
    </div>
    <!-- //PANEL THIRD -->
  
    <div id="credits">Zircon - This is a contributing Drupal Theme<br/>Design by <a href="http://www.weebpal.com/" target="_blank">WeebPal</a>.</div>
</div>
      </body>
</html>