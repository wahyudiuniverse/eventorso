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

      <!-- slide -->
  <link rel="stylesheet" href="web/css/responsiveslides.css">
  <link rel="stylesheet" href="web/css/demo.css">
  <!-- DROPDOWN -->
  <!-- <link rel="stylesheet" src="web/css/bootstrap.min.css.css"> -->


  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  // <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="web/js/responsiveslides.min.js"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/prototype/1.7.1/prototype.js'></script>
  <!-- // <script src="web/js/index.js"></script> -->
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        // maxwidth: 00,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  

  </head>
	
  <body>
    
    <header id="header2" class="l-header2 pos-fixed new" style="height:70px;">
      <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo left-none" href="" title="Event Vendor Directory"></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT VENDORS</h5></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>GUIDE EVENT</h5></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>BLOG</h5></a>
        </nav>
        <nav style="margin-top: 15px;" id="sub-menu-not-login" class="right f-brandon f-td-n">

          <?php
            if(isset($_SESSION['eventorso_session'])){
              if($_SESSION['eventorso_level']=="0"){
          ?>

          <ul id="sub-menu" class="right ng-scope">
            <li class="pic"><img src="web/images/pic.jpg"></li>
            <li class="dropdown">
              <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="">
                <span class="ng-binding"><?php echo $_SESSION['eventorso_fullname'];?></span>
                <b class="bs-icon-down"></b>
              </a>

              <ul class="dropdown-menu2" role="menu" aria-labelledby="profile">
                <div ng-if="menuCtrl.isVendor()" class="ng-scope">
                  <li><a rel="nofollow" href="dashboard/" target="_self">
                    <span class="bs-icon-menu-dashboard"></span>My Dashboard</a>
                  </li>
                </div>
                <li class="divider"></li>
                <li><a rel="nofollow" ng-click="menuCtrl.naviLogout()" href="logout.php" target="_self">
                  <span class="bs-icon-menu-logout2"></span>Logout</a>
                </li>
              </ul>
            </li>
          </ul>
      
          <?php
            }else{
          ?>

          <ul id="sub-menu" class="right ng-scope" ng-if="(menuCtrl.isLogged() menuCtrl.isVerified())">
            <li class="pic"><img src="web/images/pic.jpg"></li>
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
            
            <a href="register/vendor" class="register b-vendor brandon bold">Join vendor</a>
            <a href="login/" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
      </div>
    </header>
	
  <div class="bs_footer_categories">
    <div class="of-auto">
    <!-- <ul> -->
    <div style="background-image: url(web/images/header.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-color: #ccc;
    width: 100%;
    height:470px;">
  </div>
</div>

 
</div>
<!-- SLIDE ADSENSE -->

<div class="l-header2 new" ng-controller="vendorSearchController as vendorSearch">
 <div style="background-image: url(web/images/.png);width: 100%;" class="box no-padding wrapper" id="introstep1">
  <div class="introstepoverlay" style="display:none"></div>
      <div ng-init="vendorSearch.init(9, '', '', 100);" >
    </div>
   

   
<!-- SEARCH -->

 
<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <!-- <h5 class="center mb-20">Popular Categories</h5> -->

    <h5 class="center mb-20">
    <div class="box-select search">
        <select id="budget" class="select-service divider" name="budget" ng-model="vendorSearch.budgetId">
          <option value="">Genre Event</option>
                      <option value="49">Meeting</option>
                      <option value="49">Music Event</option>
                      <option value="49">Training & Workshop</option>
                      <option value="50">Traditional & Ceremony</option>
                      <option value="48">Wedding</option>
                  </select>
    </div>

    <div class="box-select search">
        <select id="service" class="select-service divider" name="category">
          <option value="">All Categories</option>
            <optgroup label="Boutonnieres & Corsages">
              <option value="206">Sub 1</option>
              <option value="206">Sub 2</option>
              <option value="206">Sub 3</option>
            </optgroup>
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

    <div class="box-select search w-165">
      <!-- <ng-switch on="cityLoad"> -->
        <select id="city" class="select-service divider" name="city">
          <option value="">All Cities</option>
        </select>
      <!-- </ng-switch> -->
    </div>


    <div class="box-selectbot search w-93">
      <!-- <ng-switch on="cityLoad"> -->

    <button class="btn btn-stronker w-93 btn-no-sidepadding">SEARCH</button>
      <!-- </ng-switch> -->
    </div>

    
    
  </h5>
    
    <!-- <ul>
      <li><a target="_self" class="f-classic" href="#">Wedding Catering Jakarta</a></li>
      <li><a target="_self" class="f-classic" href="#">Wedding Catering Bali</a></li>
      <li><a target="_self" class="f-classic" href="#">Wedding Catering Bandung</a></li>
      <li><a target="_self" class="f-classic" href="#">Wedding Catering Surabaya</a></li>
    </ul> -->
  </div>
</div>


  <!-- 2 -->
 </div>

</div> 

<!-- <div class="bs_footer_categories pt-30 pb-30"> -->
  <!-- <div class="wrapper of-auto"> -->
    <!-- <div class="box no-padding"> -->
      <!-- <div class="project ng-scope" id="tabs-1" ng-controller="instagramController as instaCtrl"> -->
        <!-- <div class="project-detail box thick bg-white mb2-50"> -->
          <!-- <ul class="main-pic"> -->
            <!-- <li class="box-hover bs-inspiration"> -->
              <!-- <div id="wrapper"> -->

                <!-- Slideshow 4 -->
                <!-- <div class="callbacks_container"> -->
                  
                  <ul class="rslides" id="slider1">
                    <li><img src="web/images/ads1.jpg" alt=""></li>
                    <li><img src="web/images/ads2.jpg" alt=""></li>
                    <li><img src="web/images/ads3.jpg" alt=""></li>
                  </ul>

                <!-- </div> -->

              <!-- </div> -->
            <!-- </li> -->
          <!-- </ul> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- </div>                       -->
  <!-- </div> -->
<!-- </div> -->


<br>
<!-- SLIDE END ADS -->
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
<div style="margin-right:17px;" class="box-item">
<div id="sticky-and-not-sticky">
    <div class="vendor_profile bg-white">

      <div class="pic">
        <a href="explore/?view=<?php echo $key->id;?>"><img title="Pic Avatar" src="dashboard/image_upload/<?php echo $photo_profile;?>"></a>
      </div>

      
        
        <!-- <div class="loc mt-15"></div> -->
        <!-- <font style="font-size: 16px;">Patricia Wijaya</font> -->
        <div class="clear"></div>
        <!-- <div class="clear"></div> -->
        <div class="mt-5">
          <h4><?php echo $key->business_name;?></h4>
        </div>
        <div class="loc mt-5">
          <p><?php echo $key->service_name;?></p>
        </div>
        <div class="loc mt-5">
          <p><?php echo $key->city_name;?></p>
        </div>
        <div class="loc mt-5"></div>
        <a href="explore/?view=<?php echo $key->id;?>"><button class="btn btn-short btn-stronker">View Explore</button></a>

        <div class="clear"></div>
      </div>
    </div>
  </div>
<!-- BLOCK GRID -->

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
$res_brosur=$db->fetch_multiple_rows($databrosur,$query_brosur);

while ($key_brosur=$res_brosur->fetch()) {

    $token=$key_brosur->token;
    $dataimage=array("");
    $query_image="SELECT *
    FROM tb_brosur_image
    WHERE token='$token' ORDER BY id ASC LIMIT 1";
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


<div style="margin-right:17px;" class="box-item">
<div id="sticky-and-not-sticky">
    <div class="vendor_profile bg-white">

      <div class="pic">
        <a href="brosur/?view=<?php echo $key_brosur->id;?>"><img title="Pic Avatar" src="dashboard/image_upload/<?php echo $photo_profile;?>"></a>
      </div>

        <div class="clear"></div>
        <div class="mt-5">
          <h4><?php echo $key_brosur->brosur_name;?></h4>
        </div>
        <div class="loc mt-5">
          <p><?php echo $key_brosur->city_name;?></p>
        </div>
        <div class="loc mt-5">
          <p>Rp. <?php echo $key_brosur->fix_price;?>;</p>
        </div>
        <!-- <div class="loc mt-15"></div> -->
        <div class="clear"></div>
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
                <!-- <li><a href="" target="_self">About</a></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self" rel="nofollow">Careers</a></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self">Contact</a></li> -->
                <!-- <li class="ml-10"><span>|</span></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self">Blog</a></li> -->
                <!-- <li class="ml-10"><span>|</span></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self">Eventorso App</a></li> -->
                <!-- <li class="ml-10"><span>|</span></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self">Eventorso pro</a></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self">Business Blog</a></li> -->
                <!-- <li class="ml-10"><span>|</span></li> -->
                <!-- <li class="ml-10"><a href="#" target="_self">Help Center</a></li> -->
                <!-- <li class="ml-10"><span>|</span></li> -->
                <li class="ml-10 relative w-80">
                    <div style="position: absolute; left: -15px; display: block; width: 100px; top: -14px;">
                        <a class="facebook-footer" href="#" target="_blank" rel="nofollow"></a>
                        <a class="twitter-footer" href="#" target="_blank" rel="nofollow"></a>
                        <a class="instagram-footer" href="#" target="_blank" rel="nofollow"></a>
                        <a class="pinterest-footer" href="#" target="_blank" rel="nofollow"> </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <ul class="center copy">
            <li><a href="#" target="_self" rel="nofollow">Privacy Policy</a></li>
            <li><a href="#" target="_self" rel="nofollow">Terms &amp; conditions</a></li>
            <!-- <li><a href="#" target="_self">Sitemap</a></li> -->
            <li>copyright &copy; 2016 Banana Creative Huis. all rights reserved</li>
        </ul>
    </div>
</footer>

</body>
</html>