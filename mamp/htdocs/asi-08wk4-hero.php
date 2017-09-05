<?php include_once('includes/asiSiteHeader.php'); ?>
<?php include_once('includes/asiSiteTopNavigation.php'); ?>

<!-- START // HERO MODULE CONTENT !-->
<div class="asi-hero-module" id="asi-hp-hero-c-v2">
    <div class="container-fluid asi-container-fluid asi-hero-bg-image">
        <div id="asi-hero-ribbon" class="hidden-xs hidden-sm">
            <p class="text-center text-uppercase">end of season colors—on sale now!</p>
        </div>
        <div class="asi-content asi-content-body">
            <div class="panel panel-default asi-panel-transparent asi-panel asi-panel-offer">
                <div class="panel-heading asi-panel-heading-dark">
                    <h3 class="panel-title asi-panel-title text-center text-uppercase">summer blowout sale</h3>
                </div>
                <div class="panel-body asi-panel-body asi-panel-body-90-red text-center">
                    <h1 class="asi-panel-headline asi-asterisk text-uppercase text-center">free delivery<sup style="font-size:0.25em;">*</sup></h1>
                    <p class="lead asi-panel-lead text-center text-lowercase">on qualifying purchases totaling $999 or more</p>
                    <div class="asi-content-button">
                        <a href="/search/v/on-sale">
                            <button class="asi-mix-button white" href="/search/v/made-to-mix">SHOP NOW</button>
                        </a>
                    </div>
                    <div id="asi-offer-details" class="text-center">
                        <a id="asi-offer-details-link" href="#asi-details-modal" data-toggle="modal" data-pos="1" class="text-uppercase">details <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END // HERO MODULE CONTENT !-->
<!-- START // OFFER DETAILS MODAL MODULE !-->
<div id="asi-details-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="asiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Offer Details</h4>
            </div>
            <div class="modal-body">
                <p id="asi-offer-details-content">
                    <span class="asi-semibold">*Promotions and discounts</span> are not valid towards select Overstocks, clearance or sale items, previous purchases, gift cards, one-of-a-kind merchandise, delivery charges or Pure Promise. Serta iComfort, iSeries and Beautyrest Black cannot be used in conjunction with other promotions or discounts. Selection may vary per store. <span class="asi-semibold">Free Delivery</span> on any purchase totaling $999 or more. Offer expires on 8/28/17. Discount taken off merchandise equivalent to local delivery fee as determined by store location. Extended delivery charges may apply. No discount applicable on pick up orders. One offer per household. Cannot be used on Overstocks, select mattresses, or combined with any other discount. Some other restrictions may apply.
                </p>
            </div>
        </div>
    </div>
</div><!-- END // OFFER DETAILS MODAL MODULE !-->
<!-- START // HERO MODULE SCOPED STYLES !-->
<style type="text/css">
    .asi-hero-module{
         padding:5% 0;
    }
    #asi-hero-ribbon{
        background:#181818;
        padding:0;
        margin:0;
        width:100%;
        opacity:.9;
    }
    #asi-offer-details{padding-top:2%;}
    #asi-offer-details a{color:white;letter-spacing:1px;margin-left:1.5em;}
        #asi-offer-details a:hover{ color:#181818; }
        #asi-hero-ribbon p{
            font-size:1.25em;
            color:white;
            padding:8px;
            margin:0 auto;
            font-family:'ProximaNova-Regular',sans-serif;
            letter-spacing:2px;
            line-height:1;
        }

        #asi-hp-hero-c-v2{
            padding-top:0px !important;
            background-image:url("https://asf.scene7.com/is/image/ASF/asi-hp-hero-bg-08WK4-m?qlt=75,1&op_sharpen=1");
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover;
        }
    #asi-hp-hero-c-v2 .asi-content-body{
        padding-top:3%;
        padding-bottom:3%;
    }

    .asi-panel{ 
        border:none;
        border-radius:0;
        margin:0 auto;
    }
    .asi-panel-offer{ max-width:70%; }
    .asi-panel-transparent{ background:transparent !important; }
        .asi-panel-offer .panel-heading{ border-bottom:none !important; }
            .asi-panel-offer .asi-panel-heading-dark { background:#181818; }
            .asi-panel-offer .asi-panel-heading-tan { background:#efefea; }
            .asi-panel-offer .asi-panel-heading-red { background:#ee3d42; }
            .asi-panel-offer .asi-panel-heading-gray { background:#525050; }
            .asi-panel-offer .asi-panel-heading-light { background:#f4f4f4; }
            .asi-panel-offer .asi-panel-heading-white { background:#ffffff; }
        
            .asi-panel-offer .asi-panel-title{ 
                font-size:1.5em;
                font-family:'ProximaNova-Semibold',sans-serif;
                letter-spacing:2px; 
            }
            #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-title{color:white;}

            .asi-panel-offer .asi-panel-body{ padding:5% 10%; }
                .asi-panel-offer .asi-panel-body-90-red{ background: rgba(238,47,52, 0.9) !important; }
                    .asi-panel-offer .asi-panel-body h1.asi-panel-headline { 
                        font-size:80px;
                        color:white !important;
                        font-family:'Knockout-HTF49-Liteweight','ProximaNova-Semibold',sans-serif;
                        letter-spacing:1px !important;
                        line-height:85%;
                    }
                    #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-body p.asi-panel-lead{
                        font-family:'Roboto',sans-serif;
                        color:white;
                        max-width:90%; 
                        font-size:1.375em;
                        margin:0 auto;
                        line-height:initial;
                        word-wrap:break-word;
                    }
                    .asi-panel-offer .asi-panel-body .asi-content-button{ padding:10% 0 3%; }
                        .asi-panel-offer .asi-panel-body .asi-content-button a button.asi-mix-button{
                            border:none !important;
                            font-size:14px !important;
                            padding:12px 45px;

                        }

        /*  Extra Small devices (non-retina display portrait phones 320px to 480px) */
        @media screen and (min-width:320px) and (max-width:480px) and (orientation:portrait){
            #asi-hp-hero-c-v2{
                background-image:url("https://asf.scene7.com/is/image/ASF/asi-hp-hero-bg-08WK4-m?qlt=60,1");
            }
            .asi-panel-offer{max-width:85%;}
            .asi-panel-offer .asi-panel-title{ font-size:1.25em; }
                .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:68px; }
                #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-body p.asi-panel-lead{
                    font-size:1.375em;
                    line-height:1.125;
                }
        }
        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .asi-panel-offer{ max-width:55% }
                .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:80px; }
                #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ 
                    font-family:'Roboto',sans-serif;
                    color:white;
                    font-size:1.5em;
                    max-width:80%;
                    margin:0 auto;
                    line-height:initial;
                }
                .asi-panel-offer .asi-panel-body .asi-content-button{ padding:6% 0 1%; }
                    .asi-panel-offer .asi-panel-body .asi-content-button button.asi-mix-button{
                        font-size:16px !important;
                    }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) { 
            #asi-hp-hero-c-v2{
                background-image:url("https://asf.scene7.com/is/image/ASF/asi-hp-hero-bg-08WK4-m?qlt=86,1&op_sharpen=1");
            }
            .asi-panel-offer{max-width:45%;}
            #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:1.625em;}
            .asi-panel-offer .asi-panel-body .asi-content-button{ padding:8% 0 5%; }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            #asi-hp-hero-c-v2{
                background-image:url("https://asf.scene7.com/is/image/ASF/asi-hp-hero-bg-08WK4-d?qlt=80,1&op_sharpen=1");
            }
            .asi-panel-offer{max-width:48%;}
            .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:120px; }
            #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:1.175em;line-height:1.125; }
            .asi-panel-offer .asi-panel-body .asi-content-button button.asi-mix-button{font-size:16px !important;}
            .asi-panel-offer .asi-panel-body .asi-content-button{ padding:5% 0 3%; }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {  
            #asi-hp-hero-c-v2{
                background-image:url("https://asf.scene7.com/is/image/ASF/asi-hp-hero-bg-08WK4-d?qlt=86,1&op_sharpen=1");
            }
            .asi-panel-offer{max-width:40%;}
            #asi-hp-hero-c-v2 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:2.375em;line-height:1.175;}
            .asi-panel-offer .asi-panel-body .asi-content-button button.asi-mix-button{font-size:16px !important;}
            .asi-panel-offer .asi-panel-body .asi-content-button{ padding:5% 0 3%; }
        }
</style><!-- END // HERO MODULE SCOPED STYLES !-->


<!-- GLOBAL STYLES !-->
<style type="text/css">
    .asi-asterisk sup {
      vertical-align: baseline !important;
      position: relative !important;
      top: -1.975em !important;
      left:0.1em !important;
    }
    .asi-semibold{ 
        font-family:'ProximaNova-Semibold',Verdana,sans-serif !important;
        font-weight:600;
    }
    /* ASI STYLED MODAL LIGHT BOX */
    #asi-details-modal .close {
        float: right;
        font-size:2.5em;
        font-weight: 600;
        line-height: 1;
        color: #181818;
        text-shadow: none;
        opacity: .8;
        filter: alpha(opacity=80);
        margin-right:0;
        margin-top:0;
        padding:5px 12px;
        background-color:#efefea;
    }
    #asi-details-modal .close:hover{
        color:white;
        background-color:#ee3d42;
        opacity:1;
        filter:alpha(opacity=100);
    }
    #asi-details-modal .modal-header{ padding:0; margin:0; }
    #asi-details-modal h4.modal-title{ padding:14px 25px 0px; }
    #asi-details-modal .modal-body p,
    p#asi-offer-details-content { padding:4px; color:#181818; font-size:14px; }
</style>

<!-- ASI CSS OVERRIDES - DO NOT ALTER !--> 
<link rel="stylesheet" type="text/css" href="css/asi-mix-styles.css" />
<link rel="stylesheet" type="text/css" href="css/asi-mix-styles-main.css" />

<!-- ASI JS SCRIPTS - DO NOT ALTER !-->
<script type="text/javascript" src="js/asi-mix-scripts.js"></script>


<?php include_once('asiSitePreFooter.php'); ?>
<?php include_once('asiSiteFooter.php'); ?>
