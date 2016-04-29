<!DOCTYPE HTML>
<html ng-app="bridestoryApp">
	<head>

		<meta charset="UTF-8">
		<meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="keywords" content="wedding catering, katering kawinan" />
		<meta name="description" content="" />
		<title>Event Vendor Directory | Eventorso </title>
		<!-- <link rel="shortcut icon" href="http://www.bridestory.com/assets/images/favicon.ico" type="image/x-icon" /> -->
		<!-- <link rel="apple-touch-icon" href="http://www.bridestory.com/assets/images/apple-touch-icon.png" /> -->
		<!-- <link rel="apple-touch-icon-precomposed" href="http://www.bridestory.com/assets/images/apple-touch-icon.png" /> -->
		<!-- <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.bridestory.com/indonesia/all-cities/catering?page=5" > -->
    <link href="../web/css/application.css" version="desktop" method="normal" rel="stylesheet" type="text/css">
    <link href="../web/css/bootstrap.css" rel="stylesheet">
<!-- <script src="web/js/api.js"></script> -->
  </head>
	
  <body>
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
<!-- <header id="subheader2" class="l-header2 new pos-fixed" ng-controller="vendorSearchController as vendorSearch">
 <div class="box no-padding wrapper" id="introstep1">
  <div class="introstepoverlay" style="display:none"></div>
      <div ng-init="vendorSearch.init(9, '', '', 100);" >
    </div>
  
  <div class="box no-sidepadding thin wrapper">
    <h5 style="color:#fff;" class="f-s-13 w-170 left sub f-w-700">Search For Vendors</h5>


    <div class="box-select search w-150 left">
        <select id="budget" class="select-service divider" name="budget" ng-model="vendorSearch.budgetId">
          <option value="">Genre Event</option>
                      <option value="49">Meeting</option>
                      <option value="49">Music Event</option>
                      <option value="49">Training & Workshop</option>
                      <option value="50">Traditional & Ceremony</option>
                      <option value="48">Wedding</option>
                  </select>
    </div>

    <div class="box-select search w-220 left">
        <select id="service" class="select-service divider" name="category">
          <option value="">All Categories</option>
                      <option value="206">Boutonnieres & Corsages</option>
                      <option value="58">Bridal</option>
                      <option value="9">Catering</option>
                      <option value="210">Dance & Choreography</option>
                      <option value="7">Decoration & Lighting</option>
                      <option value="10">Dress & Attire</option>
                      <option value="69">Entertainment (DJ)</option>
                      <option value="161">Entertainment (MC)</option>
                      <option value="8">Entertainment (Music)</option>
                      <option value="57">Event Rentals</option>
                      <option value="12">Favors & Gifts</option>
                      <option value="52">Flowers</option>
                      <option value="61">Hair & Makeup</option>
                      <option value="169">Health & Beauty</option>
                      <option value="204">Honeymoon</option>
                      <option value="5">Invitations</option>
                      <option value="54">Jewelry</option>
                      <option value="55">Men's Formal Wear</option>
                      <option value="207">Officiants</option>
                      <option value="165">Others (Unique Services)</option>
                      <option value="209">Photo booth</option>
                      <option value="2">Photography</option>
                      <option value="211">Sweet Corner</option>
                      <option value="6">Venue</option>
                      <option value="3">Videography</option>
                      <option value="205">Wedding Accessories</option>
                      <option value="11">Wedding Cake</option>
                      <option value="56">Wedding Planning</option>
                      <option value="208">Wedding Shoes</option>
                  </select>
    </div>

    
    <div class="box-select search w-165 left">
      <ng-switch on="cityLoad">
        <select id="city" class="select-service divider" name="city" ng-model="vendorSearch.cityId" ng-switch-when="false">
          <option value="">All Cities</option>
                  </select>
        <select id="city" ng-model="vendorSearch.cityId" name="city" ng-switch-when="true" ng-options="city.id as city.name for city in cities" ng-change="vendorSearch.setCityId(vendorSearch.cityId)">
          <option value="">All Cities</option>
        </select>
      </ng-switch>
    </div>
        <div class="box-select search w-150 left">
        <select id="budget" class="select-service divider" name="budget" ng-model="vendorSearch.budgetId">
          <option value="">All Budgets</option>
                      <option value="48">Rp 0; - Rp 249.999;</option>
                      <option value="49">Rp 250.000 - Rp 499.999;</option>
                      <option value="50">Rp 500.000 - Rp 999.999</option>
                      <option value="50">Rp 1000.000 - Rp ~</option>
                  </select>
    </div>

    <button class="btn btn-stronk with-border right w-93 btn-no-sidepadding btn-loader" ng-class="{'is-loading-ajax' : isSearching}" ng-click="vendorSearch.search(vendorSearch.cityId)">SEARCH</button>
  </div>
 </div>
</header>	 -->
<!--               <div class="full-preloader">
    <img class="load-img" src="http://www.bridestory.com/assets/images/loaderfaster.gif" />
  </div> -->

  <div class="box no-padding wrapper mt-30 mb-50 ng-scope" ng-controller="vendorsControllers as vendorCtrl" ng-init="vendorCtrl.init('mc-wedding-banna', 790498, 'http://www.bridestory.com/mc-wedding-banna')">
                  

    <aside class="box no-padding wrapper w-235 left" style="position: static; top: 720px; float: left; width: 235px;">
      <div id="sticky-and-not-sticky">

    <div itemscope="" itemtype="http://schema.org/ProfessionalService" class="vendor_profile bg-white">
                <i class="badge ico-bs-gold"></i>
                <div class="pic">
            <img itemprop="logo" class="" data-src="http://a5.images.bridestory.com/images/c_fill,dpr_auto,f_auto,fl_progressive,h_250,pg_1,q_80,w_250/v1/assets/IMG-20160124-WA0011_-_Copy_2_flsysl/mc-wedding-banna.jpg" alt="MC Wedding Banna" title="MC Wedding Banna" src="http://a5.images.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,h_250,pg_1,q_80,w_250/v1/assets/IMG-20160124-WA0011_-_Copy_2_flsysl/mc-wedding-banna.jpg">
        </div>
        <h1 itemprop="name">MC Wedding Banna</h1>
        <meta itemprop="description" content="MC Wedding Banna • Entertainment (MC) vendor in Jakarta • Read reviews, get prices &amp; see past projects for MC Wedding Banna on Bridestory ">
        <meta itemprop="url" content="http://www.bridestory.com/mc-wedding-banna">
        <div class="clear"></div>
        <div class="loc mt-15">
            <span class="ico-bs-location">
              <a href="http://www.bridestory.com/indonesia/jakarta" target="_self">Jakarta</a>,
              <a href="http://www.bridestory.com/indonesia" target="_self">ID</a>
            </span>
                    </div>
        <div class="loc mt-7">
            <span>
              <a href="http://www.bridestory.com/indonesia/jakarta/entertainment-mc" target="_self">Entertainment (MC)</a>
            </span>
                    </div>
        <div class="rev mt-3">
                        <span>$</span>
                        <span>|</span>
            <a class="rating" ng-init="rate_790498='4.5'">
                <span ng-mouseleave="reset()" ng-keydown="onKeydown($event)" tabindex="0" role="slider" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4.5" ng-model="rate_790498" readonly="readonly" max="5" state-on="'ico-rate-on-small'" state-off="'ico-rate-off-small'" state-half="'ico-rate-half-small'" class="ng-isolate-scope ng-pristine ng-valid">
    <!-- ngRepeat: r in range track by $index --><i ng-repeat="r in range track by $index" ng-mouseenter="enter($index + 1)" ng-click="rate($index + 1)" class="glyphicon ng-scope ico-rate-on-small" ng-class="getClass($index, value)">
        <span class="sr-only ng-binding">(*)</span>
    </i><!-- end ngRepeat: r in range track by $index --><i ng-repeat="r in range track by $index" ng-mouseenter="enter($index + 1)" ng-click="rate($index + 1)" class="glyphicon ng-scope ico-rate-on-small" ng-class="getClass($index, value)">
        <span class="sr-only ng-binding">(*)</span>
    </i><!-- end ngRepeat: r in range track by $index --><i ng-repeat="r in range track by $index" ng-mouseenter="enter($index + 1)" ng-click="rate($index + 1)" class="glyphicon ng-scope ico-rate-on-small" ng-class="getClass($index, value)">
        <span class="sr-only ng-binding">(*)</span>
    </i><!-- end ngRepeat: r in range track by $index --><i ng-repeat="r in range track by $index" ng-mouseenter="enter($index + 1)" ng-click="rate($index + 1)" class="glyphicon ng-scope ico-rate-on-small" ng-class="getClass($index, value)">
        <span class="sr-only ng-binding">(*)</span>
    </i><!-- end ngRepeat: r in range track by $index --><i ng-repeat="r in range track by $index" ng-mouseenter="enter($index + 1)" ng-click="rate($index + 1)" class="glyphicon ng-scope ico-rate-half-small" ng-class="getClass($index, value)">
        <span class="sr-only ng-binding">(*)</span>
    </i><!-- end ngRepeat: r in range track by $index -->
</span>
            </a>
            <a href="http://www.bridestory.com/mc-wedding-banna/reviews" target="_blank">(44 reviews)</a>
        </div>
                <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
            <meta itemprop="ratingValue" content="4.7">
            <meta itemprop="reviewCount" content="44 reviews">
        </div>
                <div class="dot"></div>
                <button id="send_message_btn" class="btn btn-subtle btn-short mb-5" ng-click="vendorCtrl.desktopMessageVendor(62455)"><i class="icon-msg"></i>Send Message</button>
        <!-- <button id="send_message_btn" class="btn btn-subtle btn-short mb-5" ng-click="vendorCtrl.openCaptcha()"><i class="icon-msg"></i>Send Message</button> -->
                    <button class="btn btn-short btn-stronker" ng-click="vendorCtrl.action('get_pricelist')"><i class="icon-price"></i>View Pricelist</button>
                    <div class="dot"></div>
                <div class="info">
                                            <div class="ico-bs-pc mb-8" ng-hide="vendorCtrl.website">
                    <span class="info-detail">httpsXXXXX</span>
                    <a id="View_Website" href="" ng-click="vendorCtrl.action('get_website')">View</a>
                </div>
                <div class="ico-bs-pc mb-8 ng-hide" ng-show="vendorCtrl.website"><a ng-href="" class="info-detail ng-binding"></a></div>
                                                <div class="ico-email mb-10" ng-hide="vendorCtrl.email">
                    <span class="info-detail">iswanXXXXX</span>
                    <a id="View_Email" href="" ng-click="vendorCtrl.action('get_email')">Show</a>
                </div>
                <div class="ico-email mb-10 ng-hide" ng-show="vendorCtrl.email"><span class="info-detail ng-binding"></span></div>
                                                <div class="ico-bs-phone mb-5" ng-hide="vendorCtrl.phoneNumber">
                    <span class="info-detail">+6289XXXXX</span>
                    <a id="View_Phone" href="" ng-click="vendorCtrl.action('get_phone')">Show</a>
                </div>
                <div class="ico-bs-phone mb-5 ng-hide" ng-show="vendorCtrl.phoneNumber"><span class="info-detail ng-binding"></span></div>
                                                <div class="ico-bs-social">
                    Social Media
                </div>
                <div class="pl-33 mt-2">
                                        <a id="View_Facebook" target="_blank" class="ico-sos-fb" ng-click="vendorCtrl.action('get_facebook')"></a>
                                                            <a id="View_Twitter" target="_blank" class="ico-sos-tw" ng-click="vendorCtrl.action('get_twitter')"></a>
                                                            <a id="View_Instagram" target="_blank" class="ico-sos-insta" ng-click="vendorCtrl.action('get_instagram')"></a>
                                    </div>
                                                                <div class="ico-bs-messaging">
                    Instant messaging
                </div>
                                <div class="pl-33 mt-2 relative">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a id="View_Whatsapp" class="ico-im-wa" ng-click="vendorCtrl.action('get_whatsapp',1)"></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <a id="View_bbm" class="ico-im-bbm" ng-click="vendorCtrl.action('get_bbm',2)"></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a id="View_bbm" class="ico-im-bbm" ng-click="vendorCtrl.action('get_bbm',3)"></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <a id="View_line" class="ico-im-line" ng-click="vendorCtrl.action('get_line',4)"></a>
                                                                                                                                                                                                                                                                                                                                                                                                                <div class="im-info arrow-0 ng-hide" ng-show="vendorCtrl.showIm==true">
                        <p class="type p2-10 ng-binding"></p>
                        <p class="number p2-10 ng-binding"></p>
                    </div>
                </div>
                

            <div class="extra">
                <div>
                    <span class="ico-bs-love-nolink" ng-hide="vendorCtrl.vendorVotes">31</span>
                    <span class="ico-bs-love-nolink ng-binding ng-hide" ng-show="vendorCtrl.vendorVotes"></span>
                </div>
                <div>
                    <span class="ico-bs-view">20.7k</span>
                </div>
            </div>
        </div>
    </div>
    <div id="ask_vendor" class="vendor_service mt-20" style="display: block;">
        <form id="send_message" name="send_message" ng-submit="vendorCtrl.sendMessage(62455, send_message)" class="form ng-pristine ng-invalid ng-invalid-required" novalidate="">
  <div class="row" ng-class="{'form-error': vendorCtrl.submitted &amp;&amp; !send_message.subject.$valid}">
    <div class="box-select alert subject">
      <select id="subject" name="subject" ng-model="vendorCtrl.subject" required="" class="ng-pristine ng-invalid ng-invalid-required">
          <option value="">Select Subject</option>
          <option value="Appointment">Appointment</option>
          <option value="Availability">Availability</option>
          <option value="Pricelist">Pricelist</option>
          <option value="Other">Other</option>
      </select>
      <p class="form-msg mt-5 ng-hide" ng-show="vendorCtrl.submitted &amp;&amp; send_message.subject.$error.required">Please choose a subject</p>
    </div>
  </div>
  <div class="row" ng-class="{'form-error': vendorCtrl.submitted &amp;&amp; send_message.message.$error.required}">
    <textarea placeholder="Put your question..." name="message" ng-model="vendorCtrl.message" required="" class="ng-pristine ng-invalid ng-invalid-required" ng-trim="false"></textarea>
    <p class="form-msg ng-hide" ng-show="vendorCtrl.submitted &amp;&amp; send_message.message.$error.required">
        Message cannot be empty
    </p>
  </div>
  <!-- ngIf: !vendorCtrl.disableSendButton --><button class="btn btn-stronk btn-block btn-short with-border ng-scope" type="submit" ng-click="vendorCtrl.submitted=true" ng-if="!vendorCtrl.disableSendButton"><i class="icon-ask"></i>Ask Vendor</button><!-- end ngIf: !vendorCtrl.disableSendButton -->
  <!-- ngIf: vendorCtrl.disableSendButton -->

</form>
</div>
</div>
</aside>

    <section class="box no-padding wrapper w-745 right clear-after">

      <div class="box no-padding with-border">
                              <div style="padding:0px;" class="project box thick ng-scope" id="tabs-1" ng-controller="projectController as projectCtrl" ng-init="projectCtrl.init(790498, 'http://www.bridestory.com/mc-wedding-banna', '[{&quot;categoryId&quot;:161,&quot;categoryName&quot;:&quot;Entertainment (MC)&quot;,&quot;categorySlug&quot;:&quot;entertainment-mc&quot;}]', 56, 1, '{&quot;categorySlug&quot;:&quot;all-categories&quot;,&quot;sort&quot;:&quot;recent&quot;,&quot;limit&quot;:9}')">

    <div class="project-vendor" style="margin-top:0px;">

      <div style="width:100%;" class="box-item" ng-init="projectCtrl.addProjectToList(790498, 848952, 790498, 6)">
            
            <!-- <a rel="nofollow" href="javascript: void(0);" class="pin-board pin-expand pin-box"></a> -->
            <div class="love_share ng-scope" ng-controller="AnalyticController as analyticCtrl">
                <!-- Share to Pinterest -->
                <!-- <a ng-click="analyticCtrl.eventTrack('share', 'pinterest', 'http://www.bridestory.com/mc-wedding-banna/projects/mc-wedding-prima-faruq')" rel="nofollow" href="javascript: void(0);" class="bs-pinit" socialshare="" socialshare-text="This is incredible! Great works by MC Wedding Banna http://www.bridestory.com/mc-wedding-banna/projects/mc-wedding-prima-faruq" socialshare-provider="pinterest" socialshare-media="http://a1.images.bridestory.com/image/upload/c_scale,dpr_auto,f_auto,fl_progressive,pg_1,q_80/v1/assets/IMG_20160213_205743_qkbork.jpg" socialshare-url="http://www.bridestory.com/mc-wedding-banna/projects/mc-wedding-prima-faruq"></a> -->
                <!-- Share Options -->
                <!-- <a class="bs-shareit" bs-toggle-share></a> -->
                <a class="btn-share" bs-toggle-share="">
                    <span class="icon-share left mt-4"></span>
                    <span class="brandon f-s-11 left ml-10 mt-1">Share</span>
                </a>
            </div>
            <div class="pic" style="width:100%; height:100%;">
                <!-- <a href="" popup-project="" project-id="848952" project-slug="'mc-wedding-prima-faruq'" project-vendor-id="790498" project-vendor-slug="'mc-wedding-banna'" class="ng-isolate-scope"><img class="cover-img" data-src="" alt="MC Wedding Prima &amp; Faruq by MC Wedding Banna" title="MC Wedding Prima &amp; Faruq by MC Wedding Banna" src="http://a2.images.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,h_213,pg_1,q_80,w_213/v1/assets/IMG_20160213_205743_qkbork/mc-wedding-banna_mc-wedding-prima-faruq.jpg"></a> -->
        <!--  -->
<div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="../web/images/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../web/images/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../web/images/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>

    <!-- JavaScript -->
    <script src="../web/js/jquery-1.10.2.js"></script>
    <script src="../web/js/bootstrap.js"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    })
    </script>
        <!--  -->
            </div>


        </div>
</div>
</div>
<!-- pagination -->
<div class="pagination">
    <div class="prev"><a target="_self" href="http://www.bridestory.com/mc-wedding-banna/1">First</a></div>
        <div class="numb">
                                            <a target="_self" href="http://www.bridestory.com/mc-wedding-banna/1" class="active">1</a>
                                                                  <a target="_self" href="http://www.bridestory.com/mc-wedding-banna/2">2</a>
                                                                  <a target="_self" href="http://www.bridestory.com/mc-wedding-banna/3">3</a>
                                                                  <a target="_self" href="http://www.bridestory.com/mc-wedding-banna/4">4</a>
                                                                  <a target="_self" href="http://www.bridestory.com/mc-wedding-banna/5">5</a>
                                  </div>
        <div class="next"><a target="_self" href="http://www.bridestory.com/mc-wedding-banna/2"><span class="ico-bs-next-small"></span></a></div>
        <div class="next"><a target="_self" href="http://www.bridestory.com/mc-wedding-banna/7">Last</a></div>
</div>
                  
        
        
        
                      </div>
    </section>
  </div>

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


<script src="http://raw.bridestory.com/raw/upload/static-production/desktop-1456386773/assets/vendor.grid/application-localized-id.js" version="desktop" method="normal" localizationBucket="ID"></script>
</body>
</html>