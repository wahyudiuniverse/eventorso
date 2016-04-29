<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION['eventorso_iduser'])){
  header("location:../../");
}

require_once ("../../config/config.php");
if(isset($_POST['submit'])){

    $business_name=$_POST['business_name'];
    // $city='8';
    $service=$_POST['reg_service'];
    $city=$_POST['reg_city'];
    $email=$_POST['reg_email'];
    $password=$_POST['reg_password'];


function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd >= $range);
    return $min + $rnd;
}

    function getToken($length)
    {
        $veriycode = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i=0; $i < $length; $i++) {
            $veriycode .= $codeAlphabet[crypto_rand_secure(0, $max)];
        }
        return $veriycode;
    }

    $veriycode = getToken(10);
    $_SESSION['eventorso_veriycode']=$veriycode;

      $datacheck=array($email);
      $querycheck="SELECT email FROM troopers WHERE email='$email'";
      $res=$db->fetch_multiple_rows($datacheck,$querycheck);
      $count=$res->rowCount();
        while ($key=$res->fetch()) {
          $email=$key->email;
        }

      if( $count> 0){
        echo "Email sudah terdaftar";
      } else{

        $reg = new Database();
          $value = $reg->register_vendor($business_name,$service,$city,$email,$password,$veriycode);
          // echo $value;
          if($value=='true'){
            $_SESSION['eventorso_email']=$email;
            $_SESSION['eventorso_password']=$password;
            header("location:../done.php");
          }else{
            echo "Terjadi Kesalahan Server..!!!";
          }
    }


}

?>

<html ng-app="bridestoryApp">
	

  <head>
    <title>Register Vendor | Eventorso</title>
    <meta charset="UTF-8">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link href="../../web/css/application.css" version="desktop" method="normal" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../../web/images/favicon.png" type="image/x-icon" />

  <!-- <link type="text/css" href="../../web/themes/jquery.ui.core.css" rel="stylesheet" /> -->
  <link type="text/css" href="../../web/themes/jquery.ui.theme.css" rel="stylesheet" />
  <link type="text/css" href="../../web/themes/jquery.ui.selectmenu.css" rel="stylesheet" />
  <script type="text/javascript" src="../../web/themes/jquery-1.8.2.js"></script>
  <script type="text/javascript" src="../../web/themes/jquery.ui.core.js"></script>
  <script type="text/javascript" src="../../web/themes/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="../../web/themes/jquery.ui.position.js"></script>

  <script type="text/javascript" src="../../web/themes/jquery.ui.selectmenu.js"></script>

  <script type="text/javascript">
    $(function(){

      $('select#speedD').selectmenu({
        menuWidth: 496,
        format: addressFormatting
      });
    });

    //a custom format option callback
    var addressFormatting = function(text, opt){
      var newText = text;
      //array of find replaces
      var findreps = [
        {find:/^([^\-]+) \- /g, rep: '<span class="ui-selectmenu-item-header">$1</span>'},
        {find:/([^\|><]+) \| /g, rep: '<span class="ui-selectmenu-item-content">$1</span>'},
        {find:/([^\|><\(\)]+) (\()/g, rep: '<span class="ui-selectmenu-item-content">$1</span>$2'},
        {find:/([^\|><\(\)]+)$/g, rep: '<span class="ui-selectmenu-item-content">$1</span>'},
        {find:/(\([^\|><]+\))$/g, rep: '<span class="ui-selectmenu-item-footer">$1</span>'}
      ];

      for(var i in findreps){
        newText = newText.replace(findreps[i].find, findreps[i].rep);
      }
      return newText;
    }
  </script>

  </head>

	<body>
		<br>
				
    <header id="header2" class="l-header2 pos-fixed new" style="height:70px;">
      <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo left-none" href="../../" title="Event Vendor Directory"></a>
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
            <li class="pic"><img src="../../web/images/pic.jpg"></li>
            <li class="dropdown">
              <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="">
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
            
            <a href="" class="register b-vendor brandon bold">Daftar Vendor</a>
            <a href="../../login" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
      </div>
    </header>      

<div ng-view="" class="ng-scope"><section class="box wrapper with-border mb-50 ng-scope">
        <div class="box no-padding wrapper w-745">
            <div class="box no-padding">
            <h3 class="center">DAFTAR SEBAGAI VENDOR ACARA</h3>
        </div>
        <!-- <div class="box thin border-b dotted mb-20"></div> -->

        <div class="box with-border center">

        </div>
        <div class="box w-600 no-padding mt-20 wrapper">

            <form class="form" name="form_register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row" ng-class="((registerCtrl.errorFullName &amp;&amp; !form_account.full_name.$valid) ? 'form-error' : '')">
                    <label>
                        <span class="form-title icon-required">NAMA BISNIS USAHA</span>
                        <input type="text" name="business_name" class="ng-pristine ng-invalid ng-invalid-required">
                    </label>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.errorFullName">Nama Bisnis Usaha Anda tidak boleh kosong</p>
                    <p class="liveedit-answer ng-binding"></p>
                </div>
                
                <div class="row" ng-class="((registerCtrl.errorFullName &amp;&amp; !form_account.full_name.$valid) ? 'form-error' : '')">
                    <label>
                        <span class="form-title icon-required">JENIS LAYANAN BISNIS USAHA</span>
                        <!-- <span class="form-stitle">THIS IS SERVICE NAME FOR VENDOR BUSINEES</span> -->
                        <!-- <input type="text" name="business_name" class="ng-pristine ng-invalid ng-invalid-required"> -->
                        <div style="width:100%;" class="box-select plain thicker georgia fixed-l">
                        <select name="reg_service" id="speedD" style="background:#00000000;">
                        <?php
                                  $data_service=array("");
                                  $query_service="SELECT * FROM tb_category_service ORDER BY service_name";
                                  $res_service=$db->fetch_multiple_rows($data_service,$query_service);
                                  echo "<option value='0'>Select Service</option>";
                                    while ($key_service=$res_service->fetch()) {
                                      ?>
                                      <option value="<?php echo $key_service->id;?>"> <font style="font-style:italic;"><?php echo $key_service->service_name.' - '.$key_service->sub_service_name;?></font></option>
                                      <?php
                                    }
                        ?>
                        </select>
                      </div>
                    </label>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.errorFullName">Tidak Boleh Kosong</p>
                    <p class="liveedit-answer ng-binding"></p>
                </div>

                <div class="row fixed fixed-2column" ng-class="((registerCtrl.errorMobilePhone &amp;&amp; !form_account.mobile_phone.$valid) ? 'form-error' : '')">
                    <label>
                        <span class="form-title icon-required">LOKASI TEMPAT BISNIS USAHA</span>
                        <!-- <span class="form-stitle">THIS LOCATION YOUR BUSINESS</span> -->
                    </label>
                    <div class="box-select plain thicker georgia fixed-l">
                        
                        <select name="country" class="ng-pristine ng-valid">
                        <!-- <option value="" class="">Please Choose</option> -->
                        <option value="1">Indonesia</option>
                        </select>
                    </div>
                    <div style="width: 385px;" class="box-select plain thicker georgia fixed-l">

                        <select name="reg_city" class="ng-pristine ng-valid">
                        <?php
                                  $datachecks=array("");
                                  $querychecks="SELECT * FROM tb_cities ORDER BY city_name";
                                  $ress=$db->fetch_multiple_rows($datachecks,$querychecks);
                                  echo "<option value='0'>Select City</option>";
                                    while ($key=$ress->fetch()) {
                                      ?>
                                      <option value="<?php echo $key->id;?>" class="red"><?php echo $key->city_name;?></option>
                                      <?php
                                    }
                        ?>
                        </select>
                    </div>
                </div>

                <div class="row" ng-class="(((!checkEmail() &amp;&amp; submitted || (!registerCtrl.errorEmail &amp;&amp; registerCtrl.uniqueEmail)))  ? 'form-error' : '')">
                    <label>
                        <span class="form-title icon-required">ALAMAT EMAIL</span>
                        <span class="form-stitle">Alamat amail untuk Verivikasi akun bisnis usaha anda</span>
                    <input type="email" ng-change="registerCtrl.uniqueEmail=false;checkEmailValidation()" input-dirty="" tabindex="8" name="reg_email" ng-model="registerCtrl.account.email" required="" unique-email="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-email"></label>
                    <p class="form-msg" ng-show="form_account.email.$error.required">Email tidak boleh kosong</p>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.errorEmail">Format email salah</p>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.uniqueEmail &amp;&amp;  form_account.email.$valid">Email tersebut sudah terdaftar di Eventorso</p>
                    <p class="liveedit-answer ng-binding"></p>
                </div>

                <div class="row" ng-class="{'form-error' : form_account.password.$invalid &amp;&amp; submitted}">
                    <label>
                        <span class="form-title-black icon-required">Kata Sandi</span>
                    <input type="password" placeholder="Kata sandi Minimal 6 karakter" input-dirty="" tabindex="9" name="reg_password" ng-model="registerCtrl.account.password" ng-minlength="6" required="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-minlength"></label>
                    <p class="form-msg" ng-show="form_account.password.$error.required">Kata sandi tidak boleh kosong</p>
                    <p class="form-msg ng-hide" ng-show="!form_account.password.$error.required &amp;&amp; form_account.password.$error.minlength">Kata sandi minimal 6 karakter</p>
                    <!-- <p class="liveedit-answer liveedit-password">******</p> -->
                </div>
                <div class="row pb-10" ng-class="{'form-error' : form_account.confirm_password.$invalid &amp;&amp; submitted}">
                    <label>
                        <span class="form-title-black icon-required">Ketik Ulang Kata Sandi</span>
                    <input type="password" placeholder="Ketik ulang kata sandi" name="confirm_password" placeholde="Minimum 6 characters" ng-model="registerCtrl.account.confirm_password" ng-minlength="6" pw-check="password" required="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-minlength"></label>
                     <p class="form-msg ng-hide" ng-show="form_account.confirm_password.$error.required &amp;&amp; submitted">Kata sandi pengulangan tidak boleh kosong</p>
                     <p class="form-msg ng-hide" ng-show="!form_account.confirm_password.$error.required &amp;&amp; form_account.confirm_password.$error.pwmatch">Kata sandi tidak sama</p>
                    <!-- <p class="liveedit-answer liveedit-password">******</p> -->
                </div>


        <div class="box no-padding w-600 wrapper">
            <button name="submit" type="submit" class="btn btn-stronk btn-loader submit with-border w-130 right">SELANJUTNYA</button>
            <!-- <button type="submit" class="btn with-border w-130 right ng-hide" tabindex="7" ng-click="registerCtrl.submit_account(form_account, 'register-vendor/4')" ng-hide="registerCtrl.is_loading || !registerCtrl.is_summary">Save Changes</button> -->
            <!-- <button type="submit" class="btn with-border w-130 right ng-hide" tabindex="7" ng-click="registerCtrl.submit_account(form_account, 'register-vendor/2')" ng-show="registerCtrl.is_loading" disabled="disabled">Loading</button> -->
        </div>

            </form>     
        </div>

    </div></section></div>


</body>
</html>