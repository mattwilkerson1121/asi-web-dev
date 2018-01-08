<?php include_once('asiSiteHeader.php'); ?>
<?php include_once('asiSiteTopNavigation.php'); ?>
    
<!-- VUE JS SCRIPT !-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>

<div id="custom-page-wrapper">
    <div class="custom-page-maxwidth" id="asi-page-header">
        <h1 class="text-capitalize">{{pageheadertext}}</h1>
    </div> 
    <div class="asi-container-fluid container-fluid" style="position:relative;width:100%;padding:0;margin:0;">
        <div class="asi-hero-module" id="asi-hero-v151" style="background-image:url(https://asf.scene7.com/is/image/ASF/CM_1840169?qlt=60,1&wid=1180&hei=850&scl=3&op_sharpen=1);padding:5rem 0;">
            <div class="custom-page-maxwidth" style="margin:0 auto;">
                <div class="row asi-row">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-10 col-xs-offset-1" style="background-color:#ffffff;padding:0;margin:0;">
                        <div id="sweepstakes-hero-message" style="width:80%;min-height:300px;padding:35px 0px;margin:0 auto;text-align:center;">
                            <h2 class="display-2 asi-display-2 text-center asi-black text-uppercase">big difference</h2>
                            <h3 class="display-4 asi-display-4 text-center asi-black text-uppercase" style="margin-top:0.75rem;font-size:2.75rem !important;">
                                SPRUCE UP YOUR SPACE<br>WITH THE MONEY YOU<br>SAVE… OR WIN.</h3>
                            <div class="asi-divider">
                                <div class="asi-divider-line asi-red" style="margin:2.25rem auto !important;text-align:center !important;"></div>
                            </div>
                            <p class="text-center" style="font-size:1.167rem;line-height:2rem;letter-spacing:0.5px;margin:0 auto;max-width:100%;padding:0;">
                                Ready for a room redo?
                                <br>
                                Enter our BIG DIFFERENCE SWEEPSTAKES
                                <br>
                                for a chance 
                                to win a $5,000 gift card to fill your space with 
                                the designer looks you want (at low prices you’ll love). 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END :: ASI HERO MODULE !-->
    </div>
    <div class="custom-page-maxwidth first">
        <div class="asi-signup-v3" id="asi-signup-v3-banner">
            <span>
                <div class="asi-lead-banner text-center text-uppercase asi-black">
                    <span>{{bannertext}}</span>
                </div>
                <div class="asi-bg-line white"></div>
            </span>
            <span class="headline text-center text-uppercase asi-white">{{headlinetext}}</span>
            <p class="lead asi-lead text-center asi-white">{{bodytext}}</p>
            <div class="asi-form">
                <form action="" class="form-inline sweepstakes-form" id="big-difference-sweepstakes-form" name="big-difference-sweepstakes-form" type="POST">
                    <div class="success asi-form-success"></div>
                    <div class="error asi-form-error"></div>
                    <div class="form-group">
                        <input type="email" class="form-control sweepstakes-input" id="email-address-input" placeholder="Enter Your Email Address" name="EMAIL_ADDRESS_">
                        <input type="hidden" name="_RequiredFields_" value="EMAIL_ADDRESS_">
                        <input type="hidden" name="_EMailFields_" value="EMAIL_ADDRESS_">
                        <input type="hidden" name="_ri_" value="">
                        <input type="hidden" name="EMAIL_SOURCE" value="Big Difference Sweepstakes">
                        <input type="hidden" name="CREATED_SOURCE_IP_" id="source-ip-input" value="">
                        <input type="hidden" name="EMAIL_PERMISSION_REASON_" value="Sweepstakes Sign Up">
                        <input type="hidden" name="EMAIL_PERMISSION_STATUS_" value="I">
                        <input type="hidden" name="CUSTOMER_INTENT" id="customer-intent" value="">
                    </div>
                    <button type="submit" role="button" class="asi-mix-button white">{{asiformbtn}}</button>
                </form>
            </div>
            <span class="asi-flat-link text-center text-uppercase asi-white">{{linktext}} <i class="fa fa-angle-right"></i></span>
        </div>
    </div>
    <div class="lt-gray-bg asi-container-fluid" style="background:#f0f0f1;">
        <div class="custom-page-maxwidth asi-bd-featured">
            <div class="asi-bd-content" id="asi-bd-block-single--1">
                <div class="col-md-6 asi-bd-left-col asi-bdr-l">
                    <h3 class="display-1 asi-display-1 asi-gray text-center text-uppercase">{{ name }}</h3>
                    <div class="asi-divider">
                        <div class="asi-divider-line" style="background-color:#EE3D42;width:45px;margin:1.5rem auto !important;height:2px;"></div>
                    </div>
                    <ul class="text-center center-block list-unstyled asi-bd-bullets">
                        <li class="text-center text-uppercase" v-for="bullet in bdbullets"><img class="asi-bd-check" src="https://asf.scene7.com/is/image/ASF/asi-bd-checkmark-1?fmt=png-alpha" alt="check-mark">{{ bullet.text }}</li>
                    </ul>
                    <div class="asi-bd-color-options hidden-sm hidden-xs">
                        <p class="text-center text-capitalize" style="font-size:1em;">available colors:</p>
                        <div class="asi-swatches-sm text-center">
                            <ol class="text-center center-block list-unstyled list-inline">
                                <li class="text-center text-uppercase" v-for="value in swatches"><img class="img-circle" v-bind:src="value" width="24" height="24"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="asi-bd-link text-center hidden-sm hidden-xs"><a class="asi-bd-link-text text-uppercase" v-bind:href="url">{{ cta }}</a></div>
                </div>
                <div class="col-md-6 asi-bd-left-col asi-brd-r">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="text-center">
                        <div class="asi-bd-price-header">
                            <p class="text-center text-uppercase asi-white asi-black-bg">THEIR PRICE<sup>*</sup></p>
                        </div>
                        <div class="asi-bd-pieceType"><span class="text-center text-capitalize" style="display:block;">{{ piecetype }}</span></div>
                        <div class="asi-bd-price"><span class="asi-bd-comp-price text-center asi-black" v-model="compprice"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ compprice | currency }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="text-center">
                        <div class="asi-bd-price-header">
                            <p class="text-center text-uppercase asi-white asi-brand-red-bg">OUR PRICE</p>
                        </div>
                        <div class="asi-bd-pieceType"><span class="text-center text-capitalize" style="display:block;">{{ piecetype }}</span></div>
                        <div class="asi-bd-price"><span class="asi-bd-our-price text-center asi-brand-red" v-model="asiprice"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ asiprice | currency }}</span>
                        </div>
                    </div>
                </div>
                <div class="clear clearfix"></div>
                <p class="asi-black text-uppercase text-center asi-bd-lead">the big difference</p>
                <p class="asi-bd-savings text-uppercase text-center asi-brand-red">you save <span class="asi-bd-save-price" v-model="saveprice" style="line-height:99%;"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ saveprice | currency }}</span>
                </p>
                <div class="asi-product-img"><img class="img-responsive data-img img-data" v-bind:src="imagepath"></div>
                <div class="asi-bd-color-options hidden-md hidden-lg" style="margin-bottom:25px !important;background:transparent;background-color:#f0f0f1;">
                    <p class="text-center text-capitalize" style="font-size:0.9em;">available colors:</p>
                    <div class="asi-swatches-sm text-center">
                        <ol class="text-center center-block list-unstyled list-inline">
                            <li class="text-center text-uppercase" v-for="value in swatches"><img class="img-circle" v-bind:src="value" width="24" height="24"></li>
                        </ol>
                    </div>
                </div>
                <div class="asi-bd-link text-center hidden-md hidden-lg"><a class="asi-bd-link-text text-uppercase" v-bind:href="url">{{ cta }}</a></div>
              </div>
              <div class="clear clearfix"></div>
            </div>
        </div>
        <div class="custom-page-maxwidth asi-bd-featured">
            <div class="asi-bd-content" id="asi-bd-block-single--2">
                <div class="col-md-6 asi-bd-left-col asi-bdr-l">
                    <h3 class="display-1 asi-display-1 asi-gray text-center text-uppercase">{{ name }}</h3>
                    <div class="asi-divider">
                        <div class="asi-divider-line" style="background-color:#EE3D42;width:45px;margin:1.5rem auto !important;height:2px;"></div>
                    </div>
                    <ul class="text-center center-block list-unstyled asi-bd-bullets">
                        <li class="text-center text-uppercase" v-for="bullet in bdbullets"><img class="asi-bd-check" src="https://asf.scene7.com/is/image/ASF/asi-bd-checkmark-1?fmt=png-alpha" alt="check-mark">{{ bullet.text }}</li>
                    </ul>
                    <div class="asi-bd-color-options hidden-sm hidden-xs">
                        <p class="text-center text-capitalize" style="font-size:1em;">available colors:</p>
                        <div class="asi-swatches-sm text-center">
                            <ol class="text-center center-block list-unstyled list-inline">
                                <li class="text-center text-uppercase" v-for="value in swatches"><img class="img-circle" v-bind:src="value" width="24" height="24"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="asi-bd-link text-center hidden-sm hidden-xs"><a class="asi-bd-link-text text-uppercase" v-bind:href="url">{{ cta }}</a></div>
                </div>
                <div class="col-md-6 asi-bd-left-col asi-brd-r">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="text-center">
                        <div class="asi-bd-price-header">
                            <p class="text-center text-uppercase asi-white asi-black-bg">THEIR PRICE<sup>*</sup></p>
                        </div>
                        <div class="asi-bd-pieceType"><span class="text-center text-capitalize" style="display:block;">{{ piecetype }}</span></div>
                        <div class="asi-bd-price"><span class="asi-bd-comp-price text-center asi-black" v-model="compprice"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ compprice | currency }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="text-center">
                        <div class="asi-bd-price-header">
                            <p class="text-center text-uppercase asi-white asi-brand-red-bg">OUR PRICE</p>
                        </div>
                        <div class="asi-bd-pieceType"><span class="text-center text-capitalize" style="display:block;">{{ piecetype }}</span></div>
                        <div class="asi-bd-price"><span class="asi-bd-our-price text-center asi-brand-red" v-model="asiprice"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ asiprice | currency }}</span>
                        </div>
                    </div>
                </div>
                <div class="clear clearfix"></div>
                <p class="asi-black text-uppercase text-center asi-bd-lead">the big difference</p>
                <p class="asi-bd-savings text-uppercase text-center asi-brand-red">you save <span class="asi-bd-save-price" v-model="saveprice" style="line-height:99%;"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ saveprice | currency }}</span>
                </p>
                <div class="asi-product-img"><img class="img-responsive data-img img-data img-60" v-bind:src="imagepath"></div>
                <div class="asi-bd-color-options hidden-md hidden-lg" style="margin-bottom:25px !important;background:transparent;background-color:#f0f0f1;">
                    <p class="text-center text-capitalize" style="font-size:0.9em;">available colors:</p>
                    <div class="asi-swatches-sm text-center">
                        <ol class="text-center center-block list-unstyled list-inline">
                            <li class="text-center text-uppercase" v-for="value in swatches"><img class="img-circle" v-bind:src="value" width="24" height="24"></li>
                        </ol>
                    </div>
                </div>
                <div class="asi-bd-link text-center hidden-md hidden-lg"><a class="asi-bd-link-text text-uppercase" v-bind:href="url">{{ cta }}</a></div>
              </div>
              <div class="clear clearfix"></div>
            </div>
        </div>
        <div class="custom-page-maxwidth asi-bd-featured">
            <div class="asi-bd-content" id="asi-bd-block-single--3">
                <div class="col-md-6 asi-bd-left-col asi-bdr-l">
                    <h3 class="display-1 asi-display-1 asi-gray text-center text-uppercase">{{ name }}</h3>
                    <div class="asi-divider">
                        <div class="asi-divider-line" style="background-color:#EE3D42;width:45px;margin:1.5rem auto !important;height:2px;"></div>
                    </div>
                    <ul class="text-center center-block list-unstyled asi-bd-bullets">
                        <li class="text-center text-uppercase" v-for="bullet in bdbullets"><img class="asi-bd-check" src="https://asf.scene7.com/is/image/ASF/asi-bd-checkmark-1?fmt=png-alpha" alt="check-mark">{{ bullet.text }}</li>
                    </ul>
                    <div class="asi-bd-color-options hidden-sm hidden-xs">
                        <p class="text-center text-capitalize" style="font-size:1em;">available colors:</p>
                        <div class="asi-swatches-sm text-center">
                            <ol class="text-center center-block list-unstyled list-inline">
                                <li class="text-center text-uppercase" v-for="value in swatches"><img class="img-circle" v-bind:src="value" width="24" height="24"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="asi-bd-link text-center hidden-sm hidden-xs"><a class="asi-bd-link-text text-uppercase" v-bind:href="url">{{ cta }}</a></div>
                </div>
                <div class="col-md-6 asi-bd-left-col asi-brd-r">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="text-center">
                        <div class="asi-bd-price-header">
                            <p class="text-center text-uppercase asi-white asi-black-bg">THEIR PRICE<sup>*</sup></p>
                        </div>
                        <div class="asi-bd-pieceType"><span class="text-center text-capitalize" style="display:block;">{{ piecetype }}</span></div>
                        <div class="asi-bd-price"><span class="asi-bd-comp-price text-center asi-black" v-model="compprice"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ compprice | currency }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="text-center">
                        <div class="asi-bd-price-header">
                            <p class="text-center text-uppercase asi-white asi-brand-red-bg">OUR PRICE</p>
                        </div>
                        <div class="asi-bd-pieceType"><span class="text-center text-capitalize" style="display:block;">{{ piecetype }}</span></div>
                        <div class="asi-bd-price"><span class="asi-bd-our-price text-center asi-brand-red" v-model="asiprice"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ asiprice | currency }}</span>
                        </div>
                    </div>
                </div>
                <div class="clear clearfix"></div>
                <p class="asi-black text-uppercase text-center asi-bd-lead">the big difference</p>
                <p class="asi-bd-savings text-uppercase text-center asi-brand-red">you save <span class="asi-bd-save-price" v-model="saveprice" style="line-height:99%;"><span style="font-size:0.8125em;vertical-align:top;">$</span>{{ saveprice | currency }}</span>
                </p>
                <div class="asi-product-img"><img class="img-responsive data-img img-data" v-bind:src="imagepath"></div>
                <div class="asi-bd-color-options hidden-md hidden-lg" style="margin-bottom:25px !important;background:transparent;background-color:#f0f0f1;">
                    <p class="text-center text-capitalize" style="font-size:0.9em;">available colors:</p>
                    <div class="asi-swatches-sm text-center">
                        <ol class="text-center center-block list-unstyled list-inline">
                            <li class="text-center text-uppercase" v-for="value in swatches"><img class="img-circle" v-bind:src="value" width="24" height="24"></li>
                        </ol>
                    </div>
                </div>
                <div class="asi-bd-link text-center hidden-md hidden-lg"><a class="asi-bd-link-text text-uppercase" v-bind:href="url">{{ cta }}</a></div>
              </div>
              <div class="clear clearfix"></div>
            </div>
        </div>
    </div>
    <div class="custom-page-maxwidth">
        <p id="asi-bd-disclaimer" class="asi-disclaimer text-center">
        *Our “Compare at”, “Save” and “Their Price” prices reflect the current selling price of comparable merchandise sold by others in the ASF/VCF trade area, which is a national trade area that includes online retailers. As a result, advertised “Compare at”, “Save” and “Their Price” prices may or may not necessarily be the prices at which such merchandise is sold by traditional retail outlets in the local area. These prices also do not take into account shipping, handling, delivery, warranties and other fees and charges typically applied to furniture sales by local and online retailers.
        </p>
    </div>
</div>
<style>
    #asi-page-header {
        margin-top:1.250rem;
    }
    .custom-page-maxwidth.first{
        margin-top:2.083rem;
        background:#f0f0f1;
        padding:1.500rem 5rem;
    }
    .asi-signup-v3{
        background:#525050;
        padding:1.667rem; /* 20px */
    }
    .asi-signup-v3 span {
        display:block;
        position:relative;
    }
    .asi-signup-v3 > span:nth-child(1) { 
        width:100%;
        max-width:540px;
        text-align:center;
        padding:0;
        margin:0 auto;
    }
    div.asi-bg-line{
        position:absolute;
        z-index:1;
        top:50%;
        bottom:50%;
        width:100%;
        height:2px;
        margin:0;
        padding:0;
        text-align:center;
    }
    div.asi-bg-line.white {
        background-color:#ffffff;
    }
    .asi-signup-v3 div.asi-lead-banner {
        position:relative;
        z-index:2;
        background:#ffffff;
        margin:.5rem auto 2rem auto;
        padding:0.667rem 1.250rem; /* 8px 15px */
        max-width: 26.667rem; /* 320px */
    }
    .asi-signup-v3 div.asi-lead-banner > span {
        font-family:"ProximaNova-Bold",sans-serif;
        letter-spacing:2.5px;
        font-size:1.667rem;
        line-height:1;
        vertical-align: middle;
        margin-top:2px;
    }
    .asi-signup-v3 > span.headline {
        font-size:3rem; /* 36px */
        letter-spacing:2px;
        font-family:"ProximaNova-Light",sans-serif;
        line-height:3.333rem; /* 40px */
    }
    .asi-signup-v3 > p.asi-lead {
        font-size:1.667rem;
        line-height: 2.083rem; /* 28px */
        letter-spacing:0.25px;
        margin:0.833rem auto;
        max-width:66.667rem; /* 800px */
    }
    .asi-signup-v3 > .asi-form {
        width:58.750rem;
        max-width:705px;
        margin:1.250rem auto;
        text-align:center;
        min-height:47.85px;
        position:relative;
        background:transparent;
        padding:0 0;
    }
        .asi-signup-v3 .form-control.sweepstakes-input{
            /* #email-address-input */
            width:38.333rem;
            height:100%;
            background:#ffffff;
            padding:1rem 0.667rem;
            margin:0 0.833rem 0 0;
            font-family:"ProximaNova-Semibold", sans-serif;
            color:#181818;
            letter-spacing:1px;
            font-size:1.167rem;
            border:2px solid #c2c2c2 !important;
        }
        .form-control::-webkit-input-placeholder{
            color: #a1a3a4 !important;
            opacity:0.8;
        }
        .form-control::-moz-placeholder{
            color: #a1a3a4 !important;
            opacity:0.8;
        }
        .form-control:-ms-input-placeholder{
            color: #a1a3a4 !important;
            opacity:0.8;
        }
        .form-control:-moz-placeholder{
          color: #a1a3a4 !important;
          opacity:0.8;
        }

    .asi-signup-v3 button.asi-mix-button{
        border:none;
        font-size:1.333rem;
        padding:1rem 3.333rem;
        letter-spacing:2.5px;
    }
    .asi-signup-v3 > .asi-flat-link {
        padding:8px;
        margin:1.500rem auto 0;
        font-size:1.333rem;
        line-height:2.083rem;
        letter-spacing:1.5px;
        text-decoration:none;
        cursor:pointer;
    }
    .asi-signup-v3 > .asi-flat-link:hover,
    .asi-signup-v3 > .asi-flat-link:focus {
        text-decoration:underline;
    }
</style>
<script type="text/javascript">
if(navigator.userAgent.match(/iPod/i)) {
    $('#customer-intent').val('tablet');
    // $('#customer-intent').val(navigator.userAgent);
}
$.getJSON('https://api.ipify.org?format=json', function(data){
    $('#source-ip-input').val(data.ip)
})
var asiPageHeader = new Vue({
    el: '#asi-page-header h1',
    data:{
        pageheadertext: 'Big Difference Sweepstakes'
    }
})
var asiHeroV151 = new Vue({
    el: '#asi-hero-v151',
    data:{}
})
var asiSignUpBanner = new Vue({
    el: '#asi-signup-v3-banner',
    data:{
        bannertext: 'you could win',
        headlinetext: 'enter for a chance to win a $5000 gift card',
        bodytext: 'Sign-up to receive our emails to be entered for a chance to win as a bonus, you’ll find out about the latest deals, early previews, and sneak peeks.',
        asiformbtn: 'SUBMIT',
        linktext: 'contest rules'
    }
})
Vue.filter('currency', function (value) {
    var newvalue = value
    return parseFloat(newvalue).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")
})
var asiBdItem1Block = new Vue({
    el: '#asi-bd-block-single--1',
    data:{
        name: 'moda',
        bdbullets: [
            { 
                text: 'extra deep seating'
            },
            { 
                text: 'rich velvet fabric'
            },
            { 
                text: 'chrome legs'
            }
        ],
        swatches:
        {
            swatch1: 'https://content.valuecityfurniture.com/ProductImages/0/507354.jpg?impolicy=product-30',
            swatch2: 'https://content.valuecityfurniture.com/ProductImages/0/507413.jpg?impolicy=product-30',
            swatch3: 'https://content.valuecityfurniture.com/ProductImages/0/507483.jpg?impolicy=product-30',
            swatch4: 'https://content.valuecityfurniture.com/ProductImages/0/507573.jpg?impolicy=product-30',
            swatch5: 'https://content.valuecityfurniture.com/ProductImages/0/507626.jpg?impolicy=product-30'
        },
        cta: 'shop the collection',
        url: '/product/collection/living/collections/moda-collection-blue/2026670',
        piecetype: '2-piece sofa',
        compprice: '2699',
        asiprice: '1199.98',
        imagepath: 'https://asf.scene7.com/is/image/ASF/D_Moda?fmt=png-alpha'   
    },
    computed:{
        saveprice: function(){
            var totalSavings = this.compprice - this.asiprice;
            return totalSavings.toFixed(2);
        }
    }
})
var asiBdItem1Block = new Vue({
    el: '#asi-bd-block-single--2',
    data:{
        name: 'diana',
        bdbullets: [
            { 
                text: 'rolled-top design'
            },
            { 
                text: 'hardwood legs'
            },
            { 
                text: 'nailhead accents'
            }
        ],
        swatches:
        {
            swatch1: 'https://content.valuecityfurniture.com/ProductImages/0/518649.jpg?impolicy=product-30',
            swatch2: 'https://content.valuecityfurniture.com/ProductImages/0/514874.jpg?impolicy=product-30',
            swatch3: 'https://content.valuecityfurniture.com/ProductImages/0/514898.jpg?impolicy=product-30',
            swatch4: 'https://content.valuecityfurniture.com/ProductImages/0/514892.jpg?impolicy=product-30',
            swatch5: 'https://content.valuecityfurniture.com/ProductImages/0/514883.jpg?impolicy=product-30',
            swatch6: 'https://asf.scene7.com/is/image/ASF/asi-bd-swatches-more?fmt=png-alpha&wid=30&hei=30'
        },
        cta: 'shop the collection',
        url: '/product/collection/bedroom/collections/diana-collection/2038524',
        piecetype: 'queen bed',
        compprice: '4475',
        asiprice: '599.99',
        imagepath: 'https://asf.scene7.com/is/image/ASF/D_Diana?fmt=png-alpha'   
    },
    computed:{
        saveprice: function(){
            var totalSavings = this.compprice - this.asiprice;
            return totalSavings.toFixed(2);
        }
    }
})
var asiBdItem1Block = new Vue({
    el: '#asi-bd-block-single--3',
    data:{
        name: 'malibu',
        bdbullets: [
            { 
                text: 'multiple finish options'
            },
            { 
                text: 'oak veneer construction'
            },
            { 
                text: 'wood trestle-style base'
            }
        ],
        swatches:
        {
            swatch1: 'https://content.valuecityfurniture.com/ProductImages/0/514760.jpg?impolicy=product-30',
            swatch2: 'https://content.valuecityfurniture.com/ProductImages/0/514275.jpg?impolicy=product-30'
        },
        cta: 'shop the collection',
        url: '/product/item/dining/tables/malibu-rectangular-wood-top-table-umber/2035130/2005966',
        piecetype: '2-piece sofa',
        compprice: '2795',
        asiprice: '999.99',
        imagepath: 'https://asf.scene7.com/is/image/ASF/D_Malibu?fmt=png-alpha&op_sharpen=1'   
    },
    computed:{
        saveprice: function(){
            var totalSavings = this.compprice - this.asiprice;
            return totalSavings.toFixed(2);
        }
    }
})
</script>
<script type="text/javascript">
$(function(){
    var asiTheme = theme;
    theme = 'ValueCityMix';
    if(asiTheme == 'AmericanSignatureMix'){
        $('span.asi-brand-name').text('American Signature');
        $("input[name='_ri_']").val("X0Gzc2X%3DYQpglLjHJlYQGjf0zgzfe3NP5dj6S8rH42zbIhjNDujPsTmVwjpnpgHlpgneHmgJoXX0Gzc2X%3DYQpglLjHJlYQGpWNcuW8sJvvGUwwzg3ezapsrB95wgUMzdJ");
        $("#Black_Friday_Early_Ad").attr("action","https://my.americansignaturefurniture.com/pub/rf");
    }
    if(asiTheme != 'AmericanSignatureMix'){
        $('span.asi-brand-name').text('Value City');
        $("input[name='_ri_']").val("X0Gzc2X%3DYQpglLjHJlYQGhr2osfIcITpmLtiySeEfJH7OYzazaSzfrWVwjpnpgHlpgneHmgJoXX0Gzc2X%3DYQpglLjHJlYQGuJOhjsNe84zer2ezdIsnbeMfjNnj5h2Ck");
        $("#Black_Friday_Early_Ad").attr("action","https://my.valuecityfurniture.com/pub/rf");
    }

    var validForm = false;

    $('#big-difference-sweepstakes-form').submit(function(e){
        if (!validForm) {
            e.preventDefault();
            var userEmailInput = $('#EMAIL_ADDRESS_').val();

            ga('send', {hitType: 'event',  eventCategory: 'submit',  eventAction:'big-difference-sweepstakes-entry',  eventLabel:'/big-difference-signup'});

            if(userEmailInput.indexOf('@') === -1 ){  
                alert('Please Enter a Valid Email Address');  
                return false;
            }
            else{
                validForm = true;
                $('.asi-form-success').html('Thanks, your entry was received');
                setTimeout(function() {
                    $('#big-difference-sweepstakes-form').submit();
                }, 3000);
            }
        }
    });
});
</script>

<style type="text/css">
    /* START ASI CATEGORY PAGE STYLES */
    h3.asi-display-1{ font-size:54px !important; }
    .asi-section-content h2.asi-cat-section-title {font-size:34px !important;}
    .asi-container-1180{
        position:relative !important;
        width:100% !important;
        padding:0 0 1em !important;
        margin:0 auto !important;
        max-width:1180px !important;
        height:100% !important;
        font-size:16px;
    }
    /* START: ASI FLEXBOX BANNER CONTAINER */
    .asi-flex-banner-container{
      display: flex;
      flex-wrap: wrap; 
      -webkit-display: flex;
      -webkit-flex-wrap: wrap;
      padding:2em 1em;
      margin:0 0;
    }
        .asi-flex-col{
            -webkit-flex-direction: column;
            flex-direction:column;
        }
        .asi-flex-center{
            align-items: center;
            align-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-align-content: center;
            -webkit-justify-content: center;
        }
            .asi-flex-col .asi-flex-item{
                align-self:auto;
                flex-basis:auto;
                flex-grow:0;
                flex-shrink:1;
                -webkit-align-self:auto;
                -webkit-flex-basis:auto;
                -webkit-flex-grow:0;
                -webkit-flex-shrink:1;
            }
            .asi-flex-banner-container .asi-flex-content{
                padding:10px;
                text-align:center;
                width:100%;
                min-height:200px;
                background:none;
            }
    /* END: ASI FLEXBOX BANNER CONTAINER */
    /* START: ASI PADDING TOP & BOTTOM OVERRIDE */
    .asi-ptb-1{ 
        padding-top:1em !important; 
        padding-bottom:1em !important;
    }
    .asi-ptb-2{ 
        padding-top:2em !important; 
        padding-bottom:2em !important;
    }
    .asi-ptb-3{ 
        padding-top:3em !important; 
        padding-bottom:3em !important;
    }
    .asi-ptb-4{ 
        padding-top:4em !important; 
        padding-bottom:4em !important;
    }
    .asi-ptb-5{ 
        padding-top:5em !important; 
        padding-bottom:5em !important;
    }
    .asi-ptb-6{ 
        padding-top:6em !important; 
        padding-bottom:6em !important;
    }
    .asi-ptb-7{ 
        padding-top:7em !important; 
        padding-bottom:7.5em !important;
    }
    /* END: ASI PADDING TOP & BOTTOM OVERRIDE */

    .asi-hero-module {
        padding:0;
        margin:0;
        max-width:100%;
        background-position: center center;
        background-size:cover;
        background-color:#ffffff;
        font-size:16px;
    }
    [data-asi-category-hero="living-room"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/CM_1840169?qlt=60,1&wid=1180&hei=850&scl=3&op_sharpen=1");
    }
    /* ASI HERO-C-V3 STYLES */
    #asi-hp-hero-c-v3{padding:3em 1em !important;}
        .asi-gradient{
            position: absolute;
            width: 100%;
            height: 100%;
            padding:0 0;
            margin:0 0;
            z-index: 0;
        }
            .asi-gradient-overlay-dark{
                background-color: rgba(0, 0, 0, 0.4);
            }

        #asi-hp-hero-c-v3 .asi-content-body{
             padding:2em 0 2.5em !important;
        }

        #asi-hp-hero-c-v3 p.asi-lead{
            letter-spacing:1px !important;
            font-family:'ProximaNova-Regular',sans-serif;
            font-weight:400;
            font-size:1.125em !important;
        }
        #asi-hp-hero-c-v3 .asi-content-button,
        .asi-content-button{ 
            padding:1em 0 1em;
            margin:0 auto;
            text-align:center;
        }
        #asi-hp-hero-c-v3 .asi-content-button button.asi-mix-button,
        .asi-content-button button.asi-mix-button{
            border:none !important;
            font-size:14px;
            padding:12px 40px !important;

        }
        /* START: GLOBAL CONTENT STYLES */
        .asi-gray,
        h1.asi-gray,
        h2.asi-gray,
        h3.asi-gray{
            color:#414141;
        }
        .asi-disclaimer,
        p.asi-disclaimer{
            position:relative;
            margin:0 auto 0 !important;
            padding:1.250rem !important; /* 15px */
            font-size:1rem;
            color:#525050;
            font-family:'ProximaNova-Regular', 'Roboto', sans-serif;
            letter-spacing:1px;
            line-height:1.167rem;
            text-align:center;
            border:none !important;
            border-top:none !important;
            border-bottom:none !important;
        }
        [data-asi-banner-content="free-shipping"]{
            background-image:url('https://asf.scene7.com/is/image/ASF/asi-banner-free-shipping-bg-m.jpg');
            background-size:cover;
            background-position: top right;
        }
            .asi-divider{ padding:2em 0; }
                .asi-divider-sm{padding:0.3em 0 !important;}
            .asi-divider-line{
                background:white;
                height:2px;
                max-width:45px;
                margin:0 auto;
            }

            .asi-lead-gray{ color:#525050 !important; }
            .asi-lead-expanded { letter-spacing:2.5px !important; }
            .asi-lead-semibold{font-family:'ProximaNova-Semibold', sans-serif !important;}

            .asi-red{background:#EE3d42 !important;}
            .asi-green{background:#78be20 !important;}
            
            .asi-content-button button.asi-green{
                background-color:#78be20 !important;
                color:#ffffff !important;
            }
            .asi-content-button button.asi-green:hover,
            .asi-content-button button.asi-green::hover{
                background-color:#62a50b !important;
                color:#ffffff !important;
            }
        .asi-z-depth{ box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);}
        .asi-z-depth-1{ box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);}
        .asi-z-depth-2 { box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);}
        .asi-z-depth-3 { box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);}
        .asi-z-depth-4 { box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);}
        .asi-z-depth-5 { box-shadow: 0 24px 48px rgba(0,0,0,0.30), 0 20px 14px rgba(0,0,0,0.22);}
        /* END :: GLOBAL CONTENT STYLES */
        @media (min-width: 320px) and (max-width:480px) {
            #asi-hp-hero-c-v3 .asi-content-button,
            .asi-content-button{ padding:1em 0 0.05em 0; }
            #asi-hp-hero-c-v3 .asi-content-button a button.asi-mix-button,
            .asi-content-button a button.asi-mix-button{
                border:none !important;
                font-size:12px;
                padding:8px 30px;
            }
            [data-asi-banner-content="free-shipping"]{
                background-image:url('https://asf.scene7.com/is/image/ASF/asi-banner-free-shipping-bg-m.jpg');
                background-size:cover;
                background-position: center center;
            }
            .asi-card {margin-bottom:3px;}
        }
        @media (min-width: 768px){
            [data-asi-banner-content="free-shipping"]{
                background-image:url('https://asf.scene7.com/is/image/ASF/asi-banner-free-shipping-bg-d.jpg');
                background-size:cover;
                background-position: center center;
                }
                .asi-section-content h2.asi-cat-section-title {font-size:45px !important;}
                h3.asi-display-1{ font-size:80px !important; }
            }
        }
        @media (min-width: 992px){
            #asi-hp-hero-c-v3 .asi-content-button button.asi-mix-button,
            .asi-content-button button.asi-mix-button{font-size:16px !important;}
            .asi-card {margin-bottom:25px;}
            .asi-flex-banner-container .asi-flex-content{width:50%;}
             [data-asi-banner-content="free-shipping"]{
                background-image:url('https://asf.scene7.com/is/image/ASF/asi-banner-free-shipping-bg-d.jpg');
                background-size:cover;
                background-position: top center;
            }
            .asi-section-content h2.asi-cat-section-title {font-size:54px !important;}
            h3.asi-display-1{ font-size:104px !important; }
        }
        @media (min-width: 1200px){
            #asi-hp-hero-c-v3 .asi-content-button button.asi-mix-button,
            .asi-content-button button.asi-mix-button{font-size:16px !important;}
            #asi-hp-hero-c-v3{
                /*padding:3em 0 2em !important;*/
            }
            .asi-card {margin-bottom:30px;}
            .asi-flex-banner-container .asi-flex-content{width:50%;}
            [data-asi-banner-content="free-shipping"]{
                background-image:url('https://asf.scene7.com/is/image/ASF/asi-banner-free-shipping-bg-d.jpg');
                background-size:cover;
                background-position: top center;
            }
            .asi-section-content h2.asi-cat-section-title {font-size:60px !important;}
            h3.asi-display-1{ font-size:104px !important; }
        }
    @media and (max-width:768px){
        h2.asi-display-3,
        h2.display-3,
        h2.asi-cat-section-title{font-size:34px !important;}
    }
    /*** ASI STYLED CARD TILES ***/
    .asi-card-link .asi-card:hover{
        box-shadow: 0 10px 20px rgba(0,0,0,0.10), 0 6px 6px rgba(0,0,0,0.15);
    }
        .asi-card-link .asi-card:hover h3.asi-card-title-text{
            color:#EE3d42;
        }

    .asi-card .form-horizontal .form-group{ margin-left:inherit; margin-right:inherit}
    .asi-card { border-radius:0px; margin-bottom:5px; background-color:#fff; padding:0px 0px;}
    .asi-card-body { padding-left:16px; padding-right:16px; margin-top:16px; margin-bottom:16px; color:rgba(0, 0, 0, 0.84)}
    .asi-card-title { padding: 16px 16px 0 16px; margin-bottom:16px; border-bottom: 1px solid transparent; border-top-left-radius: 3px; border-top-right-radius: 3px;}

    .asi-card-title > .dropdown .dropdown-toggle { color: inherit;}
    .asi-card-title > .dropdown .dropdown-toggle { color: inherit;}
    .asi-card-title-text { margin-top: 0; margin-bottom: 0; color: inherit;}

    h3.asi-card-title-text{ font-size:1rem; font-weight:400; margin-bottom:1rem;font-family:"ProximaNova-Regular",sans-serif;color:#525050;}
    .asi-card-subtitle-text { line-height: 1.6;  margin-bottom: 0;  opacity: 0.54; font-size:14px;}
    .asi-card-footer{ padding:8px 16px; display:table; content:""; width:100%;}
    .asi-card-actions{ padding:8px 4px;}
    .asi-card-actions .btn{ margin-left:4px; margin-right:4px; margin-bottom:8px;}
    .asi-card-actions .btn:first-child{margin-left:12px;}
    .asi-card-actions .btn:last-child{margin-right:12px;}
    .asi-card-actions .btn.asi-btn-flat{ margin-left:4px; margin-right:4px; margin-bottom:0;}
    .asi-card-actions .btn{padding: 10px 8px; min-width:inherit;}
    .asi-card-actions .btn.asi-btn-fab{padding: 0;}

    /* Card Media Action */
    .asi-card-media-inline .asi-card-media{ margin-top:16px; padding-left:16px; padding-right:16px;}
    .asi-card-media-inline .asi-card-media h2.asi-card-title-text{ margin-top:4px;}
    .asi-card-footer-p16 { padding-left: 20px; padding-right: 20px;}
    .asi-card-footer-no-border { border-color: transparent; padding-top: 0;}
    .asi-card-list{ padding-top:8px; padding-bottom:8px; background-color:#fff;}

    /* Card inverse*/
    .asi-card-inverse{ background-color: #373a3c; color: #eceeef;}
    .asi-card-inverse .asi-card-body{color: rgba(255, 255, 255, 0.84);}


    .asi-heading-rule-text{
        font-family:'Proxima Nova Lt', sans-serif;
        font-weight:600;
    }
    /* ASI (THIS) CUSTOM PAGE STYLES */
    #custom-page-wrapper{
        font-size:16px !important;
        background-color:#ffffff;
    }
    #asi-category-hero{
        position:relative;
        display:-webkit-flex;
        display:flex;
        -webkit-flex-direction:row;
        flex-direction:row;
        -webkit-justify-content:center;
        justify-content:center;
        -webkit-align-items:center;
        align-items:center;
    }
    .asi-category-headline{ position:absolute;z-index:2;width:100%;margin:0 auto; }
    .asi-text-shadow-1{ text-shadow:1px 1px 5px #121212; }
    .asi-category-intro,
    .asi-category-intro p{
        padding:0 2em;
        font-family:'ProximaNova-Regular',sans-serif;
        font-weight:400;
        font-size:1.125em;
        letter-spacing:1.5px;
    }
    /* ASI BIG DIFFERENCE CONTENT STYLES */
    .asi-content-button{
        margin:0 auto;
        text-align:center;
    }
    .asi-global-banner,
    .pe-container { 
        /* HIDE UI ELEMENTS */
        /* GLOBAL TOP BANNER & CHAT WIDGET */
        display: none !important;
    }
        /* HIDE SPECIFIC CHAT UI ELEMENT */
        #pe-container-a5be8c40-4b0a-41f5-b56c-3b5b307961e0 {
            display: none !important;
        }
    
    
    
    .asi-big-difference-wrapper {
        font-size: 16px !important;
    }
    
    .lt-gray-bg {
        /* lt-gray hex code = #f0f0f1 */
        background-color: rgba(240, 240, 240, 100);
    }

    .custom-page-maxwidth.asi-bd-featured{
        padding:2.083rem 0.833rem 4rem;
        margin:2.083rem auto 1.250rem;
        border-bottom:2px solid #c2c2c2;
    }
        .asi-bd-featured:nth-child(3){
            border-bottom:none !important;
        }
    .asi-bd-intro p {
        font-family: 'ProximaNova-Regular', sans-serif;
        font-size: 18px;
        letter-spacing: 1px;
        line-height: 22px;
        margin: 0 auto;
        text-align: center;
        padding: 15px 15px;
        width: 80%;
    }
    
    .asi-bd-left-col{
        padding-top: 1.75em;
    }
    
    .asi-bd-left-col{
        padding-top: 0.5em;
    }
    ul.asi-bd-bullets{ padding-bottom:1em; }
    ul.asi-bd-bullets li {
        letter-spacing: 1.25px;
        padding: 0.475em;
    }
    
    .asi-bd-color-options {
        margin-top: 2.5em;
        margin-bottom: 4em;
    }
    
    .asi-swatches-sm img {
        max-width: 24px;
    }
    
    a.asi-bd-link-text {
        letter-spacing: 1.125px;
        color: #2f2f2f;
        font-family: 'ProximaNova-Semibold', sans-serif;
        font-size: 1.125em;
    }
    
    a.asi-bd-link-text:hover,
    a.asi-bd-link-text:focus {
        color: #EE3D42;
    }
    
    .asi-bd-price-header p {
        padding: 3px 1rem;
        font-size: 1em;
        font-family: 'ProximaNova-Semibold', sans-serif;
        letter-spacing: 2px;
        width: 96%;
        margin: 0 auto !important;
    }
    
    .asi-bd-pieceType {
        margin: 0.375em auto;
    }
    .asi-bd-price{
        font-family:'ProximaNova-Semibold',sans-serif;
        letter-spacing:1px;
        font-size:36px;
        line-height:36px;
    }
    p.asi-bd-savings {
        font-size: 1.75em;
        padding-top: 0;
        margin-top: 0;
        font-family: 'ProximaNova-Semibold', sans-serif;
        line-height: 90%;
        letter-spacing: 1.5px;
        margin-bottom: 0.75em;
    }
    
    img.asi-bd-check {
        margin-right: 0.45em;
        margin-top: -0.625em;
        padding: 0 0;
        width: 22px;
    }
    
    a.asi-bd-link-text:after {
        font-family: 'FontAwesome';
        content: '\f105';
        margin-left: 6px;
    }
    
    p.asi-bd-lead {
        margin-bottom: 0;
        padding-bottom: 0;
        margin-top: 1em;
        letter-spacing: 1.5px;
        font-family: 'ProximaNova-Semibold', sans-serif !important;
        font-size: 18px !important;
    }
    
    .asi-product-img {
        padding: 5px 10px !important;
        max-width: 100%;
        margin: 0 auto;
        text-align: center;
    }
    
    .asi-product-img img {
        margin: 0 auto !important;
        text-align: center !important;
    }
    
    img.img-30 {
        max-width: 30% !important;
    }
    
    img.img-50 {
        max-width: 50% !important;
    }
    img.img-60 {
        max-width: 60% !important;
        max-height: 50% !important;
    }
    
    img.img-70 {
        max-width: 70% !important;
    }
    
    .asi-bd-spacer {
        display: hidden;
    }

    .asi-bdr-l{border-right:1px solid #f0f0f0;}
    .asi-brd-r{border-left:1px solid #f0f0f0;}
    
    @media(max-width:768px) {
        .mobile-base-container {
            display: none !important;
        }
        .asi-bd-content {
            padding: 8px 0;
        }
        .asi-bd-left-col{
            padding-top: 0;
        }
        .asi-bd-left-col{
            padding-top: 1em;
        }
        .asi-bd-price-header p {
            padding: 3px 1rem;
            font-size: 14px;
            width: 100%;
        }
        .asi-bd-price span.asi-display-3 {
            font-size: 36px !important;
        }
        ul.asi-bd-bullets li {
            letter-spacing: 1.25px;
            padding: 0.275em;
            font-size: 16px;
        }
        img.asi-bd-check {
            margin-right: 0.45em;
            margin-top: -0.325em;
            padding: 0 0;
            width: 18px;
        }
        a.asi-bd-link-text {
            font-size: 14px;
        }
        p.asi-bd-lead {
            font-family: 'ProximaNova-Semibold', sans-serif !important;
            font-size: 14px !important;
        }
        .asi-bd-spacer {
            position: relative;
            display: block !important;
            height: 25px;
            padding: 0;
            margin: 0;
            width: 100%;
            border-bottom: 1px solid #F0F0F0 !important;
        }
        /* ASI BD HERO */
        .asi-bd-hero ul.asi-bd-bullets li {
            letter-spacing: 1px;
            padding: 0.175em;
            font-size: 13px;
        }
        .asi-bd-hero img.asi-bd-check {
            margin-right: 0.275em;
            margin-top: -0.175em;
            padding: 0 0;
            width: 14px;
        }
        .asi-bd-intro p {
            font-size: 14px;
            line-height: 18px;
            padding: 8px 12px;
            width: 100%;
        }
        .asi-bdr-l,.asi-brd-r{border-left:none !important;border-right:none !important;}
    }
</style>

<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-bf-main-styles.min.css">
<script type="text/javascript" src="https://shopvcf.com/js/asi-mix-scripts.js"></script>
<script src="https://shopvcf.com/js/blazy.min.js"></script>
<!-- <script src="https://unpkg.com/vue"></script>!-->

<style type="text/css">
    .asi-utility-menu{ background-color:#f4f4f4 !important; }
</style>  

<?php include_once('asiSiteFooter.php'); ?>
