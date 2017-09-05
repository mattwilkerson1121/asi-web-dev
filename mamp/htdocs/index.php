<!DOCTYPE html>
<!--[if lt IE 7 ]>              <html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>                 <html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>                 <html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
	<link id="FavIcon" rel="shortcut icon" type="image/x-icon" href="/Content/ValueCityMix/Images/Icons/favicon.ico" />
    <!-- Meta and Link Section -->
    <link rel="canonical" href="http://www.valuecityfurniture.com" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="msvalidate.01" content="65899649E8877152200F2BBED806458F" />
	<meta name="description" content="Guaranteed Everyday Low Price on Furniture - Save on Beds, Bedrooms, Mattresses, Living Rooms, Dining Rooms, Chairs, Sectionals, Couches and Sofas at VCF." />
	<meta name="author" content="Value City Furniture - American Signature Furniture, Inc. 2013" />
	<meta name="owner" content="Value City Furniture - American Signature Furniture, Inc. 2013" />
	<meta name="copyright" content="Value City Furniture - American Signature Furniture, Inc. 2013" />

    <meta name="Googlebot" content="archive, index, follow, all" />

    <meta name="Crawl" content="YES" />
    <meta name="Robots" content="index, follow" />


    <meta name="google-site-verification" content="NXyy8iS4OSQl2YpyF2CzP0rR6kidY-Of56gf7RvimNI" />
	<!-- Open Graph tags-->
	<meta property="og:site_name" content="ValueCityFurniture.com"/>
	<meta property="og:type" content="website" />
	
	<title>Value City Furniture | We Make Furniture Shopping Easy</title>

    <!-- Hawk CSS & JS -->
    <!-- STYLES -->
    <link href="/Content/ValueCityMix/styles/styles.css" rel="stylesheet"/>
	<link href="/Content/ValueCityMix/less/ValueCityMix.min.css" rel="stylesheet"/>
    <!--[if lte IE 9 ]> <link href="http://www.valuecityfurniture.com/Content/ValueCityMix/less/ie9.min.css" rel="stylesheet"/> !-->

	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	!-->
	
	<script src="http://www.valuecityfurniture.com/bundles/jquery?v=dRtwv9vq5lYQ-fR-ADhx2h12SFn-D7_xD0i7xvcnIMI1" type="text/javascript"></script>

	<!-- HawkSearch Auto-complete Scripts -->
    <!-- HawkSearch Auto-complete Initialization -->
    <script>
        (function(hawkSearch) {
            $(document).ready(function() {
                // Hawk Search - Auto-Suggest
                var hawkString = '&hawkhost=1';
                hawkSearch.initAutoSuggest = function () {
                    var ci = getSession('CustomerIntent');
                    var qci = (ci !== '') ? "&ci=" + ci : "";
                    var avRegions = decodeURIComponent(getCookie(getCookieName('AvRegions'), 'AvRegions'));
                    var regionId = getSession('PortalRegionId');
                    
                    // desktop
                    hawkSearch.initSuggester('search-textbox', $('#search-textbox').width() + 'px', 'http://search.blueport.com/sites/asi//ajax.aspx?f=GetSuggestions' + hawkString + '&regionid=' + regionId + '&availabilityregionid=' + avRegions, '') + qci;

                    // mobile header
                    hawkSearch.initSuggester('mobile-search-textbox', $('#mobile-search-textbox').width() + 'px', 'http://search.blueport.com/sites/asi//ajax.aspx?f=GetSuggestions' + hawkString + '&regionid=' + regionId + '&availabilityregionid=' + avRegions, '') + qci;
                };

                if (window.addEventListener) {
                    window.addEventListener('load', hawkSearch.initAutoSuggest, false);
                } else if (window.attachEvent) {
                    window.attachEvent('onload', hawkSearch.initAutoSuggest);
                }
            });
        }(window.HawkSearch = window.HawkSearch || {}));
    </script>
    <script type="text/javascript">
        var portalId = '20';
        var theme = 'ValueCityMix';
        // login/register/account/logout
        var linkLogin = 'https://www.valuecityfurniture.com/account/sign-in';
        var linkLoginText = 'Login';
        var linkRegistration = 'https://www.valuecityfurniture.com/account/register';
        var linkRegistrationText = 'Register';
        var linkAccount = 'https://www.valuecityfurniture.com/account';
        var linkAccountText = 'Your Account';
        var linkLogoutText = 'Logout';
        // page urls
        var linkSearchResult = 'http://www.valuecityfurniture.com/search';
        var linkStoreMap = 'http://www.valuecityfurniture.com/store/locator';
        var linkSignUpForDeals = '';
        var linkShoppingCart = 'https://www.valuecityfurniture.com/shoppingcart';
        var linkHawkSearchResult = '';
        // image server url
        var imageServer = 'http://content.valuecityfurniture.com';
        var portalImageServer = '';
        var imageProductFolder = 'http://content.valuecityfurniture.com/ProductImages/0/';
        var RemoteImageServerURL = 'http://content.valuecityfurniture.com';
        // host
        var SSLModeAbsoluteHost = 'www.valuecityfurniture.com';
        // portal session
        var portalSessionApiUrl = 'https://www.valuecityfurniture.com/api/customer/getsession';
        //Customer properties
        var isSignedIn = false ;
        var isGuestCheckout = false ;
        // signin service url
        var signinServinceUrl = 'https://www.valuecityfurniture.com/account/signin';
        //ASI Mix header
        var enableASIMix = 'True';
        // Availability Messaging
        var endsTodaymessage = 'Ends Today';
        var endsTommorowMessage = 'Ends tomorrow!';
        var limitedTimeOnlyMessage = 'Shop now and save!';
        var endsMessage = 'Ends';
        var whileSuppliesLastMessage = 'Shop now and save!';
        var readLessResource = 'Read Less';
        var readMoreResource = 'Read more';
        var mvcUrls = {
            'signout' : 'https://www.valuecityfurniture.com/api/customer/sign-out',
            //entry page urls
            'checkoutDelivery': 'https://www.valuecityfurniture.com/checkout/delivery',
            'checkoutWarranty': 'https://www.valuecityfurniture.com/checkout/protection',
            'shoppingcart': 'https://www.valuecityfurniture.com/shoppingcart',
            //shopping cart urls
            'shoppingcartUpdateQuantity': '/shoppingcart/updatequantity',
            'shoppingcartApplyFinancePromo': '/shoppingcart/applyfinancepromo',
            'shoppingcartRemoveFinancePromo': '/shoppingcart/removefinancepromo',
            'shoppingcartApplySpecialDiscountPromo': '/shoppingcart/applyspecialdiscountpromo',
            'shoppingcartRemoveSpecialDiscountPromo': '/shoppingcart/removespecialdiscountpromo',
            'shoppingcartGetSpecialDiscounts': '/shoppingcart/getspecialdiscounts',
            'shoppingcartGetFinancePromos': '/shoppingcart/getfinancepromos',
            'shoppingcartGetItems': '/shoppingcart/getitems',
            'shoppingcartApplyUserEnteredSpecialDiscountPromo': '/shoppingcart/applyuserenteredspecialdiscountpromo',
            'shoppingcartToggleWishListItem': '/shoppingcart/togglewishlistitem',
            'shoppingcartSearchBySku': '/shoppingcart/searchbysku',
            'shoppingcartAddFoundItem': '/shoppingcart/addfounditem',
            'shoppingcartProcessCart': '/shoppingcart/processcart',
            'shoppingcartApplyRemoveSpecialDiscountPromo': '/shoppingcart/applyremovespecialdiscountpromo',
            'shoppingcartApplyRemoveFinancePromo': '/shoppingcart/applyremovefinancepromo',
            //easypass urls
            'easyPassProcessVistStore': '/easy-pass/processvisitstore',
            //CMS: Change Location
            'cmsChangeRegion': '',
            //account
            'AddOrUpdateDeliveryAddress': '/account/addorupdatedeliveryaddress',
            'DeleteDeliveryAddress': '/account/deletedeliveryaddress',
            'WishList' : 'https://www.valuecityfurniture.com/account/wish-list',
            'ContactUsCustomPageSubmit' : '/custompage/contactusformsubmit',
            'SurveyCustomPageSubmit' : '/custompage/surveyformsubmit'
        };
        var unsecureHostName = "http://www.valuecityfurniture.com";
        var isResponsive = 'True';
        var mediaQueries = {mobile:'',desktop:'',tablet:''};    
    </script>
    
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <![endif]-->
    	<!-- Respond.js needs to come after all CSS otherwise it throws errors in IE8 -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    	<script src="//www.valuecityfurniture.com/Scripts/lib/rem/rem.js" type="text/javascript"></script>
    <![endif]-->

</head>
<body class="antialiased mix-layout">
	<div id="mvcSpinner" class="loading-content-spinner hide"></div>
	<div id="page-container" class="page-container">
    
        <div id="headerContainer2">
            <header id="top">
                




<nav class="asi-utility-menu">
    <ul>
    	<li>
            <a id="asi-order-tracking-button" href="http://www.valuecityfurniture.com/track-my-order">
                <div class="asi-icon" id="order-tracking-icon">
                	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
                        <style type="text/css">
                            .st0 { fill: #FFFFFF; }
							.st1 { fill: #181818; }
                        </style>
                        <polygon class="st0" points="10.8 10.8 10.8 1 1 1 1 10.8 " />
                        <path class="st1" d="M8.3 6.4c-0.2 0.9-1 1.7-1.9 1.9v-1H5.3v1c-0.9-0.2-1.6-1-1.8-1.9h1V5.3h-1c0.2-0.9 0.9-1.6 1.8-1.8v1h1.1v-1C7.3 3.7 8 4.4 8.2 5.3H7.3v1.1H8.3zM9.4 5.3c-0.2-1.5-1.5-2.7-3-3V1H5.3v1.4c-1.5 0.2-2.7 1.5-3 3H1v1.1h1.4c0.2 1.5 1.4 2.7 3 3v1.4h1.1V9.4c1.5-0.2 2.7-1.5 3-3h1.4V5.3H9.4z" />
                    </svg>
                </div>
                <span>Order Tracking</span>
            </a>
        </li>
        <li class="asi-locator">
            <a id="asi-locator-button" class="au-header-zip" data-bind="click: populateStoreData" href="javascript:void(0)">
                <div class="asi-icon" id="location-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.5 12.9">
                        <style type="text/css">
                            .st0 { fill: #FFFFFF; }
							.st1 { fill: #181818; }
                        </style>
                        <polygon class="st0" points="1 6.4 1 1.5 7.5 1.5 7.5 6.4 7.5 11.4 1 11.4 " />
                        <title> Pin_Icon</title>
                        <desc> Small  black pin </desc>
                        <path class="st1" d="M4.3 6.5c-1 0-1.7-0.8-1.7-1.7s0.8-1.7 1.7-1.7S6 3.9 6 4.8 5.2 6.5 4.3 6.5M4.3 1.5C2.5 1.5 1 3 1 4.8 1 5.4 1.2 6 1.4 6.4s2.8 5 2.8 5 2.6-4.6 2.8-5 0.4-1 0.4-1.6C7.5 3 6.1 1.5 4.3 1.5" />
                    </svg>
                </div>
                <span>
                    Location:
                    <span role="menuitem" type="text" data-bind="text: UserZipCode" class="zipcode js-header-zip au-header-zip" maxlength="7" data-bind="value: UserZipCode">
                    </span>
                </span>
            </a>
            <div class="asi-locator-dropdown">
                <div class="menu-content">
                    <h3>Change Your Location</h3>
                    <div class="asi-locator-search-container">
                        <input id="header-zip" class="asi-locator-input au-header-zip-textbox" data-bind="value: UserZipCode, enterkey: $root.updatePostalCode" type="text" />
                        <img class="asi-locator-search-icon hand" class="hand" data-bind="click: $root.updatePostalCode" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Search_Icon.svg" />
                    </div>
                    <!-- Pickup only -->
                    <!-- ko if: IsPickUpOnly() === true -->
                    <div class="asi-locator-notification">
                        <div class="asi-warning-x red">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <title> Close_Icon</title>
                                <desc> Small red x </desc>
                                <g fill="none">
                                    <g style="stroke-width: 2; stroke: #181818">
                                        <path d="M1.4 1.4L13.6 13.6" />
                                        <path d="M13.6 1.4L1.4 13.6" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        Delivery not available to your postal code
                    </div>
                    <!-- /ko -->
                    <!-- ko if: IsPickUpOnly() === false -->
                    <!-- Delivery -->
                    <div class="asi-locator-notification">
                        <div class="asi-warning-x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 12.5">
                                <desc> Small black check</desc>
                                <path d="M5 12.5L0.3 7.7c-0.4-0.4-0.4-1 0-1.4 0.4-0.4 1-0.4 1.4 0L5 9.7l9.3-9.4c0.4-0.4 1-0.4 1.4 0 0.4 0.4 0.4 1 0 1.4L5 12.5z" />
                            </svg>
                        </div>
                        We deliver to you
                    </div>
                    <!-- /ko -->
                    <!-- Has PickUp-->
                    <!-- ko if: HasPickUp() === true -->
                    <div class="asi-locator-notification">
                        <div class="asi-warning-x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 12.5">
                                <desc> Small black check</desc>
                                <path d="M5 12.5L0.3 7.7c-0.4-0.4-0.4-1 0-1.4 0.4-0.4 1-0.4 1.4 0L5 9.7l9.3-9.4c0.4-0.4 1-0.4 1.4 0 0.4 0.4 0.4 1 0 1.4L5 12.5z" />
                            </svg>
                        </div>
                        Buy online, pick-up here.
                    </div>
                    <!-- /ko -->
                    <div class="asi-locator-separator">
                        <h3>Your closest store:</h3>
                    </div>
                    <div class="asi-locator-map-section">
                        <div class="asi-locator-map-img">
                            <img data-bind="attr:{ src: StoreMapImageUrl}" class="header-zip-store-map" />
                            
                            <button data-bind="click: openStoreDetails">Directions</button>
                        </div>
                        <div class="asi-location-details">
                            <h4 data-bind="html: StoreName"></h4>
                            <div>
                                <span data-bind="html: StoreAddress"></span><br />
                                <span data-bind="text: StoreCity"></span>, <span data-bind="text: StoreState"></span> <span data-bind="text: StorePostalCode"></span><br />

                                <a href="tel:+(888) 751-8552" data-bind="text: StorePhoneNumber"></a>
                            </div>
                            <div class="asi-location-hours">
                                <span>Regular Hours:</span><br />
                                <!-- ko if: StoreDaysArray().length > 0 -->
                                <!-- ko foreach: StoreDaysArray -->
                                <span data-bind="html: $data"></span> <span data-bind="html: $root.StoreHoursArray()[$index()]"></span><br />
                                <!-- /ko -->
                                <!-- /ko -->
                            </div>
                        </div>
                    </div>
                    <div class="asi-locator-endcap">
                        <a href="http://www.valuecityfurniture.com/store-locator">
                            Store Locator
                            <img class="asi-arrow-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Arrow_Icon.svg" />
                        </a>
                    </div>
                	</div>
            	</div>
        	</li>
			<!-- ko if: IsSignedIn() == false || IsSignedInAsGuest() == true -->
	        <li>
	            <a id="asi-wishlist-button" href="https://www.valuecityfurniture.com/account/register">
	                <div class="asi-icon" id="wishlist-icon">
	                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11.2">
	                        <style type="text/css">
	                            .st0 { fill: #FFFFFF; }
								.st1 { fill: #181818; }
	                        </style>
	                        <polygon class="st0" points="1 5.7 1 10.4 10.2 10.4 10.2 5.7 10.2 1 1 1 " />
	                        <title> Page 1</title>
	                        <desc> Heart </desc>
	                        <path class="st1" d="M4.6 10.2L1.4 6.6c0 0-1.2-1.3-1.2-2.7C0.2 2.1 1.1 1 2.7 1c0.9 0 1.7 0.8 2.2 1.3C5.2 1.8 6.1 1 7 1c1.5 0 2.5 1.1 2.5 2.8 0 1.5-1.1 2.7-1.2 2.7L5 10.2c0 0.1-0.1 0.2-0.2 0.2S4.7 10.3 4.6 10.2" />
	                    </svg>
		                </div>
		                <span>Wishlist</span>
		            </a>
	        </li>
	        <li>
	            <a id="asi-my-account-button" href="https://www.valuecityfurniture.com/account/sign-in" class="au-header-signin">
	                <div class="asi-icon" id="my-account-icon">
	                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 12">
	                        <style type="text/css">
	                            .st0 { fill: #FFFFFF; }
								.st1 { fill: #181818; }
	                        </style>
	                        <polygon class="st0" points="10 10.9 1 10.9 1 1.1 10 1.1 "/>
	                        <path class="st1" d="M9.8 8.4L9.8 8.4C9.7 8 9.5 7.7 9.2 7.4l0 0 0 0 0 0 0 0 -2-1.3C7.6 5.6 7.9 5 7.9 4.3V3.6c0-1.4-1-2.5-2.3-2.5S3.3 2.2 3.3 3.6v0.6C3.3 4.9 3.6 5.5 4 6L2 7.3l0 0 0 0 0 0 0 0c-0.4 0.3-0.6 0.6-0.6 1l0 0L1 10.5c0 0.1 0 0.2 0.1 0.3 0 0.1 0.1 0.1 0.2 0.1h8.5c0.1 0 0.1 0 0.2-0.1 0-0.1 0-0.2 0-0.3L9.8 8.4z"/>
	                    </svg>
	                </div>
	                <span>Sign in</span>
	            </a>
	        </li>
        	<!-- /ko -->
        	<!-- ko if: IsSignedIn() && IsSignedInAsGuest() != true --> 
	        <li>
	            <a id="asi-wishlist-button" href="https://www.valuecityfurniture.com/account/wish-list">
	                <div class="asi-icon" id="wishlist-icon">
	                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11.2">
	                        <style type="text/css">
	                            .st0 {
	                                fill: #FFFFFF;
	                            }

	                            .st1 {
	                                fill: #181818;
	                            }
	                        </style>
	                        <polygon class="st0" points="1 5.7 1 10.4 10.2 10.4 10.2 5.7 10.2 1 1 1 " />
	                        <title> Page 1</title>
	                        <desc> Heart </desc>
	                        <path class="st1" d="M4.6 10.2L1.4 6.6c0 0-1.2-1.3-1.2-2.7C0.2 2.1 1.1 1 2.7 1c0.9 0 1.7 0.8 2.2 1.3C5.2 1.8 6.1 1 7 1c1.5 0 2.5 1.1 2.5 2.8 0 1.5-1.1 2.7-1.2 2.7L5 10.2c0 0.1-0.1 0.2-0.2 0.2S4.7 10.3 4.6 10.2" />
	                    </svg>
	                </div>
	                <span>Wishlist</span>
	            </a>
	        </li>
	        <li>
	            <a id="asi-my-account-button" href="https://www.valuecityfurniture.com/account" class="au-header-signin">
	                <div class="asi-icon" id="my-account-icon">
	                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 12">
	                        <style type="text/css">
	                            .st0 { fill: #FFFFFF; }
								.st1 { fill: #181818; }
	                        </style>
	                        <polygon class="st0" points="10 10.9 1 10.9 1 1.1 10 1.1 " />
	                        <path class="st1" d="M9.8 8.4L9.8 8.4C9.7 8 9.5 7.7 9.2 7.4l0 0 0 0 0 0 0 0 -2-1.3C7.6 5.6 7.9 5 7.9 4.3V3.6c0-1.4-1-2.5-2.3-2.5S3.3 2.2 3.3 3.6v0.6C3.3 4.9 3.6 5.5 4 6L2 7.3l0 0 0 0 0 0 0 0c-0.4 0.3-0.6 0.6-0.6 1l0 0L1 10.5c0 0.1 0 0.2 0.1 0.3 0 0.1 0.1 0.1 0.2 0.1h8.5c0.1 0 0.1 0 0.2-0.1 0-0.1 0-0.2 0-0.3L9.8 8.4z" />
	                    </svg>
	                </div>
	                <span data-bind="text: CustomerName"></span>
	            </a>
        	</li>
        	<!-- /ko -->
    	</ul>
	</nav>
<!-- Dynamic menu -->


<nav class="asi-main-menu-outline">

    <div class="asi-logo">
        <a href="http://www.valuecityfurniture.com/" class="asi-full-logo"><img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Logo_Full.svg"></a>
        <a href="http://www.valuecityfurniture.com/" class="asi-tile-icon"><img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Logo_Tile.svg"></a>
    </div>

    <nav id="main-navigation">
             <ul class="asi-main-menu-left">

                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/made-to-mix" target="_self">MADE TO MIX</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                        <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Mix_Traditional_Logo_Black.svg" />
                                                             </div>
                                                         <h3>[un]Traditional</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/all-traditional-furniture" target="_self">View All [un]Traditional</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/living-room" target="_self">Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/bedroom" target="_self">Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/dining-room" target="_self">Dining Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/accents" target="_self">Accents</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                        <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Mix_Modern_Logo_Black.svg" />
                                                             </div>
                                                         <h3>Modern[ish]</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/all-modern-furniture" target="_self">View All Modern[ish]</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/living-room" target="_self">Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/bedroom" target="_self">Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/dining-room" target="_self">Dining Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/accents" target="_self">Accents</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-living-room" target="_self">Mix Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-bedroom" target="_self">Mix Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-dining-room" target="_self">Mix Dining Room</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-434" onclick="peAction(&#39;http://www.valuecityfurniture.com/make-it-you/custom-living-room-furniture&#39;,&#39;_top&#39;,&#39;38&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)"><img alt="groom your living room. define your design in a swoon-worthy room. learn more." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/543083.jpg" data-med="http://content.valuecityfurniture.com/ProductImages/0/543083.jpg" data-sml="http://content.valuecityfurniture.com/ProductImages/0/543085.jpg" src="/Img/Common/pixel.png" title="groom your living room. define your design in a swoon-worthy room. learn more." />
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/living-room-furniture" target="_self">LIVING</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg"/>
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/sofas" target="_self">Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/sectionals" target="_self">Sectionals</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/loveseats" target="_self">Loveseats</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/chairs-chaises" target="_self">Chairs &amp; Chaises</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/sleeper-sofas" target="_self">Sleeper Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/futons" target="_self">Futons</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/recliners-rockers" target="_self">Recliners &amp; Rockers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/ottomans" target="_self">Ottomans</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/lift-chairs" target="_self">Lift Chairs</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg"/>
                                                             </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/tv-stands-media-centers" target="_self">TV Stands &amp; Media Centers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/bookcases" target="_self">Bookcases</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/storage-ottomans" target="_self">Storage Ottomans</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living/cabinets-storage/accent-chests" target="_self">Accent Chests</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Tables_Icon.svg"/>
                                                             </div>
                                                         <h3>Tables</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/tables/coffee-tables" target="_self">Coffee Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/tables/end-tables" target="_self">End Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/tables/sofa-tables" target="_self">Sofa Tables</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg"/>
                                                             </div>
                                                         <h3>Accents</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/fireplaces" target="_self">Fireplaces</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/rugs" target="_self">Rugs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/pillows" target="_self">Pillows</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/lighting" target="_self">Lighting</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/wall-art" target="_self">Wall Art</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/mirrors" target="_self">Mirrors</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/all-accent-pieces" target="_self">All Accent Pieces</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-custom-furniture" target="_self">Shop All Custom Furniture</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-upholstery" target="_self">Shop for Upholstery</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-leather" target="_self">Shop for Leather</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-reclining-sofas" target="_self">Shop all Reclining Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-living-room" target="_self">Shop all Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-whats-on-sale" target="_self">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-living-room-packages" target="_self">See Our Living Room Packages</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-by-brands" target="_self">Shop by Brands</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-436" onclick="peAction(&#39;http://www.valuecityfurniture.com/search/living-room/reclining-furniture&#39;,&#39;_top&#39;,&#39;22&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)"><img alt="reclining finds. discover style that moves you. shop motion furniture" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/543081.jpg" data-med="http://content.valuecityfurniture.com/ProductImages/0/543081.jpg" data-sml="http://content.valuecityfurniture.com/ProductImages/0/543082.jpg" src="/Img/Common/pixel.png" title="reclining finds. discover style that moves you. shop motion furniture" />
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/dining-room-furniture" target="_self">DINING</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Tables_Icon.svg"/>
                                                             </div>
                                                         <h3>Tables</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dining-tables" target="_self">Dining Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dinettes" target="_self">Dinettes</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg"/>
                                                             </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/buffets-sideboards" target="_self">Buffets &amp; Sideboards</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/china-cabinets-curios" target="_self">China Cabinets &amp; Curios</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg"/>
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/seating/dining-chairs" target="_self">Dining Chairs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/seating/counter-bar-stools" target="_self">Counter &amp; Bar Stools</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/seating/benches" target="_self">Benches</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg"/>
                                                             </div>
                                                         <h3>Accents</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/lighting" target="_self">Lighting</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/wall-art" target="_self">Wall Art</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/mirrors" target="_self">Mirrors</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/bars" target="_self">Bars</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/all-accent-pieces" target="_self">All Accent Pieces</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-by-brand" target="_self">Shop by Brand</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-5-piece-dining-rooms" target="_self">Shop for 5 Piece Dining Rooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-7-piece-dining-rooms" target="_self">Shop for 7 Piece Dining Rooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room" target="_self">Shop all Dining Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-whats-on-sale" target="_self">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-438" onclick="peAction(&#39;http://www.valuecityfurniture.com/search/lancaster-dining-room-furniture&#39;,&#39;_top&#39;,&#39;1&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)"><img alt="20% off the entire lancaster dining collection. infinite combinations to mix and make it you. shop lancaster collection." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/543241.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/543241.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/543240.png" src="/Img/Common/pixel.png" title="20% off the entire lancaster dining collection. infinite combinations to mix and make it you. shop lancaster collection." />
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/bedroom-furniture" target="_self">BEDROOM</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                	<div class="menu-item-image-container">
                                                    	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Beds_Icon.svg"/>
                                                    </div>
                                                    <h3>Beds</h3>
                                                    <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/twin-beds" target="_self">Twin Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/full-beds" target="_self">Full Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/queen-beds" target="_self">Queen Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/king-beds" target="_self">King Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/daybeds" target="_self">Daybeds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/futons" target="_self">Futons</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/headboards" target="_self">Headboards</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/bunk-beds-loft-beds" target="_self">Bunk Beds &amp; Loft Beds</a></li>
                                                    </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                	<div class="menu-item-image-container">
                                                   		<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg"/>
                                                    </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/dressers" target="_self">Dressers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/chests" target="_self">Chests</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/nightstands" target="_self">Nightstands</a></li>
                                                         </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg"/>
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/seating/benches-settees" target="_self">Benches &amp; Settees</a></li>
                                                         </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg"/>
                                                             </div>
                                                         <h3>Accents</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/pillows" target="_self">Pillows</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/bed-linens" target="_self">Bed Linens</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/lighting" target="_self">Lighting</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/wall-art" target="_self">Wall Art</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/mirrors" target="_self">Mirrors</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/rugs" target="_self">Rugs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/all-accent-pieces" target="_self">All Accent Pieces</a></li>
                                                         </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-by-brand" target="_self">Shop by Brand</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-5-piece-bedrooms" target="_self">Shop for 5 Piece Bedrooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-6-piece-bedrooms" target="_self">Shop for 6 Piece Bedrooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-bedroom" target="_self">Shop all Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-whats-on-sale" target="_self">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-bedroom-packages" target="_self">See Our Bedroom Packages</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-kids" target="_self">Shop all Kids</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-kids-collections" target="_self">See Our Kids Collections</a></li>
                                                         </ul>
                                             	</div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
													<div class="hand pe-type-id-440" onclick="peAction(&#39;http://www.valuecityfurniture.com/product/collection/bedroom/collections/diana-collection/2038524&#39;,&#39;_top&#39;,&#39;24&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)">
														<img alt="bedrooms with va-va-voom. find the design of your dreams. shop diana collection." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/524403.jpg" data-med="http://content.valuecityfurniture.com/ProductImages/0/524403.jpg" data-sml="http://content.valuecityfurniture.com/ProductImages/0/524402.jpg" src="/Img/Common/pixel.png" title="bedrooms with va-va-voom. find the design of your dreams. shop diana collection." />
													</div>                                                
												</div>
                                     		</div>
                                    		<div class="asi-dropdown-save-footer"><div>
                                    	</div>
                                    </div>
                                 </div>
                            </div>
                     	</li>
                     	<li class="asi-main-menu-list-item">
                         	<a href="http://www.valuecityfurniture.com/mattresses" target="_self">MATTRESSES</a>
                             	<div class="asi-main-menu-dropdown">
                                 	<div class="menu-content">
                                     	<div class="asi-menu-content-centered">
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                <div class="menu-item-image-container">
                                                	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_MattressSets_Icon.svg"/>
                                               	</div>
                                               	<h3>Mattress Sets</h3>
                                             	<ul>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/twin-mattress-sets" target="_self">Twin Mattress Sets</a></li>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/full-mattress-sets" target="_self">Full Mattress Sets</a></li>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/queen-mattress-sets" target="_self">Queen Mattress Sets</a></li>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/king-mattress-sets" target="_self">King Mattress Sets</a></li>
                                             	</ul>
                                             	<div class="megamenu-links-special">
                                                 	<ul>
                                                    	<li><a href="http://www.valuecityfurniture.com/search/v/mattresses/adjustable-bases-foundations" target="_self" class="bold">Adjustable Bases &amp; Foundations</a></li>
                                                	</ul>
                                             	</div>
                                         	</div>
                                         	<div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accessories_Icon.svg"/>
                                                             </div>
                                                         <h3>Accessories</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-frames" target="_self">Bed Frames</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-linens" target="_self">Bed Linens</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/pillows" target="_self">Pillows</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/mattress-protectors" target="_self">Mattress Protectors</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Brands_Icon.svg"/>
                                                             </div>
                                                         <h3>Brands</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautysleep" target="_self">BeautySleep</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest" target="_self">Beautyrest</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver" target="_self">Beautyrest Silver</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-platinum" target="_self">Beautyrest Platinum</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-black" target="_self">Beautyrest Black</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver-hybrid" target="_self">Beautyrest Silver Hybrid</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-hybrid" target="_self">Serta iComfort Hybrid</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-foam" target="_self">Serta iComfort Foam</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/perfect-sleeper" target="_self">Serta Perfect Sleeper</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/miraclefoam" target="_self">MiracleFoam</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Manufacturers_Icon.svg"/>
                                                             </div>
                                                         <h3>Manufacturers</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/serta" target="_self">Serta</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/simmons" target="_self">Simmons</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses" target="_self">Shop All Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-spring-mattresses" target="_self">Shop all Spring Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-hybrid-mattresses" target="_self">Shop all Hybrid Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-foam-mattresses" target="_self">Shop all Foam Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-whats-on-sale" target="_self">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list menu-pe-col">
													<div class="hand pe-type-id-442" onclick="peAction(&#39;http://www.valuecityfurniture.com/financing&#39;,&#39;_top&#39;,&#39;&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)">
														<img alt="48 months special financing available on qualifying orders of $1299 or more with your value plus or signature plus credit card on qualifying orders made between 6/8/2017 - 6/26/2017. details" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/543086.jpg" data-med="http://content.valuecityfurniture.com/ProductImages/0/543086.jpg" data-sml="http://content.valuecityfurniture.com/ProductImages/0/543087.jpg" src="/Img/Common/pixel.png" title="48 months special financing available on qualifying orders of $1299 or more with your value plus or signature plus credit card on qualifying orders made between 6/8/2017 - 6/26/2017. details" />
													</div>                                                
											</div>
                                     	</div>
                                     	<div class="asi-dropdown-save-footer"><div>
                                    </div>
								</div>
                            </div>
                        </div>
                    </li>
             	</ul>
             	<ul class="asi-main-menu-right">
             		<li class="asi-main-menu-list-item">
                 		<a href="http://www.valuecityfurniture.com/search/v/accents" target="_self">ACCENTS</a>
                     		<div class="asi-main-menu-dropdown">
                         		<div class="menu-content">
                             		<div class="asi-menu-content-centered">
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col ">
                                                     <div class="menu-item-image-container">
                                                                 <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_HomeAccessories_Icon.svg"/>
                                                     </div>
                                                 <h3>Home Accessories</h3>
                                                 <ul>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/bed-linens" target="_self">Bed Linens</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/wall-art" target="_self">Wall Art</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/mirrors" target="_self">Mirrors</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/pillows" target="_self">Pillows</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/lighting" target="_self">Lighting</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/rugs" target="_self">Rugs</a></li>
                                                 </ul>
                                     	</div>
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col ">
                                                     <div class="menu-item-image-container">
                                                                 <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Furniture_Icon.svg"/>
                                                     </div>
                                                 <h3>Furniture</h3>
                                                 <ul>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/tv-stands-media-centers" target="_self">TV Stands &amp; Media Centers</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/home-office" target="_self">Home Office</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/bookcases" target="_self">Bookcases</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/chairs" target="_self">Chairs</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/ottomans" target="_self">Ottomans</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/fireplaces" target="_self">Fireplaces</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/benches-settees" target="_self">Benches &amp; Settees</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/bars" target="_self">Bars</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/accent-tables" target="_self">Accent Tables</a></li>
                                                 </ul>
                                     	</div>
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col ">
                                            <div class="menu-item-image-container">
                                            	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Patio_Icon.svg"/>
                                            </div>
                                            <h3>Patio</h3>
                                            <ul>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-chairs" target="_self">Outdoor Chairs</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-tables" target="_self">Outdoor Tables</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-dinettes" target="_self">Outdoor Dinettes</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sofas" target="_self">Outdoor Sofas</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sectionals" target="_self">Outdoor Sectionals</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/umbrellas-gazebos" target="_self">Umbrellas &amp; Gazebos</a></li>
                                            </ul>
                                     	</div>
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col last-menu-col">
                                        	<h3>Quick Links</h3>
                                            <ul>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-by-brand" target="_self">Shop by Brand</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-accents" target="_self">Shop All Accents</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-free-shipping" target="_self">Shop All Free Shipping</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-patio" target="_self">Shop all Patio</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-patio-packages" target="_self">See Our Patio Packages</a></li>
                                            </ul>
                                     	</div>
                                        <div class="asi-dropdown-menu-section-list menu-pe-col">
											<div class="hand pe-type-id-444" onclick="peAction(&#39;http://www.valuecityfurniture.com/search/v/accents/patio&#39;,&#39;_top&#39;,&#39;26&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)">
												<img alt="free delivery on your entire order with patio purchase of $999 or more. shop patio furniture." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/543035.jpg" data-med="http://content.valuecityfurniture.com/ProductImages/0/543035.jpg" data-sml="http://content.valuecityfurniture.com/ProductImages/0/543036.jpg" src="/Img/Common/pixel.png" title="free delivery on your entire order with patio purchase of $999 or more. shop patio furniture." />
											</div>                                                
										</div>
                             		</div>
                             		<div class="asi-dropdown-save-footer"><div>
                            	</div>
							</div>
                        </div>
                    </div>
             	</li>
             	<li class="asi-main-menu-list-item">
                	<a href="http://www.valuecityfurniture.com/search/v/new-arrivals" target="_self">NEW ARRIVALS</a>
             	</li>
             	<li class="asi-main-menu-list-item">
                 	<a href="#" target="_self">INSPIRATION</a>
                     	<div class="asi-main-menu-dropdown">
                         	<div class="menu-content">
                            	<div class="asi-menu-content-centered">
                                    <div class="asi-dropdown-menu-section-list inspiration-menu-col ">
                                        <div class="menu-item-image-container">
                                        	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Inspiration_Icon.svg"/>
                                        </div>
                                        <h3>Inspiration</h3>
                                        <ul>
											<li><a href="http://www.valuecityfurniture.com/blog" target="_self">Blog</a></li>
											<li><a href="http://www.valuecityfurniture.com/customer-gallery" target="_self">Customer Gallery</a></li>
											<li><a href="http://www.valuecityfurniture.com/search/v/inspiration/pinterest" target="_self">Pinterest</a></li>
											<li><a href="http://www.valuecityfurniture.com/weeklyad" target="_self">Furniture Shoppers Guide</a></li>
											<li><a href="http://www.valuecityfurniture.com/buying-guides" target="_self">Buying Guides</a></li>
                                    	</ul>
                                    </div>
                                    <div class="asi-dropdown-menu-section-list inspiration-menu-col ">
                                    <div class="menu-item-image-container">
                                    	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Experiences_Icon.svg"/>
                                    </div>
                                <h3>Experiences</h3>
                                <ul>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/ultimate-comfort" target="_self">Ultimate Comfort</a>
                                 	</li>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/personalized-living" target="_self">Personalized Living</a>
                                 	</li>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/about-us" target="_self">About Us</a>
                                 	</li>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/search/v/bestsellers" target="_self">Best Sellers</a>
                                 	</li>
                                </ul>
                            </div>
                            <div class="asi-dropdown-menu-section-list menu-pe-col">
								<div class="hand pe-type-id-446" onclick="peAction(&#39;http://www.valuecityfurniture.com/search/v/brands/our-furniture-brands/ultimate-comfort&#39;,&#39;_top&#39;,&#39;23&#39;,&#39;/shared/services/pageelement/putcustomerintent.ashx&#39;)"><img alt="sink into style. unwind from the daily grind with ultimate comfort. shop ultimate comfort" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/543079.jpg" data-med="http://content.valuecityfurniture.com/ProductImages/0/543079.jpg" data-sml="http://content.valuecityfurniture.com/ProductImages/0/543080.jpg" src="/Img/Common/pixel.png" title="sink into style. unwind from the daily grind with ultimate comfort. shop ultimate comfort" />
								</div>                                                
							</div>  
                        </div>
                   		<div class="asi-dropdown-save-footer"><div>
					</div>
				</div>
        	</div>
    	</div>
	</li>
	<li class="asi-main-menu-list-item">
		<a href="http://www.valuecityfurniture.com/search/v/on-sale" target="_self">SALE</a>
	</li>
</ul>
	<div class="asi-search-and-cart-menu">
		<ul>
		    <li class="asi-search-close">
		        <div id="asi-close-icon">
		            <div class="asi-icon">
		                <img src="http://www.valuecityfurniture.com/content/ValueCityMix/SVG/Close_Icon.svg" alt=""/>
		            </div>
		        </div>
		    </li>
		    <li class="asi-search-open">
		        <div id="asi-search-icon">
		            <div class="asi-icon">
		                <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Search_Icon.svg" alt=""/>
		            </div>
		        </div>
		    </li>
			<li class="last">  
				<!--Cart Icon-->
				<div class="asi-icon" id="asi-cart-icon" data-toggle="dropdown" data-bind="click: populateShoppingCartForDropDown">
				    <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Cart_Icon.svg" alt="" />
				</div>
				<div>
					<span class="asi-cart-number" id="header-right-features-sc-count" data-bind="text: CartTotalCount"></span>
				</div>
				<!--Cart Dropdown-->
				<div class="asi-cart-dropdown" id="header-right-features-sc-dropdown">
				    <div class="header-right-features-sc-info" data-bind="visible: LoadingCart">
				        <img src="/Img/load.gif" align="middle"/>
				        <span class="please-wait-text">Loading your cart. Please wait...</span>
				    </div>
					<div class="menu-content" data-bind="visible: LoadingCart() == false">
						<!-- ko if: ShoppingCartItemsArray().length != 0 --> 
				        <div id="header-right-features-sc-items">
				            <!-- ko foreach: ShoppingCartItemsArray -->
				            <div class="asi-cart-item">
				                <div class="asi-cart-image-centerer">
				                    <img class="asi-cart-image-wrapper au-sc-preview-item-photo" alt="" data-bind="attr: { src: ItemImageUrl }"/>
				                </div>
				                <div class="asi-cart-description">
				                    <span class="au-sc-preview-item-name" data-bind="text: ItemName"></span><br/>
				                    <span class="asi-price au-sc-preview-item-price" data-bind="text: ItemPrice"></span>
				                    <span class="shopping-cart-quantity">Qty : <span class="bold" data-bind="text: ItemQuantity"></span></span>
				                </div>
				            </div>
				            <!-- /ko -->
				        </div>
				        <!-- /ko -->
				        <!-- ko if: ShoppingCartItemsArray().length == 0 -->
				        <div class="header-right-features-sc-empty" data-bind="visible: LoadingCart() == false">
				            <span >Your cart is empty.</span>
				        </div>
				        <!-- /ko -->
				        <div class="asi-cart-decisions" id="header-right-features-sc-buttons">
				            <button class="asi-mix-button white" data-bind="click: function(data, event) { gotoShoppingCart('https://www.valuecityfurniture.com/shoppingcart', data, event) }">View Cart</button>
				        </div>
					</div>
				</div>
				<!--
				<div id="asi-cart-icon">
				    <div class="asi-icon">
				        <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Cart_Icon.svg" alt="" />
				    </div>
				    <div class="asi-cart-number">2</div>
				</div>
				<div class="asi-cart-dropdown">
				    <div class="menu-content"> !-->
				        <!-- <div class="asi-cart-item asi-cart-items-status">
				            <p>In your home as early as: <strong>Monday, February 13</strong></p>
				        </div> -->
				        <!--<div class="asi-cart-item">
				            <div class="asi-cart-image-centerer">
				                <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/images/shortline-lift-coffeetable.jpg" />
				            </div>
				            <div class="asi-cart-description">Shortline Lift-Top Cocktail Table - Distressed Pine <br /><span class="asi-price">$399.99</span></div>
				        </div>
				        <div class="asi-cart-item">
				            <div class="asi-cart-image-centerer">
				                <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/images/avalon-accent-chair.jpg" />
				            </div>
				            <div class="asi-cart-description">Avalon Accent Chair - Charcoal <br /><span class="asi-sale-price">$129.69</span> <span class="asi-original-price">was $149.99</span></div>
				        </div>
				        <div class="asi-cart-decisions">
				            <button class="white">View Cart</button>
				        </div>
				    </div>
				</div>-->
	    	</li>
		</ul>
	</div>
</nav>
	<div class="asi-search-panel">
		<div class="asi-search-field-container container-fluid">
    		<img id="asi-search-icon" class="asi-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Search_Icon.svg" />
    		<input class="asi-search-input" id="search-textbox" type="search" placeholder="Sectionals, modern, coffee tables, etc." autocomplete="off" />
    		<button id="search-submit-button" class="asi-search-enter-btn asi-mix-button white">Search</button>
			</div>
	</div>
</nav>
			<div id="asi-mobile-header">
			    <div class="asi-mobile-header-logo-container">
			        <a href="/home"><img class="asi-mobile-header-logo" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Logo_Mobile.svg" alt="VCF" /></a>
			    </div>
			    <button class="asi-mobile-header-location-pin" onclick="location.href='/store-locator'">
			        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 8.5 12.9" style="enable-background:new 0 0 8.5 12.9;" xml:space="preserve">
			        <g>
			            <polygon id="path-1" class="st0" points="1,6.4 1,1.5 7.5,1.5 7.5,6.4 7.5,11.4 1,11.4 	" />
			        </g>
			        <g id="Symbols">
			        <g id="Nav_850px" transform="translate(-580.000000, -11.000000)">
			        <g id="Pin_Icon" transform="translate(580.000000, 11.000000)">
			        <g id="Page-1">
			        <g id="Clip-2">
			        </g>
			        <path id="Fill-1" class="st1" d="M4.3,6.5c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7S6,3.9,6,4.8S5.2,6.5,4.3,6.5 M4.3,1.5
			              C2.5,1.5,1,3,1,4.8C1,5.4,1.2,6,1.4,6.4s2.8,5,2.8,5s2.6-4.6,2.8-5s0.4-1,0.4-1.6C7.5,3,6.1,1.5,4.3,1.5" />
			          </g>
			        </g>
			      </g>
			    </g>
			    </svg>
			    </button>
			    <a href="/shoppingcart" class="asi-mobile-header-cart-icon-container">
			        <div class="asi-mobile-header-cart-icon"><img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Cart_Icon.svg" alt="" /></div><div class="asi-mobile-header-cart-number" id="header-right-features-sc-count" data-bind="text: CartTotalCount"></div>
			    </a>
			</div>
			<nav id="mobile-navigation">
			    <button id="asi-mobile-nav-toggle" class="hamburger  hamburger--collapse">
			        <span class="hamburger-box">
			            <span class="hamburger-inner"></span>
			        </span>
			    </button>
			</nav>
		</header>
	</div>

    <div id="headerContainer1" class="headerContainer1">
		<div class="asi-mobile-nav-container">
		    <nav class="asi-mobile-nav">
		        <header>
		            <!-- <img class="asi-mobile-logo" src="/assets/svg/vcf-logo-mobile.svg" alt="VCF"/> -->
		            <!-- <button id="asi-mobile-search-toggle">
		                <svg width="18px" height="18px" viewBox="239 27 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		                    <defs></defs>
		                    <path d="M255.081742,42.0013527 L250.721742,37.6473527 C252.87538,34.9262353 252.541376,30.9994405 249.959098,28.6811489 C247.37682,26.3628573 243.436868,26.4526239 240.962853,28.8861164 C238.488838,31.3196089 238.334021,35.2575409 240.609355,37.87775 C242.884688,40.4979591 246.805432,40.8967622 249.561742,38.7883527 L253.931742,43.1493527 L255.081742,42.0013527 Z M242.151742,37.0873527 C240.503203,35.4409119 240.247509,32.859138 241.541068,30.9213167 C242.834628,28.9834955 245.317053,28.2295068 247.469831,29.1205697 C249.622609,30.0116327 250.845973,32.2994959 250.391583,34.5846604 C249.937194,36.8698249 247.931645,38.5156406 245.601742,38.5153527 C244.306867,38.5198033 243.064227,38.0050981 242.151742,37.0863527 L242.151742,37.0873527 Z" id="Search-Icon-Copy" stroke="none" fill="#222222" fill-rule="evenodd"></path>
		                </svg>
		            </button> -->
		            <form>
		                <input id="mobile-search-textbox" class="asi-mobile-search" type="search" placeholder="Chairs, modern, etc." autocomplete="off" />
		                <div class="asi-mobile-search-icon">
		                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		                         viewBox="0 0 16.1 16.1" style="enable-background: new 0 0 16.1 16.1;" xml:space="preserve">
		                    <g id="Symbols">
		                    <g id="Nav_850px" transform="translate(-771.000000, -59.000000)"><path id="Search-Icon" class="st0" d="M787.1,74l-4.4-4.4c2.2-2.7,1.8-6.6-0.8-9s-6.5-2.2-9,0.2c-2.5,2.4-2.6,6.4-0.4,9s6.2,3,9,0.9l4.4,4.4L787.1,74z M774.1,69.1c-1.6-1.6-1.9-4.2-0.6-6.2c1.3-1.9,3.8-2.7,5.9-1.8c2.2,0.9,3.4,3.2,2.9,5.5c-0.5,2.3-2.5,3.9-4.8,3.9C776.3,70.5,775,70,774.1,69.1L774.1,69.1z" /></g>
		                </g>
		            </svg>
		                </div>
		                <button class="asi-mobile-search-clear" type="reset" name="reset" value="CLEAR">
		                    <svg width="100%" height="100%" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		                        <g id="Navigation-Mobile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                            <g id="MobileNav_Search2" transform="translate(-241.000000, -27.000000)">
		                                <g id="Close_Icon-Copy" transform="translate(241.000000, 27.000000)">
		                                    <circle id="Oval" fill="#9B9B9B" fill-rule="evenodd" cx="8" cy="8" r="8"></circle>
		                                    <path d="M5,5 L11,11" id="Line" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square"></path>
		                                    <path d="M11,4.92893219 L5,11" id="Line" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square"></path>
		                                </g>
		                            </g>
		                        </g>
		                    </svg>
		                </button>
		            </form>
		            <!-- <div class="asi-mobile-nav-close-btn"> -->

		            <button id="asi-mobile-nav-close-btn" class="hamburger  hamburger--collapse is-active">
		                <span class="hamburger-box">
		                    <span class="hamburger-inner"></span>
		                </span>
		            </button>
		            <!-- </div> -->
		            <div class="asi-search-underline"></div>
		        </header>
		        <ul class="body">
		            
		            <li class="tier tier-1" data-mobile-nav-tier="1">
		                <ul class="group" data-mobile-nav-group="root" data-mobile-nav-parent-tier="1">
		                    <li data-mobile-nav-target="Made to Mix">Made to Mix</li>
		                    <li data-mobile-nav-target="Living">Living</li>
		                    <li data-mobile-nav-target="Dining">Dining</li>
		                    <li data-mobile-nav-target="Bedroom">Bedroom</li>
		                    <li data-mobile-nav-target="Mattresses">Mattresses</li>
		                    <li data-mobile-nav-target="Accents">Accents</li>
		                    <li><a target="_self" href="http://www.valuecityfurniture.com/search/v/new-arrivals">New Arrivals</a></li>
		                    <li data-mobile-nav-target="Inspiration">Inspiration</li>
		                    <li><a target="_self" href="http://www.valuecityfurniture.com/search/v/on-sale">Sale</a></li>
		                </ul>
		            </li>
		        
		            <li class="tier tier-2" data-mobile-nav-tier="2">
		                <ul class="group" data-mobile-nav-group="Made to Mix" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Made to Mix</li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional" style="text-transform:none;">[un]Traditional</li>
		                    <li data-mobile-nav-target="Made to Mix-Modern" style="text-transform:none;">Modern[ish]</li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links">Quick Links</li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Living</li>
		                    <li data-mobile-nav-target="Living-Seating">Seating</li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Living-Tables">Tables</li>
		                    <li data-mobile-nav-target="Living-Accents">Accents</li>
		                    <li data-mobile-nav-target="Living-Quick Links">Quick Links</li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Dining</li>
		                    <li data-mobile-nav-target="Dining-Tables">Tables</li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Dining-Seating">Seating</li>
		                    <li data-mobile-nav-target="Dining-Accents">Accents</li>
		                    <li data-mobile-nav-target="Dining-Quick Links">Quick Links</li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Bedroom</li>
		                    <li data-mobile-nav-target="Bedroom-Beds">Beds</li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Bedroom-Seating">Seating</li>
		                    <li data-mobile-nav-target="Bedroom-Accents">Accents</li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links">Quick Links</li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Mattresses</li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets">Mattress Sets</li>
		                    <li><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/adjustable-bases-foundations">Adjustable Bases &amp; Foundations</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories">Accessories</li>
		                    <li data-mobile-nav-target="Mattresses-Brands">Brands</li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers">Manufacturers</li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links">Quick Links</li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Accents</li>
		                    <li data-mobile-nav-target="Accents-Home Accessories">Home Accessories</li>
		                    <li data-mobile-nav-target="Accents-Furniture">Furniture</li>
		                    <li data-mobile-nav-target="Accents-Patio">Patio</li>
		                    <li data-mobile-nav-target="Accents-Quick Links">Quick Links</li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Inspiration" data-mobile-nav-parent-tier="2">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="root">Inspiration</li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration">Inspiration</li>
		                    <li data-mobile-nav-target="Inspiration-Experiences">Experiences</li>
		                </ul>
		            </li>
		            
		            <li class="tier tier-3" data-mobile-nav-tier="3">
		                <ul class="group" data-mobile-nav-group="Made to Mix-Traditional" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Made to Mix" >[un]Traditional</li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-View All Traditional" style="text-transform:none;"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/all-traditional-furniture">View All [un]Traditional</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Living Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/living-room">Living Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Bedroom"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/bedroom">Bedroom</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Dining Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/dining-room">Dining Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Accents"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/accents">Accents</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Made to Mix-Modern" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Made to Mix" >Modern[ish]</li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-View All Modern" style="text-transform:none;"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/all-modern-furniture">View All Modern[ish]</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Living Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/living-room">Living Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Bedroom"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/bedroom">Bedroom</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Dining Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/dining-room">Dining Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Accents"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/accents">Accents</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Made to Mix-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Made to Mix">Quick Links</li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links-Mix Living Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-living-room">Mix Living Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links-Mix Bedroom"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-bedroom">Mix Bedroom</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links-Mix Dining Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-dining-room">Mix Dining Room</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Seating" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Seating</li>
		                    <li data-mobile-nav-target="Living-Seating-Sofas-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating">View All Seating</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Sofas"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/sofas">Sofas</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Sectionals"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/sectionals">Sectionals</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Loveseats"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/loveseats">Loveseats</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Chairs &amp; Chaises"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/chairs-chaises">Chairs &amp; Chaises</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Sleeper Sofas"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/sleeper-sofas">Sleeper Sofas</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Futons"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/futons">Futons</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Recliners &amp; Rockers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/recliners-rockers">Recliners &amp; Rockers</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Ottomans"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/ottomans">Ottomans</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Lift Chairs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/seating/lift-chairs">Lift Chairs</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Cabinets &amp; Storage" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Cabinets & Storage</li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage">View All Cabinets & Storage</a></li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-TV Stands &amp; Media Centers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/tv-stands-media-centers">TV Stands &amp; Media Centers</a></li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-Bookcases"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/bookcases">Bookcases</a></li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-Storage Ottomans"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/storage-ottomans">Storage Ottomans</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Tables" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Tables</li>
		                    <li data-mobile-nav-target="Living-Tables-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/tables">View All Tables</a></li>
		                    <li data-mobile-nav-target="Living-Tables-Coffee Tables"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/tables/coffee-tables">Coffee Tables</a></li>
		                    <li data-mobile-nav-target="Living-Tables-End Tables"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/tables/end-tables">End Tables</a></li>
		                    <li data-mobile-nav-target="Living-Tables-Sofa Tables"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/tables/sofa-tables">Sofa Tables</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Accents" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Accents</li>
		                    <li data-mobile-nav-target="Living-Accents-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents">View All Accents</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Fireplaces"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/fireplaces">Fireplaces</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Rugs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/rugs">Rugs</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Pillows"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Lighting"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/lighting">Lighting</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Wall Art"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/wall-art">Wall Art</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Mirrors"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/mirrors">Mirrors</a></li>
		                    <li data-mobile-nav-target="Living-Accents-All Accent Pieces"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/accents/all-accent-pieces">All Accent Pieces</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Quick Links</li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop All Custom Furniture"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-custom-furniture">Shop All Custom Furniture</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop for Upholstery"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-upholstery"> Shop for Upholstery</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop for Leather"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-leather"> Shop for Leather</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop all Reclining Sofas"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-reclining-sofas"> Shop all Reclining Sofas</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop all Living Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-living-room"> Shop all Living Room</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See What&#39;s on Sale"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-whats-on-sale"> See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See Our Living Room Packages"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-living-room-packages"> See Our Living Room Packages</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See Our Best Sellers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-best-sellers"> See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See Our Collections"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-collections"> See Our Collections</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop by Brands"><a target="_self" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-by-brands"> Shop by Brands</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Tables" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Tables</li>
		                    <li data-mobile-nav-target="Dining-Tables-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/tables">View All Tables</a></li>
		                    <li data-mobile-nav-target="Dining-Tables-Dining Tables"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dining-tables">Dining Tables</a></li>
		                    <li data-mobile-nav-target="Dining-Tables-Dinettes"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dinettes">Dinettes</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Cabinets &amp; Storage" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage">View All Cabinets &amp; Storage</a></li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage-Buffets &amp; Sideboards"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/buffets-sideboards">Buffets &amp; Sideboards</a></li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage-China Cabinets &amp; Curios"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/china-cabinets-curios">China Cabinets &amp; Curios</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Seating" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Seating</li>
		                    <li data-mobile-nav-target="Dining-Seating-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/seating">View All Seating</a></li>
		                    <li data-mobile-nav-target="Dining-Seating-Dining Chairs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/seating/dining-chairs">Dining Chairs</a></li>
		                    <li data-mobile-nav-target="Dining-Seating-Counter &amp; Bar Stools"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/seating/counter-bar-stools">Counter &amp; Bar Stools</a></li>
		                    <li data-mobile-nav-target="Dining-Seating-Benches"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/seating/benches">Benches</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Accents" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Accents</li>
		                    <li data-mobile-nav-target="Dining-Accents-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/accents">View All Accents</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Lighting"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/lighting">Lighting</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Wall Art"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/wall-art">Wall Art</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Mirrors"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/mirrors">Mirrors</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Bars"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/bars">Bars</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-All Accent Pieces"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/all-accent-pieces">All Accent Pieces</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Quick Links</li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop by Brand"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-by-brand">Shop by Brand</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop for 5 Piece Dining Rooms"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-5-piece-dining-rooms">Shop for 5 Piece Dining Rooms</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop for 7 Piece Dining Rooms"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-7-piece-dining-rooms">Shop for 7 Piece Dining Rooms</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop all Dining Room"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room">Shop all Dining Room</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-See What&#39;s on Sale"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-whats-on-sale">See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-See Our Best Sellers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-best-sellers">See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-See Our Collections"><a target="_self" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-collections">See Our Collections</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Beds" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Beds</li>
		                    <li data-mobile-nav-target="Bedroom-Beds-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds">View All Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Twin Beds"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/twin-beds">Twin Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Full Beds"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/full-beds"> Full Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Queen Beds"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/queen-beds"> Queen Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-King Beds"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/king-beds"> King Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Daybeds"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/daybeds"> Daybeds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Futons"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/futons"> Futons</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Headboards"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/headboards"> Headboards</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Bunk Beds &amp; Loft Beds"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/bunk-beds-loft-beds"> Bunk Beds &amp; Loft Beds</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Cabinets &amp; Storage" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage">View All Cabinets &amp; Storage</a></li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-Dressers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/dressers">Dressers</a></li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-Chests"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/chests">Chests</a></li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-Nightstands"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/nightstands">Nightstands</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Seating" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Seating</li>
		                    <li data-mobile-nav-target="Bedroom-Seating-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/seating">View All Seating</a></li>
		                    <li data-mobile-nav-target="Bedroom-Seating-Benches &amp; Settees"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/seating/benches-settees">Benches &amp; Settees</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Accents" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Accents</li>
		                    <li data-mobile-nav-target="Bedroom-Accents-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents">View All Accents</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Pillows"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Bed Linens"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/bed-linens"> Bed Linens</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Lighting"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/lighting"> Lighting</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Wall Art"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/wall-art"> Wall Art</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Mirrors"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/mirrors"> Mirrors</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Rugs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/rugs"> Rugs</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-All Accent Pieces"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/all-accent-pieces"> All Accent Pieces</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Quick Links</li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop by Brand"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-by-brand">Shop by Brand</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop for 5 Piece Bedrooms"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-5-piece-bedrooms">Shop for 5 Piece Bedrooms</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop for 6 Piece Bedrooms"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-6-piece-bedrooms">Shop for 6 Piece Bedrooms</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop all Bedroom"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-bedroom">Shop all Bedroom</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See What&#39;s on Sale"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-whats-on-sale">See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Bedroom Packages"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-bedroom-packages">See Our Bedroom Packages</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Best Sellers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-best-sellers">See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Collections"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-collections">See Our Collections</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop all Kids"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-kids">Shop all Kids</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Kids Collections"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-kids-collections">See Our Kids Collections</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Mattress Sets" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Mattress Sets</li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets">View All Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-Twin Mattress Sets"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/twin-mattress-sets">Twin Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-Full Mattress Sets"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/full-mattress-sets">Full Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-Queen Mattress Sets"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/queen-mattress-sets">Queen Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-King Mattress Sets"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/king-mattress-sets">King Mattress Sets</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Accessories" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Accessories</li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories">View All Accessories</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Bed Frames"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-frames">Bed Frames</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Bed Linens"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-linens">Bed Linens</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Pillows"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Mattress Protectors"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/mattress-protectors">Mattress Protectors</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Brands" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Brands</li>
		                    <li data-mobile-nav-target="Mattresses-Brands-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands">View All Brands</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-BeautySleep"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautysleep">BeautySleep</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest"> Beautyrest</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Silver"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver"> Beautyrest Silver</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Platinum"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-platinum"> Beautyrest Platinum</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Black"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-black"> Beautyrest Black</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Silver Hybrid"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver-hybrid"> Beautyrest Silver Hybrid</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Serta iComfort Hybrid"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-hybrid"> Serta iComfort Hybrid</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Serta iComfort Foam"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-foam"> Serta iComfort Foam</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Serta Perfect Sleeper"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/perfect-sleeper"> Serta Perfect Sleeper</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-MiracleFoam"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/miraclefoam"> MiracleFoam</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Manufacturers" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Manufacturers</li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers">View All Manufacturers</a></li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers-Serta"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/serta">Serta</a></li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers-Simmons"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/simmons">Simmons</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Quick Links</li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop All Mattresses"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses">Shop All Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop all Spring Mattresses"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-spring-mattresses">Shop all Spring Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop all Hybrid Mattresses"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-hybrid-mattresses">Shop all Hybrid Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop all Foam Mattresses"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-foam-mattresses">Shop all Foam Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-See What&#39;s on Sale"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-whats-on-sale">See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-See Our Best Sellers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-best-sellers">See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-See Our Collections"><a target="_self" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-collections">See Our Collections</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Home Accessories" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Home Accessories</li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories">View All Home Accessories</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Bed Linens"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/bed-linens">Bed Linens</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Wall Art"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/wall-art">Wall Art</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Mirrors"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/mirrors">Mirrors</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Pillows"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Lighting"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/lighting">Lighting</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Rugs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/rugs">Rugs</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Furniture" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Furniture</li>
		                    <li data-mobile-nav-target="Accents-Furniture-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture">View All Furniture</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-TV Stands &amp; Media Centers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/tv-stands-media-centers">TV Stands &amp; Media Centers</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Home Office"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/home-office">Home Office</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Bookcases"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/bookcases">Bookcases</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Chairs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/chairs">Chairs</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Ottomans"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/ottomans">Ottomans</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Fireplaces"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/fireplaces">Fireplaces</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Benches &amp; Settees"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/benches-settees">Benches &amp; Settees</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Bars"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/bars">Bars</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Accent Tables"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/furniture/accent-tables">Accent Tables</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Patio" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Patio</li>
		                    <li data-mobile-nav-target="Accents-Patio-All"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio">View All Patio</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Chairs"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-chairs">Outdoor Chairs</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Tables"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-tables">Outdoor Tables</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Dinettes"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-dinettes"> Outdoor Dinettes</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Sofas"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sofas"> Outdoor Sofas</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Sectionals"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sectionals"> Outdoor Sectionals</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Umbrellas &amp; Gazebos"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/patio/umbrellas-gazebos"> Umbrellas &amp; Gazebos</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Quick Links</li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop by Brand"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-by-brand">Shop by Brand</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop All Accents"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-accents"> Shop All Accents</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-See Our Best Sellers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-best-sellers"> See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop All Free Shipping"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-free-shipping"> Shop All Free Shipping</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop all Patio"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-patio"> Shop all Patio</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-See Our Patio Packages"><a target="_self" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-patio-packages"> See Our Patio Packages</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Inspiration-Inspiration" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Inspiration">Inspiration</li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Blog"><a target="_self" href="http://www.valuecityfurniture.com/blog">Blog</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Customer Gallery"><a target="_self" href="http://www.valuecityfurniture.comcustomer-gallery">Customer Gallery</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Pinterest"><a target="_self" href="http://www.valuecityfurniture.com/search/v/inspiration/pinterest">Pinterest</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Furniture Shoppers Guide"><a target="_self" href="http://www.valuecityfurniture.com/weeklyad">Furniture Shoppers Guide</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Buying Guides"><a target="_self" href="http://www.valuecityfurniture.com/buying-guides">Buying Guides</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Inspiration-Experiences" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Inspiration">Experiences</li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-Ultimate Comfort"><a target="_self" href="http://www.valuecityfurniture.com/search/v/brands/our-furniture-brands/ultimate-comfort">Ultimate Comfort</a></li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-Personalized Living"><a target="_self" href="http://www.valuecityfurniture.com/personalized-living">Personalized Living</a></li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-About Us"><a target="_self" href="http://www.valuecityfurniture.com/about-us">About Us</a></li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-Best Sellers"><a target="_self" href="http://www.valuecityfurniture.com/search/v/bestsellers">Best Sellers</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		            </li>
		        </ul>
		        <ul class="footer">
		            <li class="asi-mobile-order-tracking"><a href="http://www.valuecityfurniture.com/track-my-order">Order Tracking</a></li>

		            <!-- ko if: IsSignedIn() == false || IsSignedInAsGuest() == true -->
		            <li class="asi-mobile-wishlist"><a href="https://www.valuecityfurniture.com/account/register"> Wishlist</a></li>
		            <li class="asi-mobile-my-account"><a href="https://www.valuecityfurniture.com/account/register"> Create Account </a></li>
		            <!--/ko-->
		            <!-- ko if: IsSignedIn() && IsSignedInAsGuest() != true --> 
		            <li class="asi-mobile-wishlist"><a href="https://www.valuecityfurniture.com/account/wish-list"> Wishlist</a></li>
		            <li class="asi-mobile-my-account"><a href="https://www.valuecityfurniture.com/account"><span data-bind="text: CustomerName"></span></a></li>
		            <!--/ko-->

		        </ul>
		    </nav>
		</div>
		<div class="overlay"></div>
	</div>   
	<div class="clear"></div>
	<section class="page-body">
		<div id="page-content" class="container page-content">        
		<script type="application/ld+json">
		    {
		    "@context": "http://schema.org",
		    "@type": "WebSite",
		    "url": "http://www.valuecityfurniture.com ",
		    "potentialAction": {
		    "@type": "SearchAction",
		    "target": "http://www.valuecityfurniture.com/search?keyword={search_term_string}",
		    "query-input": "required name=search_term_string"
		    }
		    }
		</script>
		<!-- start mobile header -->
    
    <section class="home-content">

    <!-- START : REQUIRED for ASIHERO PLUGIN !-->
        <!-- **** asiHero.css & asiHero.js :: YOU MUST INCLUDE THIS FILE FOR THE PLUGIN **** !-->
        <link rel="stylesheet" type="text/css" href="/css/asi-plugins/asiHero.css"/>
        <script type="text/javascript" src="/js/asi-plugins/jquery.asiHero.js"></script>
    <!-- END : REQUIRED for ASIHERO PLUGIN !-->
    <!-- Home-row-0 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-417">   
            <div id="asi-fluid-html-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fluid-html-hero').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        dataPosition : '0',
                        divider : 'true',
                        contentCol : 'col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12',
                        //urgencyText : 'ENDS TODAY!',
                        headlineText : '<div id="hero-offer-logo"><img src="https://asf.scene7.com/is/image/ASF/asi-mtm-alpha-logo?fmt=png-alpha" alt="made to mix furniture logo"></div><h1 class="asiH1 asi-h1 display-1 asi-display-1">10% OFF</h1>',
                        messageText : 'MADE TO MIX FURNITURE',
                        messageSubText : 'Online and in stores. Prices as marked.',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg',
                        bgColorContent : '#000000',
                        paddingSection : '0px',
                        paddingBody : '12% 15px',
                        paddingContent : '25px',
                        addButton : 'true',
                        buttonText : 'SHOP NOW',
                        buttonClass : 'asi-mix-button red',
                        buttonLink : '/search/on-sale',
                        complete: function(){ console.log('asi fluid html hero compiled')}
                    });
                });
            </script>
            <hr>
        </div>
    </div>
    <style>
        #hero-offer-logo{position:relative;width:100%;padding:0;margin:0 auto;text-align:center;}
    </style>
    <!-- Home-row-1 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-417">   
            <h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em !important;color:#54585a !important;">
                Fluid Width HTML Hero w/ BG Image
            </h2>
            <div id="asi-fluid-html-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fluid-html-hero').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        dataPosition : '0',
                        divider : 'true',
                        contentCol : 'col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12',
                        urgencyText : 'ENDS TODAY!',
                        headlineText : '<h1 class="asiH1 asi-h1 display-1 asi-display-1">20% OFF<br>OVERSTOCK</h1>',
                        messageText : 'SCORE SOFAS, CHAIRS, BEDS, & MORE',
                        messageSubText : 'while quantities last - selection may vary by store',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg',
                        bgColorContent : '#EE3D42',
                        paddingSection : '0px',
                        paddingBody : '12% 15px',
                        paddingContent : '25px',
                        addButton : 'true',
                        buttonText : 'SHOP NOW',
                        buttonClass : 'asi-mix-button white',
                        buttonLink : '/search/on-sale',
                        complete: function(){ console.log('asi fluid html hero compiled')}
                    });
                });
            </script>
            <hr>
            <h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em !important;color:#54585a !important;">
                Fluid Width Adaptive Image Hero
            </h2>
            <div id="asi-adaptive-img-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-adaptive-img-hero').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'adaptive',
                        dataPosition : '0',
                        adaptiveImg : {
                            'img-link' : '/search/on-sale',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=1920',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/M_SALE_06WK5Y17?fmt=jpg&qlt=85,1',
                            'src' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1'
                        }
                    });
                });
            </script>
            <hr>
            <h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em !important;color:#54585a !important;">
                Fixed Width HTML Hero
            </h2>
            <div id="asi-fixed-html-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-html-hero').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'responsive',
                        dataPosition : '1',
                        divider : 'true',
                        contentCol : 'col-md-12 col-sm-12 col-xs-12',
                        urgencyText : 'ENDS TODAY!',
                        headlineText : '<h1 class="asiH1 asi-h1 display-1 asi-display-1">20% OFF<br>OVERSTOCK</h1>',
                        messageText : 'SCORE SOFAS, CHAIRS, BEDS, & MORE',
                        //messageSubText : 'while quantities last - selection may vary by store',
                        textAlign : 'text-center',
                        fontColor : '#525050',
                        //bgImage : 'https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg',
                        bgColorContent : '#EFEFEA',
                        paddingSection : '0px',
                        paddingBody : '0px 0px',
                        paddingContent : '25px',
                        addButton : 'true',
                        buttonText : 'SHOP NOW',
                        buttonClass : 'asi-mix-button red',
                        buttonLink : '/search/on-sale'
                    });
                });
            </script>
            <style>
                #asi-fixed-html-hero .asi-divider-line{ background-color: #ee3d42 !important; }
                #asi-fixed-html-hero .asiH1,
                #asi-fixed-html-hero .asi-h1,
                #asi-fixed-html-hero .display-1,
                #asi-fixed-html-hero .asi-display-1{ color:#121212 !important; }
            </style>
            <hr>
            <h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em !important;color:#54585a !important;">
                Fixed Width Adaptive Image Hero
            </h2>
            <div id="asi-fixed-adaptive-img-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-adaptive-img-hero').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'adaptive',
                        dataPosition : '2',
                        adaptiveImg : {
                            'img-link' : '/search/on-sale',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=1920',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/M_SALE_06WK5Y17?fmt=jpg&qlt=85,1',
                            'src' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1'
                        },
                        complete: function(){ console.log('asi adaptive hero compiled')}
                    });
                });
            </script>
            <hr>
            <h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em !important;color:#54585a !important;">
                Fixed Width HTML Finance Offer Banner
            </h2>
            <div id="asi-fixed-html-finance-banner"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-html-finance-banner').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'responsive',
                        dataPosition : '3',
                        contentCol : 'col-md-12 col-sm-12 col-xs-12',
                        headlineText : '<img class="center-block hidden-xs" style="max-width:350px;padding-bottom:15px;" src="images/asi-red-black-white-plus-icon.png" alt="plus"><h1 class="display-1 asi-display-1">36 MONTHS SPECIAL FINANCING</h1>',
                        messageSubText : 'On purchases of $1999 or more with your Value Plus or Signature Plus credit card made between 6/27/17 - 7/10/17. 36 equal monthly payments required.',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgColorContent : '#EE3D42',
                        paddingSection : '0px',
                        paddingContent : '25px',
                        addButton : 'true',
                        buttonText : 'GET DETAILS',
                        buttonClass : 'asi-mix-button white',
                        buttonLink : '/financing'
                    });
                });
            </script>
            <style>
                #asi-fixed-html-finance-banner .asi-divider-line{ background-color: #121212 !important; }
                #asi-fixed-html-finance-banner .display-1,
                #asi-fixed-html-finance-banner .asi-display-1,
                #asi-fixed-html-finance-banner h1 { color:#FFFFFF !important; font-size:90px !important; }
                #asi-fixed-html-finance-banner p.asi-sub-lead{ max-width:80% !important;margin:0 auto;padding-bottom:10px !important; }
                #asi-fixed-html-finance-banner #asi-mix-hero .asi-content-body { background-color:#ee3d42 !important; }
            </style>
            <hr>
            <h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em !important;color:#54585a !important;">
                Fluid Width HTML Hero - Offer Left Aligned
            </h2>
            <div id="asi-fluid-html-hero-left"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fluid-html-hero-left').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        dataPosition : '4',
                        contentCol : 'col-md-3 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1',
                        offerContentType: 'image',
                        offerContentImg: '<a href="/search/on-sale" target="_self"><img src="/images/07WK2Y17_Hero_Offer_Box.png" class="img-responsive" alt="overstocks up to 30% off your order of $999 or more shop now"></a>',
                        textAlign : 'text-center',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg',
                        bgColorContent : '#EE3D42',
                        paddingSection : '0px',
                        paddingBody : '10% 15px',
                        paddingContent : '0px 0px',
                        addButton : 'false'
                    });
                });
            </script>
            <div id="asi-fluid-html-hero-right"></div>
            <script type="text/javascript">
                
                $(function(){
                    $('.home-content-row:eq(13) div:eq(0)').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        dataPosition : '12',
                        contentCol : 'col-md-3 col-md-offset-7 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1',
                        offerContentType: 'image',
                        offerContentImg: '<a href="/search/on-sale" target="_self"><img src="/images/07WK2Y17_Hero_Offer_Box.png" class="img-responsive" alt="overstocks up to 30% off your order of $999 or more shop now"></a>',
                        textAlign : 'text-center',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg',
                        bgColorContent : '#EE3D42',
                        paddingSection : '0px',
                        paddingBody : '10% 15px',
                        paddingContent : '0px 0px',
                        addButton : 'false',
                        complete: function(){
                            $(this).find('.asi-mix-hero-wrapper').before('<hr><h2 class="asi-h2 display-2 text-center" style="padding-top:10px;font-size:2.5em; color:#54585a;">Fluid Width HTML Hero - Offer Right Aligned</h2>');
                        }
                    });
                });
            </script>
            
            <style>
                /*
                .asi-mix-hero-wrapper { padding-top:0px !important; }
                #asi-mix-hero .asi-divider { width:100%; padding:3px 0px 8px; margin:10px auto; text-align:center; max-height:2px; }
                #asi-mix-hero .asi-divider .asi-divider-line {background:white; text-align:center; margin:0 auto; padding:0; width:100%; height:2px; max-width:30px;}
                #asi-mix-hero p.asi-urgency-msg { font-size:1.5em !important; letter-spacing:1px !important; font-family:'ProximaNova-Regular', sans-serif !important; }
                #asi-mix-hero h1.asi-display-1{font-size:104px !important;padding-top:6px !important; padding-bottom:6px !important;}
                #asi-mix-hero p.asi-lead { font-size:22px !important; padding-bottom:0px !important; margin-top:0px !important; margin-bottom:0px !important; }
                #asi-mix-hero p.asi-sub-lead { font-size: 18px !important; letter-spacing:1px !important; font-family:'ProximaNova-Regular', sans-serif !important; }
                #asi-mix-hero #asi-hero-btn-wrap { width:100%; padding:15px 0px; margin: 0 auto; text-align:center; }
                    #asi-hero-btn-wrap button { border:none !important; padding:10px 45px !important; font-size:16px !important; }
                @media screen and (max-width:768px){
                    #asi-mix-hero p.asi-urgency-msg { font-size:1.275em !important; }
                    #asi-mix-hero h1.asi-display-1{font-size:72px !important; }
                    #asi-mix-hero p.asi-lead { font-size:18px !important; }
                    #asi-mix-hero p.asi-sub-lead { font-size: 16px !important;
                }
                @media screen and (max-width:480px){
                    #asi-mix-hero p.asi-urgency-msg { font-size:1.125em !important; }
                    #asi-mix-hero h1.asi-display-1{font-size:48px !important; }
                    #asi-mix-hero p.asi-lead { font-size:16px !important; }
                    #asi-mix-hero p.asi-sub-lead { font-size:13px !important;
                }
                */
            </style>
            <!-- ORIGINAL SITE HERO CODE ::
            <div>
            <div class="asi-hero-banner-message" style="background: #ee3d42 none repeat scroll 0% 0%; width: 100%; padding: 0px; margin: 0px auto; text-align: center"><a href="/search/furniture-overstock"><img class="data-img img-data img-responsive" data-lrg="https://asf.scene7.com/is/image/ASF/Hero_Going_On_Now_06.8_06.18?fmt=png&wid=1920" data-med="https://asf.scene7.com/is/image/ASF/Hero_Going_On_Now_06.8_06.18?fmt=png&wid=1920" data-sml="https://asf.scene7.com/is/image/ASF/M_Going_on_Now?fmt=png&wid=768" src="https://asf.scene7.com/is/image/ASF/Hero_Going_On_Now_06.8_06.18?fmt=png&wid=1920" alt="going on now! 20% off overstock. shop now." /></a></div>
            <div id="asi-hero-banner-module" class="asi-section-content asi-section section" style="padding-top: 0px">
            <div class="container-fluid asi-container-fluid">
            <div class="asi-hero-banner-message" style="background: #efefea none repeat scroll 0% 0%; width: 100%; padding: 0px; margin: 0px auto; text-align: center">
            <div class="asi-hero-banner-message" style="max-width: 1920; margin: 0px auto; padding: 0px; text-align: center"><a href="/search/shop-all-furniture"><img class="data-img img-data img-responsive" data-lrg="https://asf.scene7.com/is/image/ASF/FreeDeliv_48MoFinance?fmt=png&wid=1920" data-med="https://asf.scene7.com/is/image/ASF/FreeDeliv_48MoFinance?fmt=png&wid=1920" data-sml="https://asf.scene7.com/is/image/ASF/M_FreeDeliv_48MoFinance?fmt=png" src="https://asf.scene7.com/is/image/ASF/FreeDeliv_48MoFinance?fmt=png&wid=768" alt="free delivery or 48 months special financing on qualifying orders of $1299+ or more"/></a></div></div></div></div></div>
            !-->
        </div>
    </div>

    <!-- Home-row-2 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-3 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-419">
            <div>
                <div id="asi-mix-carousel-module" class="asi-section section hidden-xs">   
<div class="container asi-container">     
<div class="asi-content asi-content-heading">         
<h3 class="asi-display-3 asi-darker">FRESH FURNITURE FINDS</h3></div>
<div class="asi-content asi-content-body">
<div id="asi-featured-trending-carousel-widget" style="border-top: 1px solid #181818; margin-top: 5px">  
<div class="asi-carousel-heading" style="width: 100% !important; position: relative; padding: 5px 2px">  
<div class="asi-carousel-heading-text" style="padding: 10px 2px; position: relative; width: 100%">    
<div class="asi-carousel-name text-uppercase asi-pxn-b" style="margin: 0px; padding: 0px; position: absolute; left: 0px; top: 0px; letter-spacing: 1px">Markdowns - This Week Only</div>    
<div class="asi-carousel-link text-uppercase" style="margin: 0px; padding: 0px; position: absolute; right: 0px; top: 0px"><a class="asi-pxn-b" href="/search/v/on-sale" style="color: #181818; letter-spacing: 1px">view more</a></div>       </div></div>          
<div class="hawk-recommendation" data-widgetguid="c5de1122-93c4-4a48-80ba-179336e1c032"></div></div></div>
<div class="asi-content asi-content-body">
<div id="asi-featured-trending-carousel-widget" style="border-top: 1px solid #181818; margin-top: 5px">  
<div class="asi-carousel-heading" style="width: 100% !important; position: relative; padding: 5px 2px">  
<div class="asi-carousel-heading-text" style="padding: 10px 2px; position: relative; width: 100%">    
<div class="asi-carousel-name text-uppercase asi-pxn-b" style="margin: 0px; padding: 0px; position: absolute; left: 0px; top: 0px; letter-spacing: 1px">New Arrivals</div>    
<div class="asi-carousel-link text-uppercase" style="margin: 0px; padding: 0px; position: absolute; right: 0px; top: 0px"><a class="asi-pxn-b" href="/search/v/new-arrivals" style="color: #181818; letter-spacing: 1px">view more</a></div></div></div>          
<div class="hawk-recommendation" data-widgetguid="6132b540-4ba9-4d05-9c09-1da19b21aff5"></div></div></div></div></div></div>
</div>
    </div>

    <!-- Home-row-4 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-420"><div><!-- accessories -->
<div class="section asi-section asi-hero-3 asi-ptb-25 asi-xs-ptb-15 asi-plr-0">
<div class="container asi-container">
<div class="asi-content asi-content-body">
<div class="asi-content-hero-image" style="position:relative"><a href="/store-locator"><img class="img-responsive data-img asi-fluid-image" data-lrg="https://asf.scene7.com/is/image/ASF/asi-magnolia-clearance-banner-lg?fmt=png" data-med="https://asf.scene7.com/is/image/ASF/asi-magnolia-clearance-banner-lg?fmt=png" data-sml="https://asf.scene7.com/is/image/ASF/asi-magnolia-clearance-banner-sm?fmt=png" src="https://asf.scene7.com/is/image/ASF/asi-magnolia-clearance-banner-lg?fmt=png" alt="amazing savings in store" /></a></div></div></div></div><!-- mix graphic -->
<div class="section asi-section asi-hero-3 asi-ptb-25 asi-xs-ptb-15 asi-plr-0" id="asi-mix-intro-hero-module-3">
<div class="container asi-container">
<div class="row asi-row">
<div class="asi-section-content text-center">
<div class="col-xs-12 col-md-12">
<div class="asi-section-content-wrapper asi-pb-15">
<h3 class="asi-section-title asi-display-3 asi-black text-center text-uppercase asi-pb-10">WELCOME TO A NEW WAY TO SHOP</h3><span class="asi-section-subtitle">
<div class="asi-heading-rule"><span class="asi-heading-rule-text asi-plr-15">LET’S BREAK THE MATCHY-MATCHY RULE</span></div></span></div></div></div></div>
<div class="asi-content asi-content-body">
<div class="asi-content-hero-image" style="position:relative">
<div class="asi-mix-hero-button hidden-xs" style="background:none;position:absolute;z-index:2;bottom:15px;left:0;width:100%;padding:0;margin:0 auto;text-align:center">    <a role="button" class="btn btn-lg btn-white btn-white-outline asi-btn asi-btn-outline asi-btn-lg asi-btn-white asi-btn-white-outline hidden-xs" href="/made-to-mix" style="margin:0 auto !important">shop made to mix</a>   </div><a href="/made-to-mix"><img class="img-responsive data-img asi-fluid-image" data-lrg="https://asf.scene7.com/is/image/ASF/6wk2_MIX.jpg" data-med="https://asf.scene7.com/is/image/ASF/6wk2_MIX.jpg" data-sml="https://asf.scene7.com/is/image/ASF/6wk2_M_MIX.jpg" src="https://asf.scene7.com/is/image/ASF/6wk2_MIX.jpg" alt="shop made to mix" /></a></div>   </div></div></div></div>
</div>
    </div>

    <!-- Home-row-5 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-421"><div><!-- shop by category header -->
<div class="section asi-section asi-shop-by-section asi-ptb-25 asi-plr-0" id="asi-shop-by-module-v-2">
<div class="container asi-container">
<div class="row asi-row">
<div class="asi-section-content text-center">
<div class="col-xs-12 col-md-12">
<div class="asi-section-content-wrapper asi-pb-15">
<h3 class="asi-section-title asi-display-3 asi-black text-center text-uppercase asi-pb-10">SHOP OUR FAMILY OF FURNITURE</h3>                 <span class="asi-section-subtitle">
<div class="asi-heading-rule hidden-xs ">                       <span class="asi-heading-rule-text asi-plr-15 hidden-xs">MAKE IT COZY. MAKE IT DREAMY. MAKE IT YOU.</span></div></span>            </div>        </div></div></div></div><!-- 3 spot -->
<div class="asi-container container" style="padding-left: 0; padding-right: 0; text-align:center;margin:0 auto;width:100%;max-width:1200px">
<div class="row asi-row">
<div class="col-xs-4 col-sm-4 col-md-4" style="padding:0px 0px;margin:2% 0px">      <a href="/search/v/bedroom">
<div class="asi-xs-plr-0" style="position:relative;width:100%">
<div class="asi-shop-by-room-links text-center asi-white hidden-xs asi-pxn-bold" style="letter-spacing:1.5px;position:absolute;z-index:2;bottom:15px;width:100%;padding:10px 10px;max-width:100%">SHOP ALL <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/SVG/Arrow_Icon_White.svg" class="asi-arrow-icon" alt=">" /></div>        <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/shop-by-bedroom-v7?qlt=86,1" style="width:100%;padding:0;margin:0" /></div>      </a>      </div>
<div class="col-xs-4 col-sm-4 col-md-4" style="padding:0px 0px;margin:0px 0px">      <a href="/search/v/living-room">
<div class="asi-xs-plr-0" style="position:relative;width:100%">
<div class="asi-shop-by-room-links text-center asi-white hidden-xs asi-pxn-bold" style="letter-spacing:1.5px;position:absolute;z-index:2;bottom:15px;width:100%;padding:10px 10px;max-width:100%">SHOP ALL <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/SVG/Arrow_Icon_White.svg" class="asi-arrow-icon" alt=">" /></div><img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/shop-by-livingroom-v7?qlt=85,1" style="width:100%;padding:0;margin:0" />      </div></a></div>
<div class="col-xs-4 col-sm-4 col-md-4" style="padding:0px 0px;margin:2% 0px">      <a href="/search/v/dining-room">
<div class="asi-xs-plr-0" style="position:relative;width:100%">
<div class="asi-shop-by-room-links text-center asi-white hidden-xs asi-pxn-bold" style="letter-spacing:1.5px;position:absolute;z-index:2;bottom:15px;width:100%;padding:10px 10px;max-width:100%">SHOP ALL <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/SVG/Arrow_Icon_White.svg" class="asi-arrow-icon" alt=">" /></div>        <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/shop-by-diningroom-v7?qlt=85,1" style="width:100%;padding:0;margin:0" />      </div></a></div></div></div></div><!-- reclining -->
<div class="section asi-section asi-hero-3 asi-ptb-25 asi-xs-ptb-15 asi-plr-0" id="asi-reclining-hero-module-3">
<div class="container asi-container">
<div class="row asi-row">
<div class="asi-section-content text-center">
<div class="col-xs-12 col-md-12">
<div class="asi-section-content-wrapper asi-pb-15">
<h3 class="asi-section-title asi-display-3 asi-black text-center text-uppercase asi-pb-10">RELAX. RECLINE. UNWIND</h3><span class="asi-section-subtitle">
<div class="asi-heading-rule"><span class="asi-heading-rule-text asi-plr-15">SIT DOWN. SINK IN. FEET UP</span></div></span></div></div></div></div>
<div class="asi-content asi-content-body">
<div class="asi-content-hero-image" style="position:relative">
<div class="asi-mix-hero-button" style="background:none;position:absolute;z-index:2;bottom:15px;left:0;width:100%;padding:0;margin:0 auto;text-align:center">    <a role="button" class="btn btn-lg btn-white btn-white-outline asi-btn asi-btn-outline asi-btn-lg asi-btn-white asi-btn-white-outline" href="/living-room-furniture/power-reclining-furniture" style="margin:0 auto !important">shop all reclining</a>   </div><a href="/living-room-furniture/power-reclining-furniture"><img class="img-responsive data-img asi-fluid-image" data-lrg="https://asf.scene7.com/is/image/ASF/Motion_Bkg.jpg" data-med="https://asf.scene7.com/is/image/ASF/Motion_Bkg.jpg" data-sml="https://asf.scene7.com/is/image/ASF/M_Motion_Bkg.jpg" src="https://asf.scene7.com/is/image/ASF/Motion_Bkg.jpg" alt="shop all reclining furniture" /></a></div></div></div></div><!-- lancaster dining -->
<div class="section asi-section asi-hero-3 asi-ptb-25 asi-xs-ptb-15 asi-plr-0">
<div class="container asi-container">
<div class="asi-content asi-content-body">
<div class="asi-content-hero-image" style="position:relative"><a href="/search/lancaster-dining-room-furniture"><img class="img-responsive data-img asi-fluid-image" data-lrg="https://asf.scene7.com/is/image/ASF/LancasterSale?fmt=png" data-med="https://asf.scene7.com/is/image/ASF/LancasterSale?fmt=png" data-sml="https://asf.scene7.com/is/image/ASF/M_LancasterSale?fmt=png" src="https://asf.scene7.com/is/image/ASF/LancasterSale?fmt=png" alt="limited time only 20% off the entire lancaster dining collection" /></a></div></div></div></div><!-- patio & mattress -->
<div class="section asi-section asi-hero-3 asi-ptb-25 asi-xs-ptb-15 asi-plr-0" id="asi-reclining-hero-module-3">
<div class="container asi-container">
<div class="row asi-row">
<div class="asi-section-content text-center">
<div class="col-xs-12 col-md-12">
<div class="asi-section-content-wrapper asi-pb-15">
<h3 class="asi-section-title asi-display-3 asi-black text-center text-uppercase asi-pb-10">A FRESH WORLD OF POSSIBILITIES</h3><span class="asi-section-subtitle">
<div class="asi-heading-rule"><span class="asi-heading-rule-text asi-plr-15">SPECIAL LIMITED-TIME OFFERS</span></div></span></div></div></div></div>
<div class="section asi-section asi-shop-by-section asi-ptb-25 asi-plr-0" id="asi-shop-by-module-v-2">
<div class="asi-container container" style="padding-left: 0; padding-right: 0; text-align:center;margin:0 auto;width:100%;max-width:1200px">
<div class="row asi-row">
<div class="col-xs-6 col-sm-6 col-md-6" style="padding:0px 5px 0px 0px;margin:0px 0px">      <a href="/search/v/accents/patio">
<div class="asi-xs-plr-0" style="position:relative;width:100%">       <img class="img-responsive" data-lrg="https://asf.scene7.com/is/image/ASF/Patio_Deliv_Offer?fmt=png" data-med="https://asf.scene7.com/is/image/ASF/Patio_Deliv_Offer?fmt=png" data-sml="https://asf.scene7.com/is/image/ASF/M_Patio_Deliv_Offer?fmt=png" src="https://asf.scene7.com/is/image/ASF/Patio_Deliv_Offer?fmt=png" alt="free delivery on your entire order whith any patio purchase of $999+ or more. shop outdoor furniture." style="width:100%;padding:0;margin:0" /></div></a>      </div>
<div class="col-xs-6 col-sm-6 col-md-6" style="padding:0px 0px 0px 5px;margin:0px 0px">      <a href="/search/v/mattresses">
<div class="asi-xs-plr-0" style="position:relative;width:100%"><img class="img-responsive" data-lrg="https://asf.scene7.com/is/image/ASF/Mattress48mo?fmt=png" data-med="https://asf.scene7.com/is/image/ASF/Mattress48mo?fmt=png" data-sml="https://asf.scene7.com/is/image/ASF/M_Mattress48mo?fmt=png" src="https://asf.scene7.com/is/image/ASF/Mattress48mo?fmt=png" alt="48 months special financing available on qualifying orders of $1299+ or more. shop mattresses" style="width:100%;padding:0;margin:0" />  </div></a></div></div></div></div></div></div></div>
</div>
    </div>

    <!-- Home-row-6 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-7 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-8 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-9 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-10 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-11 -->
    <div class="row-fluid home-content-row clearfix">
        <div>
            <div id="asi-fixed-adaptive-mhf-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-adaptive-mhf-hero').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'adaptive',
                        dataPosition : '10',
                        adaptiveImg : {
                            'img-link' : '/search/magnolia-home',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/Hawk_Magnolia?fmt=png',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/Hawk_Magnolia?fmt=png',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/M_Hawk_Magnolia?fmt=png',
                            'src' : 'https://asf.scene7.com/is/image/ASF/Hawk_Magnolia?fmt=png'
                        },
                        complete: function(){ console.log('asi adaptive mhf hero compiled')}
                    });
                });
            </script>
        </div>
    </div>

    <!-- Home-row-12 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-13 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-14 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-15 -->
    <!-- ASI CSS + JS SCRIPTS !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-431">
	        <div><!-- ASI CSS OVERRIDES - DO NOT ALTER !-->
				<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-mix-styles.css" />
				<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-mix-styles-main.css" /><!-- ASI JS SCRIPTS - DO NOT ALTER !-->
				<script type="text/javascript" src="https://shopvcf.com/js/asi-mix-scripts.js"></script>
			</div>
		</div>
    </div>

    <div class="row-fluid home-content-row clearfix home-seo">
        <strong>At Value City Furniture, Style Comes Easy</strong><br>
        Since 1948, Value City Furniture has helped to furnish America&#39;s homes with quality furniture at the guaranteed best prices. Our mission is to make furniture shopping easy. Whether you are furnishing a guest room, a bedroom, a living room or a basement, Value City Furniture has all the home furnishings you need to create the room or home of your dreams. Visit one of our furniture stores today or buy online - it&#39;s up to you. Either way you can browse our amazing selection of furniture complete with sectionals, sofas or couches, beds, dinettes, recliners, TV stands, chairs, chaises, rugs, and so much more.
    </div>

    <div class="clear"></div>

</section>

<div class="clear"></div>




            </div>
            <div id="overlay-menu-modal"></div>
        </section>

        <div class="clearfix"></div>

        


    <script type="text/javascript">
        $(document).ready(function () {
            $('#footer-locator-search-btn').on('click', function (event) {
                if ($('#zip-search-box').val() === '') {
                    $('#zip-search-box').addClass('invalid');
                    return;
                } else {
                    var zip = $('#zip-search-box').val();
                    document.location = "/store-locator?zip=" + zip;
                }
            });
        });
        function doFooterZipButtonClick(buttonName, e) {
            var key;
            if (window.event)
                key = window.event.keyCode; // IE
            else
                key = e.which; //Firefox
            if (key == 13) {
                var btn = document.getElementById(buttonName);
                if (btn != null) {
                    btn.click();
                    event.keyCode = 0;
                }
            }
        }
    </script>
    <div class="footer-store-locator">
        <div class="footer-store-locator-container">
            <div class="footer-store-locator-content">
                <div class="footer-store-locator-form">
                    <div>
                        <input id="zip-search-box" class="invalid zip-search-field js-zip-search-field" placeholder="Enter Zip Code" onkeypress="doFooterZipButtonClick('footer-locator-search-btn', event)" required="" type="text">
                        <a id="footer-locator-search-btn" class="footer-store-locator-button"><i class="fa fa-search"></i></a>
                    </div>
                    <a href="/store-locator" title="Find Your Local Store">COMPLETE LIST &gt;</a>
                </div>
            </div>
        </div>
    </div>

    <footer>

        
        <div class="asi-footer-container">

            <div class="asi-footer-column-container">
                <div id="shop-footer-item" class="asi-footer-section-list">
                    <h3>Shop With VCF</h3>
                    <ul>
                        <li><a href="http://www.valuecityfurniture.com/store/locator">Find a Store</a></li>
                        <li><a href="http://www.valuecityfurniture.com/weekly-ad">Weekly Circular</a></li>
                        <li><a href="https://www.valuecityfurniture.com/easy-pass">Easy Pass</a></li>
                        <li><a href="http://www.valuecityfurniture.com/financing">Financing Options</a></li>
                        <li><a href="https://www.mysynchrony.com/merchants/cmp-index.html?market=homefurnishings&amp;store=valuecityfurniture">Manage My Value Plus Card</a></li>
                        <li><a href="http://www.valuecityfurniture.com/search/v/bestsellers">Best Sellers</a></li>
                        <li><a href="http://www.valuecityfurniture.com/search/v/new-arrivals">New Arrivals</a></li>
                        <li><a href="http://www.valuecityfurniture.com/search/v/on-sale">What&#39;s On Sale</a></li>
                    </ul>
                </div>

                <div id="familiarize-footer-item" class="asi-footer-section-list">
                    <h3>Get to Know Us</h3>
                    <ul>
                        <li><a href="http://www.valuecityfurniture.com/about-us">About Us</a></li>
                        <li><a href="http://www.valuecityfurniture.com/careers">Careers</a></li>
                        <li><a href="http://www.valuecityfurniture.com/frequently-asked-questions">FAQs</a></li>
                        <li><a href="http://blog.valuecityfurniture.com/">Blog</a></li>
                    </ul>
                </div>

                <div id="care-footer-item" class="asi-footer-section-list">
                    <h3>Customer Care</h3>
                    <ul>
                        <li><a href="tel:(888) 751-8552"><b>(888) 751-8552</b></a></li>
                        <li><a href="http://www.valuecityfurniture.com/contact-us">Contact Us</a></li>
                        <li><a href="http://www.valuecityfurniture.com/recalls">Product Recalls</a></li>
                        <li><a href="http://www.valuecityfurniture.com/track-my-order">Track My Order</a></li>
                        <li><a href="http://www.valuecityfurniture.com/refunds-exchanges">Refunds and Exchanges</a></li>
                    </ul>
                </div>

                <div class="asi-social-icons asi-footer-social-col">
                    <h3>FOLLOW US</h3>
                    <a href="http://www.facebook.com/ValueCityFurnitureUSA"><img class="facebook-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Facebook_Icon.svg" /></a>
                    <a href="http://twitter.com/valuecityfurn"><img class="twitter-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Twitter_Icon.svg" /></a>
                    <a href="http://pinterest.com/valuecityfurn/"><img class="pinterest-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Pinterest_Icon.svg" /></a>
                    <a href="http://www.youtube.com/vcfuser"><img class="youtube-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Youtube_Icon.svg" /></a>
                    <a href="http://instagram.com/valuecityfurn/"><img class="insta-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Insta_Icon.svg" /></a>
                </div>

                <div class="asi-email-sign-up">
                    <p>Subscribe for special offers, discounts, and promotions</p>
                    
<!-- begin: error message displayed on new user overlay (hidden on the footer)-->
<div id="partial-registration-error"></div>

<input type="text" class="asi-email-input" id="SignUpFormTextBox" aria-labelledby="SignUpFormTextBox" placeholder="Enter your email" onkeypress="return SubmitPartialRegistrationEnterKeyPressed(event,{ EmailTextBoxId: &#39;SignUpFormTextBox&#39;, PartialRegistrationErrorId: &#39;PartialRegistrationError&#39;, PopupTitle1: &#39;Oops!&#39;, EmailInUseError: &#39;There is already a user account with that email address. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, PopupTitle2: &#39;Oh no!&#39;, GeneralError: &#39;Our system failed to process your signup. We hate it when that happens! Please try again!&#39;, ShowingInOverlay: false , PartialRegistrationSuccessMessageTitle: &#39;Thanks for signing up!&#39;, PartialRegistrationSuccessMessage: &#39;Now, you\&#39;ll be among the first to hear about new items, special promotions, in-store events and more.&#39;, InvalidEmailError: &#39;Please enter a valid email address.&#39;, OverlayGeneralError: &#39;Whoops. Something went wrong, please try registering for emails again.&#39;, EmailInUseTitle: &#39;Good News!&#39;, ErrorModalOverlayTitle: &#39;Error&#39;, EmailInUseMessage: &#39;It looks like you have already signed up to receive emails. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, ContinueShoppingText: &#39;Continue Shopping&#39;, CloseText: &#39;Close&#39;},false, 'Your email address');" onfocus="PartialRegistrationTexboxOnFocus('#SignUpFormTextBox');" onblur="PartialRegistrationTexboxOnBlur('#SignUpFormTextBox');" />
<button class="asi-email-enter-btn" data-toggle="modal" data-target="#SignUpModal" onclick="return SubmitPartialRegistrationForm(event, { EmailTextBoxId: &#39;SignUpFormTextBox&#39;, PartialRegistrationErrorId: &#39;PartialRegistrationError&#39;, PopupTitle1: &#39;Oops!&#39;, EmailInUseError: &#39;There is already a user account with that email address. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, PopupTitle2: &#39;Oh no!&#39;, GeneralError: &#39;Our system failed to process your signup. We hate it when that happens! Please try again!&#39;, ShowingInOverlay: false , PartialRegistrationSuccessMessageTitle: &#39;Thanks for signing up!&#39;, PartialRegistrationSuccessMessage: &#39;Now, you\&#39;ll be among the first to hear about new items, special promotions, in-store events and more.&#39;, InvalidEmailError: &#39;Please enter a valid email address.&#39;, OverlayGeneralError: &#39;Whoops. Something went wrong, please try registering for emails again.&#39;, EmailInUseTitle: &#39;Good News!&#39;, ErrorModalOverlayTitle: &#39;Error&#39;, EmailInUseMessage: &#39;It looks like you have already signed up to receive emails. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, ContinueShoppingText: &#39;Continue Shopping&#39;, CloseText: &#39;Close&#39;},false, 'Your email address');">SIGN UP</button>





<!-- begin: thank you overlay -->
<div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="SignUpModalLabel">Thanks for signing up!</h4>
            </div>
            <div class="modal-body">
                <img src="http://www.valuecityfurniture.com/Content/ValueCity/Images/modal-logo.png" alt="" class="desk-logo img-responsive" /><br /><br />
                Now, you&#39;ll be among the first to hear about new items, special promotions, in-store events and more.<br /><br />
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
                </div>

            </div>

            <div class="asi-social-icons asi-footer-social-row">
                <h3>FOLLOW US</h3>
                <a href="http://www.facebook.com/ValueCityFurnitureUSA"><img class="facebook-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Facebook_Icon.svg" /></a>
                <a href="http://twitter.com/valuecityfurn"><img class="twitter-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Twitter_Icon.svg" /></a>
                <a href="http://pinterest.com/valuecityfurn/"><img class="pinterest-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Pinterest_Icon.svg" /></a>
                <a href="http://www.youtube.com/vcfuser"><img class="youtube-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Youtube_Icon.svg" /></a>
                <a href="http://instagram.com/valuecityfurn/"><img class="insta-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Insta_Icon.svg" /></a>
            </div>




            <div class="asi-copyright">
                @ Copyright 2017 American Signature, Inc. All Rights Reserved. &nbsp;&nbsp;&nbsp;

                <a href="http://www.valuecityfurniture.com/site-map">Site Map</a> |
                <a href="http://www.valuecityfurniture.com/privacy-policy">Privacy Policy</a> |
                <a href="http://www.valuecityfurniture.com/terms-and-conditions">Terms &amp; Conditions</a> &nbsp;&nbsp;&nbsp;

                <a href="http://www.blueport.com">Powered by Blueport Commerce </a>
            </div>

        </div>



        
        <div class="asi-mobile-footer">

            <div class="asi-email-sign-up">
                <p>Subscribe for special offers, discounts, and promotions</p>
                <div class="asi-email-row">
                    



<!-- begin: error message displayed on new user overlay (hidden on the footer)-->
<div id="partial-registration-error"></div>

<input type="text" class="asi-email-input" id="MobileSignUpFormTextBox" aria-labelledby="MobileSignUpFormTextBox" placeholder="Enter your email" onkeypress="return SubmitPartialRegistrationEnterKeyPressed(event,{ EmailTextBoxId: &#39;SignUpFormTextBox&#39;, PartialRegistrationErrorId: &#39;PartialRegistrationError&#39;, PopupTitle1: &#39;Oops!&#39;, EmailInUseError: &#39;There is already a user account with that email address. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, PopupTitle2: &#39;Oh no!&#39;, GeneralError: &#39;Our system failed to process your signup. We hate it when that happens! Please try again!&#39;, ShowingInOverlay: false , PartialRegistrationSuccessMessageTitle: &#39;Thanks for signing up!&#39;, PartialRegistrationSuccessMessage: &#39;Now, you\&#39;ll be among the first to hear about new items, special promotions, in-store events and more.&#39;, InvalidEmailError: &#39;Please enter a valid email address.&#39;, OverlayGeneralError: &#39;Whoops. Something went wrong, please try registering for emails again.&#39;, EmailInUseTitle: &#39;Good News!&#39;, ErrorModalOverlayTitle: &#39;Error&#39;, EmailInUseMessage: &#39;It looks like you have already signed up to receive emails. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, ContinueShoppingText: &#39;Continue Shopping&#39;, CloseText: &#39;Close&#39;},false, 'Your email address');" onfocus="PartialRegistrationTexboxOnFocus('#MobileSignUpFormTextBox');" onblur="PartialRegistrationTexboxOnBlur('#MobileSignUpFormTextBox');" />
<button class="asi-email-enter-btn" data-toggle="modal" data-target="#MobileSignUpModal" onclick="return SubmitPartialRegistrationForm(event, { EmailTextBoxId: &#39;SignUpFormTextBox&#39;, PartialRegistrationErrorId: &#39;PartialRegistrationError&#39;, PopupTitle1: &#39;Oops!&#39;, EmailInUseError: &#39;There is already a user account with that email address. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, PopupTitle2: &#39;Oh no!&#39;, GeneralError: &#39;Our system failed to process your signup. We hate it when that happens! Please try again!&#39;, ShowingInOverlay: false , PartialRegistrationSuccessMessageTitle: &#39;Thanks for signing up!&#39;, PartialRegistrationSuccessMessage: &#39;Now, you\&#39;ll be among the first to hear about new items, special promotions, in-store events and more.&#39;, InvalidEmailError: &#39;Please enter a valid email address.&#39;, OverlayGeneralError: &#39;Whoops. Something went wrong, please try registering for emails again.&#39;, EmailInUseTitle: &#39;Good News!&#39;, ErrorModalOverlayTitle: &#39;Error&#39;, EmailInUseMessage: &#39;It looks like you have already signed up to receive emails. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, ContinueShoppingText: &#39;Continue Shopping&#39;, CloseText: &#39;Close&#39;},false, 'Your email address');">SIGN UP</button>


<!-- begin: thank you overlay -->
<div class="modal fade" id="MobileSignUpModal" tabindex="-1" role="dialog" aria-labelledby="MobileSignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="MobileSignUpModalLabel">Thanks for signing up!</h4>
            </div>
            <div class="modal-body">
                <img src="http://www.valuecityfurniture.com/Content/ValueCity/Images/modal-logo.png" alt="" class="desk-logo img-responsive" /><br /><br />
                Now, you&#39;ll be among the first to hear about new items, special promotions, in-store events and more.<br /><br />
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
            <div class="asi-footer-accordion-container">
                <div id="asi-mobile-footer-shop-footer-item" class="asi-footer-section-list">
                    <h3 class="asi-mobile-footer-accordion-header">
                        Shop With VCF
                        <div class="asi-arrow">
                            <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Arrow_Icon.svg" />
                        </div>
                    </h3>
                    <ul>
                        <li><a href="http://www.valuecityfurniture.com/store/locator">Find a Store</a></li>
                        <li><a href="http://www.valuecityfurniture.com/weekly-ad">Weekly Circular</a></li>
                        <li><a href="https://www.valuecityfurniture.com/easy-pass">Easy Pass</a></li>
                        <li><a href="http://www.valuecityfurniture.com/financing">Financing Options</a></li>
                        <li><a href="https://www.mysynchrony.com/merchants/cmp-index.html?market=homefurnishings&amp;store=valuecityfurniture">Manage My Value Plus Card</a></li>
                        <li><a href="http://www.valuecityfurniture.com/search/v/bestsellers">Best Sellers</a></li>
                        <li><a href="http://www.valuecityfurniture.com/search/v/new-arrivals">New Arrivals</a></li>
                        <li><a href="http://www.valuecityfurniture.com/search/v/on-sale">What&#39;s On Sale</a></li>
                    </ul>
                </div>
            </div>
            <div class="asi-footer-accordion-container">
                <div id="asi-mobile-footer-care-footer-item" class="asi-footer-section-list">
                    <h3 class="asi-mobile-footer-accordion-header">
                        Customer Care
                        <div class="asi-arrow">
                            <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Arrow_Icon.svg" />
                        </div>
                    </h3>
                    <ul>
                        <li><a href="tel:(888) 751-8552"><b>(888) 751-8552</b></a></li>
                        <li><a href="http://www.valuecityfurniture.com/contact-us">Contact Us</a></li>
                        <li><a href="http://www.valuecityfurniture.com/recalls">Product Recalls</a></li>
                        <li><a href="http://www.valuecityfurniture.com/track-my-order">Track My Order</a></li>
                        <li><a href="http://www.valuecityfurniture.com/refunds-exchanges">Refunds and Exchanges</a></li>
                    </ul>
                </div>
            </div>
            <div class="asi-footer-accordion-container">
                <div id="asi-mobile-footer-familiarize-footer-item" class="asi-footer-section-list">
                    <h3 class="asi-mobile-footer-accordion-header">
                        Get to Know Us
                        <div class="asi-arrow">
                            <img src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Arrow_Icon.svg" />
                        </div>
                    </h3>
                    <ul>
                        <li><a href="http://www.valuecityfurniture.com/about-us">About Us</a></li>
                        <li><a href="http://www.valuecityfurniture.com/careers">Careers</a></li>
                        <li><a href="http://www.valuecityfurniture.com/frequently-asked-questions">FAQs</a></li>
                        <li><a href="http://blog.valuecityfurniture.com/">Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="asi-social-icons asi-footer-social-row">
                <a href="http://www.facebook.com/ValueCityFurnitureUSA"><img class="facebook-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Facebook_Icon.svg" /></a>
                <a href="http://twitter.com/valuecityfurn"><img class="twitter-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Twitter_Icon.svg" /></a>
                <a href="http://pinterest.com/valuecityfurn/"><img class="pinterest-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Pinterest_Icon.svg" /></a>
                <a href="http://www.youtube.com/vcfuser"><img class="youtube-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Youtube_Icon.svg" /></a>
                <a href="http://instagram.com/valuecityfurn/"><img class="insta-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Insta_Icon.svg" /></a>
            </div>

            <div class="asi-copyright">
                @ Copyright 2017 American Signature, Inc. All Rights Reserved.<br>

                <a href="http://www.valuecityfurniture.com/site-map">Site Map</a> |
                <a href="http://www.valuecityfurniture.com/privacy-policy">Privacy Policy</a> |
                <a href="http://www.valuecityfurniture.com/terms-and-conditions">Terms &amp; Conditions</a> <br>

                <a href="http://www.blueport.com">Powered by Blueport Commerce </a>
            </div>

        </div>
    </footer>

    </div>

    <div class="scroll-to-top affix" data-spy="affix" data-offset-top="200"><a href="#page" class="smooth-scroll"><img src="http://www.valuecityfurniture.com/Content/ValueCity/Images/icon-up-arrow.png" /></a></div>

    <!-- Error Message Modal -->
    <div class="error-modal modal fade" id="ErrorMessageModal" tabindex="-1" role="dialog" aria-labelledby="ErrorMessageModalLabel" aria-hidden="true">
        <div class="error-modal-dialog modal-dialog">
            <div class="error-modal-content modal-content">
                <div class="error-modal-header modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="error-message-modal-title modal-title" id="ErrorMessageModalLabel">Error</h4>
                </div>
                <div class="error-modal-body modal-body">
                    <p><span id="error-message-text"></span></p>
                </div>
                <div class="error-modal-footer modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Zip Code Modal Popup -->
    

<!-- zip modal -->
<div class="modal fade" id="ZipModal" tabindex="-1" role="dialog" aria-labelledby="ZipModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- title -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="enter-zip-title"><img align="absmiddle" src="http://www.valuecityfurniture.com/Content/ValueCityMix/Images/Icons/map-pin.png"> Enter Your Zip Code</h4>
                <h4 class="modal-title" id="good-news-title" style="display: none;">Good news!</h4>
                <h4 class="modal-title" id="pickup-only-title" style="display: none;">Available for Pick-up Only</h4>
            </div>
            <!-- /title -->

            <div class="modal-body">
                <!-- begin: zip code form -->
                <form id="zipcode-form" method="post">

                    <!-- default message -->
                    <div class="zipform-default-message">
                        <p><strong>Why do we ask for your zip code?</strong></p>
                        <p>By providing your delivery zip code, you’ll allow us to:</p>
                        <ul>
                            <li>Let you know immediately if we can service your area.</li>
                            <li>Tailor our selection to make sure you see only items that can be delivered to you.</li>
                            <li>Inform you if the item is currently in stock.</li>
                            <li>Offer you special pricing that may only be available in some areas.</li>
                            <li>Help you find a local showroom in case you want to see an item in person.</li>
                            <li>Show you estimated delivery dates without having to checkout.</li>
                        </ul>
                        <p><strong>Value City Furniture</strong> respects your privacy and will not share this information with anyone.</p>
                    </div>
                    <!-- /message -->

                    <!-- begin: error message -->
                    <div class="js-zip-overlay-error-message zipform-default-message zipcode-modal-error-msg">
                        <!-- Error message hook for ajax response from server-side validation -->
                        <span id="zipcode-modal-ajax-error" class="problem-message"></span>
                        <!-- Error message hook for jQuery validator client-side validation -->
                        <span id="ZipCodeFormOverlay_ErrorMessage" class="problem-message" data-msg="Please enter a valid zip code."></span>
                    </div>
                    <!-- end: error message -->

                    <div id="zip-code-overlay-form zipform-default-message">
                        <div id="spinner" class="zip-code-overlay-form-spinner" style="display: none">
                            <img id="LoadImage" src="/Img/load.gif" />
                            <span class="please-wait-text">Please wait...</span>
                        </div>

                        <div id="zip-code-input" class="zip-code-overlay-form-inputs">
                            <span class="popup-zip-textbox-span">
                                <input id="PageHeader_PostalCodeFormHeader_ZipCodeTextBox" type="text" class="popup-zip-textbox" name="newZipCodeString" />
                            </span>
                            <span class="modal-zip-button-go-span">
                                <input id="PageHeader_PostalCodeSubmitForm_SubmitZipCodeButton" type="submit" class="modal-zip-button-go js-binding-enterkey" value="GO" />
                            </span>
                        </div>
                        <div class="clear"></div>

                        <!-- use device location -->
                        <div id="device-location" style="display: none;">

                            <p>or</p>

                            <button id="device-location-button" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-screenshot"></span>&nbsp; Use Current Location
                            </button>
                        </div>
                        <!-- /use device location -->
                    </div>
                    <div class="clear"></div>
                </form>
                <div class="clear"></div>
                <!-- end: zip code form -->

                <!-- Begin: Success Message-->
                <div id="zipform-success-message" style="display: none">
                    <p>www.ValueCityFurniture.com is accepting online orders delivered to your zip code.</p>

                    <div class="zip-code-overlay-continue-button">
                        <input type="submit" style="width: 120px;" id="ZipCodeFormOverlay_ContinueOverlaytButton" onclick="window.location.reload(true);" value="Continue" name="ctl00$ZipCodeFormOverlay$ContinueOverlaytButton"><br />
                        <br />
                    </div>
                </div>
                <!--End : Success Message -->

                <!-- Begin: Pick-up Only Message -->
                <div id="pickuponly-response-container" style="display: none">

                    <div class="zip-code-overlay-content text-small">
                        <span>Although you live outside our delivery area,<br/> we invite you to order online and pick up your merchandise at your closest store or <a href="http://www.valuecityfurniture.com/store-locator">find another store here.</a></span><br />
                        <br />

                        <!-- store content! -->
                        <!-- Cleanup: kill the <br/> tags -->
                        <div id="zip-code-overlay-current-store">
                            <span class="bold">Your closest store:</span>
                            <br />
                            <span id="store-address-span"></span>
                            <br /><br />
                            <span class="bold">Store Hours:</span><br />
                            <span id="store-hours-span"></span>
                            <br />
                        </div>

                        <div id="zip-code-overlay-customer-message">

                            <div id="zip-overlay-registered-user" style="display: none">
                                <span>Our delivery area continues to grow. As a registered user, we&#39;ll notify you if delivery becomes available in your neighborhood. In the meantime, we hope you enjoy our selection of merchandise that is available for pick up.</span>
                                <br />
                            </div>

                            <div id="zip-overlay-not-registered-user" style="display: none">
                                Our delivery area continues to grow. <a href="https://www.valuecityfurniture.com/account/register">Register with us today</a> and we'll notify you as soon as delivery becomes available in your location.
                                <br />
                            </div>
                        </div>
                    </div>

                    <div class="zip-code-overlay-continue-button">
                        <input type="submit" style="width: 120px;" id="PickupOnly_ZipCodeFormOverlay_ContinueOverlaytButton" onclick="window.location.reload(true);" value="OK, Thanks!" name="ctl00$ZipCodeFormOverlay$ContinueOverlaytButton"><br />
                        <br />
                    </div>
                </div>
                <!-- End: Pick-up Only Message -->
            </div> <!-- /modal-body -->
        </div> <!-- /modal-content -->
    </div> <!-- /modal-dialog -->
</div> <!-- /zip modal -->

    <!-- Email Registration Modal Popup -->


<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        var isValidPe = false;
        var addToCart = getQueryStringItem("add");
        var showEmailModal = addToCart !== "1";
        if (getSession("IsRegistered") !== "1" && getCookie("RegistrationOverlay") !== "1" && ($(window).width() > 768) && isValidPe && showEmailModal ) {
            $(".js-email-reg-modal").modal({
                keyboard: false
            });
            setCookie("RegistrationOverlay", null, "1", 90);
        }
        // UNCOMMENT OUT TO ALWAYS SHOW THE OVERLAY:
        //$(".js-email-reg-modal").modal({
        //    keyboard: false
        //});
    });
</script>

<div class="js-email-reg-modal email-reg-modal modal fade" id="EmailRegistrationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                
                <!-- Page Emelent -->
                <div class="mail-reg-modal-pe">
                    <div></div>
                </div>

                <div class="mail-reg-modal-form-copy">
                    
                </div>

                <!-- Email form -->
                <div class="mail-reg-modal-form">

                    <input id="EmailSignUpFormTextBox" type="text" class="footer-email-signup-textbox" value="Your email address" onkeypress="return SubmitEmailRegistrationEnterKeyPressed(event, { EmailTextBoxId: &#39;SignUpFormTextBox&#39;, PartialRegistrationErrorId: &#39;PartialRegistrationError&#39;, PopupTitle1: &#39;Oops!&#39;, EmailInUseError: &#39;There is already a user account with that email address. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, PopupTitle2: &#39;Oh no!&#39;, GeneralError: &#39;Our system failed to process your signup. We hate it when that happens! Please try again!&#39;, ShowingInOverlay: false , PartialRegistrationSuccessMessageTitle: &#39;Thanks for signing up!&#39;, PartialRegistrationSuccessMessage: &#39;Now, you\&#39;ll be among the first to hear about new items, special promotions, in-store events and more.&#39;, InvalidEmailError: &#39;Please enter a valid email address.&#39;, OverlayGeneralError: &#39;Whoops. Something went wrong, please try registering for emails again.&#39;, EmailInUseTitle: &#39;Good News!&#39;, ErrorModalOverlayTitle: &#39;Error&#39;, EmailInUseMessage: &#39;It looks like you have already signed up to receive emails. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, ContinueShoppingText: &#39;Continue Shopping&#39;, CloseText: &#39;Close&#39;}, false, 'Your email address');" onfocus="EmailRegistrationTexboxOnFocus();" onblur="EmailRegistrationTexboxOnBlur();"/>
                    <input type="button" data-toggle="modal" data-target="#EmailRegistrationModal" class="btn button-gray btn-small signup-btn" onclick="return SubmitEmailRegistrationForm(event, { EmailTextBoxId: &#39;SignUpFormTextBox&#39;, PartialRegistrationErrorId: &#39;PartialRegistrationError&#39;, PopupTitle1: &#39;Oops!&#39;, EmailInUseError: &#39;There is already a user account with that email address. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, PopupTitle2: &#39;Oh no!&#39;, GeneralError: &#39;Our system failed to process your signup. We hate it when that happens! Please try again!&#39;, ShowingInOverlay: false , PartialRegistrationSuccessMessageTitle: &#39;Thanks for signing up!&#39;, PartialRegistrationSuccessMessage: &#39;Now, you\&#39;ll be among the first to hear about new items, special promotions, in-store events and more.&#39;, InvalidEmailError: &#39;Please enter a valid email address.&#39;, OverlayGeneralError: &#39;Whoops. Something went wrong, please try registering for emails again.&#39;, EmailInUseTitle: &#39;Good News!&#39;, ErrorModalOverlayTitle: &#39;Error&#39;, EmailInUseMessage: &#39;It looks like you have already signed up to receive emails. Click &lt;a href=\&#39;https://www.valuecityfurniture.com/account/sign-in\&#39;&gt;here&lt;/a&gt; to login to your account or use a different email to sign up!&#39;, ContinueShoppingText: &#39;Continue Shopping&#39;, CloseText: &#39;Close&#39;}, false, 'Your email address');" value="Sign Up"/>
                    <div id="email-registration-error" class="error-message"></div>

                </div>

            </div>

            <div class="mail-reg-modal-continue-btn js-mail-reg-modal-continue-btn">
                <button type="button" class="btn" data-dismiss="modal">Continue Shopping</button>
            </div>

        </div>
    </div>
</div>

    <!-- Check Local Price Modal -->
    

    <script src='http://www.valuecityfurniture.com/bundles/layout?v=SE-0UUBvA4ABsZJvPDUwmywnT6Tht-jUkIkk7TLEC4I1' defer></script>

    <script src='http://www.valuecityfurniture.com/bundles/blueport?v=6-dz_VPVG1J9mhSFyeT06Hh5gpZmUf9kzHAnzliRr6c1' defer></script>


    <!-- HawkSearch CSS  & JS -->
        <!-- HawkSearch Style Sheet -->
    <link rel="stylesheet" type="text/css" href="http://search.blueport.com/sites/asi/includes/hawksearch.css" />
    <!-- HawkSearch Initialization Script -->
    <script type="text/javascript">
        (function (hawkSearch) {
            // Adding new veriable to indicate the enabled state of Hawk Search Tracking.
            hawkSearch.TrackingEnabled = 'True' === 'True';
            if (hawkSearch.TrackingEnabled) {
                // Setup the HawkSearch dependent URLs
                hawkSearch.BaseUrl = 'http://www.valuecityfurniture.com/search/proxy';
                hawkSearch.HawkUrl = 'http://search.blueport.com/sites/asi/';
                hawkSearch.TrackingUrl = 'http://tracking.hawksearch.com';
                hawkSearch.RecommenderUrl = 'http://recs.hawksearch.com';
                hawkSearch.ClientGuid = '5bc1277a6f9d43cd8354885b9306382f';
            } else {
                // In the situation that tracking functionality is not found or enabled we need to
                // revert back to using the proxy url.
                hawkSearch.BaseUrl = 'http://www.valuecityfurniture.com/search/proxy';
                hawkSearch.TrackingUrl = 'http://search.blueport.com/sites/asi/';
            }
        }(window.HawkSearch = window.HawkSearch || {}));
    </script>
    <!-- HawkSearch Library Script -->
    <script type="text/javascript" src="http://search.blueport.com/sites/asi//includes/hawksearch.min.js"></script>
    <script type="text/javascript">
        
        if (HawkSearch.TrackingEnabled && HawkSearch.Context) {
            var hasHawkHost = 'False' === 'False';
            
            HawkSearch.Context.add("regionid", "180");
            HawkSearch.Context.add("availabilityregionid", "3700");
            
            if (hasHawkHost) {
                
                HawkSearch.Context.add("hawkhost", "1");
            }
        }
    </script>


    
    <link href="http://www.valuecityfurniture.com/Content/ValueCityMix/less/bottom.css" rel="stylesheet"/>


    <script type="text/javascript">
        $(document).ready(function () {
            // Mega menu animation
            $('.animated > li').hover(function () {
                $(this).find('.js-megamenu-container').stop(true, true).delay(100).show(0);
            },
            function () {
                $(this).find('.js-megamenu-container').stop(true,true).delay(275).hide(0);
            });

            // Zip code focus
            $('#footer-email-signup-textbox').focus(function () {
                $('#footer-email-signup-go').removeClass('hide');
                $('#footer-email-signupp-check').addClass('hide');
            });

            // Zip/Postal code modal - init required zip check

            // use device location
            if (isMobileDevice(false)) {
                $("#device-location").show();
                $("#device-location-button").click(function(e) {
                    geolocate();
                    return false;
                });
            } else {
                $("#device-location").hide();
            }

            Blueport.Bindings.bindElementEnterKey('#SignUpModal', function() {
                $('button.close').click();
            });

            // This keybinding is for the shopping cart zip code modal partial (_ZipCodeModalPopup.cshtml)
            Blueport.Bindings.bindElementEnterKey('#zip-code-input', function() {
                $('#PageHeader_PostalCodeSubmitForm_SubmitZipCodeButton').focus().click();
            });

            // This keybinding is for the shopping cart zip code modal partial (_ZipCodeModalPopup.cshtml)
            Blueport.Bindings.bindElementEnterKey('#check-local-price-zipcode-input', function() {
                $('#CheckPrice_SubmitZipCodeButton').focus().click();
            });
        });

        // invalid postal code error message
        // Should be updated after FCA switch
        var errorMessaageInvalidPostalCode = '';
        var fComEnabled = 'False' === "True" ? true : false;
        if (fComEnabled === false) {
            errorMessaageInvalidPostalCode = '';
        } else {
            errorMessaageInvalidPostalCode = 'Please enter a valid zip code.';
        }
        var yourEmail = "Your email address";

        // location messages
        var locationOff = "Your location cannot be found.&lt;br&gt; Change your settings to allow access to your location.";
        var locationNotDetected = "We couldn&#39;t detect your current location.";

        //partial registration error message
        var partialRegistrationError = "Please enter a valid email address to be added to our email list.";
        var modalErrorTitle = "Error";
        var modalLogo = "/Content/ValueCity/Images/modal-logo.png";

        // JavaScript variables for text
        var pleaseEnterSKUText = "Please enter a SKU to search for.";
        var oopsText = "We're sorry, an error has occurred. Please try again.";
        var pleaseFillField = "Please fill out this field";

    </script>

    <!-- JsWidget-->
<script src="http://www.valuecityfurniture.com/bundles/widget-dependencies?v=bFlBfe4FcTQQ2fyuB3vdXoZ9BIe-bxUJx6dMdX9Mybg1"></script>

<script src="http://www.valuecityfurniture.com/bundles/widget?v=ima9s905ABfrrAjXZ2fyqFFIzTPteTx8gk9z405l6eI1"></script>

<script src="http://www.valuecityfurniture.com/bundles/widget-renderers?v=xdsCMlQI3m1XFfAGvBhrnlU_22u9TUMNu_Q5ACs0GPI1"></script>


<script type="text/javascript">
    $(document).ready(function () {
        widgetUtilities.load();
    })
</script>
    <!-- SCRIPTS THAT CAN GO AT BOTTOM -->  

    <!--Render BrightTag-->

<script type="text/javascript">
var btData = {
'portalid' : '20',
 'regionid' : '180',
'storecode' : '164 ',
 'zip' : '43026',
 'cultureid' : '0',
 'omniturecampaign' : '' ,
 'applicationdomain' :'ValueCityFurniture.com' ,
 'refferal_url' : '' ,
 'server_name' :'www.valuecityfurniture.com' ,
 'customerIntent' : '' ,

'userID' : '1128457740' ,
'guestCheckout' : '0' ,
'customerregistered' :'0' ,

'page_type' : 'other' ,

'google_analytics_key' :'UA-36954310-1',
'omniture_account' : 'furnvcf,furnglobalprod' ,
'livepersonchat_siteid' : '70442410'
};	</script>

<!--
<script type="text/javascript">
	(function () {
		var tagjs = document.createElement("script");
		var s = document.getElementsByTagName("script")[0];
		tagjs.text = "{'site':'BugNY77'}";
		tagjs.async = true;
		tagjs.src = "//s.btstatic.com/tag.js";
		s.parentNode.insertBefore(tagjs, s);
	}());
</script>

<noscript>
	<iframe src="//s.thebrighttag.com/iframe?c=BugNY77" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
!-->
<!--- XSELL HiPer VERSION 1 - Pre BLUE-9678 -->

<!--- XSELL HiPer VERSION 2 - BLUE-9678 -->
        <!-- begin XSELL HiPer Chat code -->
        <!--
        <script src="http://d1yiokhomxj7yf.cloudfront.net/production/clients/e1a322c9-e19f-4a3a-9c62-fda12ce8d7b8/live/app/hiper-build.js"></script>
        <script>
            hiper.require(["hiper-chat"], function () {
                // XsellHiPer loaded
                // Check if we are on a custom page
                if (eval("typeof getHelpXsellHiPerAgentStatus === 'function'")) {
                    getHelpXsellHiPerAgentStatus();
                }

            });
        </script>
        !-->
        <!-- end XSELL HiPer Chat code -->

    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/vendor/animsition.min.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/main.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/vendor/jquery.menu-aim.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/vendor/typeahead.jquery.min.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/vendor/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/vendor/jquery.aim.min.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/mobile-nav.js"></script>
    <script type="text/javascript" src="http://www.valuecityfurniture.com/Scripts/ASIMix/vendor/slick.min.js"></script>

    
    <div id="overlay-menu-modal"></div>

</body>
</html>
