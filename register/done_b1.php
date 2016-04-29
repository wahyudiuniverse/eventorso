<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION['eventorso_iduser'])){
  header("location:../");
}

if(isset($_POST['home'])){

  require_once ("../config/config.php");

    $email=$_SESSION['eventorso_email'];
    $password=$_SESSION['eventorso_password'];

    $data=array($email,$password);
    $query="SELECT * FROM troopers WHERE email='$email' AND PASSWORD='$password'";
    $res=$db->fetch_multiple_rows($data,$query);
    $count=$res->rowCount();
      while ($key=$res->fetch()) {
        $id=$key->id;
        $api=$key->api;
        $username=$key->username;
        $email=$key->email;
        $fullname=$key->fullname;
        $business_name=$key->business_name;
        $business_name->business_name;
        $level=$key->level;
        }

    if( $count> 0){
      $_SESSION['eventorso_session']=1;
      $_SESSION['eventorso_iduser']=$id;
      $_SESSION['eventorso_fullname']=$fullname;
      $_SESSION['eventorso_business_name']=$business_name;
      $_SESSION['eventorso_email']=$email;
      $_SESSION['eventorso_level']=$level;
      header("location:../");
    }
}

?>
<html ng-app="EventorsoApps">

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
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT VENDORS</h5></a> -->
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>HOT SERVICE</h5></a> -->
            <!-- <a target="_top" href="#" style="text-transform: uppercase;"><h5>GUIDE EVENT</h5></a> -->
        </nav>
        <nav style="margin-top: 15px;" id="sub-menu-not-login" class="right f-brandon f-td-n">

        </nav>
      </div>
    </header>



  <div style="margin-top:50px;">
    <div class="box form w-800 no-padding top_wrapper wrapper with-border">

<div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="green" style="color: #00B100;">PENDAFTARAN BERHASIL</h3>
            </div>
            <p class="classic big box">Terima kasih sudah mendaftar di Eventorso</p>
            <p class="classic big box">Selanjutnya anda harus Verifikasi kepemilikan Bisnis di Eventorso, jika anda tidak mem-verifikasi akun dalam 24 jam kedepan maka Akun anda tidak bisa membuat Brosur Bisnis untuk promosi.</p>
            <p class="classic big box">Link untuk Verifikasi dikirmkan ke email anda, jika email verifikasi tidak sampai ke email anda, anda bisa meminta ulang email verifikasi pada menu Verifikasi di Halaman Profile</p>
            <br>
            <form class="form" name="form_register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <button name="home" class="btn btn-stronk with-border submit" type="submit">HOME</button>
              atau
              <button name="profile" class="btn btn-stronk with-border submit" type="submit">PROFILE</button>

              <div class="classic small box mt-20 mb-20">
                  <p class="classic small">Creating an account means you’re okay with our <a href="#" target="_blank" rel="nofollow">terms and conditions</a></p>
              </div>

            </form>
          </div>

    </div>
  </div>
        

<footer class="footer">
    <div class="box wrapper no-padding">
        <div class="center footer-center pt2-10">

        </div>
    </div>
    <div class="wrapper">
        <ul class="center copy">

        <div class="loc mt-5"><p style="color: white;">VENDOR INFORMATION</p></div>
            <!-- <li><a href="#" target="_self" rel="nofollow">Vendor Information</a></li> -->
        </ul>
    </div>
</footer>


</body>
</html>