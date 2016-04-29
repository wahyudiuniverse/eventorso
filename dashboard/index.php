<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION['eventorso_iduser'])){
  header("location:../login/");
}
require_once ("../config/config.php");




if(isset($_POST['submit'])){
    
    $id_user = $_SESSION['eventorso_iduser'];
    $business_name = $_POST['pbusname'];
    $vfullname = $_POST['pfullname'];
    $vabout = $_POST['pabout'];
    $vaddress = $_POST['paddress'];
    $vcity = $_POST['pcity'];
    $vzipcode = $_POST['pzip'];;
    $vmobile = $_POST['pmobile'];

    $date_last_modified = date('Y-m-d H:i:s');
    $reg = new Database();

        // $value = $reg->update_profile($id_user,$business_name,$fullname,$about,$address,$date_last_modified);
        $value = $reg->update_profile($id_user,$business_name,$vfullname,$vabout,$vaddress,$vcity,$vzipcode,$vmobile);

}


    $data=array("");
    $query="SELECT a.id,a.api,a.business_name,c.service_name,a.fullname,a.business_about,a.business_address,a.photo_profile,a.area_code,a.email,a.mobile_phone,b.city_name 
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

</head>

	<body>
		<br>
				

    <header id="header2" class="l-header2 pos-fixed new" style="height:70px;">
      <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo left-none" href="../" title="Event Vendor Directory"></a>
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
                        <li js-tab="" tab-anchor="#profile" class="is-active"><a href="">My Profile</a></li>
                        <?php 
                            if($_SESSION['eventorso_level']==0){
                                echo '<li js-tab="" tab-anchor="#myevent"><a href="myevent.php">My Event</a></li>';
                            }else{
                                echo '<li js-tab="" tab-anchor="#brosur"><a href="brosur.php">My Brosur</a></li>';
                            }
                        ?>
                        <li js-tab="" tab-anchor="#info"><a href="setting.php">PENGATURAN</a></li>
                        <li js-tab="" tab-anchor="#info"><a href="verifikasi.php">VERIFIKASI</a></li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
</header>
<!--  -->
<?php
      while ($key=$res->fetch()) {
        
      if($key->photo_profile==null || $key->photo_profile==''){
      $url_image = "default.png";
      } else {
      $url_image = $key->photo_profile;
      }
        
?>
<div id="edit-profile" class="box no-padding wrapper mb-50 tab-content" style="display:block;margin-top: 70px;">
    <div id="edit-1" class="box no-padding right form" style="width: inherit;">
        <div id="profile_picture" class="brandon small line-bottom pb-10">FOTO PROFIL</div>
        <div class="box no-padding mt-20">

            <form id="imageform" name="form_picupload" class="form" method="post" enctype="multipart/form-data" action="ajaximage_profile.php">
                <div class="left w-150">

                    <div id='preview' class="pic" style="width:316px; height:210px;">
                        <a href="" class="ng-isolate-scope">
                            <img style="height:210px;" class="cover-img" title="Eventorso Pic" src="image_upload/<?php echo $url_image;?>">
                        </a>
                    </div>

                    <!-- <p class="gray italic">Dimensi 250x250 pixels JPEG or PNG files only</p> -->

                    <div style="margin-top: 0px;" class="fileUpload btn btn-primary">
                        <span>Ganti Foto</span>
                        <input id="photoimg" name="photoimg" type="file" class="upload" />
                    </div>

                      <!-- <div id='preview'></div> -->
                </div>
            </form>

        </div>
                        <div id="business_detail" class="brandon small line-bottom pb-10 mt-30">INFO LENGKAP BISNIS USAHA</div>

<form class="form" name="form_login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <!-- <form name="businessDetail" class="ng-pristine ng-valid ng-valid-required"> -->
                            <div class="row mt-10">
                                <label>
                                    <span class="form-title">NAMA BISNIS USAHA</span>
                                    <input name="pbusname" value="<?php echo $key->business_name;?>" class="ng-pristine ng-valid ng-valid-required">
                                </label>
                                <p class="form-msg">Nama bisnis usaha tidak bleh kosong</p>
                            </div>


                            <div class="row mt-10">
                                <label>
                                    <span class="form-title">JENIS LAYANAN BISNIS USAHA</span>
                                    <input name="pservice" value="<?php echo $key->service_name;?>" class="ng-pristine ng-valid ng-valid-required" disabled>
                                </label>
                                <!-- <p class="form-msg">Business name cannot be empty</p> -->
                            </div>

                            <div class="row mt-10">
                                <label>
                                    <span class="form-title">NAMA PEMILIK BISNIS USAHA</span>
                                    <input name="pfullname" value="<?php echo $key->fullname;?>" class="ng-pristine ng-valid ng-valid-required">
                                </label>
                                <p class="form-msg">Nama Pemilik tidak boleh kosong</p>
                            </div>

                            <div class="row">
                                <label>
                                    <span class="form-title">INFORMASI TENTANG BISNIS USAHA</span>
                                    <textarea name="pabout" bs-maxlength="500" class="ng-pristine ng-valid" placeholder="Ceritakan tentang bisnis usaha anda"><?php echo $key->business_about;?></textarea>
                                </label>
                                <p class="form-input-desc-absolute ng-binding">500 characters left</p>
                            </div>
                            <div class="row">
                                <label>
                                    <span class="form-title">ALAMAT BISNIS USAHA</span>
                                    <textarea name="paddress" class="ng-pristine ng-valid" placeholder="Cantumkan alamat lengkap bisnis usaha anda"><?php echo $key->business_address;?></textarea>
                                </label>
                            </div>
                            <div class="row fixed">
                                <div class="fixed-l relative w-180">
                                    <label>
                                        <span class="form-title">NEGARA</span>
                                    </label>
                                    <div class="box-select plain long thicker georgia left" ng-init="country='100';countryIso='ID'">
                                        <select name="country" ng-model="country" required="" class="ng-pristine ng-valid ng-valid-required">
                                            <option value="1">Indonesia</option>
                                        </select>
                                    </div>
                                    <p class="form-msg form-msg-0">Kolom Negara tidak boleh kosong</p>
                                </div>
                                <div class="fixed-r relative w-560">
                                    <label>
                                        <span class="form-title">KOTA</span>
                                    </label>

                    
                    <div style="width: 100%;" class="box-select plain thicker georgia fixed-l">
                        <select name="pcity" class="ng-pristine ng-valid ng-valid-required">
                        <?php
                                  $data_city=array("");
                                  $query_city="SELECT * FROM tb_cities ORDER BY city_name";
                                  $res_city=$db->fetch_multiple_rows($data_city,$query_city);
                                  // echo "<option value='0'>Select City</option>";
                                    while ($key_city=$res_city->fetch()) {
                                        if($key_city->city_name==$key->city_name){
                                            ?><option value="<?php echo $key_city->id;?>" class="red" selected><?php echo $key_city->city_name;?></option><?php
                                        }else{  
                                            ?><option value="<?php echo $key_city->id;?>" class="red"><?php echo $key_city->city_name;?></option><?php
                                        }
                                    }
                        ?>
                        </select>
                    </div>

                                    <ul class="dropdown-menu ng-isolate-scope ng-hide" style="top:px;left:px" id="typeahead-00A-5032"osition="position">
</ul>
                                    <p class="form-msg form-msg-0">Kolom Kota tidak bleh kosong</p>
                                </div>
                            </div>
                            <div class="row w-180">
                                <label class="block">
                                    <span class="form-title">Kode Pos / Zip code</span>
                                    <input name="pzip" value="<?php echo $key->area_code;?>" class="ng-pristine ng-valid">
                                </label>
                            </div>


                            <div class="row w-180">
                                <label class="block">
                                    <span class="form-title">NO TELEPON / SELULER</span>
                                    <input name="pmobile" value="<?php echo $key->mobile_phone;?>" class="ng-pristine ng-valid">
                                </label>
                            </div>

                            
  <div>
    <button type="submit" name="submit" class="btn with-border w-130">SIMPAN</button>
  </div>
</form>
                
                    </div>
                </div>
<?php
}
?>
<!--  -->

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