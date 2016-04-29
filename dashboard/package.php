<!DOCTYPE HTML>
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
				

    <header id="header2" class="l-header2 pos-fixed new">

    <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11">
            <a target="_top" class="bs_logo nohover left-none" href="#" title=""></a>
            <a target="_top" href="#">All Vendors</a>
            <a target="_top" href="#">Top Equipment</a>
        </nav>
        <nav ng-cloak id="sub-menu-not-login" class="right f-brandon f-td-n">
            <a href="http://www.bridestory.com/vendors-home" class="ng-cloak register b-vendor brandon bold">Become a vendor</a>
  <a href="http://www.bridestory.com/vendors-home" class="ng-cloak brandon bold">Login</a>
</nav>

</div>
</header>	

<header id="subheader2" style="height: 0px;" class="l-header2 new pos-fixed" ng-controller="vendorSearchController as vendorSearch">
            <div id="dashboard-pagesub2" class="box no-padding line-bottom bg2-white" js-fixed-on-scroll="#subheader-container" fos-liveupdate="" fos-offset="#subheader-dashboard">
                <div class="box wrapper no-padding">
                    <ul class="menu_tab_new">
                        <li class="right mt_7 nohover">
                            <a class="btn btn-shorter with-border btn-small" href="#" target="_self">Explore Vendor</a><!-- <span ng-show="0 == 0">unpublished</span> -->
                        </li>
                        <li js-tab="" tab-anchor="#profile"><a href="#">My Profile</a></li>
                        <li js-tab="" tab-anchor="#brosur" class="is-active"><a href="#">My Brosur</a></li>
                        <li js-tab="" tab-anchor="#info"><a href="#info">Info</a>
                            <span class="icon-alert-red-small ml-3" ng-show="vpStrengthCtrl.vendormeta().faqCount == 0" rel="tooltip-tipsy-top" title="You need to complete your business information"></span>
                        </li>
<!--                         <li js-tab="" tab-anchor="#profile-strength">
                            <a href="#profile-strength">Profile Strength
                                <div class="progress right ml-10 progress-border-2 progress-mini" ng-class="{'is-loading' : !profileStrengthReady()}">
                                    <div class="progress-current" ng-style="{'width' : profileStrengthProgress() + '%'}" style="width: 5.26316%;"><span class="gray ng-binding">&nbsp;&nbsp;5%</span></div>
                                </div>
                            </a>
                        </li> -->
                        <!-- <li js-tab="" tab-anchor="#badges"><a href="#badges">Badges</a></li> -->
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
</header>
<!--  -->


<!--  -->
  <div class="box wrapper no-padding mt-30 mb-20" ng-controller="vendorListControllers as vendorList" infinite-scroll="vendorList.nextPage()" infinite-scroll-immediate-check="false" infinite-scroll-distance="1" infinite-scroll-disabled="fetching || end" ng-init="vendorList.initUser(1)">
<!--     <div class="vendor-head">
        <h1 class="text center f-lspx-1 mb-20">
                      Showing Results For
                          <span>all budget range.</span>
        </h1>
       

        <div class="view-grid">
                      <div class="box-select small ml-15" ng-init="sort='featured';direction='';">
              <select ng-cloak id="subject"  name="subject" ng-model="sortParam" ng-change="vendorList.sort()">
                <option value="featured" selected>Featured</option>
                <option value="popularity" >Most Popular</option>
                <option value="reviewRate" >Highest Rated</option>
                <option value="alphabetical_asc" >Alphabetical (A-Z)</option>
                <option value="alphabetical_desc" >Alphabetical (Z-A)</option>
              </select>
            </div>
        </div>
    </div> -->

    <div ng-show="!hideProjectPagination" class="box mb-30">
                  <div class="left_pos l20" style="left:0px;">
                      <div class="box-select small category left">
                          <select id="" name="category" ng-model="myProjectsCtrl.category" ng-options="category.name for category in myProjectsCtrl.categoryOptions" ng-change="myProjectsCtrl.getListing()" class="ng-pristine ng-valid"><option value="0" selected="selected" label="Catering">Catering</option></select>
                      </div>
                      <div class="box-select small view left ml-10">
                          <select id="" name="view" ng-model="myProjectsCtrl.limit" ng-options="limit.name for limit in myProjectsCtrl.limitOptions" ng-change="myProjectsCtrl.limitChange()" class="ng-pristine ng-valid"><option value="0" selected="selected" label="View 12">View 12</option><option value="1" label="view 24">view 24</option><option value="2" label="view 36">view 36</option></select>
                      </div>
                  </div>
                  <div class="right_pos r20" style="right:0px;">
                      <a href="https://www.bridestory.com/dashboard/add-project"><button class="btn with-border right btn-short">Add New Project</button></a>
                  </div>

                  <div>
                  <div class="center_pos georgia_small">Show page <em class="ng-binding">1 of 1</em></div>

                  </div>
              </div>
<!-- START GRID -->
    <div class="vendor-grid mt-20 box no-padding" ng-init='vendorList.setResetFilter([])'>
<!-- BLOCK GRID -->
      <div class="box-grid" >
        <div class="view_share">
          <!-- Love -->
        <span class="cat_city"><a href="#" target="_self">Catering - Jakarta</a><span class="ico-bs-view" ng-init="view_795290=1991;"><span>2k</span></span></span>
        </div>
        <!-- Membership -->
        <span></span>
        <div class="pic">
          <a ng-href="#" target="_blank">
            <img class="cld-hidpi" data-src="web/images/logo_manu.png" alt="Steak At Home" title="Steak At Home">
          </a>
        </div>
        <h2 class="name" ng-cloak><a href="#" target="_blank">Steak At Home</a></h2>
        <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('steak-at-home')"><i class="icon-price"></i>View Pricelist</a>
      </div>
<!-- BLOCK GRID -->
    <div class="box-grid" >
      <div class="view_share">
          <!-- Love -->
        <span class="cat_city"><a href="#" target="_self">Sound And Music - Jakarta</a><span class="ico-bs-view" ng-init="view_795290=1991;"><span>2k</span></span></span>
        </div>
    <!-- Membership -->
    <span></span>
    <div class="pic">
      <a ng-href="http://www.bridestory.com/the-herdis" target="_blank">
        <img class="cld-hidpi" data-src="web/images/logo_banana_v.png" alt="The Herdi's" title="The Herdi's">
      </a>
    </div>
    <h2 class="name" ng-cloak><a href="http://www.bridestory.com/the-herdis" target="_blank">The Herdi's</a></h2>
    <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-herdis')"><i class="icon-price"></i>View Pricelist</a>
  </div>
  <!-- BLOCK GRID -->
    <div class="box-grid" >
      <div class="view_share">
          <!-- Love -->
        <span class="cat_city"><a href="#" target="_self">Catering - Jakarta</a><span class="ico-bs-view" ng-init="view_795290=1991;"><span>2k</span></span></span>
        </div>
    <!-- Membership -->
    <span></span>
    <div class="pic">
      <a ng-href="http://www.bridestory.com/the-herdis" target="_blank">
        <img class="cld-hidpi" data-src="web/images/logo_manu.png" alt="The Herdi's" title="The Herdi's">
      </a>
    </div>
    <h2 class="name" ng-cloak><a href="http://www.bridestory.com/the-herdis" target="_blank">The Herdi's</a></h2>
    <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-herdis')"><i class="icon-price"></i>View Pricelist</a>
  </div>
  <!-- BLOCK GRID -->
    <div class="box-grid" >
      <div class="view_share">
          <!-- Love -->
        <span class="cat_city"><a href="#" target="_self">Sound And Music - Jakarta</a><span class="ico-bs-view" ng-init="view_795290=1991;"><span>2k</span></span></span>
        </div>
    <!-- Membership -->
    <span></span>
    <div class="pic">
      <a ng-href="http://www.bridestory.com/the-herdis" target="_blank">
        <img class="cld-hidpi" data-src="web/images/logo_banana_v.png" alt="The Herdi's" title="The Herdi's">
      </a>
    </div>
    <h2 class="name" ng-cloak><a href="http://www.bridestory.com/the-herdis" target="_blank">The Herdi's</a></h2>
    <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-herdis')"><i class="icon-price"></i>View Pricelist</a>
  </div>
  <!-- BLOCK GRID -->
    <div class="box-grid" >
      <div class="view_share">
          <!-- Love -->
        <span class="cat_city"><a href="#" target="_self">Catering - Jakarta</a><span class="ico-bs-view" ng-init="view_795290=1991;"><span>2k</span></span></span>
        </div>
    <!-- Membership -->
    <span></span>
    <div class="pic">
      <a ng-href="http://www.bridestory.com/the-herdis" target="_blank">
        <img class="cld-hidpi" data-src="web/images/logo_manu.png" alt="The Herdi's" title="The Herdi's">
      </a>
    </div>
    <h2 class="name" ng-cloak><a href="http://www.bridestory.com/the-herdis" target="_blank">The Herdi's</a></h2>
    <a class="btn btn-stronker btn-block" ng-click="vendorList.viewPricelist('the-herdis')"><i class="icon-price"></i>View Pricelist</a>
  </div>
<!-- END BLOCK GRID -->
</div>
<!-- END GRID -->
</div>
  
<div class="bs_footer_categories pt-30 pb-30">
  <div class="wrapper of-auto">
    <h5 class="center mb-20">Popular Categories</h5>
    <ul>
      <li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/jakarta/catering">Wedding Catering Jakarta</a></li>
            <li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/bali/catering">Wedding Catering Bali</a></li>
            <li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/bandung/catering">Wedding Catering Bandung</a></li>
            <li><a target="_self" class="f-classic" href="http://www.bridestory.com/indonesia/surabaya/catering">Wedding Catering Surabaya</a></li>
    </ul>
  </div>
</div>
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