<?php include_once('includes/asiSiteHeader.php'); ?>
<?php include_once('includes/asiSiteTopNavigation.php'); ?>
<!-- **** asiHero.css & asiHero.js :: YOU MUST INCLUDE THIS FILE FOR THE PLUGIN **** !-->
    <link rel="stylesheet" type="text/css" href="css/asi-plugins/asiContentBuilder.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>

    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        new WOW().init();
        $('.asi-main-menu-dropdown').remove();
    </script>

    <link rel="stylesheet" type="text/css" href="css/owl/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="css/owl/owl.theme.green.css"/>
    <!-- <script src="https://unpkg.com/vue"></script> -->
<!-- END : REQUIRED for ASIHERO PLUGIN !-->
    <div class="row-fluid home-content-row clearfix"> 
        <div class="asi-hp-hero-module" data-module-id="asi-fw-responsive-hero-v2"></div>
    </div>
            <script type="text/javascript">
            /*
                $(function(){
                    $('#asi-mix-sale-hero').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        dataPosition : '0',
                        divider : 'false',
                        urgencyText: '<div id="hero-offer-logo"><img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-mtm-alpha-logo?fmt=png-alpha" alt="made to mix furniture logo" style="max-width:200px !important;"></div>',
                        contentCol : 'col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0',
                        headlineText : '<h1 class="asiH1 asi-h1 display-1 asi-display-1">10% OFF<br></h1>',
                        messageText : 'MADE TO MIX FURNITURE',
                        //messageSubText : 'Online and in stores. Prices as marked.',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/moda-sofa-mushroom-rm?qlt=80,1',
                        bgColorContent : '#000000',
                        paddingSection : '0px',
                        //paddingBody : '7% 15px 12% 15px',
                        paddingContent : '40px 18px',
                        addButton : 'true',
                        buttonText : 'SHOP NOW',
                        buttonClass : 'asi-mix-button red',
                        buttonLink : 'on-sale',
                        complete: function(){ console.log('asi fluid html hero compiled')}
                    });
                });
            */
            </script>
            <script type="text/javascript">
                $(function(){
                    $('div[data-module-id="asi-fw-responsive-hero-v2"]').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        divider : 'false',
                        urgencyText: '<div id="hero-offer-logo"><img src="https://asf.scene7.com/is/image/ASF/asi-mtm-alpha-logo?fmt=png-alpha" alt="made to mix furniture logo" width="145" height="145"></div>',
                        contentCol : 'container',
                        headlineText : '<h2 id="offer-headline" class="asiH1 asi-h1 display-1 asi-display-1">10% OFF</h2>',
                        messageText : 'MADE TO MIX FURNITURE',
                        messageSubText : 'Discount applies to (UN)TRADITIONAL and MODERN(ISH) Collections. <br class="visible-xs">No minimum purchase.',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/asi-hp-hero-mix-moda-sectional?qlt=80,1',
                        bgColorContent : 'none',
                        paddingSection : '5% 0',
                        //paddingContent : '25px 18px',
                        addButton : 'true',
                        dataPosition : '1',
                        buttonText : 'SHOP NOW',
                        buttonClass : 'asi-mix-button white',
                        buttonLink : '/search/v/on-sale',
                        complete: function(){
                            $('p.asi-hero-sub-message').before('<div class="asi-divider" style="padding-top:2%!important;padding-bottom:3%!important;"><div class="asi-divider-line" style="background:white;width:45px;"></div></div>');
                            $('#offer-headline').before('<p class="urgency-2 text-center text-uppercase">FINAL DAYS!</p>');
                            $(this).addClass('asi-home-hero-v1');
                        }
                    });
                });
            </script>
    <style>
        [data-module-id="asi-fw-responsive-hero-v2"] .asi-section{padding-top:0;padding-bottom:0;}

        [data-module-id="asi-fw-responsive-hero-v2"] .asi-row{
            position:relative;
            margin-left:0 !important;
            margin-right:0 !important;
        }
        [data-module-id="asi-fw-responsive-hero-v2"] .asi-mix-contents{
            background-position:center center !important;
            padding-top:2%;
            padding-bottom:2%;
        }

        [data-module-id="asi-fw-responsive-hero-v2"] #hero-offer-logo {
            position: relative;
            padding: 15px 0 3% 0;
            margin: 0 auto;
            text-align: center;
        }
        [data-module-id="asi-fw-responsive-hero-v2"] #asi-hero-wrapper{
            background:url('https://asf.scene7.com/is/image/ASF/spacer?fmt=png-alpha&opac=94&bgColor=238,47,52') top left repeat;
            padding:10px 0 15px 0;
            margin:0 0 0 0;
            width:420px;
        }
        [data-module-id="asi-fw-responsive-hero-v2"] .asi-content-body{ padding:0 0 0 0}
        [data-module-id="asi-fw-responsive-hero-v2"] #asi-hero-btn-wrap{padding-top:4% !important;}
        [data-module-id="asi-fw-responsive-hero-v2"] h2.asi-display-1{
            font-size:128px !important;
            color:white !important;
            letter-spacing:3;
            margin:0 auto;
            padding:3% 0 0 0;
            text-align:center;
        }
        [data-module-id="asi-fw-responsive-hero-v2"] p.asi-hero-message{
            font-family:'ProximaNova-Bold',sans-serif;
            font-size:26px;
            letter-spacing:3.7;
            line-height:32px;
            color:white;
        }
        [data-module-id="asi-fw-responsive-hero-v2"] p.asi-sub-lead {
            font-family: 'ProximaNova-Regular', sans-serif;
            font-size: 18px;
            color: #FFFFFF;
            letter-spacing: 0.72px;
            line-height: 24px;
            text-align:center;
            margin:0 auto 0 auto !important;
            padding:0 0 0 0;
            max-width:333px;
        }

        [data-module-id="asi-fw-responsive-hero-v2"] p.urgency-2{
            padding:3% 0 0 0;
            margin:0 auto 0 0.5em;
            text-align:center;
            font-family: 'ProximaNova-Regular', sans-serif;
            font-size: 24px;
            color: #FFFFFF;
            letter-spacing: 13.12px;
            line-height: 25px;
        }
        [data-module-id="asi-fw-responsive-hero-v2"] button.asi-mix-button.white:hover{background:#000000 !important;}
        
        @media screen and (max-width:768px){
            [data-module-id="asi-fw-responsive-hero-v2"] button.asi-mix-button {
                font-size:14px !important;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] .asi-mix-contents{
                background-position: center center!important;
                background-size:cover;
                padding-top:0;
                padding-bottom:0;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] #asi-hero-wrapper{
                width:420px;
                max-width:100%;
                margin-left:auto;
                margin-right:auto;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] .container{
                padding:2% !important;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] h2.asi-display-1{
                font-size:100px !important;
                letter-spacing:-2;
                margin:0 auto 0 auto;
                padding:0 0 0 0;
                text-align:center;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] p.urgency-2{
                padding:15px 0 10px 0;
                margin:0 auto 0 6px;
                font-family: 'ProximaNova-Regular', sans-serif;
                letter-spacing:8px;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] #asi-hero-btn-wrap{
                padding-top:15px !important;
            }
            [data-module-id="asi-fw-responsive-hero-v2"] p.asi-sub-lead {
                font-family: 'ProximaNova-Regular', sans-serif;
                font-size: 16px;
                color: #FFFFFF;
                letter-spacing:initial;
                line-height:18px !important;
                text-align:center;
                margin:0 auto 0 auto !important;
                padding:0 0 0 0;
                max-width:90%;
            }
        }
    </style>
    <div class="asi-element-spacer asi-sp-h-2 white"><!-- spacer !--></div>
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-416">
            <div id="asi-fluid-html-hero-v3"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fluid-html-hero-v3').asiHero({
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
            <style>
                #asi-fluid-html-hero-v3 .asi-section{
                    padding-top:0 !important;
                    padding-bottom:0 !important;
                }
                #asi-fluid-html-hero-v3 #asi-hero-wrapper{
                    background:url('https://asf.scene7.com/is/image/ASF/spacer?fmt=png-alpha&opac=90&bgColor=238,47,52') top left repeat !important;
                }
                #asi-fluid-html-hero-v3 p.asi-urgency-msg{
                    letter-spacing:0.25em !important;
                    font-size:20px !important;
                    line-height:22px;
                }
                #asi-fluid-html-hero-v3 h1.asi-display-1,
                #asi-fluid-html-hero-v3 h1{
                    padding-top:0 !important;
                    padding-bottom:0 !important;
                    font-size:80px !important;
                }
                #asi-fluid-html-hero-v3 p.asi-lead-sale-name{
                    font-family:'ProximaNova-Semibold',sans-serif !important;
                    color:black !important;
                    letter-spacing:0.25em !important;
                    font-size:24px !important;
                    line-height:28px !important;
                    padding:0 0;
                }
                #asi-fluid-html-hero-v3 p.asi-hero-message{
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
                    #asi-fluid-html-hero-v3 p.asi-hero-message{
                        max-width:78% !important;
                        font-size:24px !important;
                        line-height:26px;
                    }
                }
                @media screen and (max-width:480px){
                    
                    #asi-fluid-html-hero-v3 #asi-hero-wrapper{
                        padding:5% 5% !important;
                    }
                    #asi-fluid-html-hero-v3 p.asi-urgency-msg{
                        letter-spacing:0.1em !important;
                        font-size:16px !important;
                        line-height:18px;
                    }
                    #asi-fluid-html-hero-v3 p.asi-lead-sale-name{
                        letter-spacing:0.18em !important;
                        font-size:18px !important;
                        line-height:22px !important;
                    }
                    #asi-fluid-html-hero-v3 h1.asi-display-1,
                    #asi-fluid-html-hero-v3 h1{
                        padding-bottom:0 !important;
                        font-size:60px !important;
                    }
                    #asi-fluid-html-hero-v3 p.asi-hero-message{ 
                        font-size:18px !important;
                        line-height:24px !important;
                        letter-spacing:0em !important;
                        max-width:100% !important;
                        padding:0 5px 8px 5px !important;
                        font-weight:300 !important;
                    }   
                }
            </style>
        </div>
    </div>
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-416" id="asi-pe-2"> 
            <div id="asi-fixed-html-finance-banner-0"></div>
            <script type="text/javascript">
                /* FINANCE BANNER V2 - RED BG WHITE TEXT */
                $(function(){
                    $('#asi-fixed-html-finance-banner-0').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'responsive',
                        dataPosition : '2',
                        contentCol : 'col-md-12 col-sm-12 col-xs-12',
                        headlineText : '<div id="asi-plus-v1" style="margin:0 auto 15px auto;padding:0;position:relative;max-width:360px;" class="wow animated fadeIn" data-wow-delay=".75s" data-wow-duration="1s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 12"><title>asi-black-white-finance-plus</title><rect y="5.5" width="62" height="1"/><rect x="72.25" width="2" height="12" style="fill:#fff"/><rect x="67.25" y="5" width="12" height="2" style="fill:#fff"/><rect x="84" y="5.5" width="62" height="1"/></svg></div><h2 class="display-1 asi-display-1 text-center">36 MONTHS SPECIAL FINANCING</h2>',
                        messageSubText : 'when you use your Value Plus or Signature Plus credit card on purchases <br class="visible-lg">of $2,999 or more made between 8/1/17 - 8/21/17',
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
                            $('#asi-fixed-html-finance-banner-0 #asi-hero-wrapper').addClass('wow animated fadeIn').attr('data-wow-delay','.05').attr('data-wow-duration','.5s').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', nextAnimation());
                            function nextAnimation(){
                                $('#asi-fixed-html-finance-banner-0 h2').addClass('wow animated fadeInUp').attr('data-wow-delay','.5s');
                                $('#asi-fixed-html-finance-banner-0 p.asi-sub-lead').addClass('wow animated fadeInUp').attr('data-wow-delay','.75s');
                                $('#asi-fixed-html-finance-banner-0 .asi-mix-button').addClass('wow animated fadeIn').attr('data-wow-delay','1s').attr('data-wow-duration','.5s').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', $('#asi-fixed-html-finance-banner-0 .asi-content').removeClass('wow animated fadeIn fadeInUp'));
                            }
                        }
                    });
                });

                /* FINANCE BANNER V1 - WHITE BG BLACK TEXT */
                /*
                $(function(){
                    $('#asi-fixed-html-finance-banner-0').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'responsive',
                        dataPosition : '1',
                        contentCol : 'col-md-12 col-sm-12 col-xs-12',
                        headlineText : '<h2 class="display-1 asi-display-1 text-center">36 MONTHS SPECIAL FINANCING</h2>',
                        messageSubText : 'when you use your Value Plus or Signature Plus credit card on purchases <br class="visible-lg">of $2,999 or more made between 8/1/17 - 8/21/17',
                        textAlign : 'text-center',
                        fontColor : '#525050',
                        bgColorContent : '#ffffff',
                        paddingSection : '0px',
                        paddingContent : '25px',
                        addButton : 'true',
                        buttonText : 'GET DETAILS',
                        buttonClass : 'asi-mix-button asi-btn-outline white',
                        buttonLink : '/financing'
                    });
                });*/
            </script>
            <style>
                /* FINANCE BANNER V2 - RED BG WHITE TEXT CSS */
                #asi-fixed-html-finance-banner-0 .asi-mix-hero-wrapper{padding-bottom:0px;}
                #asi-fixed-html-finance-banner-0 .asi-divider-line{ background-color: #ffffff !important; }
                #asi-fixed-html-finance-banner-0 .display-1,
                #asi-fixed-html-finance-banner-0 .asi-display-1,
                #asi-fixed-html-finance-banner-0 h2 { color:white !important; font-size:80px !important; margin-bottom:12px !important;}
                #asi-fixed-html-finance-banner-0 p.asi-sub-lead{ max-width:80% !important;margin:0 auto;padding-bottom:10px !important; }
                #asi-fixed-html-finance-banner-0 #asi-mix-hero .asi-content-body { background-color:none !important; }
                #asi-fixed-html-finance-banner-0 .asi-btn-outline{border:2px solid white !important; background:#ffffff !important;color:#121212;}
                #asi-fixed-html-finance-banner-0 .asi-btn-outline:hover{background:#121212 !important;border:2px solid #121212 !important;color:white !important;}
                @media screen and (max-width:768px){
                    #asi-fixed-html-finance-banner-0 .asi-content-body{padding-top:0px !important;margin-top:0;}
                    #asi-fixed-html-finance-banner-0 #asi-mix-hero,
                    #asi-fixed-html-finance-banner-0 .asi-container{width:100% !important;}
                    #asi-fixed-html-finance-banner-0 .asi-section-content-wrapper{ padding-left:10px !important;padding-right:10px !important;}
                    #asi-fixed-html-finance-banner-0 p.asi-hero-sub-message{font-size:16px !important;line-height:1.425 !important;}
                    #asi-plus-v1{max-width:220px !important;}
                    #asi-fluid-html-hero-0 .asi-hero-wrapper, #asi-fluid-html-hero-0 .asi-section{padding-bottom:0px !important;}
                }
                @media screen and (max-width:480px){
                    #asi-fixed-html-finance-banner-0 h2.display-1,
                    #asi-fixed-html-finance-banner-0 h2.asi-display-1 {
                        font-size:54px !important;
                    }
                }

                /* FINANCE BANNER V1 - WHITE BG BLACK TEXT CSS */
                /*
                #asi-pe-2{background:#ffffff;}
                #asi-fixed-html-finance-banner-0 .asi-mix-hero-wrapper{padding-bottom:0px !important;}
                #asi-fixed-html-finance-banner-0 .asi-divider-line{ background-color: #EE3D42 !important; }
                #asi-fixed-html-finance-banner-0 .display-1,
                #asi-fixed-html-finance-banner-0 .asi-display-1,
                #asi-fixed-html-finance-banner-0 h2 { color:#121212 !important; font-size:90px !important; margin-bottom:12px !important;}
                #asi-fixed-html-finance-banner-0 p.asi-sub-lead{ max-width:80% !important;margin:0 auto;padding-bottom:10px !important; }
                #asi-fixed-html-finance-banner-0 #asi-mix-hero .asi-content-body { background-color:none !important; }
                #asi-fixed-html-finance-banner-0 .asi-btn-outline{border:2px solid #121212 !important; background:#ffffff;}
                #asi-fixed-html-finance-banner-0 .asi-btn-outline:hover{background:#cc0000 !important;border:2px solid #cc0000 !important;}
                @media screen and (max-width:480px){
                    #asi-fixed-html-finance-banner-0 h2.display-1,
                    #asi-fixed-html-finance-banner-0 h2.asi-display-1 {
                        font-size:54px !important;
                    }
                }*/
            </style>
        </div>
    </div>
    <div class="row-fluid home-content-row clearfix"></div>
        <!-- asi-mattress-sleep-guarantee-bg.png !-->
        <!--
        <div id="asi-sleep-guarantee"></div>
        <script>
        $(function(){
            $('#asi-sleep-guarantee').asiHero({
                layout : 'fixed',
                responsiveMode : 'responsive',
                dataPosition : '3',
                contentCol : 'col-md-12 col-sm-12 col-xs-12',
                urgencyText : 'CATCH EVERY Z',
                headlineText : '<div class="asi-divider" style="padding-top:20px!important;padding-bottom:20px!important;"><div class="asi-divider-line" style="background:#ee3d42;width:60px;"></div></div><h3 style="color:white;" class="display-1 asi-display-1 text-center">120 NIGHT SLEEP GUARANTEE</h3>',
                messageSubText : 'Try-out your new mattress for up to 120 nights. If you don&rsquo;t absolutely love it&comma; we&rsquo;ll give you in-store credit equal to the original purchase price.',
                textAlign : 'text-center',
                bgImage : 'https://asf.scene7.com/is/image/ASF/asi-mattress-sleep-guarantee-bg?qlt=86,1',
                fontColor : '#FFFFFF',
                paddingSection : '0px',
                paddingContent : '20px',
                addButton : 'true',
                buttonText : 'LEARN MORE',
                buttonClass : 'asi-mix-button asi-btn-outline white',
                buttonLink : '#sleep-guarantee-modal',
                complete: function(){ 
                    console.log('asi sleep guarantee loaded');
                    $('#asi-sleep-guarantee #asiHero-button-link').attr('data-toggle','modal');
                }
            });
        });
        </script>
        -->
        <!-- BEGIN: ASI 120 Night Slee Guarantee Details Modal -->
        <!--
        <div class="modal fade" id="sleep-guarantee-modal" tabindex="-1" role="dialog" aria-labelledby="sleepGuaranteeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:24px;opacity:.6;">×</button>
                        <h4 class="modal-title">120 Night Sleep Guarantee</h4>
                    </div>
                    <div class="modal-body">
                        <p style="font-size:13px;">Valid on qualifying Beautyrest Silver, Platinum, Black and Silver Hybrid mattress sets, Serta iComfort, iComfort Hybrid and Perfect Sleeper mattress sets. Conditions: (1.) a mattress protector must be purchased on your original receipt and installed before use; (2.) must sleep on mattress a minimum of 30 nights; (3.) customer is responsible for returning the mattress to the store within 120 days from date of delivery or pick up; (4.) refund will be provided as in-store credit only. Limit one return or exchange per customer. Guarantee excludes delivery or re-delivery charges, adjustable bases, and accessories (pillows, mattress protectors, pillow protectors, and sheets), which are all non-refundable. Stained or otherwise damaged mattresses will not be accepted. Valid for new mattress sets only in any U.S. state where mattress set is sold. Void where prohibited by law.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0 !important;font-size:16px;letter-spacing:1px;">Close</button>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- END: ASI 120 Night Slee Guarantee Details Modal -->

        <!--
        <style>
            #asi-sleep-guarantee p.asi-hero-sub-message{ max-width:60%;margin:0 auto; padding:0; text-align:center; }
            #asi-sleep-guarantee #asi-mix-hero{width:100% !important;display:block;margin:0;padding:0;}
            #asi-sleep-guarantee .asi-mix-button{color:white !important;}
            #asi-sleep-guarantee .asi-mix-button:hover{color:#f4f4f4 !important;background:url('https://asf.scene7.com/is/image/ASF/spacer-blk?fmt=png-alpha&opac=30') top left repeat !important;}
            #sleep-guarantee-modal .modal-dialog{width:640px;}
            @media screen and(max-width:768px){
                #asi-sleep-guarantee p.asi-hero-sub-message{ max-width:100%;}
                #sleep-guarantee-modal .modal-dialog{width:70%;max-width:520px;}
            }
        </style>
        -->
    <!--
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-416a" id="asi-pe-4">
            <div id="asi-pe-html-mix-banner-1"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-pe-html-mix-banner-1').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'responsive',
                        dataPosition : '3',
                        urgencyText: '<h3 class="asiH3 asi-h3 display-1 asi-display-1 text-center text-uppercase asi-white">YOU CAN&rsquo;T GO WRONG <span class="hidden-sm hidden-xs"><br></span>WITH MADE TO MIX FURNITURE</h3>',
                        contentCol : 'col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0',
                        headlineText : '<div class="asi-divider" style="padding-top:2.5%!important;padding-bottom:3%!important;"><div class="asi-divider-line" style="background:red;width:45px;"></div></div>',
                        messageText : 'Every piece of our made to mix furniture and accessories has been curated so that anything goes with anything, and always produces a beautiful result.',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/CM_1840169?qlt=60,1&wid=1180&hei=850&scl=3',
                        bgColorContent : 'none',
                        paddingSection : '0px',
                        paddingContent : '8% 15px',
                        addButton : 'true',
                        buttonText : 'EXPLORE MIX',
                        buttonClass : 'asi-mix-button red',
                        buttonLink : '/made-to-mix',
                        complete: function(){
                            $('#asi-pe-html-mix-banner-1 .asi-row').before('<div id="asi-mix-gradient"></div>');
                            $('#asi-pe-html-mix-banner-1 #asi-mix-gradient').css({'position':'absolute','width':'100%','height':'100%','z-index':'0'}).addClass('asi-gradient-overlay-dark-1 asi-gradient');
                        }
                    });
                });
            </script>
        </div>
    </div>
    <style>   
    #asi-pe-html-mix-banner-1 .asi-section{padding-bottom:0px !important;margin-top:2%;}
    #asi-pe-html-mix-banner-1 .asi-gradient-overlay-dark-1{        
        background: rgba(18,18,18,0.08);
        background: -moz-linear-gradient(top, rgba(18,18,18,0.08) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(18,18,18,0.75)), color-stop(66%, rgba(18,18,18,0.55)), color-stop(100%, rgba(19,19,19,0.8)));
        background: -webkit-linear-gradient(top, rgba(18,18,18,0.08) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -o-linear-gradient(top, rgba(18,18,18,0.08) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -ms-linear-gradient(top, rgba(18,18,18,0.08) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: linear-gradient(to bottom, rgba(18,18,18,0.08) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#131313', GradientType=0 );
    }
    #asi-pe-html-mix-banner-1 .asi-sub-lead {padding-top:8px !important;}
    #asi-pe-html-mix-banner-1 .asi-hero-message{padding-left:4%; padding-right:4%;}
    #asi-pe-html-mix-banner-1 .asi-mix-button { border:2px solid ##EE3D42 !important;margin-top:2%; }
    #asi-pe-html-mix-banner-1 #asi-hero-btn-wrap button{padding-top:12px !important;padding-bottom:12px !important;}
    #asi-pe-html-mix-banner-1 {padding-top:25px;}
    @media screen and (max-width:768px){
        #asi-pe-html-mix-banner-1 {padding-top:0px;margin-top:0;}
        #asi-pe-html-mix-banner-1 .asi-hero-message{padding-left:2%; padding-right:2%;}
        #asi-pe-html-mix-banner-1 h3{font-size:36px !important;padding:0 10px !important;letter-spacing:1px;line-height:38px !important;}
    }
    </style>
    -->

    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-416a" id="asi-pe-4"> 
            <div id="asi-pe-html-mix-banner"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-pe-html-mix-banner').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'responsive',
                        dataPosition : '3',
                        urgencyText: '<h3 class="asiH1 asi-h1 display-1 asi-display-1 text-center asi-white text-uppercase">MIX<br></h3>',
                        contentCol : 'col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0',
                        headlineText : '<div class="asi-divider" style="padding-top:2%!important;padding-bottom:4%!important;"><div class="asi-divider-line" style="background:red;width:45px;"></div></div>',
                        messageText : '&mdash;verb (to mix), mixed or mixt, mix•ing<br>1. To create your own unique space using any combination of endless possibilities from within our MADE TO MIX family of furniture.',
                        textAlign : 'text-center',
                        fontColor : '#FFFFFF',
                        bgImage : 'https://asf.scene7.com/is/image/ASF/CM_1840169?qlt=60,1&wid=1180&hei=850&scl=3',
                        bgColorContent : 'none',
                        paddingSection : '0px',
                        paddingContent : '8% 15px',
                        addButton : 'true',
                        buttonText : 'EXPLORE MIX',
                        buttonClass : 'asi-mix-button red',
                        buttonLink : '/made-to-mix',
                        complete: function(){
                            $('#asi-pe-html-mix-banner .asi-row').before('<div id="asi-mix-gradient"></div>');
                            $('#asi-pe-html-mix-banner #asi-mix-gradient').css({'position':'absolute','width':'100%','height':'100%','z-index':'0'}).addClass('asi-gradient-overlay-dark asi-gradient');
                        }
                    });
                });
            </script>
        </div>
    </div>
    <style>   
    #asi-pe-html-mix-banner .asi-section{padding-bottom:0px !important;}
    #asi-pe-html-mix-banner .asi-gradient-overlay-dark{        
        background: rgba(18,18,18,0.03);
        background: -moz-linear-gradient(top, rgba(18,18,18,0.03) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(18,18,18,0.03)), color-stop(66%, rgba(18,18,18,0.55)), color-stop(100%, rgba(19,19,19,0.8)));
        background: -webkit-linear-gradient(top, rgba(18,18,18,0.03) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -o-linear-gradient(top, rgba(18,18,18,0.03) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -ms-linear-gradient(top, rgba(18,18,18,0.03) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: linear-gradient(to bottom, rgba(18,18,18,0.03) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#131313', GradientType=0 );
    }
    #asi-pe-html-mix-banner h3{letter-spacing:2px !important;font-size:104px;}
    #asi-pe-html-mix-banner .asi-sub-lead {padding-top:8px !important;}
    #asi-pe-html-mix-banner .asi-mix-button { border:2px solid #EE3D42 !important;margin-top:2%; }
    #asi-pe-html-mix-banner #asi-hero-btn-wrap button{padding-top:12px !important;padding-bottom:12px !important;}
    #asi-pe-html-mix-banner {padding-top:25px;}
    @media screen and (max-width:768px){
        #asi-pe-html-mix-banner .asi-gradient-overlay-dark{        
            background: rgba(0,0,0,0.2);
            background: -moz-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,0,0,0.2)), color-stop(100%, rgba(0,0,0,0.75)));
            background: -webkit-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
            background: -o-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
            background: -ms-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=0 );
        }
        #asi-pe-html-mix-banner {padding-top:0px;}
    }
    </style>
    <!--[if gte IE 9]<style type="text/css">.asi-gradient {filter: none;}</style><![endif]-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-416c" id="asi-pe-4-2">
            <div id="asi-pe-html-mix-banner-2"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-pe-html-mix-banner-2').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'responsive',
                        dataPosition : '3',
                        urgencyText: 'YOUR HOUSE. YOUR RULES.',
                        divider: 'true',
                        contentCol : 'col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0',
                        headlineText : '<h3 class="asiH1 asi-h1 display-1 asi-display-1 text-uppercase asi-white">MIX IT.<br><span class="asi-mix-parens" style="font-family:sans-serif !important;font-weight:300 !important;">(</span>UN<span class="asi-mix-parens" style="font-family:sans-serif !important;font-weight:300 !important;">)</span>MATCH IT.<br>MAKE IT YOU.</h3>',
                        /*messageText : 'Every piece of our made to mix furniture and accessories has been curated so that anything goes with anything, and always produces a beautiful result.',*/
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
                            $('#asi-pe-html-mix-banner-2 .asi-row').before('<div id="asi-mix-gradient"></div>');
                            $('#asi-pe-html-mix-banner-2 #asi-mix-gradient').css({'position':'absolute','width':'100%','height':'100%','z-index':'0'}).addClass('asi-gradient-overlay-dark asi-gradient');
                            $('#asi-pe-html-mix-banner-2 #asi-hero-btn-wrap').css({'margin':'0 0','text-align':'left'});
                        }
                    });
                });
            </script>
        </div>
    </div>
    <style>   
    #asi-pe-html-mix-banner-2 .asi-section{padding-bottom:0px !important;margin-top:2%; margin-bottom:2%;}
    #asi-pe-html-mix-banner-2 .asi-gradient-overlay-dark{
        background: rgba(18,18,18,0.75);
        background: -moz-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(18,18,18,0.8)), color-stop(80%, rgba(18,18,18,0)));
        background: -webkit-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
        background: -o-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
        background: -ms-linear-gradient(left, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
        background: linear-gradient(to right, rgba(18,18,18,0.8) 0%, rgba(18,18,18,0) 80%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#121212', GradientType=1 );
    }
    #asi-pe-html-mix-banner-2 .asi-display-1{line-height:1 !important;}
    #asi-pe-html-mix-banner-2 .asi-divider-line{background:#ee3d42 !important;text-align:left !important;margin-left:2px !important;margin-right:0 !important;}
    #asi-pe-html-mix-banner-2 .asi-sub-lead {padding-top:8px !important;}
    #asi-pe-html-mix-banner-2 .asi-hero-message{padding-left:4%; padding-right:4%;}
    #asi-pe-html-mix-banner-2 .asi-mix-button { margin-top:0;background:none; border:2px solid #ffffff !important; color:#ffffff !important; }
    #asi-pe-html-mix-banner-2 .asi-mix-button:hover{background:#ffffff;color:#525050!important;}
    #asi-pe-html-mix-banner-2 #asi-hero-btn-wrap button{padding-top:15px !important;padding-bottom:14px !important;}
    #asi-pe-html-mix-banner-2 {padding-top:25px;}
    span.asi-mix-parens{font-family:Arial, Helvetica, sans-serif !important; font-weight:300 !important;}
    @media screen and (max-width:768px){
        #asi-pe-html-mix-banner-2 .asi-mix-contents{background-position:top right -6.5em !important;}
        #asi-pe-html-mix-banner-2 {padding-top:0px;margin-top:0;}
        #asi-pe-html-mix-banner-2 h3{font-size:45px !important;padding:0 0 !important;letter-spacing:1px;line-height:38px !important;}
        #asi-pe-html-mix-banner-2 .asi-mix-button{padding-left:20px !important;padding-right:20px !important;}
        #asi-pe-html-mix-banner-2 .asi-mix-contents{width:100% !important;}
        #asi-pe-html-mix-banner-2 .asi-gradient-overlay-dark{
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
    </style>
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-416b" id="asi-pe-3">
            <div class="section asi-section" style="background:#f4f4f4 !important;padding-top:4%;">
                <div class="asi-container container" style="padding-left: 10px!important; padding-right: 10px!important; text-align:center;margin:0 auto;width:100%;max-width:1200px">
                    <h3 class="asi-section-title asi-display-2 asi-black text-center text-uppercase fix-title hidden-sm hidden-xs">POW! THESE DEALS ARE HOT NOW</h3>
                    <div class="asi-section-subtitle"><span class="asi-heading-rule-text" style="background:none !important;color:#525050 !important;">SHOP SALES BY CATEGORY</span></div>
                </div>
            </div>
            <div class="section asi-section" style="background:#f4f4f4 !important;padding-top:0;">
                <div class="asi-container container" style="padding-left: 10px!important; padding-right: 10px!important; text-align:center;margin:0 auto;width:100%;max-width:1200px">
                    <div class="row asi-row">
                        <div class="col-md-6 col-sm-6 col-xs-12 card-type">
                            
                            <!-- Media, Title, and Description area -->
                            <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
                                
                                <div class="pmd-card-media">
                                    <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-made-to-mix-hero-1.jpg" alt="10%-off-mix-living-room-furniture">
                                </div>
                                
                                <!-- Card header -->
                                <div class="pmd-card-title text-center">
                                    <h3 class="pmd-card-title-text asi-display-1">10% OFF</h3>
                                    <p class="lead asi-lead">MIX LIVING</p>
                                    <a href="#" class="asi-mix-button pmd-btn-flat">LIVING ROOMS ON SALE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 card-type">
                            
                            <!-- Media, Title, and Description area -->
                            <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
                                
                                <!-- Card media -->
                                <div class="pmd-card-media">
                                    <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-made-to-mix-hero-1.jpg" alt="10%-off-mix-bedroom-furniture">
                                </div>
                                
                                <!-- Card header -->
                                <div class="pmd-card-title text-center">
                                    <h3 class="pmd-card-title-text asi-display-1">10% OFF</h3>
                                    <p class="lead asi-lead">MIX BEDROOM</p>
                                    <a href="#" class="asi-mix-button pmd-btn-flat">BEDROOMS ON SALE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row asi-row">
                        <div class="col-md-6 col-sm-6 col-xs-12 card-type">
                            
                            <!-- Media, Title, and Description area -->
                            <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
                                
                                <div class="pmd-card-media">
                                    <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-made-to-mix-hero-1-md.jpg" alt="category-promo-spot-3-alt-text">
                                </div>
                                
                                <!-- Card header -->
                                <div class="pmd-card-title text-center">
                                    <h3 class="pmd-card-title-text asi-display-1">10% OFF</h3>
                                    <p class="lead asi-lead">MIX DINING</p>
                                    <a href="#" class="asi-mix-button pmd-btn-flat">DINING ROOMS ON SALE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 card-type">
                            
                            <!-- Media, Title, and Description area -->
                            <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
                                
                                <!-- Card media -->
                                <div class="pmd-card-media">
                                    <img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-made-to-mix-hero-1-md.jpg" alt="category-promo-spot-4-alt-text">
                                </div>
                                
                                <!-- Card header -->
                                <div class="pmd-card-title text-center">
                                    <h3 class="pmd-card-title-text asi-display-1">10% OFF</h3>
                                    <p class="lead asi-lead">MIX ACCENTS</p>
                                    <a href="#" class="asi-mix-button pmd-btn-flat">ACCENTS ON SALE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .pmd-card-custom-view{border-radius:0 !important;padding-top:0 !important;padding-bottom:10px!important;margin-bottom:10px !important;}
        .asi-display-2, h3.asi-display-2 { color:#121212; }
        #pe-type-id-416b .asi-heading-rule-text{font-size:1.125em !important;}
        .pmd-z-depth-1 {
            box-shadow: 0 3px 6px #CCCCCC, 0 3px 6px #EEEEEE;
        }
        @media screen and (max-width:768px){
            #pe-type-id-416b .asi-section-subtitle,
            #pe-type-id-416b .asi-heading-rule-text{font-size:24px !important;}
            .pmd-card-custom-view .pmd-card-title{padding-left:6px; padding-right:6px;} 
        }
    </style>
    
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-417a"> 
            <div id="asi-fixed-adaptive-img-hero" style="padding-top:10%;"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-adaptive-img-hero').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'adaptive',
                        dataPosition : '10',
                        adaptiveImg : {
                            'img-link' : '/search/30-off',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/Banner_MH_UI_30_Off?fmt=png',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/Banner_MH_UI_30_Off?fmt=png',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/Banner_M_MH_UI_30_Off?fmt=png',
                            'src' : 'https://asf.scene7.com/is/image/ASF/Banner_M_MH_UI_30_Off?fmt=png'
                        },
                        complete: function(){ console.log('asi adaptive hero compiled')}
                    });
                });
            </script>
            <style>
                .pe-type-id-417a .asi-section{padding-top:4% !important;}
            </style>
        </div>
    </div>
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
                        buttonLink : 'on-sale',
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
                            'img-link' : 'on-sale',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=1920',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/M_SALE_06WK5Y17?fmt=jpg&qlt=85,1',
                            'src' : 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1'
                        }
                    });
                });
            </script>
            <div id="asi-adaptive-img-hero-2"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-adaptive-img-hero-2').asiHero({
                        layout : 'fluid',
                        responsiveMode : 'adaptive',
                        dataPosition : '0',
                        adaptiveImg : {
                            'img-link' : '/custom-furniture',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/cp-kroehler-custom-599-d-hero?fmt=jpg&qlt=85,1&wid=1920',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/cp-kroehler-custom-599-d-hero?fmt=jpg&qlt=85,1',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/cp-kroehler-custom-599-m-hero?fmt=jpg&qlt=85,1',
                            'src' : 'https://asf.scene7.com/is/image/ASF/cp-kroehler-custom-599-d-hero?fmt=jpg&qlt=85,1'
                        }
                    });
                });
            </script>
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
                        buttonLink : 'on-sale'
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
            <div id="asi-fixed-adaptive-img-hero-1"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-adaptive-img-hero-1').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'adaptive',
                        dataPosition : '2',
                        adaptiveImg : {
                            'img-link' : '/search/30-off',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/Banner_MH_UI_30_Off?fmt=png',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/Banner_MH_UI_30_Off?fmt=png',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/Banner_M_MH_UI_30_Off?fmt=png',
                            'src' : 'https://asf.scene7.com/is/image/ASF/Banner_M_MH_UI_30_Off?fmt=png'
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
                        offerContentImg: '<a href="on-sale" target="_self"><img src="/images/07WK2Y17_Hero_Offer_Box.png" class="img-responsive" alt="overstocks up to 30% off your order of $999 or more shop now"></a>',
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
                        offerContentImg: '<a href="on-sale" target="_self"><img src="/images/07WK2Y17_Hero_Offer_Box.png" class="img-responsive" alt="overstocks up to 30% off your order of $999 or more shop now"></a>',
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
        </div>
    </div>
    <div id="asi-getaway-lr-hero"></div>
    <script type="text/javascript">
        $(function(){
            $('#asi-getaway-lr-hero').asiHero({
                layout : 'fluid',
                responsiveMode : 'responsive',
                dataPosition : '0',
                divider : 'true',
                contentCol : 'col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12',
                urgencyText : 'GROOM YOUR LIVING ROOM',
                headlineText : '<h1 class="asiH1 asi-h1 display-1 asi-display-1">10% OFF MIX</h1>',
                messageText : 'CUSTOM UPHOLSTERY COLLECTIONS',
                messageSubText : 'MAKE IT YOU AND SAVE',
                textAlign : 'text-center',
                fontColor : '#FFFFFF',
                bgImage : 'https://asf.scene7.com/is/image/ASF/asi-getaway-banner-lr-bg.jpg',
                bgColorContent : 'none',
                paddingSection : '0px',
                paddingBody : '12% 15px',
                paddingContent : '25px',
                addButton : 'false'
            });
        });
    </script>
                <!-- bgImage : 'images/asi-hp-hero-mix-moda-sectional.png' !-->
    <!--            
    <style>
        #asi-getaway-lr-hero .asi-mix-contents{background-position:center center !important;}
        #asi-getaway-lr-hero .asi-mix-hero-wrapper{padding-bottom:0px !important;}
        #asi-getaway-lr-hero .asi-content-body{ padding:0px !important;}
        #asi-getaway-lr-hero #asi-hero-btn-wrap{padding-top:4% !important;}
        #asi-getaway-lr-hero .asi-mix-contents h1.asi-display-1{font-size:96px !important;}
        #asi-getaway-lr-hero p.asi-hero-message{font-weight:400 !important;}
        #asi-getaway-lr-hero p.asi-sub-lead {
            font-size: 15px !important;
            letter-spacing: inherit !important;
            font-family: 'ProximaNova-Regular', sans-serif !important;
            padding: 5px 10px;
            text-align:center;
            margin:0 auto !important;
            max-width:350px;
        }
        @media screen and (min-width:768px){
            #asi-getaway-lr-hero .asi-content-body{ padding:10px !important;}
            #asi-getaway-lr-hero #asi-hero-wrapper{padding:15px 10px !important;}
            #asi-getaway-lr-hero .asi-mix-contents h1.asi-display-1{font-size:120px !important;}
        }
        @media screen and (min-width:992px){
            #asi-getaway-lr-hero #asi-content-col { max-width:960px; }
            #asi-getaway-lr-hero .asi-content-body{ padding:25px 15px 35px 15px !important;}
            #asi-getaway-lr-hero #asi-hero-wrapper{padding:40px 0px!important;}
        }
        @media screen and (min-width:1200px){
            #asi-getaway-lr-hero #asi-content-col { padding-left:0 !important;max-width:1180px; }
            #asi-getaway-lr-hero .asi-content-body{ padding:8% 0px 8% 0px !important;}
            #asi-getaway-lr-hero #asi-hero-wrapper{padding:40px 0px!important;}
        }
    </style>
    !-->
    <!-- Home-row-2 -->
    <div class="row-fluid home-content-row clearfix">
        <div></div>
    </div>

    <!-- Home-row-3 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-419">
            <div></div>
        </div>
    </div>

    <!-- Home-row-4 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-420">
            <div></div>
        </div>
    </div>

    <!-- Home-row-5 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-421">
            <div></div>
        </div>
    </div>

    <!-- Home-row-6 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-422">
            <div></div>
        </div>
    </div>

    <!-- Home-row-7 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-423">
            <div></div>
        </div>
    </div>

    <!-- Home-row-8 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-424">
            <div></div>
        </div>
    </div>

    <!-- Home-row-9 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-425">
            <div></div>
        </div>
    </div>

    <!-- Home-row-10 -->
    <!--
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-426">
            <div id="component-example">
                <my-component></my-component>
            </div>
        </div>
    </div>
    <script>
        // register
        Vue.component('my-component', {
          template: '<div>A CUSTOM VUE.JS COMPONENT!</div>'
        })
        // create a root instance
        new Vue({
          el: '#component-example'
        })
    </script>
    -->
    <!-- Home-row-11 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-427">
            <div id="asi-fixed-adaptive-mhf-hero"></div>
            <script type="text/javascript">
                $(function(){
                    $('#asi-fixed-adaptive-mhf-hero').asiHero({
                        layout : 'fixed',
                        responsiveMode : 'adaptive',
                        dataPosition : '10',
                        adaptiveImg : {
                            'img-link' : '/search/magnolia-home',
                            'data-lrg' : 'https://asf.scene7.com/is/image/ASF/HP_Banner_MH_30-OFF_V2?fmt=png',
                            'data-med' : 'https://asf.scene7.com/is/image/ASF/HP_Banner_MH_30-OFF_V2?fmt=png',
                            'data-sml' : 'https://asf.scene7.com/is/image/ASF/HP_Banner_M_MH_30-OFF_V2?fmt=png',
                            'src' : 'https://asf.scene7.com/is/image/ASF/HP_Banner_MH_30-OFF_V2?fmt=png'
                        },
                        complete: function(){ console.log('asi adaptive mhf hero compiled')}
                    });
                });
            </script>
        </div>
    </div>

    <!-- Home-row-12 -->
    
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-428">
            <!--
            <div class="asi-container" style="width:100%;max-width:1200px;padding:10px;border:1px solid #121212;">
                <div class="asi-mix-contents" style="position:relative;width:100%;height:auto;padding:0;margin:0;">
                    <div class="row" style="margin:0;padding:0;">
                        <div class="col-md-8 col-sm-12 col-xs-12 asi-flex-col" style="min-height:300px;margin:0;padding:0;background:#CCC;">
                            <div class="asi-flex-item asi-flex-1" style="width:100%;height:100%;padding:0 5px 0 0;margin:0;position:relative;background:#000;opacity:.5;">
                                <p class="asi-white">BOX 1</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 asi-flex-col" style="min-height:150px;height:auto;background:#a5a5a5;margin:0;padding:0;">
                            <div class="row" style="margin:0;padding:0;">
                                <div class="col-md-12 col-sm-6 col-xs-6 asi-flex-col" style="min-height:150px;max-height:50%;background:#CCC;padding:0;margin:0;">
                                    <div class="asi-flex-item asi-flex-2" style="width:100%;height:100%;padding:0 0 0 5px;margin:0;position:relative;background:#000;">
                                        <p class="asi-white">BOX 2</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-6 asi-flex-col" style="min-height:150px;max-height:50%;background:#CCC;padding:0;margin:0;">
                                    <div class="asi-flex-item asi-flex-3" style="width:100%;height:100%;padding:0 0 0 5px;margin:0;position:relative;background:#000;">
                                        <p class="asi-white">BOX 3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <ul class="asi-grid-wrapper">   
                <li class="asi-grid-featured">
                    <img class="img-responsive" src="/images/balloon4.jpg" alt="hot air balloon">
                </li>
                <li>
                    <img class="img-responsive" src="/images/balloon2.jpg" alt="hot air balloon">
                </li>
                <li>
                    <img class="img-responsive" src="/images/balloon8.jpg" alt="hot air balloon">
                </li>
            </ul>
        </div>
    </div>
    <style>
        .asi-grid-wrapper {
            list-style: none;
            margin: 0 auto 0 auto;
            padding: 0;
            display: grid;
            max-width: 1180px;
            grid-template-columns: 1fr;   
            grid-template-rows: auto;
            grid-auto-flow: dense;
        }

        .asi-grid-wrapper {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        } 

        .asi-grid-featured {
            grid-column: 1 / 4;
            grid-row: 1 / 3;
        }

        .asi-grid-wide {
            grid-column: auto / span 2;
        }
        
        .asi-grid-wrapper li {
            margin: 5px;
            background:#efefea;
            padding:0px;
        }

        @media (max-width: 768px) {
            .asi-grid-wrapper {
                grid-template-columns: 1fr 1fr;
            } 

            .asi-grid-featured {
                grid-column: 1 / 3;

            }
         }  
    </style>
    <!-- Home-row-13 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-429">
            <div></div>
        </div>
    </div>

    <!-- Home-row-14 -->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-430">
            <div class="asi-container owl-carousel owl-theme" style="background:#f4f4f4; padding:10px 0px !important;width:100%;max-width:1180px">
                <div class="item" data-hash="one"><h4>1</h4></div>
                <div class="item" data-hash="two"><h4>2</h4></div>
                <div class="item" data-hash="three"><h4>3</h4></div>
                <div class="item" data-hash="four"><h4>4</h4></div>
                <div class="item" data-hash="five"><h4>5</h4></div>
                <div class="item" data-hash="six"><h4>6</h4></div>
                <div class="item" data-hash="seven"><h4>7</h4></div>
                <div class="item" data-hash="eight"><h4>8</h4></div>
                <div class="item" data-hash="nine"><h4>9</h4></div>
                <div class="item" data-hash="ten"><h4>10</h4></div>
                <div class="item" data-hash="eleven"><h4>11</h4></div>
                <div class="item" data-hash="twelve"><h4>12</h4></div>
            </div>
        </div>
        <style>
        .owl-carousel .item {
            background:#ccc;
        }
        </style>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                URLhashListener:true,
                autoplayHoverPause:true,
                startPosition: 'URLHash',
                responsive:{
                    0:{
                        items:3,
                        nav:false,
                        center:true,
                        dots:true
                    },
                    769:{
                        items:4,
                        nav:false,
                        stagePadding:10
                    },
                    991:{
                        items:5,
                        nav:true,
                        dots:false,
                        stagePadding:10
                    }
                }
            });
        </script>
    </div>

<!-- ORGANIC MODULE :: ASI-20 - Feature Image Module !-->
<div class="asi-feature-image" style="background-image:url(https://asf.scene7.com/is/image/ASF/asi-hp-hero-mix-sebring-lrs.jpg) !important;">
    <div class="asi-feature-image-message">
        <div class="asi-feature-image-headlines">
            <div class="asi-feature-image-message-headline">MAKE IT YOU.</div>
            <a href="javascript:void(0)" class="asi-feature-image-message-subheadline">Explore and customize our latest arrivals</a>
        </div>
        <a href="javascript:void(0)" class="asi-feature-clickable-area"></a>
        <div class="asi-feature-image-message-link">
            <a href="javascript:void(0)">SHOP THIS ROOM &nbsp;<img class="asi-arrow-icon" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Arrow_Icon_White.svg"></a>
        </div>
    </div>
</div>
<!-- END // ASI-20 - Feature Image Module !-->

<!-- ORGANIC MODULE :: ASI-114 - Promo Module !-->
<div class="asi-promo-module">
    <div class="asi-promo-module-content asi-container">
        <div class="asi-promo-module-headline">
          <!-- <span class="asi-red-text">12 Months</span> Special Financing Available. !-->
          <span>12 MONTHS SPECIAL FINANCING</span> 
          <div class="asi-red-separator"></div>
        </div>
        <div class="asi-promo-module-text">
            On orders of $999 or more with your Value Plus 
            or Signature Plus credit card on qualifying 
            orders made between 8/21/17 - 8/28/17.
        </div>
        <div class="asi-promo-module-button-container">
            <button class="asi-mix-button red">GET DETAILS</button>
        </div>
    </div>
</div>
<!-- END // ASI-114 - Promo Module !-->


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
