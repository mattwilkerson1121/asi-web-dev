<?php include_once('includs/asiSiteHeader.php'); ?>
<?php include_once('includes/asiSiteTopNavigation.php'); ?>

<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/animate.min.css">
<script src="js/wow.min.js"></script>
<script type="text/javascript">
new WOW().init();
/*
($(function(){
    var asiToday = new Date();
    var dd = asiToday.getDate(); 
    var mm = asiToday.getMonth()+1; 
    var yy = asiToday.getFullYear().toString().substr(2,2);

    if(dd<10){ dd='0'+dd; };
    if(mm<10){ mm='0'+mm; }; 

    var asiToday = mm+'/'+dd+'/'+yy;

    var startDate1 = "09/01/17";
    var endDate1 = "09/03/17";
    var endDateSale1 = "09/04/17";
    var startDate2 = "09/05/17";
    var endDate2 = "09/07/17";
    var startDate3 = "09/08/17";
    var endDate3 = "09/10/17";
    var endDateSale2 = "09/11/17";

    function asiSaleDateAlerts(){
        if(asiToday < startDate1||asiToday > endDate2){
           $('#asi-hp-hero-c-v1').attr('data-bg', '09WK1Y17-1');
            $('p.asi-urgency-msg').html('GOING ON NOW'); 
        }
        if(asiToday >= startDate1 && asiToday < endDateSale1){
            $('#asi-hp-hero-c-v1').attr('data-bg', '09WK1Y17-2');
            $('p.asi-urgency-msg').html('final weekend');
        };
        if(asiToday >= startDate2 && asiToday < startDate3){
            $('#asi-hp-hero-c-v1').attr('data-bg', '09WK2Y17-1');
            $('p.asi-urgency-msg').html('now extended<br>final week!').css({'line-height':'1.175'});
        };
        if(asiToday >= startDate3 && asiToday < endDateSale2){
            $('#asi-hp-hero-c-v1').attr('data-bg', '09WK2Y17-2');
            $('p.asi-urgency-msg').html('final weekend');
        };
        if(asiToday == endDateSale1){
            $('#asi-hp-hero-c-v1').attr('data-bg', '09WK1Y17-3');
            $('p.asi-urgency-msg').html('ends today!');
        }
        if(asiToday == endDateSale2){
            $('#asi-hp-hero-c-v1').attr('data-bg', '09WK2Y17-3');
            $('p.asi-urgency-msg').html('ends today!');
        }
    }

    asiSaleDateAlerts();

});*/
</script>
<!-- START // HERO MODULE CONTENT !-->
<div class="asi-hero-module animated fadeIn" id="asi-hp-hero-c-v1" data-bg="09WK1Y17-1">
    <div class="container-fluid asi-container-fluid">
        <div class="asi-content asi-content-body">
            <div class="panel panel-default asi-panel-transparent asi-panel asi-panel-offer">
                <div class="panel-body asi-panel-body asi-panel-body-90-red text-center">
                    <p class="lead asi-urgency-msg text-center text-uppercase">going on now!</p>
                    <div class="panel-title asi-panel-title text-center text-uppercase">the labor day sale</div>
                    <div class="asi-divider">
                        <div class="asi-divider-line"></div>
                    </div>
                    <h1 class="asi-panel-headline asi-asterisk text-uppercase text-center">free delivery<sup style="font-size:0.25em;">*</sup></h1>
                    <p class="lead asi-panel-lead text-center text-lowercase">on qualifying purchases totaling $999 or more</p>
                    <div class="asi-content-button">
                        <a href="/search/v/on-sale" data-pos="1">
                            <button role="button" class="asi-mix-button white">SHOP NOW</button>
                        </a>
                    </div>
                    <div id="asi-offer-details" class="text-center">
                        <a id="asi-offer-details-link" href="#asi-details-modal" data-toggle="modal" data-pos="1" class="text-uppercase">&nbsp;&nbsp;details</a>
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
<!-- START // FINANCE BANNER MODULE !-->
<div class="asi-banner-module animated fadeIn" id="asi-finance-banner" data-module-id="asi-fx-finance-banner-v1" data-module-active="09WK1Y17" data-module-content="12-month-financing">
    <div class="container asi-container">
        <div class="asi-banner-content">
            <div class="asi-plus-icon">
                <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-banner-plus-red-v2?fmt=png" alt="-plus-">
            </div>
            <h2 class="asi-banner-headline text-center">36 MONTHS SPECIAL FINANCING</h2>
            <p class="lead asi-banner-lead text-center">
                On qualifying purchases totalling $1999 or more when you use your Value Plus or Signature Plus credit card on purchases made between 8/29/17 - 9/11/17
            </p>
            <div class="asi-content-button" style="margin:0 auto;width:100%;">
                <a href="/financing" data-pos="2">
                    <button role="button" class="asi-mix-button white">GET DETAILS</button>
                </a>
            </div>
        </div>
    </div>
</div><!-- END // FINANCE BANNER MODULE !-->
<!-- START // HERO MODULE SCOPED STYLES !-->
<style type="text/css">
    #asi-hp-hero-c-v1,
    div[data-module-id="asi-fx-finance-banner-v1"]{
        -webkit-animation-duration:2s;
        -moz-animation-duration:2s;
        animation-duration:2s;
        -webkit-animation-delay:.35s;
        animation-delay:.35s;
    }
    #asi-hp-hero-c-v1 #asi-offer-details{padding-top:0.5em;}
    #asi-hp-hero-c-v1 #asi-offer-details a{
        color:white;
        letter-spacing:0.175em;
        font-size:12px;
    }
        #asi-hp-hero-c-v1 #asi-offer-details a:hover{ color:#181818; }

        #asi-hp-hero-c-v1{
            padding-top:0px;
            /* default bg image */
            /*background-image:url("https://asf.scene7.com/is/image/ASF/CM_1840169?wid=1180&hei=850&scl=3");*/
            background-color: #F4F4F4;
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover;
        }

    #asi-hp-hero-c-v1 .asi-content-body{
        padding-top:5%;
        padding-bottom:5%;
    }

    #asi-hp-hero-c-v1 .asi-panel,
    #asi-hp-hero-c-v1 .asi-panel-offer{ 
        border:none;
        border-radius:0;
        margin:0 auto;
        font-size:16px;
    }
    #asi-hp-hero-c-v1 .asi-panel-offer{ max-width:90%; }
    #asi-hp-hero-c-v1 .asi-panel-transparent{ background:transparent !important; }

            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body{ 
                font-size:16px;
                padding:1.5em 1.375em 1.3em 1.3em; 
            }
                #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body-90-red{ 
                    background: rgba(238,47,52, 0.9) !important; 
                }

                    #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-urgency-msg{
                        letter-spacing:0.2em;
                        font-size:1em;
                        line-height:18px;
                        color:white;
                        margin:0 auto;
                        padding:0 0 0 0;
                    }
                    
                    #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body .asi-panel-title{
                        font-size:1.325em;
                        font-family:'ProximaNova-Semibold',sans-serif;
                        color: #181818;
                        letter-spacing:0.135em;
                        margin:0 auto;
                        padding:0 0 0.375em 0;
                    }
                    #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body h1.asi-panel-headline { 
                        font-size:54px;
                        color:white !important;
                        font-family:'Knockout-HTF49-Liteweight','ProximaNova-Semibold',sans-serif;
                        letter-spacing:1px !important;
                        margin-bottom:0 !important;
                        padding-top:0.1em;
                    }
                    #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-panel-lead{
                        font-family:'Roboto',sans-serif;
                        color:white;
                        max-width:68%; 
                        font-size:18px;
                        margin:-0.275em auto 0 auto !important;
                        word-wrap:break-word;
                    }
                    .asi-content-button{ padding:1.325em 0 0.075em 0; }
                        .asi-content-button a button.asi-mix-button{
                            border:none !important;
                            font-size:14px;
                            padding:12px 45px;

                        }

        @media (min-width: 320px) and (max-width:480px) {
            #asi-hp-hero-c-v1 .asi-panel-offer{max-width:90%;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body{ padding:1em 0.75em 0.625em 0.625em; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body .asi-panel-title{font-size:1em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-urgency-msg{font-size:0.75em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:44px; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:16px }
            .asi-panel-offer .asi-panel-body .asi-content-button{ padding:1em 0 0.05em 0; }
                .asi-content-button a button.asi-mix-button{
                    border:none !important;
                    font-size:12px;
                    padding:8px 30px;

                }
            
        }
        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            #asi-hp-hero-c-v1 .asi-panel-offer{max-width:78%;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body{ padding:1.5em 1.375em 1.3em 1.3em; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body .asi-panel-title{font-size:1.15em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-urgency-msg{font-size:1em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:60px; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:1.35em }
            
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) { 
            #asi-hp-hero-c-v1 .asi-panel-offer{max-width:60%;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body .asi-panel-title{font-size:1.275em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-urgency-msg{font-size:1.125em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:68px; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:1.625em; }
            #asi-hp-hero-c-v1 #asi-offer-details a{font-size:13px;}
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            #asi-hp-hero-c-v1 .asi-panel-offer{max-width:55%;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body{ padding:2.5em 2.025em 2em 2em; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body .asi-panel-title{font-size:1.5em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-urgency-msg{font-size:1.25em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:80px; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:1.8625em;line-height:1.125; }
            .asi-content-button button.asi-mix-button{font-size:16px !important;}
            #asi-hp-hero-c-v1 #asi-offer-details{padding-top:1.175em;}
            #asi-hp-hero-c-v1 #asi-offer-details a{font-size:14px;}
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) { 
            #asi-hp-hero-c-v1 .asi-panel-offer{max-width:640px;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body .asi-panel-title{font-size:1.75em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-urgency-msg{font-size:1.5em;}
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body h1.asi-panel-headline{ font-size:96px;line-height:95% !important; }
            #asi-hp-hero-c-v1 .asi-panel-offer .asi-panel-body p.asi-panel-lead{ font-size:2.125em;line-height:1.25;max-width:80%;}
            .asi-content-button button.asi-mix-button{font-size:16px !important;}
            #asi-hp-hero-c-v1 #asi-offer-details{padding-top:1.175em;}
            #asi-hp-hero-c-v1 #asi-offer-details a{font-size:14px;}
        }
    /* ASI FINANCE BANNER MODULE */
    .asi-banner-module{
             padding:2% 0;
        }
        .asi-hero-btn-wrap,
        .asi-content-button,
        .asi-plus-icon{
            margin:0 auto;
            text-align:center;
            max-width:100%;
        }
        .asi-plus-icon img{ max-width:360px !important;}
    
    /* FINANCE BANNER V2 - RED BG WHITE TEXT CSS */
    [data-module-id="asi-fx-finance-banner-v1"] .asi-banner-content{
        background-color:#ee3d42;
        padding-top:5%;
        padding-bottom:3%;
        padding-left:2%
        padding-right:2%;
    }
        .asi-plus-v1{
            margin: 0px auto;
            padding: 0px;
            position: relative;
            max-width: 360px;
        }
        [data-module-id="asi-fx-finance-banner-v1"] h2.asi-banner-headline,
        [data-module-id="asi-fx-finance-banner-v1"] h2 { 
            font-size:54px !important;
            color:white !important;
            font-family:'Knockout-HTF49-Liteweight','ProximaNova-Semibold',sans-serif;
            letter-spacing:1px !important;
            line-height:85%;
            margin-bottom:0 !important;
        }
        [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
            color:#ffffff;
            line-height:initial;
            font-size:13px;
            letter-spacing:1px;
            padding:0 1% 1%;
            max-width:88%;
            margin:0 auto;
        }
        .asi-hero-btn-wrap{
            padding:4% 2%;
            margin:0 auto;
            text-align:center;
        }
        @media (min-width: 576px) {
            [data-module-id="asi-fx-finance-banner-v1"] h2.asi-banner-headline,
            [data-module-id="asi-fx-finance-banner-v1"] h2 { 
                font-size:48px !important;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                max-width:80%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                font-size:14px;
                line-height:16px;
            }
            .asi-hero-btn-wrap{
                padding:3% 2%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] .asi-banner-content{
                padding:3% 2% !important;
            }
        }
        @media screen and (min-width:768px){
            [data-module-id="asi-fx-finance-banner-v1"] h2.asi-banner-headline,
            [data-module-id="asi-fx-finance-banner-v1"] h2 { 
                font-size:72px !important;
                padding:0 10px;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                max-width:75%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                font-size:15px;
                line-height:17px
            }
            .asi-hero-btn-wrap{
                padding:3% 2%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] .asi-banner-content{
                padding:3% 2% !important;
            }
        }
        @media screen and (min-width:992px){
            [data-module-id="asi-fx-finance-banner-v1"] h2.asi-banner-headline,
            [data-module-id="asi-fx-finance-banner-v1"] h2 { 
                font-size:80px !important;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                max-width:80%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                font-size:16px;
                line-height:18px;
            }
            .asi-hero-btn-wrap{
                padding:1% 1%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] .asi-banner-content{
                padding:2% 2% !important;
            }
        }
        @media screen and (min-width:1200px){
            [data-module-id="asi-fx-finance-banner-v1"] h2.asi-banner-headline,
            [data-module-id="asi-fx-finance-banner-v1"] h2 { 
                font-size:80px !important;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                max-width:75% !important;
            }
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-banner-lead{ 
                font-size:18px;
                line-height:20px;
            }
            .asi-hero-btn-wrap{
                padding:1% 1%;
            }
            [data-module-id="asi-fx-finance-banner-v1"] .asi-banner-content{
                padding:2% 2% !important;
            }
        }
    [data-module-id="asi-fx-finance-banner-v1"] #asiHero-button-link button.asi-mix-button{
        padding-left:40px !important;
        padding-right:40px !important;
    }
    /* END :: ASI FINANCE BANNER MODULE */
    /* ASI HERO UPDATES */
    #asi-hp-hero-c-v1[data-bg="09WK1Y17-1"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/09WK1Y17-hero-going-on-now-d.jpg");
    }
    
    #asi-hp-hero-c-v1[data-bg="09WK1Y17-2"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/09WK1Y17-hero-final-weekend-d.jpg");
    }
    
    #asi-hp-hero-c-v1[data-bg="09WK1Y17-3"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/09WK1Y17-hero-ends-today-d.jpg");
    }
    
    #asi-hp-hero-c-v1[data-bg="09WK2Y17-1"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/09WK2Y17-hero-extended-d.jpg");
    }
        #asi-hp-hero-c-v1[data-bg="09WK2Y17-1"] p.asi-urgency-msg{ display:block;white-space: pre;line-height:1.2; }
    
    #asi-hp-hero-c-v1[data-bg="09WK2Y17-2"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/09WK2Y17-hero-final-weekend-d.jpg");
    }
    
    #asi-hp-hero-c-v1[data-bg="09WK2Y17-3"]{
        background-image:url("https://asf.scene7.com/is/image/ASF/09WK2Y17-hero-ends-today-d.jpg");
    }

    @media (max-width:768px){
        #asi-hp-hero-c-v1[data-bg="09WK1Y17-1"]{
            background-image:url("https://asf.scene7.com/is/image/ASF/09WK1Y17-hero-going-on-now-m.jpg");
        }
        #asi-hp-hero-c-v1[data-bg="09WK1Y17-2"]{
            background-image:url("https://asf.scene7.com/is/image/ASF/09WK1Y17-hero-final-weekend-m.jpg");
        }
        #asi-hp-hero-c-v1[data-bg="09WK1Y17-3"]{
            background-image:url("https://asf.scene7.com/is/image/ASF/09WK1Y17-hero-ends-today-m.jpg");
        }
        #asi-hp-hero-c-v1[data-bg="09WK2Y17-1"]{
            background-image:url("https://asf.scene7.com/is/image/ASF/09WK2Y17-hero-extended-m.jpg");
        }
        #asi-hp-hero-c-v1[data-bg="09WK2Y17-2"]{
            background-image:url("https://asf.scene7.com/is/image/ASF/09WK2Y17-hero-final-weekend-m.jpg");
        }
        #asi-hp-hero-c-v1[data-bg="09WK2Y17-3"]{
            background-image:url("https://asf.scene7.com/is/image/ASF/09WK2Y17-hero-ends-today-m.jpg");
        }
    }
</style><!-- END // HERO MODULE SCOPED STYLES !-->


<!-- GLOBAL STYLES !-->
<style type="text/css">
    .asi-divider {
        width: 100%;
        padding: 0 0;
        margin: 0 auto;
        text-align: center;
    }
        .asi-divider .asi-divider-line {
            background: white;
            text-align: center;
            margin: 0 auto;
            padding: 0 0;
            width: 100%;
            height: 2px;
            max-width: 35px;
        }
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
    p#asi-offer-details-content { padding:4px; color:#181818; font-size:11px; }
    @media (min-width:768px){
        #asi-details-modal .modal-body p,
        p#asi-offer-details-content { padding:4px; color:#181818; font-size:14px; }
    }
</style>

<!-- ASI CSS OVERRIDES - DO NOT ALTER !--> 
<link rel="stylesheet" type="text/css" href="css/asi-mix-styles.css" />
<link rel="stylesheet" type="text/css" href="css/asi-mix-styles-main.css" />

<!-- ASI JS SCRIPTS - DO NOT ALTER !-->
<script type="text/javascript" src="js/asi-mix-scripts.js"></script>

<?php include_once('asiSiteFooter.php'); ?>
