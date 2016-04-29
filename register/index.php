<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION['eventorso_iduser'])){
  header("location:../");
}
if(!isset($_SESSION['eventorso_reg'])){
  header("location:../");
}

if(isset($_POST['submit'])){

  require_once ("../config/config.php");

    $email=$_POST['email'];
    $password=$_POST['password'];
    $fullname=$_POST['full_name'];

    $reg = new Database();
    // $reg->register_user($fullname,$email,$password);
      $value = $reg->register_user($fullname,$email,$password);
      // echo $value;
      if($value=='true'){
            $_SESSION['eventorso_email']=$email;
            $_SESSION['eventorso_password']=$password;
        header("location:done.php");
      }else{

      }
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
            <li class="pic"><img src="web/images/pic.jpg"></li>
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
            
            <a href="../register/vendor" class="register b-vendor brandon bold">Join vendor</a>
            <a href="../login" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
      </div>
    </header>

  <div>
    <div class="box form w-800 no-padding top_wrapper wrapper with-border">
      <!-- <ng-switch on="loginCtrl.selection"> -->
        <!-- <section ng-switch-default ng-cloak> -->
          <div class="box wrapper w-530 no-padding center">
            

            <div class="box" ng-controller="pageCounterController">
              <h3>MEMBUAT AKUN BARU</h3>
            </div>

            <p class="classic big box">Siapa Nama Kamu.?</p>

            <div class="box no-padding border-b mb-30">
              <!-- <span class="or">or</span> -->
            </div>


            <form class="form" name="form_login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="row">
                <input placeholder="Nama Lengkap" tabindex="1" type="text" name="full_name" >
                <input type="text" name="email" value="<?php echo $_SESSION['eventorso_email'];?>" style="display: none;">
                <input type="text" name="password" value="<?php echo $_SESSION['eventorso_password'];?>" style="display: none;">
              </div>
              <button class="btn btn-stronk btn-loader submit" name="submit" type="submit">DAFTAR BARU</button>
            </form>

          </div>
        <!-- </section> -->


      <!-- </ng-switch> -->
    </div>
  </div>
        

 

<!-- <script src="http://raw.bridestory.com/raw/upload/static-production/desktop-1456386773/assets/vendor.grid/application-localized-id.js" version="desktop" method="normal" localizationBucket="ID"></script> -->
</body>
</html>