<?php include_once('asiSiteHeader.php'); ?>
<?php include_once('asiSiteTopNavigation.php'); ?>
<div id="custom-page-body">
<!-- **** asiHero.css & asiHero.js :: YOU MUST INCLUDE THIS FILE FOR THE PLUGIN **** !-->
    <link rel="stylesheet" type="text/css" href="css/asi-plugins/asiContentBuilder.css"/>
    <script type="text/javascript" src="/js/asi-plugins/jquery.asiContentBuilder.js"></script>
<!-- END : REQUIRED for ASIHERO PLUGIN !-->

    <div id="asi-fluid-html-hero-0"></div>
    <script type="text/javascript">
        /*
        $(function(){
            $('#asi-fluid-html-hero-0').asiHero({
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
                buttonLink : '/search/on-sale',
                complete: function(){ console.log('asi fluid html hero compiled')}
            });
        });
        */
        $(function(){
            $('#asi-fluid-html-hero-0').asiHero({
                layout : 'fluid',
                responsiveMode : 'responsive',
                dataPosition : '0',
                divider : 'false',
                urgencyText: '<div id="hero-offer-logo"><img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/asi-mtm-alpha-logo?fmt=png-alpha" alt="made to mix furniture logo" style="max-width:165px !important;"></div>',
                contentCol : 'col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0',
                headlineText : '<p class="lead text-center text-uppercase" style="color:#ffffff;font-size:2rem;letter-spacing:0.75rem;padding-top:0;padding-bottom:0;margin:0 auto;">ON SALE NOW</p><h1 class="asiH1 asi-h1 display-1 asi-display-1">10% OFF<br></h1>',
                messageText : 'MADE TO MIX FURNITURE',
                messageSubText : '<div class="asi-divider" style="padding-top:2%!important;padding-bottom:3%!important;"><div class="asi-divider-line" style="background:white;width:45px;"></div></div>Discount applies to (UN)TRADITIONAL and MODERN(ISH) Collections. No minimum purchase.',
                textAlign : 'text-center',
                fontColor : '#FFFFFF',
                bgImage : 'images/asi-hp-hero-mix-moda-sectional.png' /*'https://asf.scene7.com/is/image/ASF/moda-sofa-mushroom-rm-alt1?qlt=86,1&crop=28,377,1280,600&anchor=668,677'*/,
                bgColorContent : 'none',
                paddingSection : '0px',
                //paddingBody : '7% 15px 12% 15px',
                paddingContent : '40px 18px',
                addButton : 'true',
                buttonText : 'SHOP NOW',
                buttonClass : 'asi-mix-button red',
                buttonLink : '/search/on-sale',
                complete: function(){ console.log('asi fluid html hero compiled')}
            });
        });
    </script>

    <style>
        #asi-fluid-html-hero-0 #asi-mix-hero{background-position:center center !important;}
        #asi-fluid-html-hero-0 .asi-mix-hero-wrapper{padding-bottom:0px !important;}
        #asi-fluid-html-hero-0 #hero-offer-logo{position:relative;width:100%;padding:15px 0 12% 0;margin:0 auto;text-align:center;}
        #asi-fluid-html-hero-0 #asi-hero-wrapper{background:url('https://asf.scene7.com/is/image/ASF/spacer-blk?fmt=png-alpha&opac=96') top left repeat !important;}
        #asi-fluid-html-hero-0 .asi-content-body{ padding:0px !important;}
        #asi-fluid-html-hero-0 #asi-hero-btn-wrap{padding-top:4% !important;}
        #asi-fluid-html-hero-0 #asi-mix-hero h1.asi-display-1{font-size:96px !important;}
        #asi-fluid-html-hero-0 p.asi-hero-message{font-weight:400 !important;}
        #asi-fluid-html-hero-0 p.asi-sub-lead {
            font-size: 15px !important;
            letter-spacing: inherit !important;
            font-family: 'ProximaNova-Regular', sans-serif !important;
            padding: 5px 10px;
            text-align:center;
            margin:0 auto !important;
            max-width:350px;
        }
        button.asi-mix-button.red:hover{background:#CC0000 !important;}
        @media screen and (max-width:480px){
            #asi-fluid-html-hero-0 .asi-divider,
            #asi-fluid-html-hero-0 p.asi-sub-lead{ display:none !important; visibility:hidden; }
            #asi-fluid-html-hero-0 #asi-hero-btn-wrap{padding-top:10% !important;}
        }
        @media screen and (min-width:768px){
            #asi-fluid-html-hero-0 .asi-content-body{ padding:10px !important;}
            #asi-fluid-html-hero-0 #asi-hero-wrapper{padding:15px 10px !important;}
            #asi-fluid-html-hero-0 #asi-mix-hero h1.asi-display-1{font-size:120px !important;}
        }
        @media screen and (min-width:992px){
            #asi-fluid-html-hero-0 #asi-content-col { max-width:420px; }
            #asi-fluid-html-hero-0 .asi-content-body{ padding:25px 15px 35px 15px !important;}
            #asi-fluid-html-hero-0 #asi-hero-wrapper{padding:40px 0px!important;}
        }
        @media screen and (min-width:1200px){
            #asi-fluid-html-hero-0 #asi-content-col { padding-left:0 !important;max-width:400px; }
            #asi-fluid-html-hero-0 .asi-content-body{ padding:8% 0px 8% 0px !important;}
            #asi-fluid-html-hero-0 #asi-hero-wrapper{padding:40px 0px!important;}
        }
    </style>

    <div id="asi-fixed-html-finance-banner-0"></div>
    <script type="text/javascript">
        /* FINANCE BANNER V2 - RED BG WHITE TEXT */
        $(function(){
            $('#asi-fixed-html-finance-banner-0').asiHero({
                layout : 'fixed',
                responsiveMode : 'responsive',
                dataPosition : '2',
                contentCol : 'col-md-12 col-sm-12 col-xs-12',
                headlineText : '<div id="asi-plus-v1" style="margin:0 auto 15px auto;padding:0;position:relative;max-width:360px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 12"><title>asi-black-white-finance-plus</title><rect y="5.5" width="62" height="1"/><rect x="72.25" width="2" height="12" style="fill:#fff"/><rect x="67.25" y="5" width="12" height="2" style="fill:#fff"/><rect x="84" y="5.5" width="62" height="1"/></svg></div><h2 class="display-1 asi-display-1 text-center">36 MONTHS SPECIAL FINANCING</h2>',
                messageSubText : 'when you use your Value Plus or Signature Plus credit card on purchases <br class="visible-lg">of $2,999 or more made between 8/1/17 - 8/21/17',
                textAlign : 'text-center',
                fontColor : 'white',
                bgColorContent : '#db2c27',
                paddingSection : '0px',
                paddingContent : '25px',
                addButton : 'true',
                buttonText : 'GET DETAILS',
                buttonClass : 'asi-mix-button white',
                buttonLink : '/financing'
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
        #asi-fixed-html-finance-banner-0 h2 { color:white !important; font-size:90px !important; margin-bottom:12px !important;}
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
<!-- BEGIN: ASI 120 Night Slee Guarantee Details Modal -->
<div class="modal fade" id="sleep-guarantee-modal" tabindex="-1" role="dialog" aria-labelledby="sleepGuaranteeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:24px;opacity:.6;">×</button>
                <h4 class="modal-title">120 Night Sleep Guarantee</h4>
            </div>
            <div class="modal-body">
                Modal body content
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0 !important;font-size:16px;letter-spacing:1px;">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END: ASI 120 Night Slee Guarantee Details Modal -->

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

    <div id="asi-pe-html-mix-banner"></div>
    <script type="text/javascript">
        $(function(){
            $('#asi-pe-html-mix-banner').asiHero({
                layout : 'fluid',
                responsiveMode : 'responsive',
                dataPosition : '3',
                urgencyText: '<h1 class="asiH1 asi-h1 display-1 asi-display-1">MIX<br></h1>',
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
                    console.log('mix banner loaded');
                }
            });
        });
    </script>
    <script>
    /* add dark gradient to html mix banner */
    $(function(){
        $('#asi-pe-html-mix-banner .asi-row').before('<div id="asi-mix-gradient"></div>');
        $('#asi-mix-gradient').css({'position':'absolute','width':'100%','height':'100%','z-index':'0'}).addClass('asi-gradient-overlay-dark asi-gradient');
    });
    </script>
    <style>   
    #asi-pe-html-mix-banner .asi-section{padding-bottom:0px !important;}
    .asi-gradient-overlay-dark{        
        background: rgba(18,18,18,0.05);
        background: -moz-linear-gradient(top, rgba(18,18,18,0.05) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(18,18,18,0.05)), color-stop(66%, rgba(18,18,18,0.55)), color-stop(100%, rgba(19,19,19,0.8)));
        background: -webkit-linear-gradient(top, rgba(18,18,18,0.05) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -o-linear-gradient(top, rgba(18,18,18,0.05) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: -ms-linear-gradient(top, rgba(18,18,18,0.05) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        background: linear-gradient(to bottom, rgba(18,18,18,0.05) 0%, rgba(18,18,18,0.55) 66%, rgba(19,19,19,0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#131313', GradientType=0 );
    }
    #asi-pe-html-mix-banner .asi-sub-lead {padding-top:8px !important;}
    #asi-pe-html-mix-banner .asi-mix-button { border:2px solid ##EE3D42 !important;margin-top:2%; }
    #asi-hero-btn-wrap button{padding-top:12px !important;padding-bottom:12px !important;}
    #asi-pe-html-mix-banner {padding-top:25px;}
    @media screen and (max-width:768px){
        .asi-gradient-overlay-dark{        
            background: rgba(0,0,0,0.3);
            background: -moz-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.75) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,0,0,0.2)), color-stop(100%, rgba(0,0,0,0.75)));
            background: -webkit-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.75) 100%);
            background: -o-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.75) 100%);
            background: -ms-linear-gradient(top, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.75) 100%);
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.75) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=0 );
        }
        #asi-pe-html-mix-banner {padding-top:0px;}
    }
    </style>
    <!--[if gte IE 9]<style type="text/css">.asi-gradient {filter: none;}</style><![endif]-->
    
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
    <style>
        .pmd-card-custom-view{border-radius:0 !important;padding-top:0 !important;padding-bottom:10px!important;margin-bottom:10px !important;}
        .asi-display-2, h3.asi-display-2 { color:#121212; }
        #pe-type-id-416b .asi-heading-rule-text{font-size:1.125em !important;}
        .pmd-z-depth-1 {
            box-shadow: 0 3px 6px #CCCCCC, 0 3px 6px #EEEEEE;
        }
        @media screen and (max-width:480px){
            #pe-type-id-416b .asi-heading-rule-text{font-size:18px !important;}
            .pmd-card-custom-view .pmd-card-title{padding-left:6px; padding-right:6px;} 
        }
    </style>

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
                }
            });
        });
    </script>

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
                buttonLink : '/search/on-sale'
            });
        });
    </script>

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
                }
            });
        });
    </script>

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

    <!-- ASI CSS + JS SCRIPTS !-->
    <!-- ASI CSS OVERRIDES - DO NOT ALTER !--> 
	<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-mix-styles.css" />
	<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-mix-styles-main.css" />
    <!-- START : REQUIRED for ASIHERO PLUGIN !-->
    <!-- ASI JS SCRIPTS - DO NOT ALTER !-->
    <script type="text/javascript" src="https://shopvcf.com/js/asi-mix-scripts.js"></script>
    <script type="text/javascript" src="https://shopvcf.com/propeller-md-bootstrap/js/propeller.min.js"></script>
</div>
    

<?php include_once('includes/asiSitePreFooter.php'); ?>
<?php include_once('includes/asiSiteFooter.php'); ?>
