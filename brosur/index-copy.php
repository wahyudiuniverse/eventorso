<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");
$idview=$_GET['view'];

    $data=array("");
    $query="SELECT a.id,a.token,a.brosur_name,b.business_name,c.city_name,b.business_address,a.description
            FROM tb_brosur a, troopers b, tb_cities c
            WHERE a.id_user=b.id
            AND a.id_service=c.id
            AND a.id='$idview'";
    $res=$db->fetch_multiple_rows($data,$query);
    $count=$res->rowCount();


?>

<html ng-app="">
	<head>

		<title>Event Vendor Directory | Eventorso</title>
    <meta charset="UTF-8">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="description" content="" />
		<link href="../web/css/application.css" type="text/css" version="desktop" method="normal" rel="stylesheet">
    <link href="../web/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
	    
      <!-- slide -->
  <link rel="stylesheet" href="responsiveslides.css">
  <link rel="stylesheet" href="demo.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
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
		<br>


    <header id="header2" class="l-header2 pos-fixed new" style="height:70px;">
      <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo left-none" href="../" title="Event Vendor Directory"></a>
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
            <li class="pic"><img src="../web/images/pic.jpg"></li>
            <li class="dropdown">
              <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="../">
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
            <li class="pic"><img src="../web/images/pic.jpg"></li>
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
            
            <a href="../register/vendor" class="register b-vendor brandon bold">Join vendor</a>
            <a href="../login" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
      </div>
    </header> 


<?php
      while ($key=$res->fetch()) {
    

    $brosur_name=$key->brosur_name;
    $business_name=$key->business_name;
    $business_address=$key->business_address;
    $city_name=$key->city_name;
    $deskripsi=$key->description;

    $token=$key->token;
    $dataimage=array("");
    $queryimage="SELECT * FROM tb_brosur_image WHERE token='$token'";
    $resimage=$db->fetch_multiple_rows($dataimage,$queryimage);
      


?>

<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">

<!--  -->

<div class="box no-padding">
  <div class="project ng-scope" id="tabs-1" ng-controller="instagramController as instaCtrl">
    <div class="project-detail box thick bg-white mb2-50">





<h1 class="ng-binding"><b><?php echo $brosur_name;?></b></h1>
<h1 class="ng-binding" style="text-transform: capitalize;"><?php echo $business_name.' - '.$city_name;?></h1>
<h1 class="ng-binding" style="text-transform: capitalize;"><?php echo $business_address;?></h1>

        <ul class="main-pic">
            <li class="box-hover bs-inspiration">
                <!-- <img bs-inspiration-image="" src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12534248_1583900028526231_236404512_n.jpg?ig_cache_key=MTE2NTkwNTc3NzExMTQ3NDg2Mw%3D%3D.2"> -->
         

  <div id="wrapper">
    <!-- Slideshow 4 -->
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">

<?php 
while ($keyimage=$resimage->fetch()) {
        
        if($keyimage->name_image==null || $keyimage->name_image==''){
        $url_image = "default.png";
        } else {
        $url_image = $keyimage->name_image;
        }

?>

        <li>
          <img src="../dashboard/image_upload/<?php echo $url_image;?>" alt="">
          <!-- <p class="caption">This is a caption</p> -->
        </li>
<?php } ?>
        
      </ul>
    </div>

  </div>

<p class="mt-20"><?php echo $deskripsi;?></p>
            </li>
        </ul>

    </div>
  </div>
</div>                      </div>
        <!--  -->

  </div>
</div>


<?php
}
?>

<!--  -->

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