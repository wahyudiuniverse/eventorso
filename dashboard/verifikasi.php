<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION['eventorso_iduser'])){
  header("location:../login/");
}
require_once ("../config/config.php");


if(isset($_POST['sendcode'])){
date_default_timezone_set('Etc/UTC');
require '../phpmail/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "eventorso.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "official@eventorso.com";
//Password to use for SMTP authentication
$mail->Password = "orangila2015";
//Set who the message is to be sent from
$mail->setFrom('official@eventorso.com', 'Official Eventorso');
//Set an alternative reply-to address
$mail->addReplyTo('official@eventorso.com', 'Official Eventorso');
//Set who the message is to be sent to
$mail->addAddress($_POST['s_email'], 'Member Eventorso');
//Set the subject line
$mail->Subject = 'Verification Code';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

// code
$codex='tyudfgh678';
$contents='
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Event Vendors Market Place - Eventorso</title>
</head>
<body>
  <tr>
    <td style="border-collapse:collapse;padding:0" bgcolor="#ffffff">
      <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
        <tbody>

          <tr>
            <td style="border-collapse:collapse;font-size:0;padding:0" align="center" dir="rtl">
              <div style="display:inline-block;max-width:240px;vertical-align:top;width:100%">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif" width="100%" dir="ltr">
                  <tbody>
                    <tr>
                      <td style="border-collapse:collapse;padding:10px;padding-left:8px;padding-right:0">
                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif;font-size:13px;text-align:left" width="100%">
                          <tbody>
                            <tr>
                              <td style="border-collapse:collapse;padding:0" align="center">
                                <a href="http://eventorso.com/" style="color:#009588;text-decoration:underline" target="_blank">
                                  <img alt="" src="http://eventorso.com/web/images/logo.png" style="border:0;display:block;min-height:auto" width="160" class="CToWUd">
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div style="display:inline-block;max-width:320px;vertical-align:top;width:90%">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif" width="100%" dir="ltr">
                  <tbody>
                    <tr>
                      <td style="border-collapse:collapse;padding:10px;padding-left:8px;padding-right:8px">
                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif;font-size:13px;text-align:left" width="100%">
                          <tbody>
                            <tr>
                              <td style="border-collapse:collapse;padding:0">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif;font-size:13px;text-align:left" width="100%">
                                  <tbody>
                                    <tr>
                                      <td style="border-collapse:collapse;padding:0">
                                        <p style="Margin:0;color:#009588;font-family:Roboto,Helvetica,Arial,sans-serif;font-size:22px;font-weight:300;letter-spacing:normal;line-height:1.25">WELLCOME TO EVENTORSO</p>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td style="border-collapse:collapse;font-size:1px;line-height:1px;padding:0" height="10"></td>
                                    </tr>

                                    <tr>
                                      <td style="border-collapse:collapse;padding:0">
                                        <p style="Margin:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;letter-spacing:normal;line-height:1.25">Terima kasih telah bergabung di Eventorso, Permintaan Anda untuk KODE AKTIVASI ada dibawah ini, selanjutnya Salin kode tersebut di Menu Verifikasn pada halaman Profile :</p>
                                        <br>
                                        <p>CODE IS : '.$codex.'</p>
                                        <BR>
                                        <P>Atau anda juga bisa Klik tombol dibawah ini :</P>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td style="border-collapse:collapse;font-size:1px;line-height:1px;padding:0" height="25"></td>
                                    </tr>

                                    <tr>
                                      <td style="border-collapse:collapse;padding:0">
                                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:#757575;font-family:Roboto,Helvetica,Arial,sans-serif">
                                          <tbody>
                                            <tr>
                                              <td style="border-collapse:collapse;padding:0">
                                                <div> 
                                                  <a href="http://eventorso.com/v/?code='.$codex.'" style="background-color:#fff;border:1px solid #009588;color:#009588;display:inline-block;font-size:12px;font-weight:700;line-height:32px;padding:0 10px;text-align:center;text-decoration:none;text-transform:uppercase;width:autopx" target="_blank">VERIFIKASI AKUN</a>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>

            <td style="border-collapse:collapse;padding:0" width="20">
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>

</body>
</html>';

// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML($contents);
//Replace the plain text body with one created manually
$mail->AltBody = 'Thanks For Joining With Eventorso';
//Attach an image file
// $mail->addAttachment('../web/images/logo.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

}


    $data=array("");
    $query="SELECT a.id,a.api,a.activation,a.email,a.password 
            FROM troopers a, tb_cities b, tb_category_service c
            WHERE a.id_city=b.id
            AND a.id_service=c.id
            AND a.id='$_SESSION[eventorso_iduser]'";
    $res=$db->fetch_multiple_rows($data,$query);
    $count=$res->rowCount();

?>
<html>
	<head>

    <title>Event Vendors Market Place</title>
    <meta charset="UTF-8">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link href="../web/css/application.css" type="text/css" version="desktop" method="normal" rel="stylesheet">
    <link href="../web/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
        
        <style type="text/css">
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
    </style>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<!-- UPLOAD IMAGE ONE -->
<script type="text/javascript" >
 $(document).ready(function() { 
    $('#photoimg').live('change', function(){
        $("#preview").html('');
        $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
        $("#imageform").ajaxForm({
          target: '#preview'
        }).submit();

    });

  }); 
</script>

 <script type="text/javascript">
        function OnClickButton () {
          $.post('savesetting.php',{post_email:$('#pemail').val(),
                                          post_sandi:$('#psandi').val()
                        });
            // alert ("You clicked on the button!");
            window.location.assign("setting.php"); 
        }
    </script>

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
                                echo '<li js-tab="" tab-anchor="#brosur"><a href="brosur.php">My Brosur</a></li>';
                            }
                        ?>
                        <li js-tab="" tab-anchor="#Pengaturan"><a href="setting.php">PENGATURAN</a></li>
                        <li js-tab="" tab-anchor="#verivikasi" class="is-active"><a href="">VERIFIKASI</a></li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
</header>
<!--  -->
<?php
      while ($key=$res->fetch()) {
      
        
?>
<div id="edit-profile" class="box no-padding wrapper mb-50 tab-content" style="display:block;margin-top: 70px;">
    <div id="edit-1" class="box no-padding right form" style="width: inherit;">
        
                        <div id="business_detail" class="brandon small line-bottom pb-10">STATUS AKUN</div>


                            <div class="row mt-10">
                                <p>AKUN ANDA BELUM VERIFIKASI...!</p>
                                <p>SEGERA LAKUKAN VERIFIKASI, KODE VERIFIKASI DIKIRIM KE EMAIL ANDA</p>
                            </div>

                        <form class="form" name="form_verify" method="get" action="../v/">
                                 
                            <div class="row mt-10">
                                <label>
                                    <!-- <span class="form-title icon-required">Email</span> -->
                                    <input placeholder="Masukan kode verifikasi" name="code" class="ng-pristine ng-valid ng-valid-required">
                                        
                                </label>
                                <p class="form-msg">Email tidak boleh kosong</p>
                            </div>

                            <div>
                               <button onclick="" class="btn with-border w-130">VERIFIKASI </button>
                             </div>
                        </form>
<br>

                            <div class="row mt-10">
                                <p>Kenapa Harus Verfikasi..?</p>
                                <p>1. Memastikan Bahawa Anda adalah Vendor Aktif Eventorso.</p>
                                <p>2. Brosur Anda dapat dilihat oleh Pengunjung Eventorso.</p>
                                <p>3. Menjaga Keamanan Data dan Informasi yang Anda buat di Eventorso.</p>
                            </div>


                            <div class="row mt-20">
                                <p>JIKA ANDA TIDAK MENERIMA EMAIL VERIFIKASI, KLIK TOMBOL "KIRIM KODE" DI BAWAH.</p>
                            
                                <p>KODE VERIFIKASI AKAN DIKIRIM KE EMAIL ANDA</p>

                            </div>
                
                            <form class="form" name="form_login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                  
                              <div class="row mt-10">
                                <label>
                                    <!-- <span class="form-title icon-required">Email</span> -->
                                    <input value="<?php echo $key->email;?>" name="s_email" class="ng-pristine ng-valid ng-valid-required">
                                        
                                </label>
                                <p class="form-msg">Email tidak boleh kosong</p>
                            </div>
                                  <div>
                                    <button type="submit" name="sendcode" class="btn with-border w-130">KIRIM KODE</button>
                                  </div>
                            </form>
                    </div>
                </div>
<?php
}
?>
<!--  -->

</body>
</html>