<?php include 'connection.php';?>

<?php 


$conn = db_connect();

$sql = "SELECT * FROM notice";
$result = $conn->query($sql);

$conn->close();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<link rel="shortcut icon" href="sites/default/files/logo.png" type="image/png" />
    <title>Examination Notices And Circulars | INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</title>
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
jQuery.extend(Drupal.settings, {"basePath":"\/drupal-7.54\/","pathPrefix":"","ajaxPageState":{"theme":"zircon","theme_token":"jj-qCwbIM5BqhMu3nWBrSpz0el7dpIrJOHk0SwwAsq8","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.effect.min.js":1,"sites\/all\/modules\/views_slideshow\/js\/views_slideshow.js":1,"sites\/all\/modules\/back_to_top\/js\/back_to_top.js":1,"sites\/all\/libraries\/jquery.cycle\/jquery.cycle.all.js":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/js\/views_slideshow_cycle.js":1,"0":1,"1":1,"sites\/all\/themes\/nucleus\/nucleus\/js\/jquery.cookie.js":1,"sites\/all\/themes\/zircon\/js\/zircon.js":1,"sites\/all\/themes\/zircon\/js\/responsive.js":1,"sites\/all\/themes\/zircon\/js\/jquery.masonry.js":1,"sites\/all\/themes\/zircon\/js\/jquery.masonry.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/base.css":1,"sites\/all\/modules\/views_slideshow\/views_slideshow.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/modules\/date\/date_repeat_field\/date_repeat_field.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/back_to_top\/css\/back_to_top.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/views_slideshow_cycle.css":1,"sites\/all\/themes\/zircon\/css\/views.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/messages.css":1,"sites\/all\/themes\/zircon\/fonts\/oswald_regular\/stylesheet.css":1,"sites\/all\/themes\/zircon\/css\/html-elements.css":1,"sites\/all\/themes\/zircon\/css\/forms.css":1,"sites\/all\/themes\/zircon\/css\/page.css":1,"sites\/all\/themes\/zircon\/css\/articles.css":1,"sites\/all\/themes\/zircon\/css\/comments.css":1,"sites\/all\/themes\/zircon\/css\/forum.css":1,"sites\/all\/themes\/zircon\/css\/fields.css":1,"sites\/all\/themes\/zircon\/css\/blocks.css":1,"sites\/all\/themes\/zircon\/css\/block-styles.css":1,"sites\/all\/themes\/zircon\/css\/panel-panes.css":1,"sites\/all\/themes\/zircon\/css\/navigation.css":1,"sites\/all\/themes\/zircon\/css\/fonts.css":1,"sites\/all\/themes\/zircon\/css\/zircon-overrides.css":1,"sites\/all\/themes\/zircon\/css\/css3.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/responsive\/responsive.css":1,"sites\/all\/themes\/zircon\/css\/print.css":1,"sites\/all\/themes\/zircon\/css\/screens\/mobile.css":1,"sites\/all\/themes\/zircon\/css\/screens\/mobile-vertical.css":1,"sites\/all\/themes\/zircon\/css\/screens\/tablet-vertical.css":1,"sites\/all\/themes\/zircon\/css\/screens\/tablet.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/ie7.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/ie.css":1,"sites\/all\/themes\/zircon\/css\/ie.css":1,"sites\/all\/themes\/zircon\/css\/ie7.css":1,"public:\/\/nucleus\/grid-fixed-24-1008px.css":1}},"urlIsAjaxTrusted":{"\/drupal-7.54\/?q=examination-notices-circulars":true},"viewsSlideshow":{"university_latest_news-block_1":{"methods":{"goToSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"nextSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"pause":["viewsSlideshowControls","viewsSlideshowCycle"],"play":["viewsSlideshowControls","viewsSlideshowCycle"],"previousSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"transitionBegin":["viewsSlideshowPager","viewsSlideshowSlideCounter"],"transitionEnd":[]},"paused":0}},"viewsSlideshowCycle":{"#views_slideshow_cycle_main_university_latest_news-block_1":{"num_divs":4,"id_prefix":"#views_slideshow_cycle_main_","div_prefix":"#views_slideshow_cycle_div_","vss_id":"university_latest_news-block_1","effect":"scrollLeft","transition_advanced":1,"timeout":5000,"speed":700,"delay":0,"sync":1,"random":0,"pause":1,"pause_on_click":0,"play_on_hover":0,"action_advanced":0,"start_paused":0,"remember_slide":0,"remember_slide_days":1,"pause_in_middle":0,"pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","nowrap":0,"pause_after_slideshow":0,"fixed_height":1,"items_per_slide":1,"wait_for_image_load":1,"wait_for_image_load_timeout":3000,"cleartype":0,"cleartypenobg":0,"advanced_options":"{}"}},"back_to_top":{"back_to_top_button_trigger":"100","back_to_top_button_text":"Back to top","#attached":{"library":[["system","ui"]]}}});
//--><!]]>
</script>
  </head>

  <body class="html not-front not-logged-in two-sidebars page-examination-notices-circulars i18n-en zircon fixed-grid grid-24-based bf-a ptf-sss btf-sss fs-small">
    <div id="skip-link"><a href="index.html@q=examination-notices-circulars.html#main-content" class="element-invisible element-focusable">Skip to main content</a></div>
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
      <div class="view view-university-latest-news view-id-university_latest_news view-display-id-block_1 view-dom-id-73f02c100fdd71c7464b41895dacb0a7">
        
  
  
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
      <form action="index.html@q=examination-notices-circulars.html" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search form</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
 <input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" />
</div>
<div class="form-actions form-wrapper" id="edit-actions"><span class="button edit-submit">
    <input type="submit" name="op" id="edit-submit" value="Search"  class="form-submit" />
    </span>
</div><input type="hidden" name="form_build_id" value="form-5-VJv8IJOZStuh2qrRqqMcCzXrnaBIzvPuXCrHHyReQ" />
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
<li class="expanded"><a href="index.html@q=academics%252Fdepartments.html" title="">Academics </a><ul class="menu"><li class="first leaf"><a href="index.html@q=academics%252Fdepartments.html">Departments</a></li>
<li class="leaf"><a href="index.html@q=universityprograms.html" title="">Programs</a></li>
<li class="leaf"><a href="index.html@q=university-faculty.html" title="">University Faculty</a></li>
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
<li class="expanded active-trail"><a href="index.html@q=examination-main.html" class="active-trail">Examination</a><ul class="menu"><li class="first leaf"><a href="index.html@q=examination-ordinance-and-regulation.html" title="">Ordinance And Regulation</a></li>
<li class="leaf"><a href="index.html@q=examination-datesheet.html" title="">Datesheet</a></li>
<li class="leaf"><a href="index.html@q=examination-result.html" title="">Results</a></li>
<li class="last leaf active-trail"><a href="index.html@q=examination-notices-circulars.html" title="" class="active-trail active">Notices / Circulars</a></li>
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
      <div class="group-cols-2 group-18 grid grid-18">

        <!-- MAIN CONTENT -->
        <div id="main-content" class="grid grid-12 section">
          <div class="grid-inner clearfix">

                        
            

             	
            <h1 class="page_title">Examination Notices And Circulars</h1>
            
            

            
                          

            
            
               <div class="region region-content">
    <div id="block-system-main" class="block-system">
  <div class="block-inner clearfix">
    
    
    
    <div class="block-content clearfix">
      <div class="view view-examination-notices-circulars view-id-examination_notices_circulars view-display-id-page view-dom-id-c9f34aa3e2f174c37510ee2933c486e7">
        
      <div class="view-filters">
      <form action="index.html@q=examination-notices-circulars.html" method="get" id="views-exposed-form-examination-notices-circulars-page" accept-charset="UTF-8"><div>  <input type="hidden" name="q" value="examination-notices-circulars" />
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
          <div id="edit-keys-wrapper" class="views-exposed-widget views-widget-filter-keys">
                  <label for="edit-keys">
            Search in Examination Notices          </label>
                        <div class="views-widget">
          <div class="form-item form-type-textfield form-item-keys">
 <input title="Enter the terms you wish to search for." type="text" id="edit-keys" name="keys" value="" size="15" maxlength="128" class="form-text" />
</div>
        </div>
              </div>
                    <div class="views-exposed-widget views-submit-button">
      <span class="button edit-submit-examination-notices-circulars">
    <input type="submit" id="edit-submit-examination-notices-circulars" value="Apply"  class="form-submit" />
    </span>
    </div>
      </div>
</div>
</div></form>    </div>
  
  
      <div class="view-content">
      <table class="views-table cols-2" >
         <thead>
      <tr>
                  <th class="views-field views-field-field-date-of-upload-content"  scope="col">
            Date          </th>
                  <th class="views-field views-field-title"  scope="col">
            Title          </th>
              </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


?>

<tr class="odd views-row-first">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-12-14T00:00:00+05:30">


<?php  $date=date_create($row["upload_date"]); echo date_format($date,"m/d/Y");  ?>


</span> </td>
  <td class="views-field views-field-title" >
            <h3><a href="<?php echo $row["file"]; ?>"><?php echo $row["title"]; ?></a>

</h3>          </td>
              </tr>
        

<?php 
    }
} ?>

          








          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-10-06T00:00:00+05:30">10/06/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/06&#32;Guidelines&#32;for&#32;Faculty.pdf">Guidelines for  faculty</a></h3>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-10-06T00:00:00+05:30">10/06/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/05&#32;examinaiton&#32;guidelines&#32;for&#32;conduct&#32;of&#32;entrance&#32;exam&#32;version&#32;2.0.pdf">Guidelines for the Conduct of Entrance Examinations</a></h3>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-10-06T00:00:00+05:30">10/06/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/05&#32;examinaiton&#32;guidelines&#32;for&#32;conduct&#32;of&#32;entrance&#32;exam&#32;version&#32;2.0_0.pdf">Guidelines for Centralized Evaluation Centre for End-Semester Theory Examination</a></h3>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-08-04T00:00:00+05:30">08/04/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/Online&#32;Registration_1.pdf">Circular regarding Online Student Registration for Students admitted in Academic year 2017-18</a></h3>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-07-26T00:00:00+05:30">07/26/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/provisional-certificate_1.pdf">Circular regarding Issue of Provisional Certificate</a></h3>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-07-03T00:00:00+05:30">07/03/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/Declaration&#32;of&#32;Audit&#32;Papers.pdf">Circular regarding declaration of Audit papers by students graduating in 2017</a></h3>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-07-03T00:00:00+05:30">07/03/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/Re-checking&#32;of&#32;end-semester&#32;may&#32;2017&#32;result.pdf">Circular regarding Re-checking for End semester May 2017 result</a></h3>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-07-03T00:00:00+05:30">07/03/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/student&#32;registration&#32;for&#32;semester&#32;aug-dec&#32;2017.pdf">Circular Regarding student registration for semester Aug - Dec 2017</a></h3>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-07-03T00:00:00+05:30">07/03/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/conduct&#32;of&#32;supplementary&#32;examination.pdf">Circular regarding conduct of supplementary examination</a></h3>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-06-22T00:00:00+05:30">06/22/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/Decision&#32;UFM&#32;CASES-End&#32;Term-May&#32;2017.pdf">Decision of the Unfair Means Cases Booked/Reported during End Term Examination, May 2017</a></h3>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-05-16T00:00:00+05:30">05/16/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/revised&#32;renumeration.pdf">Circular regarding Revised remuneration payable and norms for the conduct of end-semester examination and central evaluation</a></h3>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-04-07T00:00:00+05:30">04/07/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/Reappear_B.Tech&#32;MAE_1_Dec&#32;2016.pdf">Re-appear B.Tech MAE 1st Sem</a></h3>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-03-25T00:00:00+05:30">03/25/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/noticeexam.pdf">Circular regarding Verification of the Personal Information and Degree details by the students</a></h3>          </td>
              </tr>
          <tr class="odd views-row-last">
                  <td class="views-field views-field-field-date-of-upload-content" >
            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2017-03-10T00:00:00+05:30">03/10/2017</span>          </td>
                  <td class="views-field views-field-title" >
            <h3><a href="sites/default/files/New&#32;Doc&#32;2017-03-10&#32;1.pdf">Notice regarding issue of Consolidated Statement of marks</a></h3>          </td>
              </tr>
      </tbody>
</table>
    </div>
  
      <h2 class="element-invisible">Pages</h2><div class="item-list"><ul class="pager"><li class="pager-current first">1</li>
<li class="pager-item"><a title="Go to page 2" href="index.html@q=examination-notices-circulars&amp;keys=&amp;page=1.html">2</a></li>
<li class="pager-item"><a title="Go to page 3" href="index.html@q=examination-notices-circulars&amp;keys=&amp;page=2.html">3</a></li>
<li class="pager-item"><a title="Go to page 4" href="index.html@q=examination-notices-circulars&amp;keys=&amp;page=3.html">4</a></li>
<li class="pager-next"><a title="Go to next page" href="index.html@q=examination-notices-circulars&amp;keys=&amp;page=1.html">next ›</a></li>
<li class="pager-last last"><a title="Go to last page" href="index.html@q=examination-notices-circulars&amp;keys=&amp;page=3.html">last »</a></li>
</ul></div>  
  
  
  
  
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
    <div id="block-menu-menu-notices--2" class="block block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title">Notices</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first leaf"><a href="index.html@q=uni_notices%252F41%252B42%252B3%252B4%252B5%252B6%252B7%252B8.html" title="">Student Notices</a></li>
<li class="leaf"><a href="index.html@q=uni_notices%252F1.html" title="">University Notices</a></li>
<li class="last leaf active-trail"><a href="index.html@q=examination-notices-circulars.html" title="" class="active-trail active">Examination Notices</a></li>
</ul>    </div>
  </div>
</div>
<div id="block-menu-menu-examination-division-quic--2" class="block block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title">Quick Links - Examination</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first last leaf"><a href="http://172.16.100.21/Examination_v2/users/login" title="">Campus Access-Exam Portal </a></li>
</ul>    </div>
  </div>
</div>
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

              <!-- SIDEBAR SECOND -->
        <div id="sidebar-second-wrapper" class="sidebar tb-main-box grid grid-6 grid-last">
          <div class="grid-inner clearfix">
              <div class="region region-sidebar-second">
    <div id="block-menu-menu-examination--2" class="block block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title">Examination</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first leaf"><a href="index.html@q=examination-ordinance-and-regulation.html" title="">Ordinance And Regulation</a></li>
<li class="leaf"><a href="index.html@q=examination-datesheet.html" title="">Datesheet</a></li>
<li class="leaf"><a href="index.html@q=examination-result.html" title="">Results</a></li>
<li class="last leaf active-trail"><a href="index.html@q=examination-notices-circulars.html" title="" class="active-trail active">Notices / Circulars</a></li>
</ul>    </div>
  </div>
</div>
  </div>
          </div>
        </div>
        <!-- //SIDEBAR SECOND -->
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