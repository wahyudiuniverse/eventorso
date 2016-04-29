<!DOCTYPE HTML>
<?php
session_start();
require_once ("config/config.php");
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
		<link href="web/css/application.css" version="desktop" method="normal" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="web/images/favicon.png" type="image/x-icon" />
    <script src="web/js/jquery.min.js"></script>
  <script type="text/javascript">
  $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(4000)
    .next()
    .fadeIn(4000)
    .end()
    .appendTo('#slideshow');
},  4000);
</script>

<style type="text/css">
#slideshow { 
    margin-top: 0px;
    /*margin-bottom: 440px!important;*/
    width: 100%;
    height: auto;
    position: relative;

    /*position: relative; */
    /*height: 100%; */
    /*margin-right:4px;*/
    /*width: 100%;*/
    /*padding: 10px; */
    /*box-shadow: 0 0 20px rgba(0,0,0,0.4); */
}

#slideshow > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}
</style>
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
            <a href="" class="register b-vendor brandon bold">Become a vendor</a>
            <a href="" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
    </div>
    </header>				  
	
<div class="bs_footer_categories pt-30" style="padding-top:19px;">
  <div class="of-auto">
    <!-- <ul> -->
    <div style="background-image: url(web/images/img_event.png);
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #ccc;
  width: 100%;
  height:400px;">

</div>
    <!-- </ul> -->
  </div>


<div style="margin-top: -250px;margin-bottom: 150px;" class="l-header2 new" ng-controller="vendorSearchController as vendorSearch">
 <div style="background-image: url(web/images/bg_red_opacity.png);width: 900px;" class="box no-padding wrapper" id="introstep1">
  <div class="introstepoverlay" style="display:none"></div>
      <div ng-init="vendorSearch.init(9, '', '', 100);" >
    </div>
  
  <div style="padding: 30px;width: 890px;" class="box no-sidepadding thin wrapper">
    <h5 style="color:#fff;margin-top: 15px;" class="f-s-13 w-170 left sub f-w-700">Search Vendors</h5>


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
 </div>
</div>  
</div>




<div class="box no-padding">
    
        <div style="widht:100%;" class="box-item">
            <div style="min-height:200px" class="pic">

      <div id="slideshow">
        <div><img src="web/images/ads1.jpg"></div>
        <div><img src="web/images/ads2.jpg"></div>
        <div><img src="web/images/ads3.jpg"></div> 
        <div><img src="web/images/ads4.jpg"></div> 
      </div>
            </div>
               
        </div>

</div>
<!-- end slide -->

<div class="box wrapper no-padding mt-30 mb-20">
<!-- START GRID -->
<div style="margin-right:-16px;" class="vendor-grid mt-20 box no-padding" ng-init='vendorList.setResetFilter([])'>
    
    <div style="margin: 0px 32px 20px 0px; height: auto; overflow: hidden;">
        <div style="width: 180px; float: right;">
            <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-silk')"><i class="icon-price"></i>View All Vendor</a>
        </div>
        <div style="float: none; width: auto; overflow: hidden;">
            <h4>Popular Vendors</h4>
        </div>
    </div>


<?php
$databrosur=array("");
$query_brosur="SELECT a.id,a.api,a.business_name,b.service_name, c.city_name, a.photo_profile, a.level
FROM troopers a, tb_category_service b, tb_cities c
WHERE a.id_service=b.id
AND a.id_city=c.id
AND a.level <> 0 LIMIT 0,9";
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
                  <img style="height:200px;" class="cover-img" title="Eventorso Title" src="dashboard/image_upload/<?php echo $photo_profile;?>"></a>
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
<!-- END GRID -->
<br>

    <div style="margin: 10px 16px 20px 0px; height: auto; overflow: hidden;">
        <div style="width: 180px; float: right;">
            <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-silk')"><i class="icon-price"></i>View All Service</a>
        </div>
        <div style="float: none; width: auto; overflow: hidden;">
            <h4>Popular Service</h4>
        </div>
    </div>


<?php
$databrosur=array("");
$query_brosur="SELECT a.id,a.id_user,a.token,b.business_name,a.brosur_name,a.fix_price,c.service_name,d.city_name
FROM tb_brosur a,troopers b, tb_category_service c,tb_cities d
WHERE a.id_user=b.id
AND b.id_service=c.id
AND b.id_city=d.id LIMIT 0,9";
$res=$db->fetch_multiple_rows($databrosur,$query_brosur);

while ($key=$res->fetch()) {

    $token=$key->token;
    $dataimage=array("");
    $query_image="SELECT *
    FROM tb_brosur_image
    WHERE token='$token' ORDER BY id DESC LIMIT 1";
    $res2=$db->fetch_multiple_rows($dataimage,$query_image);

    while ($key2=$res2->fetch()) {
      $url_image=$key2->name_image;

      if($key2->name_image==null || $key2->name_image==''){
      $url_image = "default.png";
      } else {
      $url_image = $key2->name_image;
      }
    }

?>

        <div style="margin-right:15px;" class="box-item">
            <div class="pic">
                <a href="" class="ng-isolate-scope">
                  <img style="height:210px;" class="cover-img" title="Eventorso Title" src="dashboard/image_upload/<?php echo $url_image;?>"></a>
            </div>

            <div class="info">
              <h2 class="mt-10">
                <center>
                  <a class="box-item-title" target="_self" title="Eventorso Title" href="#"><h4><?php echo $key->brosur_name;?></h4></a>
                  <a class="box-item-title" href="#" target="_self"><h5><b><?php echo $key->business_name;?></b></h5></a>
                  <a class="box-item-title" href="#" target="_self"><?php echo $key->service_name;?> - <?php echo $key->city_name;?></a>
              </center>

              </h2>
            </div>
                
            <div class="extra block">
                <div>
                    <span class="ng-binding"><a href="#" target="_self"><h6>Price : Rp. <?php echo $key->fix_price;?></h6></a>
                </div>
                
                <div>
                    <span class="ng-binding"><a href="#" target="_self"><h6>View Brosur</h6></a>
                </div>
            </div>
        </div>

<?php 
}
?>

<!-- END BLOCK GRID -->

</div>
  
<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <h5 class="center mb-20">Popular Categories</h5>
    <!-- <ul>
      <li><a target="_self" class="f-classic" href="#">Wedding Catering Jakarta</a></li>
			<li><a target="_self" class="f-classic" href="#">Wedding Catering Bali</a></li>
			<li><a target="_self" class="f-classic" href="#">Wedding Catering Bandung</a></li>
			<li><a target="_self" class="f-classic" href="#">Wedding Catering Surabaya</a></li>
    </ul> -->
  </div>
</div>
  

<div class="help-box"><p>Need help with something?<br>Check our Help Center.</p>
	<a href="#" target="_blank" class="btn btn-stronk btn-small btn-shorter with-border thin-padding w-150">visit help center</a>
</div>

<div class="submit-box">
  <ul>
		<li><a href="#" target="_self"><span class="icon-msg-widget"></span><p class="sbt-widget mt-15">Contact Us</p></a></li>
		<li><a rel="nofollow" href="#" target="_self"><span class="icon-join-widget"></span><p class="sbt-widget mt-13">Join Eventorso Team</p></a></li>
		<li><a href="#" target="_self"><span class="icon-submit-widget"></span><p class="sbt-widget mt-10">Submit A Wedding <br> to blog</p></a></li>
	</ul>
</div>	

<footer class="footer">
    <div class="box wrapper no-padding">
        <div class="center footer-center pt2-10">
            <ul>
                <li><a href="#" target="_self">About</a></li>
                <!-- <li class="ml-10"><a href="#" target="_self" rel="nofollow">Careers</a></li> -->
                <li class="ml-10"><a href="#" target="_self">Contact</a></li>
                <li class="ml-10"><span>|</span></li>
                <!-- <li class="ml-10"><a href="#" target="_self">Blog</a></li> -->
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="#" target="_self">Eventorso App</a></li>
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="#" target="_self">Eventorso pro</a></li>
                <!-- <li class="ml-10"><a href="#" target="_self">Business Blog</a></li> -->
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="#" target="_self">Help Center</a></li>
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
            <li><a href="#" target="_self" rel="nofollow">Privacy Policy</a></li>
            <li><a href="#" target="_self" rel="nofollow">Terms &amp; conditions</a></li>
            <li><a href="#" target="_self">Sitemap</a></li>
            <li>copyright &copy; 2016 Banana Creative Huis. all rights reserved</li>
        </ul>
    </div>
</footer>
</body>
</html>