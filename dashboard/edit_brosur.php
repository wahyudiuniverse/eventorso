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
                                          post_id_service:$('#service').val(),
                                          post_description:$('#description').val(),
                                          post_price:$('#price').val()
                        },
                        function(r){
                            $('#upd_div').html("Last Updated: "+r);
                            $('#timer').html('Saved.. Data will be updated in next 10 secounds');
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

<div ng-view="" class="ng-scope"><section class="box wrapper with-border mb-50 ng-scope">
        <div class="box no-padding wrapper w-745">
            <div class="box no-padding">
            <h3 class="center">CREATE NEW BROSUR</h3>
        </div>

        <div class="box with-border center">
            <!-- <h5>we need to know who you are</h5> -->
            <!-- <p class="classic">Please fill in the form with valid information so we can verify your account.<br>This information will not appear on your profile page.</p> -->
        </div>
        <div class="box w-600 no-padding mt-20 wrapper">


        <div class="box no-padding w-600 wrapper">
          
                    <div id="timer_upd_dev"><div id="timer">x Secs </div><div id="upd_div"> </div></div>
            <!-- <button name="submit" type="submit" class="btn with-border w-130 right">SAVE DRAF</button> -->
        </div>



<form class="form" method="post" enctype="multipart/form-data" action="ajaximage.php">
 <div class="row">
                    <label>
                        <span class="form-title icon-required">BROSUR NAME</span>
                        <!-- <span class="form-stitle">THIS IS NAME FOR VENDOR BUSINEES</span> -->
                        <input id="dstr" type="text" name="brosur_name" value="" class="ng-pristine ng-invalid ng-invalid-required">
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
                      <select id="service" name="categoryId" class="ng-pristine ng-valid ng-valid-required">
                        <option value="0" selected="selected" label="Catering">Catering</option>
                        <?php
                                  $datachecks=array("");
                                  $querychecks="SELECT * FROM tb_category_service ORDER BY service_name";
                                  $ress=$db->fetch_multiple_rows($datachecks,$querychecks);
                                  echo "<option value='0'>Select Service</option>";
                                    while ($key=$ress->fetch()) {
                                      ?>
                                      <option value="<?php echo $key->id;?>"><?php echo $key->service_name;?></option>
                                      <?php
                                    }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="row">
                    <label>
                        <span class="form-title icon-required">DESCRIPTION</span>
                        <!-- <span class="form-stitle">THIS IS NAME FOR VENDOR BUSINEES</span> -->
                      <textarea id="description" name="description" bs-maxlength="500" class="ng-pristine ng-valid"></textarea>  
                      </label>
                    <p class="form-msg ng-hide" ng-show="registerCtrl.errorFullName">Your name cannot be empty</p>
                    <p class="liveedit-answer ng-binding"></p>
                </div>

                <div class="row">
                    <label>
                        <span class="form-title icon-required">FIX PRICE</span>
                        <!-- <span class="form-stitle">This will be use for verification account business</span> -->  
                    <input id="price" class="fixed-r ng-dirty ng-invalid ng-invalid-required" type="text" name="mobile_phone" numbers-only="">
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