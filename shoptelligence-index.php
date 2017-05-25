 	<script src="https://code.jquery.com/jquery-3.2.1.js"
  			integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  			crossorigin="anonymous"></script>

  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:250,250,600,700,800" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="http://exclusives.vcf.com/scripts/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="http://exclusives.vcf.com/scripts/slick/slick-theme.css">	

  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="http://exclusives.vcf.com/scripts/slick/slick.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">  			

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://shopvcf.com/css/asi-mix-styles-main.css" type="text/css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  	

	<body>
	<style type="text/css">
		#altcolors {
			padding: 1px;
		}


		.filters {
			text-align: center;
		}

		.btn-group {
			padding: 5px;
		}


		#ens2, #ens3, #ens4{	
			display: none;
			width: 100%;
    		margin: auto; 
		}

		.pagination>.active>a, 
		.pagination>.active>a:focus, 
		.pagination>.active>a:hover, 
		.pagination>.active>span, 
		.pagination>.active>span:focus, 
		.pagination>.active>span:hover {
			background-color: #dddddd;
			border-color: #dddddd;
		}

		img#branding {
			max-height: 65px;
			padding-top: 5px;
			padding-bottom: 5px;: 
		}
		.pager a {
			color: #000000;
		}
		.btn-outline {
		    color: #000000;
		    background-color: transparent;
		    border-color: #000000;
		}	
		.addSingleProduct, .addWholeBoard {
			color: #E4002B !important;
			border-color: #E4002B !important;
		}
		.productGrid {
			padding: 0px 0px 20px 0px !important;
		}

		.btn:focus,.btn:active {
		   outline: none !important;
		}	
		#alert {
			margin-bottom: 0px;
			padding-top: 5px;
    		padding-bottom: 5px;	
    		margin-right: 2px;		
		}	

	</style>	

	<div class="asi-section-content asi-section section" id="asi-mix-browse-style" style="padding: 10px 0px 0px 0px;">
	    <div class="container asi-container">
	        <div class="asi-content asi-content-heading">
	            <h3 class="asi-display-3 asi-darker">MIX</h3>
	                <div class="asi-subheading">
	                    <div class="asi-subheading-rule">
	                        <span class="asi-subheading-text text-center">verb (to mix), mixed or mixt, mix-ing</span>
	                    </div>
	                </div>
	        </div>
	    </div>
	</div>

	<div  id="mixboard-ui" style="margin: 10px;">
		<div id='header' class="row">
			<div id="controls"  style="padding: 15px;"  class="col-md-12 btn-toolbar">	
				<button id="next" type="button" class="btn btn-outline pull-right">Next MIX</button>		
				<button id="addWishListAll" type="button" class="btn btn-outline pull-right">
					<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>&nbsp;This MIX
				</button>
				<a href="http://www.valuecityfurniture.com/account/wish-list" target="_self">
					<button type="button" class="btn btn-outline pull-right">
						<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>&nbsp;Wishlist
					</button>	
				</a>			
			</div>
		</div>

		<!-- Start the Featured Product Section-->
		<div id="ens1" class="row">
		  <div class="col-md-3 col-sm-3" style="text-align: center;">
		  	<!-- Anchor Item Space-->
		  	<h4 id="featuredHeadline">Design a room around this item:</h4>
		  	<img data-iid="" class="img-responsive center-block featureImg" src="https://placeholdit.imgix.net/~text?txtsize=30&bg=ffffff&txtclr=000000&w=320&h=320" alt=""/>
		  	<h4>IT’S YOUR WORLD.</h4>
			<p>Experience a new world of furniture shopping—where everything is MADE TO MIX. How will you MIX yours?</p>
		  </div>
		  <div class="col-md-9 col-sm-9">
		  	<div class="row">
		  		<br/>
		  		<!-- Row 1 of the ensemble grid -->
		  		<div id="key1" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key2" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key3" class="col-md-3 col-sm-3 col-xs-6"></div>  		
		  		<div id="key4" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key5" class="col-md-3 col-sm-3 col-xs-6"></div>	
		  		<div id="key6" class="col-md-3 col-sm-3 col-xs-6"></div>		  			  		
		  		<div id="key7" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key8" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div class="clearfix"></div>
		  		<br/>  		  			
		  	</div>
		  </div>
		</div>

		<!-- Start the Featured Product Section-->
		<div id="ens2" class="row">
		  <div class="col-md-3 col-sm-4" style="text-align: center;">
		  	<!-- Anchor Item Space-->
		  	<h4 id="featuredHeadline">Design a room around this item:</h4>
		  	<img data-iid="" class="img-responsive center-block featureImg" src="https://placeholdit.imgix.net/~text?txtsize=30&bg=ffffff&txtclr=000000&w=320&h=320" alt=""/>
		  	<h4>IT’S YOUR WORLD.</h4>
			<p>Experience a new world of furniture shopping—where everything is MADE TO MIX. How will you MIX yours?</p>		  	
		  </div>
		  <div class="col-md-9 col-sm-8">
		  	<div class="row">
		  		<br/>
		  		<!-- Row 1 of the ensemble grid -->
		  		<div id="key1" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key2" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key3" class="col-md-3 col-sm-3 col-xs-6"></div>  		
		  		<div id="key4" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key5" class="col-md-3 col-sm-3 col-xs-6"></div>	
		  		<div id="key6" class="col-md-3 col-sm-3 col-xs-6"></div>		  			  		
		  		<div id="key7" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key8" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div class="clearfix"></div>
		  		<br/>  		  			
		  	</div>
		  </div>
		</div>

		<!-- Start the Featured Product Section-->
		<div id="ens3" class="row">
		  <div class="col-md-3 col-sm-4" style="text-align: center;">
		  	<!-- Anchor Item Space-->
		  	<h4 id="featuredHeadline">Design a room around this item:</h4>
		  	<img data-iid="" class="img-responsive center-block featureImg" src="https://placeholdit.imgix.net/~text?txtsize=30&bg=ffffff&txtclr=000000&w=320&h=320" alt=""/>
		  	<h4>IT’S YOUR WORLD.</h4>
			<p>Experience a new world of furniture shopping—where everything is MADE TO MIX. How will you MIX yours?</p>		  	
		  </div>
		  <div class="col-md-9 col-sm-8">
		  	<div class="row">
		  		<br/>
		  		<!-- Row 1 of the ensemble grid -->
		  		<div id="key1" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key2" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key3" class="col-md-3 col-sm-3 col-xs-6"></div>  		
		  		<div id="key4" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key5" class="col-md-3 col-sm-3 col-xs-6"></div>	
		  		<div id="key6" class="col-md-3 col-sm-3 col-xs-6"></div>		  			  		
		  		<div id="key7" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key8" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div class="clearfix"></div>		  		
		  		<br/>  		  			
		  	</div>
		  </div>
		</div>

		<!-- Start the Featured Product Section-->
		<div id="ens4" class="row">
		  <div class="col-md-3 col-sm-4" style="text-align: center;">
		  	<!-- Anchor Item Space-->
		  	<h4 id="featuredHeadline">Design a room around this item:</h4>
		  	<img data-iid="" class="img-responsive center-block featureImg" src="https://placeholdit.imgix.net/~text?txtsize=30&bg=ffffff&txtclr=000000&w=320&h=320" alt=""/>
		  	<h4>IT’S YOUR WORLD.</h4>
			<p>Experience a new world of furniture shopping—where everything is MADE TO MIX. How will you MIX yours?</p>		  	
		  </div>
		  <div class="col-md-9 col-sm-8">
		  	<div class="row">
		  		<br/>
		  		<!-- Row 1 of the ensemble grid -->
		  		<div id="key1" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key2" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key3" class="col-md-3 col-sm-3 col-xs-6"></div>  		
		  		<div id="key4" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key5" class="col-md-3 col-sm-3 col-xs-6"></div>	
		  		<div id="key6" class="col-md-3 col-sm-3 col-xs-6"></div>		  			  		
		  		<div id="key7" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div id="key8" class="col-md-3 col-sm-3 col-xs-6"></div>
		  		<div class="clearfix"></div>	  		  		
		  		<br/>  		  			
		  	</div>
		  </div>
		</div>
	</div>

		<script type="text/javascript">
		var articleKeysArray;
		var artKeyIndex;
		//var featureImg = $(".au-product-main-images").attr("src").replace("product-650x650","product-350x350");
		var sku = $("span.product-id-label").text();

        var context = [100293,100307,1076833,1077007,1241419,1241427,1265423,1265458,1265466,1267434,1267442,1276557,1276565,1285092,1331752,1332589,1333208,1333224,1333232,1333259,1333275,1333305,1333437,1333445,1333658,1333674,1333712,1333747,1333798,1333828,1334034,1334255,1334263,1334298,1334328,1361023,1368362,1368389,1368397,1368419,1368486,1368494,1368508,1368516,1368524,1368567,1368583,1368605,1368656,1368664,1368672,1368699,1400037,1400606,1400649,1427113,1427229,1440748,1440756,1440772,1443917,1444107,1446142,1446169,1446177,1449303,1449338,1449346,1449915,1449923,1449958,1451057,1451065,1451103,1451294,1453548,1453556,1454463,1454498,1454676,1454684,1454757,1454765,1457322,1457349,1457357,1457365,1461788,1461796,1466089,1466097,1466119,1466178,1466186,1466194,1473603,1473689,1473719,1474138,1474146,1474154,1476637,1476645,1476653,1476688,1476742,1476769,1476777,1481223,1483145,1483153,1483528,1483536,1483668,1483706,1483986,1483994,1484036,1484044,1484095,1484117,1484214,1484222,1484303,1484338,1484346,1484354,1484397,1484419,1486004,1486012,1486322,1486349,1486357,1486586,1486594,1486608,1486616,1486624,1486632,1486667,1497774,1497863,1503278,1503316,1503405,1503987,1507222,1507249,1507273,1507303,1507338,1507346,1508938,1508954,1531263,1531298,1531549,1531557,1531565,1531867,1532499,1532758,1532774,1532782,1533479,1533487,1533495,1533509,1533517,1533525,1533835,1533843,1534068,1534076,1534092,1534106,1534149,1534157,1535668,1535676,1535684,1542257,1547925,1547933,1547968,1547976,1547984,1551345,1551469,1551477,1551485,1555359,1555367,1555375,1555383,1557394,1557408,1557734,1557742]

        var rand = context[Math.floor(Math.random() * context.length)];
        console.log(rand);

		var obj;

		var cKeyOrder;
		var cKey;
		var swatchImgURL;
		var item_id;
		var product_id;
		var pdpURL;		

		var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+rand;

		$.ajax({
			method:"GET",
			dataType: "json",
			url: url,
			success: success_handler,
		});

		function success_handler(data){
		    var obj = data;
			//console.log(obj);

			if (obj == "Unable to suggest any outfits based on the currently selected anchor item(s)") {
			// do nothing; no results found
				$("#mixboard-ui").hide();
			}
			else {
				var ens; 
				// replace the img src of the featured product defaults in the html
				// featured product is always returned in the 0 position
				// of the first ensemble of the response object
				$(".featureImg").attr('src', data[0].ensemble[0].image_url+"?impolicy=product-320x320");	
				// add the data-iid attribute to the featureImg
				$(".featureImg").attr('data-iid', rand);

				for (ens = 0; ens < obj.length; ens++) {
				    var ensemble  = data[ens].ensemble;
					var articleKeysArray0 = data[0].articleKeys;
					var articleKeysArray1 = data[1].articleKeys;
					var articleKeysArray2 = data[2].articleKeys;
					var articleKeysArray3 = data[3].articleKeys;
					if (ens == 0) {
						console.log("ensemble below: "+ens);
						console.log(ensemble);					
						console.log("articleKeysArray below: "+ens);
						console.log(articleKeysArray0);		
						var ensembleNum = 0;				
					}	
					else if (ens == 1) {
						//console.log("ensemble below: "+ens);
						//console.log(ensemble);					
						//console.log("articleKeysArray below: "+ens);
						//console.log(articleKeysArray1);	
						var ensembleNum = 1;					
					}
					else if (ens == 2) {
						//console.log("ensemble below: "+ens);
						//console.log(ensemble);					
						//console.log("articleKeysArray below: "+ens);
						//console.log(articleKeysArray2);	
						var ensembleNum = 2;					
					}		
					else if (ens == 3) {
						//console.log("ensemble below: "+ens);
						//console.log(ensemble);					
						//console.log("articleKeysArray below: "+ens);
						//console.log(articleKeysArray3);	
						var ensembleNum = 3;					
					}																		

					
					// since index[0] of ensemble 0 is the featured product
					// skip to index[1]
					for (i=1; i < ensemble.length; i++) {
						var imgURL = ensemble[i].image_url;
						//var imgIndex = i;
						var cKeyOrder = ensemble[i].canvas_key_order;
						var cKey = ensemble[i].canvas_key.charAt(0).toUpperCase() + ensemble[i].canvas_key.substr(1).toLowerCase();
						var swatchImgURL = ensemble[i].swatch_image_url;
						var item_id = ensemble[i].item_id;
						var product_id = ensemble[i].product_id;
						var pdpURL = 'http://www.valuecityfurniture.com/product/item/'+product_id;

						if (ens == 0) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray0);
							console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex + " data-ensIndex: "+ i);			
						}	
						else if (ens == 1) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray1);
							//console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex);					
						}
						else if (ens == 2) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray2);
							//console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex);						
						}		
						else if (ens == 3) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray3);
							//console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex);					
						}

					  	var boardNum = ens+1;
					  	var selectorStr = "#ens"+boardNum+" div#key"+i;

  				  	  	$(selectorStr).append("<div id='productResults' style='text-align:center;'><button data-iid='"+item_id+"' data-ens='"+ensembleNum+"' data-ensIndex='"+i+"' data-artKeyIndex='"+artKeyIndex+"' type='button' class='btn btn-outline pull-left itemReplace'><span class='glyphicon glyphicon-refresh' aria-hidden='true'></button>&nbsp;<button id='addWishListSingleProduct' data-wishlist='"+item_id+"'' type='button' class='btn btn-outline pull-right'></span><span class='glyphicon glyphicon-heart-empty' aria-hidden='true'></span></button><a href='"+pdpURL+"' target='_blank'><img class='img-responsive center-block productGrid' src='"+imgURL+"?impolicy=product-320x320' alt='image"+i+"' /></a></div>");						
					}
				}
				// Click handler for the Item Replace API Call
				$("div[id^=key]").on('click','button.itemReplace',function(){
					var ensindex = parseInt($(this).data('ensindex'))
					//console.log("articleKeysArray below: ");
					//console.log(articleKeysArray);
					// get the button
					var itemRepalceButton = $(this);
					//console.log("itemRepalceButton: "+itemRepalceButton.attr('data-iid'));
					// build the array of items in the currently visible board
					var itemReplaceList = [];
					$("div[id^=ens]:visible button").each(function(index, element){
						if ($(this).data('iid') != undefined) {
							itemReplaceList.push($(this).data('iid'));
						}
    					
					});
					//console.log(itemReplaceList);
					// item to remove from array
					var removeItem = $(this).attr("data-iid");//parseInt($(this).attr("data-iid"));
					var removeItemArtKey = $(this).attr('data-artKeyIndex');
					console.log("removeItem: "+removeItem+ " removeItemArtKey: "+removeItemArtKey);
					// get item remove index in array
					var removeItemIndex = jQuery.inArray(removeItem, itemReplaceList);
					var newItemIndex = removeItemIndex + 1;
					//console.log("removeItemIndex: "+removeItemIndex);

					// remove the item_id from the array
					//itemReplaceList.splice(removeItemIndex, 1);		
					//console.log(itemReplaceList);

					// add the original featured item_id to the beginning
					//itemReplaceList.unshift(rand);	
					//console.log(itemReplaceList);		

					// find the element to replace selector
					var itemReplace = "#"+$('div[id^=ens]:visible').attr('id')+" div#"+$(this).parent().parent().attr("id")+" img";
					console.log("itemReplace: "+itemReplace);
					// swap with a temporary image
					$(itemReplace).attr('src', 'https://placeholdit.imgix.net/~text?txtsize=30&bg=ffffff&txtclr=000000&txt=Next+Item+Coming+Up&w=320&h=320');
					// selector for the link to wrap around new image
					var itemReplaceLink = "#"+$('div[id^=ens]:visible').attr('id')+" div#"+$(this).parent().parent().attr("id")+" a";

					if ($(this).attr('data-ens') == 0) {
						articleKeysArray0.splice(removeItemArtKey, 1);	
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray0);		
						// make the item replacement call
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray0;
						console.log(url);													
					}	
					else if ($(this).attr('data-ens') == 1) {
						articleKeysArray1.splice(removeItemArtKey, 1);
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray1);	
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray1;
						console.log(url);													
					}
					else if ($(this).attr('data-ens') == 2) {
						articleKeysArray2.splice(removeItemArtKey, 1);
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray2);	
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray2;
						console.log(url);													
					}		
					else if ($(this).attr('data-ens') == 3) {
						articleKeysArray3.splice(removeItemArtKey, 1);
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray3);				
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray3;
						console.log(url);										
					}	
		


					$.ajax({
						method:"GET",
						dataType: "json",
						url: url,
						success: function(data) {
							console.log(data);

							var replaceImgURL = data[1].ensemble[ensindex].image_url;
							console.log(replaceImgURL);
							var cKeyOrder = data[1].ensemble[ensindex].canvas_key_order;
							var swatchImgURL = data[1].ensemble[ensindex].swatch_image_url;
							var new_item_id = data[1].ensemble[ensindex].item_id;
							console.log(item_id);
							var product_id = data[1].ensemble[ensindex].product_id;
							//console.log(product_id);
							var pdpURLreplace = 'http://www.valuecityfurniture.com/product/item/'+product_id;
							console.log(pdpURLreplace);	
							// replace the placeholder image, with replacement item
							$(itemReplace).attr('src', replaceImgURL);	
							// replace link

							//console.log(itemReplaceLink);
							$(itemRepalceButton).attr('data-iid', new_item_id);
							$(itemReplaceLink).attr('href', pdpURLreplace);	

							// add the new index to the array to keep things in sync
							//var newItemIndex = removeItemIndex + 1;
							//itemReplaceList.splice(newItemIndex, 0, parseInt(item_id));
							//console.log("array after adding new product to array:")
							//console.log(itemReplaceList);
							// remove the featured item from the array
							//itemReplaceList.splice(0,1);
							//console.log("array after removing the feature product:");
							//console.log(itemReplaceList);
						},
					});				
				
				});	

				// Click handler for add to wishlist call
				$("div[id^=key]").on('click','button#addWishListSingleProduct',function(){
					// get the item_id of the single product that you want to 
					// add to the cart
					var singleItemWishListAdd = $(this).data("wishlist");
					$(this).addClass("addSingleProduct");
					$(this).parent().addClass("addSingleProduct");

					// show the single product add alert
					// button id="next" 
					// "#mixboard-ui div#header"
					$("button#addWishListAll").after("<div id='alert' class='alert alert-success alert-dismissible pull-right' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Item added to wishlist</strong></div>");

					// close the alert after some time
					setTimeout(function(){
  						$("div#alert").alert('close');
					}, 1500);

					//console.log(singleItemWishListAdd);	

					/*if (singleItemWishListAdd != "") {
						//console.log("singleItemWishListAdd: "+singleItemWishListAdd);
						$.ajax({
							method:"POST",
							url: "http://www.valuecityfurniture.com/api/shoppingcart/add?itemid="+singleItemWishListAdd+"&quantity=1&isCart=false",
							success: function(data) {
								console.log(data.statusCode);

							},
							error: function(data) {
								console.log(data.statusCode);
							}
							
						});
					}	*/							
				});		

				// Click handler for add an entire board to wishlist call
				$("button#addWishListAll").on('click',function(){
					// get the item_id of the single product that you want to 
					$(this).addClass("addWholeBoard");
					$(this).parent().addClass("addWholeBoard");

					// show the single product add alert
					$("button#addWishListAll").after("<div id='alert' class='alert alert-success alert-dismissible pull-right' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>MIX added to wishlist</strong></div>");

					// close the alert after some time
					setTimeout(function(){
  						$("div#alert").alert('close');
					}, 1500);					
					
					var wholeBoardSeletor = "#"+$('div[id^=ens]:visible').attr('id')+" button#addWishListSingleProduct";
					console.log(wholeBoardSeletor);
					$(wholeBoardSeletor).addClass("addWholeBoard");
					$(wholeBoardSeletor).parent().addClass("addWholeBoard");							
				});								
			}			
		}

		// logic to step through ensembles
		$("#next").click(function(){
			$("button#addWishListAll").removeClass("addWholeBoard");
			var currentBoard = $('div[id^=ens]:visible').attr('id');
			var currentBoardSelector = "#"+currentBoard;
			var currentCount = currentBoard.substr(currentBoard.length -1);
			var nextCount = parseInt(currentCount) + 1;
			var nextBoard = "div#ens"+nextCount;
			// count is greater than the max number of boards
			if (nextCount > 4) {			
				$(currentBoardSelector).hide();		
				$('div#ens1').show();			
			}
			// more boards to go, step to next
			else {		
				$(currentBoardSelector).hide();	
				$(nextBoard).show();										
			}
		});
		</script>

  <style>
  .slick-slide img {
    display: inline;
  }
  .slick-prev {
    left: 0px;
    z-index: 999;
  }
  .slick-next {
    right: 0px;
    z-index: 999;
  }
  .slick-prev::before,
  .slick-prev:before {
      content: "\f053";
      color:#54585a;
  }
  .slick-next::before,
  .slick-next:before {
      content: "\f054";
      color:#54585a;
  }
  .slick-prev::before, 
  .slick-next::before,
  .slick-prev:before, 
  .slick-next:before {
    color: #54585a;
    text-rendering: geometricPrecision;
      font-family: "FontAwesome";
      font-family: FontAwesome;
      font-size: 20px;
      line-height: 1;
      opacity: 0.75;
  }
  .category-items-nav > button.slick-prev.slick-arrow {
  	display: none;
  }
  .slick-dots li button::before,
  .slick-dots li button:before {
    color: #54585a;
    content: "\f111";
    font-family: "FontAwesome";
    font-family: FontAwesome;
    font-size: 6px;
    height: 20px;
    left: 0;
    line-height: 20px;
    opacity: 0.25;
    position: absolute;
    text-align: center;
    top: 0;
    width: 20px;
  }
  #pe-container-a5be8c40-4b0a-41f5-b56c-3b5b307961e0 { 
    display:none !important; 
  }
  .slick-slide {
  	height: auto;
  }
  </style>