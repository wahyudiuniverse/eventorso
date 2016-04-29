<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");
if(isset($_SESSION['eventorso_iduser'])){
$id_user=$_SESSION['eventorso_iduser'];
}
?>
<html ng-app="eventorso">
	<head>

    <title>Event Vendor Directory | Eventorso</title>
		<meta charset="UTF-8">
		<meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
		<meta name="description" content="" />
		<link href="../web/css/application.css" version="desktop" method="normal" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../web/images/favicon.png" type="image/x-icon" />
  
  </head>
	
  <body>
    <header id="header2" class="l-header2 pos-fixed new" style="height:70px;">
    <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo left-none" href="" title="Event Vendor Directory"></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT VENDORS</h5></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT SERVICE</h5></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>GUIDE EVENT</h5></a>
        </nav>
        <nav style="margin-top: 15px;" id="sub-menu-not-login" class="right f-brandon f-td-n">

          <?php
            if(isset($_SESSION['eventorso_session'])){
              if($_SESSION['eventorso_level']=="0"){
?>
<ul id="sub-menu" class="right ng-scope">
  <li class="pic">
    <img src="web/images/pic.jpg">
  </li>
  <li class="dropdown">
    <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href=""><span class="ng-binding"><?php echo $_SESSION['eventorso_fullname'];?></span> <b class="bs-icon-down"></b></a>
    <ul class="dropdown-menu2" role="menu" aria-labelledby="profile">
      <div ng-if="menuCtrl.isVendor()" class="ng-scope">
        <li><a rel="nofollow" href="dashboard/" target="_self"><span class="bs-icon-menu-dashboard"></span>My Dashboard</a></li>
        </div>
      <li class="divider"></li>
            <li><a rel="nofollow" ng-click="menuCtrl.naviLogout()" href="logout.php" target="_self"><span class="bs-icon-menu-logout2"></span>Logout</a></li>
          </ul>
  </li>
</ul>
<?php
              }else{

              ?>

<ul id="sub-menu" class="right ng-scope" ng-if="(menuCtrl.isLogged() menuCtrl.isVerified())">
  <li class="pic">
    <img src="web/images/pic.jpg">
  </li>
  <li class="dropdown">
    <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="">
      <span class="ng-binding"><?php echo $_SESSION['eventorso_business_name'];?></span>
      <b class="bs-icon-down"></b>
    </a>

    <ul class="dropdown-menu2" role="menu" aria-labelledby="profile">
      <div ng-if="menuCtrl.isVendor()" class="ng-scope">
        <li><a rel="nofollow" href="dashboard/" target="_self"><span class="bs-icon-menu-dashboard"></span>My Dashboard</a></li>
        <li><a target="_blank" href=""><span class="bs-icon-menu-profile"></span>View My Explore</a></li>
        <li><a rel="nofollow" href="dashboard/add_brosur.php" target="_self"><span class="bs-icon-menu-upload-project"></span>Upload New Brosur</a></li>
      </div>
      <li class="divider"></li>
            <li><a href="logout.php" target="_self"><span class="bs-icon-menu-logout2"></span>Logout</a></li>
    </ul>
  </li>
</ul>
            <?php

              }
            }else{
              ?>
            <a href="register/vendor/" class="register b-vendor brandon bold">Become a vendor</a>
            <a href="login/" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
    </div>
    </header>				  
	
  <!-- SECOND HEADER -->


    <header id="subheader2" class="l-header2 pos-fixed new" style="height:90px;">
    <div style="padding: 30px;width: 890px;" class="box no-sidepadding thin wrapper">
    <h5 style="color:#fff;" class="f-s-13 w-170 left sub f-w-700">Search Vendors</h5>


    <div class="box-select search w-150 left">
        <select id="budget" class="select-service divider" name="budget" ng-model="vendorSearch.budgetId">
          <option value="">Genre Event</option>
                      <option value="49">Meeting</option>
                      <option value="49">Music Event</option>
                      <option value="49">Training & Workshop</option>
                      <option value="50">Traditional & Ceremony</option>
                      <option value="48">Wedding</option>
                  </select>
    </div>

    <div class="box-select search w-220 left">
        <select id="service" class="select-service divider" name="category">
          <option value="">All Categories</option>
                      <option value="206">Boutonnieres & Corsages</option>
                      <option value="58">Bridal</option>
                      <option value="9">Catering</option>
                      <option value="210">Dance & Choreography</option>
                      <option value="7">Decoration & Lighting</option>
                      <option value="10">Dress & Attire</option>
                      <option value="69">Entertainment (DJ)</option>
                      <option value="161">Entertainment (MC)</option>
                      <option value="8">Entertainment (Music)</option>
                      <option value="57">Event Rentals</option>
                      <option value="12">Favors & Gifts</option>
                      <option value="52">Flowers</option>
                      <option value="61">Hair & Makeup</option>
                      <option value="169">Health & Beauty</option>
                      <option value="204">Honeymoon</option>
                      <option value="5">Invitations</option>
                      <option value="54">Jewelry</option>
                      <option value="55">Men's Formal Wear</option>
                      <option value="207">Officiants</option>
                      <option value="165">Others (Unique Services)</option>
                      <option value="209">Photo booth</option>
                      <option value="2">Photography</option>
                      <option value="211">Sweet Corner</option>
                      <option value="6">Venue</option>
                      <option value="3">Videography</option>
                      <option value="205">Wedding Accessories</option>
                      <option value="11">Wedding Cake</option>
                      <option value="56">Wedding Planning</option>
                      <option value="208">Wedding Shoes</option>
                  </select>
    </div>

    
    <div class="box-select search w-165 left">
      <ng-switch on="cityLoad">
        <select id="city" class="select-service divider" name="city" ng-model="vendorSearch.cityId" ng-switch-when="false">
          <option value="">All Cities</option>
                  </select>
        <select id="city" ng-model="vendorSearch.cityId" name="city" ng-switch-when="true" ng-options="city.id as city.name for city in cities" ng-change="vendorSearch.setCityId(vendorSearch.cityId)">
          <option value="">All Cities</option>
        </select>
      </ng-switch>
    </div>

    <button class="btn btn-stronk with-border right w-93 btn-no-sidepadding btn-loader" ng-class="{'is-loading-ajax' : isSearching}" ng-click="vendorSearch.search(vendorSearch.cityId)">SEARCH</button>
  </div>
    </header>   


<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <div class="vendor-grid mt-20 box no-padding" style="padding:2px;">

    </div>
  </div>
</div>
   
<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <!-- <h5 class="center mb-20">Popular Categories</h5> -->
    <H5 style="margin-top: 20px;">Search - Jakarta - Vendor</H5>
  </div>
</div>

<br>

<div class="box wrapper no-padding mt-30 mb-20">
<!-- START GRID -->
<div style="margin-right:-16px;" class="vendor-grid mt-20 box no-padding" ng-init='vendorList.setResetFilter([])'>
  

<?php
$databrosur=array("");
$query_brosur="SELECT a.id,a.api,a.business_name,b.service_name, c.city_name, a.photo_profile, a.level
FROM troopers a, tb_category_service b, tb_cities c
WHERE a.id_service=b.id
AND a.id_city=c.id
AND a.level <> 0 LIMIT 0,12";
$res=$db->fetch_multiple_rows($databrosur,$query_brosur);

while ($key=$res->fetch()) {


                  if($key->photo_profile==null || $key->photo_profile==''){
                    $photo_profile = "default.png";
                  } else {
                    $photo_profile = $key->photo_profile;
                  }

?>

<!-- BLOCK GRID -->
        <div style="margin-right:15px;" class="box-item">
            <div class="pic">
                <a href="" class="ng-isolate-scope">
                  <img style="height:200px;" class="cover-img" title="Eventorso Title" src="../dashboard/image_upload/<?php echo $photo_profile;?>"></a>
            </div>

            <div class="info">
              <h2 class="mt-10">
                <center>
                  <a class="box-item-title" target="_self" title="Eventorso Title" href="#"><h4><?php echo $key->business_name;?></h4></a>
                  <a class="box-item-title" href="#" target="_self"><h5><?php echo $key->service_name;?> - <?php echo $key->city_name;?></h5></a>
              </center>

                <center>
                  <h6>View (420)</h6>
                </center>
              </h2>
            </div>
                
            <div class="extra block">
              <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-silk')"><i class="icon-price"></i>View Explore</a>
            </div>
        </div>
<?php 
}
?>
<!-- END BLOCK GRID -->



</div>
</div>
  
<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <h5 class="center mb-20">Popular Categories</h5>
    <!-- <ul>
      <li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/jakarta/catering">Wedding Catering Jakarta</a></li>
			<li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/bali/catering">Wedding Catering Bali</a></li>
			<li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/bandung/catering">Wedding Catering Bandung</a></li>
			<li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/surabaya/catering">Wedding Catering Surabaya</a></li>
    </ul> -->
  </div>
</div>
  
<!-- <div class="widget-box">
  <span class="bs-submit-sticky"><a class="icon-dot-widget"></a></span>
	<span class="bs-helpcenter"><a class="icon-help"></a></span>
</div> -->

<div class="help-box"><p>Need help with something?<br>Check our Help Center.</p>
	<a href="http://support.bridestory.com/" target="_blank" class="btn btn-stronk btn-small btn-shorter with-border thin-padding w-150">visit help center</a>
</div>

<div class="submit-box">
  <ul>
		<li><a href="http://www.bridestory.com/contact-us" target="_self"><span class="icon-msg-widget"></span><p class="sbt-widget mt-15">Contact Us</p></a></li>
		<li><a rel="nofollow" href="http://careers.bridestory.com/" target="_self"><span class="icon-join-widget"></span><p class="sbt-widget mt-13">Join Bridestory Team</p></a></li>
		<li><a href="http://www.bridestory.com/real-weddings" target="_self"><span class="icon-submit-widget"></span><p class="sbt-widget mt-10">Submit A Wedding <br> to blog</p></a></li>
	</ul>
</div>	

<footer class="footer">
    <div class="box wrapper no-padding">
        <div class="center footer-center pt2-10">
            <ul>
                <li><a href="http://www.bridestory.com/about-us" target="_self">About</a></li>
                <!-- <li class="ml-10"><a href="http://careers.bridestory.com/" target="_self" rel="nofollow">Careers</a></li> -->
                <li class="ml-10"><a href="http://www.bridestory.com/contact-us" target="_self">Contact</a></li>
                <li class="ml-10"><span>|</span></li>
                <!-- <li class="ml-10"><a href="http://www.bridestory.com/blog" target="_self">Blog</a></li> -->
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="http://www.bridestory.com/app" target="_self">Eventorso App</a></li>
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="http://www.bridestory.com/bridestory-pro" target="_self">Eventorso pro</a></li>
                <!-- <li class="ml-10"><a href="http://www.bridestory.com/business-blog" target="_self">Business Blog</a></li> -->
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="http://support.bridestory.com" target="_self">Help Center</a></li>
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10 relative w-80">
                    <div style="position: absolute; left: -15px; display: block; width: 100px; top: -14px;">
                        <a class="facebook-footer" href="http://www.facebook.com/#" target="_blank" rel="nofollow"></a>
                        <a class="twitter-footer" href="http://twitter.com/#" target="_blank" rel="nofollow"></a>
                        <a class="instagram-footer" href="http://instagram.com/bananahuis" target="_blank" rel="nofollow"></a>
                        <a class="pinterest-footer" href="http://pinterest.com/#" target="_blank" rel="nofollow"> </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <ul class="center copy">
            <li><a href="http://www.bridestory.com/privacy-policy" target="_self" rel="nofollow">Privacy Policy</a></li>
            <li><a href="http://www.bridestory.com/terms-conditions" target="_self" rel="nofollow">Terms &amp; conditions</a></li>
            <li><a href="http://www.bridestory.com/sitemap" target="_self">Sitemap</a></li>
            <li>copyright &copy; 2016 Banana Creative Huis. all rights reserved</li>
        </ul>
    </div>
</footer>
</body>
</html>