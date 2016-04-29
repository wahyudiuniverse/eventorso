<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");
$idview=$_GET['view'];

$date_getvendor=array("");
$query_getvendor="SELECT id,id_user FROM tb_brosur WHERE id='$idview'";
$res_getvendor=$db->fetch_multiple_rows($date_getvendor,$query_getvendor);
while ($key_getvendor=$res_getvendor->fetch()) {
$iduserView = $key_getvendor->id_user;
}


$data_vendor=array("");
$query_vendor="SELECT a.id,a.api,a.business_name,c.service_name,a.business_address,b.city_name,a.mobile_phone,a.photo_profile
FROM troopers a, tb_cities b, tb_category_service c
WHERE a.id_city=b.id
AND a.id_service=c.id
AND a.id='$iduserView'";
$res_vendor=$db->fetch_multiple_rows($data_vendor,$query_vendor);


$data_brosur=array("");
$query_brosur="SELECT a.id,a.token,a.brosur_name,a.description,c.service_name,a.capacity,a.jumlah_kursi,a.durasi,a.overtime,d.city_name,a.fix_price,a.publish,a.publish_approve,a.date_insert
FROM tb_brosur a, troopers b, tb_category_service c, tb_cities d
WHERE a.id_user=b.id 
AND a.id_service=c.id
AND b.id_city=d.id
AND a.id = '$idview' ORDER BY a.id DESC";
$res_brosur=$db->fetch_multiple_rows($data_brosur,$query_brosur);


$data_brosur_equip=array("");
$query_brosur_equip="SELECT a.id,a.token,b.name_equip
FROM tb_brosur_service_equip a, tb_service_equip b
WHERE a.id_service_equip=b.id
AND a.token='wpe0w5EBq2nyoyw8oIjL'";
$res_brosur_equip=$db->fetch_multiple_rows($data_brosur_equip,$query_brosur_equip);

$data_brosur_other=array("");
$query_brosur_other="SELECT a.id,a.token,a.brosur_name,a.description,c.service_name,a.capacity,a.jumlah_kursi,a.durasi,a.overtime,d.city_name,a.fix_price,a.publish,a.publish_approve,a.date_insert
FROM tb_brosur a, troopers b, tb_category_service c, tb_cities d
WHERE a.id_user=b.id 
AND a.id_service=c.id
AND b.id_city=d.id
AND a.id_user = '$iduserView' ORDER BY a.id DESC LIMIT 0,3";
$res_brosur_other=$db->fetch_multiple_rows($data_brosur_other,$query_brosur_other);
?>

<html ng-app="">
	<head>

		<title>Event Vendor Market Place | Eventorso</title>
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
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>GUIDE EVENT</h5></a>
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>IDEA</h5></a>
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
                    <span><img src="../web/images/favicon.png" height="20" width="20"></span>My Dashboard</a>
                  </li>
                </div>
                <li class="divider"></li>
                <li><a rel="nofollow" ng-click="menuCtrl.naviLogout()" href="../logout.php" target="_self">
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
                  <li><a rel="nofollow" href="dashboard/" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>My Dashboard</a></li>
                  <li><a target="_blank" href=""><span><img src="../web/images/favicon.png" height="20" width="20"></span>View My Explore</a></li>
                  <li><a rel="nofollow" href="dashboard/add_brosur.php" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>Upload New Brosur</a></li>
                </div>

                <li class="divider"></li>
                <li><a href="logout.php" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>Logout</a></li>
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

<div class="box no-padding wrapper mt-30 mb-50 ng-scope">
     
<?php 
while ($key_vendor=$res_vendor->fetch()) {


      if($key_vendor->photo_profile==null || $key_vendor->photo_profile==''){
      $url_profile = "default.png";
      } else {
      $url_profile = $key_vendor->photo_profile;
      }

      $business_name=$key_vendor->business_name;
?>         
<aside class="box no-padding wrapper w-235 left sidebarSticky" style="position: fixed; top:93px; float: left; width: 235px;">
  <div id="sticky-and-not-sticky">
    <div class="vendor_profile bg-white" style="width:183px;">

      <div class="pic">
        <img itemprop="logo" class="" title="<?php echo $key_vendor->business_name;?>" src="../dashboard/image_upload/<?php echo $url_profile;?>">
      </div>

        <p><h3><?php echo $key_vendor->business_name;?></h3></p>
        <div class="clear"></div>

        <div class="loc mt-15">
            <span class="ico-bs-location">
              <a href="" target="_self"><p><?php echo $key_vendor->service_name;?></p></a>
            </span>
        </div>

        <div class="loc mt-15">
            <span class="ico-bs-location">
              <a href="" target="_self"><p><?php echo $key_vendor->business_address;?> - <?php echo $key_vendor->city_name;?></p></a>
            </span>
        </div>

        <div class="loc mt-15">
            <span class="ico-bs-location">
              <a href="" target="_self"><p><?php echo $key_vendor->mobile_phone;?></p></a>
            </span>
        </div>

        <div class="dot"></div>
        <div class="info">
            <span class="info-detail">Feedback</span><a id="View_Website" href=""></a>
        </div>

        <div class="dot"></div>
        <button class="btn btn-short btn-stronker"><i class="icon-msg"></i>Send Message</button>
        

      </div>
    </div>
  </aside>
<?php } ?>
<!-- MID -->




<section class="box no-padding wrapper w-745 right clear-after" style="    margin-top: -15px;">

  <div class="box no-padding with-border">
    <div class="project" id="tabs-1">
      <div class="project-detail bg-white" style="padding: 0px 30px 30px 30px;">

<?php

while ($key_brosur=$res_brosur->fetch()) {

    $token=$key_brosur->token;
    $dataimage=array("");
    $query_image="SELECT *
    FROM tb_brosur_image
    WHERE token='$token' ORDER BY id ASC";
    $res2=$db->fetch_multiple_rows($dataimage,$query_image);



?>
        <ul class="main-pic ng-scope">
          <li class="box-hover bs-inspiration">
            <ul class="rslides" id="slider4">

<?php
    while ($key2=$res2->fetch()) {
      // $url_image=$key2->name_image;

      if($key2->name_image==null || $key2->name_image==''){
      $url_image = "default.png";
      } else {
      $url_image = $key2->name_image;
      }
?>

              <li>
                <img bs-inspiration-image="" class="" title="<?php echo $key_brosur->brosur_name;?> by <?php echo $business_name;?>" src="../dashboard/image_upload/<?php echo $url_image;?>">
              </li>
<?php
    }
?>

            </ul>
          </li>
        </ul>


        
        <p><h2><?php echo $key_brosur->brosur_name;?></h2></p>
        <p><?php echo $key_brosur->description;?></p>
        <div class="other mt-10">
          <h3>Jenis Layanan:</h3>
          <ul>
            <li><?php echo $key_brosur->service_name;?></li>
          </ul>
        </div>

        <div class="other mt-10">
          <h3>Kapasitas:</h3>
          <ul>
            <li><?php echo $key_brosur->capacity;?>;</li>
          </ul>
        </div>

        <div class="other mt-10">
          <h3>Jumlah Kursi:</h3>
          <ul>
            <li><?php echo $key_brosur->jumlah_kursi;?>;</li>
          </ul>
        </div>

        <div class="other mt-10">
          <h3>Perlengkapan Lain:</h3>
          <ul>

<?php
    while ($key_brosur_equip=$res_brosur_equip->fetch()) {
?>

            <li><?php echo $key_brosur_equip->name_equip;?>, </li>
<?php
    }
?>
          </ul>
        </div>


        <div class="other mt-10">
          <h3>Keterangan Lain:</h3>
          <ul><li><?php echo $key_brosur->durasi;?></li></ul>
          <ul><li><?php echo $key_brosur->overtime;?></li></ul>
        </div>

<!-- <div class="other mt-10"> -->
        <!-- </div> -->


        <div class="other mt-10">
          <button class="btn btn-short btn-stronker right" style="    background-color: #03AD18;"><i class="icon-msg"></i>BOOK NOW</button>
          <h3>Price:</h3>
          <ul>
            <li> Rp. <?php echo $key_brosur->fix_price;?>;</li>
          </ul>


        
        </div>

 

        

        <div class="other-project">
          <div class="title">
            <h2>Other Brosur</h2>
            <h3><a href="" target="_self">View All Brosur</a></h3>
          </div>

          <div class="slider responsive no-hidden slick-initialized slick-slider">
            <div class="slick-list draggable">
              <div class="slick-track" style="opacity: 1; width: 1350px; transform: translate3d(0px, 0px, 0px);">
<!-- more -->

<?php

while ($key_brosur_other=$res_brosur_other->fetch()) {

    $token_other=$key_brosur_other->token;
    $dataimage_other=array("");
    $query_image_other="SELECT *
    FROM tb_brosur_image
    WHERE token='$token_other' ORDER BY id ASC";
    $res2_other=$db->fetch_multiple_rows($dataimage_other,$query_image_other);

      while ($key2_other=$res2_other->fetch()) {

      if($key2_other->name_image==null || $key2_other->name_image==''){
      $url_image_other = "default.png";
      } else {
      $url_image_other = $key2_other->name_image;
      }

    }
?>

              <div class="slick-slide slick-active" index="1" style="width: 213px;">
                <a href="" target="_self">
                  <div class="pic">
                    <img class="" src="../dashboard/image_upload/<?php echo $url_image_other;?>">
                  </div>
                </a>

                <div class="info">
                  <h6><?php echo $key_brosur_other->brosur_name;?>
                  </h6>
                  <p class="capital">Jakarta</p>
                </div>
                <div class="clear"></div>
              </div>
<?php 
}
?>



<!-- more -->
            </div>
          </div>
        </div>
      </div>

        <div class="comment ng-scope">
          <h3 class="ng-binding">Feedback (0)</h3>
          <div class="clear"></div>
        </div>

<?php 
}
?>
    <!-- QUERY END -->
      </div>
    </div>
  </div>


</section>

</div>
<!-- footer -->
<!-- footer end -->


</body>
</html>