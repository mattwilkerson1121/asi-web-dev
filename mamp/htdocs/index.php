<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" prefix="og: https://ogp.me/ns#">
<!--<![endif]-->
<head>
    <link id="FavIcon" rel="shortcut icon" type="image/x-icon" href="https://www.valuecityfurniture.com/Content/ValueCityMix/Images/Icons/favicon.ico" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    
    <title>Value City Furniture</title>

    <!-- Hawk CSS & JS -->
    <!-- STYLES -->
    <link href="../../Content/ValueCityMix/styles/styles.css" rel="stylesheet"/>
    <link href="../../Content/ValueCityMix/less/ValueCityMix.min.css" rel="stylesheet"/>
    <!--[if lte IE 9 ]> <link href="https://www.valuecityfurniture.com/Content/ValueCityMix/less/ie9.min.css" rel="stylesheet"/> !-->

    <script src="https://www.valuecityfurniture.com/bundles/polyfill?v=4vju97btl44fCYpr2J_S86cEPp_DduLiRm2_X0cJrjQ1"></script>
    <script src="https://www.valuecityfurniture.com/bundles/jquery?v=dRtwv9vq5lYQ-fR-ADhx2h12SFn-D7_xD0i7xvcnIMI1" type="text/javascript"></script>   
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
    <style>
        button.asi-mix-button.white {
            border: 2px solid #181818;
        }
        button.asi-mix-button.red {
            border: 2px solid #ee3d42;
        }
        .hero{
            position: absolute;
            background-color:#181818;
            top: 50%;
            left: 50%;
            z-index: 3;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 1px 1px 0 rgba(0,0,0,.75);
            -webkit-transform: translate3d(-50%,-50%,0);
            -moz-transform: translate3d(-50%,-50%,0);
            -ms-transform: translate3d(-50%,-50%,0);
            -o-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
        }
        
    </style>
</head>
<body class="antialiased mix-layout">
    <div id="mvcSpinner" class="loading-content-spinner hide"></div>
    <div id="page-container" class="page-container">
        <div class="asi-container-fluid">
        <header class="asi-module-header" style="width:100%;height:50px;">
            <div id="main" class="pull-left">
                <a onclick="openNav()" id="settingsToggle" style="cursor:pointer;"><i class="fa fa-2x fa-cog" aria-hidden="true" style="color:#fff;"></i></a>
            </div>
            <ul class="nav nav-pills nav-inverse pull-left responsiveToggle" id="responsiveToggle">
                <li class="">
                    <a href="" data-responsive="mobile">
                        <i class="fa fa-2x fa-mobile" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a href="" data-responsive="tablet">
                        <i class="fa fa-2x fa-tablet" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="active">
                    <a href="" data-responsive="desktop">
                        <i class="fa fa-2x fa-desktop" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

            <a href="#" id="clearScreen" class="btn btn-inverse pull-right actionButtons nohover disabled">
                <i class="fui-trash"></i> 
                <span>Empty Page</span>
            </a>

            <a href="#previewModal" data-toggle="modal" class="btn btn-inverse pull-right actionButtons nohover disabled" id="buttonPreview">
                <i class="fui-window"></i>
                <span>Preview</span>
            </a>

            <a href="#exportModal" id="exportPage" data-toggle="modal" class="btn btn-inverse pull-right actionButtons nohover disabled">
                <i class="fui-export"></i>
                <span>Export</span>
            </a>

            <a href="#" id="savePage" data-toggle="modal" class="btn btn-primary pull-right nohover disabled">
                <i class="fui-check"></i>
                <span class="bLabel">Save now (!)</span>
            </a>
            </nav>
        </header>
        </div>
        <!--
        <nav class="navbar navbar-default navbar-top" style="padding:0;margin:0 0 10px;border:none;background:#181818;">
            <div class="container-fluid" style="padding:10px 10px 0px;">
                <div class="navbar-header" style="background:#181818;border:none;">
                    <a class="navbar-brand" href="#">&nbsp;&nbsp;ASI Modules&nbsp;&nbsp;</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#" style="font-size:18px;">Home</a></li>
                    <li><a href="#" style="font-size:18px;">Page 1</a></li>
                    <li><a href="#" style="font-size:18px;">Page 2</a></li>
                </ul>
                <div class="navbar-form navbar-left" style="margin:0.75rem 0 0.75rem 2rem;padding:0;">
                    <form action="index.php" name="myForm" method="post" style="padding:0;margin:0;width:100%;">
                        <select tabindex="1" class="asi-modules-select" onchange="window.location.href = this.value" name="select">
                            <option class="asopt" value="">Select A Module</option>
                            <option class="asopt" value="index.php?page=asi-09wk1-hero.php">ASI HERO V1</option>
                            <option class="asopt" value="index.php?page=asi-09wk3-hero.php">ASI HERO V2</option>
                            <option class="asopt" value="index.php?page=asi-10wk1-hero.php">ASI HERO V3</option>
                            <option class="asopt" value="index.php?page=asi-10wk1-home.php">ASI HERO V3 - HOME</option>
                            <option class="asopt" value="index.php?page=asi-10wk1-test-hero.php">ASI HERO V3 - TEST</option>
                        </select>
                    </form>
                    <div id="asi-module-thumbs">
                        <ul class="list-style-none list-none asi-module-thumbs">
                            <li class="hero-thumbs"><a href="#" data-module="asi-09wk1-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V1"></a></li>
                            <li class="hero-thumbs"><a href="#" data-module="asi-09wk3-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V2"></a></li>
                            <li class="hero-thumbs"><a href="#" data-module="asi-10wk1-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V3"></a></li>
                            <li class="hero-thumbs"><a href="#" data-module="asi-10wk1-home.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V3-H"></a></li>
                            <li class="hero-thumbs"><a href="#" data-module="asi-10wk1-test-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V3-T"></a></li>
                        </ul>
                    </div>
                    // php
                        //if(isset($_GET['page'])){
                           // include_once($_GET['page']);
                        //}
                    // php
                </div>
            </div>
        </nav>
        !--> 
        <section class="page-body">
            <div id="page-content" class="container page-content">
                <div id="custom-page-body">
                    <div class="asi-module-content-spot" style="border-bottom:4px solid #f0f0f1;">
                        <div id="asi-hero-content">
                            <img class="img-responsive center-block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Remove_document_icon_%28the_Noun_Project_27892%29.svg/2000px-Remove_document_icon_%28the_Noun_Project_27892%29.svg.png" style="width:100%;max-width:320px;margin:0 auto;opacity:0.375;padding:25px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:#fff;text-align:left;font-family:'Fontawesome';">&#xf053;</a>
        <span style="display:block;border-bottom:1px solid #5d6061;width:100%;height:10px;opacity:0.5;"></span>
        <a href="#" data-module="asi-home-black-friday.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-BIG-EVENT"></a>
        <a href="#" data-module="asi-08wk4.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V0-H"></a>
        <a href="#" data-module="asi-08wk4-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V0"></a>
        <a href="#" data-module="asi-09wk1-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V1"></a>
        <a href="#" data-module="asi-09wk3-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V2"></a>
        <a href="#" data-module="asi-10wk1-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V3"></a>
        <a href="#" data-module="asi-10wk1-home.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V3-H"></a>
        <a href="#" data-module="asi-10wk1-test-hero.php"><img src="http://via.placeholder.com/150x115.png/f0f0f1/6d6d6d?text=HERO-V3-T"></a>
    </div>

    <script>
    function openNav() {
        $("#mySidenav").css("width","250px").addClass("navOpen");
        $("#main").css("margin-left","250px");
        $(".asi-module-header .responsiveToggle, a#settingsToggle").hide();
    }

    function closeNav() {
        $("#mySidenav").css("width","0px").removeClass("navOpen");
        $("#main").css("margin-left","0px");
        $(".asi-module-header .responsiveToggle, a#settingsToggle").show();
    }
    </script>
    <?php include_once("asiSiteFooterCompact.php"); ?>
    <script>
    $(function(){
        $(".sidenav a").click(function(){
            var loadModule = $(this).attr("data-module");
            $( "#asi-hero-content" ).load( loadModule, function( response, status, xhr ) {
              if ( status == "error" ) {
                var errmsg = "Sorry but there was an error: ";
                $( "#asi-hero-content" ).html( errmsg + xhr.status + " " + xhr.statusText );
              }
            });
        });
    });
    </script>
    <style>
    .asi-module-header {
        padding: 0px;
        margin-left: 0px;
        margin-right: 0px;
        width: 100%;
        background: #35495D;
        margin-bottom: 20px;
        box-shadow: 0px 3px 0px rgba(0, 0, 0, 0.05);
    }
    .nav-pills > li > a{ color:#fff !important; }
    .nav-pills > li.active > a,
    .nav-pills > li.active > a:focus,
    .nav-pills > li.active > a:hover,
    .nav > li > a:hover,
    .nav > li > a:focus,
    a#settingsToggle:hover,
    a#settingsToggle:focus {
        color: #fff;
        background-color: #2C3E50 !important;
    }
    .responsiveToggle{
        border-left:1px solid #2f2f2f;
    }
    a#settingsToggle{
        padding:15px 15px 15px 20px;
    }
    .asi-module-content-spot {
        min-height:400px;
        position:relative;
        padding:0 0;
        margin:0 0;
        width:100%;
    }
    .asi-module-thumbs > li{
        margin:0 0.5rem;
        padding:0;
        border:2px solid #eee;
    }
    .asi-module-thumbs > li:hover{
        border:2px solid #d12469;
    }
    .asi-module-thumbs > li.selected{
        border:2px solid #0084b4;
    }
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #009d90;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 50px;
    }

    .sidenav a {
        padding: 8px 8px 8px 16px;
        margin:4px auto;
        text-align:center;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .sidenav a > img {
        border:2px solid #eee;
    }
    .sidenav a:hover > img {
        color: #f1f1f1;
        border:2px solid #0084b4;
    }

    .sidenav .closebtn,
    .sidenav a.closebtn {
        position: absolute;
        top: 0;
        left:5px;
        font-size: 32px;
        margin-left:0px;
        padding:5px 15px 5px 8px;
    }
    #main {
        transition: margin-left .5s;
        padding:10px;
    }
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    select.asi-modules-select {
        font-size: 16px !important;
        background-color: #f0f0f1;
        border: 1px solid #525050;
        color: #2f2f2f;
        height: 32px !important;
        width:300px !important;
        padding-left: 4px;
        padding-top: 1px;
    }
    </style>
</body>
</html>