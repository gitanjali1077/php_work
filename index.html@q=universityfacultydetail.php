<?php include 'connection.php';?>

<?php 


$conn = db_connect();
$id1 =$_GET['id'];  
$id=base64_decode(urldecode($id1));
$sql = "SELECT * FROM faculty where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<link rel="canonical" href="index.html@q=universityfaculty%252Fece%252Fdr-nidhi-goel.html" />
<link rel="shortlink" href="index.html@q=node%252F663.html" />
<link rel="shortcut icon" href="sites/default/files/logo.png" type="image/png" />
    <title>
 <?php echo $row["name"];?>|

 INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</title>
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
<script type="text/javascript" src="misc/form.js@v=7.54"></script>
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
<script type="text/javascript" src="sites/all/modules/field_group/field_group.js@oqrpvr"></script>
<script type="text/javascript" src="misc/collapse.js@v=7.54"></script>
<script type="text/javascript" src="sites/all/themes/nucleus/nucleus/js/jquery.cookie.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/zircon.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/responsive.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/jquery.masonry.js@oqrpvr"></script>
<script type="text/javascript" src="sites/all/themes/zircon/js/jquery.masonry.min.js@oqrpvr"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/drupal-7.54\/","pathPrefix":"","ajaxPageState":{"theme":"zircon","theme_token":"i29ujuOMYGVKLyCppLIfYMsOmd--f3wkHjBGV_HTK0Q","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.effect.min.js":1,"sites\/all\/modules\/views_slideshow\/js\/views_slideshow.js":1,"misc\/form.js":1,"sites\/all\/modules\/back_to_top\/js\/back_to_top.js":1,"sites\/all\/libraries\/jquery.cycle\/jquery.cycle.all.js":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/js\/views_slideshow_cycle.js":1,"0":1,"1":1,"sites\/all\/modules\/field_group\/field_group.js":1,"misc\/collapse.js":1,"sites\/all\/themes\/nucleus\/nucleus\/js\/jquery.cookie.js":1,"sites\/all\/themes\/zircon\/js\/zircon.js":1,"sites\/all\/themes\/zircon\/js\/responsive.js":1,"sites\/all\/themes\/zircon\/js\/jquery.masonry.js":1,"sites\/all\/themes\/zircon\/js\/jquery.masonry.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/base.css":1,"sites\/all\/modules\/views_slideshow\/views_slideshow.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/modules\/date\/date_repeat_field\/date_repeat_field.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/back_to_top\/css\/back_to_top.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/views_slideshow_cycle.css":1,"sites\/all\/themes\/zircon\/css\/views.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/messages.css":1,"sites\/all\/themes\/zircon\/fonts\/oswald_regular\/stylesheet.css":1,"sites\/all\/themes\/zircon\/css\/html-elements.css":1,"sites\/all\/themes\/zircon\/css\/forms.css":1,"sites\/all\/themes\/zircon\/css\/page.css":1,"sites\/all\/themes\/zircon\/css\/articles.css":1,"sites\/all\/themes\/zircon\/css\/comments.css":1,"sites\/all\/themes\/zircon\/css\/forum.css":1,"sites\/all\/themes\/zircon\/css\/fields.css":1,"sites\/all\/themes\/zircon\/css\/blocks.css":1,"sites\/all\/themes\/zircon\/css\/block-styles.css":1,"sites\/all\/themes\/zircon\/css\/panel-panes.css":1,"sites\/all\/themes\/zircon\/css\/navigation.css":1,"sites\/all\/themes\/zircon\/css\/fonts.css":1,"sites\/all\/themes\/zircon\/css\/zircon-overrides.css":1,"sites\/all\/themes\/zircon\/css\/css3.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/responsive\/responsive.css":1,"sites\/all\/themes\/zircon\/css\/print.css":1,"sites\/all\/themes\/zircon\/css\/screens\/mobile.css":1,"sites\/all\/themes\/zircon\/css\/screens\/mobile-vertical.css":1,"sites\/all\/themes\/zircon\/css\/screens\/tablet-vertical.css":1,"sites\/all\/themes\/zircon\/css\/screens\/tablet.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/ie7.css":1,"sites\/all\/themes\/nucleus\/nucleus\/css\/ie.css":1,"sites\/all\/themes\/zircon\/css\/ie.css":1,"sites\/all\/themes\/zircon\/css\/ie7.css":1,"public:\/\/nucleus\/grid-fixed-24-1008px.css":1}},"viewsSlideshow":{"university_latest_news-block_1":{"methods":{"goToSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"nextSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"pause":["viewsSlideshowControls","viewsSlideshowCycle"],"play":["viewsSlideshowControls","viewsSlideshowCycle"],"previousSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"transitionBegin":["viewsSlideshowPager","viewsSlideshowSlideCounter"],"transitionEnd":[]},"paused":0}},"viewsSlideshowCycle":{"#views_slideshow_cycle_main_university_latest_news-block_1":{"num_divs":4,"id_prefix":"#views_slideshow_cycle_main_","div_prefix":"#views_slideshow_cycle_div_","vss_id":"university_latest_news-block_1","effect":"scrollLeft","transition_advanced":1,"timeout":5000,"speed":700,"delay":0,"sync":1,"random":0,"pause":1,"pause_on_click":0,"play_on_hover":0,"action_advanced":0,"start_paused":0,"remember_slide":0,"remember_slide_days":1,"pause_in_middle":0,"pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","nowrap":0,"pause_after_slideshow":0,"fixed_height":1,"items_per_slide":1,"wait_for_image_load":1,"wait_for_image_load_timeout":3000,"cleartype":0,"cleartypenobg":0,"advanced_options":"{}"}},"back_to_top":{"back_to_top_button_trigger":"100","back_to_top_button_text":"Back to top","#attached":{"library":[["system","ui"]]}},"urlIsAjaxTrusted":{"\/drupal-7.54\/?q=universityfaculty\/ece\/dr-nidhi-goel":true},"field_group":{"fieldset":"full"}});
//--><!]]>
</script>
  </head>

  <body class="html not-front not-logged-in one-sidebar sidebar-first page-node page-node- page-node-663 node-type-university-faculty i18n-en zircon fixed-grid grid-24-based bf-a ptf-sss btf-sss fs-small">
    <div id="skip-link"><a href="index.html@q=universityfaculty%252Fece%252Fdr-nidhi-goel.html#main-content" class="element-invisible element-focusable">Skip to main content</a></div>
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
      <div class="view view-university-latest-news view-id-university_latest_news view-display-id-block_1 view-dom-id-afa202274113d34690db3098e29d06a0">
        
  
  
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
      <form action="index.html@q=universityfaculty%252Fece%252Fdr-nidhi-goel.html" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search form</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
 <input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" />
</div>
<div class="form-actions form-wrapper" id="edit-actions"><span class="button edit-submit">
    <input type="submit" name="op" id="edit-submit" value="Search"  class="form-submit" />
    </span>
</div><input type="hidden" name="form_build_id" value="form-Mo3GBDBqtBxDRFSsokBaYUJ_7uMp_5Mnc_cAZLA5a9Q" />
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

                        
            

             	
            <h1 class="page_title"> <?php echo $row["name"];?></h1>
            
            

            
                          

            
            
               <div class="region region-content">
    <div id="block-system-main" class="block-system">
  <div class="block-inner clearfix">
    
    
    
    <div class="block-content clearfix">
      <div id="article-663" class="article node node-university-faculty node-odd node-full clearfix" about="/drupal-7.54/?q=universityfaculty/ece/dr-nidhi-goel" typeof="sioc:Item foaf:Document">
  
  
  <div class="node-content">
    <div class="section field field-name-field-photograph field-type-image field-label-hidden"><div class="field-items"><div class="field-item odd">

<img typeof="foaf:Image" src="<?php echo $row["image"]; ?>"  width="150" height="200" alt="" />



</div></div></div><fieldset  class="collapsible fieldset form-wrapper titled">
      <legend>
      <span class="fieldset-title fieldset-legend">
        Contact Information      </span>
    </legend>
  
      <div class="fieldset-content fieldset-wrapper clearfix" class="collapsible fieldset form-wrapper titled">
      <div class='description'></div><div class="section field field-name-field-office-address field-type-text-long field-label-inline clearfix"><h3 class="field-label">Office Address:&nbsp;</h3><div class="field-items"><div class="field-item odd"><p><?php echo $row["office_Address"];?></p>
</div></div></div><div class="section field field-name-field-e-mail field-type-text field-label-inline clearfix"><h3 class="field-label">E-mail:&nbsp;</h3><div class="field-items"><div class="field-item odd"><p><a href="mailto:nidhi.iitr@gmail.com"><?php echo $row["email"];?></a></p>
</div></div></div><div class="section field field-name-field-phone field-type-text field-label-inline clearfix"><h3 class="field-label">Phone:&nbsp;</h3><div class="field-items"><div class="field-item odd"><p><?php echo $row["phone_number"];?></p>
</div></div></div><div class="section field field-name-field-website field-type-text-long field-label-inline clearfix"><h3 class="field-label">Website:&nbsp;</h3><div class="field-items"><div class="field-item odd"><p><?php echo $row["website"];?></p>
</div></div></div>    </div>
  </fieldset>

<div class="field field-name-field-department field-type-taxonomy-term-reference field-label-hidden clearfix">
    <ul class="field-items">
          <li class="field-item even">
        <?php echo $row["department"];?></li>
      </ul>
</div>
<div class="section field field-name-field-post field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item odd"><p><?php echo $row["designation"];?></p>
</div></div></div><div class="section field field-name-field-univeristy-qualification field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item odd"><p><span style="font-size:12px">
<?php echo $row["education"];?>
</span></p>
</div></div></div><div class="section field field-name-field-specialization field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item odd"><p><span style="font-size:12px">
<?php echo $row["skills"];?>
</span></p>
</div></div></div><div class="section field field-name-field-subjects-taught field-type-text-long field-label-inline clearfix"><h3 class="field-label">Subjects Taught:&nbsp;</h3><div class="field-items"><div class="field-item odd"><p><?php echo $row["subjects"];?></p>
</div></div></div><div class="section field field-name-field-description field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item odd"><p><span style="color:#A52A2A"><strong>Biographical Sketch: </strong></span><br />
<?php echo $row["bio_sketch"];?></p>
</div></div></div>  </div>

  
  </div>
    </div>
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
    <div id="block-menu-menu-academics-quick-link-menu---2" class="block block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title">Related Links</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first expanded"><a href="index.html@q=academics%252Fdepartments.html" title="">Academic Departments</a><ul class="menu"><li class="first leaf"><a href="index.html@q=universitydepartment%252Fapplied-sciences-humanities.html" title="">Applied Sciences &amp; Humanities</a></li>
<li class="leaf"><a href="index.html@q=universitydepartment%252Farchitecture-and-planning.html" title="">Architecture and Planning</a></li>
<li class="leaf"><a href="index.html@q=universitydepartment%252Fcomputer-science-engineering.html" title="">Computer Science &amp; Engineering</a></li>
<li class="leaf"><a href="index.html@q=universitydepartment%252Felectronics-and-communication-engineering.html" title="">Electronics and Communication Engineering</a></li>
<li class="leaf"><a href="index.html@q=universitydepartment%252Finformation-technology.html" title="">Information Technology</a></li>
<li class="last leaf"><a href="index.html@q=universitydepartment%252Fmechanical-and-automation-engineering.html" title="">Mechanical and Automation Engineering</a></li>
</ul></li>
<li class="leaf"><a href="index.html@q=universityprograms.html" title="">Programs</a></li>
<li class="leaf"><a href="index.html@q=university-faculty.html" title="">University Faculty</a></li>
<li class="last leaf"><a href="index.html@q=academic-calender.html" title="">Academic Calendar</a></li>
</ul>    </div>
  </div>
</div>
<div id="block-menu-menu-manu-ece--2" class="block block-menu">
  <div class="block-inner clearfix">
    
          <h2 class="block-title">Explore ECE</h2>
    
    
    <div class="block-content clearfix">
      <ul class="menu"><li class="first leaf"><a href="index.html@q=departmentobjectives%252FECE.html" title="">Objective</a></li>
<li class="leaf"><a href="index.html@q=university-faculty%252F5%252F1.html" title="">Head of Department</a></li>
<li class="leaf"><a href="index.html@q=university-faculty%252F5.html" title="">Faculty</a></li>
<li class="leaf"><a href="index.html@q=universityprograms%252Fece%252F127.html" title="">Programs</a></li>
<li class="leaf"><a href="index.html@q=proejct%252Fdview%252F5.html" title="">Projects</a></li>
<li class="leaf"><a href="index.html@q=universitylabs%252Fece%252F127.html" title="">Labs</a></li>
<li class="leaf"><a href="index.html@q=ece-side-menu%252F35.html" title="">Broad Areas of Research</a></li>
<li class="leaf"><a href="index.html@q=department_events%252F5.html" title="">Events</a></li>
<li class="last leaf"><a href="index.html@q=photo-gallery%252F5.html" title="">Photo Gallery</a></li>
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