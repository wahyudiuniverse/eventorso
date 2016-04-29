<!DOCTYPE HTML>
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
  
  <body style="padding: 0px;">
    <header id="header2" class="l-header2 pos-fixed new" style="height:70px;">
    <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo left-none" href="" title="Event Vendor Directory"></a>
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>WHO WE ARE</h5></a> -->
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT SERVICE</h5></a> -->
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>GUIDE EVENT</h5></a> -->
        </nav>
        <nav style="margin-top: 15px;" id="sub-menu-not-login" class="right f-brandon f-td-n">

          <?php
            if(isset($_SESSION['eventorso_session'])){
              if($_SESSION['eventorso_level']=="0"){
?>
<ul id="sub-menu" class="right ng-scope">
  <li class="pic">
    <img src="../web/images/pic.jpg">
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
            <!-- <a href="register/vendor/" class="register b-vendor brandon bold">Become a vendor</a> -->
            <a target="_top" href="#" style="text-transform: uppercase;"><h5>PITCHDECK</h5></a>
              <?php
            }
          ?>
        </nav>
    </div>
    </header>         
  
<div class="bs_footer_categories pt-30" style="padding-top:60px;">
  


<div class="l-header2 new" ng-controller="vendorSearchController as vendorSearch">
 <div style="width: 700px;" class="box no-padding wrapper" id="introstep1">
  
  <iframe src="https://drive.google.com/file/d/0Bxzr7_62huPtekxiYlNPZkJVbGM/preview" width="100%" height="600"></iframe>
  
 </div>
</div>  
</div>

  
<div class="help-box"><p>Need help with something?<br>Check our Help Center.</p>
  <a href="" target="_blank" class="btn btn-stronk btn-small btn-shorter with-border thin-padding w-150">visit help center</a>
</div>

<div class="submit-box">
  <ul>
    <li><a href="" target="_self"><span class="icon-msg-widget"></span><p class="sbt-widget mt-15">Contact Us</p></a></li>
    <li><a rel="nofollow" href="" target="_self"><span class="icon-join-widget"></span><p class="sbt-widget mt-13">Join Bridestory Team</p></a></li>
    <li><a href="" target="_self"><span class="icon-submit-widget"></span><p class="sbt-widget mt-10">Submit A Wedding <br> to blog</p></a></li>
  </ul>
</div>  

</body>
</html>