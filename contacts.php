<?php 
session_start();
$_SESSION['path'] = "contacts.php" ;

if ( ! isset ( $_SESSION['langProp'] ) ) {
  $_SESSION['langProp'] = "uz" ;
}
$CurentLang = $_SESSION['langProp'];
include_once ("lang/".$CurentLang.".php");

?>

<!DOCTYPE HTML>
<html lang="en-gb" dir="ltr"  data-config='{"twitter":1,"plusone":1,"facebook":1,"style":"default"}'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
  <base  />
  <title>ElPay.uz</title>
  <link href="component/search/index15e4.html?id=37&amp;Itemid=101&amp;format=opensearch" rel="search" type="applicationation/opensearchdescription+xml" />
  <link href="files/roksprocket/layouts/tables/themes/product/product.css" rel="stylesheet" />
  <link href="files/roksprocket/layouts/features/themes/slideshow/slideshow.css" rel="stylesheet" />
  <script src="media/system/js/mootools-core85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script src="media/system/js/core85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script src="components/com_roksprocket/assets/js/mootools-mobile.js"></script>
  <script src="components/com_roksprocket/assets/js/rokmediaqueries.js"></script>
  <script src="components/com_roksprocket/assets/js/roksprocket.js"></script>
  <script src="components/com_roksprocket/assets/js/moofx.js"></script>
  <script src="components/com_roksprocket/assets/js/roksprocket.request.js"></script>
  <script src="components/com_roksprocket/layouts/strips/assets/js/strips.js"></script>
  <script src="components/com_roksprocket/layouts/strips/assets/js/strips-speeds.js"></script>
  <script src="components/com_roksprocket/layouts/mosaic/assets/js/mosaic.js"></script>
  <script src="media/system/js/mootools-more85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script src="components/com_roksprocket/layouts/tables/assets/js/tables.js"></script>
  <script src="components/com_roksprocket/layouts/tables/assets/js/tables-speeds.js"></script>
  <script src="components/com_roksprocket/layouts/features/assets/js/features.js"></script>
    <script src="media/jui/js/jquery.min85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script src="media/jui/js/jquery-noconflict85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script src="media/jui/js/jquery-migrate.min85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script src="media/jui/js/bootstrap.min85cc.js?a55fdca19e94462d6fc2c0526721e632"></script>
  <script>
if (typeof RokSprocket == 'undefined') RokSprocket = {};
window.addEvent('domready', function(){
    RokSprocket.instances.strips = new RokSprocket.Strips();
});
window.addEvent('domready', function(){
  RokSprocket.instances.strips.attach(245, '{"animation":"fadeDelay","autoplay":"0","delay":"5"}');
});
window.addEvent('load', function(){
   var overridden = false;
   if (!overridden && window.G5 && window.G5.offcanvas){
       var mod = document.getElement('[data-strips="245"]');
       mod.addEvents({
           touchstart: function(){ window.G5.offcanvas.detach(); },
           touchend: function(){ window.G5.offcanvas.attach(); }
       });
       overridden = true;
   };
});
window.addEvent('domready', function(){
    RokSprocket.instances.mosaic = new RokSprocket.Mosaic();
});
window.addEvent('domready', function(){
  RokSprocket.instances.mosaic.attach(239, '{"pages":2,"animations":["fade","scale","rotate"],"displayed":[38,39,40,41,42,43]}');
});
window.addEvent('load', function(){
   var overridden = false;
   if (!overridden && window.G5 && window.G5.offcanvas){
       var mod = document.getElement('[data-mosaic="239"]');
       mod.addEvents({
           touchstart: function(){ window.G5.offcanvas.detach(); },
           touchend: function(){ window.G5.offcanvas.attach(); }
       });
       overridden = true;
   };
});
window.addEvent('domready', function(){
    RokSprocket.instances.tables = new RokSprocket.Tables();
});
window.addEvent('domready', function(){
  RokSprocket.instances.tables.attach(257, '{"animation":"fadeDelay","autoplay":"0","delay":"5"}');
});
window.addEvent('load', function(){
   var overridden = false;
   if (!overridden && window.G5 && window.G5.offcanvas){
       var mod = document.getElement('[data-tables="257"]');
       mod.addEvents({
           touchstart: function(){ window.G5.offcanvas.detach(); },
           touchend: function(){ window.G5.offcanvas.attach(); }
       });
       overridden = true;
   };
});
window.addEvent('domready', function(){
    RokSprocket.instances.slideshow = new RokSprocket.Slideshow();
});
window.addEvent('domready', function(){
  RokSprocket.instances.slideshow.attach(166, '{"animation":"crossfade","autoplay":"0","delay":"5"}');
});
window.addEvent('load', function(){
   var overridden = false;
   if (!overridden && window.G5 && window.G5.offcanvas){
       var mod = document.getElement('[data-slideshow="166"]');
       mod.addEvents({
           touchstart: function(){ window.G5.offcanvas.detach(); },
           touchend: function(){ window.G5.offcanvas.attach(); }
       });
       overridden = true;
   };
});

  </script>

<link rel="apple-touch-icon-precomposed" href="files/apple_touch_icon.png">
<link rel="stylesheet" href="files/css/bootstrap.css">
<link rel="stylesheet" href="files/css/joomlaplates.css">
<link rel="stylesheet" href="files/css/theme.css">
<link rel="stylesheet" href="files/css/menu-right.css">
<link rel="stylesheet" href="files/css/custom.css">
<script src="files/warp/vendor/uikit/js/uikit.js"></script>
<script src="files/warp/vendor/uikit/js/components/autocomplete.js"></script>
<script src="files/warp/vendor/uikit/js/components/search.js"></script>
<script src="files/warp/vendor/uikit/js/components/sticky.js"></script>
<script src="files/warp/vendor/uikit/js/components/tooltip.js"></script>
<script src="files/warp/vendor/uikit/js/components/slideshow.js"></script>
<script src="files/warp/vendor/uikit/js/components/slideset.js"></script>
<script src="files/warp/vendor/uikit/js/components/lightbox.js"></script>
<script src="files/warp/js/social.js"></script>
<script src="files/js/theme.js"></script>
<style type="text/css">
#top-b .uk-container{width:100% !important; max-width:100%}
</style>
<style type="text/css">
mark{ color:red; }
</style>
<style type="text/css">
#top-c .uk-container{width:100% !important; max-width:100%}
</style>
<style type="text/css">
#top-e{ background-image:url(images/joomlaplates/demo-007.jpg)}
</style>
<style type="text/css">
#top-e .uk-container{width:100% !important; max-width:100%}
</style>
<style type="text/css">
#top-f .uk-container{width:100% !important; max-width:100%}
</style>
<style type="text/css">
#bottom-e{ background-image:url(images/joomlaplates/demo-018.jpg)}
</style>
<style type="text/css">
#bottom-e .uk-container{width:100% !important; max-width:100%}
</style>

<style type="text/css">
.uk-nav-navbar > .uk-parent > .uk-nav-sub { 
  display: block !important; 
}  
.uk-nav-navbar > .uk-parent > a:after {    
  content: "";    
  display: none;    
  float: right;    
}
.uk-nav-navbar > .uk-parent:hover > .uk-nav-sub {  
  background:none;   
  display: block;    
  width: auto !important;    
  position: relative !important;    
  left: inherit !important; 
  margin-top:inherit !important; 
  margin-left:inherit !important; 
  color:inherit !important; 
}
</style>


<style type="text/css">
.submenu {padding:10px 20px}
.tm-top-a {padding:40px 0}
.tm-top-b {padding:0}
.tm-top-c {padding:0}
.tm-top-d {padding:10% 0}
.tm-top-e {padding:10% 0}
.tm-top-f {padding:8% 2%}
.tm-bottom-a {padding:40px 0}
.tm-bottom-b {padding:3% 2%}
.tm-bottom-c {padding:0}
.tm-bottom-d {padding:10% 0}
.tm-bottom-e {padding:10% 2%}
.tm-bottom-f {padding:3% 2%}
</style>

<style type="text/css">
.absolute {left:20px}
</style>



<style type="text/css">
  
  .About{
    width: 90%;
    margin: auto;
    margin-top: 10px;
    background-color: #bebebe;
  }
  
  .about-us{
    padding: 10px;
    font-size: 18px;
    font-family: serif;
    font-style: italic;
  }
  .pts a:link {
    color:white;
  }
</style>

</head>

<body id="home" class="tm-isblog">

  <div class="full-wrapper">
    <!-- TOP Outer -->
  <div class="toolbar-outer uk-clearfix">
  <div class="uk-container uk-container-center">
  <div class="tm-toolbar uk-clearfix">
  <div class="uk-float-left"><div class="uk-panel" >
  
  <a href="tel:+9989"><i class="uk-icon-phone-square"></i> +99875 220-03-03</a>
<a style="margin-left:20px" href="https://elpaygroup@gmail.com"><i class="uk-icon-envelope"></i> elpaygroup@gmail.com</a>
<a style="margin-left: 20px" href="setLang/setUz.php"><img src="images/UZ.png" width="30px" height="25px">UZ</a>&nbsp&nbsp|
<a style="margin-left: 20px" href="setLang/setRu.php"><img src="images/RU.png" width="30px" height="25px">RU</a>&nbsp&nbsp|
<a style="margin-left: 20px" href="setLang/setEn.php"><img src="images/GB.png" width="30px" height="25px">EN</a>
</div></div>

<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION['user_name'])&&isset($_SESSION['user_surname'])){
  echo "<div class=\"account\" align=\"right\"><img src=\"images/user.png\" alt=\"User\" width=\"25px\" height=\"30px\">".$_SESSION['user_name']." ".$_SESSION['user_surname']." <a href=\"edit.php\"><img src=\"images/edit.png\" width=\"25px\" height=\"30px\"></a> <a href=\"registration/logout.php\"><img src=\"images/exit.png\" width=\"25px\" height=\"30px\"></a> </div>";
}
else { } 
?>     

                                    <!-- <div class="uk-float-right"><div class="uk-panel" >
  <a href="index.php"><i class="uk-icon-button uk-icon-facebook"></i></a>
<a href="index.php"><i class="uk-icon-button uk-icon-twitter"></i></a>
<a href="index.php"><i class="uk-icon-button uk-icon-pinterest"></i></a>
<a href="index.php"><i class="uk-icon-button uk-icon-google-plus"></i></a></div></div> -->
      </div>
      </div>
      </div>

  <div id="menu-outer" class="no-space">
        <nav class="tm-navbar uk-navbar" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}" >
  <div class="uk-container uk-container-center">
  <div class="uk-hidden-small uk-float-left">
      <a class="logo" href="index.php">
      <h3><img src="images/Logo.png" width="90" height="90"></h3></a></div>
   <a href="#offcanvas" class="uk-navbar-toggle uk-float-right" data-uk-offcanvas="{mode:'slide'}"></a>
  <div class="menu-style"><ul class="uk-navbar-nav uk-hidden-small">
    <li class="uk-active"><a href="index.php"><i class="uk-icon-home"></i><?php echo $Lang['home']; ?></a></li>
    <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#"><?php echo $Lang['services']; ?></a>
    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-2">
  <div class="uk-grid uk-dropdown-grid"><div class="uk-width-1-2"><ul class="uk-nav uk-nav-navbar">
    
    
    

    <li><a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id" data-uk-modal="{center:true}" ><?php echo $Lang['ser_name_1']; ?></a>
    <div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><mark><?php echo $Lang['sorry']; ?></mark>
</p></div></div></li>
    <li><a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id" data-uk-modal="{center:true}"><?php echo $Lang['ser_name_2']; ?></a><div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><mark><?php echo $Lang['sorry']; ?></mark>
</p></div></div></li>
    <li><a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id" data-uk-modal="{center:true}">Internet</a><div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><mark><?php echo $Lang['sorry']; ?></mark>
</p></div></div></li></ul></div>
  <div class="uk-width-1-2"><ul class="uk-nav uk-nav-navbar">
    <li><a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id" data-uk-modal="{center:true}"><?php echo $Lang['ser_name_4']; ?></a><div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><mark> <?php echo $Lang['sorry']; ?></mark>
</p></div></div></li>
    <li><a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id" data-uk-modal="{center:true}"><?php echo $Lang['ser_name_5']; ?></a><div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><mark><?php echo $Lang['sorry']; ?></mark>
</p></div></div></li>
    <li><a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id" data-uk-modal="{center:true}"><?php echo $Lang['ser_name_6']; ?></a><div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><mark> <?php echo $Lang['sorry']; ?></mark>
</p></div></div></li></ul></div></div></div></li>


<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if( !( isset($_SESSION['user_name'])&&isset($_SESSION['user_surname']) ) ) {
  echo "<li class=\"uk-parent\" data-uk-dropdown=\"{'preventflip':'y'}\" aria-haspopup=\"true\" aria-expanded=\"false\"><a href=\"#\">".$Lang['my_cabinet']."</a>
    <div class=\"uk-dropdown uk-dropdown-navbar uk-dropdown-width-1\">
    <div class=\"uk-grid uk-dropdown-grid\">
    <div class=\"uk-width-1-1\"><ul class=\"uk-nav uk-nav-navbar\">
      <li><a href=\"register.php\">".$Lang['reg']."</a></li>
      <li><a href=\"login.php\">".$Lang['log']."</a></li></ul></div></div></div></li>";
}
else { } 
?>

      <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#"><?php echo $Lang['news'] ; ?></a>
    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
    <div class="uk-grid uk-dropdown-grid">
    <div class="uk-width-1-1"><ul class="uk-nav uk-nav-navbar">
      <li><a href="our_news.php"><?php echo $Lang['o_n'] ; ?></a></li>
      <li><a href="it_news.php"><?php echo $Lang['t_n'] ; ?></a></li>
      </ul></div></div></div></li>

      <li class="uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#"><?php echo $Lang['help'] ; ?></a>
    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
    <div class="uk-grid uk-dropdown-grid">
    <div class="uk-width-1-1"><ul class="uk-nav uk-nav-navbar">
<li class="uk-parent"><a href="about.php"><?php echo $Lang['aboute_us'] ; ?></a>
  <li><a class="uk-button-secondary" href="#partners" data-uk-modal="{center:true}"><?php echo $Lang['o_partner'] ; ?></a>
    <div id="partners" class="uk-modal">
    <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <p><table border="2" align="center" width="100%" ccellspacing="0" cellpadding="5" class="pts">
<thead align="center">
<caption><h2><?php echo $Lang['partners']; ?></h2></caption>
<colgroup width="40%"></colgroup>
<colgroup span="2"><col width="20%"><col width="10%"></colgroup>
<tr bgcolor="orange">
<th width="50" align="center"> <?php echo $Lang['partners'] ; ?></th>
<th width="70" align="center"><?php echo $Lang['phone_number'] ; ?></th>
<th width="70" align="center"><?php echo $Lang['o_n'] ; ?></th>
</tr>
</thead>
<tbody align="center">
<tr bgcolor="#0093d3">
<td>UZPAYNET</td>
<td>+99871 202 07 07<br>+99871 244 67 04</td>
<td><a href="https://paynet.uz"> paynet.uz</a></td>
</tr>
</tbody>
<tbody align="center">
<tr bgcolor="#0093d3">
<td><?php echo $Lang['turon_bank']; ?></td>
<td>+99895 144 60 00 <br>+99871 244 88 65</td>
<td><a  href="https://turonbank.uz"> turonbank.uz</a></td>
</tr>
</tbody>
<tbody align="center">
<tr bgcolor="#0093d3">
<td><?php echo $Lang['xalq_bank']; ?></td>
<td>+99871 200 00 55</td>
<td><a href="http://xb.uz"> xb.uz</a></td>
</tr>
</tbody>
<tbody align="center">
<tr bgcolor="#0093d3">
<td><?php echo $Lang['and_other_bank']; ?></td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table></p></div></div></li>
<li><a  class="uk-active"  href="contacts.php"><?php echo $Lang['contact']; ?></a></li>
  <li><a  class="uk-active"  href="instruments.php"><?php echo $Lang['software']; ?></a></li>
      </ul></div></div></div></li>
                
  <div class="uk-navbar-content uk-visible-small">
  <a class="logo-small" href="index.php">
  <h3><img src="images/Logo.png" width="45" height="45"></h3></a></div></div>
          </nav></div>
              
  <div class="uk-cover-background" id="top-b">
  <div class="uk-container uk-container-center">
      <section class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
    <div class="uk-width-1-1">
    <div class="uk-panel" data-uk-scrollspy="{cls:'',delay:800}">
  <div class="uk-slidenav-position" data-uk-slideshow>
      <ul class="uk-slideshow">
        <li>
          <img src="images/slider-002.jpg">
    <div class="uk-overlay-panel uk-flex uk-flex-inline uk-flex-middle">
    <div class="uk-text-center uk-align-center">
      <h1><?php echo $Lang['comment_elpay']; ?></h1>
      <h4><?php echo $Lang['comment_elpay2']; ?></h4>
      <p><a class="uk-button" href="about.php"><?php echo $Lang['r_m_...']; ?></a></p></div></div></li>

        <li>
          <img src="images/slider-003.jpg">
    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-inline uk-flex-middle">
    <div class="uk-text-center uk-align-center">
      <h1><?php echo $Lang['comment_elpay']; ?></h1>
      <h4><?php echo $Lang['comment_elpay2']; ?></h4>
      <p><a class="uk-button" href="about.php"><?php echo $Lang['r_m_...']; ?></a></p></div></div></li></ul>


  <a href="index.php" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
  <a href="index.php" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
    
      <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
        <li data-uk-slideshow-item="0"><a href="index.php"></a></li>
        <li data-uk-slideshow-item="1"><a href="index.php"></a></li>
    </ul></div></div></div></section></div></div>
            
      <!-- Submenu -->
  <div class="submenu uk-clearfix">
  <div class="uk-container uk-container-center">
    <section class="tm-submenu uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
  <div class="uk-width-1-1 uk-width-large-1-2">
  <div class="uk-panel" >
    <ul class="uk-subnav uk-subnav-line">
    <li><a href="#top-c" class="scroll"><?php echo $Lang['contact']; ?></a></li>
    <li><a href="#bottom-a" class="scroll"><?php echo $Lang['news'] ; ?></a></li></ul></div></div>

  <div class="uk-hidden-small uk-hidden-medium uk-width-large-1-2">
  <div class="uk-panel uk-hidden-medium uk-hidden-small uk-float-right uk-flex uk-flex-middle" >
  </div></div></section></div></div>
  <div class="uk-cover-background" id="top-c">    
<div class="About">
  
 <table border="2" align="center" width="100%" ccellspacing="0" cellpadding="5">
<thead align="center">
<caption><h2><?php echo $Lang['contact']; ?></h2></caption>
<colgroup width="40%"></colgroup>
<colgroup span="2"><col width="20%"><col width="10%"></colgroup>
<tr bgcolor="orange">
<th width="50"><?php echo $Lang['address']; ?></th>
<th width="70"><?php echo $Lang['phone_number']; ?></th>

</tr>
</thead>
<tbody align="center">
<tr bgcolor="#0093d3">
<td><?php echo $Lang['address_name']; ?></td>
<td>+99875 220 03 03</td>
</tr>
</tbody>
</table>

 <table border="2" align="center" width="100%" ccellspacing="0" cellpadding="5">
<thead align="center">
<caption><h3><?php echo $Lang['our_diller']; ?></h3></caption>
<colgroup width="40%"></colgroup>
<colgroup span="2"><col width="20%"><col width="10%"></colgroup>
<tr bgcolor="orange">
<th width="50"><?php echo $Lang['address']; ?></th>
<th width="70"><?php echo $Lang['phone_number']; ?></th>
</tr>
</thead>
<tbody align="center">
<tr bgcolor="#0093d3">
<td><?php echo $Lang['diller_address_1']; ?></td>
<td>+99875 220 03 03</td>
</tr>
</tbody>
</table>

</div></div>
    

      
  <div class="uk-cover-background" id="bottom-a">
  <div class="uk-container uk-container-center">
      <section class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
  
  <div class="uk-width-1-1">
  <div class="uk-panel headline-center-border uk-text-center" data-uk-scrollspy="{cls:'',delay:800}">
      <h3 class="uk-panel-title"><?php echo $Lang['newsboard']; ?></h3>
  <div class="sprocket-tables" data-tables="257">
  <div class="sprocket-tables-overlay">
  <div class="css-loader-wrapper">
  <div class="css-loader"></div></div></div>

      <ul class="sprocket-tables-container cols-3" data-tables-items>
  <div class="sprocket-tables-block" data-tables-item>
  <div class="sprocket-tables-item" data-tables-content>
      <img src="images/app.jpg" class="sprocket-tables-image" alt="image" />
  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
      <h4 class="sprocket-tables-title" data-tables-toggler>
      <a href="#"><?php echo $Lang['elpay_mobile_app']; ?></a></h4>
      <span class="sprocket-tables-text"><?php echo $Lang['o_s']; ?></span>
      </div>
      <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2"><?php echo $Lang['absolyute_free']; ?></span>
      <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1"><?php echo $Lang['fast_a_con']; ?></span>
              
  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
      <a  class="uk-margin-large-top uk-button uk-button-secondary" href="#my-id4" data-uk-modal="{center:true}"><?php echo $Lang['r_m_...']; ?></a>
      <div id="my-id4" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <h3><?php echo $Lang['elpay_mobile_sorry']; ?></h3>
       <p> <mark><?php echo $Lang['sorry']; ?></mark></p>
    </div>
</div>
    </div></div></div>

  <div class="sprocket-tables-block" data-tables-item>
  <div class="sprocket-tables-item" data-tables-content>
      <img src="images/virus.jpg" class="sprocket-tables-image" alt="image" />
  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
      <h4 class="sprocket-tables-title" data-tables-toggler>
      <a href="#">  <?php echo $Lang['top_news_1']; ?>  </a></h4>
      <span class="sprocket-tables-text"> <?php echo $Lang['world_news']; ?></span></div>


      <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2"> <?php echo $Lang['danger_corona']; ?> </span>
      <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
      <?php echo $Lang['corona_record']; ?>     </span>
      
  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
      <a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-neww1" data-uk-modal="{center:true}"><?php echo $Lang['r_m']; ?></a>

<div id="my-neww1" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <?php echo $Lang['news_1']; ?>
    </div></div>
         </div></div></div>

  <div class="sprocket-tables-block" data-tables-item>
  <div class="sprocket-tables-item" data-tables-content>
      <img src="images/demo-003.jpg" class="sprocket-tables-image" alt="image" />
  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
      <h4 class="sprocket-tables-title" data-tables-toggler>
      <a href="#"><?php echo $Lang['news_comment_name']; ?>  </a></h4>
      <span class="sprocket-tables-text"> <?php echo $Lang['news_name']; ?> </span></div>
      
      <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2"> <?php echo $Lang['news_key']; ?> </span>
      <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
        <?php echo $Lang['news_comment_begin']; ?>      </span>
  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
      <a class="uk-margin-large-top uk-button uk-button-secondary" href="#my-new3" data-uk-modal="{center:true}"><?php echo $Lang['r_m']; ?></a>

<div id="my-new3" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <?php echo $Lang['news_2']; ?>
       <p><img src="images/demo-003.jpg" width="100px" height="100px"></p></p>
      </div></div></div></ul>

  <div class="sprocket-tables-nav">
  <div class="sprocket-tables-pagination-hidden">
      <li class="active" data-tables-page="1"><span>1</span></li>
      </div></div></div></div></div></section></div></div>
              
  <div class="uk-cover-background" id="bottom-f">
  <div class="uk-container uk-container-center">
      <section class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
  <div class="uk-width-1-1 uk-width-medium-1-3">
  <div class="uk-panel" data-uk-scrollspy="{cls:'',delay:800}">
      <h3 class="uk-panel-title"><?php echo $Lang['footer_about_us']; ?></h3>
      <hr class="dark" />
      <p>
      <i class="uk-icon-home"></i><?php echo $Lang['footer_comp_name']; ?><br>
      <i class="uk-icon-road"></i><?php echo $Lang['footer_about_gps']; ?></br>
      <i class="uk-icon-phone"></i> +99875 220-03-03<br>
      <i class="uk-icon-envelope-o"></i> elpaygroup@gmail.com<br>
      <p></div></div>

  <div class="uk-width-1-1 uk-width-medium-1-3">
  <div class="uk-panel" data-uk-scrollspy="{cls:'',delay:800}">
      <h3 class="uk-panel-title"><?php echo $Lang['top_news']; ?></h3>
      <h5><?php echo $Lang['top_news_1']; ?><a class="uk-margin-large-top uk-button-secondary" href="#my-neww1" data-uk-modal="{center:true}"><?php echo $Lang['r_m_...']; ?></a></p>
      <hr class="dark"/>
      <h5><?php echo $Lang['top_news_title']; ?></h5>
      <p><?php echo $Lang['top_news_2']; ?><a class="uk-margin-large-top uk-button-secondary" href="#my-new3" data-uk-modal="{center:true}"><?php echo $Lang['r_m_...']; ?></a></p>
      <hr class="dark"/>
</div></div>


  <div class="uk-width-1-1 uk-width-medium-1-3">
  <div class="uk-panel" data-uk-scrollspy="{cls:'',delay:800}">
      <h3 class="uk-panel-title"><?php echo $Lang['con_service']; ?></h3>
      <p><?php echo $Lang['con_ser_name']; ?> </p>

  <div class="uk-grid uk-margin-top">
    <div class="uk-width-1-2"><a href="images/app.jpg" data-uk-lightbox="{group:'my-group'}"><img src="images/app.jpg" alt="" /></a></div>
    <div class="uk-width-1-2"><a href="images/app1.jpg" data-uk-lightbox="{group:'my-group'}"><img src="images/app1.jpg" alt="" / width="100px" height="100px"></a></div>
</div></div></div></div></section></div></div>
      
      <!-- Footer -->
  <div class="footer-outer uk-clearfix">
  <div class="uk-container uk-container-center">
      <section class="tm-footer uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
  <div class="uk-width-1-1">
  <div class="uk-panel" >
    <ul class="uk-subnav uk-subnav-line">
      <li><a href="index.php" class="scroll"><?php echo $Lang['home']; ?></a></li>
      <li><a href="#"><?php echo $Lang['services']; ?></a></li>
      <li><a href="#"><?php echo $Lang['news'] ; ?></a></li></ul></div><div class="uk-panel" ><div class="footer1">Copyright &#169; 2020 "ElPay" MCHJ</div>
               </div>
  <div class="uk-panel" >
  <div class="uk-margin-top uk-margin-bottom">
      <a href="index.php" class="uk-icon-button uk-icon-facebook"></a> 
      <!-- <a href="index.php" class="uk-icon-button uk-icon-twitter"></a>  -->
      <a href="https://elpaygroup@gmail.com" class="uk-icon-button uk-icon-google-plus"></a>
</div></div></div>
</section></div></div></div>
    
    
    
  <div id="offcanvas" class="uk-offcanvas">
  <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
    <ul class="uk-nav uk-nav-parent-icon uk-nav-offcanvas" data-uk-nav="{}">
      <li class="uk-parent"><a href="index.php"><i class="uk-icon-home"></i> <?php echo $Lang['home']; ?></a></li>
      <li class="uk-parent"><a href="#"><?php echo $Lang['services']; ?></a>
    <ul class="uk-nav-sub"><li><a href=""><?php echo $Lang['ser_name_1']; ?></a></li>
      <li><a href=" "><?php echo $Lang['ser_name_2']; ?></a></li>
      <li><a href=" "><?php echo $Lang['ser_name_3']; ?></a></li>
      <li><a href=" "><?php echo $Lang['ser_name_4']; ?></a></li>
      <li><a href=" "><?php echo $Lang['ser_name_5']; ?></a></li>
      <li><a href=" "><?php echo $Lang['ser_name_6']; ?></a></li></ul></li>

<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if( !( isset($_SESSION['user_name'])&&isset($_SESSION['user_surname']) ) ) {
  echo "<li class=\"uk-parent\"><a href=\"#\">".$Lang['my_cabinet']."</a>
    <ul class=\"uk-nav-sub\">
      <li><a href=\"register.php\">".$Lang['reg']."</a></li>
      <li><a href=\"login.php\">".$Lang['log']."</a></li></ul>";
}
else { } 
?>

      <li class="uk-parent"><a href="#"><?php echo $Lang['news'] ; ?></a>
    <ul class="uk-nav-sub"><li><a href="our_news.php"><?php echo $Lang['o_n']; ?></a></li>
      <li><a href="it_news.php"><?php echo $Lang['t_n']; ?></a></li>
      </ul>
      <li class="uk-active"><a href="#"><?php echo $Lang['help']; ?></a>
    <ul class="uk-nav-sub">
      <li class="uk-parent"><a href="about.php"><?php echo $Lang['aboute_us']; ?></a></li>
      <li><a href="#partners" data-uk-modal="{center:true}"><?php echo $Lang['o_partner']; ?></a></li>
      <li><a href="contacts.php"><?php echo $Lang['contact']; ?></a></li>
      <li><a href="instruments.php"><?php echo $Lang['software']; ?></a></li>
    </ul></li></ul></div></div>
            
  <a href="#" class="uk-button top-scroller" data-uk-smooth-scroll="{offset: 80}"><i class="uk-icon-angle-up"></i></a>
     
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top-70}, 900);
        });
      });
    </script>

    </body>
    </html>