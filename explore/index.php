<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");
$idview=$_GET['view'];


$data_vendor=array("");
  $query_vendor="SELECT a.id,a.api,a.business_name,c.service_name,a.business_address,b.city_name,a.mobile_phone,a.photo_profile,a.activation
FROM troopers a, tb_cities b, tb_category_service c
WHERE a.id_city=b.id
AND a.id_service=c.id
AND a.id='$idview'";
$res_vendor=$db->fetch_multiple_rows($data_vendor,$query_vendor);

$data_brosur=array("");
$query_brosur="SELECT a.id,a.token,a.brosur_name,c.service_name,d.city_name,a.fix_price,a.date_insert
FROM tb_brosur a, troopers b, tb_category_service c, tb_cities d
WHERE a.id_user=b.id 
AND a.id_service=c.id
AND b.id_city=d.id
AND publish='1'
AND publish_approve='1'
AND a.id_user = '$idview' ORDER BY a.id DESC";
$res_brosur=$db->fetch_multiple_rows($data_brosur,$query_brosur);


?>

<html ng-app="">
	<head>

		<title><!--TITLE--></title>
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
                  <span><img src="../web/images/favicon.png" height="20" width="20"></span>Logout</a>
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
                  <li><a rel="nofollow" href="../dashboard/" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>My Dashboard</a></li>
                  <li><a target="_blank" href=""><span><img src="../web/images/favicon.png" height="20" width="20"></span>View My Explore</a></li>
                  <li><a rel="nofollow" href="../dashboard/add_brosur.php" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>Upload New Brosur</a></li>
                </div>

                <li class="divider"></li>
                <li><a href="../logout.php" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>Logout</a></li>
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

$pageContents = ob_get_contents ();
ob_end_clean (); 
echo str_replace ('<!--TITLE-->', $key_vendor->business_name.' - Eventorso', $pageContents);

?>         
<aside class="box no-padding wrapper w-235 left sidebarSticky" style="position: fixed; top:93px; float: left; width: 235px;">
  <div id="sticky-and-not-sticky">
    <div class="vendor_profile bg-white" style="width: 183px;">

      <div class="pic"> 
        <img itemprop="logo" class="" title="<?php echo $key_vendor->business_name;?>" src="../dashboard/image_upload/<?php echo $url_profile;?>">
      </div>

        <p><h3><?php echo $key_vendor->business_name;?></h3></p>
        <div class="clear"></div>

        <div class="loc mt-15">
            <span class="icon-service">
              <a href="" target="_self"><p><?php echo $key_vendor->service_name;?></p></a>
            </span>
        </div>

        <div class="loc mt-15">
            <span class="icon-location">
              <p><?php echo $key_vendor->city_name;?> - Indonesia</p>
            </span>
        </div>

        <div class="loc mt-15">
            <span class="icon-phone">
              <p><?php echo $key_vendor->mobile_phone;?></p>
            </span>
        </div>

<?php 
  if($key_vendor->activation=="1"){
?>
        <div class="dot"></div>
        <div class="loc mt-15">
            <span class="icon-verified">
              <p>Verified</p>
            </span>
        </div>
<?php
  }
?>


        


        <!-- <div class="loc"> -->
            <!-- <span class="info-detail">Feedback</span> -->
<!-- <img src="../web/images/icon_verify.png" width="20px" height="20px"> Verfied -->

<!-- <img src="../web/images/icon_brosur_approve.png" width="20px" height="20px"> -->
        <!-- </div> -->

        <!-- <div class="dot"></div>
        <div class="info">
            <span class="info-detail">Feedback</span><a id="View_Website" href=""></a>
        </div> -->

        <div class="dot"></div>
        <button class="btn btn-short btn-stronker"><i class="icon-msg"></i>Send Message</button>
        

      </div>
    </div>
  </aside>
<?php } ?>
<!-- MID -->

<section class="box no-padding wrapper w-750 right clear-after">

  <div class="box no-padding with-border">
    <div class="project" id="tabs-1">
      <div class="project-detail bg-white">

<?php

while ($key_brosur=$res_brosur->fetch()) {

    $token=$key_brosur->token;
    $dataimage=array("");
    $query_image="SELECT *
    FROM tb_brosur_image
    WHERE token='$token' ORDER BY id ASC LIMIT 1";
    $res2=$db->fetch_multiple_rows($dataimage,$query_image);

    while ($key2=$res2->fetch()) {
      // $url_image=$key2->name_image;

      if($key2->name_image==null || $key2->name_image==''){
      $url_image = "default.png";
      } else {
      $url_image = $key2->name_image;
      }
    }

?>


        <div style="margin-right:15px;" class="box-item">
            <div class="pic">
                <a href="../brosur/?view=<?php echo $key_brosur->id;?>" class="ng-isolate-scope">
                  <img style="height:210px;" class="cover-img" title="Eventorso Title" src="../dashboard/image_upload/<?php echo $url_image;?>"></a>
            </div>

            <div class="info">
              <!-- <h2 class="mt-5"> -->
                <center>
                  <h5><?php echo $key_brosur->brosur_name;?></h5>
                  <h6><?php echo $key_brosur->city_name;?></h6>
              </center>

            </div>
        </div>


<?php 
}
?>
      </div>
    </div>
  </div>


</section>

</div>
<!--  -->



</body>
</html>