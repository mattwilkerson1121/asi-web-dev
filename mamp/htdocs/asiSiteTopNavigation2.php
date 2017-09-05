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
                         <a href="http://www.valuecityfurniture.com/made-to-mix" target="_self" rel="noopener">MADE TO MIX</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                        <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Mix_Traditional_Logo_Black.svg" />
                                                             </div>
                                                         <h3>[un]Traditional</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/all-traditional-furniture" target="_self" rel="noopener">View All [un]Traditional</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/living-room" target="_self" rel="noopener">Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/bedroom" target="_self" rel="noopener">Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/dining-room" target="_self" rel="noopener">Dining Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/accents" target="_self" rel="noopener">Accents</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                        <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Mix_Modern_Logo_Black.svg" />
                                                             </div>
                                                         <h3>Modern[ish]</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/all-modern-furniture" target="_self" rel="noopener">View All Modern[ish]</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/living-room" target="_self" rel="noopener">Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/bedroom" target="_self" rel="noopener">Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/dining-room" target="_self" rel="noopener">Dining Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/accents" target="_self" rel="noopener">Accents</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-living-room" target="_self" rel="noopener">Mix Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-bedroom" target="_self" rel="noopener">Mix Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-dining-room" target="_self" rel="noopener">Mix Dining Room</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
                                                    <div class="hand pe-type-id-434">
                                                        <div class="pmd-card pmd-card-default pmd-card-custom-view pmd-z-depth-1" style="background:#f6f6f6;">  
                                                            <div class="pmd-card-media">
                                                                <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/CM_1847538?fmt=jpg&qlt=20,1&crop=0,1918,4303,4183&anchor=2151,4009" alt="category-promo-spot-3-alt-text">
                                                            </div>
                                                            <!-- Card header -->
                                                            <div class="pmd-card-title text-center">
                                                                <div class="pmd-card-title-text asi-nav-promo-title">10% OFF</div>
                                                                <p class="asi-nav-promo-subtitle">MADE TO MIX FURNITURE</p>
                                                                <p class="asi-nav-promo-text">Mix this with that, (un)mix that with those, anything goes.</p>
                                                                <a href="#" class="pmd-btn-flat" style="color:#cc0000;font-size:16px;font-weight:400;font-family:'ProximaNova-Regular',sans-serif;margin-top:10px;">SHOP MIX ON SALE</a>
                                                            </div>
    <style>
        
        p.asi-nav-promo-text{
            font-family: "ProximaNova-Regular",sans-serif;
            font-size:14px !important;
            line-height:15px !important;
            margin:0 auto !important;
            padding:5px 0!important
            color: #525050 !important;
        }
        
        p.asi-nav-promo-subtitle {
            font-family: "ProximaNova-Regular",sans-serif;
            font-size: 18px;
            color: #181818;
            line-height:18px !important;
            margin:0 auto !important;
            padding:0 0 8px 0 !important
        }

        .asi-nav-promo-title {
            font-family: "Knockout-HTF49-Liteweight", sans-serif;
            font-size: 45px;
            color: #181818;
            letter-spacing: 2.25px;
            line-height:40px;
        }
    </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/living-room-furniture" target="_self" rel="noopener">LIVING</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg"/>
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/sofas" target="_self" rel="noopener">Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/sectionals" target="_self" rel="noopener">Sectionals</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/loveseats" target="_self" rel="noopener">Loveseats</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/chairs-chaises" target="_self" rel="noopener">Chairs &amp; Chaises</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/sleeper-sofas" target="_self" rel="noopener">Sleeper Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/futons" target="_self" rel="noopener">Futons</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/recliners-rockers" target="_self" rel="noopener">Recliners &amp; Rockers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/ottomans" target="_self" rel="noopener">Ottomans</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/seating/lift-chairs" target="_self" rel="noopener">Lift Chairs</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg"/>
                                                             </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/tv-stands-media-centers" target="_self" rel="noopener">TV Stands &amp; Media Centers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/bookcases" target="_self" rel="noopener">Bookcases</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/storage-ottomans" target="_self" rel="noopener">Storage Ottomans</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living/cabinets-storage/accent-chests" target="_self" rel="noopener">Accent Chests</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Tables_Icon.svg"/>
                                                             </div>
                                                         <h3>Tables</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/tables/coffee-tables" target="_self" rel="noopener">Coffee Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/tables/end-tables" target="_self" rel="noopener">End Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/tables/sofa-tables" target="_self" rel="noopener">Sofa Tables</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg"/>
                                                             </div>
                                                         <h3>Accents</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/fireplaces" target="_self" rel="noopener">Fireplaces</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/rugs" target="_self" rel="noopener">Rugs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/pillows" target="_self" rel="noopener">Pillows</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/lighting" target="_self" rel="noopener">Lighting</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/wall-art" target="_self" rel="noopener">Wall Art</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/mirrors" target="_self" rel="noopener">Mirrors</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/accents/all-accent-pieces" target="_self" rel="noopener">All Accent Pieces</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list living-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-custom-furniture" target="_self" rel="noopener">Shop All Custom Furniture</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-upholstery" target="_self" rel="noopener">Shop for Upholstery</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-leather" target="_self" rel="noopener">Shop for Leather</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-reclining-sofas" target="_self" rel="noopener">Shop all Reclining Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-living-room" target="_self" rel="noopener">Shop all Living Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-whats-on-sale" target="_self" rel="noopener">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-living-room-packages" target="_self" rel="noopener">See Our Living Room Packages</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-best-sellers" target="_self" rel="noopener">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-collections" target="_self" rel="noopener">See Our Collections</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-by-brands" target="_self" rel="noopener">Shop by Brands</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
                                                    <div class="hand pe-type-id-436">
                                                        <div class="pmd-card pmd-card-default pmd-z-depth-1 pmd-card-custom-view" style="background:#f4f4f4;">  
                                                            <div class="pmd-card-media">
                                                                <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-made-to-mix-hero-1-md.jpg" alt="category-promo-spot-3-alt-text">
                                                            </div>
                                                            <!-- Card header -->
                                                            <div class="pmd-card-title text-center">
                                                                <h4 class="pmd-card-title-text asi-display-1">10% OFF</h4>
                                                                <p class="lead asi-lead">MIX LIVING ROOMS</p>
                                                                <a href="#" class="asi-mix-button pmd-btn-flat">LIVING ROOMS ON SALE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/dining-room-furniture" target="_self" rel="noopener">DINING</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Tables_Icon.svg"/>
                                                             </div>
                                                         <h3>Tables</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dining-tables" target="_self" rel="noopener">Dining Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dinettes" target="_self" rel="noopener">Dinettes</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg"/>
                                                             </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/buffets-sideboards" target="_self" rel="noopener">Buffets &amp; Sideboards</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/china-cabinets-curios" target="_self" rel="noopener">China Cabinets &amp; Curios</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg"/>
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/seating/dining-chairs" target="_self" rel="noopener">Dining Chairs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/seating/counter-bar-stools" target="_self" rel="noopener">Counter &amp; Bar Stools</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/seating/benches" target="_self" rel="noopener">Benches</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg"/>
                                                             </div>
                                                         <h3>Accents</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/lighting" target="_self" rel="noopener">Lighting</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/wall-art" target="_self" rel="noopener">Wall Art</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/mirrors" target="_self" rel="noopener">Mirrors</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/bars" target="_self" rel="noopener">Bars</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/accents/all-accent-pieces" target="_self" rel="noopener">All Accent Pieces</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-by-brand" target="_self" rel="noopener">Shop by Brand</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-5-piece-dining-rooms" target="_self" rel="noopener">Shop for 5 Piece Dining Rooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-7-piece-dining-rooms" target="_self" rel="noopener">Shop for 7 Piece Dining Rooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room" target="_self" rel="noopener">Shop all Dining Room</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-whats-on-sale" target="_self" rel="noopener">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-best-sellers" target="_self" rel="noopener">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-collections" target="_self" rel="noopener">See Our Collections</a></li>
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
                         <a href="http://www.valuecityfurniture.com/bedroom-furniture" target="_self" rel="noopener">BEDROOM</a>
                             <div class="asi-main-menu-dropdown">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                	<div class="menu-item-image-container">
                                                    	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Beds_Icon.svg"/>
                                                    </div>
                                                    <h3>Beds</h3>
                                                    <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/twin-beds" target="_self" rel="noopener">Twin Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/full-beds" target="_self" rel="noopener">Full Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/queen-beds" target="_self" rel="noopener">Queen Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/king-beds" target="_self" rel="noopener">King Beds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/daybeds" target="_self" rel="noopener">Daybeds</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/futons" target="_self" rel="noopener">Futons</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/headboards" target="_self" rel="noopener">Headboards</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/beds/bunk-beds-loft-beds" target="_self" rel="noopener">Bunk Beds &amp; Loft Beds</a></li>
                                                    </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                	<div class="menu-item-image-container">
                                                   		<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg"/>
                                                    </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/dressers" target="_self" rel="noopener">Dressers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/chests" target="_self" rel="noopener">Chests</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/nightstands" target="_self" rel="noopener">Nightstands</a></li>
                                                         </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg"/>
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/seating/benches-settees" target="_self" rel="noopener">Benches &amp; Settees</a></li>
                                                         </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg"/>
                                                             </div>
                                                         <h3>Accents</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/pillows" target="_self" rel="noopener">Pillows</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/bed-linens" target="_self" rel="noopener">Bed Linens</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/lighting" target="_self" rel="noopener">Lighting</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/wall-art" target="_self" rel="noopener">Wall Art</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/mirrors" target="_self" rel="noopener">Mirrors</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/rugs" target="_self" rel="noopener">Rugs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/accents/all-accent-pieces" target="_self" rel="noopener">All Accent Pieces</a></li>
                                                         </ul>
                                             	</div>
                                             	<div class="asi-dropdown-menu-section-list bedroom-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-by-brand" target="_self" rel="noopener">Shop by Brand</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-5-piece-bedrooms" target="_self" rel="noopener">Shop for 5 Piece Bedrooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-6-piece-bedrooms" target="_self" rel="noopener">Shop for 6 Piece Bedrooms</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-bedroom" target="_self" rel="noopener">Shop all Bedroom</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-whats-on-sale" target="_self" rel="noopener">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-bedroom-packages" target="_self" rel="noopener">See Our Bedroom Packages</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-best-sellers" target="_self" rel="noopener">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-collections" target="_self" rel="noopener">See Our Collections</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-kids" target="_self" rel="noopener">Shop all Kids</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-kids-collections" target="_self" rel="noopener">See Our Kids Collections</a></li>
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
                         	<a href="http://www.valuecityfurniture.com/mattresses" target="_self" rel="noopener">MATTRESSES</a>
                             	<div class="asi-main-menu-dropdown">
                                 	<div class="menu-content">
                                     	<div class="asi-menu-content-centered">
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                <div class="menu-item-image-container">
                                                	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_MattressSets_Icon.svg"/>
                                               	</div>
                                               	<h3>Mattress Sets</h3>
                                             	<ul>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/twin-mattress-sets" target="_self" rel="noopener">Twin Mattress Sets</a></li>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/full-mattress-sets" target="_self" rel="noopener">Full Mattress Sets</a></li>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/queen-mattress-sets" target="_self" rel="noopener">Queen Mattress Sets</a></li>
                                                     <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/king-mattress-sets" target="_self" rel="noopener">King Mattress Sets</a></li>
                                             	</ul>
                                             	<div class="megamenu-links-special">
                                                 	<ul>
                                                    	<li><a href="http://www.valuecityfurniture.com/search/v/mattresses/adjustable-bases-foundations" target="_self" rel="noopener" class="bold">Adjustable Bases &amp; Foundations</a></li>
                                                	</ul>
                                             	</div>
                                         	</div>
                                         	<div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Accessories_Icon.svg"/>
                                                             </div>
                                                         <h3>Accessories</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-frames" target="_self" rel="noopener">Bed Frames</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-linens" target="_self" rel="noopener">Bed Linens</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/pillows" target="_self" rel="noopener">Pillows</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/mattress-protectors" target="_self" rel="noopener">Mattress Protectors</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Brands_Icon.svg"/>
                                                             </div>
                                                         <h3>Brands</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautysleep" target="_self" rel="noopener">BeautySleep</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest" target="_self" rel="noopener">Beautyrest</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver" target="_self" rel="noopener">Beautyrest Silver</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-platinum" target="_self" rel="noopener">Beautyrest Platinum</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-black" target="_self" rel="noopener">Beautyrest Black</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver-hybrid" target="_self" rel="noopener">Beautyrest Silver Hybrid</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-hybrid" target="_self" rel="noopener">Serta iComfort Hybrid</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-foam" target="_self" rel="noopener">Serta iComfort Foam</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/perfect-sleeper" target="_self" rel="noopener">Serta Perfect Sleeper</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/brands/miraclefoam" target="_self" rel="noopener">MiracleFoam</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Manufacturers_Icon.svg"/>
                                                             </div>
                                                         <h3>Manufacturers</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/serta" target="_self" rel="noopener">Serta</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/simmons" target="_self" rel="noopener">Simmons</a></li>
                                                         </ul>
                                            </div>
                                            <div class="asi-dropdown-menu-section-list mattresses-menu-col last-menu-col">
                                                         <h3>Quick Links</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses" target="_self" rel="noopener">Shop All Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-spring-mattresses" target="_self" rel="noopener">Shop all Spring Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-hybrid-mattresses" target="_self" rel="noopener">Shop all Hybrid Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-foam-mattresses" target="_self" rel="noopener">Shop all Foam Mattresses</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-whats-on-sale" target="_self" rel="noopener">See What&#39;s on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-best-sellers" target="_self" rel="noopener">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-collections" target="_self" rel="noopener">See Our Collections</a></li>
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
                 		<a href="http://www.valuecityfurniture.com/search/v/accents" target="_self" rel="noopener">ACCENTS</a>
                     		<div class="asi-main-menu-dropdown">
                         		<div class="menu-content">
                             		<div class="asi-menu-content-centered">
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col ">
                                                     <div class="menu-item-image-container">
                                                                 <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_HomeAccessories_Icon.svg"/>
                                                     </div>
                                                 <h3>Home Accessories</h3>
                                                 <ul>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/bed-linens" target="_self" rel="noopener">Bed Linens</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/wall-art" target="_self" rel="noopener">Wall Art</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/mirrors" target="_self" rel="noopener">Mirrors</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/pillows" target="_self" rel="noopener">Pillows</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/lighting" target="_self" rel="noopener">Lighting</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/rugs" target="_self" rel="noopener">Rugs</a></li>
                                                 </ul>
                                     	</div>
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col ">
                                                     <div class="menu-item-image-container">
                                                                 <img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Furniture_Icon.svg"/>
                                                     </div>
                                                 <h3>Furniture</h3>
                                                 <ul>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/tv-stands-media-centers" target="_self" rel="noopener">TV Stands &amp; Media Centers</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/home-office" target="_self" rel="noopener">Home Office</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/bookcases" target="_self" rel="noopener">Bookcases</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/chairs" target="_self" rel="noopener">Chairs</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/ottomans" target="_self" rel="noopener">Ottomans</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/fireplaces" target="_self" rel="noopener">Fireplaces</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/benches-settees" target="_self" rel="noopener">Benches &amp; Settees</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/bars" target="_self" rel="noopener">Bars</a></li>
                                                         <li><a href="http://www.valuecityfurniture.com/search/v/accents/furniture/accent-tables" target="_self" rel="noopener">Accent Tables</a></li>
                                                 </ul>
                                     	</div>
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col ">
                                            <div class="menu-item-image-container">
                                            	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Patio_Icon.svg"/>
                                            </div>
                                            <h3>Patio</h3>
                                            <ul>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-chairs" target="_self" rel="noopener">Outdoor Chairs</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-tables" target="_self" rel="noopener">Outdoor Tables</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-dinettes" target="_self" rel="noopener">Outdoor Dinettes</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sofas" target="_self" rel="noopener">Outdoor Sofas</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sectionals" target="_self" rel="noopener">Outdoor Sectionals</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/umbrellas-gazebos" target="_self" rel="noopener">Umbrellas &amp; Gazebos</a></li>
                                            </ul>
                                     	</div>
                                     	<div class="asi-dropdown-menu-section-list accents-menu-col last-menu-col">
                                        	<h3>Quick Links</h3>
                                            <ul>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-by-brand" target="_self" rel="noopener">Shop by Brand</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-accents" target="_self" rel="noopener">Shop All Accents</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-best-sellers" target="_self" rel="noopener">See Our Best Sellers</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-free-shipping" target="_self" rel="noopener">Shop All Free Shipping</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-patio" target="_self" rel="noopener">Shop all Patio</a></li>
												<li><a href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-patio-packages" target="_self" rel="noopener">See Our Patio Packages</a></li>
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
                	<a href="http://www.valuecityfurniture.com/search/v/new-arrivals" target="_self" rel="noopener">NEW ARRIVALS</a>
             	</li>
             	<li class="asi-main-menu-list-item">
                 	<a href="#" target="_self" rel="noopener">INSPIRATION</a>
                     	<div class="asi-main-menu-dropdown">
                         	<div class="menu-content">
                            	<div class="asi-menu-content-centered">
                                    <div class="asi-dropdown-menu-section-list inspiration-menu-col ">
                                        <div class="menu-item-image-container">
                                        	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Inspiration_Icon.svg"/>
                                        </div>
                                        <h3>Inspiration</h3>
                                        <ul>
											<li><a href="http://www.valuecityfurniture.com/blog" target="_self" rel="noopener">Blog</a></li>
											<li><a href="http://www.valuecityfurniture.com/customer-gallery" target="_self" rel="noopener">Customer Gallery</a></li>
											<li><a href="http://www.valuecityfurniture.com/search/v/inspiration/pinterest" target="_self" rel="noopener">Pinterest</a></li>
											<li><a href="http://www.valuecityfurniture.com/weeklyad" target="_self" rel="noopener">Furniture Shoppers Guide</a></li>
											<li><a href="http://www.valuecityfurniture.com/buying-guides" target="_self" rel="noopener">Buying Guides</a></li>
                                    	</ul>
                                    </div>
                                    <div class="asi-dropdown-menu-section-list inspiration-menu-col ">
                                    <div class="menu-item-image-container">
                                    	<img class="menu-item-image" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Menu/Menu_Experiences_Icon.svg"/>
                                    </div>
                                <h3>Experiences</h3>
                                <ul>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/ultimate-comfort" target="_self" rel="noopener">Ultimate Comfort</a>
                                 	</li>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/personalized-living" target="_self" rel="noopener">Personalized Living</a>
                                 	</li>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/about-us" target="_self" rel="noopener">About Us</a>
                                 	</li>
                                 	<li>
                                 		<a href="http://www.valuecityfurniture.com/search/v/bestsellers" target="_self" rel="noopener">Best Sellers</a>
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
		<a href="http://www.valuecityfurniture.com/search/v/on-sale" target="_self" rel="noopener">SALE</a>
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
		                    <li><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/new-arrivals">New Arrivals</a></li>
		                    <li data-mobile-nav-target="Inspiration">Inspiration</li>
		                    <li><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/on-sale">Sale</a></li>
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
		                    <li><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/adjustable-bases-foundations">Adjustable Bases &amp; Foundations</a></li>
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
		                    <li data-mobile-nav-target="Made to Mix-Traditional-View All Traditional" style="text-transform:none;"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/all-traditional-furniture">View All [un]Traditional</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Living Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/living-room">Living Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Bedroom"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/bedroom">Bedroom</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Dining Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/dining-room">Dining Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Traditional-Accents"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/traditional/accents">Accents</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Made to Mix-Modern" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Made to Mix" >Modern[ish]</li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-View All Modern" style="text-transform:none;"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/all-modern-furniture">View All Modern[ish]</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Living Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/living-room">Living Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Bedroom"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/bedroom">Bedroom</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Dining Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/dining-room">Dining Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Modern-Accents"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/modern/accents">Accents</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Made to Mix-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Made to Mix">Quick Links</li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links-Mix Living Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-living-room">Mix Living Room</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links-Mix Bedroom"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-bedroom">Mix Bedroom</a></li>
		                    <li data-mobile-nav-target="Made to Mix-Quick Links-Mix Dining Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-dining-room">Mix Dining Room</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Seating" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Seating</li>
		                    <li data-mobile-nav-target="Living-Seating-Sofas-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating">View All Seating</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Sofas"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/sofas">Sofas</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Sectionals"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/sectionals">Sectionals</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Loveseats"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/loveseats">Loveseats</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Chairs &amp; Chaises"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/chairs-chaises">Chairs &amp; Chaises</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Sleeper Sofas"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/sleeper-sofas">Sleeper Sofas</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Futons"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/futons">Futons</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Recliners &amp; Rockers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/recliners-rockers">Recliners &amp; Rockers</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Ottomans"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/ottomans">Ottomans</a></li>
		                    <li data-mobile-nav-target="Living-Seating-Lift Chairs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/seating/lift-chairs">Lift Chairs</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Cabinets &amp; Storage" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage">View All Cabinets &amp; Storage</a></li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-TV Stands &amp; Media Centers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/tv-stands-media-centers">TV Stands &amp; Media Centers</a></li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-Bookcases"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/bookcases">Bookcases</a></li>
		                    <li data-mobile-nav-target="Living-Cabinets &amp; Storage-Storage Ottomans"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/cabinets-storage/storage-ottomans">Storage Ottomans</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Tables" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Tables</li>
		                    <li data-mobile-nav-target="Living-Tables-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/tables">View All Tables</a></li>
		                    <li data-mobile-nav-target="Living-Tables-Coffee Tables"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/tables/coffee-tables">Coffee Tables</a></li>
		                    <li data-mobile-nav-target="Living-Tables-End Tables"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/tables/end-tables">End Tables</a></li>
		                    <li data-mobile-nav-target="Living-Tables-Sofa Tables"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/tables/sofa-tables">Sofa Tables</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Accents" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Accents</li>
		                    <li data-mobile-nav-target="Living-Accents-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents">View All Accents</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Fireplaces"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/fireplaces">Fireplaces</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Rugs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/rugs">Rugs</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Pillows"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Lighting"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/lighting">Lighting</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Wall Art"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/wall-art">Wall Art</a></li>
		                    <li data-mobile-nav-target="Living-Accents-Mirrors"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/mirrors">Mirrors</a></li>
		                    <li data-mobile-nav-target="Living-Accents-All Accent Pieces"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/accents/all-accent-pieces">All Accent Pieces</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Living-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Living">Quick Links</li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop All Custom Furniture"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-custom-furniture">Shop All Custom Furniture</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop for Upholstery"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-upholstery"> Shop for Upholstery</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop for Leather"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-for-leather"> Shop for Leather</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop all Reclining Sofas"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-reclining-sofas"> Shop all Reclining Sofas</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop all Living Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-all-living-room"> Shop all Living Room</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See What&#39;s on Sale"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-whats-on-sale"> See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See Our Living Room Packages"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-living-room-packages"> See Our Living Room Packages</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See Our Best Sellers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-best-sellers"> See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-See Our Collections"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-collections"> See Our Collections</a></li>
		                    <li data-mobile-nav-target="Living-Quick Links-Shop by Brands"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-by-brands"> Shop by Brands</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Tables" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Tables</li>
		                    <li data-mobile-nav-target="Dining-Tables-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/tables">View All Tables</a></li>
		                    <li data-mobile-nav-target="Dining-Tables-Dining Tables"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dining-tables">Dining Tables</a></li>
		                    <li data-mobile-nav-target="Dining-Tables-Dinettes"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dinettes">Dinettes</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Cabinets &amp; Storage" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage">View All Cabinets &amp; Storage</a></li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage-Buffets &amp; Sideboards"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/buffets-sideboards">Buffets &amp; Sideboards</a></li>
		                    <li data-mobile-nav-target="Dining-Cabinets &amp; Storage-China Cabinets &amp; Curios"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/china-cabinets-curios">China Cabinets &amp; Curios</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Seating" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Seating</li>
		                    <li data-mobile-nav-target="Dining-Seating-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/seating">View All Seating</a></li>
		                    <li data-mobile-nav-target="Dining-Seating-Dining Chairs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/seating/dining-chairs">Dining Chairs</a></li>
		                    <li data-mobile-nav-target="Dining-Seating-Counter &amp; Bar Stools"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/seating/counter-bar-stools">Counter &amp; Bar Stools</a></li>
		                    <li data-mobile-nav-target="Dining-Seating-Benches"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/seating/benches">Benches</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Accents" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Accents</li>
		                    <li data-mobile-nav-target="Dining-Accents-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/accents">View All Accents</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Lighting"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/lighting">Lighting</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Wall Art"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/wall-art">Wall Art</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Mirrors"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/mirrors">Mirrors</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-Bars"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/bars">Bars</a></li>
		                    <li data-mobile-nav-target="Dining-Accents-All Accent Pieces"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/accents/all-accent-pieces">All Accent Pieces</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Dining-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Dining">Quick Links</li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop by Brand"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-by-brand">Shop by Brand</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop for 5 Piece Dining Rooms"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-5-piece-dining-rooms">Shop for 5 Piece Dining Rooms</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop for 7 Piece Dining Rooms"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/shop-for-7-piece-dining-rooms">Shop for 7 Piece Dining Rooms</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-Shop all Dining Room"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room">Shop all Dining Room</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-See What&#39;s on Sale"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-whats-on-sale">See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-See Our Best Sellers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-best-sellers">See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Dining-Quick Links-See Our Collections"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-collections">See Our Collections</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Beds" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Beds</li>
		                    <li data-mobile-nav-target="Bedroom-Beds-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds">View All Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Twin Beds"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/twin-beds">Twin Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Full Beds"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/full-beds"> Full Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Queen Beds"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/queen-beds"> Queen Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-King Beds"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/king-beds"> King Beds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Daybeds"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/daybeds"> Daybeds</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Futons"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/futons"> Futons</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Headboards"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/headboards"> Headboards</a></li>
		                    <li data-mobile-nav-target="Bedroom-Beds-Bunk Beds &amp; Loft Beds"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/beds/bunk-beds-loft-beds"> Bunk Beds &amp; Loft Beds</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Cabinets &amp; Storage" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Cabinets &amp; Storage</li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage">View All Cabinets &amp; Storage</a></li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-Dressers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/dressers">Dressers</a></li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-Chests"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/chests">Chests</a></li>
		                    <li data-mobile-nav-target="Bedroom-Cabinets &amp; Storage-Nightstands"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/cabinets-storage/nightstands">Nightstands</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Seating" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Seating</li>
		                    <li data-mobile-nav-target="Bedroom-Seating-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/seating">View All Seating</a></li>
		                    <li data-mobile-nav-target="Bedroom-Seating-Benches &amp; Settees"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/seating/benches-settees">Benches &amp; Settees</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Accents" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Accents</li>
		                    <li data-mobile-nav-target="Bedroom-Accents-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents">View All Accents</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Pillows"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Bed Linens"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/bed-linens"> Bed Linens</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Lighting"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/lighting"> Lighting</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Wall Art"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/wall-art"> Wall Art</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Mirrors"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/mirrors"> Mirrors</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-Rugs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/rugs"> Rugs</a></li>
		                    <li data-mobile-nav-target="Bedroom-Accents-All Accent Pieces"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/accents/all-accent-pieces"> All Accent Pieces</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Bedroom-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Bedroom">Quick Links</li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop by Brand"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-by-brand">Shop by Brand</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop for 5 Piece Bedrooms"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-5-piece-bedrooms">Shop for 5 Piece Bedrooms</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop for 6 Piece Bedrooms"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-for-6-piece-bedrooms">Shop for 6 Piece Bedrooms</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop all Bedroom"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-bedroom">Shop all Bedroom</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See What&#39;s on Sale"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-whats-on-sale">See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Bedroom Packages"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-bedroom-packages">See Our Bedroom Packages</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Best Sellers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-best-sellers">See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Collections"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-collections">See Our Collections</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-Shop all Kids"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-kids">Shop all Kids</a></li>
		                    <li data-mobile-nav-target="Bedroom-Quick Links-See Our Kids Collections"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-kids-collections">See Our Kids Collections</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Mattress Sets" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Mattress Sets</li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets">View All Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-Twin Mattress Sets"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/twin-mattress-sets">Twin Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-Full Mattress Sets"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/full-mattress-sets">Full Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-Queen Mattress Sets"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/queen-mattress-sets">Queen Mattress Sets</a></li>
		                    <li data-mobile-nav-target="Mattresses-Mattress Sets-King Mattress Sets"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/mattress-sets/king-mattress-sets">King Mattress Sets</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Accessories" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Accessories</li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories">View All Accessories</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Bed Frames"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-frames">Bed Frames</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Bed Linens"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/bed-linens">Bed Linens</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Pillows"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Mattresses-Accessories-Mattress Protectors"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/accessories/mattress-protectors">Mattress Protectors</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Brands" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Brands</li>
		                    <li data-mobile-nav-target="Mattresses-Brands-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands">View All Brands</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-BeautySleep"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautysleep">BeautySleep</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest"> Beautyrest</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Silver"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver"> Beautyrest Silver</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Platinum"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-platinum"> Beautyrest Platinum</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Black"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-black"> Beautyrest Black</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Beautyrest Silver Hybrid"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/beautyrest-silver-hybrid"> Beautyrest Silver Hybrid</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Serta iComfort Hybrid"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-hybrid"> Serta iComfort Hybrid</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Serta iComfort Foam"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/icomfort-foam"> Serta iComfort Foam</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-Serta Perfect Sleeper"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/perfect-sleeper"> Serta Perfect Sleeper</a></li>
		                    <li data-mobile-nav-target="Mattresses-Brands-MiracleFoam"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/brands/miraclefoam"> MiracleFoam</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Manufacturers" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Manufacturers</li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers">View All Manufacturers</a></li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers-Serta"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/serta">Serta</a></li>
		                    <li data-mobile-nav-target="Mattresses-Manufacturers-Simmons"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/manufacturers/simmons">Simmons</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Mattresses-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Mattresses">Quick Links</li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop All Mattresses"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses">Shop All Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop all Spring Mattresses"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-spring-mattresses">Shop all Spring Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop all Hybrid Mattresses"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-hybrid-mattresses">Shop all Hybrid Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-Shop all Foam Mattresses"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/shop-all-foam-mattresses">Shop all Foam Mattresses</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-See What&#39;s on Sale"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-whats-on-sale">See What&#39;s on Sale</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-See Our Best Sellers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-best-sellers">See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Mattresses-Quick Links-See Our Collections"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-collections">See Our Collections</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Home Accessories" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Home Accessories</li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories">View All Home Accessories</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Bed Linens"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/bed-linens">Bed Linens</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Wall Art"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/wall-art">Wall Art</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Mirrors"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/mirrors">Mirrors</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Pillows"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/pillows">Pillows</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Lighting"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/lighting">Lighting</a></li>
		                    <li data-mobile-nav-target="Accents-Home Accessories-Rugs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/home-accessories/rugs">Rugs</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Furniture" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Furniture</li>
		                    <li data-mobile-nav-target="Accents-Furniture-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture">View All Furniture</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-TV Stands &amp; Media Centers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/tv-stands-media-centers">TV Stands &amp; Media Centers</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Home Office"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/home-office">Home Office</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Bookcases"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/bookcases">Bookcases</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Chairs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/chairs">Chairs</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Ottomans"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/ottomans">Ottomans</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Fireplaces"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/fireplaces">Fireplaces</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Benches &amp; Settees"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/benches-settees">Benches &amp; Settees</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Bars"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/bars">Bars</a></li>
		                    <li data-mobile-nav-target="Accents-Furniture-Accent Tables"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/furniture/accent-tables">Accent Tables</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Patio" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Patio</li>
		                    <li data-mobile-nav-target="Accents-Patio-All"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio">View All Patio</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Chairs"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-chairs">Outdoor Chairs</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Tables"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-tables">Outdoor Tables</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Dinettes"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-dinettes"> Outdoor Dinettes</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Sofas"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sofas"> Outdoor Sofas</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Outdoor Sectionals"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sectionals"> Outdoor Sectionals</a></li>
		                    <li data-mobile-nav-target="Accents-Patio-Umbrellas &amp; Gazebos"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/patio/umbrellas-gazebos"> Umbrellas &amp; Gazebos</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Accents-Quick Links" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Accents">Quick Links</li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop by Brand"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-by-brand">Shop by Brand</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop All Accents"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-accents"> Shop All Accents</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-See Our Best Sellers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-best-sellers"> See Our Best Sellers</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop All Free Shipping"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-free-shipping"> Shop All Free Shipping</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-Shop all Patio"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/shop-all-patio"> Shop all Patio</a></li>
		                    <li data-mobile-nav-target="Accents-Quick Links-See Our Patio Packages"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/accents/quick-links/see-our-patio-packages"> See Our Patio Packages</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Inspiration-Inspiration" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Inspiration">Inspiration</li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Blog"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/blog">Blog</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Customer Gallery"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.comcustomer-gallery">Customer Gallery</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Pinterest"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/inspiration/pinterest">Pinterest</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Furniture Shoppers Guide"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/weeklyad">Furniture Shoppers Guide</a></li>
		                    <li data-mobile-nav-target="Inspiration-Inspiration-Buying Guides"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/buying-guides">Buying Guides</a></li>
		                    <li class="flyout-divider"></li>
		                </ul>
		                <ul class="group" data-mobile-nav-group="Inspiration-Experiences" data-mobile-nav-parent-tier="3">
		                    <li class="asi-mobile-nav-title" data-mobile-nav-target="Inspiration">Experiences</li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-Ultimate Comfort"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/brands/our-furniture-brands/ultimate-comfort">Ultimate Comfort</a></li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-Personalized Living"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/personalized-living">Personalized Living</a></li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-About Us"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/about-us">About Us</a></li>
		                    <li data-mobile-nav-target="Inspiration-Experiences-Best Sellers"><a target="_self" rel="noopener" href="http://www.valuecityfurniture.com/search/v/bestsellers">Best Sellers</a></li>
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