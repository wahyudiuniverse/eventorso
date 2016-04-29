<!DOCTYPE HTML>
<html ng-app="bridestoryApp">
	<head>

		<meta charset="UTF-8">
		<meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <meta name="keywords" content="wedding catering, katering kawinan" />
		<meta name="description" content="" />
		<title>Event Vendor Directory | Eventorso </title>
    <link href="../web/css/application.css" version="desktop" method="normal" rel="stylesheet" type="text/css">

  </head>
	
  <body>
    <header id="header2" class="l-header2 pos-fixed new">
    <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
        <nav id="main-menu2" class="left brandon f-s-11">
            <a target="_top" class="bs_logo nohover left-none" href="#" title=""></a>
            <a target="_top" href="#">All Vendors</a>
            <a target="_top" href="#">Top Equipment</a>
        </nav>
        <nav id="sub-menu-not-login" class="right f-brandon f-td-n">
            <a href="#" class="register b-vendor brandon bold">Become a vendor</a>
            <a href="login/" class="brandon bold">Login</a>
        </nav>
    </div>
    </header>


  <div>
    <div class="box form w-800 no-padding top_wrapper wrapper with-border">
      <!-- <ng-switch on="loginCtrl.selection"> -->
        <!-- <section ng-switch-default ng-cloak> -->
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted" ng-controller="pageCounterController">
              <h3>Welcome to Eventorso</h3>
            </div>
            <p class="classic big mt-20">It only takes 30 seconds to join Eventorso. You can create an account<br>or login with :</p>

            <div class="box no-padding border-b mb-30">
              <!-- <span class="or">or</span> -->
            </div>

            <form class="form" check-dirty name="form_login" ng-submit="loginCtrl.login_register(form_login, null)" novalidate>
              <div class="row" ng-class="{'form-error' : loginCtrl.error_no_email || loginCtrl.error_wrong_email || loginCtrl.error_email_pass_not_match}">
                <input placeholder="E-mail address" input-dirty tabindex="1" type="email" name="email" ng-model="loginCtrl.login.email" required>
                <p ng-if="!loginCtrl.error_email_pass_not_match" class="form-msg">[[ loginCtrl.error_no_email ? 'Email can not be empty' : 'Wrong Email Address' ]]</p>
              </div>
              <div class="row" ng-class="{'form-error' : loginCtrl.error_password_to_short || loginCtrl.error_wrong_password}">
                <input placeholder="Password" input-dirty tabindex="2" type="password" name="password" ng-model="loginCtrl.login.password" required ng-minlength="6">
                <p class="form-msg">[[ loginCtrl.error_password_to_short ? 'Password is too short' : 'Email and password do not match' ]]</p>
              </div>
              <button class="btn btn-stronk btn-loader submit" type="submit" ng-class="{'is-loading-ajax' : loginCtrl.is_loading, 'is-redirecting' : loginCtrl.is_redirecting}" ng-click="loginCtrl.login_submitted=true">Create Account <span>or</span> Login</button>
            </form>
            <h6 class="pink box"><a ng-click="loginCtrl.change_section('forgot')">I Forgot my password</a></h6>
            <p class="classic small mb-20">Creating an account means you’re okay with our <a href="http://www.bridestory.com/terms-conditions/user" target="_blank" rel="nofollow">terms and conditions</a></p>
          </div>
        <!-- </section> -->


        <section ng-switch-when="register" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Create your Account</h3>
            </div>
            <p class="classic big box">What should we call you?</p>
            <form check-dirty name="form_register" class="form-login form" ng-submit="loginCtrl.process_register(form_register, null)" novalidate>
              <div class="row" ng-class="{'form-error' : loginCtrl.error_no_full_name}">
                <input type="text" placeholder="Your name" input-dirty tabindex="1" name="full_name" ng-model="loginCtrl.login.full_name" required>
                <p class="form-msg">Full name can not be empty</p>
              </div>

              <button class="btn btn-stronk with-border submit" type="submit" ng-click="loginCtrl.register_submitted=true">Next</button>

              <div class="classic small box mt-20 mb-20">
                  <p class="classic small">Creating an account means you’re okay with our <a href="http://www.bridestory.com/terms-conditions/user" target="_blank" rel="nofollow">terms and conditions</a></p>
                  <input type="checkbox" id="chkPromotional" ng-model="loginCtrl.promotional_newsletter" class="ng-pristine ng-valid">
                <label for="chkPromotional">
                  <p class="classic box small ls-05x "><span></span>I'd like to receive promotional mails and newsletters from Bridestory Inc. and its affiliates</p>
                </label>
              </div>

            </form>
          </div>
        </section>

        <section ng-switch-when="forgot" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Forgot Password</h3>
            </div>
            <form class="mt-15 form" check-dirty name="form_forgot" class="form-login" ng-submit="loginCtrl.forgot_process(form_forgot, null)" novalidate>
              <div class="row" ng-class="{'form-error' : loginCtrl.error_forgot_email_empty || loginCtrl.error_forgot_email_wrong || loginCtrl.error_forgot_email_not_found}">
                <input type="email" name="email" placeholder="Your e-mail address" ng-model="loginCtrl.login.email" required>
                <p class="form-msg">[[ loginCtrl.error_forgot_email_empty ? 'Email can not be empty' : loginCtrl.error_forgot_email_wrong ? 'Wrong Email Address.' : 'Check your spelling. This e-mail doesn\'t seem familiar to us.' ]]</p>
              </div>
              <button class="btn btn-stronk with-border submit">Reset My Password</button>
            </form>
            <p class="classic small mt-10 box">Or you can <a ng-click="loginCtrl.change_section('login')">Log in or create an account</a> instead.</p>
          </div>
        </section>

        <section ng-switch-when="reset" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Reset Password</h3>
            </div>
            <p class="center box big">
              A link to reset your password has successfully been sent!
              <br>
              Go back to <a href="#" ng-click="loginCtrl.change_section('login')" class="pink">Login</a>
            </p>
          </div>
        </section>

        <section ng-switch-when="facebook_not_found" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Create your Account</h3>
            </div>
            <p class="classic big box">Please fill your email address</p>
            <form check-dirty name="form_register_facebook" class="form-login form" ng-submit="loginCtrl.process_register_facebook(form_register_facebook)" novalidate>
              <div class="row" ng-class="{'form-error' : loginCtrl.error_no_email || loginCtrl.error_wrong_email || loginCtrl.error_email_pass_not_match || loginCtrl.error_unique_email}">
                <input type="email" placeholder="Email Address" input-dirty tabindex="1" name="email" ng-model="loginCtrl.facebook.email" required>
                <p ng-show="loginCtrl.error_no_email" class="form-msg">Email can not be empty</p>
                <p ng-show="loginCtrl.error_wrong_email" class="form-msg">Wrong Email Address</p>
                <p ng-show="loginCtrl.error_unique_email" class="form-msg">This email address is already registered</p>
              </div>
              <button class="btn btn-stronk with-border submit" type="submit" ng-click="loginCtrl.facebook_register_manual=true">Create My Account</button>
              <div class="classic small box mt-20 mb-20">
                  <p class="classic small">Creating an account means you’re okay with our <a href="http://www.bridestory.com/terms-conditions/vendor" target="_blank" rel="nofollow">terms and conditions</a></p>
                  <input type="checkbox" id="chkPromotional" ng-model="loginCtrl.promotional_newsletter" class="ng-pristine ng-valid">
                <label for="chkPromotional">
                  <p class="classic box small"><span></span>I'd like to receive promotional mails and newsletters from Bridestory Inc. and its affiliates</p>
                </label>
              </div>
            </form>
          </div>
        </section>

        <section ng-switch-when="yahoo_not_found" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Create your Account</h3>
            </div>

            <p class="classic big box">Please fill your email address</p>
            <form check-dirty name="form_register_facebook" class="form-login form" ng-submit="loginCtrl.process_register_yahoo(form_register_facebook)" novalidate>
              <div class="row">
                <input type="email" placeholder="Email Address" input-dirty tabindex="1" name="email" ng-model="loginCtrl.facebook.email" required>
              </div>
              <button class="btn btn-stronk with-border submit" type="submit" ng-click="loginCtrl.facebook_register_manual=true">Create My Account</button>
              <div class="classic small box mt-20 mb-20">
                  <p class="classic small">Creating an account means you’re okay with our <a href="http://www.bridestory.com/terms-conditions/vendor" target="_blank" rel="nofollow">terms and conditions</a></p>
                  <input type="checkbox" id="chkPromotional" ng-model="loginCtrl.promotional_newsletter" class="ng-pristine ng-valid">
                <label for="chkPromotional">
                  <p class="classic box small ls-05x"><span></span>I'd like to receive promotional mails and newsletters from Bridestory Inc. and its affiliates</p>
                </label>
              </div>
            </form>
          </div>
        </section>

        <section ng-switch-when="full_name_not_found" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Create your Account</h3>

            </div>
            <p class="classic big box">What should we call you?</p>
            <form check-dirty name="form_register_google" class="form-login form" ng-submit="loginCtrl.process_register_google(form_register_google)" novalidate>
              <div class="row">
                <input type="text" placeholder="Your name" input-dirty tabindex="1" name="full_name" ng-model="loginCtrl.google.full_name" required>
              </div>
              <button class="btn btn-stronk with-border submit" type="submit" ng-click="loginCtrl.google_register_manual=true">Create My Account</button>
              <div class="classic small box mt-20 mb-20">
                  <p class="classic small">Creating an account means you’re okay with our <a href="http://www.bridestory.com/terms-conditions/vendor" target="_blank" rel="nofollow">terms and conditions</a></p>
                  <input type="checkbox" id="chkPromotional" ng-model="loginCtrl.promotional_newsletter" class="ng-pristine ng-valid">
                <label for="chkPromotional">
                  <p class="classic box small ls-05x"><span></span>I'd like to receive promotional mails and newsletters from Bridestory Inc. and its affiliates</p>
                </label>
              </div>
            </form>
          </div>
        </section>

        <section ng-switch-when="newsletter_confirmation" ng-cloak>
          <div class="box wrapper w-530 no-padding center">
            <div class="box border-b dotted">
              <h3 class="pink">Create your Account</h3>
            </div>
            <p class="classic small box">You are now registered to Bridestory.com. Would like to receive e-mails from Bridestory Inc, and its affiliates?</p>
            <div class="row">
              <button ng-click="loginCtrl.newsletterConfirm(true, [[loginCtrl.socmedType]])" class="btn btn-stronk with-border submit">Yes, Please</button>
              <button ng-click="loginCtrl.newsletterConfirm(false, [[loginCtrl.socmedType]])" class="btn btn-stronk with-border submit">No, Thanks!</button>
            </div>
            <div class="classic small box mt-20 mb-20">
                <p class="classic small">Creating an account means you’re okay with our <a href="http://www.bridestory.com/terms-conditions/vendor" target="_blank" rel="nofollow">terms and conditions</a></p>
            </div>

          </div>
        </section>

              <section ng-switch-when="verification_user" ng-cloak>
                  <div class="box wrapper w-530 no-padding center">
                      <div class="box border-b dotted">
                          <h3>Please Verify Your Email Address</h3>
                      </div>
                      <p class="classic big mt-20">A verification email was sent to <strong>[[loginCtrl.login.email]]</strong>.<br /> Please check your mailbox and follow the instructions to complete <br />the registration process. <br />
                          If you did not receive it, please check your spam folder or <a ng-click="loginCtrl.resend_verification(loginCtrl.login.email)">resend email now.</a></p>
                      <!--
                        <div class="box no-padding border-b mt-30 mb-30">
                          <span class="or">or</span>
                      </div>

                      <h6>You Can Also Verify Your Account By Logging In to</h6>

                      <div class="sosmed-connect mt-15 mb-25">
                          <button class="btn w-200 facebook" ng-click="loginCtrl.facebook_login(null)">Facebook</button>
                          <button class="btn w-200 gplus" ng-click="loginCtrl.google_login(null)">Google</button>
                      </div>
                        -->
                      <p class="mt-20 mb-20">
                          <span class="classic small">Entered a wrong email? </span> <a ng-click="loginCtrl.change_section('login')" class="brandon pink f-td-n">Create a new account</a>
                      </p>
                  </div>
              </section>
      <!-- </ng-switch> -->
    </div>
    <div class="box with-border form thick w-800 wrapper center mb-50">
      <ng-switch on="loginCtrl.selection">
        <section ng-switch-default ng-cloak>
                  <h6>IF YOU HAVE A WEDDING BUSINESS, <a href="http://www.bridestory.com/vendors-home" class="pink">SIGN UP HERE</a></h6>
              </section>
              <section ng-switch-when="verification_user" ng-cloak>
                  <h6>Already Verified? <a ng-click="loginCtrl.verification_check(loginCtrl.login.email)" class="pink">Click Here</a></h6>
              </section>
          </ng-switch>
    </div>
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


<!-- <script src="http://raw.bridestory.com/raw/upload/static-production/desktop-1456386773/assets/vendor.grid/application-localized-id.js" version="desktop" method="normal" localizationBucket="ID"></script> -->
</body>
</html>