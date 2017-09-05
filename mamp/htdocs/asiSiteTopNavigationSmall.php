<div id="mvcSpinner" class="loading-content-spinner hide"></div>
    <div id="page-container" class="page-container">

<!-- START :: HEADER CONTAINER 2 !-->
<div id="headerContainer">
<header id="top">
   <nav class="asi-utility-menu collapsed">
    <ul>

        
        <li>
            <a id="asi-order-tracking-button" href="http://www.valuecityfurniture.com/track-my-order">
                <div class="asi-icon" id="order-tracking-icon">


                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #181818;
                            }
                        </style>
                        <polygon class="st0" points="10.8 10.8 10.8 1 1 1 1 10.8 "></polygon>
                        <path class="st1" d="M8.3 6.4c-0.2 0.9-1 1.7-1.9 1.9v-1H5.3v1c-0.9-0.2-1.6-1-1.8-1.9h1V5.3h-1c0.2-0.9 0.9-1.6 1.8-1.8v1h1.1v-1C7.3 3.7 8 4.4 8.2 5.3H7.3v1.1H8.3zM9.4 5.3c-0.2-1.5-1.5-2.7-3-3V1H5.3v1.4c-1.5 0.2-2.7 1.5-3 3H1v1.1h1.4c0.2 1.5 1.4 2.7 3 3v1.4h1.1V9.4c1.5-0.2 2.7-1.5 3-3h1.4V5.3H9.4z"></path>
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
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #181818;
                            }
                        </style>
                        <polygon class="st0" points="1 6.4 1 1.5 7.5 1.5 7.5 6.4 7.5 11.4 1 11.4 "></polygon>
                        <title> Pin_Icon</title>
                        <desc> Small  black pin </desc>
                        <path class="st1" d="M4.3 6.5c-1 0-1.7-0.8-1.7-1.7s0.8-1.7 1.7-1.7S6 3.9 6 4.8 5.2 6.5 4.3 6.5M4.3 1.5C2.5 1.5 1 3 1 4.8 1 5.4 1.2 6 1.4 6.4s2.8 5 2.8 5 2.6-4.6 2.8-5 0.4-1 0.4-1.6C7.5 3 6.1 1.5 4.3 1.5"></path>
                    </svg>
                </div>
                <span>
                    Location:
                    <span role="menuitem" type="text" data-bind="text: UserZipCode" class="zipcode js-header-zip au-header-zip" maxlength="7">63147</span>
                </span>
            </a>
            <div class="asi-locator-dropdown">
                <div class="menu-content">
                    <h3>Change Your Location</h3>
                    <div class="asi-locator-search-container">
                        <input id="header-zip" class="asi-locator-input au-header-zip-textbox" data-bind="value: UserZipCode, enterkey: $root.updatePostalCode" type="text">
                        <!--<img class="asi-locator-delete-icon hand" data-bind="click: $root.clearPostalCode" src="/Content/ValueCityMix/svg/Close_Icon.svg" />-->
                        <img class="asi-locator-search-icon hand" data-bind="click: $root.updatePostalCode" src="/Content/ValueCityMix/svg/Search_Icon.svg">
                    </div>

                    <!-- Pickup only -->
                    <!-- ko if: IsPickUpOnly() === true --><!-- /ko -->
                    <!-- ko if: IsPickUpOnly() === false -->
                    <!-- Delivery -->
                    <div class="asi-locator-notification">
                        <div class="asi-warning-x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 12.5">
                                <desc> Small black check</desc>
                                <path d="M5 12.5L0.3 7.7c-0.4-0.4-0.4-1 0-1.4 0.4-0.4 1-0.4 1.4 0L5 9.7l9.3-9.4c0.4-0.4 1-0.4 1.4 0 0.4 0.4 0.4 1 0 1.4L5 12.5z"></path>
                            </svg>
                        </div>
                        We deliver to you
                    </div>
                    <!-- /ko -->
                    <!-- Has PickUp-->
                    <!-- ko if: HasPickUp() === true --><!-- /ko -->
                    <div class="asi-locator-separator">
                        <h3>Your closest store:</h3>
                    </div>
                    <div class="asi-locator-map-section">
                        <div class="asi-locator-map-img">
                            <img data-bind="attr:{ src: StoreMapImageUrl}" class="header-zip-store-map">
                            
                            <button data-bind="click: openStoreDetails">Directions</button>
                        </div>
                        <div class="asi-location-details">
                            <h4 data-bind="html: StoreName">Value City Furniture - St. Ann</h4>
                            <div>
                                <span data-bind="html: StoreAddress"></span><br>
                                <span data-bind="text: StoreCity"></span>, <span data-bind="text: StoreState"></span> <span data-bind="text: StorePostalCode"></span><br>

                                <a href="tel:+(888) 751-8552" data-bind="text: StorePhoneNumber"></a>
                            </div>
                            <div class="asi-location-hours">
                                <span>Regular Hours:</span><br>
                                <!-- ko if: StoreDaysArray().length > 0 --><!-- /ko -->
                            </div>
                        </div>
                    </div>
                    <div class="asi-locator-endcap">
                        <a href="http://www.valuecityfurniture.com/store-locator">
                            Store Locator
                            <img class="asi-arrow-icon" src="/Content/ValueCityMix/svg/Arrow_Icon.svg">
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
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #181818;
                            }
                        </style>
                        <polygon class="st0" points="1 5.7 1 10.4 10.2 10.4 10.2 5.7 10.2 1 1 1 "></polygon>
                        <title> Page 1</title>
                        <desc> Heart </desc>
                        <path class="st1" d="M4.6 10.2L1.4 6.6c0 0-1.2-1.3-1.2-2.7C0.2 2.1 1.1 1 2.7 1c0.9 0 1.7 0.8 2.2 1.3C5.2 1.8 6.1 1 7 1c1.5 0 2.5 1.1 2.5 2.8 0 1.5-1.1 2.7-1.2 2.7L5 10.2c0 0.1-0.1 0.2-0.2 0.2S4.7 10.3 4.6 10.2"></path>
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
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #181818;
                            }
                        </style>
                        <polygon class="st0" points="10 10.9 1 10.9 1 1.1 10 1.1 "></polygon>
                        <path class="st1" d="M9.8 8.4L9.8 8.4C9.7 8 9.5 7.7 9.2 7.4l0 0 0 0 0 0 0 0 -2-1.3C7.6 5.6 7.9 5 7.9 4.3V3.6c0-1.4-1-2.5-2.3-2.5S3.3 2.2 3.3 3.6v0.6C3.3 4.9 3.6 5.5 4 6L2 7.3l0 0 0 0 0 0 0 0c-0.4 0.3-0.6 0.6-0.6 1l0 0L1 10.5c0 0.1 0 0.2 0.1 0.3 0 0.1 0.1 0.1 0.2 0.1h8.5c0.1 0 0.1 0 0.2-0.1 0-0.1 0-0.2 0-0.3L9.8 8.4z"></path>
                    </svg>
                </div>
                <span>Sign in</span>
            </a>
        </li>
        <!-- /ko -->
        <!-- ko if: IsSignedIn() && IsSignedInAsGuest() != true --><!-- /ko -->
    </ul>
</nav>



<!-- Dynamic menu -->


<nav class="asi-main-menu-outline">

    <div class="asi-logo asi-collapsed-logo">
        <a href="#" class="asi-tile-icon"><img src="../../Content/ValueCityMix/svg/Logo_Tile.svg" alt="VCF | Value City Furniture Logo"></a>
    </div>

    <nav id="main-navigation">
             <ul class="asi-main-menu-left">

                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/made-to-mix" target="_self">MADE TO MIX</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list made-to-mix-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                        <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Mix_Traditional_Logo_Black.svg">
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
                                                                        <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Mix_Modern_Logo_Black.svg">
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
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/made-to-mix/mix-accents" target="_self">Mix Accents</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-434" onclick="peAction('http://www.valuecityfurniture.com/search/v/made-to-mix','_top','','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="10% off the malibu collection. break the matchy-matchy rule. mix and (un)match. make it you and save. shop made to mix" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/598842.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/598842.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/598843.png" src="http://content.valuecityfurniture.com/ProductImages/0/598842.png" title="10% off the malibu collection. break the matchy-matchy rule. mix and (un)match. make it you and save. shop made to mix">
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/living-room-furniture" target="_self">LIVING</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content" style="height: 500px;">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list living-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Tables_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg">
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
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-whats-on-sale" target="_self">See What's on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-living-room-packages" target="_self">See Our Living Room Packages</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/living-room/quick-links/shop-by-brands" target="_self">Shop by Brands</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-436" onclick="peAction('http://www.valuecityfurniture.com/search/v/on-sale?portal_menu_level_1_1=Living~257226&amp;brand_1=One80~204517','_top','1','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="10% off select reclining groups + free delivery on qualifying purchases totaling $999 or more. shop living rooms on sale" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/598837.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/598837.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/598838.png" src="http://content.valuecityfurniture.com/ProductImages/0/598837.png" title="10% off select reclining groups + free delivery on qualifying purchases totaling $999 or more. shop living rooms on sale">
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/dining-room-furniture" target="_self">DINING</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content" style="height: 500px;">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Tables_Icon.svg">
                                                             </div>
                                                         <h3>Tables</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dining-tables" target="_self">Dining Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/tables/dinettes" target="_self">Dinettes</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg">
                                                             </div>
                                                         <h3>Cabinets &amp; Storage</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/buffets-sideboards" target="_self">Buffets &amp; Sideboards</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/cabinets-storage/china-cabinets-curios" target="_self">China Cabinets &amp; Curios</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list dining-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg">
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
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-whats-on-sale" target="_self">See What's on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/dining-room/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-438" onclick="peAction('http://www.valuecityfurniture.com/search/on-sale?portal_menu_level_1=1|Dining~257256','_top','1','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="10% off select dining room groups + free delivery on qualifying orders totaling $999 or more. shop dining rooms on sale." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/598834.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/598834.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/598835.png" src="http://content.valuecityfurniture.com/ProductImages/0/598834.png" title="10% off select dining room groups + free delivery on qualifying orders totaling $999 or more. shop dining rooms on sale.">
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/bedroom-furniture" target="_self">BEDROOM</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Beds_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_CabsStorage_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Seating_Icon.svg">
                                                             </div>
                                                         <h3>Seating</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/seating/benches-settees" target="_self">Benches &amp; Settees</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list bedroom-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Accents_Icon.svg">
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
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-whats-on-sale" target="_self">See What's on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-bedroom-packages" target="_self">See Our Bedroom Packages</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/shop-all-kids" target="_self">Shop all Kids</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bedroom/quick-links/see-our-kids-collections" target="_self">See Our Kids Collections</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-440" onclick="peAction('http://www.valuecityfurniture.com/search/v/on-sale?portal_menu_level_1_1=Bedroom~257241','_top','1','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="up to 20% off select bedroom groups + free delivery on qualifying purchases totaling $999 or more. shop bedrooms on sale." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/598832.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/598832.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/598833.png" src="http://content.valuecityfurniture.com/ProductImages/0/598832.png" title="up to 20% off select bedroom groups + free delivery on qualifying purchases totaling $999 or more. shop bedrooms on sale.">
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/mattresses" target="_self">MATTRESSES</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content" style="height: 510px;">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list mattresses-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_MattressSets_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Accessories_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Brands_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Manufacturers_Icon.svg">
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
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-whats-on-sale" target="_self">See What's on Sale</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-best-sellers" target="_self">See Our Best Sellers</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/mattresses/quick-links/see-our-collections" target="_self">See Our Collections</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-442" onclick="peAction('http://www.valuecityfurniture.com/search/mattresses/60-month-mattress-offer','_top','1','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="free delivery* on qualifying purchases totaling $999 or more | upgrade your sleep and rest for less | shop mattresses" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/598844.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/598844.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/598845.png" src="http://content.valuecityfurniture.com/ProductImages/0/598844.png" title="free delivery* on qualifying purchases totaling $999 or more | upgrade your sleep and rest for less | shop mattresses">
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>

             </ul>
             <ul class="asi-main-menu-right">

                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/search/v/accents" target="_self">ACCENTS</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content" style="height: 517px;">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list accents-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_HomeAccessories_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Furniture_Icon.svg">
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
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Patio_Icon.svg">
                                                             </div>
                                                         <h3>Patio</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-chairs" target="_self">Outdoor Chairs</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-tables" target="_self">Outdoor Tables</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-dinettes" target="_self">Outdoor Dinettes</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sofas" target="_self">Outdoor Sofas</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/accents/patio/outdoor-sectionals" target="_self">Outdoor Sectionals</a></li>
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
<div class="hand pe-type-id-444" onclick="peAction('http://www.valuecityfurniture.com/search/v/on-sale?portal_menu_level_1_1=Living~257226&amp;piece_family_1=Chairs~3008','_top','1','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="20% off select accent chairs. a new accent or two can make your space look brand new. shop accent chairs on sale." class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/598829.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/598829.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/598830.png" src="http://content.valuecityfurniture.com/ProductImages/0/598829.png" title="20% off select accent chairs. a new accent or two can make your space look brand new. shop accent chairs on sale.">
<div class="page-element-paragraph">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></div>
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
                                 </div>
                             </div>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="http://www.valuecityfurniture.com/search/v/new-arrivals" target="_self">NEW ARRIVALS</a>
                     </li>
                     <li class="asi-main-menu-list-item">
                         <a href="#" target="_self">INSPIRATION</a>
                             <div class="asi-main-menu-dropdown" style="top: 50px; display: none;">
                                 <div class="menu-content">
                                     <div class="asi-menu-content-centered">
                                             <div class="asi-dropdown-menu-section-list inspiration-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Inspiration_Icon.svg">
                                                             </div>
                                                         <h3>Inspiration</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/blog" target="_self">Blog</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/inspiration/pinterest" target="_self">Pinterest</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/weeklyad" target="_self">Furniture Shoppers Guide</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/buying-guides" target="_self">Buying Guides</a></li>
                                                         </ul>
                                             </div>
                                             <div class="asi-dropdown-menu-section-list inspiration-menu-col ">
                                                             <div class="menu-item-image-container">
                                                                         <img class="menu-item-image" src="/Content/ValueCityMix/svg/Menu/Menu_Experiences_Icon.svg">
                                                             </div>
                                                         <h3>Experiences</h3>
                                                         <ul>
                                                                 <li><a href="http://www.valuecityfurniture.com/ultimate-comfort" target="_self">Ultimate Comfort</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/personalized-living" target="_self">Personalized Living</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/about-us" target="_self">About Us</a></li>
                                                                 <li><a href="http://www.valuecityfurniture.com/search/v/bestsellers" target="_self">Best Sellers</a></li>
                                                         </ul>
                                             </div>
                                                <div class="asi-dropdown-menu-section-list menu-pe-col">
<div class="hand pe-type-id-446" onclick="peAction('http://www.valuecityfurniture.com/search/urban-industrial?onsale=true','_top','1','/shared/services/pageelement/putcustomerintent.ashx')"><img alt="50% off urban industrial dining collection | get our urban industrial dining collection--crafted from modern-vintage and eco-centric styles--at our lowest prices ever | shop urban industrial dining collection" class="ImageLink-spacer data-img img-responsive" data-lrg="http://content.valuecityfurniture.com/ProductImages/0/593695.png" data-med="http://content.valuecityfurniture.com/ProductImages/0/593695.png" data-sml="http://content.valuecityfurniture.com/ProductImages/0/593696.png" src="http://content.valuecityfurniture.com/ProductImages/0/593695.png" title="50% off urban industrial dining collection | get our urban industrial dining collection--crafted from modern-vintage and eco-centric styles--at our lowest prices ever | shop urban industrial dining collection">
</div>                                                </div>
                                     </div>
                                     <div class="asi-dropdown-save-footer">
<div></div>                                     </div>
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
                        <img src="../../Content/ValueCityMix/SVG/Close_Icon.svg" alt="close-icon">
                    </div>
                </div>
            </li>
            <li class="asi-search-open">
                <div id="asi-search-icon">
                    <div class="asi-icon">
                        <img src="../../Content/ValueCityMix/svg/Search_Icon.svg" alt="search-icon">
                    </div>
                </div>
            </li>
            <li class="last">
                

<!--Cart Icon-->
<div class="asi-icon" id="asi-cart-icon" data-toggle="dropdown" data-bind="click: populateShoppingCartForDropDown">
    <img src="../../Content/ValueCityMix/svg/Cart_Icon.svg" alt="shopping-cart-icon">
</div>
<div><span class="asi-cart-number hide" id="header-right-features-sc-count" data-bind="text: CartTotalCount"></span></div>

<!--Cart Dropdown-->
<div class="asi-cart-dropdown" id="header-right-features-sc-dropdown" style="top: 50px;">
    <div class="header-right-features-sc-info" data-bind="visible: LoadingCart" style="display: none;">
        <img src="/Img/load.gif" align="middle">
        <span class="please-wait-text">Loading your cart. Please wait...</span>
    </div>
    <div class="menu-content" data-bind="visible: LoadingCart() == false">
        <!-- ko if: ShoppingCartItemsArray().length != 0 --><!-- /ko -->
        <!-- ko if: ShoppingCartItemsArray().length == 0 -->
        <div class="header-right-features-sc-empty" data-bind="visible: LoadingCart() == false">
            <span>Your cart is empty.</span>
        </div>
        <!-- /ko -->
        <div class="asi-cart-decisions" id="header-right-features-sc-buttons">
            <button class="asi-mix-button white" data-bind="click: function(data, event) { gotoShoppingCart('https://www.valuecityfurniture.com/shoppingcart', data, event) }">View Cart</button>
        </div>
    </div>
</div>



<!--<div id="asi-cart-icon">
    <div class="asi-icon">
        <img src="/Content/ValueCityMix/svg/Cart_Icon.svg" alt="" />
    </div>
    <div class="asi-cart-number">2</div>
</div>

<div class="asi-cart-dropdown">
    <div class="menu-content">
        <!-- <div class="asi-cart-item asi-cart-items-status">
            <p>In your home as early as: <strong>Monday, February 13</strong></p>
        </div> -->
        <!--<div class="asi-cart-item">
            <div class="asi-cart-image-centerer">
                <img src="/Content/ValueCityMix/images/shortline-lift-coffeetable.jpg" />
            </div>
            <div class="asi-cart-description">Shortline Lift-Top Cocktail Table - Distressed Pine <br /><span class="asi-price">$399.99</span></div>
        </div>
        <div class="asi-cart-item">
            <div class="asi-cart-image-centerer">
                <img src="/Content/ValueCityMix/images/avalon-accent-chair.jpg" />
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
        <img id="asi-search-icon" class="asi-icon" src="/Content/ValueCityMix/svg/Search_Icon.svg">
        <input class="asi-search-input" id="search-textbox" placeholder="Sectionals, modern, coffee tables, etc." autocomplete="off" type="search">
        <button id="search-submit-button" class="asi-search-enter-btn asi-mix-button white">Search</button>
    </div>
    
</div>




</nav>





<div id="asi-mobile-header">
    <div class="asi-mobile-header-logo-container">
        <a href="/home"><img class="asi-mobile-header-logo" src="/Content/ValueCityMix/svg/Logo_Mobile.svg" alt="VCF"></a>
    </div>
    <button class="asi-mobile-header-location-pin" onclick="location.href='/store-locator'">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 8.5 12.9" style="enable-background:new 0 0 8.5 12.9;" xml:space="preserve">
        <g>
            <polygon id="path-1" class="st0" points="1,6.4 1,1.5 7.5,1.5 7.5,6.4 7.5,11.4 1,11.4    "></polygon>
        </g>
        <g id="Symbols">
        <g id="Nav_850px" transform="translate(-580.000000, -11.000000)">
        <g id="Pin_Icon" transform="translate(580.000000, 11.000000)">
        <g id="Page-1">
        <g id="Clip-2">
        </g>
        <path id="Fill-1" class="st1" d="M4.3,6.5c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7S6,3.9,6,4.8S5.2,6.5,4.3,6.5 M4.3,1.5
              C2.5,1.5,1,3,1,4.8C1,5.4,1.2,6,1.4,6.4s2.8,5,2.8,5s2.6-4.6,2.8-5s0.4-1,0.4-1.6C7.5,3,6.1,1.5,4.3,1.5"></path>
          </g>
        </g>
      </g>
    </g>
    </svg>
    </button>
    <a href="/shoppingcart" class="asi-mobile-header-cart-icon-container">
        <div class="asi-mobile-header-cart-icon"><img src="/Content/ValueCityMix/svg/Cart_Icon.svg" alt=""></div><div class="asi-mobile-header-cart-number" id="header-right-features-sc-count" data-bind="text: CartTotalCount"></div>
    </a>
</div>
<nav id="mobile-navigation">
    <button id="asi-mobile-nav-toggle" class="hamburger hamburger--collapse au-mobile-hamburger-button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
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
            </li>
        </ul>
    </div>
</nav>
</header>
</div>
<!-- END :: HEADER CONTAINER 2 !-->
<div class="clear"></div>
    <section class="page-body">
        <div id="page-content" class="container page-content"> 