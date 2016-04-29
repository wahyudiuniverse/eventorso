<!DOCTYPE HTML>
<?php
session_start();

require_once ("../config/config.php");
    if(!isset($_GET['code'])){
      header("location:../");
      // echo "NO CODE";
    }
    if($_GET['code']=='' || $_GET['code']==null){
      header("location:../");
      // echo "CODE NULL";
    }

    $v_code = $_GET['code'];
    $failcode='0';

    $date_last_modified = date('Y-m-d H:i:s');
    $reg = new Database();

$data=array("");
    $query="SELECT * FROM troopers WHERE activation_code='$v_code'";
    $res=$db->fetch_multiple_rows($data,$query);
    $count=$res->rowCount();
      while ($key=$res->fetch()) {
        $id=$key->id;
        $username=$key->username;
        $fullname=$key->fullname;
        $business_name=$key->business_name;
        $level=$key->level;
        }

    if( $count> 0){
      $value = $reg->update_verifikasi($v_code);

    }else{

      // header("location:../");
      // echo "CODE SALAH";
      $failcode='1';
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
        </nav>
        <nav style="margin-top: 15px;" id="sub-menu-not-login" class="right f-brandon f-td-n">

        </nav>
      </div>
    </header>


<?php 
  if($failcode=='1'){
?>


  <div style="margin-top:50px;">
    <div class="box form w-800 no-padding top_wrapper wrapper with-border">
      <div class="box wrapper w-530 no-padding center">
        <div class="box border-b dotted">
          <h3 class="green" style="color: #FF0017;">VERIFIKASI GAGAL</h3>
          <p>Gunakan Kode Verifikasi yang Benar dan Terbaru.</p>
        </div>

        <br>
        
        <form class="form" name="form_register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input name="s_email" value="<?php echo $_SESSION['eventorso_email'];?>" style="display:none;"></input>
          <button name="home" class="btn btn-stronk with-border submit" type="submit">KEMBALI KE HOME</button>
        </form>
      </div>
    </div>
  </div>


<?php
  }else{
?>


  <div style="margin-top:50px;">
    <div class="box form w-800 no-padding top_wrapper wrapper with-border">
      <div class="box wrapper w-530 no-padding center">
        <div class="box border-b dotted">
          <h3 class="green" style="color: #00B100;">VERIFIKASI BERHASIL</h3>
        </div>

        <br>
        
        <form class="form" name="form_register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input name="s_email" value="<?php echo $_SESSION['eventorso_email'];?>" style="display:none;"></input>
          <button name="home" class="btn btn-stronk with-border submit" type="submit">KEMBALI KE HOME</button>
        </form>
      </div>
    </div>
  </div>

<?php
  }
?>
  


</body>
</html>