<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");
$idview=$_GET['view'];
// $id_user=$_SESSION['eventorso_iduser'];

    $data=array("");
    $query="SELECT a.id,a.api,a.business_name,a.fullname,a.business_about,a.business_address,a.photo_profile,a.area_code,a.email,a.mobile_phone,b.city_name 
            FROM troopers a, tb_cities b 
            WHERE a.id_city=b.id 
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
        
      if($key->photo_profile==null || $key->photo_profile==''){
      $url_image = "default.png";
      } else {
      $url_image = $key->photo_profile;
      }
   
?>

<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">

        <div style="margin-right:15px;" class="box-item">
            <div class="pic">
                <a href="" class="ng-isolate-scope">
                  <img style="height:210px;" class="cover-img" title="Eventorso Title" src="../dashboard/image_upload/<?php echo $url_image;?>"></a>
            </div>
              <div class="extra block">
            </div>
        </div>

        <div style="margin-right:15px;">
          <div class="info">
              <h2 class="mt-10">
                <!-- <center> -->
                  <span class="box-item-title" title="Business Name" href="#"><h4><?php echo $key->business_name;?></h4></span>
                  <span class="box-item-title" target="_self"><h5><?php echo $key->business_address;?> <?php echo $key->city_name;?></h5></span>
                  <span class="box-item-title" href="#" target="_self"><h5>Phone: <?php echo $key->mobile_phone;?></h5></span>
                  <a class="box-item-title" href="#" target="_self"><h5>Send Message</h5></a>
                  <h5 class="box-item-title">Unverified</h5>
              <!-- </center> -->
              </h2>
            </div>  
        </div>
  </div>
</div>
<?php
}
?>
<!--  -->
<div class="box wrapper no-padding mt-30 mb-20" style="margin-top: 70px;">


<!-- START GRID -->
    <div class="vendor-grid mt-20 box no-padding" ng-init='vendorList.setResetFilter([])'>
<!-- BLOCK GRID -->

<?php
$databrosur=array("");
$query_brosur="SELECT a.id,a.token,a.brosur_name,b.business_name,a.fix_price,c.service_name,d.city_name
FROM tb_brosur a, troopers b, tb_category_service c, tb_cities d
WHERE a.id_user=b.id 
AND a.id_service=c.id
AND b.id_city=d.id
AND a.id_user = '$idview' ORDER BY a.id DESC";
$res=$db->fetch_multiple_rows($databrosur,$query_brosur);

while ($key=$res->fetch()) {

    $token=$key->token;
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

        <div style="margin-right:15px;" class="box-item">
            <div class="pic">
                <a href="../brosur/?view=<?php echo $key->id;?>" class="ng-isolate-scope">
                  <img style="height:210px;" class="cover-img" title="Eventorso Title" src="../dashboard/image_upload/<?php echo $url_image;?>"></a>
            </div>

            <div class="info">
              <h2 class="mt-10">
                <center>
                  <a class="box-item-title" target="_self" title="Eventorso Title" href="../brosur/?view=<?php echo $key->id;?>"><h4><?php echo $key->brosur_name;?></h4></a>
                  <!-- <a class="box-item-title" href="#" target="_self"><h5><b><?php echo $key->business_name;?></b></h5></a> -->
                  <h6><?php echo $key->service_name;?> - <?php echo $key->city_name;?></h6>
              </center>

              </h2>
            </div>
                
            <div class="extra block">
                <div>
                    <span class="ng-binding"><h6 style="color: #FFFFFF;">Price : Rp. <?php echo $key->fix_price;?></h6>
                </div>
                
                <div>
                    <span class="ng-binding"><a href="../brosur/?view=<?php echo $key->id;?>" target="_self"><h6>View Brosur</h6></a>
                </div>
            </div>
        </div>

<?php 
}
?>

<!-- END BLOCK GRID -->
</div>
<!-- END GRID -->
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