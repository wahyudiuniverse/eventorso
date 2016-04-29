<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");

$id_user=$_SESSION['eventorso_iduser'];
?>
<html ng-app="bridestoryApp">
	<head>

    <title>Event Vendors Market Place</title>
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
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT VENDORS</h5></a> -->
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT SERVICE</h5></a> -->
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>GUIDE EVENT</h5></a> -->
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
                  <li><a rel="nofollow" href="" target="_self">
                    <span><img src="web/images/favicon.png" height="20" width="20"></span>My Dashboard</a>
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
                  <li><a rel="nofollow" href="" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>My Dashboard</a></li>
                  <li><a target="_blank" href="../explore/?view=<?php echo $_SESSION['eventorso_iduser'];?>"><span><img src="../web/images/favicon.png" height="20" width="20"></span>View My Explore</a></li>
                  <li><a rel="nofollow" href="add_brosur.php" target="_self"><span><img src="../web/images/favicon.png" height="20" width="20"></span>Upload New Brosur</a></li>
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


<header id="subheader2" style="height: 0px; margin-top:10px;" class="l-header2 new pos-fixed" ng-controller="vendorSearchController as vendorSearch">
            <div id="dashboard-pagesub2" class="box no-padding line-bottom bg2-white" js-fixed-on-scroll="#subheader-container" fos-liveupdate="" fos-offset="#subheader-dashboard">
                <div class="box wrapper no-padding">
                    <ul class="menu_tab_new">
                        <li class="right mt_7 nohover">
                          <?php
                            if($_SESSION['eventorso_level']==0){

                            }else{
                              ?>
                            <a href="../explore/?view=<?php echo $_SESSION['eventorso_iduser'];?>" target="_self">
                                <button class="btn btn-stronk with-border right w-140 btn-no-sidepadding btn-loader" >VIEW EXPLORE</button>
                            </a>
                              <?php
                            }
                          ?>
                        </li>
                        <li js-tab="" tab-anchor="#profile"><a href="index.php">My Profile</a></li>
                        <?php 
                            if($_SESSION['eventorso_level']==0){
                                echo '<li js-tab="" tab-anchor="#myevent"><a href="myevent.php">My Event</a></li>';
                            }else{
                                echo '<li js-tab="" tab-anchor="#brosur" class="is-active"><a href="brosur.php">My Brosur</a></li>';
                            }
                        ?>
                        <li js-tab="" tab-anchor="#Pengaturan"><a href="setting.php">PENGATURAN</a></li>
                        <li js-tab="" tab-anchor="#verivikasi" ><a href="verifikasi.php">VERIFIKASI</a></li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
</header>

<!--  -->
<div class="box wrapper no-padding mt-30 mb-20" style="margin-top: 70px;">
    <div ng-show="!hideProjectPagination" class="box mb-30">

                  <div class="right_pos r20" style="right:0px;">
                      <a href="add_brosur.php"><button class="btn with-border right btn-short">Add New Brosur</button></a>
                  </div>

                  <div>
                  <!-- <div class="center_pos georgia_small">Show page <em class="ng-binding">1 of 1</em></div> -->

                  </div>
              </div>
<!-- START GRID -->
    <div class="vendor-grid mt-20 box no-padding" ng-init='vendorList.setResetFilter([])'>
<!-- BLOCK GRID -->

<?php
$databrosur=array("");
$query_brosur="SELECT a.id,a.token,a.brosur_name,a.fix_price,c.service_name,d.city_name,a.publish,a.publish_approve
FROM tb_brosur a, troopers b, tb_category_service c, tb_cities d
WHERE a.id_user=b.id 
AND a.id_service=c.id
AND b.id_city=d.id
AND a.id_user = '$id_user' ORDER BY a.id DESC";
$res=$db->fetch_multiple_rows($databrosur,$query_brosur);

while ($key=$res->fetch()) {

    $token=$key->token;
    $dataimage=array("");
    $query_image="SELECT *
    FROM tb_brosur_image
    WHERE token='$token' ORDER BY id DESC LIMIT 1";
    $result=$db->fetch_multiple_rows($dataimage,$query_image);
    $count=$result->rowCount();

    while ($key2=$result->fetch()) {
      $url=$key2->name_image;
    }

      if($count>0){
      }else{
        $url=null;
      }

                  if($url==null || $url==''){
                    $url_image = "default.png";
                  } else {
                    $url_image = $url;
                  }
// $url_image='1458938395-Selimut-Daging.png';
?>

        <div style="margin-right:15px;" class="box-item">
            <div class="pic">
                <a href="" class="ng-isolate-scope">
                  <img style="height:210px;" class="cover-img" title="Eventorso Title" src="image_upload/<?php echo $url_image;?>"></a>
            </div>

            <div class="info">
              <h2 class="mt-10">
                <center>
                  <a class="box-item-title" target="_self" title="Eventorso Title" href="#"><h5><?php echo $key->brosur_name;?></h5></a>
                  <a class="box-item-title" href="#" target="_self"><?php echo $key->service_name;?> - <?php echo $key->city_name;?></a>
              </center>

                <center>
                  <h6>Fix Price : Rp. <?php echo $key->fix_price;?></h6>
                </center>
              </h2>
            </div>
                
            <div class="extra block">
                <div>
                    <span class="ng-binding"><a href="edit_brosur.php?token=<?php echo $key->token;?>" target="_self"><p>Edit</p></a>
                </div>
                <div>
<?php
  if($key->publish=="1" && $key->publish_approve=="0"){
    echo '<span class="ng-binding"><p>Non-Active</p>';
  }else if($key->publish=="1" && $key->publish_approve=="1"){
    echo '<span class="ng-binding"><p>Active</p>';
  }else{
    echo '<span class="ng-binding"><p>Draf</p>';
  }
?>
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
  


</body>
</html>