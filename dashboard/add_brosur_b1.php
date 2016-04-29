<!DOCTYPE HTML>
<?php
session_start();
require_once ("../config/config.php");

    $data=array("");
    $query="SELECT a.*, b.city_name FROM troopers a, tb_cities b WHERE a.id_city=b.id AND a.id='$_SESSION[eventorso_iduser]'";
    $res=$db->fetch_multiple_rows($data,$query);
    $count=$res->rowCount();

?>
<html ng-app="bridestoryApp">
	<head>
		<meta charset="UTF-8">
		<meta property="og:type" content="website" />

   
		<title>Wedding Vendors - Bridestory.com</title>
		<link rel="shortcut icon" href="http://www.bridestory.com/assets/images/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://www.bridestory.com/assets/images/apple-touch-icon.png" />
		<link rel="apple-touch-icon-precomposed" href="http://www.bridestory.com/assets/images/apple-touch-icon.png" />
		<link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.bridestory.com/register/vendor" >

		<link href="../web/css/application.css" version="desktop" method="normal" rel="stylesheet" type="text/css">
	    

</head>
	<body>
		<br>
				

    <header id="header2" class="l-header2 pos-fixed new" style="height:60px;">
    <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11" style="margin-top: 10px;">
            <a target="_top" class="bs_logo nohover left-none" href="#" title=""></a>
            <a target="_top" href="#">Top Vendors</a>
            <a target="_top" href="#">Top Equipment</a>
            <a target="_top" href="#">Guide Event</a>
        </nav>
        <nav style="margin-top: 10px;" id="sub-menu-not-login" class="right f-brandon f-td-n">

          <?php
            if(isset($_SESSION['eventorso_session'])){
              if($_SESSION['eventorso_level']=="0"){
?>
<ul id="sub-menu" class="right ng-scope" ng-if="(menuCtrl.isLogged() menuCtrl.isVerified())">
  <li class="pic">
    <img ng-src="http://www.bridestory.com/assets/samples/profile_default-small.gif" src="http://www.bridestory.com/assets/samples/profile_default-small.gif">
  </li>
  <li class="dropdown">
    <a ng-if="menuCtrl.isVendor()" ng-href="http://www.bridestory.com/dashboard/edit" target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="http://www.bridestory.com/dashboard/edit"><span class="ng-binding"><?php echo $_SESSION['eventorso_fullname'];?></span> <b class="bs-icon-down"></b></a>
    <ul class="dropdown-menu2" role="menu" aria-labelledby="profile">
      <div ng-if="menuCtrl.isVendor()" class="ng-scope">
        <li><a rel="nofollow" href="dashboard/profile.php" target="_self"><span class="bs-icon-menu-dashboard"></span>My Dashboard</a></li>
        <!-- <li><a target="_blank" href="http://www.bridestory.com/yudis-kitchen"><span class="bs-icon-menu-profile"></span>View My Profile</a></li> -->
        <!-- <li><a rel="nofollow" href="http://www.bridestory.com/dashboard/add-project" target="_self"><span class="bs-icon-menu-upload-project"></span>Upload New Project</a></li> -->
      </div><!-- end ngIf: menuCtrl.isVendor() -->
      <li class="divider"></li>
            <li><a rel="nofollow" ng-click="menuCtrl.naviLogout()" href="logout.php" target="_self"><span class="bs-icon-menu-logout2"></span>Logout</a></li>
          </ul>
  </li>
</ul>
<?php
              }else{

              ?>

<ul id="sub-menu" class="right ng-scope">
  <li class="pic">
    <img ng-src="http://www.bridestory.com/assets/samples/profile_default-small.gif" src="http://www.bridestory.com/assets/samples/profile_default-small.gif">
  </li>
  <li class="dropdown">
    <a target="_self" class="profile dropdown-toggle ng-scope" id="profile" href="#">
      <span class="ng-binding"><?php echo $_SESSION['eventorso_business_name'];?></span>
      <b class="bs-icon-down"></b>
    </a>

    <ul class="dropdown-menu2" role="menu" aria-labelledby="profile">
      <div ng-if="menuCtrl.isVendor()" class="ng-scope">
        <li><a rel="nofollow" href="dashboard/" target="_self"><span class="bs-icon-menu-dashboard"></span>My Dashboard</a></li>
        <li><a target="_blank" href="http://www.bridestory.com/yudis-kitchen"><span class="bs-icon-menu-profile"></span>View My Profile</a></li>
        <li><a rel="nofollow" href="http://www.bridestory.com/dashboard/add-project" target="_self"><span class="bs-icon-menu-upload-project"></span>Upload New Brosur</a></li>
      </div><!-- end ngIf: menuCtrl.isVendor() -->
      <li class="divider"></li>
            <li><a rel="nofollow" ng-click="menuCtrl.naviLogout()" href="logout.php" target="_self"><span class="bs-icon-menu-logout2"></span>Logout</a></li>
    </ul>
  </li>
</ul>
            <?php

              }
            }else{
              ?>
            <a href="register/vendor/" class="register b-vendor brandon bold">Become a vendor</a>
            <a href="login/" class="brandon bold">Login</a>
              <?php
            }
          ?>
        </nav>
    </div>
    </header>       

<header id="subheader2" class="l-header2 pos-fixed subheader-savedraft2 ng-scope">
    <div class="box no-sidepadding thin wrapper">
        <div class="main-search">
            <div class="box no-padding wrapper">
                <h3 class="left mr-20">Add New Project(s)</h3>
                                <h6 class="left f-s-11"><a href="https://www.bridestory.com/dashboard/projects">Back to my project(s)</a></h6>
                                <button class="btn btn-white right ml-10 w-130 is-disabled" ng-click="saveDraft()" ng-disabled="isSaveDisabled()" ng-class="{'is-disabled':isSaveDisabled()}" disabled="disabled">SAVE DRAFT</button>
                                <div class="right f-classic f-s-12 "><i>Last saved <span am-time-ago="data.lastSaved">13 minutes ago</span></i></div>
                            </div>
        </div>
    </div>
</header>
<!--  -->
<div ng-view="" class="ng-scope"><header id="subheader2" class="l-header2 pos-fixed subheader-savedraft2 ng-scope">
    <div class="box no-sidepadding thin wrapper">
        <div class="main-search">
            <div class="box no-padding wrapper">
                <h3 class="left mr-20">Add New Project(s)</h3>
                                <h6 class="left f-s-11"><a href="https://www.bridestory.com/dashboard/projects">Back to my project(s)</a></h6>
                                <button class="btn btn-white right ml-10 w-130 is-disabled" ng-click="saveDraft()" ng-disabled="isSaveDisabled()" ng-class="{'is-disabled':isSaveDisabled()}" disabled="disabled">SAVE DRAFT</button>
                                <div class="right f-classic f-s-12 "><i>Last saved <span am-time-ago="data.lastSaved">10 minutes ago</span></i></div>
                            </div>
        </div>
    </div>
</header>    <section class="box wrapper with-border top_wrapper mb-50 ng-scope">
        <div class="pt-20 pb-30">
            <table class="steps ">
    <tbody><tr>
                                            <td class="active">
                    <p>The Basics</p>
                </td>
                                            <td>
                    <p>Upload Photos &amp; Videos</p>
                </td>
                                            <td>
                    <p>Vendor Details</p>
                </td>
                                            <td>
                    <p>Tag Vendors</p>
                </td>
                                        </tr>
</tbody></table>        </div>
        <div class="box with-border center">
            <p class="classic">Basic information about the project</p>
        </div>
        <div class="box w-800 rwd-800 wrapper">
        <form check-dirty="" name="form_basic" ng-submit="basicCtrl.process_basic(form_basic)" novalidate="" class="ng-pristine ng-invalid ng-invalid-required">
            <div class="form" check-dirty="" novalidate="" bs-custom-select="">
    <div class="row" ng-init="getMyCategories()">
        <label><span class="form-title icon-required">Select Service Category</span>
        <div class="select" ng-class="{'form-error':(error.indexOf('categoryId') > -1)}">
            <select name="categoryId" required="" ng-model="data.categoryId" ng-options="category.id as category.name for category in mycategories" class="ng-pristine ng-valid ng-valid-required"><option value="0" selected="selected" label="Catering">Catering</option></select>
        </div></label>
        <p class="form-msg">You must select one of the categories</p>
    </div>

    <div class="row">
        <label><span class="form-title">City</span>
            <div bs-select="selectedCity($selected)" class="new-select ng-isolate-scope">
                <input type="text" name="city" bs-select-selected="searchCity($keyword)" placeholder="e.g., Nusa Dua Beach, Bali" bs-select-display-keyword="name" autocomplete="off" class="ng-isolate-scope">
                <ul bs-select-selection="shared.cities" class="ng-isolate-scope" style="display: none;">
                    <!-- ngRepeat: city in bsSelectOptions -->
                </ul>
            </div>
            </label></div>
    <div class="row" ng-class="error.indexOf('title') > -1 || nameErr ? 'form-error':''">
        <label><span class="form-title icon-required">Project Title</span>
        <input type="text" name="title" ng-model="data.name" required="" class="ng-pristine ng-invalid ng-invalid-required"></label>
        <p ng-hide="nameErr" class="form-msg">This field can not be empty</p>
        <p ng-show="nameErr" class="form-msg ng-hide">This field has invalid character</p>
    </div>
       <div class="row pb-30">
        <label><span class="form-title">Describe your project</span>
        <textarea ng-model="data.description" input-maxlength="3000" class="ng-pristine ng-valid" ng-trim="false"></textarea></label>
        <p class="form-input-desc gray italic ng-binding">3000 characters left</p>
    </div>
</div>

<script type="text/ng-template" id="basic-search-results.html">
  <p class="ac-simple f-classic f-tcap f-s-10">
   <span bind-html-unsafe="match.model.displayName | typeaheadHighlight:query"></span>
 </p>
</script>

<script type="text/ng-template" id="basic-city-search-results.html">
  <p class="ac-simple">
   <span bind-html-unsafe="match.model | typeaheadHighlight:query"></span>
 </p>
</script>


<script type="text/ng-template" id="basic-city-search-add-results.html">
  <p class="ac-simple f-classic f-tcap f-s-10">
   <span bind-html-unsafe="match.model.displayName | typeaheadHighlight:query"></span>
 </p>
</script>
            <button class="btn with-border w-130 right" type="submit">NEXT</button>
        </form>
        </div>
    </section></div>
<!--  -->
<footer class="footer">
    <div class="box wrapper no-padding">
        <div class="center footer-center pt2-10">
            <ul>
                <li><a href="http://www.bridestory.com/about-us" target="_self">About</a></li>
                <!-- <li class="ml-10"><a href="http://careers.bridestory.com/" target="_self" rel="nofollow">Careers</a></li> -->
                <li class="ml-10"><a href="http://www.bridestory.com/contact-us" target="_self">Contact</a></li>
                <li class="ml-10"><span>|</span></li>
                <!-- <li class="ml-10"><a href="http://www.bridestory.com/blog" target="_self">Blog</a></li> -->
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="http://www.bridestory.com/app" target="_self">Eventorso App</a></li>
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="http://www.bridestory.com/bridestory-pro" target="_self">Eventorso pro</a></li>
                <!-- <li class="ml-10"><a href="http://www.bridestory.com/business-blog" target="_self">Business Blog</a></li> -->
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10"><a href="http://support.bridestory.com" target="_self">Help Center</a></li>
                <li class="ml-10"><span>|</span></li>
                <li class="ml-10 relative w-80">
                    <div style="position: absolute; left: -15px; display: block; width: 100px; top: -14px;">
                        <a class="facebook-footer" href="http://www.facebook.com/#" target="_blank" rel="nofollow"></a>
                        <a class="twitter-footer" href="http://twitter.com/#" target="_blank" rel="nofollow"></a>
                        <a class="instagram-footer" href="http://instagram.com/bananahuis" target="_blank" rel="nofollow"></a>
                        <a class="pinterest-footer" href="http://pinterest.com/#" target="_blank" rel="nofollow"> </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <ul class="center copy">
            <li><a href="http://www.bridestory.com/privacy-policy" target="_self" rel="nofollow">Privacy Policy</a></li>
            <li><a href="http://www.bridestory.com/terms-conditions" target="_self" rel="nofollow">Terms &amp; conditions</a></li>
            <li><a href="http://www.bridestory.com/sitemap" target="_self">Sitemap</a></li>
            <li>copyright &copy; 2016 Banana Creative Huis. all rights reserved</li>
        </ul>
    </div>
</footer>	
                    <div class="sticky-tutorial-inspiration ng-cloak" is-any-button-inspiration ng-show="isShown()">
    <div class="box no-padding center relative">
        <a href="#" class="icon-close-white-smaller absolute-topright-10" ng-click="close()"></a>
        <span class="brandon f-s-12 f-ls-100 f-lh-150 f-c-white f-ts-bottom inline-block mt-40">
            Save images you love<br/>
            to your inspiration board
        </span>
        <div class="clear"></div>
        <a href="#" class="btn btn-smallest mt-10 f-c-medgrey bg-white" ng-click="startInspirationTutorial()">Learn More</a>
    </div>
</div>
</body>
</html>