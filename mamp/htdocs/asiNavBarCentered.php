<?php include_once('asiSiteHeader.php'); ?>
<?php include_once('asiSiteTopNavigation.php'); ?>
	<nav class="navbar navbar-default" role="navigation">
      <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <div class="navbar-brand navbar-brand-centered">Brand</div>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="navbar-brand-centered">
	      <ul class="nav navbar-nav">
	        <li><a href="#">Link</a></li>
	        <li><a href="#">Link</a></li>
	        <li><a href="#">Link</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li><a href="#">Link</a></li>
	        <li><a href="#">Link</a></li>		        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- ASI CSS + JS SCRIPTS !-->
    <div class="row-fluid home-content-row clearfix">
        <div class="pe-type-id-431">
	        <div>
                <!-- ASI CSS OVERRIDES - DO NOT ALTER !--> 
				<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-mix-styles.css" />
				<link rel="stylesheet" type="text/css" href="https://shopvcf.com/css/asi-mix-styles-main.css" />
                <!-- START : REQUIRED for ASIHERO PLUGIN !-->
                <!-- ASI JS SCRIPTS - DO NOT ALTER !-->
                <script type="text/javascript" src="https://shopvcf.com/js/asi-mix-scripts.js"></script>
                <script type="text/javascript" src="http://propeller.in/components/button/js/ripple-effect.js"></script>
			</div>
		</div>
    </div>
    <!-- BOOTSTRAP CSS + JS !-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
		@media screen and (min-width:768px){
		    .navbar-brand-centered {
		        position: absolute;
		        left: 50%;
		        display: block;
		        width: 160px;
		        text-align: center;
		        background-color: #eee;
		    }
		    .navbar > .container .navbar-brand-centered, 
		    .navbar > .container-fluid .navbar-brand-centered {
		        margin-left: -80px;
		    }
		}
	</style>
<?php include_once('includes/asiSitePreFooter.php'); ?>
<?php include_once('includes/asiSiteFooter.php'); ?>
