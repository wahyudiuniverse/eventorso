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
        $level=$key->level;
        }

    if( $count> 0){
      $_SESSION['eventorso_session']=1;
      $_SESSION['eventorso_iduser']=$id;
      $_SESSION['eventorso_fullname']=$fullname;
      $_SESSION['eventorso_business_name']=$business_name;
      $_SESSION['eventorso_email']=$email;
      $_SESSION['eventorso_level']=$level;

      // code
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
                                                  <a href="http://eventorso.com/verifikasi/?code='.$codex.'" style="background-color:#fff;border:1px solid #009588;color:#009588;display:inline-block;font-size:12px;font-weight:700;line-height:32px;padding:0 10px;text-align:center;text-decoration:none;text-transform:uppercase;width:autopx" target="_blank">VERIFIKASI AKUN</a>
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

      header("location:../");
}

      // header("location:../");
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
              <input name="s_email" value="<?php echo $_SESSION['eventorso_email'];?>" style="display:none;"></input>
              <button name="home" class="btn btn-stronk with-border submit" type="submit">KEMBALI KE HOME</button>

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