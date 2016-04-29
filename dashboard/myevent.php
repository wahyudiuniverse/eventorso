<!DOCTYPE HTML>

<?php
session_start();
if(!isset($_SESSION['eventorso_iduser'])){
  header("location:../login/");
}
?>
<html>
	<head>

    <title>Event Market Place</title>
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
              <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="index.php">
                <span class="ng-binding"><?php echo $_SESSION['eventorso_fullname'];?></span>
                <b class="bs-icon-down"></b>
              </a>

              <ul class="dropdown-menu2" role="menu" aria-labelledby="profile">
                <div ng-if="menuCtrl.isVendor()" class="ng-scope">
                  <li><a rel="nofollow" href="">
                    <span class="bs-icon-menu-dashboard"></span>My Dashboard</a>
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
                  <li><a rel="nofollow" href="" target="_self"><span class="bs-icon-menu-dashboard"></span>My Dashboard</a></li>
                  <li><a target="_blank" href="../explore/?view=<?php echo $_SESSION['eventorso_iduser'];?>"><span class="bs-icon-menu-profile"></span>View My Explore</a></li>
                  <li><a rel="nofollow" href="dashboard/add_brosur.php" target="_self"><span class="bs-icon-menu-upload-project"></span>Upload New Brosur</a></li>
                </div>

                <li class="divider"></li>
                <li><a href="../logout.php" target="_self"><span class="bs-icon-menu-logout2"></span>Logout</a></li>
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
                        <li js-tab="" tab-anchor="#event" class="is-active"><a href="">My Event</a></li>
                        <li js-tab="" tab-anchor="#info"><a href="#">Info</a>
                            <!-- <span class="icon-alert-red-small ml-3" ng-show="vpStrengthCtrl.vendormeta().faqCount == 0" rel="tooltip-tipsy-top" title="You need to complete your business information"></span> -->
                        </li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
</header>
<!--  -->


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