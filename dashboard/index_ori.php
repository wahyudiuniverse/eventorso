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
	    

<!-- End Facebook Pixel Code -->		
        <!-- // <script src="https://www.google.com/recaptcha/api.js?render=explicit&onload=vcRecaptchaApiLoaded" async defer></script> -->
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

<div ng-controller="vendorProfileStrengthController as vpStrengthCtrl" class="ng-scope">
        <div class="full-preloader" style="display: none;">
            <img class="load-img" src="https://www.bridestory.com/assets/images/loaderfaster.gif">
        </div>
        <div id="profileRefresh">
            <div id="dashboard-pagesub2" class="box no-padding line-bottom bg2-white" js-fixed-on-scroll="#subheader-container" fos-liveupdate="" fos-offset="#subheader-dashboard">
                <div class="box wrapper no-padding">
                    <ul class="menu_tab_new">
                        <li class="right mt_7 nohover">
                            <a class="btn btn-shorter with-border btn-small" href="https://www.bridestory.com/yudis-kitchen" target="_self">View Profile</a><!-- <span ng-show="0 == 0">unpublished</span> -->
                        </li>
                        <li js-tab="" tab-anchor="#edit-profile" class="is-active">
                            <a href="#edit-profile">Edit Profile</a>
                        </li>
                        <li js-tab="" tab-anchor="#pricelist"><a href="#pricelist">Pricelist</a>
                            <span ng-show="vpStrengthCtrl.vendormeta().pricelistCount == 0" class="icon-alert-red-small ml-3" rel="tooltip-tipsy-top" title="You need to complete your pricelist"></span>
                        </li>
                        <li js-tab="" tab-anchor="#info"><a href="#info">Info</a>
                            <span class="icon-alert-red-small ml-3" ng-show="vpStrengthCtrl.vendormeta().faqCount == 0" rel="tooltip-tipsy-top" title="You need to complete your business information"></span>
                        </li>
                        <li js-tab="" tab-anchor="#profile-strength">
                            <a href="#profile-strength">Profile Strength
                                <div class="progress right ml-10 progress-border-2 progress-mini" ng-class="{'is-loading' : !profileStrengthReady()}">
                                    <div class="progress-current" ng-style="{'width' : profileStrengthProgress() + '%'}" style="width: 5.26316%;"><span class="gray ng-binding">&nbsp;&nbsp;5%</span></div>
                                </div>
                                                            </a>
                        </li>
                        <li js-tab="" tab-anchor="#badges"><a href="#badges">Badges</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="topmost-wrapper" class="topmost-thick ng-scope" ng-controller="vendorEditProfileController as vendorProfileCtrl" ng-init="vendorProfileCtrl.init(801933, 182742)">
                <div id="edit-profile" class="box no-padding wrapper mb-50 tab-content" style="display: block;">
                    <div class="tab_side" js-fixed-on-scroll="#subheader-container" fos-offset="131">
                        <ul id="tab_side" js-tab-group="">
                            <li id="tabsetName-1" class="is-active"><a js-smooth-scroll="#profile_picture" ss-scrolloffset="-178">Profile Picture</a></li>
                            <li id="tabsetName-2" class=""><a js-smooth-scroll="#business_detail" ss-scrolloffset="-178">business details</a></li>
                            <li id="tabsetName-3" class=""><a js-smooth-scroll="#social_media" ss-scrolloffset="-178">contacts &amp; social media</a></li>
                            <li id="tabsetName-4" class=""><a js-smooth-scroll="#service" ss-scrolloffset="-178">service categories &amp; locations</a></li>
                        </ul>
                    </div>
                    <div id="edit-1" class="box no-padding right w-760 form">
                        <div id="profile_picture" class="brandon small line-bottom pb-10">PROFILE PICTURE</div>
                        <div class="box no-padding mt-20">
                            <div class="left w-150">
                                                                    <div class="pic" ng-class="{'is-loading' : isUploading}">
                                        <ng-switch on="profilePicture || '_undefined_'">
                                            <!-- ngSwitchDefault:  -->
                                            <!-- ngSwitchWhen: _undefined_ --><img ng-switch-when="_undefined_" ng-src="http://a5.images.bridestory.com/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive,h_250,pg_1,q_80,w_250/assets/profile_default-small.gif" class="ng-scope" src="http://a5.images.bridestory.com/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive,h_250,pg_1,q_80,w_250/assets/profile_default-small.gif">
                                        </ng-switch>
                                    </div>
                                    <p class="gray italic">Dimension 250x250 pixels JPEG or PNG files only</p>
                                                            </div>
                            <input type="file" accept="image/jpeg,image/png" tabindex="-1" __afu_gen__="true" style="width: 0px; height: 0px; position: absolute; padding: 0px; margin: 0px; overflow: hidden; opacity: 0;"><div ng-file-select="" ng-model="vendorPhoto" ng-multiple="false" allow-dir="false" class="btn btn-gray btn-shorter mt-50 left ng-pristine ng-valid" ng-class="{'is-disabled' : isUploading, 'is-disabled-click' : isUploading}" accept="image/jpeg,image/png" __refelem__="true" style="overflow: hidden;">Edit Picture</div>
                        </div>
                        <div id="business_detail" class="brandon small line-bottom pb-10 mt-30">business details</div>

                        <form name="businessDetail" ng-submit="vendorProfileCtrl.updateBusinessDetail(businessDetail)" novalidate="" class="ng-pristine ng-valid ng-valid-required">
                            <div class="row mt-10" ng-class="{'form-error':businessDetailSubmitted &amp;&amp; businessDetail.businessName.$error.required}">
                                <label>
                                    <span class="form-title icon-required">Business name</span>
                                                                            <input name="businessName" ng-model="businessName" ng-init="businessName=&quot;YUDI\'s Kitchen&quot;" required="" class="ng-pristine ng-valid ng-valid-required">
                                                                    </label>
                                <p class="form-msg">Business name cannot be empty</p>
                            </div>
                            <div class="row">
                                <label>
                                    <span class="form-title">About your business</span>
                                    <textarea name="about" ng-model="about" bs-maxlength="500" ng-init="about=&quot;&quot;" class="ng-pristine ng-valid" data-gramm="" data-txt_gramm_id="41394e48-10e6-6df9-1ba4-edeb67cb13e0"></textarea>
                                </label>
                                <p class="form-input-desc-absolute ng-binding">500 characters left</p>
                            </div>
                            <div class="row">
                                <label>
                                    <span class="form-title">Business address</span>
                                    <textarea name="businessAddress" ng-model="businessAddress" ng-init="businessAddress='Bekasi'" class="ng-pristine ng-valid" data-gramm="" data-txt_gramm_id="6ab396c5-d265-bd45-9f83-95f20047ba90"></textarea>
                                </label>
                            </div>
                            <div class="row fixed">
                                <div class="fixed-l relative w-180" ng-class="{'form-error':businessDetailSubmitted &amp;&amp; businessDetail.country.$error.required}">
                                    <label>
                                        <span class="form-title icon-required">Country</span>
                                    </label>
                                    <div class="box-select plain long thicker georgia left" ng-init="country='100';countryIso='ID'">
                                        <select disabled="" name="country" ng-model="country" required="" class="ng-pristine ng-valid ng-valid-required">
                                            <option value="">Select Country</option>
                                                                                            <option value="1">Afghanistan</option>
                                                                                            <option value="2">Albania</option>
                                                                                            <option value="3">Algeria</option>
                                                                                            <option value="4">American Samoa</option>
                                                                                            <option value="5">Andorra</option>
                                                                                            <option value="6">Angola</option>
                                                                                            <option value="7">Anguilla</option>
                                                                                            <option value="9">Antigua</option>
                                                                                            <option value="10">Argentina</option>
                                                                                            <option value="11">Armenia</option>
                                                                                            <option value="12">Aruba</option>
                                                                                            <option value="13">Australia</option>
                                                                                            <option value="14">Austria</option>
                                                                                            <option value="15">Azerbaijan</option>
                                                                                            <option value="16">Bahamas</option>
                                                                                            <option value="17">Bahrain</option>
                                                                                            <option value="18">Bangladesh</option>
                                                                                            <option value="19">Barbados</option>
                                                                                            <option value="20">Belarus</option>
                                                                                            <option value="21">Belgium</option>
                                                                                            <option value="22">Belize</option>
                                                                                            <option value="23">Benin</option>
                                                                                            <option value="24">Bermuda</option>
                                                                                            <option value="25">Bhutan</option>
                                                                                            <option value="26">Bolivia</option>
                                                                                            <option value="27">Bosnia</option>
                                                                                            <option value="28">Botswana</option>
                                                                                            <option value="30">Brazil</option>
                                                                                            <option value="32">Brunei Darussalam</option>
                                                                                            <option value="33">Bulgaria</option>
                                                                                            <option value="34">Burkina Faso</option>
                                                                                            <option value="35">Burundi</option>
                                                                                            <option value="36">Cambodia</option>
                                                                                            <option value="37">Cameroon</option>
                                                                                            <option value="38">Canada</option>
                                                                                            <option value="39">Cape Verde</option>
                                                                                            <option value="40">Cayman Islands</option>
                                                                                            <option value="41">Central African Republic</option>
                                                                                            <option value="42">Chad</option>
                                                                                            <option value="43">Chile</option>
                                                                                            <option value="44">China</option>
                                                                                            <option value="47">Colombia</option>
                                                                                            <option value="48">Comoros</option>
                                                                                            <option value="49">Congo</option>
                                                                                            <option value="50">Republic of Congo</option>
                                                                                            <option value="51">Cook Islands</option>
                                                                                            <option value="52">Costa Rica</option>
                                                                                            <option value="53">Cote D''Ivoire</option>
                                                                                            <option value="54">Croatia</option>
                                                                                            <option value="55">Cuba</option>
                                                                                            <option value="56">Cyprus</option>
                                                                                            <option value="57">Czech Republic</option>
                                                                                            <option value="58">Denmark</option>
                                                                                            <option value="59">Djibouti</option>
                                                                                            <option value="60">Dominica</option>
                                                                                            <option value="61">Dominican Republic</option>
                                                                                            <option value="62">Ecuador</option>
                                                                                            <option value="63">Egypt</option>
                                                                                            <option value="64">El Salvador</option>
                                                                                            <option value="65">Equatorial Guinea</option>
                                                                                            <option value="66">Eritrea</option>
                                                                                            <option value="67">Estonia</option>
                                                                                            <option value="68">Ethiopia</option>
                                                                                            <option value="69">Falkland Islands</option>
                                                                                            <option value="70">Faroe Islands</option>
                                                                                            <option value="71">Fiji</option>
                                                                                            <option value="72">Finland</option>
                                                                                            <option value="73">France</option>
                                                                                            <option value="74">French Guiana</option>
                                                                                            <option value="75">French Polynesia</option>
                                                                                            <option value="77">Gabon</option>
                                                                                            <option value="78">Gambia</option>
                                                                                            <option value="79">Georgia</option>
                                                                                            <option value="80">Germany</option>
                                                                                            <option value="81">Ghana</option>
                                                                                            <option value="82">Gibraltar</option>
                                                                                            <option value="83">Greece</option>
                                                                                            <option value="84">Greenland</option>
                                                                                            <option value="85">Grenada</option>
                                                                                            <option value="86">Guadeloupe</option>
                                                                                            <option value="87">Guam</option>
                                                                                            <option value="88">Guatemala</option>
                                                                                            <option value="89">Guinea</option>
                                                                                            <option value="90">Guinea-Bissau</option>
                                                                                            <option value="91">Guyana</option>
                                                                                            <option value="92">Haiti</option>
                                                                                            <option value="94">Vatican</option>
                                                                                            <option value="95">Honduras</option>
                                                                                            <option value="96">Hong Kong</option>
                                                                                            <option value="97">Hungary</option>
                                                                                            <option value="98">Iceland</option>
                                                                                            <option value="99">India</option>
                                                                                            <option value="100" selected="">Indonesia</option>
                                                                                            <option value="101">Iran</option>
                                                                                            <option value="102">Iraq</option>
                                                                                            <option value="103">Ireland</option>
                                                                                            <option value="104">Israel</option>
                                                                                            <option value="105">Italy</option>
                                                                                            <option value="106">Jamaica</option>
                                                                                            <option value="107">Japan</option>
                                                                                            <option value="108">Jordan</option>
                                                                                            <option value="109">Kazakhstan</option>
                                                                                            <option value="110">Kenya</option>
                                                                                            <option value="111">Kiribati</option>
                                                                                            <option value="112">North Korea</option>
                                                                                            <option value="113">South Korea</option>
                                                                                            <option value="242">Kosovo</option>
                                                                                            <option value="114">Kuwait</option>
                                                                                            <option value="115">Kyrgyzstan</option>
                                                                                            <option value="116">Lao People''s Democratic Republic</option>
                                                                                            <option value="117">Latvia</option>
                                                                                            <option value="118">Lebanon</option>
                                                                                            <option value="119">Lesotho</option>
                                                                                            <option value="120">Liberia</option>
                                                                                            <option value="121">Libya</option>
                                                                                            <option value="122">Liechtenstein</option>
                                                                                            <option value="123">Lithuania</option>
                                                                                            <option value="124">Luxembourg</option>
                                                                                            <option value="125">Macao</option>
                                                                                            <option value="126">Macedonia</option>
                                                                                            <option value="127">Madagascar</option>
                                                                                            <option value="128">Malawi</option>
                                                                                            <option value="129">Malaysia</option>
                                                                                            <option value="130">Maldives</option>
                                                                                            <option value="131">Mali</option>
                                                                                            <option value="132">Malta</option>
                                                                                            <option value="133">Marshall Islands</option>
                                                                                            <option value="134">Martinique</option>
                                                                                            <option value="135">Mauritania</option>
                                                                                            <option value="136">Mauritius</option>
                                                                                            <option value="137">Mayotte</option>
                                                                                            <option value="138">Mexico</option>
                                                                                            <option value="139">Micronesia</option>
                                                                                            <option value="140">Moldova</option>
                                                                                            <option value="141">Monaco</option>
                                                                                            <option value="142">Mongolia</option>
                                                                                            <option value="240">Montenegro</option>
                                                                                            <option value="143">Montserrat</option>
                                                                                            <option value="144">Morocco</option>
                                                                                            <option value="145">Mozambique</option>
                                                                                            <option value="146">Myanmar</option>
                                                                                            <option value="147">Namibia</option>
                                                                                            <option value="148">Nauru</option>
                                                                                            <option value="149">Nepal</option>
                                                                                            <option value="150">Netherlands</option>
                                                                                            <option value="151">Netherlands Antilles</option>
                                                                                            <option value="152">New Caledonia</option>
                                                                                            <option value="153">New Zealand</option>
                                                                                            <option value="154">Nicaragua</option>
                                                                                            <option value="155">Niger</option>
                                                                                            <option value="156">Nigeria</option>
                                                                                            <option value="157">Niue</option>
                                                                                            <option value="159">Northern Mariana Islands</option>
                                                                                            <option value="160">Norway</option>
                                                                                            <option value="161">Oman</option>
                                                                                            <option value="162">Pakistan</option>
                                                                                            <option value="163">Palau</option>
                                                                                            <option value="164">Palestina</option>
                                                                                            <option value="165">Panama</option>
                                                                                            <option value="166">Papua New Guinea</option>
                                                                                            <option value="167">Paraguay</option>
                                                                                            <option value="168">Peru</option>
                                                                                            <option value="169">Philippines</option>
                                                                                            <option value="171">Poland</option>
                                                                                            <option value="172">Portugal</option>
                                                                                            <option value="173">Puerto Rico</option>
                                                                                            <option value="174">Qatar</option>
                                                                                            <option value="176">Romania</option>
                                                                                            <option value="177">Russia</option>
                                                                                            <option value="178">Rwanda</option>
                                                                                            <option value="179">Saint Helena</option>
                                                                                            <option value="180">Saint Kitts and Nevis</option>
                                                                                            <option value="181">Saint Lucia</option>
                                                                                            <option value="182">Saint Pierre and Miquelon</option>
                                                                                            <option value="183">Saint Vincent and the Grenadines</option>
                                                                                            <option value="184">Samoa</option>
                                                                                            <option value="185">San Marino</option>
                                                                                            <option value="186">Sao Tome and Principe</option>
                                                                                            <option value="187">Saudi Arabia</option>
                                                                                            <option value="188">Senegal</option>
                                                                                            <option value="241">Serbia</option>
                                                                                            <option value="190">Seychelles</option>
                                                                                            <option value="191">Sierra Leone</option>
                                                                                            <option value="192">Singapore</option>
                                                                                            <option value="193">Slovakia</option>
                                                                                            <option value="194">Slovenia</option>
                                                                                            <option value="195">Solomon Islands</option>
                                                                                            <option value="196">Somalia</option>
                                                                                            <option value="197">South Africa</option>
                                                                                            <option value="243">South Sudan</option>
                                                                                            <option value="199">Spain</option>
                                                                                            <option value="200">Sri Lanka</option>
                                                                                            <option value="201">Sudan</option>
                                                                                            <option value="202">Suriname</option>
                                                                                            <option value="204">Swaziland</option>
                                                                                            <option value="205">Sweden</option>
                                                                                            <option value="206">Switzerland</option>
                                                                                            <option value="207">Syria</option>
                                                                                            <option value="208">Taiwan</option>
                                                                                            <option value="209">Tajikistan</option>
                                                                                            <option value="210">Tanzania</option>
                                                                                            <option value="211">Thailand</option>
                                                                                            <option value="212">Timor-Leste</option>
                                                                                            <option value="213">Togo</option>
                                                                                            <option value="214">Tokelau</option>
                                                                                            <option value="215">Tonga</option>
                                                                                            <option value="216">Trinidad and Tobago</option>
                                                                                            <option value="217">Tunisia</option>
                                                                                            <option value="218">Turkey</option>
                                                                                            <option value="219">Turkmenistan</option>
                                                                                            <option value="220">Turks and Caicos Islands</option>
                                                                                            <option value="221">Tuvalu</option>
                                                                                            <option value="222">Uganda</option>
                                                                                            <option value="223">Ukraine</option>
                                                                                            <option value="224">United Arab Emirates</option>
                                                                                            <option value="225">United Kingdom</option>
                                                                                            <option value="226">United States</option>
                                                                                            <option value="228">Uruguay</option>
                                                                                            <option value="229">Uzbekistan</option>
                                                                                            <option value="230">Vanuatu</option>
                                                                                            <option value="231">Venezuela</option>
                                                                                            <option value="232">Vietnam</option>
                                                                                            <option value="233">Virgin Islands (British)</option>
                                                                                            <option value="234">Virgin Islands (US)</option>
                                                                                            <option value="235">Wallis and Futuna</option>
                                                                                            <option value="237">Yemen</option>
                                                                                            <option value="238">Zambia</option>
                                                                                            <option value="239">Zimbabwe</option>
                                                                                    </select>
                                    </div>
                                    <p class="form-msg form-msg-0">Country cannot be empty</p>
                                </div>
                                <div class="fixed-r relative w-560" ng-class="{'form-error':businessDetailSubmitted &amp;&amp; businessDetail.city.$error.required}">
                                    <label>
                                        <span class="form-title icon-required">City</span>
                                    </label>
                                    <input disabled="" name="city" ng-model="city" ng-init="city='Bekasi';cityId=101415" typeahead="city.name for city in cities | filter:$viewValue | limitTo:5" typeahead-template-url="basic-search-results.html" typeahead-wait-ms="500" required="" class="ng-pristine ng-valid ng-valid-required" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-00A-5032"><ul class="dropdown-menu ng-isolate-scope ng-hide" ng-show="isOpen()" style="top:px;left:px" role="listbox" aria-hidden="true" typeahead-popup="" id="typeahead-00A-5032" matches="matches" active="activeIdx" select="select(activeIdx)" query="query" position="position" template-url="basic-search-results.html">
    <!-- ngRepeat: match in matches track by $index -->
</ul>
                                    <p class="form-msg form-msg-0">City cannot be empty</p>
                                </div>
                            </div>
                            <div class="row w-180">
                                <label class="block">
                                    <span class="form-title">Postal code / Zip code</span>
                                    <input name="zipCode" ng-model="zipCode" ng-init="zipCode='171516'" class="ng-pristine ng-valid">
                                </label>
                            </div>
                            <div class="row" ng-class="{'form-error':businessDetailSubmitted &amp;&amp; businessDetail.phone.$error.required}">
                                <label class="block">
                                    <span class="form-title">Business phone number</span>
                                </label>
                                <div class="w-560 left">
                                    <div class="box-select plain block georgia">
                                        <select name="phone" ng-model="phone" class="ng-pristine ng-valid">
                                                                                                                                    <option value="38094-hide"> Not available</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="38094" selected="">+628988882688 (Unverified)</option>
                                                                                                                                    </select>
                                        <span ng-init="phone='38094'"></span>
                                                                                    <a href="https://www.bridestory.com/dashboard/settings#phone_numbers">edit</a>
                                                                            </div>
                                </div>
                                <h6 class="left ml-20 pt-5 brandon small gray">
                                    <a href="https://www.bridestory.com/dashboard/settings#phone_numbers" class="chckDisplay-ig">Add &amp; Edit Phone Numbers</a>
                                </h6>
                                <div class="clear"></div>
                                <p class="form-msg">Phone cannot be empty</p>
                            </div>
                            <button type="submit" ng-click="businessDetailSubmitted=true" class="btn with-border btn-small btn-short">Save Changes</button>
                        </form>

                        <form ng-controller="vendorEditContactAndSocialMediaController as csmCtrl" class="form ng-scope ng-pristine ng-valid" name="contactsDetail" ng-submit="csmCtrl.updateData(contactsDetail)" novalidate="">
                            <div id="social_media" class="brandon small line-bottom pb-10 mt-50">contacts &amp; social media</div>

                            <div class="w-375 mr-10 left">
                              <h6 class="brandon small gray mt-15">Email</h6>
                              <input readonly="" disabled="" ng-model="email" class="ng-pristine ng-valid">
                            </div>
                            <div class="w-375 left">
                              <h6 class="brandon small gray mt-15">Website</h6>
                              <input name="website" ng-model="website" placeholder="e.g. https://www.bridestory.com" class="ng-pristine ng-valid">
                            </div>
                            <div class="clear"></div>

                            <h6 class="brandon small gray mt-15">Social Media</h6>

                            <div class="socmed-profile row row-short" ng-class="{'form-error' : contactsDetail.$dirty &amp;&amp; contactsDetail.facebook.$invalid }">
                                <span class="socmed-fb"></span>
                                <input class="profile ng-pristine ng-valid ng-valid-url ng-valid-pattern" type="url" name="facebook" ng-model="facebook" placeholder="e.g. https://www.facebook.com/thebridestory" ng-pattern="/^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/">
                                <p class="form-msg form-msg-left f-s-12">Not a valid facebook url</p>
                            </div>
                            <div class="socmed-profile row row-short" ng-class="{'form-error' : contactsDetail.$dirty &amp;&amp; csmCtrl.instagramNotFound()}">
                                <div class="w-375 left">
                                    <span class="socmed-insta socmed-at-sign socmed-at-sign-empty" ng-class="{'socmed-at-sign-empty' : !instagram}"></span>
                                    <input class="profile input-at-sign ng-pristine ng-valid" type="text" name="instagram" ng-model="instagram" placeholder="thebridestory">
                                </div>
                                <div class="w-300 left box ml-20 mt-5 no-padding is-disabled-opacity" ng-class="{'is-disabled-opacity' : csmCtrl.instagramNotFound() || !instagram.length}">
                                    <input type="checkbox" id="instagramAutoFeed" name="instagram" class="category-check ng-pristine ng-valid" ng-model="instagramFeed" ng-checked="instagramFeed" ng-disabled="!instagram" disabled="disabled" checked="checked">
                                    <label class="ml-20 chckDisplay-ig" for="instagramAutoFeed"><span></span>Display my instagram feed on my profile</label>
                                </div>
                                <p class="form-msg form-msg-left f-s-12">Instagram account not found</p>
                            </div>
                            <div class="socmed-profile row row-short" ng-class="{'form-error' : contactsDetail.$dirty &amp;&amp; csmCtrl.twitterNotFound()}">
                                <span class="socmed-tw socmed-at-sign socmed-at-sign-empty" ng-class="{'socmed-at-sign-empty' : !twitter}"></span>
                                <input class="profile input-at-sign ng-pristine ng-valid" type="text" name="twitter" ng-model="twitter" placeholder="TheBrideStory">
                                <p class="form-msg form-msg-left f-s-12">Twitter account not found</p>
                            </div>

                            <h6 class="brandon small gray mt-20">Other(s)</h6>
                            <!-- ngRepeat: IM in contactIM --><div class="box no-padding mt-10 ng-scope" ng-repeat="IM in contactIM">
                                <div class="dd-container dd-fix">
                                    <div class="dd-select dd-fix" ng-click="csmCtrl.IMOpened(IM.contactTypeId)">
                                        <input class="dd-selected-value ng-pristine ng-valid" type="hidden" ng-model="IM.contactTypeId">
                                        <a class="dd-selected">
                                            <img class="dd-selected-image" ng-src="https://www.bridestory.com/assets/images/soc-line.png" src="https://www.bridestory.com/assets/images/soc-line.png">
                                            <label class="dd-selected-text ng-binding">Line</label>
                                        </a>
                                        <span class="dd-pointer dd-pointer-down" ng-class="{'dd-pointer-down' : csmCtrl.IMOpened() != IM.id, 'dd-pointer-up' : csmCtrl.IMOpened() == IM.contactTypeId}"></span>
                                    </div>
                                    <ul class="dd-options dd-click-off-close dd-fix ng-hide" ng-show="csmCtrl.IMOpened() == IM.contactTypeId">
                                        <!-- ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/soc-wa.png" src="https://www.bridestory.com/assets/images/soc-wa.png">
                                                <label class="dd-option-text ng-binding">WhatsApp</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/soc-kakao.png" src="https://www.bridestory.com/assets/images/soc-kakao.png">
                                                <label class="dd-option-text ng-binding">Kakao Talk</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/soc-wechat.png" src="https://www.bridestory.com/assets/images/soc-wechat.png">
                                                <label class="dd-option-text ng-binding">WeChat</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/soc-bbm.png" src="https://www.bridestory.com/assets/images/soc-bbm.png">
                                                <label class="dd-option-text ng-binding">BBM</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-snapchat_gray.png" src="https://www.bridestory.com/assets/images/im-snapchat_gray.png">
                                                <label class="dd-option-text ng-binding">snapchat</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-skype_gray.png" src="https://www.bridestory.com/assets/images/im-skype_gray.png">
                                                <label class="dd-option-text ng-binding">skype</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-g-talk_gray.png" src="https://www.bridestory.com/assets/images/im-g-talk_gray.png">
                                                <label class="dd-option-text ng-binding">google talk</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-aim_gray.png" src="https://www.bridestory.com/assets/images/im-aim_gray.png">
                                                <label class="dd-option-text ng-binding">AIM</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-gadu_gray.png" src="https://www.bridestory.com/assets/images/im-gadu_gray.png">
                                                <label class="dd-option-text ng-binding">Gadu-gadu</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-icq_gray.png" src="https://www.bridestory.com/assets/images/im-icq_gray.png">
                                                <label class="dd-option-text ng-binding">ICQ</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-windows-live_gray.png" src="https://www.bridestory.com/assets/images/im-windows-live_gray.png">
                                                <label class="dd-option-text ng-binding">windows live</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-yahoo_gray.png" src="https://www.bridestory.com/assets/images/im-yahoo_gray.png">
                                                <label class="dd-option-text ng-binding">yahoo</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-qq_gray.png" src="https://www.bridestory.com/assets/images/im-qq_gray.png">
                                                <label class="dd-option-text ng-binding">QQ</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-cyworld_gray.png" src="https://www.bridestory.com/assets/images/im-cyworld_gray.png">
                                                <label class="dd-option-text ng-binding">cyworld</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-vkon_gray.png" src="https://www.bridestory.com/assets/images/im-vkon_gray.png">
                                                <label class="dd-option-text ng-binding">Vkontakte</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() --><!-- ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><li ng-repeat="IMs in csmCtrl.IMList()" ng-if="csmCtrl.isNotExist(IMs.contactTypeId)" class="ng-scope">
                                            <a class="dd-option" ng-style="{'dd-option-selected' : IM.contactTypeId == IMs.contactTypeId}" ng-click="csmCtrl.IMOpened(false);IM.contactTypeId = IMs.contactTypeId;IM.name = IMs.name">
                                                <img class="dd-option-image" ng-src="https://www.bridestory.com/assets/images/im-ebuddy_gray.png" src="https://www.bridestory.com/assets/images/im-ebuddy_gray.png">
                                                <label class="dd-option-text ng-binding">ebuddy</label>
                                            </a>
                                        </li><!-- end ngIf: csmCtrl.isNotExist(IMs.contactTypeId) --><!-- end ngRepeat: IMs in csmCtrl.IMList() -->
                                    </ul>
                                </div>
                                <div class="box-ims right">
                                    
                                    <a class="btn-delete" ng-click="csmCtrl.deleteContact($index)"><span class="icon-close-smaller"></span></a>
                                    <!-- ngIf: IM.name != 'WhatsApp' --><span ng-if="IM.name != 'WhatsApp'" class="ng-scope">
                                        <input ng-model="IM.detail" placeholder="Please input your Line ID" class="ng-pristine ng-valid">
                                    </span><!-- end ngIf: IM.name != 'WhatsApp' -->
                                    <!-- ngIf: IM.name == 'WhatsApp' -->
                                </div>
                            </div><!-- end ngRepeat: IM in contactIM -->

                            <h6 class="small mt-10" ng-show="csmCtrl.IMLength() < 5">
                                <a ng-click="csmCtrl.addIM()">+ Add new service</a>
                            </h6>

                            <div class="clear"></div>
                            <button type="submit" class="btn with-border btn-small btn-short mt-10">Save Changes</button>
                        </form>

                        <h6 id="service" class="pb-15 mb-20 mt-50 line-bottom">service category</h6>

                        <div class="box no-padding mb-20">
                            <div class="w-375 left">
                                <table class="table-dash">
                                    <tbody><tr class="head">
                                        <td colspan="2">Service Category</td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                        Catering
                                                                                    (Primary)
                                                                                </td>

                                        <td class="action" ng-init="vendorProfileCtrl.addUsedCategoryIds(9)">
                                                                                                                                </td>
                                    </tr>
                                                                        <!-- ngRepeat: service in newServices -->
                                                                        <tr>
                                        <td colspan="2" class="add">
                                            <h6 class="brandon brandon-regular small"><a ng-click="vendorProfileCtrl.addService()"><span>+</span> Add Category</a></h6>
                                        </td>
                                    </tr>
                                                                    </tbody></table>
                            </div>

                            <div class="w-375 right" ng-init="vendorProfileCtrl.setInitialBudgetData(48,1)">
                                <table class="table-dash">
                                    <tbody><tr class="head">
                                        <td colspan="2" class="ng-binding">Price Range : $</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" ng-switch="changePriceListState()">
                                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="ng-scope">
                                                                                                <div>
                                                    <p class="mt-5 mb-10">Setting the right price range is the key to your business. Otherwise, it will be difficult for you to be connected to potential clients .
                                                    <strong>Once you have purchased a subscription plan, it can no longer be modified.</strong></p>
                                                    <button class="btn btn-short btn-small with-border mb-20" ng-click="changePriceListState('questionnaire')">Update my price range</button>
                                                </div>
                                                                                            </div>
                                            <!-- ngSwitchWhen: questionnaire -->
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>

                        <h6 class="pb-15 mb-15 line-bottom">Locations</h6>
                        <p class="italic gray normal mb-15">Now you can reach clients outside your main city!</p>
                        <table class="table-dash">
                            <tbody><tr class="head">
                                <td>City</td>
                                <td>Country</td>
                                <td>Plan Status</td>
                            </tr>
                                                                                                <tr ng-init="vendorProfileCtrl.addUsedCities(101415)">
                                        <td>
                                            Bekasi

                                                                                            (Primary)
                                            
                                                                                    </td>
                                        <td>Indonesia</td>
                                                                                            <td class="status">
                                                                                                Unpublished
                                            
                                                                                    </td>
                                                                            </tr>
                                                                                        <tr class="location ng-hide" ng-show="addCity &amp;&amp; enableAddCity">
                                <td colspan="3" class="form">
                                                                        <form name="addPlan" class="row ng-pristine ng-invalid ng-invalid-required" ng-class="{'form-error' : submitPlan &amp;&amp; (addPlan.planCity.$error.required|| !planCity.id)}" ng-submit="vendorProfileCtrl.addFreeMembership(addPlan)" novalidate="">
                                                                            <div class="box-select plain small georgia" ng-init="plan.country_id=100">
                                            <select name="planCountry" ng-model="plan.country_id" required="" class="ng-pristine ng-valid ng-valid-required">

                                                    <option class="f-classic" value="100">Indonesia</option>

                                                <option disabled="" value="----------------------------------------------------------">----------------------------------------------------------</option>
                                                <optgroup label="Popular Countries :">
                                                                                                    <option class="f-classic" value="13">Australia</option>
                                                                                                    <option class="f-classic" value="38">Canada</option>
                                                                                                    <option class="f-classic" value="99">India</option>
                                                                                                    <option class="f-classic" value="105">Italy</option>
                                                                                                    <option class="f-classic" value="129">Malaysia</option>
                                                                                                    <option class="f-classic" value="169">Philippines</option>
                                                                                                    <option class="f-classic" value="177">Russian Federation</option>
                                                                                                    <option class="f-classic" value="192">Singapore</option>
                                                                                                    <option class="f-classic" value="225">United Kingdom</option>
                                                                                                    <option class="f-classic" value="226">United States</option>
                                                                                                </optgroup>
                                                <option disabled="" value="----------------------------------------------------------">----------------------------------------------------------</option>
                                                                                                    <option value="1">Afghanistan</option>
                                                                                                    <option value="2">Albania</option>
                                                                                                    <option value="3">Algeria</option>
                                                                                                    <option value="4">American Samoa</option>
                                                                                                    <option value="5">Andorra</option>
                                                                                                    <option value="6">Angola</option>
                                                                                                    <option value="7">Anguilla</option>
                                                                                                    <option value="9">Antigua And Barbuda</option>
                                                                                                    <option value="10">Argentina</option>
                                                                                                    <option value="11">Armenia</option>
                                                                                                    <option value="12">Aruba</option>
                                                                                                    <option value="13">Australia</option>
                                                                                                    <option value="14">Austria</option>
                                                                                                    <option value="15">Azerbaijan</option>
                                                                                                    <option value="16">Bahamas</option>
                                                                                                    <option value="17">Bahrain</option>
                                                                                                    <option value="18">Bangladesh</option>
                                                                                                    <option value="19">Barbados</option>
                                                                                                    <option value="20">Belarus</option>
                                                                                                    <option value="21">Belgium</option>
                                                                                                    <option value="22">Belize</option>
                                                                                                    <option value="23">Benin</option>
                                                                                                    <option value="24">Bermuda</option>
                                                                                                    <option value="25">Bhutan</option>
                                                                                                    <option value="26">Bolivia</option>
                                                                                                    <option value="27">Bosnia And Herzegovina</option>
                                                                                                    <option value="28">Botswana</option>
                                                                                                    <option value="30">Brazil</option>
                                                                                                    <option value="32">Brunei Darussalam</option>
                                                                                                    <option value="33">Bulgaria</option>
                                                                                                    <option value="34">Burkina Faso</option>
                                                                                                    <option value="35">Burundi</option>
                                                                                                    <option value="36">Cambodia</option>
                                                                                                    <option value="37">Cameroon</option>
                                                                                                    <option value="38">Canada</option>
                                                                                                    <option value="39">Cape Verde</option>
                                                                                                    <option value="40">Cayman Islands</option>
                                                                                                    <option value="41">Central African Republic</option>
                                                                                                    <option value="42">Chad</option>
                                                                                                    <option value="43">Chile</option>
                                                                                                    <option value="44">China</option>
                                                                                                    <option value="47">Colombia</option>
                                                                                                    <option value="48">Comoros</option>
                                                                                                    <option value="49">Congo</option>
                                                                                                    <option value="50">Congo, The Democratic Republic Of The</option>
                                                                                                    <option value="51">Cook Islands</option>
                                                                                                    <option value="52">Costa Rica</option>
                                                                                                    <option value="53">Cote D''ivoire</option>
                                                                                                    <option value="54">Croatia</option>
                                                                                                    <option value="55">Cuba</option>
                                                                                                    <option value="56">Cyprus</option>
                                                                                                    <option value="57">Czech Republic</option>
                                                                                                    <option value="58">Denmark</option>
                                                                                                    <option value="59">Djibouti</option>
                                                                                                    <option value="60">Dominica</option>
                                                                                                    <option value="61">Dominican Republic</option>
                                                                                                    <option value="62">Ecuador</option>
                                                                                                    <option value="63">Egypt</option>
                                                                                                    <option value="64">El Salvador</option>
                                                                                                    <option value="65">Equatorial Guinea</option>
                                                                                                    <option value="66">Eritrea</option>
                                                                                                    <option value="67">Estonia</option>
                                                                                                    <option value="68">Ethiopia</option>
                                                                                                    <option value="69">Falkland Islands (malvinas)</option>
                                                                                                    <option value="70">Faroe Islands</option>
                                                                                                    <option value="71">Fiji</option>
                                                                                                    <option value="72">Finland</option>
                                                                                                    <option value="73">France</option>
                                                                                                    <option value="74">French Guiana</option>
                                                                                                    <option value="75">French Polynesia</option>
                                                                                                    <option value="77">Gabon</option>
                                                                                                    <option value="78">Gambia</option>
                                                                                                    <option value="79">Georgia</option>
                                                                                                    <option value="80">Germany</option>
                                                                                                    <option value="81">Ghana</option>
                                                                                                    <option value="82">Gibraltar</option>
                                                                                                    <option value="83">Greece</option>
                                                                                                    <option value="84">Greenland</option>
                                                                                                    <option value="85">Grenada</option>
                                                                                                    <option value="86">Guadeloupe</option>
                                                                                                    <option value="87">Guam</option>
                                                                                                    <option value="88">Guatemala</option>
                                                                                                    <option value="89">Guinea</option>
                                                                                                    <option value="90">Guinea-bissau</option>
                                                                                                    <option value="91">Guyana</option>
                                                                                                    <option value="92">Haiti</option>
                                                                                                    <option value="94">Holy See (vatican City State)</option>
                                                                                                    <option value="95">Honduras</option>
                                                                                                    <option value="96">Hong Kong</option>
                                                                                                    <option value="97">Hungary</option>
                                                                                                    <option value="98">Iceland</option>
                                                                                                    <option value="99">India</option>
                                                                                                    <option value="100">Indonesia</option>
                                                                                                    <option value="101">Iran, Islamic Republic Of</option>
                                                                                                    <option value="102">Iraq</option>
                                                                                                    <option value="103">Ireland</option>
                                                                                                    <option value="104">Israel</option>
                                                                                                    <option value="105">Italy</option>
                                                                                                    <option value="106">Jamaica</option>
                                                                                                    <option value="107">Japan</option>
                                                                                                    <option value="108">Jordan</option>
                                                                                                    <option value="109">Kazakhstan</option>
                                                                                                    <option value="110">Kenya</option>
                                                                                                    <option value="111">Kiribati</option>
                                                                                                    <option value="112">Korea, Democratic People''s Republic Of</option>
                                                                                                    <option value="113">Korea, Republic Of</option>
                                                                                                    <option value="242">Kosovo</option>
                                                                                                    <option value="114">Kuwait</option>
                                                                                                    <option value="115">Kyrgyzstan</option>
                                                                                                    <option value="116">Lao People''s Democratic Republic</option>
                                                                                                    <option value="117">Latvia</option>
                                                                                                    <option value="118">Lebanon</option>
                                                                                                    <option value="119">Lesotho</option>
                                                                                                    <option value="120">Liberia</option>
                                                                                                    <option value="121">Libyan Arab Jamahiriya</option>
                                                                                                    <option value="122">Liechtenstein</option>
                                                                                                    <option value="123">Lithuania</option>
                                                                                                    <option value="124">Luxembourg</option>
                                                                                                    <option value="125">Macao</option>
                                                                                                    <option value="126">Macedonia, The Former Yugoslav Republic Of</option>
                                                                                                    <option value="127">Madagascar</option>
                                                                                                    <option value="128">Malawi</option>
                                                                                                    <option value="129">Malaysia</option>
                                                                                                    <option value="130">Maldives</option>
                                                                                                    <option value="131">Mali</option>
                                                                                                    <option value="132">Malta</option>
                                                                                                    <option value="133">Marshall Islands</option>
                                                                                                    <option value="134">Martinique</option>
                                                                                                    <option value="135">Mauritania</option>
                                                                                                    <option value="136">Mauritius</option>
                                                                                                    <option value="137">Mayotte</option>
                                                                                                    <option value="138">Mexico</option>
                                                                                                    <option value="139">Micronesia, Federated States Of</option>
                                                                                                    <option value="140">Moldova, Republic Of</option>
                                                                                                    <option value="141">Monaco</option>
                                                                                                    <option value="142">Mongolia</option>
                                                                                                    <option value="240">Montenegro</option>
                                                                                                    <option value="143">Montserrat</option>
                                                                                                    <option value="144">Morocco</option>
                                                                                                    <option value="145">Mozambique</option>
                                                                                                    <option value="146">Myanmar</option>
                                                                                                    <option value="147">Namibia</option>
                                                                                                    <option value="148">Nauru</option>
                                                                                                    <option value="149">Nepal</option>
                                                                                                    <option value="150">Netherlands</option>
                                                                                                    <option value="151">Netherlands Antilles</option>
                                                                                                    <option value="152">New Caledonia</option>
                                                                                                    <option value="153">New Zealand</option>
                                                                                                    <option value="154">Nicaragua</option>
                                                                                                    <option value="155">Niger</option>
                                                                                                    <option value="156">Nigeria</option>
                                                                                                    <option value="157">Niue</option>
                                                                                                    <option value="159">Northern Mariana Islands</option>
                                                                                                    <option value="160">Norway</option>
                                                                                                    <option value="161">Oman</option>
                                                                                                    <option value="162">Pakistan</option>
                                                                                                    <option value="163">Palau</option>
                                                                                                    <option value="164">Palestinian Territory, Occupied</option>
                                                                                                    <option value="165">Panama</option>
                                                                                                    <option value="166">Papua New Guinea</option>
                                                                                                    <option value="167">Paraguay</option>
                                                                                                    <option value="168">Peru</option>
                                                                                                    <option value="169">Philippines</option>
                                                                                                    <option value="171">Poland</option>
                                                                                                    <option value="172">Portugal</option>
                                                                                                    <option value="173">Puerto Rico</option>
                                                                                                    <option value="174">Qatar</option>
                                                                                                    <option value="176">Romania</option>
                                                                                                    <option value="177">Russian Federation</option>
                                                                                                    <option value="178">Rwanda</option>
                                                                                                    <option value="179">Saint Helena</option>
                                                                                                    <option value="180">Saint Kitts And Nevis</option>
                                                                                                    <option value="181">Saint Lucia</option>
                                                                                                    <option value="182">Saint Pierre And Miquelon</option>
                                                                                                    <option value="183">Saint Vincent And The Grenadines</option>
                                                                                                    <option value="184">Samoa</option>
                                                                                                    <option value="185">San Marino</option>
                                                                                                    <option value="186">Sao Tome And Principe</option>
                                                                                                    <option value="187">Saudi Arabia</option>
                                                                                                    <option value="188">Senegal</option>
                                                                                                    <option value="241">Serbia</option>
                                                                                                    <option value="190">Seychelles</option>
                                                                                                    <option value="191">Sierra Leone</option>
                                                                                                    <option value="192">Singapore</option>
                                                                                                    <option value="193">Slovakia</option>
                                                                                                    <option value="194">Slovenia</option>
                                                                                                    <option value="195">Solomon Islands</option>
                                                                                                    <option value="196">Somalia</option>
                                                                                                    <option value="197">South Africa</option>
                                                                                                    <option value="243">South Sudan</option>
                                                                                                    <option value="199">Spain</option>
                                                                                                    <option value="200">Sri Lanka</option>
                                                                                                    <option value="201">Sudan</option>
                                                                                                    <option value="202">Suriname</option>
                                                                                                    <option value="204">Swaziland</option>
                                                                                                    <option value="205">Sweden</option>
                                                                                                    <option value="206">Switzerland</option>
                                                                                                    <option value="207">Syrian Arab Republic</option>
                                                                                                    <option value="208">Taiwan</option>
                                                                                                    <option value="209">Tajikistan</option>
                                                                                                    <option value="210">Tanzania, United Republic Of</option>
                                                                                                    <option value="211">Thailand</option>
                                                                                                    <option value="212">Timor-leste</option>
                                                                                                    <option value="213">Togo</option>
                                                                                                    <option value="214">Tokelau</option>
                                                                                                    <option value="215">Tonga</option>
                                                                                                    <option value="216">Trinidad And Tobago</option>
                                                                                                    <option value="217">Tunisia</option>
                                                                                                    <option value="218">Turkey</option>
                                                                                                    <option value="219">Turkmenistan</option>
                                                                                                    <option value="220">Turks And Caicos Islands</option>
                                                                                                    <option value="221">Tuvalu</option>
                                                                                                    <option value="222">Uganda</option>
                                                                                                    <option value="223">Ukraine</option>
                                                                                                    <option value="224">United Arab Emirates</option>
                                                                                                    <option value="225">United Kingdom</option>
                                                                                                    <option value="226">United States</option>
                                                                                                    <option value="228">Uruguay</option>
                                                                                                    <option value="229">Uzbekistan</option>
                                                                                                    <option value="230">Vanuatu</option>
                                                                                                    <option value="231">Venezuela</option>
                                                                                                    <option value="232">Vietnam</option>
                                                                                                    <option value="233">Virgin Islands, British</option>
                                                                                                    <option value="234">Virgin Islands, U.s.</option>
                                                                                                    <option value="235">Wallis And Futuna</option>
                                                                                                    <option value="237">Yemen</option>
                                                                                                    <option value="238">Zambia</option>
                                                                                                    <option value="239">Zimbabwe</option>
                                                                                            </select>
                                            <p ng-show="addPlan.planCountry.$error.required" class="ng-hide">Select country name</p>
                                        </div>
                                        <input class="ml-20 cst-w-city f-s-10 f-lspx-1 ng-pristine ng-invalid ng-invalid-required" placeholder="Add city name" name="planCity" ng-model="planCity" typeahead="city as city.name for city in vendorProfileCtrl.getCities($viewValue)" typeahead-template-url="basic-city-search-add-results.html" typeahead-select-on-blur="true" typeahead-select-on-exact="true" typeahead-on-select="vendorProfileCtrl.onSelectCity($item, $model, $label)" required="" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-00C-3939"><ul class="dropdown-menu ng-isolate-scope ng-hide" ng-show="isOpen()" style="top:px;left:px" role="listbox" aria-hidden="true" typeahead-popup="" id="typeahead-00C-3939" matches="matches" active="activeIdx" select="select(activeIdx)" query="query" position="position" template-url="basic-city-search-add-results.html">
    <!-- ngRepeat: match in matches track by $index -->
</ul>
                                        <button ng-disabled="submitPlan" type="submit" class="btn btn-shorter btn-smallest btn-tiny left">
                                                                                            Add City
                                                                                    </button>
                                        <!-- ngIf: !planCity.length --><p ng-if="!planCity.length" class="form-msg clear ng-scope">Fill city name</p><!-- end ngIf: !planCity.length -->
                                        <!-- ngIf: planCity.length -->
                                    </form>
                                </td>
                            </tr>
                            <tr ng-hide="addCity || !enableAddCity" class="">
                                <td colspan="3" class="add">
                                    <h6 class="brandon brandon-regular small" ng-click="addCity=true"><a><span>+</span> Add City</a></h6>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>

                <div id="pricelist" class="box no-padding wrapper mb-50 tab-content" style="display: none;">
                    <div ng-controller="priceListController as pListCtrl" ng-init="pListCtrl.init()" class="ng-scope">
    <div class="tab_side" js-fixed-on-scroll="#subheader-container" fos-offset="144">
        <ul id="tab_side">
            <!-- ngRepeat: category in pListCtrl.categories --><li class="active" ng-repeat="category in pListCtrl.categories">
                <a ng-click="pListCtrl.selectCategory(category.id); pListCtrl.getListing()" class="ng-binding">
                    Catering
                </a>
            </li><!-- end ngRepeat: category in pListCtrl.categories -->
        </ul>
    </div>
    <div class="box no-padding right w-760 form" ng-style="{'minHeight' : pListCtrl.categories.length * 40}" style="min-height: 40px;">
        <div class="box no-padding center with-border bg-green mb-15" ng-show="pListCtrl.notificationshow">
            <div ng-show="!pListCtrl.priceListItems.length" class="box brandon small bg-smart">
                <a class="popup-close" ng-click="pListCtrl.notificationshow=false"><span class="icon-close-green-small"></span></a>
                IT IS IMPORTANT TO HAVE A PRICELIST IN YOUR PROFILE.<br>
                IT INCREASES YOUR VISIBILITY IN BRIDESTORY
            </div>
            <div ng-show="pListCtrl.priceListItems" class="box ng-hide">
                <a class="popup-close" ng-click="pListCtrl.notificationshow=false"><span class="icon-close-green-small"></span></a>
                <h6>KEEP YOUR PRICELIST UPDATED.</h6>
                <p class="normal italic">Keeping an updated pricelist in your profile will increase the visibility and relevancy of your business in Bridestory.</p>
            </div>
        </div>

        <div class="box">
            <h3 class="pink ng-binding">Catering</h3>
            <p class="classic">You can help your users to understand more about your price range by providing a comprehensive pricelist.</p>
        </div>

        <!-- ngRepeat: priceList in pListCtrl.priceListItems -->

        <a class="btn with-border" ng-hide="pListCtrl.creatingNew" ng-click="pListCtrl.creatingNew=true;submitted=false;pListCtrl.clearPriceListForm();">+ Add a new pricelist</a>

        <div ng-show="pListCtrl.creatingNew" class="ng-hide"><h6 class="pt-15">Add a new Pricelist</h6></div>
        <div ng-show="pListCtrl.creatingNew" class="ng-hide">
            <form name="form_price" class="form creating-new ng-pristine ng-invalid ng-invalid-required" novalidate="">

                <div class="row" ng-class="form_price.title.$error.required &amp;&amp; submitted? 'form-error':''">
                    <label>
                        <span class="form-title icon-required">Service Name</span>
                        <input type="text" name="title" ng-model="pListCtrl.newPrice.title" placeholder="e.g. Jasmine Three-Course Dining Package" required="" class="ng-pristine ng-invalid ng-invalid-required">
                    </label>
                    <p class="form-msg" ng-show="form_price.title.$error.required">Service name cannot be empty</p>
                </div>
                <div class="row">
                    <label>
                        <span class="form-title icon-required">Price Range</span>
                    </label>
                    <div class="box no-padding price-form">
                        <div class="box-select plain thicker bg-white clear">
                            <select ng-model="pListCtrl.newPrice.price_type" ng-options="pRangeType.id as pRangeType.name for pRangeType in pListCtrl.priceTypeArrayCreate" class="ng-pristine ng-valid"><option value="0" selected="selected" label="Between">Between</option><option value="1" label="Start from">Start from</option><option value="2" label="Exactly">Exactly</option></select>
                        </div>
                        <div ng-switch="pListCtrl.newPrice.price_type">
                            <!-- ngSwitchDefault:  --><div class="relative ng-scope" ng-switch-default="" ng-class="!(form_price.start_1.$valid &amp;&amp; form_price.end_1.$valid &amp;&amp; form_price.currency.$valid) &amp;&amp; submitted ? 'form-error':''">
                                <div class="box-select plain thicker price bg-white">
                                    <select name="currency" ng-model="pListCtrl.newPrice.currencyId" ng-options="pCurrency.id as pCurrency.name for pCurrency in pListCtrl.currency" required="" class="ng-pristine ng-valid ng-valid-required"><option value="0" selected="selected" label="AUD">AUD</option><option value="1" label="CNY">CNY</option><option value="2" label="EUR">EUR</option><option value="3" label="GBP">GBP</option><option value="4" selected="selected" label="IDR">IDR</option><option value="5" label="INR">INR</option><option value="6" label="JPY">JPY</option><option value="7" label="KRW">KRW</option><option value="8" label="MYR">MYR</option><option value="9" label="PHP">PHP</option><option value="10" label="SGD">SGD</option><option value="11" label="THB">THB</option><option value="12" label="USD">USD</option></select>
                                </div>
                                <input name="start_1" class="between ng-pristine ng-invalid ng-invalid-required" value="50" ng-model="pListCtrl.newPrice.price_start" numbers-only="" required="">
                                <span class="brandon">TO</span>
                                <input name="end_1" class="between ng-pristine ng-invalid ng-invalid-required" value="80" ng-model="pListCtrl.newPrice.price_end" numbers-only="" required="">
                                <p class="form-msg">Price is not valid</p>
                            </div>
                            <!-- ngSwitchWhen: 2 -->
                            <!-- ngSwitchWhen: 3 -->
                        </div>
                        <em class="brandon brandon-regular">PER/</em>
                        <div class="relative" ng-class="{'form-error':form_price.$invalid &amp;&amp; form_price.item_name.$invalid &amp;&amp; submitted}">
                            <input name="item_name" value="Bouquet" class="cat ng-pristine ng-invalid ng-invalid-required" ng-model="pListCtrl.newPrice.item_name" placeholder="Pax" required="">
                            <p class="form-msg">Item cannot be empty</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label>
                        <span class="form-title">Description</span>
                        <textarea name="description" ng-model="pListCtrl.newPrice.description" placeholder="e.g. Three-course fine dining menu that includes one starter (bread, soup, or salad), one main course (pasta, steak, or lasagna), and one dessert (ice cream, cake, or melted chocolate)" maxlength="2000" ng-maxlength="2000" class="ng-pristine ng-valid ng-valid-maxlength"></textarea>
                    </label>
                    <p class="form-msg">Description cannot be empty</p>
                </div>

                <button class="btn with-border btn-small btn-short" ng-click="pListCtrl.createPriceList();submitted=true">Save Changes</button>
                <button class="btn btn-short btn-link-grey btn-small btn-cancel" ng-click="pListCtrl.creatingNew=false">Cancel</button>
            </form>
        </div>
    </div>
</div>              </div>

                <div id="info" class="box no-padding wrapper mb-50 tab-content" style="display: none;">
                    <div id="myFaqs" ng-controller="faqController as faqCtrl" ng-init="faqCtrl.init()" class="ng-scope">
    <div class="tab_side" js-fixed-on-scroll="#subheader-container" fos-offset="144">
        <ul>
            <!-- ngRepeat: category in faqCtrl.categories --><li class="active" ng-repeat="category in faqCtrl.categories">
                <a ng-click="faqCtrl.clear(); faqCtrl.selectCategory(category.id); faqCtrl.getListing();" class="ng-binding">
                    Catering
                </a>
            </li><!-- end ngRepeat: category in faqCtrl.categories -->
        </ul>
    </div>
    <div class="box no-padding right w-760 form" ng-style="{'minHeight': faqCtrl.categories.length * 40}" style="min-height: 40px;">
        <!-- S: banner when no info -->
        <div id="no-info-banner" class="box center with-border bg-green bg-smart mb-15 brandon small" ng-show="!faqCtrl.faqCount &amp;&amp; faqCtrl.showNoFaqBanner">
            <a class="popup-close" ng-click="faqCtrl.showNoFaqBanner = false"><span class="icon-close-green-small"></span></a>
            IT IS CRUCIAL TO PROVIDE COMPLETE INFORMATION IN BRIDESTORY.<br>
            IT helps your potential clients to understand your service(s) more
        </div>
        <!-- E: banner when no info -->
        <!-- S: banner when info exists -->
        <div>
            <div id="with-info-banner" class="box with-border bg-green mb-15 ng-hide" ng-show="faqCtrl.faqCount &amp;&amp; faqCtrl.showWithFaqBanner">
                <a class="popup-close" ng-click="faqCtrl.showWithFaqBanner = false"><span class="icon-close-green-small"></span></a>
                <h6>ALWAYS UPDATE YOUR BUSINESS INFO.</h6>
                <p class="normal italic">Keeping an updated business info in Bridestory will help your potential clients to understand your service(s) better.</p>
            </div>
        </div>
        <!-- E: banner when info exists -->
        <div class="box">
            <h3 class="pink ng-binding">Catering</h3>
            <p class="classic">Help your potential clients understand more about your service(s) by providing useful information.</p>
        </div>

        <!-- ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What type of cuisine do you provide?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick --><div ng-switch-when="tick" class="row ng-scope">
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="418" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    African
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="419" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     American
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="420" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Asian
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="421" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     British
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="422" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Cajun
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="423" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Caribbean
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="424" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Chinese
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="425" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Ethiopian
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="426" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     French
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="427" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     German
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="428" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Indian
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="429" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Indonesian - 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(please specify; separate with commas)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="430" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Italian
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="431" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Japanese
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="432" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Korean
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="433" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Latin American
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="434" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Local
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="435" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Mediterranean
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="436" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Mexican
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="437" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Middle Eastern
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="438" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Spanish
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="439" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Thai
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="440" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     International Cuisine
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="441" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Other - 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(please specify; separate with commas)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please choose the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What dietary needs do you accomodate?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick --><div ng-switch-when="tick" class="row ng-scope">
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="442" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Gluten free
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="443" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Lactose free
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="444" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     No pork
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="445" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Nut free
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="446" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Organic
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="447" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Vegan
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="448" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Vegetarian
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="449" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Other - 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(please specify, separate with commas)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please choose the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Minimum and maximum number of guests</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-invalid ng-invalid-required" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="row row-withmagin ng-scope" ng-class="{'form-error': !faq_form.$valid  &amp;&amp; faq.submitted &amp;&amp; !faq_form.answer.$valid &amp;&amp; !faq.answers}">
                                <textarea name="answer" ng-model="faq.answer" placeholder="[1] person(s) to [1000] person(s)" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg">Please fill in the Answer field</p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Can your menu be adapted to or modified?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio --><div ng-switch-when="radio" class="row ng-scope">
                                <label class="rdo-replace">
                                    <input name="radioAnswer" type="radio" value="0" ng-model="faq.selected" class="ng-pristine ng-valid">
                                    <span></span>
                                    I prefer not to answer (this question will not appear on your profile)
                                </label>
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="450">
                                    <span></span>
                                    Yes 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="451">
                                    <span></span>
                                     No 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please specify the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What catering services do you provide?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick --><div ng-switch-when="tick" class="row ng-scope">
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="452" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Buffet
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="453" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Cake
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="454" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Cake cutting
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="455" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Lunch boxes 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="456" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Cocktail reception
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="457" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Dessert
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="458" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Sitting dinner 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(family style)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="459" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     French service
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="460" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Hors d'oeuvres
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="461" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Plated
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="462" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Server
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(s)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="463" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Stations
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="464" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Tastings
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="465" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Other - 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(please specify; separate with commas)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please choose the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Do you provide tastings?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio --><div ng-switch-when="radio" class="row ng-scope">
                                <label class="rdo-replace">
                                    <input name="radioAnswer" type="radio" value="0" ng-model="faq.selected" class="ng-pristine ng-valid">
                                    <span></span>
                                    I prefer not to answer (this question will not appear on your profile)
                                </label>
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="466">
                                    <span></span>
                                    Yes 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="467">
                                    <span></span>
                                     No 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please specify the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Are you able to provide your own wait staff?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio --><div ng-switch-when="radio" class="row ng-scope">
                                <label class="rdo-replace">
                                    <input name="radioAnswer" type="radio" value="0" ng-model="faq.selected" class="ng-pristine ng-valid">
                                    <span></span>
                                    I prefer not to answer (this question will not appear on your profile)
                                </label>
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="468">
                                    <span></span>
                                    Yes 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="469">
                                    <span></span>
                                     No 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please specify the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Do you provide delivery services?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio --><div ng-switch-when="radio" class="row ng-scope">
                                <label class="rdo-replace">
                                    <input name="radioAnswer" type="radio" value="0" ng-model="faq.selected" class="ng-pristine ng-valid">
                                    <span></span>
                                    I prefer not to answer (this question will not appear on your profile)
                                </label>
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="470">
                                    <span></span>
                                    Yes 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="471">
                                    <span></span>
                                     No 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please specify the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Do you provide your services in other cities or countries?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio --><div ng-switch-when="radio" class="row ng-scope">
                                <label class="rdo-replace">
                                    <input name="radioAnswer" type="radio" value="0" ng-model="faq.selected" class="ng-pristine ng-valid">
                                    <span></span>
                                    I prefer not to answer (this question will not appear on your profile)
                                </label>
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="472">
                                    <span></span>
                                    Yes 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="rdo-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="radio" ng-value="defAnswer.id" ng-model="faq.selected" class="ng-pristine ng-valid" value="473">
                                    <span></span>
                                     No 
                                    <span ng-show="defAnswer.hint" class="ng-binding">(please give details if any)</span>
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="please specify" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please specify the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What bar services do you provide?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick --><div ng-switch-when="tick" class="row ng-scope">
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="474" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Bartender
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(s)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="475" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Champagne toast
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="476" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     House beer
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="477" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     House liquor
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="478" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     House wine
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="479" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Limited bar
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="480" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Liquor license
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="481" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Open bar
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="482" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Premium liquor
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="483" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Signature cocktail
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(s)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="484" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Specialty beer
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="485" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Specialty wine
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="486" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                     Other 
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="(please specify; separate with commas)" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please choose the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What makes your services unique?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-invalid ng-invalid-required" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="row row-withmagin ng-scope" ng-class="{'form-error': !faq_form.$valid  &amp;&amp; faq.submitted &amp;&amp; !faq_form.answer.$valid &amp;&amp; !faq.answers}">
                                <textarea name="answer" ng-model="faq.answer" placeholder="Our highly experienced chefs always take seasonal and local produce to create mouth-watering meals, guaranteeing both freshness and flavour. You can also ask to design a menu that revolves around your favourite ingredients, giving you that additional satisfaction on one of your most meaningful days. All menus are available for tasting by appointment" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg">Please fill in the Answer field</p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">Please list, if any, your business' past achievements and awards</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-invalid ng-invalid-required" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="row row-withmagin ng-scope" ng-class="{'form-error': !faq_form.$valid  &amp;&amp; faq.submitted &amp;&amp; !faq_form.answer.$valid &amp;&amp; !faq.answers}">
                                <textarea name="answer" ng-model="faq.answer" placeholder="In 2013 - Vendor of The Year by Rose Magazine, In 2014 - Best Wedding Vendor by Red Award" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg">Please fill in the Answer field</p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">How far in advance should your client contact you?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-invalid ng-invalid-required" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="row row-withmagin ng-scope" ng-class="{'form-error': !faq_form.$valid  &amp;&amp; faq.submitted &amp;&amp; !faq_form.answer.$valid &amp;&amp; !faq.answers}">
                                <textarea name="answer" ng-model="faq.answer" placeholder="3 months in advance would be great, but if they must, the latest they can contact us 1 month before the D-Day" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg">Please fill in the Answer field</p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What payment systems are available for your business?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-valid" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick --><div ng-switch-when="tick" class="row ng-scope">
                                <!-- ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="907" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Bank transfer
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="908" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Credit card payment
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="909" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    PayPal
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="910" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Cheques
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data --><label class="chk-replace ng-binding ng-scope" ng-repeat="defAnswer in faq.defaultAnswer.data">
                                    <input name="answer" type="checkbox" ng-value="defAnswer.id" value="911" ng-model="defAnswer.checked" ng-checked="defAnswer.checked" ng-change="faqCtrl.checkDefaultAnswer(faq.defaultAnswer.data, faq.defaultAnswer.data.indexOf(defAnswer), faq.maxAnswer)" class="ng-pristine ng-valid">
                                    <span></span>
                                    Cash
                                    <input ng-show="defAnswer.other" type="text" ng-model="defAnswer.otherAnswer" placeholder="" ng-change="faq.otherAnswer = defAnswer.otherAnswer;" ng-focus="defAnswer.checked = 1" ng-click="defAnswer.checked = 1" onclick="return false;" class="ng-pristine ng-valid ng-hide">
                                </label><!-- end ngRepeat: defAnswer in faq.defaultAnswer.data -->
                                <div ng-class="{'form-error' : (!faq_form.$valid || !answerValid) &amp;&amp; faq.submitted &amp;&amp; !faq.answers}">
                                    <p class="form-msg">Please choose the Answer</p>
                                </div>
                            </div>

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  -->
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">What is your payment terms?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-invalid ng-invalid-required" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="row row-withmagin ng-scope" ng-class="{'form-error': !faq_form.$valid  &amp;&amp; faq.submitted &amp;&amp; !faq_form.answer.$valid &amp;&amp; !faq.answers}">
                                <textarea name="answer" ng-model="faq.answer" placeholder="10% after confirmation of contract, 30% after the event, and 60% upon the final delivery" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg">Please fill in the Answer field</p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems --><div ng-repeat="faq in faqCtrl.faqItems" class="mb-20 ng-scope">
            <div class="box no-padding with-border">
                <div class="box box-question">

                    <!-- ngIf: !faq.defaultFaqId -->
                    <!-- ngIf: faq.displayAnswer -->
                    <!-- ngIf: !faq.displayAnswer --><button class="btn with-border btn-smallest ng-scope ng-hide" ng-if="!faq.displayAnswer" ng-click="faqCtrl.openEditForm(faq)" ng-hide="faq.edit">Answer</button><!-- end ngIf: !faq.displayAnswer -->

                    <p class="classic"><strong class="ng-binding">When was your business established?</strong></p>
                </div>
                <div class="box box-answer" ng-show="faq.displayAnswer || faq.edit">
                    <ng-switch on="faq.type || '_undefined_'">
                        <!-- ngSwitchWhen: _undefined_ -->
                        <!-- ngSwitchDefault:  --><p ng-switch-default="" class="classic l30 ng-binding ng-scope ng-hide" ng-hide="faq.edit"></p>
                    </ng-switch>
                    <form class="multiple-choice ng-pristine ng-invalid ng-invalid-required" name="faq_form" ng-submit="faqCtrl.updateFaq(faq_form, faq)" novalidate="" ng-show="faq.edit">
                        <!-- ngIf: !faq.type -->
                        <div ng-switch="faq.type">
                            <!-- Need Styling -->
                            <!-- ngSwitchWhen: tick -->

                            <!-- ngSwitchWhen: radio -->

                            <!-- ngSwitchDefault:  --><div ng-switch-default="" class="row row-withmagin ng-scope" ng-class="{'form-error': !faq_form.$valid  &amp;&amp; faq.submitted &amp;&amp; !faq_form.answer.$valid &amp;&amp; !faq.answers}">
                                <textarea name="answer" ng-model="faq.answer" placeholder="Our business started way back in 2000. We are currently one of the most prominent vendors in our field" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg">Please fill in the Answer field</p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-20 with-border btn-smallest btn-loader" ng-class="{'is-loading-ajax' : loading}" ng-disabled="loading" ng-click="faq.submitted=true">Save Changes</button>
                        <button type="button" class="btn btn-white btn-smallest mt-20" ng-click="faqCtrl.unsetFaq(faq)">Cancel</button>
                    </form>
                </div>
            </div>
        </div><!-- end ngRepeat: faq in faqCtrl.faqItems -->

        <div ng-hide="faqCtrl.creatingNew" class="box no-sidepadding border-t">
            <a ng-click="faqCtrl.openCreateForm()" class="btn with-border">+ Add a new info</a>
        </div>
        <div ng-show="faqCtrl.creatingNew" class="box thin no-sidepadding border-t ng-hide"><h6>Add a new info</h6></div>
        <div ng-show="faqCtrl.creatingNew" class="ng-hide">
            <form name="create_faq_form" ng-submit="faqCtrl.createFaq()" novalidate="" class="ng-pristine ng-invalid ng-invalid-required">
                <h6 class="small">topic or question</h6>
                <div class="row" ng-class="{'form-error': !create_faq_form.$valid &amp;&amp; submitted &amp;&amp; !create_faq_form.question.$valid}">
                    <input name="question" ng-model="faqCtrl.faq.question" required="" class="ng-pristine ng-invalid ng-invalid-required">
                    <p class="form-msg ng-hide" ng-show="!create_faq_form.$valid &amp;&amp; submitted &amp;&amp; !create_faq_form.question.$valid">Please fill in the Question field</p>
                </div>
                <h6 class="small mt-15">information or answer</h6>
                <div class="row" ng-class="{'form-error': !create_faq_form.$valid &amp;&amp; submitted &amp;&amp; !create_faq_form.answer.$valid}">
                    <textarea name="answer" ng-model="faqCtrl.faq.answer" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                    <p class="form-msg ng-hide" ng-show="!create_faq_form.$valid &amp;&amp; submitted &amp;&amp; !create_faq_form.answer.$valid">Please fill in the Answer field</p>
                </div>
                <button class="btn with-border btn-small btn-short btn-loader" ng-class="{'is-loading-ajax' : loading}" type="submit" ng-click="submitted=true">Save Changes</button>
                <button type="button" class="btn btn-short btn-link-grey btn-small btn-cancel" ng-click="faqCtrl.clear()">Cancel</button>
            </form>
        </div>
    </div>
</div>              </div>
                <div ng-init="vpStrengthCtrl.init(0,'yudis-kitchen')" id="profile-strength" class="box no-padding wrapper mb-50 tab-content" style="display: none;">
                    <ng-switch on="profileStrengthReady()">
    <!-- ngSwitchWhen: false -->
    <!-- ngSwitchWhen: true --><div ng-switch-when="true" class="ng-scope">
        <div class="tab_side" js-fixed-on-scroll="#subheader-container" fos-offset="144">
            <ul id="tab_side" js-tab-group="">
                <li class="is-active"><a js-smooth-scroll="#profile-progress" ss-scrolloffset="-178">Profile</a></li>
                <li><a js-smooth-scroll="#project-progress" ss-scrolloffset="-178">Projects</a></li>
                <li><a js-smooth-scroll="#review-progress" ss-scrolloffset="-178">Reviews</a></li>
                <li><a js-smooth-scroll="#sharing-progress" ss-scrolloffset="-178">Sharing</a></li>
            </ul>
        </div>
        <div class="box no-padding right w-760 form">
            <div class="box with-border mb-30">
                <h4 class="brandon brandon-regular gray">your progress so far <span class="giant ng-binding">5%</span></h4>
                <div class="progress">
                    <div class="progress-current" ng-style="{'width' : profileStrengthProgress() + '%'}" style="width: 5.26316%;"></div>
                </div>
                                    <!-- ngIf: profileStrengthProgress()!=100 --><p ng-if="profileStrengthProgress()!=100" class="small italic mb-5 ng-scope">Complete your details to strengthen and optimize your profile</p><!-- end ngIf: profileStrengthProgress()!=100 -->
                    <!-- ngIf: profileStrengthProgress()==100 -->

            </div>
            <div id="profile-progress"></div>
            <table class="strength-table mb-30">

                <tbody><tr class="head">
                    <td>profile <span class="icon-complete ng-hide" ng-show="profileStrength.valid()"></span></td>
                </tr>

                <tr ng-class="{incomplete : !profileStrength.cover.valid()}" js-click-trigger="[tab-anchor='#edit-profile'],.menu_tab_new a[href='#edit-profile'],[scroll-anchor='#profile_picture']" class="incomplete">
                    <td>add a profile picture <span ng-class="{'icon-complete' : profileStrength.cover.valid(), 'icon-strength-next' : !profileStrength.cover.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !profileStrength.businessDetail.valid()}" js-click-trigger="[tab-anchor='#edit-profile'],.menu_tab_new a[href='#edit-profile'],[scroll-anchor='#business_detail']" class="incomplete">
                    <td>fill in about your business <span ng-class="{'icon-complete' : profileStrength.businessDetail.valid(), 'icon-strength-next' : !profileStrength.businessDetail.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !profileStrength.location.valid()}" js-click-trigger="[tab-anchor='#edit-profile'],.menu_tab_new a[href='#edit-profile'],[scroll-anchor='#service']" class="">
                    <td>add locations <span ng-class="{'icon-complete' : profileStrength.location.valid(), 'icon-strength-next' : !profileStrength.location.valid()}" class="icon-complete"></span></td>
                </tr>

                
                <tr ng-class="{incomplete : !profileStrength.contactSocmed.valid()}" js-click-trigger="[tab-anchor='#edit-profile'],.menu_tab_new a[href='#edit-profile'],[scroll-anchor='#social_media']" class="incomplete">
                    <td>add contacts &amp; social media <span ng-class="{'icon-complete' : profileStrength.contactSocmed.valid(), 'icon-strength-next' : !profileStrength.contactSocmed.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !profileStrength.info.valid()}" js-click-trigger="[tab-anchor='#info'],.menu_tab_new a[href='#info']" class="incomplete">
                    <td>add info <span ng-class="{'icon-complete' : profileStrength.info.valid(), 'icon-strength-next' : !profileStrength.info.valid()}" class="icon-strength-next"></span></td>
                </tr>

                
                <tr ng-class="{incomplete : !profileStrength.pricelist.valid()}" js-click-trigger="[tab-anchor='#pricelist'],.menu_tab_new a[href='#pricelist']" class="incomplete">
                    <td>add pricelist <span ng-class="{'icon-complete' : profileStrength.pricelist.valid(), 'icon-strength-next' : !profileStrength.pricelist.valid()}" class="icon-strength-next"></span></td>
                </tr>

                            </tbody></table>
            <div id="project-progress"></div>
            <table class="strength-table mb-30">

                <tbody><tr class="head">
                    <td>Projects<span class="icon-complete ng-hide" ng-show="projectStrength.valid()"></span></td>
                </tr>

                <tr ng-class="{incomplete : !projectStrength.oneProject.valid()}" onclick="window.open('add-project', '_blank');" class="incomplete">
                    <td>add your first project with at least 5 images each <span ng-class="{'icon-complete' : projectStrength.oneProject.valid(), 'icon-strength-next' : !projectStrength.oneProject.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !projectStrength.fiveProject.valid()}" onclick="window.open('add-project', '_blank');" class="incomplete">
                    <td>add 5 projects with at least 5 images each <span ng-class="{'icon-complete' : projectStrength.fiveProject.valid(), 'icon-strength-next' : !projectStrength.fiveProject.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !projectStrength.sevenProject.valid()}" onclick="window.open('add-project', '_blank');" class="incomplete">
                    <td>add 7 projects with at least 5 images each <span ng-class="{'icon-complete' : projectStrength.sevenProject.valid(), 'icon-strength-next' : !projectStrength.sevenProject.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !projectStrength.realWedding.valid()}" onclick="window.open('projects#/wedding-submission', '_blank');" class="incomplete">
                    <td>submit a wedding to blog <span ng-class="{'icon-complete' : projectStrength.realWedding.valid(), 'icon-strength-next' : !projectStrength.realWedding.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !projectStrength.realWeddingPublished.valid()}" onclick="window.open('projects', '_blank');" class="incomplete">
                    <td>Get a real wedding submission featured in our blog <span ng-class="{'icon-complete' : projectStrength.realWeddingPublished.valid(), 'icon-strength-next' : !projectStrength.realWeddingPublished.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !projectStrength.tagVendor.valid()}" onclick="window.open('projects', '_blank');" class="incomplete">
                    <td>tag other vendors involved in your project <span ng-class="{'icon-complete' : projectStrength.tagVendor.valid(), 'icon-strength-next' : !projectStrength.tagVendor.valid()}" class="icon-strength-next"></span></td>
                </tr>

            </tbody></table>
            <div id="review-progress"></div>
            <table class="strength-table mb-30">

                <tbody><tr class="head">
                    <td>Reviews <span class="icon-complete ng-hide" ng-show="reviewStrength.valid()"></span></td>
                </tr>

                <tr ng-class="{incomplete : !reviewStrength.getReview.valid()}" onclick="window.open('reviews#/request', '_blank');" class="incomplete">
                    <td>get a review <span ng-class="{'icon-complete' : reviewStrength.getReview.valid(), 'icon-strength-next' : !reviewStrength.getReview.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !reviewStrength.getThreeReview.valid()}" onclick="window.open('reviews#/request', '_blank');" class="incomplete">
                    <td>get 3 reviews <span ng-class="{'icon-complete' : reviewStrength.getThreeReview.valid(), 'icon-strength-next' : !reviewStrength.getThreeReview.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !reviewStrength.getFiveReview.valid()}" onclick="window.open('reviews#/request', '_blank');" class="incomplete">
                    <td>get 5 reviews <span ng-class="{'icon-complete' : reviewStrength.getFiveReview.valid(), 'icon-strength-next' : !reviewStrength.getFiveReview.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !reviewStrength.writeTwoReview.valid()}" onclick="window.open('reviews#/write', '_blank');" class="incomplete">
                    <td>write 2 reviews <span ng-class="{'icon-complete' : reviewStrength.writeTwoReview.valid(), 'icon-strength-next' : !reviewStrength.writeTwoReview.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !reviewStrength.writeFourReview.valid()}" onclick="window.open('reviews#/write', '_blank');" class="incomplete">
                    <td>write 4 reviews <span ng-class="{'icon-complete' : reviewStrength.writeFourReview.valid(), 'icon-strength-next' : !reviewStrength.writeFourReview.valid()}" class="icon-strength-next"></span></td>
                </tr>
            </tbody></table>
            <div id="sharing-progress"></div>
            <table class="strength-table">

                <tbody><tr class="head">
                    <td>Sharing <span class="icon-complete ng-hide" ng-show="sharingStrength.valid()"></span></td>
                </tr>

                <tr ng-class="{incomplete : !sharingStrength.badge.valid()}" js-click-trigger="[tab-anchor='#badges'],.menu_tab_new a[href='#badges']" class="incomplete">
                    <td>use Bridestory profile badge <span ng-class="{'icon-complete' : sharingStrength.badge.valid(), 'icon-strength-next' : !sharingStrength.badge.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !sharingStrength.shareFacebook.valid()}" ng-click="socialStrength('facebook', 'https://www.bridestory.com/yudis-kitchen')" class="incomplete">
                    <td>share your bridestory profile to facebook <span ng-class="{'icon-complete' : sharingStrength.shareFacebook.valid(), 'icon-strength-next' : !sharingStrength.shareFacebook.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !sharingStrength.shareTwitter.valid()}" ng-click="socialStrength('twitter')" socialshare="" socialshare-text="View YUDI's Kitchen profile at Bridestory https://www.bridestory.com/yudis-kitchen" socialshare-provider="twitter" socialshare-url="https://www.bridestory.com/yudis-kitchen" socialshare-via="thebridestory" class="incomplete">
                    <td>share your bridestory profile to twitter <span ng-class="{'icon-complete' : sharingStrength.shareTwitter.valid(), 'icon-strength-next' : !sharingStrength.shareTwitter.valid()}" class="icon-strength-next"></span></td>
                </tr>

                <tr ng-class="{incomplete : !sharingStrength.followBridestory.valid()}" ng-click="socialStrength('instagram')" class="incomplete">
                    <td>follow bridestory instagram <span ng-class="{'icon-complete' : sharingStrength.followBridestory.valid(), 'icon-strength-next' : !sharingStrength.followBridestory.valid()}" class="icon-strength-next"></span></td>
                </tr>

            </tbody></table>
        </div>
    </div>

    <div class="clear"></div>
</ng-switch>
                </div>

                <div id="badges" class="box no-padding wrapper mb-50 tab-content" style="display: none;">
                    <div class="full-preloader" style="display: none;">
    <img class="load-img" src="https://www.bridestory.com/assets/images/loaderfaster.gif">
</div>

<div class="tab_side" js-fixed-on-scroll="#subheader-container" fos-offset="144">
    <ul id="tab_side" js-tab-group="">
        <li class="is-active"><a js-smooth-scroll="#badge-0" ss-scrolloffset="-187">Round Button</a></li>
        <li><a js-smooth-scroll="#badge-1" ss-scrolloffset="-187">Square Button</a></li>
        <li><a js-smooth-scroll="#badge-2" ss-scrolloffset="-187">Rectangle Button (Small)</a></li>
        <li><a js-smooth-scroll="#badge-3" ss-scrolloffset="-187">Rectangle Button (Big)</a></li>
        <li><a js-smooth-scroll="#badge-4" ss-scrolloffset="-187">Ribbon</a></li>
        <li><a js-smooth-scroll="#badge-5" ss-scrolloffset="-187">Round Label</a></li>
        <li><a js-smooth-scroll="#badge-6" ss-scrolloffset="-187">Transparent Button 1</a></li>
        <li><a js-smooth-scroll="#badge-7" ss-scrolloffset="-187">Transparent Button 2</a></li>
    </ul>
</div>

<div class="box no-padding right w-760 form mb-50 vendor-badges ng-scope" ng-controller="badgeController as badgeCtrl">
    <h3 class="gray big pb-10 line-bottom mb-10">Badges</h3>
    <p class="georgia_small normal mb-30">
        Promote your Bridestory profile by adding a badge to your blog or website. Select your preferred badge design below:
    </p>
    
    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-0" class="gray big pb-10 line-bottom">Round Button</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : pink</h6>
            <label>
                <input type="radio" name="badge0" ng-model="badgeStatus[0]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/small-pink.png" src="https://www.bridestory.com/assets/images/badges/circle/small-pink.png">
            </label>
            <label>
                <input type="radio" name="badge0" ng-model="badgeStatus[0]" value="blackwhite" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/small-blackwhite.png" src="https://www.bridestory.com/assets/images/badges/circle/small-blackwhite.png">
            </label>
            <label>
                <input type="radio" name="badge0" ng-model="badgeStatus[0]" value="blackpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/small-blackpink.png" src="https://www.bridestory.com/assets/images/badges/circle/small-blackpink.png">
            </label>
            <label>
                <input type="radio" name="badge0" ng-model="badgeStatus[0]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/small-grey.png" src="https://www.bridestory.com/assets/images/badges/circle/small-grey.png">
            </label>
            <label>
                <input type="radio" name="badge0" ng-model="badgeStatus[0]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/small-white.png" src="https://www.bridestory.com/assets/images/badges/circle/small-white.png">
            </label>
        </div>
        
        <textarea id="badge0" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="22" height="22" src="https://www.bridestory.com/assets/images/badges/circle/small-pink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge0')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(0)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-1" class="gray big pb-10 line-bottom">Square Button</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : pink</h6>
            <label>
                <input type="radio" name="badge1" ng-model="badgeStatus[1]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/square/pink.png" src="https://www.bridestory.com/assets/images/badges/square/pink.png">
            </label>
            <label>
                <input type="radio" name="badge1" ng-model="badgeStatus[1]" value="blackwhite" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/square/blackwhite.png" src="https://www.bridestory.com/assets/images/badges/square/blackwhite.png">
            </label>
            <label>
                <input type="radio" name="badge1" ng-model="badgeStatus[1]" value="blackpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/square/blackpink.png" src="https://www.bridestory.com/assets/images/badges/square/blackpink.png">
            </label>
            <label>
                <input type="radio" name="badge1" ng-model="badgeStatus[1]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/square/grey.png" src="https://www.bridestory.com/assets/images/badges/square/grey.png">
            </label>
            <label>
                <input type="radio" name="badge1" ng-model="badgeStatus[1]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/square/white.png" src="https://www.bridestory.com/assets/images/badges/square/white.png">
            </label>
        </div>
        
        <textarea id="badge1" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="26" height="26" src="https://www.bridestory.com/assets/images/badges/square/pink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge1')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(1)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-2" class="gray big pb-10 line-bottom">Rectangle Button (Small)</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : pink</h6>
            <label>
                <input type="radio" name="badge2" ng-model="badgeStatus[2]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/small-pink.png" src="https://www.bridestory.com/assets/images/badges/rectangle/small-pink.png">
            </label>
            <label>
                <input type="radio" name="badge2" ng-model="badgeStatus[2]" value="blackwhite" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/small-blackwhite.png" src="https://www.bridestory.com/assets/images/badges/rectangle/small-blackwhite.png">
            </label>
            <label>
                <input type="radio" name="badge2" ng-model="badgeStatus[2]" value="blackpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/small-blackpink.png" src="https://www.bridestory.com/assets/images/badges/rectangle/small-blackpink.png">
            </label>
            <label>
                <input type="radio" name="badge2" ng-model="badgeStatus[2]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/small-grey.png" src="https://www.bridestory.com/assets/images/badges/rectangle/small-grey.png">
            </label>
            <label>
                <input type="radio" name="badge2" ng-model="badgeStatus[2]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/small-white.png" src="https://www.bridestory.com/assets/images/badges/rectangle/small-white.png">
            </label>
        </div>
        
        <textarea id="badge2" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="97" height="30" src="https://www.bridestory.com/assets/images/badges/rectangle/small-pink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge2')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(2)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-3" class="gray big pb-10 line-bottom">Rectangle Button (Big)</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : pink</h6>
            <label>
                <input type="radio" name="badge3" ng-model="badgeStatus[3]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/big-pink.png" src="https://www.bridestory.com/assets/images/badges/rectangle/big-pink.png">
            </label>
            <label>
                <input type="radio" name="badge3" ng-model="badgeStatus[3]" value="blackwhite" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/big-blackwhite.png" src="https://www.bridestory.com/assets/images/badges/rectangle/big-blackwhite.png">
            </label>
            <label>
                <input type="radio" name="badge3" ng-model="badgeStatus[3]" value="blackpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/big-blackpink.png" src="https://www.bridestory.com/assets/images/badges/rectangle/big-blackpink.png">
            </label>
            <label>
                <input type="radio" name="badge3" ng-model="badgeStatus[3]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/big-grey.png" src="https://www.bridestory.com/assets/images/badges/rectangle/big-grey.png">
            </label>
            <label>
                <input type="radio" name="badge3" ng-model="badgeStatus[3]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/rectangle/big-white.png" src="https://www.bridestory.com/assets/images/badges/rectangle/big-white.png">
            </label>
        </div>
        
        <textarea id="badge3" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="205" height="36" src="https://www.bridestory.com/assets/images/badges/rectangle/big-pink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge3')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(3)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-4" class="gray big pb-10 line-bottom">Ribbon</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : pink</h6>
            <label>
                <input type="radio" name="badge4" ng-model="badgeStatus[4]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/ribbon/pink.png" src="https://www.bridestory.com/assets/images/badges/ribbon/pink.png">
            </label>
            <label>
                <input type="radio" name="badge4" ng-model="badgeStatus[4]" value="blackwhite" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/ribbon/blackwhite.png" src="https://www.bridestory.com/assets/images/badges/ribbon/blackwhite.png">
            </label>
            <label>
                <input type="radio" name="badge4" ng-model="badgeStatus[4]" value="blackpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/ribbon/blackpink.png" src="https://www.bridestory.com/assets/images/badges/ribbon/blackpink.png">
            </label>
            <label>
                <input type="radio" name="badge4" ng-model="badgeStatus[4]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/ribbon/grey.png" src="https://www.bridestory.com/assets/images/badges/ribbon/grey.png">
            </label>
            <label>
                <input type="radio" name="badge4" ng-model="badgeStatus[4]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/ribbon/white.png" src="https://www.bridestory.com/assets/images/badges/ribbon/white.png">
            </label>
        </div>
        
        <textarea id="badge4" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="69" height="96" src="https://www.bridestory.com/assets/images/badges/ribbon/pink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge4')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(4)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-5" class="gray big pb-10 line-bottom">Round Label</h3>
        <div class="rdo-replace vendor-badges-small-margin">
            <h6 class="ng-binding">Choose Color : pink</h6>
            <label>
                <input type="radio" name="badge5" ng-model="badgeStatus[5]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/big-pink.png" src="https://www.bridestory.com/assets/images/badges/circle/big-pink.png">
            </label>
            <label>
                <input type="radio" name="badge5" ng-model="badgeStatus[5]" value="blackwhite" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/big-blackwhite.png" src="https://www.bridestory.com/assets/images/badges/circle/big-blackwhite.png">
            </label>
            <label>
                <input type="radio" name="badge5" ng-model="badgeStatus[5]" value="blackpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/big-blackpink.png" src="https://www.bridestory.com/assets/images/badges/circle/big-blackpink.png">
            </label>
            <label>
                <input type="radio" name="badge5" ng-model="badgeStatus[5]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/big-grey.png" src="https://www.bridestory.com/assets/images/badges/circle/big-grey.png">
            </label>
            <label>
                <input type="radio" name="badge5" ng-model="badgeStatus[5]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/circle/big-white.png" src="https://www.bridestory.com/assets/images/badges/circle/big-white.png">
            </label>
        </div>
        
        <textarea id="badge5" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="114" height="114" src="https://www.bridestory.com/assets/images/badges/circle/big-pink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge5')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(5)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-6" class="gray big pb-10 line-bottom">bridestory certified wedding vendor badge (on Transparent background)</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : dark pink</h6>
            <label>
                <input type="radio" name="badge6" ng-model="badgeStatus[6]" value="darkpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/certified/darkpink.png" src="https://www.bridestory.com/assets/images/badges/certified/darkpink.png">
            </label>
            <label>
                <input type="radio" name="badge6" ng-model="badgeStatus[6]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/certified/pink.png" src="https://www.bridestory.com/assets/images/badges/certified/pink.png">
            </label>
            <br>
            <label>
                <input type="radio" name="badge6" ng-model="badgeStatus[6]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/certified/grey.png" src="https://www.bridestory.com/assets/images/badges/certified/grey.png">
            </label>
            <label>
                <input type="radio" name="badge6" ng-model="badgeStatus[6]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img class="vendor-badges-blackbg" ng-src="https://www.bridestory.com/assets/images/badges/certified/white.png" src="https://www.bridestory.com/assets/images/badges/certified/white.png">
            </label>
        </div>
        
        <textarea id="badge6" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="164" height="25" src="https://www.bridestory.com/assets/images/badges/certified/darkpink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge6')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(6)">email this code</button>
        </div>
    </div>

    <div class="box no-padding mb-35 medgray">
        <h3 id="badge-7" class="gray big pb-10 line-bottom">bridestory trusted wedding vendor badge (on Transparent background)</h3>
        <div class="rdo-replace">
            <h6 class="ng-binding">Choose Color : dark pink</h6>
            <label>
                <input type="radio" name="badge7" ng-model="badgeStatus[7]" value="darkpink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/trusted/darkpink.png" src="https://www.bridestory.com/assets/images/badges/trusted/darkpink.png">
            </label>
            <label>
                <input type="radio" name="badge7" ng-model="badgeStatus[7]" value="pink" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/trusted/pink.png" src="https://www.bridestory.com/assets/images/badges/trusted/pink.png">
            </label>
            <br>
            <label>
                <input type="radio" name="badge7" ng-model="badgeStatus[7]" value="grey" class="ng-pristine ng-valid">
                <span></span>
                <img ng-src="https://www.bridestory.com/assets/images/badges/trusted/grey.png" src="https://www.bridestory.com/assets/images/badges/trusted/grey.png">
            </label>
            <label>
                <input type="radio" name="badge7" ng-model="badgeStatus[7]" value="white" class="ng-pristine ng-valid">
                <span></span>
                <img class="vendor-badges-blackbg" ng-src="https://www.bridestory.com/assets/images/badges/trusted/white.png" src="https://www.bridestory.com/assets/images/badges/trusted/white.png">
            </label>
        </div>
        
        <textarea id="badge7" class="codes mb-10 ng-binding" readonly="">&lt;a href="https://www.bridestory.com/yudis-kitchen?utm_source=yudis-kitchen&amp;utm_medium=badge&amp;utm_campaign=vendor-badge" title="YUDI's Kitchen" target="_blank" rel="dofollow"&gt;&lt;img alt="YUDI's Kitchen" width="154" height="40" src="https://www.bridestory.com/assets/images/badges/trusted/darkpink.png" /&gt;&lt;/a&gt;</textarea>
        <div class="button">
            <button class="btn with-border btn-small" ng-click="badgeCtrl.selectTextarea('#badge7')">copy this code</button>
            <button class="btn with-border btn-small" ng-click="badgeCtrl.emailBadge(7)">email this code</button>
        </div>
    </div>

</div>

<script type="text/ng-template" id="modal-send-code.html">
<div class="popup">
    <div class="popup-box theme-green w-500">
        <a class="popup-close" ng-click="close()"><i class="icon-close-big"></i></a>
        <section class="box border-b popup-header center">
            <h4>Add A New Email</h4>
        </section>
        <div class="popup-content center box thick wrapper w-500">
            <p class="georgia_small big">Send code to your web administrator, programmer or developer.<br>
            Or you can also send it to yourself!</p>
            <div class="form mt-20">
                <label>
                    <input type="text" placeholder="Recipient's Email address" ng-model="emailRecipient">
                    <p class="warn-error min" ng-cloak ng-show="emptyEmailBadge">Looks like you forgot to enter your e-mail address!</p>
                    <p class="warn-error min" ng-cloak ng-show="wrongFormatEmailBadge">Oopsie! you might have mispelled your e-mail address.</p>
                </label>
                <label>
                  <textarea ng-model="badgeMessage" placeholder="Add message or notes, i.e. Please help me to put his code in the about section of our website">[[code]]</textarea>
                </label>
            </div>
            <button class="btn btn-gray mt-20 mr-10" ng-click="close()">Cancel</button>
            <button class="btn with-border mt-20" ng-click="sendEmail(emailRecipient, badgeMessage)">Send Email</button>
        </div>
    </div>
</div>
</script>               </div>
            </div>
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
</body>
</html>