<!DOCTYPE HTML>
<?php
session_start();
require_once ("config/config.php");

?>
<html ng-app="eventorso">
	
  <head>
    <title>Event Vendors Market Place | Eventorso</title>
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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="web/js/responsiveslides.min.js"></script>
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
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>IDEA</h5></a>
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
                    <span><img src="web/images/favicon.png" height="20" width="20"></span>My Dashboard</a>
                  </li>
                </div>
                <li class="divider"></li>
                <li><a rel="nofollow" ng-click="menuCtrl.naviLogout()" href="logout.php" target="_self">
                  <span><img src="web/images/favicon.png" height="20" width="20"></span>Logout</a>
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
                  <li><a rel="nofollow" href="dashboard/" target="_self"><span><img src="web/images/favicon.png" height="20" width="20"></span>My Dashboard</a></li>
                  <li><a target="_blank" href=""><span><img src="web/images/favicon.png" height="20" width="20"></span>View My Explore</a></li>
                  <li><a rel="nofollow" href="dashboard/add_brosur.php" target="_self"><span><img src="web/images/favicon.png" height="20" width="20"></span>Upload New Brosur</a></li>
                </div>

                <li class="divider"></li>
                <li><a href="logout.php" target="_self"><span><img src="web/images/favicon.png" height="20" width="20"></span>Logout</a></li>
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
	
  <div class="box wrapper l-header2 new" style="padding:0px;">
    <div class="of-auto">
    <!-- <ul> -->
    <div style="background-image: url(web/images/header.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-color: #ccc;
    width: 100%;
    height:550px;">
  </div>
</div>

 
</div>
<!-- SLIDE ADSENSE -->

<div class="box wrapper l-header2 new" style="padding:0px;">
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
        <select id="genre" class="select-service divider" name="genre">

                                  <?php
                                  $data_genreevent=array("");
                                  $query_genreevnet="SELECT * FROM tb_category_event ORDER BY event_name";
                                  $res_genreevent=$db->fetch_multiple_rows($data_genreevent,$query_genreevnet);
                                  echo "<option value='0'>Select All Event</option>";
                                    while ($key_genreevent=$res_genreevent->fetch()) {
                                      ?>
                                      <option value="<?php echo $key_genreevent->id;?>"><?php echo $key_genreevent->event_name;?></option>
                                      <?php
                                    }
                                  ?>
        </select>
    </div>

    <div class="box-select search">
        <select id="service" class="select-service divider" name="category">
          
                                        <?php 
                                        $serv = $db->fetch_all("SELECT * FROM tb_category_service ORDER BY service_name");
                                        echo "<option value='0'>Select All Services</option>";
                                        foreach ($serv as $services) {
                                            $subs = $db->fetch_all("SELECT a.id,a.sub_name 
                                                                    FROM tb_category_service_sub a, tb_category_service b 
                                                                    WHERE a.id_category=b.id
                                                                    AND a.id_category='$services->id'");
                                            echo "<optgroup label='$services->service_name'>";
                                             foreach ($subs as $subservices) {
                                              echo "<option values='$subservices->id'>$subservices->sub_name</option>";
                                            }
                                                  
                                              echo "</optgroup>";
                                              }
                                        ?>
        </select>
    </div>

    <div class="box-select search w-165">
      <!-- <ng-switch on="cityLoad"> -->
        <select id="city" class="select-service divider" name="city">
          

                                  <?php
                                  $data_city=array("");
                                  $query_city="SELECT * FROM tb_cities ORDER BY city_name";
                                  $res_city=$db->fetch_multiple_rows($data_city,$query_city);
                                  echo "<option value='0'>Select All Cities</option>";
                                    while ($key_city=$res_city->fetch()) {
                                      ?>
                                      <option value="<?php echo $key_city->id;?>"><?php echo $key_city->city_name;?></option>
                                      <?php
                                    }
                                  ?>

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

 </div>
</div> 


<div class="box wrapper no-padding mt-30 mb-20">
<!-- START GRID -->
  <div class="vendor-grid mt-20 box no-padding wrapper">

<!-- HOT SERVICE -->


<div style="margin-right:16px;     width: 480px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot7.png" style="height: 232px;"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<div style="margin-right:16px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot1.png"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<div style="margin-right:16px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot2.png"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div style="margin-right:16px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot3.png"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div style="margin-right:16px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot4.png"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div style="margin-right:16px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot5.png"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div style="margin-right:16px;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div class="bg-white">
      <div class="pic">
        <a href=""><img title="Pic Avatar" src="web/images/hot6.png"></a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- HOT SERVICE END -->


  </div>
</div>

<!-- SLIDE -->
                  
<div class="box wrapper no-padding mt-10 mb-20">
<!-- START GRID -->
  <div style="padding-right: 25px;" class="vendor-grid mt-20 box no-padding wrapper">
                  <ul class="rslides" id="slider1">
                    <li><img src="web/images/ads1.jpg" alt=""></li>
                    <li><img src="web/images/ads2.jpg" alt=""></li>
                    <li><img src="web/images/ads3.jpg" alt=""></li>
                  </ul>

<!-- SLIDE END -->
</div>
</div>

<div class="box wrapper no-padding mt-30 mb-20">
<!-- START GRID -->
<div style="margin-right:-16px;" class="vendor-grid mt-20 box no-padding">
    
    <div style="margin: 0px 40px 20px 0px; height: auto; overflow: hidden;">
        <div style="width: 180px; float: right;">
            <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-silk')">View All Vendor</a>
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
AND a.level <> 0 LIMIT 0,12";
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
    <div class="vendor_profile bg-white" style="width:180px;">

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
</div>
  
<!-- <div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <h5 class="center mb-20">Popular Categories</h5>
  </div>
</div> -->
  

<footer class="box wrapper footer" style="padding:0px;">
    <div class="box wrapper no-padding">
        <div class="center footer-center pt2-10">


<div class="box wrapper no-padding mt-30 mb-20">

<div style="margin: 0 8px 0 8px;background-color: #5F5F5F;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div style="border: 0px solid #ECECEC;padding: 20px 0px;" class="vendor_profile">

        <div class="clear"></div>
        <div class="mt-5">
          <h4 style="color: white;">FOLLOW ME</h4>
        </div>
        <div class="loc mt-5">
          <!-- <p style="color: white;">About</p> -->
          <a href="https://www.facebook.com/eventorso" style="margin:2px;"><img src="web/images/facebook.png" style="height:50px;    background: #5F5F5F;    width: 50px;"></a>
          <a href="" style="margin:2px;"><img src="web/images/twitter.png" style="height:50px;    background: #5F5F5F;    width: 50px;"></a>
          <a href="" style="margin:2px;"><img src="web/images/instagram.png" style="height:50px;    background: #5F5F5F;    width: 50px;"></a>
          <a href="" style="margin:2px;"><img src="web/images/gplus.png" style="height:50px;    background: #5F5F5F;    width: 50px;"></a>
          
          </div>
        <div class="loc mt-5">
          <p style="color: white;">Connection Support</p>
        </div>

      </div>
    </div>
  </div>

<div style="margin: 0 8px 0 8px;background-color: #5F5F5F;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div style="border: 0px solid #ECECEC;" class="vendor_profile">

        <div class="clear"></div>
        <div class="mt-5">
          <h4 style="color: white;">INFORMATION</h4>
        </div>
        <div class="loc mt-5"><p style="color: white;">About</p></div>
        <div class="loc mt-5"><p style="color: white;">Kebijakan Privasi</p></div>
        <div class="loc mt-5"><p style="color: white;">Syarat dan Ketentuan</p></div>
        <div class="loc mt-5"><p style="color: white;">Help Center</p></div>

      </div>
    </div>
  </div>

<div style="margin: 0 8px 0 8px;background-color: #5F5F5F;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div style="border: 0px solid #ECECEC;" class="vendor_profile">

        <div class="clear"></div>
        <div class="mt-5">
          <h4 style="color: white;">VENDOR</h4>
        </div>
        <div class="loc mt-5"><p style="color: white;">Idea</p></div>
        <div class="loc mt-5"><p style="color: white;">Register</p></div>
        <div class="loc mt-5"><p style="color: white;">Level Vendor</p></div>
        <div class="loc mt-5"><p style="color: white;">Location Support</p></div>

      </div>
    </div>
  </div>

<div style="margin: 0 8px 0 8px;background-color: #5F5F5F;" class="box-item">
  <div id="sticky-and-not-sticky">
    <div style="border: 0px solid #ECECEC;" class="vendor_profile">

        <div class="clear"></div>
        <div class="mt-5">
          <h4 style="color: white;">EVENTORSO APPS</h4>
        </div>
        <div class="loc mt-5">
          <img src="web/images/ic_download_playstore.png" style="height:45px;    background: #5F5F5F;width: 170px;padding:1px;">
        </div>
        <div class="loc mt-5">
          <img src="web/images/ic_download_appsstore.png" style="height:45px;    background: #5F5F5F;width: 170px;padding:1px;">
        </div>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>

</footer>

</body>
</html>