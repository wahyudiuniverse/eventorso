<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION['eventorso_iduser'])){
  header("location:../");
}
if(isset($_POST['submit'])){

  require_once ("../config/config.php");

    $email=$_POST['email'];
    // $pass=md5($_POST['password']);
    $pass=($_POST['password']);

    $data=array($email,$pass);
    $query="SELECT * FROM troopers WHERE email='$email' AND PASSWORD='$pass'";
    $res=$db->fetch_multiple_rows($data,$query);
    $count=$res->rowCount();
      while ($key=$res->fetch()) {
        $id=$key->id;
        $api=$key->api;
        $username=$key->username;
        $email=$key->email;
        $fullname=$key->fullname;
        $business_name=$key->business_name;
        $level=$key->level;
        }

    if( $count> 0){
      $_SESSION['eventorso_session']=1;
      $_SESSION['eventorso_iduser']=$id;
      $_SESSION['eventorso_api']=$api;
      $_SESSION['eventorso_fullname']=$fullname;
      $_SESSION['eventorso_business_name']=$business_name;
      $_SESSION['eventorso_email']=$email;
      $_SESSION['eventorso_level']=$level;
      header("location:../");
    }
    else {
    // echo "<center><font color='red'><h3>Username atau Password Salah</h3></font></center>";
      $datacheck=array($email);
      $querycheck="SELECT email FROM troopers WHERE email='$email' UNION SELECT email FROM troopers WHERE email='$email'";
      $res=$db->fetch_multiple_rows($datacheck,$querycheck);
      $count=$res->rowCount();
        while ($key=$res->fetch()) {
          $email=$key->email;
        }

      if( $count> 0){
        echo "Password Not Match";
      } else{

        $_SESSION['eventorso_email']=$email;
        $_SESSION['eventorso_password']=$pass;
        $_SESSION['eventorso_reg']='1';
        header("location:../register/");
      }

    }
}

?>
<html>
	<head>

    <title>Login Eventorso</title>
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
            <a href="" class="brandon bold">Login</a>
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
            <div class="box dotted" ng-controller="pageCounterController">
              <h3>HALO..! SELAMAT DATANG DI EVENTORSO</h3>
            </div>
            <p class="classic big mt-20">Langkah mudah untuk bergabung di Eventorso. Kamu bisa membuat akun atau Login jika anda sudah mendaftar sebelumnya</p>

            <div class="box no-padding border-b mb-30 mt-20">
              <!-- <span class="or">or</span> -->
            </div>

            <form class="form" name="form_login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="row" ng-class="{'form-error' : loginCtrl.error_no_email || loginCtrl.error_wrong_email || loginCtrl.error_email_pass_not_match}">
                <input placeholder="Alamat Email" input-dirty tabindex="1" type="email" name="email" ng-model="loginCtrl.login.email" required>
                <p ng-if="!loginCtrl.error_email_pass_not_match" class="form-msg">[[ loginCtrl.error_no_email ? 'Email can not be empty' : 'Wrong Email Address' ]]</p>
              </div>
              <div class="row" ng-class="{'form-error' : loginCtrl.error_password_to_short || loginCtrl.error_wrong_password}">
                <input placeholder="Kata sandi" input-dirty tabindex="2" type="password" name="password" ng-model="loginCtrl.login.password" required ng-minlength="6">
                <p class="form-msg">[[ loginCtrl.error_password_to_short ? 'Password is too short' : 'Email and password do not match' ]]</p>
              </div>
              <button name="submit" class="btn btn-stronk btn-loader submit" type="submit">BUAT AKUN <span>or</span> LOGIN</button>
            </form>
            <h6 class="pink box"><a ng-click="loginCtrl.change_section('forgot')">Saya Lupa Password</a></h6>
            <!-- <p class="classic small mb-20">Creating an account means you’re okay with our <a href="#" target="_blank" rel="nofollow">terms and conditions</a></p> -->
          </div>
        <!-- </section> -->

    </div>
    <div class="box with-border form thick w-800 wrapper center mb-50">
      <ng-switch on="loginCtrl.selection">
        <!-- <section ng-switch-default ng-cloak> -->
                  <h6>JIKA KAMU MEMILIKI BISNIS USAHA, BISA MENDAFTAR SEBAGAI VENDOR : <a href="../register/vendor" class="pink">DAFTAR DISINI</a></h6>
              <!-- </section> -->
              <section ng-switch-when="verification_user" ng-cloak>
                  <h6>Already Verified? <a ng-click="loginCtrl.verification_check(loginCtrl.login.email)" class="pink">Click Here</a></h6>
              </section>
          </ng-switch>
    </div>
  </div>
        


<!-- <script src="http://raw.bridestory.com/raw/upload/static-production/desktop-1456386773/assets/vendor.grid/application-localized-id.js" version="desktop" method="normal" localizationBucket="ID"></script> -->
</body>
</html>