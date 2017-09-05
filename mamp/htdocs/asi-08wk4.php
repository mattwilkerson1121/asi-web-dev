<?php include_once('includes/asiSiteHeader.php'); ?>
<?php include_once('includes/asiSiteTopNavigation.php'); ?>
<!-- **** asiHero.css & asiHero.js :: YOU MUST INCLUDE THIS FILE FOR THE PLUGIN **** !-->
    <link rel="stylesheet" type="text/css" href="css/asi-plugins/asiContentBuilder.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        $('.asi-main-menu-dropdown').remove();
    </script>

<!-- END : REQUIRED for ASIHERO PLUGIN !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-417"></div>
        <div class="asi-hp-hero-module" data-module-id="asi-fw-responsive-hero-v1" data-module-active="08WK4Y17" data-module-content="summer-blowout-sale"></div>
    </div>
    <!-- <div class="asi-element-spacer asi-sp-h-2 white"></div> !-->
    <!-- HOME ROW 2 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-418"></div>
        <div class="asi-banner-module" id="asi-finance-banner" data-module-id="asi-fx-finance-banner-v1" data-module-active="09WK1Y17" data-module-content="12-month-financing">
            <div class="container asi-container">
                <div class="asi-banner-content">
                    <div class="asi-plus-icon">
                        <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-banner-plus-red-v2?fmt=png" alt="-plus-">
                    </div>
                    <h2 class="asi-banner-headline text-center">12 MONTHS SPECIAL FINANCING</h2>
                    <p class="lead asi-banner-lead text-center">
                        On qualifying purchases totalling $999 or more when you use your Value Plus or Signature Plus credit card on purchases made between 8/22/17 - 8/28/17
                    </p>
                    <div class="asi-hero-btn-wrap" id="asi-hero-btn-wrap">
                        <a id="asiHero-button-link" href="/financing" data-pos="2">
                            <button class="asi-mix-button white">GET DETAILS</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .asi-banner-module{
             padding:2% 0;
        }
        .asi-hero-btn-wrap,
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
    </style>
    <!-- HOME ROW 3 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-419"></div>
        <div class="asi-section-content asi-section section">
            <div class="container asi-container">
                <div class="asi-content asi-content-heading">
                    <h3 class="asi-display-3 asi-darker">WHITE-HOT SAVINGS</h3>
                    <div class="asi-subheading">
                        <div class="asi-subheading-rule"><span class="asi-subheading-text text-center">start fresh this fall</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME ROW 4 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-420"></div>
        <!-- URBAN INDUSTRIAL BANNER MODULE !-->
        <div id="asi-urban-industrial-banner" class="asi-fixed-hero asi-banner">
            <div class="section asi-section asi-mix-hero-wrapper asi-module-section">
                <div class="asi-mix-contents asi-bg-hero-image container asi-container">
                    <div class="asi-contents-container">
                        <div class="row asi-row">
                            <div id="asi-content-col" class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                                <div class="asi-content asi-content-body">
                                    <div id="asi-hero-wrapper" class="asi-section-content-wrapper">
                                        <p class="asi-hero-message asi-lead lead asi-hero-lead text-center text-uppercase">
                                            lowest price ever    
                                        </p>
                                        <h3 class="asi-ui-headline text-center text-uppercase">50% OFF</h3>
                                        <h4 class="asi-ui-sub-headline text-center text-uppercase">
                                            urban industrial <br class="visible-xs">dining collection
                                        </h4>
                                        <div id="asi-hero-btn-wrap">
                                            <a id="asiHero-button-link" href="/search/save-30" data-pos="14">
                                                <button id="asiHero-button" class="asi-mix-button red">SHOP NOW</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="asi-element-spacer asi-sp-h-2 white"><!-- spacer !--></div>
    </div>
    <!-- HOME ROW 5 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-421"></div>
        <div id="asi-hp-categories">
            <div class="asi-container">
                <div class="row" style="margin:0 0;padding:0 0;">
                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:10px;padding-bottom:10px;padding-top:15px;">
                        <a href="#">
                            <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/08WK1Y17_MIX_Living_Sale?qlt=86,1" alt="img-alt-1">
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-right:10px;padding-bottom:10px;padding-top:15px;">
                        <a href="#">
                            <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/08WK1Y17_MIX_Bedroom_Sale?qlt=86,1" alt="img-alt-1">
                        </a>
                    </div>
                </div>
                <div class="row clearfix" style="margin:0 0;padding:0 0;">
                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left:10px;padding-bottom:10px;padding-top:15px;">
                        <a href="#">
                            <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/08WK1Y17_MIX_Living_Sale?qlt=86,1" alt="img-alt-1">
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-right:10px;padding-bottom:10px;padding-top:15px;">
                        <a href="#">
                            <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/08WK1Y17_MIX_Bedroom_Sale?qlt=86,1" alt="img-alt-1">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME ROW 6 !-->
    <div class="row-fluid home-content-row clearfix clear">
        <div class="pe-type-id-422"></div>
        <div id="#asi-pe-html-mix-banner-2" class="asi-hp-banner-module" data-module-id="asi-fx-responsive-banner-v5" data-module-active="08WK4Y17" data-module-content="mix-promo"></div>
    </div>
    <div class="asi-element-spacer asi-sp-h-2 white"><!-- asi home row spacer !--></div>
    <!-- HOME ROW 7 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-423"></div>
        <div class="asi-hp-banner-module" data-module-id="asi-fx-responsive-banner-v6" data-module-active="08WK4Y17" data-module-content="offer"></div>
    </div>
    <!-- HOME ROW 8 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-424"></div>
        <div class="asi-hp-banner-module" data-module-id="asi-fx-responsive-banner-v7" data-module-active="08WK4Y17" data-module-content="offer"></div>
    </div>
    <!-- HOME ROW 9 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-425"></div>
        <div class="asi-hp-banner-module" data-module-id="asi-fx-responsive-banner-v8" data-module-active="08WK4Y17" data-module-content="offer"></div>
    </div>
    <!-- HOME ROW 10 !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-426"></div>
        <div class="asi-hp-banner-module" data-module-id="asi-fx-responsive-banner-v9" data-module-active="08WK4Y17" data-module-content="offer"></div>
    </div>
           
    <script type="text/javascript">
        $(function(){
            /* ASI HERO - HOME ROW 1 JS */
            $('div[data-module-id="asi-fw-responsive-hero-v1"]').asiHero({
                layout : 'fluid',
                responsiveMode : 'responsive',
                dataPosition : '1',
                divider : 'true',
                contentCol : 'col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12',
                urgencyText : 'GOING ON NOW!',
                headlineText : '<h1 class="asiH1 asi-h1 display-1 asi-display-1">FREE DELIVERY</h1>',
                messageText : 'on orders of $999 or more', //'on qualifying purchases totalling $999 or more',
                textAlign : 'text-center',
                fontColor : '#FFFFFF',
                bgImage : 'https://asf.scene7.com/is/image/ASF/asi-hp-hero-mix-sebring-lrs.jpg',
                bgColorContent : 'none',//#EE2F34
                paddingSection : '0px',
                paddingBody : '10% 6%',
                paddingContent : '3% 3%',
                addButton : 'true',
                buttonText : 'SHOP NOW',
                buttonClass : 'asi-mix-button white',
                buttonLink : '/search/v/on-sale',
                complete: function(){
                    $('#asi-fluid-html-hero-v3 p.asi-urgency-msg').after('<p class="asi-lead asi-lead-sale-name text-center">THE LABOR DAY SALE</p>');
                }
            });
        });
    </script>
    <script type="text/javascript">
        /*
        $(function(){
            $('[data-module-id="asi-fx-finance-banner-v1"]').asiHero({
                layout : 'fixed',
                responsiveMode : 'responsive',
                dataPosition : '2',
                contentCol : 'col-md-12 col-sm-12 col-xs-12',
                headlineText : '<div id="asi-plus-v1" style="margin:0 auto 15px auto;padding:0;position:relative;max-width:360px;" class="wow animated fadeIn" data-wow-delay=".75s" data-wow-duration="1s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 12"><title>asi-black-white-finance-plus</title><rect y="5.5" width="62" height="1"/><rect x="72.25" width="2" height="12" style="fill:#fff"/><rect x="67.25" y="5" width="12" height="2" style="fill:#fff"/><rect x="84" y="5.5" width="62" height="1"/></svg></div><h2 class="display-1 asi-display-1 text-center">12 MONTHS SPECIAL FINANCING</h2>',
                messageSubText : 'when you use your Value Plus or Signature Plus credit card on purchases <br class="visible-lg">of $999 or more made between 8/22/17 - 8/28/17',
                textAlign : 'text-center',
                fontColor : 'white',
                bgColorContent : '#EE3D42',
                paddingSection : '0px',
                paddingContent : '25px',
                addButton : 'true',
                buttonText : 'GET DETAILS',
                buttonClass : 'asi-mix-button white',
                buttonLink : '/financing',
                complete: function(){
                    $('[data-module-id="asi-fx-finance-banner-v1"] #asi-hero-wrapper').addClass('wow animated fadeIn').attr('data-wow-delay','.05').attr('data-wow-duration','.5s').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', nextAnimation());
                    function nextAnimation(){
                        $('[data-module-id="asi-fx-finance-banner-v1"] h2').addClass('wow animated fadeInUp').attr('data-wow-delay','.5s');
                        $('[data-module-id="asi-fx-finance-banner-v1"] p.asi-sub-lead').addClass('wow animated fadeInUp').attr('data-wow-delay','.75s');
                        $('[data-module-id="asi-fx-finance-banner-v1"] .asi-mix-button').addClass('wow animated fadeIn').attr('data-wow-delay','1s').attr('data-wow-duration','.5s').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', $('[data-module-id="asi-fx-finance-banner-v1"] .asi-content').removeClass('wow animated fadeIn fadeInUp'));
                    }
                }
            });
        });
        */
    </script>
    <script type="text/javascript">
        $(function(){
            $('div[data-module-id="asi-fx-responsive-banner-v5"]').asiHero({
                layout : 'fixed',
                responsiveMode : 'responsive',
                dataPosition : '3',
                urgencyText: 'YOUR HOUSE. YOUR RULES.',
                divider: 'true',
                contentCol : 'col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0',
                headlineText : '<h3 class="asiH1 asi-h1 display-1 asi-display-1 text-uppercase asi-white">MIX IT.<br>(UN)MATCH IT.<br>MAKE IT YOU.</h3>',
                textAlign : 'text-left',
                fontColor : '#FFFFFF',
                bgImage : 'https://asf.scene7.com/is/image/ASF/s7_1860666_alt?crop=0,1812,8688,3777&anchor=4344,3700',
                bgColorContent : 'none',
                paddingSection : '0px',
                paddingContent : '6% 5%',
                addButton : 'true',
                buttonText : 'EXPLORE MADE TO MIX',
                buttonClass : 'asi-mix-button white',
                buttonLink : '/made-to-mix',
                complete: function(){
                    $('div[data-module-id="asi-fx-responsive-banner-v5"] .asi-row').before('<div id="asi-mix-gradient"></div>');
                    $('div[data-module-id="asi-fx-responsive-banner-v5"] #asi-mix-gradient').css({'position':'absolute','width':'100%','height':'100%','z-index':'0','top':'0','left':'0'}).addClass('asi-gradient-overlay-dark asi-gradient');
                    $('div[data-module-id="asi-fx-responsive-banner-v5"] #asi-hero-btn-wrap').css({'margin':'0 0','text-align':'left'});
                }
            });
        });
    </script>
    <!-- HOME PAGE MODULE SCOPED STYLES !-->
    <style type="text/css">
        /* ASI DESKTOP HERO - HOME ROW 1 CSS */
        [data-module-id="asi-fw-responsive-hero-v1"] .asi-section{
            padding-top:0 !important;
            padding-bottom:0 !important;
        }
        [data-module-id="asi-fw-responsive-hero-v1"] #asi-hero-wrapper{
            background:url('https://asf.scene7.com/is/image/ASF/spacer?fmt=png-alpha&opac=90&bgColor=238,47,52') top left repeat !important;
        }
        [data-module-id="asi-fw-responsive-hero-v1"] p.asi-urgency-msg{
            letter-spacing:0.25em !important;
            font-size:20px !important;
            line-height:22px;
        }
        [data-module-id="asi-fw-responsive-hero-v1"] h1.asi-display-1,
        [data-module-id="asi-fw-responsive-hero-v1"] h1{
            padding-top:0 !important;
            padding-bottom:0 !important;
            font-size:80px !important;
        }
        [data-module-id="asi-fw-responsive-hero-v1"] p.asi-lead-sale-name{
            font-family:'ProximaNova-Semibold',sans-serif !important;
            color:black !important;
            letter-spacing:0.25em !important;
            font-size:24px !important;
            line-height:28px !important;
            padding:0 0;
        }
        [data-module-id="asi-fw-responsive-hero-v1"] p.asi-hero-message{
            font-family: 'Roboto', sans-serif !important;
            font-weight:300 !important;
            font-size:30px !important;
            line-height:36px !important;
            letter-spacing:0em !important;
            max-width:75%;
            margin:0 auto;
            text-align:center;
            padding:0 15px 15px 15px !important;
        }
        @media screen and (max-width:768px){
            [data-module-id="asi-fw-responsive-hero-v1"] p.asi-hero-message{
                max-width:78% !important;
                font-size:24px !important;
                line-height:26px;
            }
        }
        @media screen and (max-width:480px){
            [data-module-id="asi-fw-responsive-hero-v1"] #asi-hero-wrapper{
                padding:5% 5% !important;
            }
            [data-module-id="asi-fw-responsive-hero-v1"] p.asi-urgency-msg{
                letter-spacing:0.1em !important;
                font-size:16px !important;
                line-height:18px;
            }
            [data-module-id="asi-fw-responsive-hero-v1"] p.asi-lead-sale-name{
                letter-spacing:0.18em !important;
                font-size:18px !important;
                line-height:22px !important;
            }
            [data-module-id="asi-fw-responsive-hero-v1"] h1.asi-display-1,
            [data-module-id="asi-fw-responsive-hero-v1"] h1{
                padding-bottom:0 !important;
                font-size:60px !important;
            }
            [data-module-id="asi-fw-responsive-hero-v1"] p.asi-hero-message{ 
                font-size:18px !important;
                line-height:24px !important;
                letter-spacing:0em !important;
                max-width:100% !important;
                padding:0 5px 8px 5px !important;
                font-weight:300 !important;
            }   
        }
        /* HOME ROW 2 - FINANCE BANNER V2 - RED BG WHITE TEXT CSS */
        [data-module-id="asi-fx-finance-banner-v1"] .asi-mix-hero-wrapper{padding-bottom:0px;}
        [data-module-id="asi-fx-finance-banner-v1"] .asi-divider-line{ background-color: #ffffff !important; }
        [data-module-id="asi-fx-finance-banner-v1"] .display-1,
        [data-module-id="asi-fx-finance-banner-v1"] .asi-display-1,
        [data-module-id="asi-fx-finance-banner-v1"] h2 { color:white !important; font-size:80px !important; margin-bottom:12px !important;}
        [data-module-id="asi-fx-finance-banner-v1"] p.asi-sub-lead{ max-width:80% !important;margin:0 auto;padding-bottom:10px !important; }
        [data-module-id="asi-fx-finance-banner-v1"] #asi-mix-hero .asi-content-body { background-color:none !important; }
        [data-module-id="asi-fx-finance-banner-v1"] .asi-btn-outline{border:2px solid white !important; background:#ffffff !important;color:#121212;}
        [data-module-id="asi-fx-finance-banner-v1"] .asi-btn-outline:hover{background:#121212 !important;border:2px solid #121212 !important;color:white !important;}
        @media screen and (max-width:768px){
            [data-module-id="asi-fx-finance-banner-v1"] .asi-content-body{padding-top:0px !important;margin-top:0;}
            [data-module-id="asi-fx-finance-banner-v1"] #asi-mix-hero,
            [data-module-id="asi-fx-finance-banner-v1"] .asi-container{width:100% !important;}
            [data-module-id="asi-fx-finance-banner-v1"] .asi-section-content-wrapper{ padding-left:10px !important;padding-right:10px !important;}
            [data-module-id="asi-fx-finance-banner-v1"] p.asi-hero-sub-message{font-size:16px !important;line-height:1.425 !important;}
            #asi-plus-v1{max-width:220px !important;}
            #asi-fluid-html-hero-0 .asi-hero-wrapper, #asi-fluid-html-hero-0 .asi-section{padding-bottom:0px !important;}
        }
        @media screen and (max-width:480px){
            [data-module-id="asi-fx-finance-banner-v1"] h2.display-1,
            [data-module-id="asi-fx-finance-banner-v1"] h2.asi-display-1 {
                font-size:54px !important;
            }
        }
    </style>
    <style type="text/css">
        /* HOME ROW 6 - MIX PROMO BANNER CSS */
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-section{padding-bottom:0px !important;padding-top:0;}
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-gradient-overlay-dark{
            background: rgba(18,18,18,0.75);
            background: -moz-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgba(18,18,18,0.8)), color-stop(80%, rgba(18,18,18,0)));
            background: -webkit-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
            background: -o-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
            background: -ms-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
            background: linear-gradient(to right, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#121212', GradientType=1 );
            max-width:1180px !important;
            padding:0;
            margin:0;
        }
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-display-1{line-height:1 !important;}
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-divider-line{background:#ee3d42 !important;text-align:left !important;margin-left:2px !important;margin-right:0 !important;}
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-sub-lead {padding-top:8px !important;}
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-hero-message{padding-left:4%; padding-right:4%;}
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-mix-button { margin-top:0;background:none; border:2px solid #ffffff !important; color:#181818; }
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-mix-button:hover{background:#ee3d42 !important;color:#ffffff !important;}
        [data-module-id="asi-fx-responsive-banner-v5"] #asi-hero-btn-wrap button{padding-top:15px !important;padding-bottom:14px !important;}
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-container .asi-row{margin:0 0 !important;padding:0 0 !important;}
        @media screen and (max-width:768px){
            [data-module-id="asi-fx-responsive-banner-v5"] .asi-mix-contents{background-position:top right -6.5em !important;}
            [data-module-id="asi-fx-responsive-banner-v5"] {padding-top:0px;margin-top:0;}
            [data-module-id="asi-fx-responsive-banner-v5"] h3{font-size:45px !important;padding:0 0 !important;letter-spacing:1px;line-height:38px !important;}
            [data-module-id="asi-fx-responsive-banner-v5"] .asi-mix-button{padding-left:20px !important;padding-right:20px !important;color:#181818 !important;}
            [data-module-id="asi-fx-responsive-banner-v5"] .asi-mix-contents{width:100% !important;}
            [data-module-id="asi-fx-responsive-banner-v5"] .asi-gradient-overlay-dark{
                background: rgba(18,18,18,0.75);
                background: -moz-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0.2) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(18,18,18,0.8)), color-stop(100%, rgba(18,18,18,0.2)));
                background: -webkit-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0.2) 100%);
                background: -o-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0.2) 100%);
                background: -ms-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0.2) 100%);
                background: linear-gradient(to right, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0.2) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#121212', GradientType=1 );
            }
        }
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-container,
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-mix-contents, 
        [data-module-id="asi-fx-responsive-banner-v5"] .asi-bg-hero-image,
        [data-module-id="asi-fx-responsive-banner-v5"] .container{padding-right:0px !important;padding-left:0px !important;max-width:1180px !important;margin:0 auto !important;}
    </style>
    <style type="text/css">
        /*** homepage UI banner ***/
        #asi-urban-industrial-banner .asi-mix-contents{ 
            width:100%;
            max-width:1200px;
            padding:0 10px;
        }
        #asi-urban-industrial-banner .asi-contents-container{ 
            position:relative;
            background:url('https://asf.scene7.com/is/image/ASF/asi-30-off-ui-bg-lrg.jpg') top center no-repeat;
            background-color:#EFEFEA;
            padding:0;
            margin:0;
            overflow:hidden;
        }
        #asi-urban-industrial-banner .asi-content-body{
            padding:25px;
        }
        h3.asi-ui-headline{
          /* 30% OFF: */
            font-family: 'Knockout-HTF49-Liteweight', sans-serif;
            font-size: 176px;
            line-height:98%;
            color: #EE3D42;
            margin:0 auto;
            letter-spacing:2px;
        }
        h4.asi-ui-sub-headline{
            font-family: 'Knockout-HTF29-JuniorLiteweight', sans-serif;
            font-size: 36px;
            color: #181818;
            line-height:100%;
            letter-spacing:1px;
            margin-top:-4px;
            padding-bottom:16px;
        }
        #asi-urban-industrial-banner p.asi-hero-message{
            font-size:26px !important;
            letter-spacing:2.67px !important;
        }
        #asi-urban-industrial-banner button.asi-mix-button{
            padding-top:14px;
            font-size:16px;
            background:#ee3d42;
        }
        @media screen and (max-width:768px){
            #asi-urban-industrial-banner .asi-mix-contents{ 
                max-width:100%;
            }
            #asi-urban-industrial-banner .asi-contents-container{ 
                background:url('https://asf.scene7.com/is/image/ASF/asi-30-off-ui-bg-sml.jpg') top center no-repeat;
            }
            #asi-urban-industrial-banner .asi-content-body{
                padding:18px;
            }
            h3.asi-ui-headline {
                font-size: 140px;
                line-height:100%;
            }
            h4.asi-ui-sub-headline{
                font-size:42px;
            }
            #asi-urban-industrial-banner p.asi-hero-message{
                font-size:24px !important;
                letter-spacing:2.47px !important;
            }
        }
        @media screen and (max-width:480px){
            #asi-urban-industrial-banner .asi-mix-contents{ 
                max-width:100%;
                padding:0 0;
            }
            #asi-urban-industrial-banner .asi-contents-container{ 
                background:url('https://asf.scene7.com/is/image/ASF/asi-30-off-ui-bg-xsm.jpg') top center no-repeat;
                background-size:100% 100%;
            }
            #asi-urban-industrial-banner .asi-content-body{
                padding:16px;
                letter-spacing:1px;
            }
            h3.asi-ui-headline {
                font-size: 90px;
                line-height:100%;
            }
            h4.asi-ui-sub-headline{
                font-size:28px;
                line-height:100%;
            }
            #asi-urban-industrial-banner p.asi-hero-message{
                font-size:18px !important;
                letter-spacing:2px !important;
            }
            #asi-hero-btn-wrap button.asi-mix-button{
                height:43px;
                font-size:14px !important;
                font-family:'ProximaNova-Regular',sans-serif !important;
                font-weight:400;
                padding:43px;
            }
        }
    </style>
    <div class="home-content">
        <div class="asi-section section" style="padding-top:1.5em !important;padding-bottom:0 !important;">
            <div class="container asi-container" style="padding:0 0 !important;margin:0 auto !important;max-width:1180px !important;width:100%;">
                <div class="asi-content asi-content-heading">
                <h3 class="asi-display-3 asi-darker">SHOP THE SALE BY ROOM</h3>
            </div>
        </div>
        <div class="asi-section section" style="padding-top:0px !important;">
            <div class="asi-content asi-content-body" style="padding-top:0;">
                <div id="asi-onsale-nav-container">
                    <div id="asi-onsale-pill-menu" style="background-color:#f4f4f4;">
                        <div class="container asi-container" style="padding:0 0 !important;margin:0 auto !important;max-width:1180px !important;width:100%;">
                            <ul class="nav nav-pills nav-justified">
                                <li class="all active"><a href="asi-08wk4.php?tab=all">ALL SALES</a></li>
                                <li class="living"><a href="asi-08wk4.php?portal_menu_level_1_1=Living%7e257226&tab=living">LIVING</a></li>
                                <li class="dining"><a href="asi-08wk4.php?portal_menu_level_1_1=Dining%7e257256&tab=dining">DINING</a></li>
                                <li class="bedroom"><a href="asi-08wk4.php?portal_menu_level_1_1=Bedroom~257241&tab=bedroom">BEDROOM</a></li>
                                <li class="mattress"><a href="asi-08wk4.php?portal_menu_level_1_1=Mattresses~257263&tab=mattress">MATTRESSES</a></li>
                                <li class="mix"><a href="asi-08wk4.php?mix_1=%28Un%29Traditional~279447&mix_1=Modern%28ish%29~279448&tab=mix">MADE TO MIX</a></li>
                            </ul>
                        </div>
                    </div>
                        <div class="container asi-container" style="padding:0 0 !important;margin:0 auto !important;max-width:1180px !important;width:100%;">
                            <div class="tab-content clearfix asi-onsale-tab-content">
                                <div class="tab-pane clearfix active" id="all">
                                    <div class="row asi-row">
                                        <div class="col-md-7 col-xs-12 asi-sale-offers-lg" style="padding-bottom:10px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Living_Lg.png" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm" style="padding-bottom:7px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Bed_Sm.png" class="img-responsive"></a>
                                        </div>      
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Dining_Sm.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane clearfix" id="living">
                                    <div class="row asi-row">
                                        <div class="col-md-7 col-xs-12 asi-sale-offers-lg" style="padding-bottom:10px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Motion_Lg.png" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm" style="padding-bottom:7px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Accent_Chairs_Sm.png" class="img-responsive"></a>
                                        </div>      
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_BOGO_Pillows_Sm.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane clearfix" id="dining">
                                    <div class="row asi-row">
                                        <div class="col-md-7 col-xs-12 asi-sale-offers-lg" style="padding-bottom:10px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Dining_Lg.png" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm" style="padding-bottom:7px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Malibu_DRS_Sm.png" class="img-responsive"></a>
                                        </div>      
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Charleston_DRS_Sm.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div> 
                                <div class="tab-pane clearfix" id="bedroom">
                                    <div class="row asi-row">
                                        <div class="col-md-7 col-xs-12 asi-sale-offers-lg" style="padding-bottom:10px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Bedroom_Lg.png" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm" style="padding-bottom:7px;">
                                            <a href="/search/v/made-to-mix "><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Malibu_BRS_Sm.png" class="img-responsive"></a>
                                        </div>      
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Charleston_BRS_Sm.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane clearfix" id="mattress">
                                    <div class="row asi-row">
                                        <div class="col-md-7 col-xs-12 asi-sale-offers-lg" style="padding-bottom:10px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_Matt_Lg.png" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm" style="padding-bottom:7px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_MiracleFoam_Sm.png" class="img-responsive"></a>
                                        </div>      
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_AdjBases_Sm.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane clearfix" id="mix">
                                    <div class="row asi-row">
                                        <div class="col-md-7 col-xs-12 asi-sale-offers-lg" style="padding-bottom:10px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_MIX_Lg.png" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm" style="padding-bottom:7px;">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_MIX_Bed_Sm.png" class="img-responsive"></a>
                                        </div>      
                                        <div class="col-md-5 col-xs-6 asi-sale-offers-sm">
                                            <a href="/search/v/made-to-mix"><img src="/images/09WK1-Sale-Page/assets/D_Hawk_MIX_Dining_Sm.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- END TAB-CONTENT !-->
                    </div><!-- END TAB-CONTAINER !-->
                </div><!-- END TAB-CONTENT-ROW !-->
            </div>
        </div>
    </div>
    <script>
            function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
            };
            
            //alert(getUrlParameter('tab'));
            if(!getUrlParameter('tab')){
                $(".nav-pills li:first").addClass('active');
            }else{
                $('.tab-pane').removeClass('active');
                $('.tab-pane[id="'+getUrlParameter('tab')+'"]').addClass('active');
                $('.nav-pills li').removeClass('active');
                $('.nav-pills li[class="'+getUrlParameter('tab')+'"]').addClass('active');
            }
    </script>
    <style>
        /* ASI SALE TAB STYLES */
        #asi-onsale-pill-menu {
            position:relative;
            padding:0;
            margin:0.625em 0 !important;
        }
        #asi-onsale-nav-container ul.nav-pills,
        #asi-onsale-nav-container ul.nav-justified{
            background-color:#f4f4f4 !important;
        }
        #asi-onsale-nav-container .nav-pills > li,
        #asi-onsale-nav-container .nav-pills > li > a{
            background-color:none;
            margin-bottom:0 !important;
        }
        #asi-onsale-nav-container .nav-pills > li > a{
          border-radius: 0;
          background-color:#f4f4f4;
          border-bottom:2px solid #f4f4f4;
          border-top:2px solid #f4f4f4;
          font-family:'ProximaNova-Semibold',sans-serif;
          color:#525050;
          letter-spacing:1.5px;
        }

        #asi-onsale-nav-container .nav-pills > li.active a{
            background-color:#efefea;
            border-bottom:2px solid #ee3d42;
            border-top:2px solid #efefea;
            color:#181818;
        }
        #asi-onsale-nav-container .nav-pills > li > a:hover{
            background-color:#f4f4f4;
            border-bottom:2px solid #525050;
            border-top:2px solid #f4f4f4;
            color:#181818;
        }
        #asi-onsale-nav-container .nav-pills > li.active > a:hover{
            background-color:#efefea !important;
            border-bottom:2px solid #ee3d42 !important;
            border-top:2px solid #efefea !important;
            color:#181818 !important;
            cursor:initial;
        }

        .asi-onsale-tab-content .tab-pane{
          color:#181818;
          background-color: #ffffff;
          padding:0 0 !important;
        }
        .asi-onsale-tab-content .asi-sale-offers-lg{ padding-left:0 !important; }
        .asi-onsale-tab-content .asi-sale-offers-sm{ padding-right:0 !important; }
        
        @media screen and (max-width:768px){
            #asi-onsale-nav-container .nav-pills {
                border-top:2px solid #c2c2c2 !important;
            }
            .asi-onsale-tab-content .asi-sale-offers-lg{ padding-left:5px !important; }
            .asi-onsale-tab-content .asi-sale-offers-sm{ padding-right:5px !important; }
        }
    </style>   
    </div>
    <!-- Home-row-15 -->
    <!-- ASI CSS + JS SCRIPTS !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-431">
	        <div>
                <!-- ASI CSS OVERRIDES - DO NOT ALTER !--> 
				<link rel="stylesheet" type="text/css" href="css/asi-mix-styles.css" />
				<link rel="stylesheet" type="text/css" href="css/asi-mix-styles-main.css" />
                <!-- START : REQUIRED for ASIHERO PLUGIN !-->
                <script type="text/javascript" src="js/asi-plugins/jquery.asiContentBuilder.js"></script>
                <!-- ASI JS SCRIPTS - DO NOT ALTER !-->
                <script type="text/javascript" src="js/asi-mix-scripts.js"></script>
                <script type="text/javascript" src="http://propeller.in/components/button/js/ripple-effect.js"></script>
			</div>
		</div>
    </div>

<?php include_once('includes/asiSitePreFooter.php'); ?>
<?php include_once('includes/asiSiteFooter.php'); ?>
