<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");


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
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet) - 1;
    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max)];
    }
    return $token;
}

$token = getToken(20);
$_SESSION['eventorso_token']=$token;

function PublishBrosur(){
    
    $reg = new Database();
    $token=$_SESSION['eventorso_token'];
    $value = $reg->update_brosur_publish($token);
    if($value=="true"){

    header("location:brosur.php");
    }else{
    echo $value;
    }
}

?>

<html ng-app="bridestoryApp">
	<head>
		<meta charset="UTF-8">
		<meta property="og:type" content="website" />

   
    <title>Event Market Place</title>
    <meta charset="UTF-8">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link href="../web/css/application.css" type="text/css" version="desktop" method="normal" rel="stylesheet">
    <link href="../web/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>

    <link href="../web/css/css.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

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

<style>
.checkbox {
  display: inline-block;
  cursor: pointer;
  font-size: 13px; margin-right:10px; line-height:18px;
}
input[type=checkbox] {
 display:none;  
}
.checkbox:before {
  content: "";
  display: inline-block;
  width: 18px;
  height: 18px;
  vertical-align:middle;
  background-color: #0088cc;
  color: #f3f3f3;
  text-align: center;
  box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8); 
  border-radius: 3px;
}
input[type=checkbox]:checked + .checkbox:before {
  content: "\2713";
  text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
  font-size: 15px;
}
</style>


	    <script type="text/javascript" src="../web/js/jquery.min.js"></script>
        <script type="text/javascript" src="../web/js/script.js"></script>

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    timePicker(5); // call the function and 10 represent number of seconds interval
                });
            </script>
            <script>
                var s;

                function timePicker(vr) {
// function for count down timer...
                    if (vr > 0)
                    {
                        if (vr > 1) {
                              $('#timer').html('Data will be updated in next '+ vr+' secounds');
                          
                        } else {
                          
                              $('#timer').html('Data will be updated in next 1 secound');
                        }
                        vr--;
                        s = setTimeout('timePicker(' + vr + ')', 1000);
                    } else {
                        clearInterval(s);
                        // post data after 10 seconds....
                        $.post('data.php',{post_name:$('#dstr').val(),
                                          post_id_sub_service:$('#subservice').val(),
                                          post_capacity:$('#kapasitas').val(),
                                          post_description:$('#description').val(),
                                          post_durasi:$('#durasi').val(),
                                          post_overtime:$('#overtime').val(),
                                          post_price:$('#price').val()
                        },
                        function(r){
                            $('#upd_div').html("Last Updated: "+r);
                            $('#timer').html('Saved to Draf..');
                            s = setTimeout('timePicker(' + 5 + ')', 5000);
                            return false;
                            
                        });
                    }
                }
            </script>

<!-- ACTION CLICK PUBLISH -->

 <script type="text/javascript">
        function OnClickButton () {
          $.post('data.php',{post_name:$('#dstr').val(),
                                          post_id_service:$('#service').val(),
                                          post_description:$('#description').val(),
                                          post_price:$('#price').val()
                        });
            // alert ("You clicked on the button!");
            window.location.assign("brosur.php"); 
        }
    </script>


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

    $('#photoimg2').live('change', function(){
        $("#preview2").html('');
        $("#preview2").html('<img src="loader.gif" alt="Uploading...."/>');
        $("#imageform2").ajaxForm({
          target: '#preview2'
        }).submit();
    });

    $('#photoimg3').live('change', function(){
        $("#preview3").html('');
        $("#preview3").html('<img src="loader.gif" alt="Uploading...."/>');
        $("#imageform3").ajaxForm({
          target: '#preview3'
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
            <li class="pic"><img src="../web/images/pic.jpg"></li>
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

<div ng-view="" class="ng-scope"><section class="box wrapper with-border mb-50 mt-30 ng-scope">
        <div class="box no-padding wrapper w-745">
            <div class="box no-padding">
            <h3 class="center">BUAT BROSUR BARU</h3>
        </div>

        <div class="box w-600 no-padding mt-20 wrapper">


        <div class="box no-padding w-600 wrapper">
                    
                    <div id="timer_upd_dev">
                      <div id="timer">x Secs </div>
                      <!-- <div id="upd_div"></div> -->
                    </div>

        </div>



<form class="form" method="post" enctype="multipart/form-data" action="ajaximage.php">
 <div class="row">
                    <label>
                        <span class="form-title icon-required">BROSUR NAME</span>
                        <!-- <span class="form-stitle">THIS IS NAME FOR VENDOR BUSINEES</span> -->
                        <input id="dstr" type="text" name="brosur_name" value="" class="ng-pristine ng-invalid ng-invalid-required" placeholder="Misal : Ruang Anggrek">
                    </label>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.errorFullName">Your name cannot be empty</p>
                    <p class="liveedit-answer ng-binding"></p>
                </div>
            
                <div class="row fixed-2column" ng-class="((registerCtrl.errorMobilePhone &amp;&amp; !form_account.mobile_phone.$valid) ? 'form-error' : '')">
                    <label>
                        <span class="form-title icon-required">SERVICE CATEGORY</span>
                        <!-- <span class="form-stitle">THIS LOCATION YOUR BUSINESS</span> -->
                    </label>

                    <div class="select">
                      <select id="subservice" name="categoryId" class="ng-pristine ng-valid ng-valid-required">
                        <?php
                                  $datachecks=array("");
                                  $querychecks="SELECT * FROM tb_category_service_sub WHERE id_category='7' ORDER BY sub_name ";
                                  $ress=$db->fetch_multiple_rows($datachecks,$querychecks);
                                  echo "<option value='0'>Select Service</option>";
                                    while ($key=$ress->fetch()) {
                                      ?>
                                      <option value="<?php echo $key->id;?>"><?php echo $key->sub_name;?></option>
                                      <?php
                                    }
                        ?>
                      </select>
                    </div>
                </div>


                <div class="row">
                    <label>
                        <span class="form-title icon-required">KAPASITAS</span>
                        <!-- <span class="form-stitle">This will be use for verification account business</span> -->  
                    <input id="kapasitas" class="fixed-r ng-dirty ng-invalid ng-invalid-required" type="text" name="kapasitas" placeholder="Kapasitas Maximum Ruangan">
                </div>

                <div class="row">
                    <label>
                        <span class="form-title icon-required">DESCRIPTION</span>
                        <!-- <span class="form-stitle">THIS IS NAME FOR VENDOR BUSINEES</span> -->
                      <textarea id="description" name="description" bs-maxlength="500" class="ng-pristine ng-valid" placeholder="Isi Informasi Selengkap-lengkapnya"></textarea>  
                      </label>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.errorFullName">Your name cannot be empty</p>
                    <p class="liveedit-answer ng-binding"></p>
                </div>


                <div class="row">
                    <label>
                        <span class="form-title icon-required">SARANA LAIN</span>
  
      <div style="padding-bottom:10px;">
        <input id="option1" type="checkbox" >
        <label class="checkbox" for="option1" style="width:170px;"> In House Catering</label>


        <input id="option2" type="checkbox" >
        <label class="checkbox" for="option2" style="width:170px;"> Layar </label>


        <input id="option3" type="checkbox" >
        <label class="checkbox" for="option3" style="width:170px;"> Mic & Sound System</label>
      </div>
      

      <div style="padding-bottom:10px;">
        <input id="option4" type="checkbox" >
        <label class="checkbox" for="option4" style="width:170px;"> Outdoor Space</label>


        <input id="option5" type="checkbox" >
        <label class="checkbox" for="option5" style="width:170px;"> Projector</label>


        <input id="option6" type="checkbox" >
        <label class="checkbox" for="option6" style="width:170px;"> Staff & Manpower</label>
      </div>

      <div style="padding-bottom:10px;">
        <input id="option7" type="checkbox" >
        <label class="checkbox" for="option7" style="width:170px;"> Stage</label>


        <input id="option8" type="checkbox" >
        <label class="checkbox" for="option8" style="width:170px;"> Whiteboard</label>


        <input id="option9" type="checkbox" >
        <label class="checkbox" for="option9" style="width:170px;"> Wifi</label>
      </div>

<br>
                <div class="row">
                    <label>
                        <span class="form-title icon-required">DURASI</span>
                        <!-- <span class="form-stitle">This will be use for verification account business</span> -->  
                    <input id="durasi" class="fixed-r ng-dirty ng-invalid ng-invalid-required" type="text" name="durasi" placeholder="Cantumkan Lama Durasi Penyewaan (contoh: Max 5 Jam)">
                </div>

                <div class="row">
                    <label>
                        <span class="form-title icon-required">OVERTIME</span>
                        <!-- <span class="form-stitle">This will be use for verification account business</span> -->  
                    <input id="overtime" class="fixed-r ng-dirty ng-invalid ng-invalid-required" type="text" name="overtime" placeholder="Cantumkan Biaya Overtime, Jika Tidak Kosongkan">
                </div>

                <div class="row">
                    <label>
                        <span class="form-title icon-required">FIX PRICE</span>
                        <!-- <span class="form-stitle">This will be use for verification account business</span> -->  
                    <input id="price" class="fixed-r ng-dirty ng-invalid ng-invalid-required" type="text" name="fix_price" placeholder="Cantumkan Harga Fix">
                </div>
</form>


<div class="box no-padding ng-scope" ng-controller="fileUploadControllers as fileUploadCtrl">
        <div class="box thin-vertical line-bottom">
        <h5>PHOTOS <span class="icon-ask-pink" rel="tooltip-tipsy-top" title="JPEG or PNG files. Minimum 680 px width and maximum 8 MB file size."></span></h5>
    </div>

    <div id="sortable-container" class="box no-padding mt-20 selection-upload-files selection-draggable sortable-row">


<form id="imageform" class="form" method="post" enctype="multipart/form-data" action="ajaximage.php">
               <!-- UPLOAD IMAGE ONE -->
                    <div as-sortable="sortableOptions" ng-model="photos" class="ng-scope ng-pristine ng-valid">
                      <div id="hidde1" class="sel-item ng-scope as-sortable-item"> 
                        <div class="sel-item bg-white-i ng-hide" style="text-align:center" ng-show="item.is_loading">
                          <div class="progress-wrapper">
                            <div class="progress progress-border-2 progress-w-135">
                              <div class="progress-current" ng-style="{'width' : item.caption}"></div>
                            </div>
                          </div>
                        </div>

                        <div ng-hide="item.is_loading" as-sortable-item-handle="" ng-if="item.error==null" class="sel-item ng-scope as-sortable-item-handle" ng-class="{'is-selected': item.is_selected}" ng-click="item['is_selected'] = !item.is_selected">
                          <div class="sel-item-action">
                            <div style="margin-top: 55px;" class="fileUpload btn btn-primary">
                              <span>Upload</span>
                              <input id="photoimg" name="photoimg" type="file" class="upload" />
                            </div>
                          </div>
                          <img src="image_upload/load_image.png">
                        </div>
                      </div>

                      <div id='preview'></div>
                    </div>
            </form>   


<form id="imageform2" class="form" method="post" enctype="multipart/form-data" action="ajaximage2.php">
<!-- UPLOAD IMAGE TWO -->
                    <div as-sortable="sortableOptions" ng-model="photos" class="ng-scope ng-pristine ng-valid">
                      <div id="hidde2" class="sel-item ng-scope as-sortable-item"> 
                        <div class="sel-item bg-white-i ng-hide" style="text-align:center" ng-show="item.is_loading">
                          <div class="progress-wrapper">
                            <div class="progress progress-border-2 progress-w-135">
                              <div class="progress-current" ng-style="{'width' : item.caption}"></div>
                            </div>
                          </div>
                        </div>

                        <div class="sel-item ng-scope as-sortable-item-handle">
                          <div class="sel-item-action">
                            <div style="margin-top: 55px;" class="fileUpload btn btn-primary">
                              <span>Upload</span>
                              <input id="photoimg2" name="photoimg2" type="file" class="upload" />
                            </div>
                          </div>
                          <img src="image_upload/load_image.png">
                        </div>
                      </div>

                      <div id='preview2'></div>
                    </div>
</form>


<form id="imageform3" class="form" method="post" enctype="multipart/form-data" action="ajaximage3.php">
<!-- UPLOAD IMAGE TREE -->
                    <div class="ng-scope ng-pristine ng-valid">
                      <div id="hidde3" class="sel-item ng-scope as-sortable-item"> 
                        <div class="sel-item bg-white-i ng-hide" style="text-align:center">
                          <div class="progress-wrapper">
                            <div class="progress progress-border-2 progress-w-135">
                              <div class="progress-current" ng-style="{'width' : item.caption}"></div>
                            </div>
                          </div>
                        </div>

                        <div class="sel-item ng-scope as-sortable-item-handle" ng-class="{'is-selected': item.is_selected}" ng-click="item['is_selected'] = !item.is_selected">
                          <div class="sel-item-action">
                            <div style="margin-top: 55px;" class="fileUpload btn btn-primary">
                              <span>Upload</span>
                              <input id="photoimg3" name="photoimg3" type="file" class="upload" />
                            </div>
                          </div>
                          <img src="image_upload/load_image.png">
                        </div>
                      </div>

                      <div id='preview3'></div>
                    </div>
</form>


    </div>
</div>



  <div class="box no-padding w-600 wrapper">
            <button onclick="OnClickButton()" class="btn with-border w-130 right">PUBLISH</button>
        </div>
        </div>

    </div></section></div>


</body>
</html>